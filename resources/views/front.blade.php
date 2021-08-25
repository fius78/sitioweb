@extends('inicio')

@section('content')
<!-- Inicio SLIDESHOW -->
<div class="container-fluid">  
    <div class="row">
      <div class="col-md-12 col-sm-12">
      	    <div class="boxbordershadow_azulfuerte_slide">

      	    <div class="row">
      	    	<div class="col-md-12 col-sm-12">
					<div align="center" id="notainfo" class="carousel slide" data-ride="carousel">
					  <ul class="carousel-indicators">
					    <li data-target="#notainfo" data-slide-to="0" class="active"></li>
					    <li data-target="#notainfo" data-slide-to="1"></li>
					    <li data-target="#notainfo" data-slide-to="2"></li>
					  </ul>				
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <div class="card">
					         <img src="{{ $notas[0]->fotoPrincipal }}">
					      </div>
					      <div class="carousel-caption">
					        <h5>{{ $notas[0]->titulo }}</h5>
					      </div>   
					    </div>
					    <div class="carousel-item">
					      <div class="card">	
					         <img src="{{ $notas[1]->fotoPrincipal }}">
					      </div>
					      <div class="carousel-caption">
					        <h5>{{ $notas[1]->titulo }}</h5>
					      </div>   
					    </div>
					    <div class="carousel-item">
					      <div class="card">	
					         <img src="{{ $notas[2]->fotoPrincipal }}">
					      </div>
					      <div class="carousel-caption">
					        <h5>{{ $notas[2]->titulo }}</h5>
					      </div>   
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#notainfo" data-slide="prev">
					    <span class="carousel-control-prev-icon bg-control"><i class="fas fa-angle-left"></i></span>
					  </a>
					  <a class="carousel-control-next" href="#notainfo" data-slide="next">
					    <span class="carousel-control-next-icon bg-control"><i class="fas fa-angle-right"></i></span>
					  </a>
					</div>
                </div>
		    </div>
		    <br />
		    <div class="row">
	            <div class="col-md-12 col-sm-12" align="center">
	                <a href="/" class="btn">Mas Noticias</a>
	             </div>  
	        </div>
	        <br />
	        
	        </div>
      </div>
    </div>			              	               
</div>
<!-- Fin SLIDESHOW -->

<!-- Inicio SESAEQROO y Secretario Técnico -->
<br /><br />
<div class="container-fluid">  
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h2 class="color_azulfuerte">Secretaría Ejecutiva</h2>
        <div class="boxbordershadow_azulfuerte_h" align="justify">
			<div class="row">
			  <div class="col-md-3 col-sm-3" align="center">
			    <img class="img-fluid" src="{{ $sesaeqroo[0]->img_principal }}" />
			  </div>
			  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" align="justify">
			    <strong class="color_azulfuerte">{{ $sesaeqroo[0]->titulo }}</strong><br />
			    {{ $sesaeqroo[0]->descripcion_corta }}
			  </div>    
			</div>
			<div class="row">
			  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" align="center">
			    <a href="{{ route('mostrarcontenido', ['id'=>$sesaeqroo[0]->idTipo]) }}" class="btn btn-info">Mas</a>
			  </div>  
			</div>	
        </div>        
      </div>

      <div class="col-md-6 col-sm-6">
        <h2 class="color_azulfuerte">Secretario Técnico</h2>
        <div class="boxbordershadow_azulfuerte_h" align="justify">
			<div class="row">
			  <div class="col-md-3 col-sm-3" align="center">
			    <img class="img-fluid" src="{{ $secretario[0]->img_principal }}" />
			  </div>
			  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" align="justify">
			    <strong class="color_azulfuerte">{{ $secretario[0]->titulo }}</strong><br />
			    {{ $secretario[0]->descripcion_corta }}
			  </div>    
			</div>
			<div class="row">
			  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" align="center">
			    <a href="{{ route('mostrarcontenido', ['id'=>$secretario[0]->idTipo]) }}" class="btn btn-info">Mas</a>
			  </div>  
			</div>	          
        </div>        
      </div>        
    </div> 
    <br />          
