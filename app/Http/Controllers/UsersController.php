<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // 用户列表
    public function index()
    {
        $user = User::all();

        return view('users.home', ['users' => $user]);
    }
}
