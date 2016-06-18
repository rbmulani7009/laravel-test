<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Task;

class UsersController extends Controller {

    public function __construct() {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        $managers = User::where('type', 'manager')->get();
        $users = User::where('type', 'user')->get();

        return view('users.index',  compact('users','managers'));
    }
    
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function show($id) {
        $user = User::findorFail($id);
        $tasks = Task::where('assignedTo',$id)->get();

        return view('users.show',  compact('user','tasks'));
    }

}
