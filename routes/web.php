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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/report', function () {
    return view('report');
});

// Route::get('/show', function () {
//     return view('show');
// });

Route::get('/messages', 'MessagesController@getMessages');

// submit contact 
Route::post('/contact/submit', 'MessagesController@submit');

//submit report
Route::post('/report/submit', 'ReportController@submit');

Route::get('/todo', 'TodosController@index');
//todo controller
Route::resource('todo', 'TodosController');
