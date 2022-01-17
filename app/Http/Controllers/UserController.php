<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use App\Models\Review;


use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    public function redirects() {
        return view('landing');
    }

    public function viewShop() {
        $data = item::all();
        return view('user.shop', compact("data"));
    }

    public function viewProduct($prod_id) {
        $data=item::find($prod_id);
        $reviews = DB::table('reviews')->where('productid', $prod_id)->get();
        // return dd($reviews[0]);
        return view('user.productinfo', compact("data", "reviews"));
    }


    public function upload(Request $request) {
        $data = new Review;

        $data -> name = $request->name;
        $data -> review = $request->review;
        $data -> productid = $request->id;
        $data -> save();

        return redirect()->back();
    }

    // public function viewProduct() {
    //     return view('user.productinfo');
    // }
    
    

}
