<?php

Route::prefix('/admin')->group(function(){
    Route::get('/','Admin\TableroController@getTablero');
});