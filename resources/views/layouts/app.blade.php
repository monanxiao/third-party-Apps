<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>登录页面</title>
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

        @yield('content')


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

        })
        </script>
        @yield('scriptsAfterJs')
    </body>

</html>
