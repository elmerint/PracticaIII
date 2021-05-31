<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Venta;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('compra', function(){
    $ventas = Venta::orderBy('created_at','desc')->get();
    return view('compra', compact('ventas'));
})->name('compra');



Route::post('venta', function(Request $request){
    //return $request->all();
    $nueva_venta = new Venta;
    $nueva_venta -> nombre_venta = $request->input('nombre_venta');
    $nueva_venta -> precio = $request->input('precio');
    $nueva_venta -> save();
    return redirect()-> route('compra')->with('info','¡¡Compra hecha con éxito!!');

}) -> name('venta.request');
