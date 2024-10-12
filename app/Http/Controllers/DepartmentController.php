<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller {
    
    function index(){
        $departments = Department::withCount('subjects')->latest()->paginate();
        return view('pages.departments.index', compact('departments'));
    }

    function destroy(Department $department) {
        $department->delete();
        toast('Department Deleted Successfully', 'Success')->success();
        return back();
    }

}
