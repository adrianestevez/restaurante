@extends('layouts.ordenar-layout')
@section('contenido')
<br>
    <div class="container"><br>
        <div class="row">
            <div class="col-sm-12">
                <!--Se Muestran los mensajes de exito al eliminar o editar-->
            @if(session('info'))
            <div class="alert alert-success" role="alert">
                {{session('info')}}
            </div>
            @endif
            @if(session('danger'))
            <div class="alert alert-danger" role="alert">
                {{session('danger')}}
            </div>
            @endif
                <!-- ======= Menu Section ======= -->
                <section id="menu" class="menu">
                    <div class="container">
                        <div class="section-title">
                            <h2>Dale un Vistazo a Nuestro <span>Menu</span></h2>
                        </div>
                                @foreach ($platillos as $platillo)  
                                    @if($platillo->disponibilidad == 1)                                         
                                    <form action="{{ route('ordena.store') }}" method="POST">                                        
                                        <div class="row menu-container">
                                            @csrf
                                            <div class="col-sm-1 mt-4  menu-item" role="alert">
                                                <button type="submit" class="btn btn-warning justify-center text-white">Pedir</button>
                                            </div>   
                                                <div class="col-sm-1 menu-item mt-4">
                                                    <input type="number" min="0" max="8" class="form-control" name="cantidad" value="0">
                                                    <input type="number" class="invisible form-control" name="id_platillos" value="{{ $platillo->id_platillos }}">
                                                    <input type="number" class="invisible form-control" name="id_ticket" value="{{ $ticketId }}">

                                                </div>        
                                                <div class="col-sm-10 menu-item filter-starters">
                                                    <div class="menu-content">
                                                        <a>{{ $platillo->nombre }}</a><span>{{ $platillo->precio }}</span>
                                                    </div>
                                                    <div class="menu-ingredients">
                                                        {{ $platillo->ingredientes }}
                                                    </div>
                                                </div>        
                                        </div>
                                     </form>
                                    @endif
                                @endforeach
                    </div>
                </section><!-- End Menu Section -->
            </div>
        </div>
    </div> 

    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Platillos Pedidos
                <a class="btn btn-warning text-white float-right" href="{{ route('ticket.finish', $ticketId) }}">Terminar pedido</a>
              </div>
              <div class="card-body">
                <!--Se Muestran los mensajes de exito al eliminar o editar-->
                @if(session('info'))
                <div class="alert alert-success" role="alert">
                    {{session('info')}}
                </div>
                @endif
                @if(session('danger'))
                <div class="alert alert-danger" role="alert">
                    {{session('danger')}}
                </div>
                @endif
                <table class="table table-hover table-sm">
                    <thead>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Acción</th>
                    </thead>
                    <tbody>
                    @foreach ($ordenes as $orden)
                        @foreach ($platillos as $platillo)
                        @if ($platillo->id_platillos == $orden->platillo_id)
                        <tr>
                            <td>{{ $platillo->nombre }}</td>
                            <td>{{ $platillo->precio }}</td>
                            <td>{{ $orden->cantidad }}</td>
                            <td>
                                
                                <a href="javascript: document.getElementById('delete-{{$orden->id}}').submit()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                </a>
        
        
                                <!--Tenemos que crear un foorm aparte y mandarlo a llamar desde el enlace mediante javascript-->
                                <form id="delete-{{$orden->id}}" action="{{ route('orden.destroy', $orden) }}" method="POST">                      
                                @csrf
                                @method('DELETE')
                                </form>
                                
                            </td>
                            
                            <!--Editar y eliminar en botones-->
                            <!--<td><a href="" class="btn btn-danger">Eliminar</a>
                            <a href="" class="btn btn-primary">Editar</a></td>-->
                            </tr>
                        @endif
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection