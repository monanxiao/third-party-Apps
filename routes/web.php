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

// 微信
Route::get('weixin', function() {
    return Socialite::driver('weixin')->redirect();
});

// 微信Web
Route::get('weixinweb', function() {
    return Socialite::driver('weixinweb')->redirect();
});

// 微信
Route::get('weixine', function() {
    return Socialite::driver('wechat_service_account')->redirect();
});

// 微信web
Route::get('wechat_web', function() {
    return Socialite::driver('wechat_web')->redirect();
});

// github
Route::get('github', function() {
    return Socialite::driver('github')->redirect();
});


// QQ
Route::get('qq', function() {
    return Socialite::driver('qq')->redirect();
});

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

