<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kataController;
use App\Http\Controllers\FrontController;

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
//     return view('home');
// });



// Route::get('random-anime', [kataController::class, 'getRandomAnime'])->name('random.anime');
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('products', [FrontController::class, 'products'])->name('products.index');
Route::get('about-us', [FrontController::class, 'aboutUs'])->name('about.us');

Route::get('/anime', [FrontController::class, 'search'])->name('anime.search');



