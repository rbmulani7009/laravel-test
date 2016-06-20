@extends('app')

@section('content')

<div class="row jumbotron">
    @if(isset($managers))
    <div class="col-lg-3">
        <h2>Managers </h2>
        <p>{{ $managers }}</p>
    </div>
    @endif
    @if(isset($users))
    <div class="col-lg-3">
        <h2>Users </h2>
        <p>{{ $users }}</p>

    </div>
    @endif
    @if(isset($managerTasks))
    <div class="col-lg-3">
        <h2>Manager's Tasks </h2>
        <p>{{ $managerTasks }}</p>

    </div>
    @endif
    @if(isset($userTasks))
    <div class="col-lg-3">
        <h2>User's Tasks </h2>
        <p>{{ $userTasks }}</p>
    </div>
    @endif

</div>

@stop