@extends('layouts.platillos-create-edit')
@section('contenido')
    <br><div class="container"><br>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Editar Platillo
              </div>
              <div class="card-body">
                <form action="{{route('platillos.update', $platillo->id_platillos)}}" method="POST">
                   @method('put')
                   @csrf
                   <label for="">Nombre del Platillo</label>
                  <input type="text" class="form-control" value="{{ $platillo->nombre }}" name="nombre">
                  <label for="">Ingredientes</label>
                  <input type="text" class="form-control" value="{{ $platillo->ingredientes }}" name="ingredientes">
                  <label for="">Precio</label>
                  <input type="number" class="form-control" value="{{ $platillo->precio }}" name="precio"><br>
                  <label for="">Disponibilidad</label>
                  <!--Radio  Disponibilidad-->
                  @if($platillo->disponibilidad == 1)
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
                  @endif
                  
                  @if($platillo->disponibilidad == 0)
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value=1  name="disponibilidad" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Disponible
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value=0 name="disponibilidad" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      No Disponible
                    </label>
                  </div>
                  @endif
                  <br><button type="submit" class="btn btn-primary">Guardar cambios</button>
                  <a href="{{{route('platillos')}}}" class="btn btn-danger">Cancelar</a>
                </form>
              </div>

            </div>
            

          </div>
        </div>
    </div>
   
@endsection