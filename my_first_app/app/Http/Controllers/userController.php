<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not match";
        }
        else
        {
            return "redirect('/');";
        }

    }
}
