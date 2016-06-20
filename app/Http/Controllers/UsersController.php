<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\User;
use Auth;
use App\Task;

class UsersController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        $userType = Auth::user()->type;
        if ($userType == "admin") {
            $data['managers'] = User::where('type', 'manager')->get();
            $data['users'] = User::where('type', 'user')->get();
        }
        if ($userType == "manager") {
            $data['users'] = User::where('type', 'user')->get();
        }
        if ($userType == "user") {
            return response('Unauthorized.', 401);
        }

        return view('users.index', $data);
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function show($id) {
        $user = User::findorFail($id);
        $tasks = Task::where('assignedTo', $id)->get();

        return view('users.show', compact('user', 'tasks'));
    }

    public function create() {
        $userType = Auth::user()->type;
        if ($userType == "user" || $userType == "manager" ) {
            return response('Unauthorized.', 401);
        }
        return view('users.create');
    }

    public function store(UserRequest $request) {

        $data = Request::all();
        $data['color'] = ($data['type'] == 'user') ? "red" : "blue";

        User::create($data);

        return redirect('users');
    }

    public function edit($id) {

        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update($id, UserRequest $request) {

        $task = User::findOrFail($id);

        $task->update(Request::all());

        return redirect('users');
    }

}
