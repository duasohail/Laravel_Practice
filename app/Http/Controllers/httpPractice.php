<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpPractice extends Controller
{
    public function httpRequest(){
        return  Http::get('https://jsonplaceholder.typicode.com/users');
    }
}
