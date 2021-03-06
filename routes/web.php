<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(
    [],
    function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/login', "HomeController@login")->name('login');
        Route::get('/register', "HomeController@register")->name('register');

    });

//Route::get('/atom-admin', 'HomeController@getLogin')->name('get.login');


Route::group(
    [
        'prefix' => 'super-admin',
        'namespace' => 'Admin',
        'middleware' => 'auth'
    ],
    function () {

        Route::get('/', 'PostController@index')->name('admin.index');
        Route::group([], function () {

            Route::resources([
                'post' => 'PostController',
                'category' => 'CategoryController',
                'tag' => 'TagController'

            ]);

        });

    });
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

