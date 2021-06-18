<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/app', function () {

    $tasks = DB::table('tasks')->orderby('title')->get();

    return view('todo',compact('tasks'));

});//emnd of route

Route::post('store', function (Request $request) {

    DB::table('tasks')->insert([

        'title' => $request->title,

    ]);

    return redirect()->back();

});//emnd of route
