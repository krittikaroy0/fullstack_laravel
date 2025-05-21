<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(){
        echo "got it";
        return view('home');
    }
    public function service(){
        return view('home');
    }
}
