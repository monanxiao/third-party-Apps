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

// 微信token 验证
Route::get('wechat', 'PagesController@weixin');

// 微博
Route::get('weibo', function() {
    return Socialite::driver('weibo')->redirect();
})->name('weibo');

// github
Route::get('github', function() {
    return Socialite::driver('github')->redirect();
})->name('github');


// QQ
Route::get('qq', function() {
    return Socialite::driver('qq')->redirect();
})->name('qq');


// 微信
Route::get('weixin', function() {
    return Socialite::driver('weixin')->redirect();
})->name('weixin');

// 微信
Route::get('weixine', function() {
    return Socialite::driver('wechat_service_account')->redirect();
})->name('weixine');


// 微信Web
Route::get('weixinweb', function() {
    return Socialite::driver('weixinweb')->redirect();
})->name('weixinweb');


// 微信web
Route::get('wechat_web', function() {
    return Socialite::driver('wechat_web')->redirect();
})->name('wechat_web');

// 短信发送
Route::middleware('throttle:1,1')->post('sms/notification', 'LoginController@sms')->name('sms.notification');

// 接受用户登录参数
Route::any('login/{type}', 'LoginController@login')->name('login.type');

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

