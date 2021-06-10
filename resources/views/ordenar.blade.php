@extends('layouts.ordenar-layout')
@section('contenido')
<br>
    <div class="container"><br>
        <div class="row">
            <div class="col-sm-12">
                
                <!-- ======= Menu Section ======= -->
                <section id="menu" class="menu">
                    <div class="container">
                        <div class="section-title">
                            <h2>Dale un Vistazo a Nuestro <span>Menu</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="menu-flters">
                                    <li data-filter="*" class="filter-active"><a class="text-white" href="{{ route('ordenar') }}">Pedir Orden</a></li>
                                </ul>
                            </div>
                        </div>  
                        <div class="row menu-container">
                                @foreach ($platillos as $platillo)  
                                    @if($platillo->disponibilidad == 1) 
                                                <div class="col-sm-1 menu-item mt-3">
                                                    <br>
                                                    <a href="" class="warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 20 20">
                                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                                          </svg>
                                                    </a>
                                                </div>        
                                                <div class="col-sm-11 menu-item filter-starters">
                                                    <div class="menu-content">
                                                        <a>{{ $platillo->nombre }}</a><span>{{ $platillo->precio }}</span>
                                                    </div>
                                                    <div class="menu-ingredients">
                                                        {{ $platillo->ingredientes }}
                                                    </div>
                                                </div>        
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </section><!-- End Menu Section -->
            </div>
        </div>
    </div> 
    
    
@endsection