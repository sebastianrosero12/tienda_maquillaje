<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getHome(){
        return view('admin.productos.home'); 
    }

    public function getAddProducto(){
        return view('admin.productos.agregar'); 
    }
}
