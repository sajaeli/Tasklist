<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
Rout::get('task', function(){
    $tasks = DB::table('tasks')->get();
    //dd($tasks);
    return view('tasks');
});
Route::get('tasks/show/{id}', function($id){
    $task = DB::table('tasks')->where('id',$id)->find($id);
    dd($task);
    return view('show', compact('task'));
});
Route::get('app', function(){
    $tasks = DB::table('tasks')->get();
    return view('todo', compact('tasks'));
});
Rout::post('store', function(Request $request){
    DB::table('tasks')->insert([
     'title' => $request->title
    ]);
    return redirect()->back();
});

