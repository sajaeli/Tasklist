<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
?php

Route::get('products', 'ProductController@index');
Route::get('product/{name}','ProductController@show');
Route::post('storeToProductController','ProductController@store')->name('store');
Route::delete('delete/{name}','ProductController@destroy');
Route::put('edit/{name}','ProductController@showupdate');
Route::patch('update/{name}','ProductController@Update');
});

