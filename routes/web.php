<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\EventController; ///Faz a rota para o arquivo "EventController.php"

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contato', function () { //Acessa pelo de cima
    return view('contact');          //O sistema volta a de baixo
});

Route::get('/produtos', function () {  //O que está dento de apostrofos é a chave que recebe a variável

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtosTeste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});