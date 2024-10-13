<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    function index(){
        $classes = Classes::withCount('students')->latest()->paginate();
        return view('pages.classes.index', compact('classes'));
    }

    function show(Classes $class){
        $class->loadCount('subjects', 'students');
        return view('pages.classes.show', compact('class'));
    }
    
    function students(Classes $class) {
        $class->load('students');
        return view('pages.classes.students', compact('class'));
    }
    
    function subjects(Classes $class) {
        $class->load('subjects');
        return view('pages.classes.subjects', compact('class'));
    }

    function destroy(Classes $class) {
        $class->delete();
        return back();
    }

}
