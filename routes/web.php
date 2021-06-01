<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Platillo;
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

Route::middleware('auth')->group(function() {  

    //Route::get('/', function () {
       // return view('home');
    //});
    
    Route::get('/platillos', function () {
        $platillos = Platillo::all();
    
        return view('platillos.platillos', compact('platillos'));
    })->name('platillos');
    
    Route::post('/platillos', function (Request $request) {
        $newplatillo = new Platillo;
        $newplatillo->nombre = $request->input('nombre');
        $newplatillo->ingredientes = $request->input('ingredientes');
        $newplatillo->precio = $request->input('precio');
        $newplatillo->disponibilidad = $request->input('disponibilidad');
        $newplatillo->save();
        return redirect()->route('platillos')->with('info', 'Platillo creado exitosamente');
    })->name('platillos.guardar');
    
    //Eliminar platillos
    Route::delete('/platillos/delete/{id_platillos}', function ($id_platillos) {
        $platillo = Platillo::where('id_platillos', '=', $id_platillos)->firstOrFail();
        $platillo->delete();
        return redirect()->route('platillos')->with('danger', 'Platillo eliminado exitosamente');
    })->name('platillos.destroy');
    
    //Retornar vista Crear Platillos
    Route::get('/platillos/create', function () {
        return view('platillos.create');
    })->name('platillos.create');
    
    //Edit platillos vistas
    Route::get('/platillos/{id}/edit', function ($id_platillos) {
        $platillo = Platillo::findOrFail($id_platillos);
        return view('platillos.edit', compact('platillo'));
    })->name('platillos.edit');
    
    //Edit platillos BD
    Route::put('/platillos/edit/{id}', function (Request $request, $id_platillos) {
        $platillo = Platillo::findOrFail($id_platillos);
        $platillo->nombre = $request->input('nombre');
        $platillo->ingredientes = $request->input('ingredientes');
        $platillo->precio = $request->input('precio');
        $platillo->disponibilidad = $request->input('disponibilidad');
        $platillo->save();
        return redirect()->route('platillos')->with('info', 'Platillo editado correctamente');
    })->name('platillos.update');
        
});
