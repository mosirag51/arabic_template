<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\hr;
use Illuminate\Support\Facades\Route;

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
Route::get('/maash', function () {
    return view('maash');
});

Route::get('/hr', function () {
    return view('hr');
});

Route::get('/tawid', function () {
    return view('tawid');
});

Route::get('/complaint', function () {
    return view('complaints');
});
