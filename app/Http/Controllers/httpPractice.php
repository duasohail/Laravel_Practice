<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpPractice extends Controller
{
    public function httpRequest(){
        $collection=  Http::get('https://reqres.in/api/users?page=1');
        return view('httpRequestView', ['collection'=> $collection['data']]);
    }
}
