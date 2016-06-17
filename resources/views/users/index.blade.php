@extends('app')

@section('content')
<div class="page-header">
    <h1>Users</h1>
    <p><strong>Note:</strong> Color defines type of users </p>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr style="color: {{ $user->color }}">
                    <td>{{ $user->id }}</td>
                    <td>
                        <a href="{{ url('/users',$user->id) }}">
                            {{ ucfirst($user->name) }}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->type) }}</td>
                    <td><a href="{{ url('/users',$user->id) }}" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@stop