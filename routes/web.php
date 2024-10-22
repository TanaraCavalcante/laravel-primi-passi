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
//TODO conecto o link com o que deve conter escrito em pagina
Route::get('/', function () {
    // INSERINDO DADOS DINAMICAMENTE
    //! Recolho os dados do DB

    //! Insiro em uma variàvel
    $start = "Hello Word!";

    //! Mando para a "view"
    return view('home',
        [
            "saluto" => $start
        ]
    );
});

//TODO conecto o link "/hello" em local host com o que deve conter escrito em pagina "hello word!"
Route::get('/hello', function () {
    return("hello word!");
});
