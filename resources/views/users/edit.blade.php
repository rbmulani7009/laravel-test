@extends('app')

@section('content')
<div class="page-header">
    <h1>Edit Task : {{ $user->name }} </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-1">
            {!! Form::model($user,['method' => 'PATCH','url'=>'users/'.$user->id,'class'=>'form-horizontal']) !!}

            @include('errors.list')

            @include('users.form',['submitButton'=>'Update User'])

            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop