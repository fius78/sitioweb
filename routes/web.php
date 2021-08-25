<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('inicio');
});
*/

/// Inicio - FRONT del sitio 
Route::get('/', 'InicioController@index')->name('front');
/// Fin - FRONT del sitio

/// Inicio - Contenidos de los integrante del Sistema Anticorrupción
Route::get('integrante/contenido/{id}', 'SistemaAnticorrupcionController@index')->name('mostrarcontenido');
/// Fin - Contenidos de los integrante del Sistema Anticorrupción 

/// Inicio - Adjuntos de los integrante del Sistema Anticorrupción
Route::get('integrante/adjuntos/{id}', 'SistemaAnticorrupcionController@adjuntos')->name('adjuntosintegrante');
/// Fin - Adjuntos de los integrante del Sistema Anticorrupción 

/// Inicio - Videos de los integrante del Sistema Anticorrupción
Route::get('integrante/videos/{id}', 'SistemaAnticorrupcionController@videos')->name('videosintegrante');
/// Fin - Videos de los integrante del Sistema Anticorrupción 

/// Inicio - Sesiones de los integrante del Sistema Anticorrupción
Route::get('integrante/sesiones/{id}', 'SistemaAnticorrupcionController@sesiones')->name('sesionesintegrante');
/// Fin - Sesiones de los integrante del Sistema Anticorrupción 

/// Inicio - Contenido de la Sesion 
Route::get('integrante/sesion/{id}', 'SistemaAnticorrupcionController@sesion')->name('sesioncontenido');
/// Fin - Contenido de la Sesion 

/// Inicio - Armonización contable - listado
Route::get('infointeres/contables', 'InformacionInteresController@contables')->name('mostrarcontables');
/// Fin - Armonización contable 

/// Inicio - Armonización contable - documentos
Route::get('infointeres/informes/{id}', 'InformacionInteresController@informes')->name('contenidodocumentos');
/// Fin - Armonización contable 