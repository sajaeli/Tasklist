<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
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

    // $tasks = DB::table('tasks')->orderby('title')->get();
    // $tasks = Task::all();
    $tasks = Task::orderby('title')->get();

    return view('todo',compact('tasks'));

});//emnd of route

Route::post('delete/{id}', function (Request $request,$id) {

    $task = Task::find($id);

    $task->delete();

    return redirect()->back();

});//emnd of route


Route::post('store', function (Request $request) {

    // DB::table('tasks')->insert([

    //     'title' => $request->title,

    // ]);

    $task = new Task;
    
    $task->title = $request->title;

    $task->save();

    return redirect()->back();

});//emnd of route
