<legend class="margin-top-10">Work Order Information</legend>

<div class="form-group">
    <label class="col-sm-2 control-label">Category</label>

    <div class="col-md-4">
        @include('maintenance::select.work-order-category', array(
              'category_name'=>(isset($workOrder) ? ($workOrder->category ? $workOrder->category->name : NULL) : NULL),
              'category_id'=>(isset($workOrder) ? ($workOrder->category ? $workOrder->category->id : NULL) : NULL)
          ))
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Location</label>

    <div class="col-md-4">
        @include('maintenance::select.location', array(
              'location_name'=>(isset($workOrder) ? ($workOrder->location ? $workOrder->location->name : NULL) : NULL),
              'location_id' => (isset($workOrder) ? ($workOrder->location ? $workOrder->location->id : NULL) : NULL),
          ))
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Status</label>

    <div class="col-md-4">
        @include('maintenance::select.status', array(
            'status'=> (isset($workOrder) ? $workOrder->status->id : NULL)
        ))
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Priority</label>

    <div class="col-md-4">
        @include('maintenance::select.priority', array(
            'priority'=> (isset($workOrder) ? $workOrder->priority->id : NULL)
        ))
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Assets Involved</label>

    <div class="col-md-4">
        @include('maintenance::select.assets', array(
            'assets'=> (isset($workOrder) ? $workOrder->assets->lists('id') : NULL)
        ))
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Subject</label>

    <div class="col-md-4">
        {{ Form::text('subject', (isset($workOrder) ? $workOrder->subject : NULL), array('class'=>'form-control', 'placeholder'=>'ex. Worked on HVAC')) }}
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Description / Details</label>

    <div class="col-md-4">
        {{ Form::textarea('description', (isset($workOrder) ? htmlspecialchars($workOrder->description) : NULL), array('class'=>'form-control', 'style'=>'min-width:100%','placeholder'=>'ex. Added components')) }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ Form::submit('Save', array('class'=>'btn btn-primary')) }}
    </div>
</div>