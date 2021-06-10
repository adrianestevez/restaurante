@extends('layouts.platillos-layout')
@section('contenido')
  <br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Listado de Platillos
            <a href="{{{ route ('platillos.create')}}}" class=" text-center btn btn-warning text-white  btn-sm float-right">Nuevo platillo</a>
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
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Ingredientes</th>
                  <th>Precio</th>
                  <th>Disponibilidad</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach ($platillos as $platillo)
                  <tr>
                    <td>{{{ $platillo->id_platillos }}}</td>
                    <td>{{ $platillo->nombre }}</td>
                    <td>{{ $platillo->ingredientes }}</td>
                    <td>{{ $platillo->precio }}</td>
                    <td>
                      @if($platillo->disponibilidad == 1)
                        Disponible
                      @endif
                      @if($platillo->disponibilidad == 0)
                        No Disponible
                      @endif
                    </td>
                    <td>
                      <!--Iconos de Editar y eliminar-->
                      <a href="{{ route('platillos.edit',$platillo) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                          <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> &nbsp &nbsp
                      </a>

                      <a href="javascript: document.getElementById('delete-{{$platillo->id_platillos}}').submit()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                      </a>


                      <!--Tenemos que crear un foorm aparte y mandarlo a llamar desde el enlace mediante javascript-->
                      <!-- <form id="delete-{{$platillo->id_platillos}}" action="{{ route('platillos.destroy', $platillo->id_platillos) }}" method="POST">                       -->
                      <form id="delete-{{$platillo->id_platillos}}" action="{{ route('platillos.destroy', $platillo) }}" method="POST">                      
                        @csrf
                        @method('DELETE')
                      </form>
                      
                    </td>
                    
                    <!--Editar y eliminar en botones-->
                    <!--<td><a href="" class="btn btn-danger">Eliminar</a>
                    <a href="" class="btn btn-primary">Editar</a></td>-->
                  </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>    
@endsection