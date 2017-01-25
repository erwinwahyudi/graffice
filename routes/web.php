<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layout.main_template');
});

Route::get('admin', function() {
	return view('admin.index');
});

Route::get('/api/suratmasuk', 'GraphController@api');
Route::get('/suratmasuk', 'GraphController@hichart');
Route::get('/suratmasuk-pie', 'GraphController@piechart');
Route::get('/suratmasuk1', 'GraphController@grafik');

Route::get('/disposisi-masuk', 'GraphController@hichartvertikal_disposisi');
Route::get('/disposisi1', 'GraphController@hichart_disposisi');

Route::get('/disposisi-keluar', 'GraphController@disposisi_keluar');

