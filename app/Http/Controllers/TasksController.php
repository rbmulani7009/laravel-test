<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\User;
use App\Task;
use Auth;

class TasksController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $userType = Auth::user()->type;

        if ($userType == "admin" || $userType == "manager") {
            $tasks = Task::latest()->get();
        } else {
            $tasks = Task::where(['taskType' => 'user', 'assignedTo' => Auth::user()->id])->get();
        }

        return view('tasks.index', compact('tasks'));
    }

    public function show($id) {
        $task = Task::findorFail($id);

        return view('tasks.show', compact('task'));
    }

    public function create() {
        $userType = Auth::user()->type;

        if ($userType == "user") {
            return response('Unauthorized.', 401);
        }
        $users = User::where('type', 'user')->orWhere('type', 'manager')->orderBy('name')->lists('name', 'id');

        return view('tasks.create', compact('users'));
    }

    public function store(TaskRequest $request) {

        Task::create(Request::all());

        return redirect('tasks');
    }

    public function edit($id) {
        $userType = Auth::user()->type;

        if ($userType == "user") {
            return response('Unauthorized.', 401);
        }

        $users = User::where('type', 'user')->orWhere('type', 'manager')->orderBy('name')->lists('name', 'id');

        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task', 'users'));
    }

    public function update($id, TaskRequest $request) {

        $task = Task::findOrFail($id);

        $task->update(Request::all());

        return redirect('tasks');
    }

}
