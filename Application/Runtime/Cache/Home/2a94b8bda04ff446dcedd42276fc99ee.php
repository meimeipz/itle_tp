<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=0.95, user-scalable=no"/>

<title>汽车研究院IT自动化运维平台</title>

<link rel="stylesheet" type="text/css" href="/public/css/ue_grid.css"/>

<link rel="stylesheet" type="text/css" href="/public/css/style.css"/>

<link rel="stylesheet" type="text/css" href="/public/css/style2.css"/>

<script src="/public/js/jquery.min.js"></script>

<script language="javascript" src="/public/js/jquery.easing.min.js"></script>

<script language="javascript" src="/public/js/custom.js"></script>

</head>

<body style="padding-top:90px">

<div id="header">

  <div class="common">

    <div class="login fr">

      <div class="loginmenu">

        <a title="登录或注册"></a>

      </div>

      <ul>

        <li class="openlogin"><a href="##" onclick="return false;">登录</a></li>

        <li class="reg"><a href="##" onclick="return false;">注册</a></li>

      </ul>

    </div>

  <div class="clear">

  </div>

  </div>

</div>

<div class="clear">



</div>

<div class="loginmask">

</div>

<div id="loginalert">

  <div class="pd20 loginpd">

    <h3><i class="closealert fr"></i>

    <div class="clear">

    </div>

    </h3>

    <div class="loginwrap">

      <div class="loginh">

        <div class="fl">

          用户登录

        </div>

        <div class="fr">

          <a id="sigup_now" href="##" onclick="return false;">立即注册</a>

        </div>

        <div class="clear">

        </div>

      </div>

      <h3><span>邮箱登录</span><span class="login_warning">用户名或密码错误</span>

      <div class="clear">

      </div>

      </h3>

      <div class="clear">

      </div>

      <form action="" method="post" id="login_form" action="index.php?p=home&c=user&a=login">

        <div class="logininput">

          <input type="text" name="username" id="username" class="loginusername" value="邮箱/用户名"/>

          <input type="text" class="loginuserpasswordt" name="password" id="password" value="密码"/>

          <input type="password" name="password" class="loginuserpasswordp" style="display:none">

        </div>

        <div class="loginbtn">

          <div class="loginsubmit fl">

            <input type="submit" value="登录"/>

            <div class="loginsubmiting">

              <div class="loginsubmiting_inner">

              </div>

            </div>

          </div>

          <div class="logcheckbox fl">

            <input id="bcdl" type="checkbox" checked="true"/>

            保持登录

          </div>

          <div class="fr">

            <a href="##">忘记密码?</a>

          </div>

          <div class="clear">

          </div>

        </div>

      </form>

    </div>

  </div>



</div>

<div id="reg_setp">

  <div class="back_setp">

    返回

  </div>


  <div class="blogo">

    
      <label> 用户名： </label>
      <input type="text" name="username_r" id="username_r">
    

  

  <select >
    <?php if(is_array($typename)): foreach($typename as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"] == $data.id)): endif; ?>>
      <?php echo ($vo["name"]); ?>
      </option><?php endforeach; endif; ?>
</select>

  </div>

  <div id="setp_quicklogin">

  </div>

</div>

</body>

</html>