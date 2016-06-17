@extends('app')

@section('content')

<div class="row jumbotron">
    <div class="col-lg-3">
        <h2>Managers </h2>
        <p>{{ $managers }}</p>
    </div>
    <div class="col-lg-3">
        <h2>Users </h2>
        <p>{{ $users }}</p>

    </div>
    <div class="col-lg-3">
        <h2>Manager's Tasks </h2>
        <p>{{ $managerTasks }}</p>

    </div>
    <div class="col-lg-3">
        <h2>User's Tasks </h2>
        <p>{{ $userTasks }}</p>
    </div>

</div>

@stop