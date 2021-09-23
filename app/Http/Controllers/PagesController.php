<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 登录页
    public function index()
    {
        return view('login');
    }

    // 注册页
    public function register()
    {
        return view('register');
    }
}
