<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function addCategory(Request $req){
        $formData = $req->validate([
            "name" => ['min:3','max:40','string','required'],
            "image" => ['mimes:png,jpg,jpeg','required']
        ]);

        // store image in the local storage
        $formData['image'] = $req->file('image')->store('category_images','public');
        // inserts the data into the database
        Category::create($formData);

        return back()->with('message','Category added successfully!');

    }




    // get data from the backend

    public function getCategories(){
        $categories = Category::all();
        $products = Products::all();
        // where to show the data
        return view('welcome',compact('categories','products'));
    }



}
