<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\User;
use App\Task;
use Auth;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $userType = Auth::user()->type;
        if ($userType == "admin") {
            $data['managers'] = User::where('type', 'manager')->count();
            $data['users'] = User::where('type', 'user')->count();
            $data['managerTasks'] = Task::where('taskType', 'manager')->count();
            $data['userTasks'] = Task::where('taskType', 'user')->count();
        }
        if ($userType == "manager") {
            $data['users'] = User::where('type', 'user')->count();
            $data['userTasks'] = Task::where('taskType', 'user')->count();
        }
        if ($userType == "user") {
            $data['userTasks'] = Task::where(['taskType' => 'user', 'assignedTo' => Auth::user()->id])->count();
        }

        return view('home.index', $data);
    }

}
