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

Pour lancer le projet : php artisan serve

*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

//ici , tout les url qui commencent par article auron article controller //

Route::resource('article', 'ArticleController');

Route::get('/user', 'HomeController@indexhome');

Route::resource('/contact', 'ContactController');

Route::post('article/{id}/comment', [
    'as'   => 'article.comment',
    'uses' => 'ArticleController@postComment'
]);

Route::get('image-upload','ImageController@imageUpload');

Route::post('image-upload','ImageController@imageUploadPost');










