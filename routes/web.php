<?php

use Illuminate\Support\Facades\Route;

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

route ::get('/', function(){
    return view('vista.index');
});

route ::get('/api', function(){
    return view('vista.api');
});

route::get('/ruta_uno', [App\Http\Controllers\rutauno_controller::class, 'index'])->name('ruta_uno');
route::get('/ruta_dos', [App\Http\Controllers\rutados_controller::class, 'index'])->name('ruta_dos');
route::get('/ruta_tres', [App\Http\Controllers\rutatres_controller::class, 'index'])->name('ruta_tres');