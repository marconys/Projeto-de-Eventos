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
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactControler;
use App\Http\Controllers\ProductController;

Route::get('/',[EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/contacts/create', [ContactControler::class, 'contact']);
Route::post('/events', [EventController::class,  'store']);




/*passando o id de forma opcional
Route::get('/produtos/{id?}', function ($id = null){
    return view('produtos', ['id' => $id]);
});

//Passando query string
Route::get('/produtos_test', function (){

    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
}); */
