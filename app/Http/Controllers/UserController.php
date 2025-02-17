<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
