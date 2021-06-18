<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Platillo;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\TicketController;
use App\Models\Orden;
use App\Models\Ticket;

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

 Route::get('/ordenar/{id}', function ($ticketId) {
    $platillos = Platillo::all();
    $ordenes = Orden::where('ticket_id', $ticketId)->get();
    return view('ordenar', compact('platillos','ticketId','ordenes'));
 })->name('ordenar');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('platillos');
    Route::get('/user/{id}', [UserController::class, 'show']);
})->name('dashboard');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::resource('platillos', PlatilloController::class);

//Ticket Routes
Route::get('ticket', 'App\Http\Controllers\TicketController@create')->name('ticket.create');
Route::post('ticket', 'App\Http\Controllers\TicketController@store')->name('ticket.store');
Route::get('ticket/finish/{id}', 'App\Http\Controllers\TicketController@finish')->name('ticket.finish');
Route::delete('ticket/destroy/{id}', 'App\Http\Controllers\TicketController@destroy')->name('ticket.destroy');

//Orden Routes
Route::post('orden', 'App\Http\Controllers\OrdenController@store')->name('ordena.store');
Route::delete('orden/destroy/{id}', 'App\Http\Controllers\OrdenController@destroy')->name('orden.destroy');

