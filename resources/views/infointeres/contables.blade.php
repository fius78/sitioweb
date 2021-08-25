@extends('inicio')

@section('content')
<!-- Inicio boxborder_azulfuerte boxborder_rounded_1 -->
<div class="container-fluid bg_color_azulmuybajo"> 
    
        <!-- Inicio - Título Página -->  
        <br /> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="boxbordershadow_azulfuerte bg_color_blanco">
                       <h1 class="color_azulfuerte" align="center"> 
                       ARMONIZACIÓN CONTABLE
                       </h1> 
                    </div>  
                </div>  
            </div>
        </div>
        <!-- Fin - Título Página -->

        <!-- Inicio - Contables -->                
        @if ( count($contables)>0 )
        <br />
        <div class="container">
           <div class="row">
              <div class="col-md-12 col-sm-12">
                 <div class="boxborder_azulfuerte bg_color_blanco shadow_azulbajo">
                       
                    <h4 class="color_azulfuerte">Documentación Disponible</h4>
                    <br />
                    <div class="row">
                       <div class="col-md-12 col-sm-12">
                       
                          <table class="table table-hover">
                             <thead>
                                <tr class="bg_color_azulbajo">
                                   <th><strong class="color_azulfuerte">DESCRIPCIÓN</strong></th>
                                   <th><strong class="color_azulfuerte">AÑO</strong></th>
                                   <th><strong class="color_azulfuerte">[VER]</strong></th>                                   
                                </tr>
                             </thead>
                             <tbody>
                             
                             @foreach ($contables as $contable)                                                                                                                  
                                @php $urlInforme='infointeres/informes/'.$contable->id; @endphp
                                <tr>
                                   <td align="justify"><a href="{{ asset($urlInforme) }}">{{ $contable->descripcion }}&nbsp;&nbsp;<span class="badge badge-primary">{{ count($contable->informes) }}</span></a></td>
                                   <td align="justify">{{ $contable->anio }}</td>
                                   <td align="justify"><a href="{{ asset($urlInforme) }}"><img class="img-fluid" src=" {{ asset('img/iconos/ver.png') }}" /></a></td>                                   
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
              <div class="col-md-12 col-sm-12" align="center">{{ $contables->links() }}</div>  
           </div>         

        </div>
        <br />
        
        @endif
       <!-- Fin - Contables -->      
                 
     
    <br /> <br />
</div> 
<!-- Fin -->
@endsection