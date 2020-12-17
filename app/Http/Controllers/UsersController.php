<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'tasklist' => $tasklist,
        ]);
    }
        
    public function show($id)
    {
        $user = User::findOrFail($id);
        $tasklist = $user->tasklist()->orderBy('created_at', 'desc')->paginate(10);

        return view('users.show', [
            'user' => $user,
            'tasklist' => $tasklist,
        ]);
    }
}
