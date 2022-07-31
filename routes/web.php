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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('', 'HomeController@index')->name('homepage');




Auth::routes();



//

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard');

	//tag route
	Route::get('all-tag','TagController@index')->name('all.tag');
	Route::get('add-tag','TagController@create')->name('add.tag');
	Route::post('store-tag','TagController@store')->name('store.tag');
	Route::get('delete-tag{id}','TagController@destroy')->name('delete.tag');




	//Category...........

	Route::get('all-category','CategoryController@index')->name('all.category');
	Route::get('add-Category','CategoryController@create')->name('add.Category');
	Route::post('store-category','CategoryController@store')->name('store.category');
	Route::get('edit-category{id}','CategoryController@edit')->name('edit.category');
	Route::post('update-category{id}','CategoryController@update')->name('update.category');
	Route::get('delete-category{id}','CategoryController@destroy')->name('delete.category');


	//top post

	Route::get('all-toppost','ToppostController@index')->name('all.toppost');
	Route::get('add-toppost','ToppostController@create')->name('add.toppost');
	Route::post('store-toppost','ToppostController@store')->name('store.toppost');
	Route::get('delete-toppost{id}','ToppostController@destroy')->name('delete.toppost');
	Route::get('show.toppost{id}','ToppostController@topshow')->name('show.toppost');
	


	//post route.............
	Route::get('all-post','PostController@index')->name('all.post');
	Route::get('add-post','PostController@create')->name('add.post');
	Route::post('store-post','PostController@store')->name('store.post');
	Route::get('edit-post{id}','PostController@edit')->name('edit.post');
	Route::post('update.post{id}','PostController@update')->name('update.post');
	Route::get('show.post{id}','PostController@show')->name('show.post');
	Route::get('delete-post{id}','PostController@destroy')->name('delete.post');



	//pending..........
	Route::get('pending.post','PostController@pending')->name('pending.post');
	Route::get('approve.post{id}','PostController@approve')->name('approve.post');





});


Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard');


	//author post
	Route::get('all-post','PostController@index')->name('all.post');
	Route::get('add-post','PostController@create')->name('add.post');
	Route::post('store-post','PostController@store')->name('store.post');

	Route::get('delete-post{id}','PostController@destroy')->name('delete.post');

});


Route::get('category_post{id}', 'HomeController@category_post')->name('category_post');

Route::get('topdetails{id}', 'HomeController@topdetails')->name('topdetails');
Route::get('details{id}', 'HomeController@details')->name('details');
