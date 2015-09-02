<?php

Route::get('github', 'AccountController@github_redirect');
Route::get('account/github', 'AccountController@github');

Route::get('/', 'PagesController@index');
Route::get('home', 'HomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contacts', 'PagesController@contacts');

Route::get('admin',['middleware'=>'manager','uses'=> 'AdminController@index']);
//Route::get('admin', 'PagesController@admin');
Route::get('admin/editUser/{id}', 'AdminController@editUser');
Route::post('admin/{id}', 'AdminController@updateUser');
Route::get('admin/deleteUser/{id}', 'AdminController@deleteUser');
Route::get('admin/deleteOrder/{id}', 'AdminController@deleteOrder');

Route::get('user/{id}', 'AdminController@show');

//Route::get('orders', 'PagesController@order');
Route::get('orders/create', 'OrdersController@create');
Route::post('orders', 'OrdersController@store');
Route::get('orders/ordersuccess', 'OrdersController@success');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/sortByName', 'ArticlesController@sortByName');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::patch('articles/{id}', 'ArticlesController@update');
Route::get('articles/{id}/delete', 'ArticlesController@delete');




Route::get('foo',['middleware'=>'manager',function(){
    return 'Эта страница толкьо для менеджеров';
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

*/


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
