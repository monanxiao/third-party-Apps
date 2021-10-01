<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 用户列表
    public function index()
    {
        $user = User::limit(50)->get();

        return view('users.home', ['users' => $user]);
    }
}
