@extends('app')

@section('content')
<div class="page-header">
    <h1>Tasks 
        <a href="#" class="btn btn-sm btn-primary pull-right">Add new</a>
    </h1>
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
                    <td>
                        <a href="{{ url('/tasks',$task->id) }}">
                            {{ ucfirst($task->name) }}
                        </a>
                    </td>
                    <td>{{ $task->description }}</td>
                    <td>{{ ucfirst($task->taskType) }}</td>
                    <td>
                        <a href="{{ url('/tasks',$task->id) }}" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@stop