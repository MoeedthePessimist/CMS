<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use App\Models\Review;

use App\Models\cart;

use App\Models\order;

use App\Models\Feedback;


use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    public function redirects() {
        $data = item::all();
        return view('landing')->with('data', $data);
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



    public function addToCart ($prod_id, $user_id) {
        $cart = new cart;
        $product = (DB::table('items')->where('id', $prod_id)->get())[0];
        // return dd($product);
        $cart->productID = $prod_id;
        $cart->userID = $user_id;
        $cart->title = $product->Title;
        $cart->price = $product->Price;
        $cart->image = $product->image;
        $cart->save();
        return redirect()->back();
    }


    public function viewCart($user_id) {
        $data = (cart::where('userID', $user_id) -> get());
        $total = 0;
        // return dd($data);
        foreach($data as $data) {
            $total = ((int) $data->price) + $total;
        }
        // return dd($total);
        return view('user.cart', compact("total"));
    }
    
    public function deleteFromCart($id) {
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function addOrder(Request $request) {
        $data = new order;
        $data -> Name = $request->name;
        $data -> Email = $request->email;
        $data -> payment = $request->payment;
        $data -> save();
        cart::where('userID', $request->userID)->delete();
        return redirect('/shop');
    }


    public function addFeedback(Request $request) {
        $data = new feedback;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

}
