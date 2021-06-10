<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Platillo;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlatilloController;


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
    $platillos = Platillo::all();
    return view('home', compact('platillos'));
 })->name('home');

 Route::get('/ordenar', function () {
    $platillos = Platillo::all();
    return view('ordenar', compact('platillos'));
 })->name('ordenar');
 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('platillos');
    Route::get('/user/{id}', [UserController::class, 'show']);
})->name('dashboard');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::resource('platillos', PlatilloController::class);
