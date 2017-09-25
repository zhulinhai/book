@extends('master')

@include('component.loading')

@section('title', '注册')

@section('content')
    <div class="page__bd">

        <div class="weui-cells__title">注册方式</div>
        <div class="weui-cells weui-cells_radio">
            <label class="weui-cell weui-check__label" for="x11">
                <div class="weui-cell__bd">
                    <p>手机号注册</p>
                </div>
                <div class="weui-cell__ft">
                    <input type="radio" class="weui-check" name="register_type" id="x11"  checked="checked"/>
                    <span class="weui-icon-checked"></span>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="x12">
                <div class="weui-cell__bd">
                    <p>邮箱注册</p>
                </div>
                <div class="weui-cell__ft">
                    <input type="radio" name="register_type" class="weui-check" id="x12" />
                    <span class="weui-icon-checked"></span>
                </div>
            </label>
        </div>

        <div class="weui-cells__title"></div>
        <div class="weui-cells weui-cells_form"  style="display: block">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">手机号</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" placeholder=""/>
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
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label">确认密码</label>
                </div>
                <div class="weui-cell__bd weui_cell__primary">
                    <input class="weui-input" type="tel" placeholder="不少于6位"/>
                </div>
            </div>
            <div class="weui-cell weui-cell_vcode">
                <div class="weui-cell__hd"><label class="weui-label">手机验证码</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="number" placeholder=""/>
                </div>
                <div class="weui-cell__ft">
                    <button class="weui-vcode-btn">发送验证码</button>
                </div>
            </div>
        </div>
        <div class="weui-cells weui-cells_form" style="display: none">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">邮箱</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="tel" placeholder=""/>
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
            <div class="weui-cell">
                <div class="weui-cell__hd">
                    <label class="weui-label">确认密码</label>
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
                    <img class="weui-vcode-img" src="/service/validate_code/create" />
                </div>
            </div>
        </div>

        <div class="weui-btn-area">
            <a class="weui-btn weui-btn_primary" href="javascript:" onclick="onLoginClick();">登录</a>
        </div>
        <a href="/login"><p class="bk_bottom_tips">已有账号？去登录</p></a>
    </div>

@endsection

@section('my-js')
    <script type="text/javascript">

        $('.weui-vcode-img').click(function(){
            $(this).attr('src', '/service/validate_code/create?random=' + Math.random());
        });

        $('input:radio[name=register_type]').click(function () {
            var id = $(this).attr('id');
            var $cellForm = $('.weui-cells_form');
            if (id === 'x11') {
                $cellForm.eq(0).show();
                $cellForm.eq(1).hide();
            } else if (id === 'x12' ) {
                $cellForm.eq(1).show();
                $cellForm.eq(0).hide();
            }
        });

        $('.weui-vcode-btn').click(function () {
            // 发送验证码
        });
    </script>

@endsection
