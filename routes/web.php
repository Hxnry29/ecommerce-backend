<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    echo "LISTADO DE PRODUCTOS DEL ECOMMERCE";
});


Route::get('/products/create', function () {
    echo "FORMULARIO PARA CREAR UN PRODUCTO";
});


Route::get('/products/{name}/{categoria}', function ($name, $categoria = null) {

    if ($categoria == null){
        echo "EL PRODUCTO ES: $name";
    }else{

        echo "El producto es $name, y su categoria es $categoria";
        
    }
   
});



