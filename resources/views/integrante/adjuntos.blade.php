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

        <!-- Inicio - Adjuntos -->                
        @if ( count($adjuntos)>0 )
        <br />
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                       
                    <h4 class="color_azulfuerte">Adjuntos</h4>
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
                             
                             @foreach ($adjuntos as $adjunto)                                                                                                                  
                                <tr>
                                   <td align="justify"><a href="{{ asset($adjunto->archivo) }}" target="_blank">{{ $adjunto->descripcion }}</a></td>
                                   <td align="justify"><a href="{{ asset($adjunto->archivo) }}" target="_blank"><img class="img-fluid" src=" {{ asset('img/iconos/descargar.png') }}" /></a></td>                                   
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
              <div class="col-md-12 col-sm-12" align="center">{{ $adjuntos->links() }}</div>  
           </div>         

        </div>
        <br />
        @endif
       <!-- Fin - Adjuntos -->      

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