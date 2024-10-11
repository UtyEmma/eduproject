<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    
    function index(){
        $students = Student::with('school', 'zone', 'lga')->paginate();
        return view('pages.students.index', compact('students'));
    }
    
    function create(){
        return view('pages.students.create');
    }



}
