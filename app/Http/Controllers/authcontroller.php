<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{ 
    public function register(){
        return view("register");

    }

    public function welcome(Request $req){
        return view("welcome", [
          "firts_nama" => $req->query("first_nama"),
          "last_nama" => $req->query("last_nama")   
        ]);
    }
}