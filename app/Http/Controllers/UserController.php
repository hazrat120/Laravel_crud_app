<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class UserController extends Controller
{
    //
    public function users(){
        $users = DB::select('select * from users');
        return view("toys.users", ['users' => $users]);
    }

    public function students(){
        $students = DB::select('select * from table_students');
        return view('toys.student', compact('students'));
    }


    public function postshow(){
        $posts = User::with('posts')->get();
        return view('toys.post', compact('posts'));
    }
}
