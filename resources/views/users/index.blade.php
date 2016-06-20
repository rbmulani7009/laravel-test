@extends('app')

@section('content')
@if(isset($managers))
<div class="page-header">
    <h1>Managers <a href="{{ url('/users/create') }}" class="btn btn-sm btn-primary pull-right">Add new User</a></h1>
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
                @foreach($managers as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <a href="{{ url('/users',$user->id) }}">
                            {{ ucfirst($user->name) }}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->type) }}</td>
                    <td>
                        <a href="{{ url('/users',$user->id) }}" class="btn btn-sm btn-primary">View</a> | 
                        <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endif

@if(isset($users))
<div class="page-header">
    <h1>Users</h1>
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
                <tr>
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
@endif

@stop