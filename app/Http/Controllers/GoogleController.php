<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    //Metódo que carrega a view 
    public function index(Request $request){
        return view("auto-complete");
    }
}