</div>
<br />
<!-- Fin SESAEQROO y Secretario Técnico -->

<!-- Inicio SAEQROO, Comisión Ejecutiva, Comité Coordinador y CPC -->
<div class="container-fluid">
    <div class='row'>
        <div class="col-md-12 col-sm-12">
           <h2 class="color_azulfuerte">Sistema Anticorrupción</h2>
           <div class="boxborder_azulbajo bg_color_azulbajo boxborderrounded_1">
               <div class="row">  
			       <div class="col-md-12 col-sm-12" align="center">
			           <img class="img-fluid" src="{{ $saeqroo[0]->img_organizacion }}" />
			       </div>      
			   </div>
			   <br /> 
			   <div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">          	
			       <div class="row">
				       <div class="col-md-12 col-sm-12" align="center">
					       <strong class="color_azulfuerte">SAEQROO</strong>
					   </div>     
				   </div> 
			       <div class="row">
				   	   <div class="col-md-12 col-sm-12" align="justify">			   	  
				   	   	  {{ $saeqroo[0]->descripcion_corta }}<br />
				   	   </div>
				   </div>
				   <div class="row">
				       <div class="col-md-12 col-sm-12" align="center">
				           <a href="{{ route('mostrarcontenido', ['id'=>$saeqroo[0]->idTipo]) }}" class="btn btn-info">Mas</a> 
				       </div>  
				   </div>
			   </div>			              	               
                
               <hr size="2px" />
               
               <div class="row">
                   <div class="col-md-12 col-sm-12">
                    
                       <div class="row">
                           <div class="col-md-4 col-sm-4">
                               <div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <strong class="color_azulfuerte">COMISIÓN EJECUTIVA</strong>
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="justify">
									    {{ $comision[0]->descripcion_corta }}
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <a href="{{ route('mostrarcontenido', ['id'=>$comision[0]->idTipo]) }}" class="btn btn-info">Mas</a>
									  </div>     
									</div>                                   
                               </div>        
                           </div>             
                           <div class="col-md-4 col-sm-4">
                               <div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <strong class="color_azulfuerte">COMITÉ COORDINADOR</strong> 
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="justify">
									    {{ $comite[0]->descripcion_corta }}
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <a href="{{ route('mostrarcontenido', ['id'=>$comite[0]->idTipo]) }}" class="btn btn-info">Mas</a>
									  </div>     
									</div>                                   
                               </div>        
                           </div>
                           <div class="col-md-4 col-sm-4">
                               <div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <strong class="color_azulfuerte">COMITÉ DE PARTICIPACIÓN CIUDADANA</strong>
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="justify">
									    {{ $cpc[0]->descripcion_corta }}
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <a href="{{ route('mostrarcontenido', ['id'=>$cpc[0]->idTipo]) }}" class="btn btn-info">Mas</a>
									  </div>     
									</div>                                  
                               </div>        
                           </div>                           
                       </div>  
                        
                   </div>
               </div> 
           </div>
        </div>
    </div>     
</div> 
<br /><br />
<!-- Fin SAEQROO, Comisión Ejecutiva, Comité Coordinador y CPC -->

