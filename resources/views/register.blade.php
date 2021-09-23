
@extends('layouts.app')
@section('content')

    <section class="aui-content">
      <div class="aui-content-box clearfix">
        <div class="aui-content-box-fl">
          <h2>专注互联网职业机会</h2>
          <div class="aui-form-content">
            <div class="aui-form-content-item" style="display:block">
              <form action="javascript:;">
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="email" value="{{ old('email') }}" placeholder="请输入邮箱" data-required="required" autocomplete="off">
                </div>
                    <div class="aui-form-list">
                    <input type="text" class="aui-input" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off">
                    <a href="javascript:;" class="aui-child aui-child-img">
                        <img src="./images/yzm.png" alt=""></a>
                    </div>

                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
                  <input type="button" class="aui-child" value="获取验证码"></div>
                <div class="aui-form-btn">
                  <input type="submit" class="aui-btn" value="注 册"></div>
                <div class="aui-form-ty">注册代表你已同意
                  <a href="javascript:;" style="color: #ed4242">「三方用户协议」</a>
                </div>

              </form>
            </div>
          </div>
        </div>

        <div class="aui-content-box-fr">
          <div class="aui-content-box-text">
            <h3>已有帐:</h3>
            <a href="{{ route('home') }}" class="aui-ll-link">直接登录</a>
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
