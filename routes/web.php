<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("/",[Controller::class,'addDev']);

Route::get("/frontend",[Controller::class,'showData']);

Route::get("/backend",[Controller::class,'showDataBackend']);

Route::get("/fullstack",[Controller::class,'showDataFullstack']);

Route::get("/datascience",[Controller::class,'showDataDataScience']);