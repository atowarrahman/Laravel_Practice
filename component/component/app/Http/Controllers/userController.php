<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function viewLoad(){
        return view('user',['user'=>'emon']);
    }

    function Load(){
        $data=['emon','atowar'];
        return view('user',['user'=>$data]);
    }
}
