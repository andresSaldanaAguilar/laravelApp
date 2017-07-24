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

//rutas del frontend
Route::get('/',[
  'as'=>'front.members.index',
  'uses'=>'MembersController@index'
]);


//rutas del backend
Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
	//nombre de la subruta y nombre del controlador

  Route::get('/',['as'=>'admin.index',function () {
      return view('front.members.index');
  }]);

  Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',  [
      'uses'=>'UsersController@Destroy',
      'as'=>'admin.users.destroy'
  ]);

	Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',[
      'uses'=>'CategoriesController@Destroy',
      'as'=>'admin.categories.destroy'
  ]);

  Route::resource('tags','TagsController');
    Route::get('tags/{id}/destroy',[
      'uses'=>'TagsController@Destroy',
      'as'=>'admin.tags.destroy'
  ]);

  Route::resource('articles','ArticlesController');
    Route::get('articles/{id}/destroy',[
      'uses'=>'ArticlesController@Destroy',
      'as'=>'admin.articles.destroy'
  ]);

  Route::get('images',[
    'uses'=>'ImagesController@index',
    'as'=>'images.index'
  ]);
});


/*
Auth::routes();
*/
Route::get('admin/auth/login', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'admin.auth.logout'
]);
