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
Route::get('/home', [PageController::class, 'home']);
Route::get('/tulis', [PageController::class, 'tulis']);
Route::get('/addTweet', [PageController::class, 'addTweet']);
Route::get('/search', [PageController::class, 'search']);
Route::get('/following', [PageController::class, 'following']);
Route::get('/followers', [PageController::class, 'followers']);
Route::get('/logout', [PageController::class, 'logout']);
Route::post('/masuk', [PageController::class, 'masuk']);
Route::post('/daftar', [PageController::class, 'daftar']);
Route::post('/hapusAkun', [PageController::class, 'hapusAkun']);
Route::post('/updateProfile', [PageController::class, 'updateProfile']);
Route::post('/add', [PageController::class, 'add']);
Route::post('/follow', [PageController::class, 'follow']);
Route::post('/deleteTweet', [PageController::class, 'deleteTweet']);
Route::post('/deletFollower', [PageController::class, 'deleteFollower']);
Route::post('/detail', [PageController::class, 'detailTweet']);
Route::post('/reply', [PageController::class, 'reply']);
