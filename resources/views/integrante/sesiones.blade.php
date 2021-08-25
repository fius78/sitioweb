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

        <!-- Inicio - Sesiones -->                
        @if ( count($sesiones)>0 )
        <br />
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                       
                    <h4 class="color_azulfuerte">Sesiones</h4>
                    <br />
                    <div class="row">
                       <div class="col-md-12 col-sm-12">
                       
                          <table class="table table-hover">
                             <thead>
                                <tr class="bg_color_azulbajo">
                                   <th><strong class="color_azulfuerte">DESCRIPCIÓN</strong></th>
                                   <th><strong class="color_azulfuerte">REALIZACIÓN</strong></th>
                                   <th><strong class="color_azulfuerte">[VER]</strong></th>                                   
                                </tr>
                             </thead>
                             <tbody>
                             
                             @foreach ($sesiones as $sesion)                                                                                                                  
                                @php $urlContenido='integrante/sesion/'.$sesion->id; @endphp
                                <tr>
                                   <td align="justify"><a href="{{ asset($urlContenido) }}">{{ $sesion->titulo }}</a></td>
                                   <td align="justify">{{ $sesion->realizacion }}</td>
                                   <td align="justify"><a href="{{ asset($urlContenido) }}"><img class="img-fluid" src=" {{ asset('img/iconos/ver.png') }}" /></a></td>                                   
                                </tr>                             
                             @endforeach                            
                             </tbody>
                          </table>                          
                       </div>  
                    </div>
                     
                 </div>          
              </div> 
           </div>

           <br />
           
           <div class="row">
              <div class="col-md-12 col-sm-12" align="center">{{ $sesiones->links() }}</div>  
           </div>         

        </div>
        <br />
        @endif
       <!-- Fin - Sesiones -->      

        <!-- Inicio - Vinculos para visualizar ADJUNTOS, VIDEOS, SESIONES -->        
        @php $urlRegresar='integrante/contenido/'.$integrante[0]->tipo->id; @endphp
        
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12" align="center">
                 <a href="{{ asset($urlRegresar) }}" class="btn">Regresar</a>
              </div>           
           </div>
        </div>
        <br />
        
        <!-- Fin - Vinculos para visualizar ADJUNTOS, VIDEOS, SESIONES -->
                     
    <br /> <br />
</div> 
<!-- Fin -->
@endsection