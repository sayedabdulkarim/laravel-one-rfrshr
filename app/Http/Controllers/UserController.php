<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function register(Request $request){
        echo $request->input('name');
        echo $request->input('email');
        echo $request->input('password');

        $incomingFields = $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
        // return 'Thank you for registering';
    }

    function logout(){
        auth()->logout();
        return redirect('/');
    }
}
