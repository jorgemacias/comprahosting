<?php
use App\Clientes;
use App\Http\Resources\ClientesCollection;
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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes/data', function(){
    return new ClientesCollection(Clientes::paginate(15));
})->name('clientes.data');
Route::get('/clientes/form', function(){
    return view('clientes.form')->render();
})->name('clientes.data');
