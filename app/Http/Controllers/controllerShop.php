<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerShop extends Controller
{
     public function index() {
        return view('shop.index');
    }
}