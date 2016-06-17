<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Task;

class DashboardController extends Controller {

    public function __construct() {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        
        $managers = User::where('type', 'manager')->count();
        $users = User::where('type', 'user')->count();
        $managerTasks = Task::where('taskType', 'manager')->count();
        $userTasks = Task::where('taskType', 'user')->count();

        return view('dashboard.index',  compact('managers','users','managerTasks','userTasks'));
    }

}
