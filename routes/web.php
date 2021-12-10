<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;

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

Route::get('/', function () {
    return view('welcome');
});
/* Rutas de los links--------------------------------------------------- */
// Route::get('/addEmpresa',function(){
//     return view('addEmpresa');
    
// })->name('addEmpresa');

// Route::get('/listEmpresas',function(){
//      return view('listEmp');
    
// })->name('listEmpresa');
// Route::get('/listEmpresas', App\Http\Controllers\CrearEmpresaController@index);
// Route::post('empresas', App\Http\Controllers\CrearEmpresaController@store);
Route::get('/listaConv',function(){
    return view('listaConv');
})->name('convocatorias');

Route::get('/addPropuesta',function(){
    return view('addPropuesta');
})->name('convocatorias');

Route::get('/listaPropuesta',function(){
    return view('listaPropuesta');
})->name('convocatorias');

Route::get('/convocatorias',function(){
    return view('convocatoria');
    
})->name('convocatorias');
/*---------------------------------------------------------------------*/
Auth::routes();

Route::resource('/empresas',App\Http\Controllers\EmpresaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::put('convocatorias', App\Http\Controllers\ArchivoController::class);


