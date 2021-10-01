<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Requests\UserSmsRegisterRequests;
use Illuminate\Auth\AuthenticationException;
use Overtrue\EasySms\EasySms;
use GuzzleHttp;
use Auth;
use Log;

class LoginController extends Controller
{

    // 接收登录参数
    public function login(Request $request,$type)
    {
        $data = [];
        $data['type'] = $type;// 注册类型

        if($type != 'phone')
        {
            $user = Socialite::driver($type)->user();// 获取用户数据

            // 验证用户是否存在
            if (User::whereJsonContains($type, ['id' => $user->id ])->exists())
            {
                $member = User::whereJsonContains($type, ['id' => $user->id ])->first();
                Auth::login($member);// 登录此用户
                return redirect()->route('users');
            }

        }else{

            // 验证用户是否存在
            if (User::where($type, $request->phone)->exists())
            {
                $member = User::where($type, $request->phone)->first();
                Auth::login($member);// 登录此用户
                return redirect()->route('users');
            }
        }

        // 判断登录方式
        switch ($type) {
            case 'qq':

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

                $data['name'] = $user->nickname;// 昵称

                $data['weixin'] = [
                    'id' => $user->id, // ID
                    'nickname' => $user->nickname, // 昵称
                    'name' => $user->name,// 名称
                    'email' => $user->email,// 邮箱
                    'avatar' => $user->avatar,// 头像
                    'unionid' => $user->unionid,// 开放平台唯一 unionid
                    'user' => $user->user // 数据包
                ];

                break;
            case 'github':

                $data['name'] = $user->nickname;// 昵称

                $data['github'] = [
                    'id' => $user->id, // ID
                    'nickname' => $user->nickname, // 昵称
                    'name' => $user->name,// 名称
                    'email' => $user->email,// 邮箱
                    'avatar' => $user->avatar,// 头像
                    'user' => $user->user // 数据包
                ];

                break;
            case 'wechat':
                # code...
                break;
            case 'weibo':

                $data['name'] = $user->nickname;// 昵称
                $data['weibo'] = [
                    'id' => $user->id, // ID
                    'nickname' => $user->nickname, // 昵称
                    'name' => $user->name,// 名称
                    'email' => $user->email,// 邮箱
                    'avatar' => $user->avatar,// 头像
                    'user' => $user->user // 数据包
                ];

                break;
            case 'phone':

                $verifyData = \Cache::get($request->verification_key);// 验证码 key

                if (!$verifyData) {
                    abort(403, '验证码已失效');
                }

                if (!hash_equals($verifyData['code'], $request->code)) {
                    // 返回401
                    throw new AuthenticationException('验证码错误');
                }

                $data['name'] = $request->phone;// 昵称
                $data['phone'] = $request->phone;// 昵称

                // 清除验证码缓存
                \Cache::forget($request->verification_key);

                break;
            default:
                # code...
                break;
        }

        $user = User::create($data);// 数据入库
        Auth::login($user);

        return redirect()->route('users');

    }

    // 发送短信
    public function sms(UserSmsRegisterRequests $request, EasySms $easySms)
    {
        $phone = $request->phone;// 手机号

        // 本地环境 使用 固定验证码 节流
        if (!app()->environment('production')) {

            $code = '1234';

        } else {

            // 生成4位随机数，左侧补0
            $code = str_pad(random_int(1, 9999), 4, 0, STR_PAD_LEFT);

            try {

                $res = [
                    'Uid' => env('SMS_WANGJIAN_ACCOUNT'),
                    'Key' => env('SMS_WANGJIAN_KEY'),
                    'smsMob' => $phone,
                    'smsText' => '您的验证码为:' . $code
                ];

                $this->sms_send($res);// 执行短信发送

            } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $e) {

                Log::info($e);
                return response()->json([
                    'code' => -1,
                    'msg' => '验证码发送失败，请联系管理员！'
                ]);
            }
        }

        $key = 'verificationCode_'.Str::random(15);// 缓存存入值
        $expiredAt = now()->addMinutes(5);// 有效期
        // 缓存验证码 5 分钟过期。
        \Cache::put($key, ['phone' => $phone, 'code' => $code], $expiredAt);

        return response()->json([
            'key' => $key,
            'code' => 1,
            'msg' => '验证码发送成功！'
        ]);
    }

    // 发送短信
    function sms_send($res)
    {
        $url = 'http://utf8.api.smschinese.cn/';
        $http = new GuzzleHttp\Client;

        $response = $http->get($url, [
            'query' => $res,
        ]);

        return $response;
    }
}
