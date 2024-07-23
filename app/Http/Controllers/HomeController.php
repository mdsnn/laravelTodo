<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function add_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;

        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imagename);
        $data->image = 'images/'.$imagename;
        $data->save();
        return redirect('/');

    }
    public function show(){
        $data = Product::all();
        return view('product',compact('data'));

    }
    public function delete_product($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function product_update($id){
        $data = Product::find($id);
        return view('product_update', compact('data'));
    }
    public function product_edit(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imagename);
        $data->image = 'images/'.$imagename;
        $data->save();
        return redirect('/');


    }
}
