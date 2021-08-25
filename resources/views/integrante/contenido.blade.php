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
    
    <div class=" container">
        <!-- Inicio - Descripción Contenido bg_color_blanco -->
        <br />
        <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="bg_color_blanco separador_10 shadow_azulbajo"> 
                   <p align="justify">{{ $integrante[0]->descripcion }}</p>
               </div>    
            </div>	
        </div>
        <!-- Fin - Descripción Contenido --> 
        
        <!-- Inicio - Misión y Visión del Contenido -->
        @if ( (isset($integrante[0]->mision) && $integrante[0]->mision) && (isset($integrante[0]->vision) && $integrante[0]->vision) )
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                	<div class="col-md-6 col-sm-6">
                		  <div class="bg_color_blanco separador_10 shadow_azulbajo">                            
                          <div class="row">
                              <div class="col-md-12 col-sm-12">
                            	    <h4 class="color_azulfuerte" align="center">Misión</h4>	
                              </div>
                          </div>
                          
                          <div class="row">	
                            	<div class="col-md-12 col-sm-12">
                            	    <p align="justify">{{ $integrante[0]->mision }}</p>	
                            	</div>                        	
                          </div>
                	    </div>
                	</div>
                    <div class="col-md-6 col-sm-6">
                		    <div class="bg_color_blanco separador_10 shadow_azulbajo">                            
                            <div class="row">
                            	<div class="col-md-12 col-sm-12">
                            	    <h4 class="color_azulfuerte" align="center">Visión</h4>	
                            	</div>
                            </div>

                            <div class="row"> 
                            	<div class="col-md-12 col-sm-12">
                            	    <p align="justify">{{ $integrante[0]->vision }}</p>	
                            	</div>                        	
                            </div>                            
                	      </div>                	
                    </div>
                </div>   
            </div>	
        </div>
        @elseif ( (isset($integrante[0]->mision) && $integrante[0]->mision) && (!isset($integrante[0]->vision) || !$integrante[0]->vision) )
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="bg_color_blanco separador_10 shadow_azulbajo">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h4 class="color_azulfuerte" align="center">Misión</h4>	
                        </div>
                    </div>
                    
                    <div class="row">    
                        <div class="col-md-12 col-sm-12">
                            <p align="justify">{{ $integrante[0]->mision }}</p>	
                        </div>                        	
                    </div>
                </div>
            </div>
        </div>    
        @elseif ( (isset($integrante[0]->vision) && $integrante[0]->vision) && (!isset($integrante[0]->mision) || !$integrante[0]->mision) )
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="bg_color_blanco separador_10 shadow_azulbajo">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h4 class="color_azulfuerte" align="center">Visión</h4>	
                        </div>
                    </div>
                    
                    <div class="row">    
                        <div class="col-md-12 col-sm-12">
                            <p align="justify">{{ $integrante[0]->vision }}</p>	
                        </div>                        	
                    </div>                    
                </div>
            </div>
        </div>    
        @endif
        <!-- Fin - Misión y Visión del Contenido -->

        <!-- Inicio - Mostrar imagen Organizacional --> 
        @if ($integrante[0]->img_organizacion)
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="bg_color_blanco separador_10 shadow_azulbajo" align="center"> 
                   <img class="img-fluid" src=" {{ asset($integrante[0]->img_organizacion) }}" />
               </div>    
            </div>  
        </div>
        @endif
        <!-- Fin - Mostrar imagen Organizacional -->        
    
        <!-- Inicio - Funciones, Facultades y Atribuciones -->
        @php $banderaActivo=0; @endphp

        @if ( (count($funciones)>0) || (count($facultades)>0) || (count($atribuciones)>0) )
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                 
      	            <ul class="nav nav-tabs">    	            	
      	                <li class="nav-item">
      	                    @if ( (count($funciones)>0) && $banderaActivo==0 )
      	                        <a class="nav-link active" data-toggle="tab" href="#funciones"><h4 class="color_azulfuerte">Funciones</h4></a>
      	                        @php $banderaActivo=1; @endphp
      	                    @elseif ( (count($funciones)>0) && $banderaActivo>0 )
      	                        <a class="nav-link" data-toggle="tab" href="#funciones"><h4 class="color_azulfuerte">Funciones</h4></a>
      	                    @endif      
      	                </li>

      	                <li class="nav-item">
      	                    @if ( (count($facultades)>0) && $banderaActivo==0 )
      	                        <a class="nav-link active" data-toggle="tab" href="#facultades"><h4 class="color_azulfuerte">Facultades</h4></a>
      	                        @php $banderaActivo=2; @endphp
      	                    @elseif ( (count($facultades)>0) && $banderaActivo>0 )
      	                        <a class="nav-link" data-toggle="tab" href="#facultades"><h4 class="color_azulfuerte">Facultades</h4></a>
      	                    @endif      
      	                </li>

      	                <li class="nav-item">
      	                    @if ( (count($atribuciones)>0) && $banderaActivo==0 )
      	                        <a class="nav-link active" data-toggle="tab" href="#atribuciones"><h4 class="color_azulfuerte">Atribuciones</h4></a>
      	                        @php $banderaActivo=3; @endphp
      	                    @elseif ( (count($atribuciones)>0) && $banderaActivo>0 )
      	                        <a class="nav-link" data-toggle="tab" href="#atribuciones"><h4 class="color_azulfuerte">Atribuciones</h4></a>
      	                    @endif      
      	                </li>
      	            </ul>
                    
                    <div class="tab-content">
                        <br />
                        @if ( (count($funciones)>0) && $banderaActivo==1 )
                            <div class="tab-pane container active" id="funciones">
    			                      <div class="row">    
    			                          <div class="col-md-12 col-sm-12">
                                        <ul>
    			                    	            @foreach ($funciones as $funcion)
    			                                      <li align="justify">{{ $funcion->descripcion }}</li>
    			                                  @endforeach
    			                              </ul>	
    			                          </div>                        	
    			                      </div>                        
                            </div>                        	
                        @elseif ( (count($funciones)>0) && $banderaActivo!=1 )
                            <div class="tab-pane container fade" id="funciones">
          			                <div class="row">    
          			                    <div class="col-md-12 col-sm-12">
                                        <ul>
          			                    	      @foreach ($funciones as $funcion)
          			                                <li align="justify">{{ $funcion->descripcion }}</li>
          			                            @endforeach
          			                        </ul>	
          			                    </div>                        	
          			                </div>                        
                            </div>                        	
                        @endif

                             
                        @if ( (count($facultades)>0) && $banderaActivo==2 )
                            <div class="tab-pane container active" id="facultades">
          			                <div class="row">    
          			                    <div class="col-md-12 col-sm-12">
                                        <ul>
          			                    	      @foreach ($facultades as $facultad)
          			                                <li align="justify">{{ $facultad->descripcion }}</li>
          			                            @endforeach
          			                        </ul>	
          			                    </div>                        	
          			                </div>                        
                            </div>                         	
                        @elseif ( (count($facultades)>0) && $banderaActivo!=2 )
                            <div class="tab-pane container fade" id="facultades">
          			                <div class="row">    
          			                    <div class="col-md-12 col-sm-12">
                                        <ul>
          			                    	      @foreach ($facultades as $facultad)
          			                                <li align="justify">{{ $facultad->descripcion }}</li>
          			                            @endforeach
          			                        </ul>	
          			                    </div>                        	
          			                </div>                        
                            </div>                         	
                        @endif                       	                       	                    

                        @if ( (count($atribuciones)>0) && $banderaActivo==3 )
                            <div class="tab-pane container active" id="atribuciones">
          			                <div class="row">    
          			                    <div class="col-md-12 col-sm-12">
                                        <ul>
          			                    	      @foreach ($atribuciones as $atribucion)
          			                                <li align="justify">{{ $atribucion->descripcion }}</li>
          			                            @endforeach
          			                        </ul>
          			                    </div>                        	
          			                </div>                        
                            </div>                        	
                        @elseif ( (count($atribuciones)>0) && $banderaActivo!=3 )
                            <div class="tab-pane container fade" id="atribuciones">
          			                <div class="row">    
          			                    <div class="col-md-12 col-sm-12">
                                        <ul>
          			                    	      @foreach ($atribuciones as $atribucion)
          			                                <li align="justify">{{ $atribucion->descripcion }}</li>
          			                            @endforeach
          			                        </ul>
          			                    </div>                        	
          			                </div>                        
                            </div>                        	
                        @endif                                
                    </div>	                
                    
                </div>
            </div>
        </div>    
        @endif
        <!-- Fin - Funciones, Facultades y Atribuciones -->
 
        <!-- Inicio - Integrantes Recurso Humano -->
        @if ( count($integrante[0]->tipo->recursohumano)>0 )
        <hr />
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                    
                    @if ($integrante[0]->idTipo!=3)
                        <h4 class="color_azulfuerte">Integrantes</h4>
                    @endif  
                    
                    <br />
                    
                    <div id="accordion">
                        @php $c=1; @endphp 
                        @foreach ($integrante[0]->tipo->recursohumano as $recurso)
                           
                           @php 
                              $nombreCabecera='heading'.$c;
                              $idTarget='#collapse'.$c; 
                              $nombreTarget='collapse'.$c; 
                           @endphp 

                           <div class="card">
                              <div class="card-header bg_color_verde" id="{{ $nombreCabecera }}" align="center">                                 
                                 <button class="btn btn-link" data-toggle="collapse" data-target="{{ $idTarget }}" aria-expanded="true" aria-controls="{{ $nombreTarget }}">
                                       <h5><b>{{ $recurso->nombreIntegrante }}</b></h5>
                                       @if ($integrante[0]->idTipo!=1)
                                           {{ $recurso->puesto }}
                                       @endif    
                                 </button>                                 
                              </div>
                                                            
                              <div id="{{ $nombreTarget }}" class="collapse" aria-labelledby="{{ $nombreCabecera }}" data-parent="#accordion">
                                 <div class="card-body">
                                    
                                    <div class="row">
                                       <div class="col-md-12 col-sm-12" align="center">
                                          @if ($recurso->foto)
                                              <img class="img-fluid" src="{{ asset($recurso->foto) }}" />
                                          @else
                                              <img class="img-fluid" src="{{ asset('img/recursohumano/sinFoto.jpg') }}" />
                                          @endif                                       
                                       </div>
                                    </div>
                                    
                                    
                                    @if ($recurso->telefono || $recurso->email)
                                    <br />
                                    <div class="row">
                                       <div class="col-md-12 col-sm-12" align="center">
                                           @if ($recurso->telefono)
                                           <i class="fas fa-phone-alt"></i>&nbsp;{{ $recurso->telefono }}<br />
                                           @endif
                                                   
                                           @if ($recurso->email)
                                           <i class="fas fa-envelope"></i>&nbsp;{{ $recurso->email }}
                                           @endif                                             
                                       </div>  
                                    </div> 
                                    @endif   

                                    @if ($recurso->curriculum)
                                    <br />                                     
                                    <div class="row">
                                       <div class="col-md-12 col-sm-12" align="justify">
                                           {{ $recurso->curriculum }}
                                       </div>
                                    </div>
                                    @endif                                    
                                    
                                    @if ($recurso->logo)
                                    <br />
                                    <div class="row">
                                       <div class="col-md-5 col-sm-5" align="center">&nbsp;</div>
                                       <div class="col-md-2 col-sm-2" align="center">
                                           <img class="img-fluid" src="{{ asset($recurso->logo) }}" />
                                       </div>                              
                                       <div class="col-md-5 col-sm-5" align="center">&nbsp;</div>
                                    </div>
                                    @endif                                      
                                    
                                 </div>
                              </div>                                                          
                           </div>                                 
                           
                           @php $c++; @endphp                                                                                 
                        @endforeach
                    </div>
                    <br />
                </div>          
             </div> 
        </div>      
        @endif
        <!-- Fin - Integrantes Recurso Humano -->   

        <!-- Inicio - Infografias -->
        @if ( count($murales)>0 )
        <hr />
        <div class="row">
           <div class="col-md-12 col-sm-12">
              <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                 <h4 class="color_azulfuerte">Infografías</h4>
                 <br />
                 <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <section class="vertical slider" data-sizes="50vw">
                          @foreach ($murales as $mural)
                          <div class="card">
                               <img class="img-fluid card-img-top" src="{{ asset($mural->infografia) }}" />
                          </div>
                          @endforeach 
                        </section>                      
                    </div>
                 </div>
                
              </div>            
           </div>
        </div>
        <br />
        @endif 
        <!-- Fin - Infografias -->

        <!-- Inicio - Vinculos para visualizar ADJUNTOS, VIDEOS, SESIONES -->        
        @php
          $urlAdjuntos='integrante/adjuntos/'.$integrante[0]->tipo->id;
          $urlVideos='integrante/videos/'.$integrante[0]->tipo->id;
          $urlSesiones='integrante/sesiones/'.$integrante[0]->tipo->id;
        @endphp

        <hr />
        <div class="row">
           <div class="col-md-4 col-sm-4">
              <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo" align="center">
                 @if($tadjuntos>0)
                 <a href="{{ asset($urlAdjuntos) }}"><h4 class="color_azulfuerte"><i class="fas fa-copy"></i>&nbsp;Adjuntos&nbsp;<span class="badge badge-primary">@php echo $tadjuntos; @endphp</span></h4></a>
                 @else
                 <h4 class="color_azulfuerte"><i class="fas fa-copy"></i>&nbsp;Adjuntos&nbsp;<span class="badge badge-primary">@php echo $tadjuntos; @endphp</span></h4>
                 @endif
              </div>            
           </div>

           <div class="col-md-4 col-sm-4">
              <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo" align="center">
                 @if($tvideos>0)
                 <a href="{{ asset($urlVideos) }}"><h4 class="color_azulfuerte"><i class="fas fa-video"></i>&nbsp;Videos&nbsp;<span class="badge badge-primary">@php echo $tvideos; @endphp</span></h4></a>
                 @else
                 <h4 class="color_azulfuerte"><i class="fas fa-video"></i>&nbsp;Videos&nbsp;<span class="badge badge-primary">@php echo $tvideos; @endphp</span></h4>
                 @endif
              </div>            
           </div>

           <div class="col-md-4 col-sm-4">
              <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo" align="center">
                 @if($tsesiones>0)
                 <a href="{{ asset($urlSesiones) }}"><h4 class="color_azulfuerte"><i class="fas fa-users"></i>&nbsp;Sesiones&nbsp;<span class="badge badge-primary">@php echo $tsesiones; @endphp</span></h4></a>
                 @else
                 <h4 class="color_azulfuerte"><i class="fas fa-users"></i>&nbsp;Sesiones&nbsp;<span class="badge badge-primary">@php echo $tsesiones; @endphp</span></h4>
                 @endif
              </div>            
           </div>

        </div>
        <br />
        
        <!-- Fin - Vinculos para visualizar ADJUNTOS, VIDEOS, SESIONES -->

                 
    </div> 
    <br /> <br />
</div> 
<!-- Fin -->
@endsection

@push('jscustom')
<script type="text/javascript">
    $(document).on('ready', function() {

      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });      

    });
</script>
@endpush