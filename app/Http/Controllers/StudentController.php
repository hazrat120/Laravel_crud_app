<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //one to one relation
    public function studentshow(){
        $students = Student::with('contact')->get();
        return view('toys.student', compact('students'));

    }
    
    /* public function contactShow(){
        $contacts = Contact::with('student')->get();
        return $contacts;
    } */
}
