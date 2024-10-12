<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function index(){
        $subjects = Subject::latest()->paginate();
        return view('pages.subjects.index', compact('subjects'));
    }

    function destroy(Subject $subject){
        $subject->delete();
        toast('Subject Deleted Successfully!', 'Success')->success();
        return back();
    }
}
