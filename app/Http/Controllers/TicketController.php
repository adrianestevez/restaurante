<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Orden;
use App\Models\Platillo;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordenar.ticket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $tickets = Ticket::all()->where('id_mesa', '=' ,$request->id_mesa);
        
        if(sizeof($tickets) != 0){
            return redirect()->route('ticket.store')->with('danger','Esa mesa está ocupada ya, no es posible ordenar desde esa mesa');;
        }else{
            $ticket = Ticket::create($request->all());
            $ticketId = $ticket->id;
            return redirect()->route('ordenar',[$ticketId]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }
    
    public function finish($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticketId = $ticket->id;
        $ordenes = Orden::all()->where('ticket_id',$ticketId);
        
        if(sizeof($ordenes) == 0){
            return redirect()->route('ordenar',[$ticketId])->with('danger','No tine nada en su orden');
        }else{
            $cantfinal = 0;
            foreach($ordenes as $orden){
                $cantidad = $orden->cantidad;
                $platilloId = $orden->platillo_id;
                $platillo= Platillo::findOrFail($platilloId);
                $precioplatillo = $platillo->precio;
                $cantfinal += $precioplatillo * $cantidad;
            }
            
            $ticket->total = $cantfinal;
            $ticket->save();
    
            return view('ordenar.terminado',compact('ticket'));            
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticketId = $ticket->id;
        $ordenes = Orden::all()->where('ticket_id',$ticketId);
        //Eliminamos todas las ordenes pertenecientes al ticket
        foreach($ordenes as $orden){
            $orden->delete();
        }
        
        $ticket->delete();//eliminamos el ticket
        
        return redirect()->route('home');
    }
}
