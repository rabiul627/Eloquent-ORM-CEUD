<?php

use Illuminate\Support\Facades\Route;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
    
//     // $users = new user;
//     $users = DB::table('users')->get();
//     return $users;
    
// });

Route::resource('/user', UserController::class);