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

        <!-- Inicio - Videos -->                
        @if ( count($videos)>0 )
        <br />
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                                        
                    <h4 class="color_azulfuerte">Videos</h4>
                    <br />
                    <div class="row">
                       <div class="col-md-12 col-sm-12">
                       
                          <table class="table table-hover">
                             <thead>
                                <tr class="bg_color_azulbajo">
                                   <th align="justify"><strong class="color_azulfuerte">DESCRIPCIÓN</strong></th>
                                   <th align="center"><strong class="color_azulfuerte">[VER]</strong></th>                                   
                                </tr>
                             </thead>
                             <tbody>
                             
                             @php $c=1; @endphp

                             @foreach ($videos as $video)
                                                                
                                @php 
                                   $idModal='#myModal'.$c; 
                                   $nombreModal='myModal'.$c;
                                   $urlVideo='https://www.youtube.com/embed/'.$video->vinculo; 
                                @endphp  
                                
                                <tr>   
                                   <td align="justify"><a href="#" data-toggle="modal" data-target="{{ $idModal }}">{{ $video->descripcion }}</a></td>
                                   <td align="justify"><a href="#" data-toggle="modal" data-target="{{ $idModal }}"><img class="img-fluid" src=" {{ asset('img/iconos/ver.png') }}" /></a></td>                                   
                                </tr>

                                <!-- Inicio-The Modal -->
                                <div class="modal" id="{{ $nombreModal }}" data-backdrop="static" data-keyboard="false">
                                  <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                       
                                       <!-- Modal Header -->
                                       <div class="modal-header">
                                          <h4 class="modal-title"><strong class="color_azulfuerte">{{ $video->descripcion }}</strong></h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                       </div>
                                       
                                       <!-- Modal body -->
                                       <div class="modal-body" align="center">
                                          <iframe width="560" height="315" src="{{ asset($urlVideo) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                       
                                       <!-- Modal footer -->
                                       <div class="modal-footer">
                                          <button type="button" class="btn" data-dismiss="modal">Close</button>
                                       </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <!-- Fin-The Modal -->  

                                @php $c++; @endphp
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
              <div class="col-md-12 col-sm-12" align="center">{{ $videos->links() }}</div>  
           </div>         
        
        </div>
        
        <br />
        @endif
       <!-- Fin - Videos -->     

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