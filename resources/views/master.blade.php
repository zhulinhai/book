<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="./css/weui.css">
    <link rel="stylesheet" href="./css/book.css">
</head>
<body>
<div class="bk_title_bar">
    <img class="bk_back" src="./images/back.png" alt="" onclick="history.go(-1);">
    <p class="bk_title_content"></p>
    <img class="bk_menu" src="./images/more.png" alt="" onclick="onMenuClick();">
</div>

<div class="page">
    @yield('content')
</div>

<!-- tooltips -->
<div class="bk_toptips"><span></span></div>

<div id="global_menu" onclick="onMenuClick();">
    <div></div>
</div>

<!-- BEGIN actionSheet -->
<div id="actionSheet_wrap">
    <div class="weui-mask" id="mask" style="display: none"></div>
    <div class="weui-actionsheet" id="weui_actionsheet" style="display: none">
        <div class="weui-actionsheet__menu">
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(1)">用户中心</div>
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(2)">选择套餐</div>
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(3)">周边油站</div>
            <div class="weui-actionsheet__cell" onclick="onMenuItemClick(4)">常见问题</div>
        </div>
        <div class="weui-actionsheet__action">
            <div class="weui-actionsheet__cell" id="iosActionsheetCancel">取消</div>
        </div>
    </div>
</div>

</body>
<script src="./js/jquery-1.10.1.min.js"></script>
<script type="text/javascript">

    function hideActionSheet(weuiActionsheet, mask) {
        weuiActionsheet.removeClass('weui_actionsheet_toggle');
        mask.removeClass('weui_fade_toggle');
        weuiActionsheet.on('transitionend', function () {
            mask.hide();
        }).on('webkitTransitionEnd', function () {
            mask.hide();
        });

        $('#actionSheet_cancel').click(function(){
           hideActionSheet(weuiActionSheet, mask);
        });
        weuiActionsheet.unbind('transitionend').unbind('webkitTransitionEnd');
    }

    function onMenuClick () {
        var mask = $('#mask');
        var weuiActionsheet = $('#weui_actionsheet');
        weuiActionsheet.addClass('weui_actionsheet_toggle');
        mask.show().addClass('weui_fade_toggle').click(function () {
            hideActionSheet(weuiActionsheet, mask);
        });
        $('#actionsheet_cancel').click(function () {
            hideActionSheet(weuiActionsheet, mask);
        });
        weuiActionsheet.unbind('transitionend').unbind('webkitTransitionEnd');
    }
    function onMenuItemClick(index) {
        var mask = $('#mask');
        var weuiActionsheet = $('#weui_actionsheet');
        hideActionSheet(weuiActionsheet, mask);
        if (index == 1) {

        } else if (index == 2) {

        } else if (index == 3) {

        } else {
            showTopTips('敬请期待!');
        }
    }
    
    function showTopTips(msg) {
        $('.bk_toptips').show();
        $('.bk_toptips span').html(msg);
        setTimeout(function () {
            $('.bk_toptips').hide();
        }, 2000);
    }

    $('.bk_title_content').html(document.title);
</script>

@yield('my-js')
</html>