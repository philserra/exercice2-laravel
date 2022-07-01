<?php

use App\Http\Controllers\giftsCardController;
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

Route::get('/home', function () {
    return view('home');
})->name('home.show');

Route::get('/gifts-card',[GiftsCardController::class, 'show'])->name('gifts-card.show');

Route::post('/gifts-card',[GiftsCardController::class, 'create'])->name('gifts-card.create');
