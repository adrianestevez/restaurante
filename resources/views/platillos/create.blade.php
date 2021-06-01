@extends('layouts.platillos-create-edit')
@section('contenido')
<br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Crear Platillo
          </div>
          <div class="card-body">
            <form action="{{route('platillos.guardar')}}" method="POST">
               @csrf
               <label for="">Nombre del Platillo</label>
              <input type="text" class="form-control" name="nombre">
              <label for="">Ingredientes</label>
              <input type="text" class="form-control" name="ingredientes">
              <label for="">Precio</label>
              <input type="number" class="form-control" name="precio"><br>
              <label for="">Disponibilidad</label>
              <!--Radio  Disponibilidad-->
              <div class="form-check">
                <input class="form-check-input" type="radio" value=1  name="disponibilidad" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Disponible
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value=0 name="disponibilidad" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                  No Disponible
                </label>
              </div>
              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('platillos')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection