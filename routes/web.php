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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
	//nombre de la subruta y nombre del controlador
	Route::resource('users','UsersController');
  Route::get('users/{id}/destroy',[
    'uses'=>'UsersController@Destroy',
    'as'=>'admin.users.destroy'
  ]);

	Route::resource('categories','CategoriesController');
  /*Route::get('users/{id}/destroy',[
    'uses'=>'UsersController@Destroy',
    'as'=>'admin.users.destroy'
  ]);*/
});


/*
Route::group(['prefix'=>'articles'],function(){

 ///articles/view/1
  Route::get('view/{id}',[
    'uses' => 'TestController@view',
    'as' => 'articlesView'
  ]);

});
*/
