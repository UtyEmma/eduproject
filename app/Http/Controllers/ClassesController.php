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

    function destroy(Classes $class) {
        $class->delete();
        return back();
    }

}
