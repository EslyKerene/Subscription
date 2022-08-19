<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//use App\Http\Controllers\Auth\loginController;
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


Auth::routes();
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
 Route::post('auth/login', 'Auth\AuthController@postLogin');
 Route::get('auth/logout', 'Auth\AuthController@getLogout');
 
// // Registration routes...
 Route::get('auth/register', 'Auth\AuthController@getRegister');
 Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/details', function () {
   return view('users.details');
});
Route::get('/', function () {
    return view('users.welcome');
});
Route::get('/home', function () {
    return view('users.home');
});
// Route::get('/register', function () {
//     return view('register');
// });
