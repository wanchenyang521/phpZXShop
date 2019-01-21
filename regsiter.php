<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>甄选——以严谨的态度为天下消费者甄选天下优品</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shutter.css">
    <link rel="stylesheet" href="css/showType.css">
    <link rel="stylesheet" type="text/css" href="css/regsiter.css">
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
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
                        <form method="post" name="form1" id="form1" action="addregsiter.php" onSubmit="return check();">
                            <div class="usersname">
                                <div class="login-center-img"><img src="img/name.png"/></div>
                                <div class="login-center-input">
                                    <!--onblur="this.placeholder='请输入您的用户名'"-->
                                    <input type="text" id="usernameInput" name="yhm" value=""  placeholder="请输入您的用户名" onfocus="this.placeholder=''"   onblur="checkuser()"/>
                                    <div class="login-center-input-text">用户名</div>
                                </div>
                                <p id="textWord1">6-20位字母、数字或下划线组成，字母开头</p>
                            </div>

                            <div class="passwords">
                                <div class="login-center-img"><img src="img/password.png"/></div>
                                <div class="login-center-input">
                                    <input type="password" name="mm" value="" placeholder="请输入您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的密码'"/>
                                    <div class="login-center-input-text">密码</div>
                                </div>
                                <p class="textWord2">6-20位字母或数字组成</p>
                            </div>
                            <div class="copypasswords">
                                <div class="login-center-img"><img src="img/repassword.png"/></div>
                                <div class="login-center-input">
                                    <input type="password" name="copymm" value="" placeholder="请确认您的密码" onfocus="this.placeholder=''" onblur="this.placeholder='请确认您的密码'"/>
                                    <div class="login-center-input-text">确认密码</div>

                                </div>
                                <p class="textWord3">与输入密码保持一致</p>
                            </div>
                            <div class="tel">
                                <div class="login-center-img"><img src="img/tel.png"/></div>
                                <div class="login-center-input">
                                    <input type="text" name="telnumber" value="" placeholder="请输入您的电话" onfocus="this.placeholder=''" onblur="this.placeholder='请输入您的电话'"/>
                                    <div class="login-center-input-text">电话</div>
                                </div>
                                <p class="textWord4">请输入有效电话号码</p>
                            </div>

                            <div class="yanzhenma">
                                <div class="login-center-img"><img src="img/yzm.png"/></div>
                                <div class="login-center-input">
                                    <input type="text" name="yzm" value="" placeholder="请输入验证码" onfocus="this.placeholder=''" onblur="this.placeholder='请输入验证码'"/>
                                    <div class="login-center-input-text">验证码</div>
                                </div>
                                <img class="yzmimg" src="yzmimage.php">
                            </div>

                            <input class="login-button" type="submit" name="ok" id="ok" value="注册">
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