<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller {
    public function index() {
        echo "Hello! This is homeController@index";
    }

    public function services() {
        return view("home.services");
    }

    public function products() {
        return view("home.products");
    }

    public function team() {
        return view("home.team");
    }
}

?>