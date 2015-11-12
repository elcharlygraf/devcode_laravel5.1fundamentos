<?php

Route::get('login', ['as' => 'login', 'uses' => 'LoginController@login']);
Route::post('login', ['as' => 'postlogin', 'uses' => 'LoginController@postlogin']);
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('users', ['middleware' => ['auth'], 'as' => 'getUsers', 'uses' => 'UserController@getUsers']);

Route::get('views', ['as' => 'getViews', 'uses' => 'UserController@getViews']);
Route::post('views', ['as' => 'Views', 'uses' => 'UserController@saveViews']);
//PARA EL SUPER ADMNISTRADOR
Route::group(['as' => 'superadmin'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
    }]);
});
//DUEÑOS DE LAS PLAYAS DE ESTACIONAMIENTO
Route::group(['as' => 'admin'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
    }]);
});
//CLIENTES
Route::group(['as' => 'customer'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
    }]);
});
//LISTAR LAS PLAYAS DE ESTACIONAMIENTO
Route::group(['as' => 'parketing'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
    }]);
});
//PARA LA NAVEGACION EN EL PORTAL
Route::group(['as' => '/'], function () {
    Route::get('listar', ['as' => 'dashboard', function () {
    }]);
    Route::get('solicitud', ['as' => 'dashboard', function () {
    }]);
    Route::get('registrarse', ['as' => 'dashboard', function () {
    }]);
});


