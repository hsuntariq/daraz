<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function SignUp(Request $req){
        $formFields = $req->validate([
            "name" => ['required'],
            "phone_number" => ['required','min:13'],
            "email" => ['required','email'],
            "password" => ['required','min:6']
        ]);
        
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','Welcome ' . auth()->user()->name);


    }

    public function SignOut(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        return redirect('/')->with('message','Hoping to see you again');
    }

public function SignIn(Request $req){
        $formFields = $req->validate([
            "email" => ['required','email'],
            "password" => ['required','min:6']
        ]);
        
       
        if(auth()->attempt($formFields)){
            $req->session()->regenerateToken();
            return redirect('/')->with('message','Welcome ' . auth()->user()->name);
        }else{
            return back()->with('message','Invalid Credentials');
        }
        
     


    }


}
