<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index() {
        echo "This is testController@index";
    }

    public function test() {
        $users = [1,2,3,4,5,6,7,56,45,434,334,34,34,44,45,45,454,44657];
        $name = "krtik";
        return view("call", compact("users", "name")); 
    }
}
