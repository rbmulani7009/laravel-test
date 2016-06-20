@extends('app')

@section('content')
<div class="page-header">
    <h1>{{ ucfirst($task->name) }}</h1>
    <label>  Description : </label>
    <p>{{ $task->description }}</p>
    <label>  Type : </label>
    <p>{{ ucfirst($task->taskType) }}</p>
    <label>  Assigned To : </label>
    <p>{{ $task->user->email }}</p>
</div>

@stop