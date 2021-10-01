
@extends('layouts.app')
@section('content')

    <section class="aui-content">
      <div class="aui-content-box clearfix">
        <div class="aui-content-box-fl">
          <div class="aui-form-header">
            <div class="aui-form-header-item on">
                @auth
                {{ Auth::user()->name }} |
                {{ Auth::user()->phone }}
                @endauth
                密码登录
            </div>
            <div class="aui-form-header-item">验证码登录</div>
            <span class="aui-form-header-san"></span>
          </div>
          <div class="aui-form-content">
            <div class="aui-form-content-item" style="display: block;">
              <form action="javascript:;">
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入邮箱" autocomplete="off" required></div>
                <div class="aui-form-list">
                  <input type="password" class="aui-input" name="" placeholder="请输入密码" autocomplete="off" required></div>
                <div class="aui-form-pwd clearfix">
                  <a href="javascript:;">忘记密码？</a></div>
                <div class="aui-form-btn">
                  <input type="submit" class="aui-btn" value="登 录"></div>
              </form>
            </div>
            <div class="aui-form-content-item" style="display: none;">
              <form action="{{ route('login.type', 'phone') }}" method="POST">
                @csrf
                <div class="aui-form-list">
                  <input type="text" class="aui-input" id="phone" name='phone' placeholder="请输入手机号" autocomplete="off" required></div>
                <div class="aui-form-list">
                  <input type="text" class="aui-input" id="captcha" placeholder="请证明你不是机器人" autocomplete="off" required>
                    <a href="javascript:;" class="aui-child aui-child-img">
                        <img src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
                    </a>
                </div>
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="code" placeholder="请输入验证码" autocomplete="off" >
                  <input type="hidden" name='verification_key' id='verification_key'>
                  <input type="button" id='sendsms' class="aui-child sendsms" value="获取验证码">
                </div>
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
                <a href="{{ route('weibo') }}" class="aui-icon-sina" title="使用新浪微博帐号登录"></a>
              </li>
              <li>
                <a href="{{ route('weixin') }}" class="aui-icon-wechat" title="使用微信帐号登录"></a>
              </li>
              <li>
                <a href="{{ route('qq') }}" class="aui-icon-qq" title="使用腾讯QQ帐号登录"></a>
              </li>
              <li>
                <a href="{{ route('github') }}" class="aui-icon-baidu" title="使用GitHub帐号登录"></a>
              </li>
            </ul>
          </div>
        </div>

      </div>

    </section>
@stop

@section('scriptsAfterJs')
<script>
  $(document).ready(function () {

    // 监听发送短信的点击事件
    $('#sendsms').click(function () {

        if(! $('#captcha').val() || ! $('#phone').val())
        {
            alert('请输入正确的表单');
            return false;
        }

        //发起一个 post ajax 请求，请求 url 通过后端的 route() 函数生成。
        $.post('{{ route('sms.notification') }}',
        {
            captcha:$('#captcha').val(),
            phone:$('#phone').val(),
            _token:'{{ csrf_token() }}'
        },
        function(result)
        {
            $('#sendsms').val("发送成功！");
            $('#sendsms').attr("disabled", "disabled");
            $('#verification_key').val(result.key);
            alert(result.msg);
        })
        .fail(function(response) {

            var errors = JSON.parse(response.responseText);

            if( typeof(errors.errors) != 'undefined' ){

                if(errors.errors.captcha){

                    alert(errors.errors.captcha)
                }

                if(errors.errors.phone){

                    alert(errors.errors.phone);
                }

            }

            if(typeof(errors.line) != 'undefined'){

                alert('1分钟内只能发送一次短信！');
            }

        });

    });
  });
</script>

@stop
