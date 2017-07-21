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
// Route::get('/{id}', function ($id) {
//     $details=App\Category::find($id);
//     print_r($details);
//     return 'Hi there';
// });
Route::get('/test', 'TestController@index');
Route::get('/add', function(){
  return view('add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
