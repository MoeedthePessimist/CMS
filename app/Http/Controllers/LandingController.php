<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Item;


class LandingController extends Controller
{
    public function index() {
        $data = item::all();
        return view('landing')->with('data', $data);
    }

    public function navOption(){
        if(Auth::check()){
            if(Auth::user()->userType == '1'){
                return ("
                    Admin Panel
                ");
            }
        }
    }
}
