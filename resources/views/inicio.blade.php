<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SESAEQROO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
 
        <!-- bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- font-awesome -->  
        <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

        <!-- datatables -->
        <link href="{{ asset('vendor/iCheck/skins/flat/aero.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('vendor/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">    
        <link href="{{ asset('vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">    
        <link href="{{ asset('vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">

        <!-- Estilos Slick -->       
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">          

        <!-- Estilos Sitio -->
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
                     
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0" nonce="YSBMP6CG"></script>

        <!-- INICIO Banner -->
        <div class="container-fluid">
           <div class="row">  
               <div class="col-md-12 col-sm-12">
                   <img class="img-fluid" src="{{ asset('img/cabecera/banner_sitio.png') }}" />
               </div>
           </div> 
       </div>
       <!-- FIN Banner -->
       
       <!-- INICIO Menú -->
       <div class="container-fluid bg_color_azulfuerte">    
           <nav class="navbar navbar-expand-lg navbar-dark bg_color_azulfuerte">
               
               <a class="navbar-brand" href="/"><i class="fas fa-home"></i>&nbsp;<b>INICIO</b></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">                       
                       @foreach($opciones as $opcion)  
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{ $opcion->descripcion }}
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               @foreach($opcion->subopciones as $subopcion)
                                  @if($subopcion->target==1)
                                      <a class="dropdown-item" href="{{ url($subopcion->vinculo) }}">{{ $subopcion->descripcion }}</a>
                                  @elseif($subopcion->target==2)
                                      <a class="dropdown-item" href="{{ url($subopcion->vinculo) }}" target="_blank">{{ $subopcion->descripcion }}</a>
                                  @endif    
                               @endforeach
                           </div>
                       </li> 
                       @endforeach                       
                   </ul>
               </div>                
                  
           </nav>       
       </div>
       <!--FIN Menú -->  
       
       <!-- INICIO Área de visualización del contenido -->              
       @yield('content')
       <!-- FIN Área de visualización del contenido --> 
       
       <!-- INICIO Footer --> 
       <div class="container-fluid">    
           <div class="row bg_color_azulfuerte">  
               <div class="col-md-12 col-sm-12 espacio_interior10">
                   <h4 class="color_blanco"><u><b>UBICACIÓN SESAEQROO</b></u></h4>
               </div>
           </div>

           <div class="row bg_color_azulfuerte">           
               <div class="col-md-4 col-sm-4 espacio_interior10">
                   <div class="embed-responsive embed-responsive-16by9" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.3500878525856!2d-88.31217728579598!3d18.513075274236865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5ba367cf5e84a5%3A0x79dfe4cf128c0a7a!2sSESAEQROO!5e0!3m2!1ses!2smx!4v1620975268874!5m2!1ses!2smx" width="320 height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   </div>   
               </div>  

               <div class="col-md-4 col-sm-4">
                   <div class="color_blanco espacio_interior10" align="center">
                       <p align="jutify">
                       <i class="fas fa-map-marker-alt"></i>&nbsp;Av. Bugambilias No. 438 esq. Sicilia<br />
                       Col. Josefa Ortíz de Domínguez<br />
                       C.P. 77036<br />
                       Chetumal, Q. Roo<br /><br />

                       <i class="fas fa-phone-alt"></i>&nbsp;Teléfonos: 9831292776 y 9831292785<br /><br />

                       <i class="fas fa-envelope"></i>&nbsp;Correo: sesaeqroo@qroo.gob.mx
                       </p>     
                   </div>   
               </div>

               <div class="col-md-4 col-sm-4 espacio_interior10">
                   <div class="embed-responsive embed-responsive-16by9" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!4v1621044449864!6m8!1m7!1s4Cx5LdjNqKRhzLuk2dcSSQ!2m2!1d18.51321604477602!2d-88.31001667588652!3f163.01978358856314!4f-7.887129741707483!5f0.7820865974627469" width="320" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   </div>   
               </div>  
           </div>
           
           <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4" align="center">
                   <img class="img-fluid" src="{{ asset('img/piePagina/img_qroo.png')}}" />   
               </div>
      
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4" align="center">
                   <p class="derechos_sitio">Copyright SESAEQROO | Todos los Derechos Reservados</p>
               </div>
      
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4" align="center">
                   <img class="img-fluid" src="{{ asset('img/piePagina/img_saeqroo.png')}}" />  
               </div>
           </div>             
        </div>
        <!-- FIN Footer -->
        
        <!--Funciones JS de Bootstrap -->           
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{ asset('vendor/iCheck/icheck.min.js') }}"></script>
        
        <!--Funciones JS de DataTables -->
        <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>   
        <script src="{{ asset('vendor/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>  
               
        <script src="{{ asset('vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>  
        <script src="{{ asset('vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
        
        <script src="{{ asset('vendor/skycons/skycons.js') }}"></script>
        <script src="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>                        
        <!--Funciones JS de Slick -->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>        
        <script src="{{ asset('slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>

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


            $('#datatable').DataTable( {
                language: {
                    processing:     "Procesando...",
                    search:         "Buscar",
                    lengthMenu:     "Mostrar _MENU_ registros",
                    info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    infoFiltered:   "(filtrado de un total de _MAX_ registros)",
                    infoPostFix:    "",
                    loadingRecords: "Cargando...",
                    zeroRecords:    "No se encontraron resultados",
                    emptyTable:     "Ningún dato disponible en esta tabla",
                    paginate: {
                        first:      "Primero",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Último"
                    },
                    aria: {
                        sortAscending:  ": Activar para ordenar la columna de manera ascendente",
                        sortDescending: ": Activar para ordenar la columna de manera descendente"
                    }
                }
            } );            
        </script>        
        @stack('jscustom');
    </body>
</html>
