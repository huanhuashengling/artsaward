<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('instructor/students/index');
    }

    public function list()
    {
        $students = Student::all();
        return $students;
    }
}
