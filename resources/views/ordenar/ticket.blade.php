@extends('layouts.ordenar-layout')
@section('contenido')
<br>

<div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="{{route('ticket.store')}}" method="POST">
              @if(session('danger'))
                <div class="alert alert-danger" role="alert">
                    {{session('danger')}}
                </div>
              @endif
               @csrf
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" required>
              <label for="ingredientes">Mesa</label>
              <input type="number" min="1" max="8" class="form-control" name="id_mesa" value="1">
              <input type="number" class="invisible " name="total" value="0">

              <br><button type="submit" class="btn btn-warning">Continuar</button>
              <a href="{{{route('home')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
    