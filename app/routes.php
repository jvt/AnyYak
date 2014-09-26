<?php

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('search', ['uses' => 'SearchController@index', 'as' => 'search.index']);