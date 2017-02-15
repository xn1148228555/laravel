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

Route::any('api', function () {
    return ['version'=>1.0];
});
 Route::get('api/user/register', 'Member\MemberController@register');
  Route::get('api/user/login', 'Member\MemberController@login');
  Route::get('api/user/logout', 'Member\MemberController@logout');
