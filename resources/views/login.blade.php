
@extends('layouts.app')
@section('content')

    <section class="aui-content">
      <div class="aui-content-box clearfix">
        <div class="aui-content-box-fl">
          <div class="aui-form-header">
            <div class="aui-form-header-item on">密码登录</div>
            <div class="aui-form-header-item">验证码登录</div>
            <span class="aui-form-header-san"></span>
          </div>
          <div class="aui-form-content">
            <div class="aui-form-content-item" style="display: block;">
              <form action="javascript:;">
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入手机号/邮箱" data-required="required" autocomplete="off"></div>
                <div class="aui-form-list">
                  <input type="password" class="aui-input" name="" placeholder="请输入密码" data-required="required" autocomplete="off"></div>
                <div class="aui-form-pwd clearfix">
                  <a href="javascript:;">忘记密码？</a></div>
                <div class="aui-form-btn">
                  <input type="submit" class="aui-btn" value="登 录"></div>
              </form>
            </div>
            <div class="aui-form-content-item" style="display: none;">
              <form action="javascript:;">
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入手机号" data-required="required" autocomplete="off"></div>
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off">
                  <a href="javascript:;" class="aui-child aui-child-img">
                    <img src="./images/yzm.png" alt=""></a>
                </div>
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
                  <input type="button" class="aui-child" value="获取验证码"></div>
                <div class="aui-form-pwd clearfix">
                  <a href="javascript:;">忘记密码？</a></div>
                <div class="aui-form-btn">
                  <input type="submit" class="aui-btn" value="登 录"></div>
              </form>
            </div>
          </div>
        </div>

        <div class="aui-content-box-fr">
          <div class="aui-content-box-text">
            <h3>还没有帐号:</h3>
            <a href="{{ route('uregister') }}" class="aui-ll-link">立即注册</a>
            <h3>使用第三方帐号直接登录:</h3>
            <ul class="aui-content-box-text-link clearfix">
              <li>
                <a href="javascript:;" class="aui-icon-sina" title="使用新浪微博帐号登录"></a>
              </li>
              <li>
                <a href="javascript:;" class="aui-icon-wechat" title="使用微信帐号登录"></a>
              </li>
              <li>
                <a href="javascript:;" class="aui-icon-qq" title="使用腾讯QQ帐号登录"></a>
              </li>
              <li>
                <a href="javascript:;" class="aui-icon-baidu" title="使用百度帐号登录"></a>
              </li>
            </ul>
          </div>
        </div>

      </div>

    </section>
@stop
