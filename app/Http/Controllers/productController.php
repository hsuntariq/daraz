<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function addProduct(Request $req){
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "desc" => ['required','min:3'],
            "price" => ['required','min:3'],
            "old_price" => ['required','min:3'],
            "image" => ['required'],
        ]);

        $formFields['image'] = $req->file('image')->store('product_images','public');
        Products::create($formFields);
        return back()->with('message','Added product successfully');


    }



    public function findProduct($id){
        $product = Products::find($id);
        return view('pages.user.single-product',compact('product'));
    }



}
