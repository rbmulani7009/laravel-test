@extends('app')

@section('content')
<div class="page-header">
    <h1>Add New User</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-1">
            {!! Form::open(['url'=>'users','class'=>'form-horizontal']) !!}
            
            @include('errors.list')
            
            @include('users.form',['submitButton'=>'Create User'])
            
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop