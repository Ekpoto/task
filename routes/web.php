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

Route::get('/', 'PostsController@welcome');

Route::get('contact', 'PostsController@contact');

Route::get('services', 'PostsController@services');

Route::get('portfolio', 'PostsController@portfolio');