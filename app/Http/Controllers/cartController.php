<?php

namespace App\Http\Controllers;

use App\Models\cartModal;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function addToCart(Request $req){
        $user_id = auth()->user()->id;
        $formFields = $req->validate([
            "image" => 'required',
            "name" => 'required',
            "price" => 'required',
            "quantity" => 'required',
        ]);
        $formFields['user_id'] = $user_id;


        cartModal::create($formFields);
        return back()->with('message','Added to cart');

        

    }
}
