<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        Category::create($formData);

    }
}
