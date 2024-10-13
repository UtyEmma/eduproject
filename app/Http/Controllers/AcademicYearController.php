<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller {
    
    function index(){
        $academicYears = AcademicYear::latest('year')->paginate();
        return view('pages.academic-years.index', compact('academicYears'));
    }

    function destroy(AcademicYear $academicYear) {
        $academicYear->delete();
        toast('Academic Year Deleted Successfully', 'Success')->success();
        return back();
    }

}
