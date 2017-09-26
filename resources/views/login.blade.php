@extends('master')

@section('title', '登录')

@section('content')
    @include('component.loading')

    <div class="page__hd">
        <div class="weui_cells_title"></div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">账号</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" placeholder="邮箱或手机号"/>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label">密码</label>
                </div>
                <div class="weui-cell__bd weui_cell__primary">
                    <input class="weui-input" type="tel" placeholder="不少于6位"/>
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd"><label class="weui-label">验证码</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="number" placeholder="请输入验证码"/>
                </div>
                <div class="weui-cell__ft">
                    <img class="bk_validate_code" src="/service/validate_code/create" />
                </div>
            </div>
        </div>
        <div class="weui-btn-area">
            <a class="weui-btn weui-btn_primary" href="javascript:" onclick="onLoginClick();">登录</a>
        </div>
        <a href="/register"><p class="bk_bottom_tips">没有账号？去注册</p></a>
    </div>
@endsection

@section('my-js')
    <script type="text/javascript">
        $('.bk_validate_code').click(function(){
            $(this).attr('src', '/service/validate_code/create?random=' + Math.random());
        });
    </script>

@endsection
