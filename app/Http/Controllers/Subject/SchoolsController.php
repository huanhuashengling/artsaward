<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\School;

use \Auth;

class SchoolsController extends Controller
{
    public function index()
    {
        return view('subject/schools/index');
    }

    public function list()
    {
        $schools = School::all();
        return $schools;
    }
}
