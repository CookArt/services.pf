<?php
    Route::get('/','PagesController@index');
    Route::get('about','PagesController@about');
    Route::get('contact','PagesController@contact');
    Route::get('/services','ServiceController@services');

    Route::group(['middleware' => 'web'],
        function ()
        {
            Route::resource('articles','ArticlesController');
        }
    );

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');


    Route::group(['middleware' => 'web'], function () {
        Route::auth();

        Route::get('/home', 'HomeController@index');
    });
