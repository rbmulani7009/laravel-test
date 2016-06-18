<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Task;

class TasksController extends Controller {

    public function __construct() {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function show($id) {
        $task = Task::findorFail($id);

        return view('tasks.show', compact('task'));
    }
    
    public function create() {
        
        return view('tasks.create');
    }

}
