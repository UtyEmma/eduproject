<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    
    function index(){
        $students = Student::with('school', 'class', 'zone', 'lga')->paginate();
        return view('pages.students.index', compact('students'));
    }
    
    function create(){
        return view('pages.students.create');
    }
    
    function edit(Student $student){
        // $guardians = $student->guardians->toArray();
        return view('pages.students.create', compact('student', ));
    }
    
    function destroy(Student $student){
        // Delete Guardians as well
        return $student->delete();
    }



}
