<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || ($user->password != $request->password)){
            return back()->with('errorMsg', "Your Email and Password is invalid") ;
        }
        else{
            session()->put('user', $user);
            return redirect('/');
        }
    }


    /**
     * logout
     */

     public function logout(){
        // if(session()->exists('user'))
     }
}
