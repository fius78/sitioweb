<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opcion;
use App\Subopcion;
use App\Tipos;
use App\Integrantes;
use App\ConsideracionLey;
use App\Adjuntos;
use App\Videos;
use App\Murales;
use App\Sesiones;
use App\Anexos;

class SistemaAnticorrupcionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo información del integrante
           $integrante=Integrantes::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->get();
        
           //Obtengo las funciones del integrante
           $funciones=ConsideracionLey::where('estatus','=','1')->where('Tipo','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtengo las facultades del integrante
           $facultades=ConsideracionLey::where('estatus','=','1')->where('Tipo','=','2')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtengo las atribuciones del integrante
           $atribuciones=ConsideracionLey::where('estatus','=','1')->where('Tipo','=','3')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtengo el mural de infografías
           $murales=Murales::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtenemos el total de adjuntos para el integrante
           $tadjuntos=Adjuntos::where('estatus','=','1')->where('idTipo','=',$id)->count();

           //Obtenemos el total de videos para el integrante
           $tvideos=Videos::where('estatus','=','1')->where('idTipo','=',$id)->count();

           //Obtenemos el total de sesiones para el integrante
           $tsesiones=Sesiones::where('estatus','=','1')->where('idTipo','=',$id)->count();

           //Invoco la vista que mostrara la información
           return view('integrante.contenido')->with(compact('opciones','integrante','funciones','facultades','atribuciones','murales','tadjuntos','tvideos','tsesiones'));
    
    }  


    /**
     * Display a listing of the adjuntos.
     *
     * @return \Illuminate\Http\Response
     */
    public function adjuntos($id)
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo información del integrante
           $integrante=Integrantes::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtengo los adjuntos del integrante
           $adjuntos=Adjuntos::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->paginate(20);

           //Invoco la vista que mostrara la información
           return view('integrante.adjuntos')->with(compact('opciones','integrante','adjuntos'));
    
    }  


    /**
     * Display a listing of the videos.
     *
     * @return \Illuminate\Http\Response
     */
    public function videos($id)
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo información del integrante
           $integrante=Integrantes::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtengo los videos del integrante
           $videos=Videos::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->paginate(20);


           //Invoco la vista que mostrara la información
           return view('integrante.videos')->with(compact('opciones','integrante','videos'));
    
    }

    /**
     * Display a listing of the sesiones.
     *
     * @return \Illuminate\Http\Response
     */
    public function sesiones($id)
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo información del integrante
           $integrante=Integrantes::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','asc')->get();

           //Obtengo las sesiones del integrante
           $sesiones=Sesiones::where('estatus','=','1')->where('idTipo','=',$id)->orderBy('id','desc')->paginate(20);

           //Invoco la vista que mostrara la información
           return view('integrante.sesiones')->with(compact('opciones','integrante','sesiones'));
    
    }        

    /**
     * Display contenido de la sesion.
     *
     * @return \Illuminate\Http\Response
     */
    public function sesion($id)
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();
           
           //Obtengo los datos de la sesion
           $sesion=Sesiones::where('estatus','=','1')->where('id','=',$id)->get();
           $idTipo=$sesion[0]->idTipo;
           
           //Obtengo los anexos de la sesión
           $anexos=Anexos::where('estatus','=','1')->where('idSesion','=',$sesion[0]->id)->orderBy('id','asc')->get();

           //Obtengo información del integrante
           $integrante=Integrantes::where('estatus','=','1')->where('idTipo','=',$idTipo)->orderBy('id','asc')->get();

           //Invoco la vista que mostrara la información
           return view('integrante.sesion')->with(compact('opciones','sesion','anexos','integrante'));
    
    } 
}
