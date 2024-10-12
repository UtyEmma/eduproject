<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller {
    

    function index(){
        $schools = School::with(['zone', 'lga'])->paginate();
        return view('pages.schools.index', compact('schools'));
    }

    

}
