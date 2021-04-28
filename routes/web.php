<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\httpPractice;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello', function () {
//     return view('hello');
// });
Route:: view('hello', 'hello');// route shortcut
Route:: view('noacess','noacess');
Route:: view('login','form');
Route:: view('ReguesthttpView','httpRequestView');

Route:: post('users', [users::class, 'getData']);
Route:: get('Reguesthttp',[httpPractice::class, 'httpRequest']);

Route::get('/logout', function () {
   if(session()->has('email')){
        session()->pull('email');
   }
   return redirect('login');
});
