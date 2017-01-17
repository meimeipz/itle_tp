<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT自动化运维平台</title>
</head>
<style type="text/css">
    body{
        margin:0;
        padding:0;
        overflow-x:hidden;
    }
    html, body{
        height:100%;
    }
    img{
        border:none;
    }
    *{
        font-family:'微软雅黑';
        font-size:12px;
        color:#626262;
    }
    dl,dt,dd{
        display:block;
        margin:0;
    }
    a{
        text-decoration:none;
    }

    #bg{background-image:url(/Application/public/image/content/dotted.png);}
    .container{
        width:100%;
        height:100%;
        margin:auto;
    }

    /*left*/
    .leftsidebar_box{width:160px;height:auto !important;overflow:visible !important;position:fixed;height:100% !important;background-color:#3992d0;}
    .line{height:2px;width:100%;background-image:url(/Application/public/image/left/line_bg.png);background-repeat:repeat-x;}
    .leftsidebar_box dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;background-position:10px center;color:#f5f5f5;font-size:14px;position:relative;line-height:48px;cursor:pointer;}
    .leftsidebar_box dd{background-color:#317eb4;padding-left:40px;}
    .leftsidebar_box dd a{color:#f5f5f5;line-height:20px;}
    .leftsidebar_box dt img{position:absolute;right:10px;top:20px;}
    .system_log dt{background-image:url(/Application/public/image/left/system.png)}
    .custom dt{background-image:url(/Application/public/image/left/custom.png)}
    .channel dt{background-image:url(/Application/public/image/left/channel.png)}
    .app dt{background-image:url(/Application/public/image/left/app.png)}
    .cloud dt{background-image:url(/Application/public/image/left/cloud.png)}
    .syetem_management dt{background-image:url(/Application/public/image/left/syetem_management.png)}
    .source dt{background-image:url(/Application/public/image/left/source.png)}
    .statistics dt{background-image:url(/Application/public/image/left/statistics.png)}
    .leftsidebar_box dl dd:last-child{padding-bottom:10px;}
</style>


<script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    $(".leftsidebar_box dt").css({"background-color":"#3992d0"});
    $(".leftsidebar_box dt img").attr("src","images/left/select_xl01.png");
    $(function(){
        $(".leftsidebar_box dd").hide();
        $(".leftsidebar_box dt").click(function(){
            $(".leftsidebar_box dt").css({"background-color":"#3992d0"})
            $(this).css({"background-color": "#317eb4"});
            $(this).parent().find('dd').removeClass("menu_chioce");
            $(".leftsidebar_box dt img").attr("src","images/left/select_xl01.png");
            $(this).parent().find('img').attr("src","images/left/select_xl.png");
            $(".menu_chioce").slideUp();
            $(this).parent().find('dd').slideToggle();
            $(this).parent().find('dd').addClass("menu_chioce");
        });
    })
</script>

</head>

<body id="bg">

<div class="container">

    <div class="leftsidebar_box">
        <div class="line"></div>
        <dl class="system_log">
            <dt>终端管理</dt>
            <dd class="first_dd"><a href="#">终端信息查询</a></dd>
            <dd><a href="#">不关机统计</a></dd>

        </dl>

        <dl class="custom">
            <dt>客户管理</dt>
            <dd class="first_dd"><a href="#">客户管理</a></dd>
            <dd><a href="#">试用/成交客户管理</a></dd>
            <dd><a href="#">未成交客户管理</a></dd>
            <dd><a href="#">即将到期客户管理</a></dd>
        </dl>

        <dl class="channel">
            <dt>渠道管理</dt>
            <dd class="first_dd"><a href="#">渠道主页</a></dd>
            <dd><a href="#">渠道标准管理</a></dd>
            <dd><a href="#">系统通知</a></dd>
            <dd><a href="#">渠道商管理</a></dd>
            <dd><a href="#">渠道商链接</a></dd>
        </dl>

        <dl class="app">
            <dt>APP管理</dt>
            <dd class="first_dd"><a href="#">App运营商管理</a></dd>
            <dd><a href="#">开放接口管理</a></dd>
            <dd><a href="#">接口类型管理</a></dd>
        </dl>

        <dl class="cloud">
            <dt>大数据云平台</dt>
            <dd class="first_dd"><a href="#">平台运营商管理</a></dd>
        </dl>

        <dl class="syetem_management">
            <dt>系统管理</dt>
            <dd class="first_dd"><a href="#">后台用户管理</a></dd>
            <dd><a href="#">角色管理</a></dd>
            <dd><a href="#">客户类型管理</a></dd>
            <dd><a href="#">栏目管理</a></dd>
            <dd><a href="#">微官网模板组管理</a></dd>
            <dd><a href="#">商城模板管理</a></dd>
            <dd><a href="#">微功能管理</a></dd>
            <dd><a href="#">修改用户密码</a></dd>
        </dl>

        <dl class="source">
            <dt>素材库管理</dt>
            <dd class="first_dd"><a href="#">图片库</a></dd>
            <dd><a href="#">链接库</a></dd>
            <dd><a href="#">推广管理</a></dd>
        </dl>

        <dl class="statistics">
            <dt>统计分析</dt>
            <dd class="first_dd"><a href="#">客户统计</a></dd>
        </dl>

    </div>


</div>


</body>
</html>