<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="TTUNION_verify" content="b846c3c2b85efabc496d2a2b8399cd62">
    <meta name="sogou_site_verification" content="gI1bINaJcL">
    <meta name="360-site-verification" content="37ae9186443cc6e270d8a52943cd3c5a">
    <meta name="baidu_union_verify" content="99203948fbfbb64534dbe0f030cbe817">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>注册页面</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

  <body>
    <header class="aui-header">
      <div class="aui-header-box">
        <h1>
          <a href="javascript:;" class="aui-header-box-logo"></a>
        </h1>
      </div>
    </header>
    <section class="aui-content">
      <div class="aui-content-box clearfix">
        <div class="aui-content-box-fl">
          <h2>专注互联网职业机会</h2>
          <div class="aui-form-content">
            <div class="aui-form-content-item" style="display:block">
              <form action="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html">
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入手机号" data-required="required" autocomplete="off"></div>
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请证明你不是机器人" data-required="required" autocomplete="off">
                  <a href="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html#" class="aui-child aui-child-img">
                    <img src="./images/yzm.png" alt=""></a>
                </div>
                <div class="aui-form-list">
                  <input type="text" class="aui-input" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
                  <input type="button" class="aui-child" value="获取验证码"></div>
                <div class="aui-form-btn">
                  <input type="submit" class="aui-btn" value="注 册"></div>
                <div class="aui-form-ty">注册代表你已同意
                  <a href="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html#" style="color: #ed4242">「招聘网用户协议」</a></div>
              </form>
            </div>
          </div>
        </div>
        <div class="aui-content-box-fr">
          <div class="aui-content-box-text">
            <h3>已有帐:</h3>
            <a href="login.html" class="aui-ll-link">直接登录</a>
            <h3>使用第三方帐号直接登录:</h3>
            <ul class="aui-content-box-text-link clearfix">
              <li>
                <a href="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html#" class="aui-icon-sina" title="使用新浪微博帐号登录"></a>
              </li>
              <li>
                <a href="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html#" class="aui-icon-wechat" title="使用微信帐号登录"></a>
              </li>
              <li>
                <a href="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html#" class="aui-icon-qq" title="使用腾讯QQ帐号登录"></a>
              </li>
              <li>
                <a href="https://www.17sucai.com/preview/1149930/2018-04-11/login/register.html#" class="aui-icon-baidu" title="使用百度帐号登录"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">$(function() {

        /*tab标签切换*/
        function tabs(tabTit, on, tabCon) {
          $(tabCon).each(function() {
            $(this).children().eq(0).show();

          });
          $(tabTit).each(function() {
            $(this).children().eq(0).addClass(on);
          });
          $(tabTit).children().click(function() {
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
            $(tabCon).children().eq(index).show().siblings().hide();
          });
        }
        tabs(".aui-form-header", "on", ".aui-form-content");

      })</script>
  </body>

</html>
