@extends('maintenance::layouts.pages.main.panel')

@section('header')
    <h1>{{ $title }}</h1>
@stop

@section('panel.head.content')
    <h3 class="panel-title">
        Edit Event
    </h3>
@stop

@section('panel.body.content')

    {{ Form::open(array(
            'url'=>route('maintenance.events.update', array($event->id)),
            'method' => 'PATCH',
            'class'=>'form-horizontal ajax-form-post'
        ))
    }}

    @include('maintenance::events.form', array(
        'event' => $event
    ))

    {{ Form::close() }}

@stop