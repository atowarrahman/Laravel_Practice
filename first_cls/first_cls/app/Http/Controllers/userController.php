<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function show($name){
        return view('user',["name"=>$name]);
    }
}
