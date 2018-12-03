<?php

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'FotoController@index');
Route::post('/', 'FotoController@store');
Route::delete('/{id}', 'FotoController@destroy');
Route::get('/download/{id}', 'FotoController@download');





