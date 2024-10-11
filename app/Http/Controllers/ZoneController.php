<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller {
    
    function index(){
        $zones = Zone::withCount('lgas')->paginate();
        return view('pages.zones.index', compact('zones'));
    }
    
    function show(Zone $zone){
        
        return view('pages.zones.show', compact('zone'));
    }
    
    function schools(Zone $zone){
        $zones = Zone::withCount('lgas')->paginate();
        return view('pages.zones.schools', compact('zones'));
    }
    
    function lgas(Zone $zone){
        $zone->load([
            'lgas' => function($query){
                return $query->withCount('schools');
            }
        ]);

        return view('pages.zones.lgas', compact('zone'));
    }

    function destroy(Zone $zone) {
        $lgas = $zone->lgas;
        $zone->delete();
    }

}
