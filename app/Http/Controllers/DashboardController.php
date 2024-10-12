<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\LocalGovernment;
use App\Models\School;
use App\Models\Student;
use App\Models\Zone;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    
    function index(){
        $students = Student::count();
        $guardians = Guardian::count();
        $zones = Zone::count();
        $lgas = LocalGovernment::count();
        $schools = School::count();
        return view('dashboard', compact('students', 'guardians', 'zones', 'lgas', 'schools'));
    }

}
