@extends('inicio')

@section('content')
<!-- Inicio boxborder_azulfuerte boxborder_rounded_1 -->
<div class="container-fluid bg_color_azulmuybajo"> 
    
        <!-- Inicio - Título Contenido -->  
        <br /> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                	<div class="boxbordershadow_azulfuerte bg_color_blanco">
                       <h1 class="color_azulfuerte" align="center"> 
                       {{ $integrante[0]->tipo->descripcion }}
                       </h1>
                    </div>	
                </div>	
            </div>
        </div>
        <!-- Fin - Título Contenido -->

        <!-- Inicio - Descripción Contenido -->  
        <br /> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                   <div class="bg_color_blanco separador_10 shadow_azulbajo">
                      <h4 class="color_azulfuerte">{{ $sesion[0]->titulo }}</h4>
                      <strong class="color_azulfuerte">Fecha de realización: {{ $sesion[0]->realizacion }}</strong> 
                      <br /><br />
                      <p align="justify">{{ $sesion[0]->descripcion }}</p>
                   </div>                   
                </div>  
            </div>
        </div>      
        <!-- Fin - Descripción Contenido -->

        <!-- Inicio - Video de la Sesion -->                        
        <div class="container"> 
           <hr />
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                       
                    <h4 class="color_azulfuerte">Video de la Sesiones</h4>
                    <br />
                    <div class="row">
                       <div class="col-md-12 col-sm-12">
                          <div class="embed-responsive embed-responsive-16by9" align="center">                           
                             <iframe src="{{ asset($sesion[0]->video) }}" title="{{ $sesion[0]->titulo }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>                                          
                       </div>  
                    </div>
                     
                 </div>          
              </div> 
           </div>        
        </div>               
       <!-- Fin - Video de la Sesion -->      

        <!-- Inicio - Anexos de la Sesion -->
        @if ( count($sesion[0]->anexos)>0 )                        
        <div class="container">
           <hr /> 
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                       
                    <h4 class="color_azulfuerte">Anexos</h4>
                    <br />
                    <div class="row">
                       <div class="col-md-12 col-sm-12">

                          <table class="table table-hover">
                             <thead>
                                <tr class="bg_color_azulbajo">
                                   <th><strong class="color_azulfuerte">DESCRIPCIÓN</strong></th>
                                   <th><strong class="color_azulfuerte">[DESCARGAR]</strong></th>                                   
                                </tr>
                             </thead>
                             <tbody>
                             
                             @foreach ($sesion[0]->anexos as $anexo)                                                                                                                  
                                <tr>
                                   <td align="justify"><a href="{{ asset($anexo->archivo) }}" target="_blank">{{ $anexo->descripcion }}</a></td>
                                   <td align="justify"><a href="{{ asset($anexo->archivo) }}" target="_blank"><img class="img-fluid" src=" {{ asset('img/iconos/descargar.png') }}" /></a></td>                                   
                                </tr>                             
                             @endforeach                            
                             </tbody>
                          </table>
                                         
                       </div>  
                    </div>
                     
                 </div>          
              </div> 
           </div>        
        </div>      
        @endif        
       <!-- Fin - Anexos de la Sesion -->  

        <!-- Inicio - Vinculos para regresar al listado de sesiones -->        
        @php $urlRegresar='integrante/sesiones/'.$integrante[0]->tipo->id; @endphp
        
        <div class="container">
           <hr />
           <div class="row">
              <div class="col-md-12 col-sm-12" align="center">
                 <a href="{{ asset($urlRegresar) }}" class="btn">Regresar</a>
              </div>           
           </div>
        </div>
        <br />
        
        <!-- Fin - Vinculos para regresar al listado de sesiones -->
                   
    <br /> <br />
</div> 
<!-- Fin -->
@endsection