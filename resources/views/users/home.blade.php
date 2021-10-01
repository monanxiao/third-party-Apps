<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>用户列表</title>
    <link rel="stylesheet" href="/css/user.css">
</head>

<body>

    <div id="app">
        <div class="user-list">

            @foreach($users as $value)
                @switch($value->type)
                    @case('user')
                        <div class="user" id="user-{{ $value->id }}" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                            <div class="user-header">
                                <div class="user-avatar">
                                    <img src="/images/avatar.png">
                                </div>
                                <div class="user-basic-info">
                                    <div class="user-nick">{{ $value->name }}</div>
                                    <div class="user-fullname">{{ $value->email }}</div>
                                </div>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册时间</span>
                                <span class="user-data">{{ $value->created_at }}</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">IP</span>
                                <span class="user-data">*****</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册类型</span>
                                <span class="user-data">邮箱</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">***</span>
                                <span class="user-data">***</span>
                            </div>
                            {{-- <button class="user-remove" data-id="1">删除用户</button> --}}
                        </div>

                        @break
                    @case('weibo')
                        <div class="user" id="user-{{ $value->id }}" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                            <div class="user-header">
                                <div class="user-avatar">
                                    <img src="{{ $value->weibo['avatar'] }}">
                                </div>
                                <div class="user-basic-info">
                                    <div class="user-nick">{{ $value->name }}</div>
                                    <div class="user-fullname">{{ $value->email }}</div>
                                </div>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册时间</span>
                                <span class="user-data">{{ $value->created_at }}</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">IP</span>
                                <span class="user-data">*****</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册类型</span>
                                <span class="user-data">微博</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">***</span>
                                <span class="user-data">***</span>
                            </div>
                            {{-- <button class="user-remove" data-id="1">删除用户</button> --}}
                        </div>
                        @break
                    @case('qq')

                        <div class="user" id="user-{{ $value->id }}" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                            <div class="user-header">
                                <div class="user-avatar">
                                    <img src="{{ $value->qq['avatar'] }}">
                                </div>
                                <div class="user-basic-info">
                                    <div class="user-nick">{{ $value->name }}</div>
                                    <div class="user-fullname">{{ $value->email }}</div>
                                </div>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册时间</span>
                                <span class="user-data">{{ $value->created_at }}</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">IP</span>
                                <span class="user-data">*****</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册类型</span>
                                <span class="user-data">QQ</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">***</span>
                                <span class="user-data">***</span>
                            </div>
                            {{-- <button class="user-remove" data-id="1">删除用户</button> --}}
                        </div>
                        @break
                    @case('weixin')
                        <div class="user" id="user-{{ $value->id }}" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                            <div class="user-header">
                                <div class="user-avatar">
                                    <img src="{{ $value->weixin['avatar'] }}">
                                </div>
                                <div class="user-basic-info">
                                    <div class="user-nick">{{ $value->name }}</div>
                                    <div class="user-fullname">{{ $value->email }}</div>
                                </div>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册时间</span>
                                <span class="user-data">{{ $value->created_at }}</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">IP</span>
                                <span class="user-data">*****</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册类型</span>
                                <span class="user-data">微信</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">***</span>
                                <span class="user-data">***</span>
                            </div>
                            {{-- <button class="user-remove" data-id="1">删除用户</button> --}}
                        </div>
                        @break
                    @case('github')
                        <div class="user" id="user-{{ $value->id }}" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                            <div class="user-header">
                                <div class="user-avatar">
                                    <img src="{{ $value->github['avatar'] }}">
                                </div>
                                <div class="user-basic-info">
                                    <div class="user-nick">{{ $value->name }}</div>
                                    <div class="user-fullname">{{ $value->email }}</div>
                                </div>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册时间</span>
                                <span class="user-data">{{ $value->created_at }}</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">IP</span>
                                <span class="user-data">*****</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册类型</span>
                                <span class="user-data">GitHub</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">***</span>
                                <span class="user-data">***</span>
                            </div>
                            {{-- <button class="user-remove" data-id="1">删除用户</button> --}}
                        </div>
                        @break
                    @case('phone')
                        <div class="user" id="user-{{ $value->id }}" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

                            <div class="user-header">
                                <div class="user-avatar">
                                    <img src="/images/avatar.png">
                                </div>
                                <div class="user-basic-info">
                                    <div class="user-nick">{{ $value->name }}</div>
                                    <div class="user-fullname">{{ $value->email }}</div>
                                </div>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册时间</span>
                                <span class="user-data">{{ $value->created_at }}</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">IP</span>
                                <span class="user-data">*****</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">注册类型</span>
                                <span class="user-data">手机号</span>
                            </div>
                            <div class="user-info">
                                <span class="user-title">***</span>
                                <span class="user-data">***</span>
                            </div>
                            {{-- <button class="user-remove" data-id="1">删除用户</button> --}}
                        </div>
                        @break

                @endswitch

            @endforeach

        </div>
    </div>

    <script src="/js/react.production.min.js"></script>
    <script src="/js/react-dom.production.min.js"></script>
    <script src="/js/axios.min.js"></script>
    <script src="/js/TweenMax.min.js"></script>

</body>

</html>
