<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/profile', [PageController::class, 'profile']);
Route::post('/masuk', [PageController::class, 'masuk']);
Route::post('/daftar', [PageController::class, 'daftar']);
