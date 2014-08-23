<?php

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::post('search', ['uses' => 'SearchController@index', 'as' => 'search.index']);