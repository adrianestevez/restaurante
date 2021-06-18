<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Orden as ControllersOrden;
use App\Models\Orden;
use Illuminate\Http\Request;
use App\Models\Platillo;


class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::all();
        return $ordenes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordenar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ticketId = $request->id_ticket;
        $ordenes = Orden::all()->where('platillo_id', '=' ,$request->id_platillos)->where('ticket_id', '=' ,$request->id_ticket);
        
        if(sizeof($ordenes) != 0){
            return redirect()->route('ordenar',[$ticketId])->with('danger','Ese platillo ya está agregado a su lista. Si desea cambiar la cantidad eliminelo y vuelvalo a ordenar');
        }else{
            $neworden = new Orden;
            $neworden->cantidad = $request->input('cantidad');
            $neworden->ticket_id = $request->input('id_ticket');
            $neworden->platillo_id = $request->input('id_platillos');
            $neworden->save();
            
            return redirect()->route('ordenar',[$ticketId])->with('info','Platillo agregado correctamente ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orden = Orden::findOrFail($id);
        $ticketId = $orden->ticket_id; //saco primero el id del ticket para mandarlo a la vista
        $orden->delete();
        return redirect()->route('ordenar',[$ticketId])->with('danger','Elemento eliminado de la Orden');
    }
}
