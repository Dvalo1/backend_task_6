<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view("products.index", ["products"=>Products::get()]);
        return Products::get();
    }
    public function create() {
        return view("products.create");
    }
    public function edit($id){
        $product = Products::where("id",$id)->firstOrFail();
        return view("products.edit",["product"=>$product]);
    }
    
    public function store(Request $request) {
        Products::create([
            "title"=>$request->input("title"),
            "user_id"=>Auth::user()->id,
            "description"=>$request->input("short_desc"),
        ]);
    }

    public function update(Request $request) {
        Products::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "description"=>$request->input("short_desc")
        ]);
    }
}