<?php
#Poner el lienzo 
Route::prefix('/admin')->group(function(){
    Route::get('/','Admin\TableroController@getTablero');
    Route::get('/users','Admin\UserController@getUsers');

    //modulo de productos
    Route::get('/productos','Admin\ProductController@getHome');
    Route::get('/productos/agregar','Admin\ProductController@getAddProducto');
});