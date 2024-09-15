<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;

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

Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);
Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/porto', [PortoController::class, 'porto']);

Route::get('/user/create', [UserController::class, 'create']);

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

