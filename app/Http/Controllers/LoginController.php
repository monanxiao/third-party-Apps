<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Auth;
use Log;

class LoginController extends Controller
{
    // 接收登录参数
    public function login(Request $request,$type)
    {
        $user = Socialite::driver($type)->user();// 获取用户数据
        $data = [];
        $data['type'] = $type;// 注册类型

        // 判断登录方式
        switch ($type) {
            case 'qq':

                // 验证用户是否存在
                if (User::whereJsonContains($type, ['id' => $user->id ])->exists())
                {
                    $member = User::whereJsonContains($type, ['id' => $user->id ])->first();
                    Log::info($member);
                    Auth::login($member);// 登录此用户
                    return redirect()->route('home');
                }

                $data['name'] = $user->nickname;// 昵称

                $data['qq'] = [
                    'id' => $user->id, // ID
                    'nickname' => $user->nickname, // 昵称
                    'name' => $user->name,// 名称
                    'email' => $user->email,// 邮箱
                    'avatar' => $user->avatar,// 头像
                    'unionid' => $user->unionid,// 开放平台唯一 unionid
                    'user' => $user->user // 数据包
                ];
                break;

            case 'weixin':
                # code...
                break;
            case 'github':
                # code...
                break;
            case 'wechat':
                # code...
                break;
            case 'weibo':

                $data['name'] = $user->nickname;// 昵称
                $data['weibo'] = [
                    'id' => $user->id, // ID
                    'nickname' => $user->nickname, // 昵称
                    'avatar' => $user->avatar,// 头像
                ];

                break;
            default:
                # code...
                break;
        }

        $user = User::create($data);// 数据入库
        Auth::login($user);

        return redirect()->route('home');

    }
}
