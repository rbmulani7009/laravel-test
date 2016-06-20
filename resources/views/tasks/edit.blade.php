@extends('app')

@section('content')
<div class="page-header">
    <h1>Edit Task : {{ $task->name }} </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-1">
            {!! Form::model($task,['method' => 'PATCH','url'=>'tasks/'.$task->id,'class'=>'form-horizontal']) !!}
            
            @include('errors.list')
            
            @include('tasks.form',['submitButton'=>'Update Task'])
            
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop