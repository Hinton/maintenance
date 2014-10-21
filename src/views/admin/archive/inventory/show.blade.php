@extends('maintenance::layouts.admin')

@section('header')
	<h1>{{ $title }}</h1>
@stop

@section('breadcrumb')
<li>
    <a href="{{ route('maintenance.admin.archive.index') }}">
        <i class="fa fa-archive"></i>
        Archive
    </a>
</li>
<li>
    <a href="{{ route('maintenance.admin.archive.inventory.index') }}">
        <i class="fa fa-dropbox"></i> 
        Inventory
    </a>
</li>
<li class="active">
    {{ $item->name }}
</li>
@stop

@section('content')

<div class="panel panel-default">
    
    <div class="panel-heading">
        <h3 class="panel-title">Limited View While viewing in Archive</h3>
    </div>
    
    <div class="panel-body">
         <a href="{{ route('maintenance.admin.archive.inventory.restore', array($item->id)) }}" 
            data-method="post"
            data-title="Restore Item?"
            data-message="Are you sure you want to restore this item?" 
            class="btn btn-app">
             <i class="fa fa-refresh"></i> Restore
        </a>
        
        <a href="{{ route('maintenance.admin.archive.inventory.destroy', array($item->id)) }}" 
            data-method="delete"
            data-title="Delete Item?"
            data-message="Are you sure you want to delete this item? All data for this item will be lost, and won't be recoverable." 
            class="btn btn-app">
             <i class="fa fa-trash-o"></i> Delete (Permanent)
        </a>
        
        <hr>
        
        @include('maintenance::inventory.tabs.profile.description', array(
            'item'=>$item
        ))
        
        <legend>More Information:</legend>
            
        <dl class="dl-horizontal">
            <dt>Current Stock:</dt>
            <dd>{{ $item->current_stock }}</dd>
            
            <p></p>
            
            <dt>Stock Per Location:</dt>
            <dd>
                @if($item->stocks->count() > 0)
                <ul class="list-unstyled">
                    @foreach($item->stocks as $stock)
                    <li>{{ renderNode($stock->location) }} : {{ $stock->quantity }}</li>
                    @endforeach
                </ul>
                @else
                <em>None</em>
                @endif
            </dd>
            
            <p></p>
        </dl>
        
    </div>
    
</div>
                

@stop