<!-- Inicio Información de interés -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
            <h2 class="color_azulfuerte">Información de Interés</h2>
            

            
            @foreach($infointereses as $infointeres)
               
                @php
                    $c=1;
                    $total=count($infointeres->subopciones);
                @endphp
               
                @foreach($infointeres->subopciones as $infoint)
                   
                   @if($c==1)
                      <div class="row">
                   @endif

            	      <div class="col-md-3 col-sm-3">
            		     <div class="boxborder_azulfuerte shadow_azulbajo bg_color_blanco separador_10" align="center">
            		        @if($infoint->target==1)
                            <a href="{{ url($infoint->vinculo) }}"><h4><i class="{{ $infoint->icono }}"></i>&nbsp;{{ $infoint->descripcion }}</h4></a>
                            @elseif($infoint->target==2)
            		        <a href="{{ url($infoint->vinculo) }}" target="_blank"><h4><i class="{{ $infoint->icono }}"></i>&nbsp;{{ $infoint->descripcion }}</h4></a>
            		        @endif
            	         </div>
            	      </div>
            	   
                   @if($c==4 || $total==$c)
            	      @php $c=0; @endphp
            	      </div><br />

            	   @endif 

            	   @php $c++; @endphp 
                    
                @endforeach

            @endforeach
             

        
        </div>
    </div>    
</div>  
<br /><br />
<!-- Fin Información de interés -->

<!-- Inicio Sitios de Transparencia -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
            <h2 class="color_azulfuerte">Transparencia</h2>
            <div class="row">
            	<div class="col-md-4 col-sm-4">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <a href="https://www.plataformadetransparencia.org.mx/web/guest/inicio" target="_blank"><img class="img-fluid" src="{{ asset('img/transparencia/pnt.png') }}" /></a>
            	    </div>
            	</div>

            	<div class="col-md-4 col-sm-4">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <a href="https://consultapublicamx.inai.org.mx/vut-web/?idSujetoObigadoParametro=22217&idEntidadParametro=23&idSectorParametro=2" target="_blank"><img class="img-fluid" src="{{ asset('img/transparencia/transparenciaObligaciones.png') }}" /></a>
            	    </div>
            	</div>

            	<div class="col-md-4 col-sm-4">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <a href="http://www.idaipqroo.org.mx/cuestionario/sesaeqroo/" target="_blank"><img class="img-fluid" src="{{ asset('img/transparencia/transparenciaProactiva.png') }}" /></a>
            	    </div>
            	</div>            	
            </div>	            
        </div>
    </div>    
</div>  
<br /><br />
<!-- Fin Sitios de Transparencia -->

<!-- Inicio Sitios de Interés -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
            <h2 class="color_azulfuerte">Sitios de Interés</h2>
            <div class="row">
            	<div class="col-md-3 col-sm-3">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <a href="https://www.plataformadigitalnacional.org/" target="_blank"><img class="img-fluid" src="{{ asset('img/si/pdn.png') }}" /></a>
            	    </div>
            	</div>

            	<div class="col-md-3 col-sm-3">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <img class="img-fluid" src="{{ asset('img/si/politicaspublicas.png') }}" />
            	    </div>
            	</div>

            	<div class="col-md-3 col-sm-3">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <a href="https://sesaeqroo.gob.mx/" target="_blank"><img class="img-fluid" src="{{ asset('img/si/sli.png') }}" /></a>
            	    </div>
            	</div>

            	<div class="col-md-3 col-sm-3">
            		<div class="boxborder_azulfuerte shadow_azulfuerte bg_color_blanco separador_10" align="center">
            		    <a href="http://www.idaipqroo.org.mx/covid19/" target="_blank"><img class="img-fluid" src="{{ asset('img/si/micrositioCovid19.png') }}" /></a>
            	    </div>
            	</div>            	
            </div>	  
        </div>
    </div>
</div>  
<br /><br />
<!-- Fin Sitios de Interés -->

<!-- Inicio Infografias -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
           <h2 class="color_azulfuerte">Infografias</h2>
           <div class="boxbordershadow_azulfuerte_h">
           <br />			
		   	  <section class="vertical slider" data-sizes="50vw">
			      @foreach ($infografias as $infografia)
			      <div class="card">
			      	   <img class="img-fluid card-img-top" src="{{ $infografia->banner }}" />
			      </div>
			      @endforeach	
		   	  </section>
		   	  <br />
		   </div>	  
        </div>
    </div>
</div>  
<br /> <br />
<!-- Fin Infografias -->

