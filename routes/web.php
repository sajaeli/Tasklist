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

Route::get('/', function () {
    return view('welcome');
});
Rout::get('tasks',function(){
    $tasks= [
    'Task 1',
    'Task 2',
    'Task 3',
    ];
    return view('tasks',compact('task'));
});
Rout::get('show/{id}',function($id){
    $tasks = [
        'first-task' => 'Task 1',
        'second-task' => 'Task 2',
        'Third-task' => 'Task 3',
    ];
    $task = $task[$id] ;
    return view('show',compact('task'));
});
