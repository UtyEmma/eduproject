<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {
    
    function index(Request $request){
        $admins = User::paginate();
        return view('pages.admins.index', compact('admins'));
    }

    function destroy(User $user){
        $user->delete();
        toast('User Account Deleted Successfully', 'Success')->success();
        return back();
    }

}