<!-- Inicio Otros Sitios de Interés -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
		   <h2 class="color_azulfuerte">Otros Sitios de Interés</h2>	
           <div class="boxbordershadow_azulfuerte_h">			
		   	  <section class="regular slider">
			      @foreach ($sitiosint as $sitioint)
			      <div class="card" style="width:200px">
                    <a href="{{ $sitioint->url }}" target="_blank">
			      	    <img class="img-fluid card-img-top" src="{{ $sitioint->banner }}" />
                    </a>
			      </div>
			      @endforeach	
		   	  </section>
		   </div>	  
        </div>
    </div>
</div>  
<br /> <br />
<!-- Fin Otros Sitios de Interés -->

<!-- Inicio Redes Sociales -->
<div class="container-fluid">
    <div class='row'>
        <div class="col-md-12 col-sm-12">
           <h2 class="color_azulfuerte">S&iacute;guenos En Nuestras Redes Sociales</h2>
           <div class="boxborder_verde bg_color_verde boxborderrounded_1">
               <div class="row">  
			       <div class="col-md-12 col-sm-12" align="center">			           
                       <div class="row">                            
                           
                           <div class="col-md-3 col-sm-3">
                               <div class="h-100 boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <strong class="color_azulfuerte">FACEBOOK</strong>
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
                                          <div class="fb-page" data-href="https://www.facebook.com/Secretar%C3%ADa-Ejecutiva-del-Sistema-Anticorrupci%C3%B3n-del-Estado-de-Quintana-Roo-102120261576214" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Secretar%C3%ADa-Ejecutiva-del-Sistema-Anticorrupci%C3%B3n-del-Estado-de-Quintana-Roo-102120261576214" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Secretar%C3%ADa-Ejecutiva-del-Sistema-Anticorrupci%C3%B3n-del-Estado-de-Quintana-Roo-102120261576214">Secretaría Ejecutiva del Sistema Anticorrupción del Estado de Quintana Roo</a></blockquote></div>
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <br />
									  </div>     
									</div>     
                                  
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <a href="#" class="btn btn-info">FACEBOOK</a>
									  </div>     
									</div>                                   
                               </div>        
                           </div> 

                           <div class="col-md-6 col-sm-6">
                               <div class="h-100 boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <strong class="color_azulfuerte">YOUTUBE</strong>
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									      <div class="embed-responsive embed-responsive-16by9" align="center">
									          <iframe src="https://www.youtube.com/embed/yIgB6-QWKo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									      </div>
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <br />
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <a href="#" class="btn btn-info">YOUTUBE</a>
									  </div>     
									</div>                                   
                               </div>        
                           </div>                           

                           <div class="col-md-3 col-sm-3">
                               <div class="h-100 boxborder_azulfuerte shadow_azulfuerte bg_color_blanco boxborderrounded_2">
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <strong class="color_azulfuerte">TWITTER</strong>
									  </div>     
									</div>

									<div class="row">
									  <div class="h-100 col-md-12 col-sm-12" align="center">
									  								      	
                                          <p><a class="twitter-timeline" data-height="490" data-lang="es" data-width="" href="https://twitter.com/GobQuintanaRoo">Tweets by GobQuintanaRoo </a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
                                          
									  </div>     
									</div>

									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <br />
									  </div>     
									</div>     
                                  
									<div class="row">
									  <div class="col-md-12 col-sm-12" align="center">
									    <a href="#" class="btn btn-info">TWITTER</a>
									  </div>     
									</div>                                   
                               </div>        
                           </div> 

                                          
                       </div>                        
			       </div>
			   </div>			              	               
           </div>
        </div>
    </div>     
</div> 
<br /><br />
<!-- Fin SAEQROO, Comisión Ejecutiva, Comité Coordinador y CPC -->
<!-- Fin Redes Sociales -->
@endsection 


@push('jscustom')
<script type="text/javascript">
    $(document).on('ready', function() {

      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1
      });

      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });      

      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });

    });
</script>
@endpush