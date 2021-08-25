<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opcion;
use App\Subopcion;
use App\SitioInteres;
use App\Integrantes;
use App\Infografia;
use App\Nota;

class InicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo información de tipo SAEQROO
           $saeqroo=Integrantes::where('estatus','=','1')->where('idTipo','=','1')->orderBy('id','asc')->get();

           //Obtengo información de tipo SESAEQROO
           $sesaeqroo=Integrantes::where('estatus','=','1')->where('idTipo','=','2')->orderBy('id','asc')->get();
        
           //Obtengo información de tipo SECRETARIO TÉCNICO
           $secretario=Integrantes::where('estatus','=','1')->where('idTipo','=','3')->orderBy('id','asc')->get(); 

           //Obtengo información de tipo Comisión Ejecutiva
           $comision=Integrantes::where('estatus','=','1')->where('idTipo','=','4')->orderBy('id','asc')->get();

           //Obtengo información de tipo Comité Coordinador
           $comite=Integrantes::where('estatus','=','1')->where('idTipo','=','5')->orderBy('id','asc')->get();

           //Obtengo información de tipo Comité de Participación Ciudadana
           $cpc=Integrantes::where('estatus','=','1')->where('idTipo','=','6')->orderBy('id','asc')->get();

           //Obtengo las indografias
           $infografias=Infografia::where('estatus','=','1')->where('publicado','=','1')->orderBy('orden','asc')->get();

           //Obtengo los sitios de interés
           $sitiosint=SitioInteres::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo las notas
           $notas=Nota::where('estatus','=','1')->where('publicado','=','1')->limit(3)->orderBy('fechaHechos','desc')->get();

           //Obtengo la información de interés  
           $infointereses=Opcion::where('estatus','=','1')->where('id','=','3')->orderBy('id','asc')->get();

           //Invoco la vista "lista" dentro de la carpeta "caso" y le envío $casos
           return view('front')->with(compact('opciones','sesaeqroo','secretario','saeqroo','comision','comite','cpc','sitiosint','infografias','notas','infointereses'));
    
    }      

}
