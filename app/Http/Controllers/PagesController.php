<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
            'only' => ['index']
        ]);
    }

    public function weixin(Request $request){

        $input = $request->all();
        # 一定要抓取4个参数
        $echoStr  = $input[ "echostr" ];
        $signature = $input[ "signature" ];
        $timestamp = $input[ "timestamp" ];
        $nonce   = $input[ "nonce" ];
        # 微信官方验证方式
        $token = env( 'TOKEN',"123456" ); #填写微信公众平台输入的token
        $tmpArr = [ $token, $timestamp, $nonce ];
        sort( $tmpArr, SORT_STRING );
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        # 打印返回结果
        if( $tmpStr == $signature ){
            return response($echoStr);
        } else{
            return response();
        }
    }

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
