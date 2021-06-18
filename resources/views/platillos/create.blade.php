@extends('layouts.platillos-create-edit')
@section('contenido')
<br><div class="container"><br>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
        @if(isset($platillo))
          <form action="{{ route('platillos.update',$platillo) }}" method="POST">
          @method('PATCH')
          <div class="card-header">Editar Platillo</div>
        @else
          <form action="{{ route('platillos.store') }}" method="POST">
          <div class="card-header">Crear Platillo</div>
        @endif

          <div class="card-body">
            <form action="{{route('platillos.store')}}" method="POST">
               @csrf
              <label for="nombre">Nombre del Platillo</label>
              <input type="text" class="form-control" name="nombre" value="{{ $platillo->nombre ?? '' }}" required>
              <label for="ingredientes">Ingredientes</label>
              <input type="text" class="form-control" name="ingredientes" value="{{ $platillo->ingredientes ?? '' }}" required>
              <label for="precio">Precio</label>
              <input type="number" class="form-control" name="precio" value="{{ $platillo->precio ?? '' }}" required><br>
              <label for="disponibilidad">Disponibilidad</label>
              <!--Radio  Disponibilidad-->
              <?php
              $Access = -1;
              if(isset($platillo)) $Access = 1;
              $Boolean = true;                //default (Create or edit with disponibilidad=true).
              if($Access == 1)
                if(!$platillo->disponibilidad)
                  $Boolean = false;
              ?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="1"  name="disponibilidad" id="flexRadioDefault1" <?php echo ($Boolean) ? 'checked':''?> >
                    <label class="form-check-label" for="flexRadioDefault1">
                      Disponible
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="disponibilidad" id="flexRadioDefault2"<?php echo (!$Boolean) ? 'checked':''?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                      No Disponible
                    </label>
                  </div>      
              <br><button type="submit" class="btn btn-primary">Guardar</button>
              <a href="{{{route('platillos.index')}}}" class="btn btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection