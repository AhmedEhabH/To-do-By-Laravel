<?php

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

// Route::get('about', function(){
//     return view('about');
// });

Route::get('todos', 'TodosController@index');

# Show Task
Route::get('todos/{todo}', 'TodosController@show');

# Create Task
Route::get('new-todos', 'TodosController@create');

Route::post('store-todos', 'TodosController@store');

# Edit - Update
Route::get('todos/{todo}/edit', 'TodosController@edit');

Route::post('todos/{todo}/update-todos', 'TodosController@update');

# Delete
Route::get('todos/{todo}/delete', 'TodosController@delete');

# Task Done
Route::get('todos/{todo}/complete', 'TodosController@complete');