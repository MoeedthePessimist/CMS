<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use App\Models\order;

use App\Models\Feedback;


class AdminController extends Controller
{
    public function getRequests() {
        $data = order::all();
        return view('admin.requests', compact('data'));
    }

    public function getAdminDash() {
        $data = feedback::all();
        return view('admin.adminDash', compact('data'));
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

    public function deleteReq($id) {
        $data=order::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteFeedback($id) {
        $data=feedback::find($id);
        $data->delete();
        return redirect()->back();
    }


}


