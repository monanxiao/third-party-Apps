<?php

use Illuminate\Support\Facades\Route;

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

// 首页
Route::get('/', 'PagesController@index')
    ->name('home');

// 注册界面
Route::get('uregister', 'PagesController@register')
    ->name('uregister');

// 用户登录
Auth::routes();

// 用户列表
Route::get('users', 'UsersController@index')->name('users.index');

