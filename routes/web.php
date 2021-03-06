<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/teste', 'HomeController@teste')->middleware('auth');

Route::resource('/livros', 'LivrosController');

Route::get('/teste', 'LivrosController@teste');

Route::get('/testeUpdate', 'LivrosController@testeUpdate');

Route::get('/dashboard', 'LivrosController@index')->name('dashboard');

/*Route::group(['middleware' => 'auth'], function(){
    Route::get('/teste', function () {
        return view('welcome');
    });
});
*/
