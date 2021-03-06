@extends('app')

@section('content')
<div class="page-header">
    <h1>Add New Task</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-1">
            {!! Form::open(['url'=>'tasks','class'=>'form-horizontal']) !!}
            
            @include('errors.list')
            
            @include('tasks.form',['submitButton'=>'Add Task'])
            
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop