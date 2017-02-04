<?php

namespace App\Models\Traits;

trait SelectHierarchyTrait
{
    /**
     * Returns the complete nested set table in a nested list.
     *
     * @param string $belongsTo
     *
     * @return array
     */
    public static function getSelectHierarchy($belongsTo = null)
    {
        $query = new self;

        // Add the scope if required.
        if ($belongsTo != null) {
            $query->belongs_to = $belongsTo;
        }

        $nestedList = $query->getNestedListScoped('name', 'id', '-- ');

        // Trim away the unnecessary spaces (i.e. "-- -- Test" becomes "---- Test")
        $nestedList = array_map(function ($item) {
            return str_replace(' --', '--', $item);
        }, $nestedList);

        // Add the option for None.
        $options = [0 => 'None'] + $nestedList;

        return $options;
    }

    /**
     * Extend the provided getNestedList from Baum to support scopes.
     * We simply changed all occupancies of $instance to $this.
     *
     * @param $column
     * @param null $key
     * @param string $seperator
     * @return array
     */
    public function getNestedListScoped($column, $key = null, $seperator = ' ')
    {
        $key = $key ?: $this->getKeyName();
        $depthColumn = $this->getDepthColumnName();

        $nodes = $this->newNestedSetQuery()->get()->toArray();

        return array_combine(array_map(function ($node) use ($key) {
            return $node[$key];
        }, $nodes), array_map(function ($node) use ($seperator, $depthColumn, $column) {
            return str_repeat($seperator, $node[$depthColumn]) . $node[$column];
        }, $nodes));
    }
}
