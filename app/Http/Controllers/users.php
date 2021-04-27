<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //
    public function getData(Request $req){
        $req->validate([
            'email'=>'required | max:50',
            'password'=>'required | min:5'
        ]);
      return $req->input();
    }
}
