<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>甄选——以严谨的态度为天下消费者甄选天下优品</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shutter.css">
    <link rel="stylesheet" href="css/showType.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php
    include "include/conn.php";
    //获取导航栏
    $sqlNav = "select * from type";
    $resNav = mysqli_query($conn,$sqlNav);
    ?>
</head>
<body>
<div class="wrapper">
    <?php
    //黑色页头
    include "htmlHeader.php";
    ?>
    <div class="search-wrap">
        <?php
        include "htmlSearch.php";
        ?>

<div class="loginUser">
    <div class="loginBox">
        <div class="loginArea">
            <div class="loginTitle">
                好的生活，没那么贵
            </div>
            <div class="loginForm">
               <form method="post" name="form1" id="form1" action="loginprocess.php">
                <div class="usersname">
                        <div class="login-center-img"><img src="img/name.png"/></div>
                    <div class="login-center-input">
                    <input type="text" name="yhm" value="" placeholder="请输入您的用户名" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的用户名'"/>
                    <div class="login-center-input-text">用户名</div>
                </div>
                </div>
                <div class="passwords">
                    <div class="login-center-img"><img src="img/password.png"/></div>
                    <div class="login-center-input">
                    <input type="password" name="mm" value="" placeholder="请输入您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的密码'"/>
                    <div class="login-center-input-text">密码</div>
                    </div>
                </div>
               <div class="yanzhenma">
                   <div class="login-center-img"><img src="img/yzm.png"/></div>
                   <div class="login-center-input">
                       <input type="text" name="yzm" value="" placeholder="请输入验证码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入验证码'"/>
                       <div class="login-center-input-text">验证码</div>
                   </div>
                   <img class="yzmimg" src="yzmimage.php">
               </div>
                   <div class="auto">
                       <input type="checkbox" name="auto_login" id="auto_login" value="on" />
                       <label class="labText" for="auto_login">下次自动登录</label>
                   </div>
               <input class="login-button" type="submit" name="ok" id="ok" value="登录">
                   <input class="login-button2" type="reset" name="" id="" value="重置">
            </form>
        </div>
    </div>
</div>
</div>
        <?php
        include "htmlFoot.php";
        ?>
   
</body>
</html>