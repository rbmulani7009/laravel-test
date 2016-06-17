@extends('app')

@section('content')
<div class="page-header">
    <h1>{{ ucfirst($user->name) }}</h1>
    <p>Email : {{ $user->email }}</p>
    <p>Type : {{ ucfirst($user->type) }}</p>
</div>
<div class="page-header">
    <h1>Tasks</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ ucfirst($task->name) }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ ucfirst($user->taskType) }}</td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@stop