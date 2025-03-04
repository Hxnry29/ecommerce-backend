<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // este método es para listar los productos
        echo "LISTADO DE PRODUCTOS DEL ECOMMERCE";
    }

    public function create(){ // formulario para crear un producto
        echo "FORMULARIO PARA CREAR UN PRODUCTO";
    }

    public function show ($name, $categoria = null) {

        if ($categoria == null){
            echo "EL PRODUCTO ES: $name";
        }else{
    
            echo "El producto es $name, y su categoria es $categoria";
            
        }
       
    
    { //mostrar un producto

    }
}}
