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

Route::get('/',['as'=>'admin.index',function () {
    return view('welcome');
}]);

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
	//nombre de la subruta y nombre del controlador

  Route::get('/',['as'=>'admin.index',function () {
      return view('welcome');
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
      Route::get('categories/{id}/destroy',[
        'uses'=>'TagsController@Destroy',
        'as'=>'admin.tags.destroy'
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
