<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class AdminController extends Controller
{
    public function getRequests() {
        return view('admin.requests');
    }

    public function getAdminDash() {
        return view('admin.adminDash');
    }

    public function getItems() {
        $data = item::all();
        return view('admin.items', compact("data"));
    }

    public function addItems() {
        return view('admin.addItems');
    }

    public function upload(Request $request) {
        $data = new Item;

        $image = $request->img;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->img-> move('productimages', $imagename);

        $data -> image = $imagename;
        $data -> Title = $request->title;
        $data -> Price = $request->price;
        $data -> description = $request->description;
        $data -> manufacturer = $request->manufacturer;
        $data -> category = $request->category;
        $data -> save();

        return redirect()->back();
    }

    public function delete($id) {
        $data=item::find($id);
        $data->delete();
        return redirect()->back();
    }

}

