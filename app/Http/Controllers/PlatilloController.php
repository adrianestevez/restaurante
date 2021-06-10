<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillos = Platillo::all();
        return view('platillos.platillos', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platillos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Platillo::create($request->all());
        return redirect()->route('platillos.index')->with('info', 'Platillo creado exitosamente');
        // $newplatillo = new Platillo;
        // $newplatillo->nombre = $request->input('nombre');
        // $newplatillo->ingredientes = $request->input('ingredientes');
        // $newplatillo->precio = $request->input('precio');
        // $newplatillo->disponibilidad = $request->input('disponibilidad');
        // $newplatillo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo $platillo)
    {
        // $platillo = Platillo::findOrFail($id_platillos);
        // return view('platillos.edit', compact('platillo'));
        return view('platillos.create',compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {
        Platillo::where('id_platillos', $platillo->id_platillos)->update($request->except('_token','_method'));
        return redirect()->route('platillos.index')->with('info', 'Platillo editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo $platillo)
    {
        $platillo->delete();
        return redirect()->route('platillos.index');
    }
}
