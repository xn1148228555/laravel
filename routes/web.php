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
 
Auth::routes();

Route::get('/home', 'HomeController@index');
  Route::get('/article', 'ArticleController@index');
Route::get('/shaixuan', 'ShaiXuanController@index');
 Route::get('article/{id}', 'ArticleController@show');
 Route::post('comment', 'CommentController@store');

/*前台用户*/
Route::group(['middleware' => 'auth', 'namespace' => 'User', 'prefix' => 'user'], function() {  
    Route::get('/', 'UserController@index');
	  Route::get('article', 'ArticleController@index');
	  Route::resource('article', 'ArticleController');

});

 
Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
	Route::get('/', 'AdminController@index');
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
     $router->get('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');
	//    管理文章
    Route::get('article', 'ArticleController@index');
    Route::resource('article', 'ArticleController');
	//    分类管理
    Route::get('category', 'CategoryController@index');
    Route::resource('category', 'CategoryController');
	//评论管理
    Route::get('comment', 'CommentController@index');
    Route::resource('comment', 'CommentController');


    //    管理用户
    Route::get('user', 'UserController@index');
    Route::resource('user', 'UserController');
    //后台用户
	Route::resource('register', 'RegisterController');
    Route::resource('admins', 'AdminsController');
	//权限管理
	 Route::get('permission', 'PermissionController@index');
  Route::resource('permission', 'PermissionController');
    //角色管理
    Route::get('role', 'RoleController@index');
    Route::resource('role', 'RoleController');
    //tool

    Route::get('tool/clearCache', 'ToolController@clearCache');
    Route::post('tool/clearCache', 'ToolController@clearCache');
    //修改密码
    Route::any('modifypassword', 'ModifController@modify');
    //全局
    Route::any('setting/website', 'SettingController@website');
 
});

 // 指定 auth 的 guard 为 新建的 admins   Route::group(['middleware' => ['auth:admin']], function () { 
   // 登录成功才能访问的部分放在认证保护内     Route::get('/1', 'HomeControllera@index'); 
  //  }); Admin::guard('admins')-> 替换 Auth:: 来指定 guard。