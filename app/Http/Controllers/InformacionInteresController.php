<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opcion;
use App\Contables;
use App\Informes;

class InformacionInteresController extends Controller
{
    /**
     * Display a listing of the armonización contable.
     *
     * @return \Illuminate\Http\Response
     */
    public function contables()
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo el listado de información contable a visualizar
           $contables=Contables::where('estatus','=','1')->orderBy('id','desc')->paginate(20);

           //Invoco la vista que mostrara la información
           return view('infointeres.contables')->with(compact('opciones','contables'));
    
    } 

    /**
     * Display a listing of the armonización contable.
     *
     * @return \Illuminate\Http\Response
     */
    public function informes($id)
    {
        
           //Obtengo las opciones del menú
           $opciones=Opcion::where('estatus','=','1')->orderBy('id','asc')->get();

           //Obtengo el listado de información contable a visualizar
           $contable=Contables::where('estatus','=','1')->where('id','=',$id)->orderBy('id','desc')->get();

           //Obtengo los informes o documentos de la información contable elegida para visualizar
           $informes=Informes::where('estatus','=','1')->where('idContable','=',$contable[0]->id)->orderBy('id','asc')->paginate(20);

           //Invoco la vista que mostrara la información
           return view('infointeres.informes')->with(compact('opciones','contable','informes'));
    
    }          
}
