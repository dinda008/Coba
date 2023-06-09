<?php

use App\Http\Controllers\ManagementUserController;
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

// Route::get("user", [ManagementUserController::class,'index']);
// Route::get("/user", 'ManagementUserController');

// Route::resource('user',ManagementUserController::class);

Route::get("/home", function(){
    return view("home");
});

Route::resource("/user", ManagementUserController::class);