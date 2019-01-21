<?php
session_start();
?>
<div class="top-nav-wrap">
    <div class="top-nav">
        <ul class="top-nav-l">
            <li class="top-nav-menu goodLife">
                <span class="goodLife-span">好的生活，没那么贵</span>

            </li>
        </ul>
        <ul class="top-nav-r">
            <li class="top-nav-menu login">
                <?php
                include "include/conn.php";
                if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
                {
                    $username=$_COOKIE["username"];
                    $password=$_COOKIE["password"];
                    $sql="select * from user where username='$username'";
                    $res=mysqli_query($conn,$sql);
                    if($row=mysqli_fetch_array($res))
                    {
                        if($row["userpassword"]==$password)
                        {
                            $_SESSION["username"]=$username;
                            date_default_timezone_set("Asia/Shanghai");
                            echo "您好，".$_SESSION["username"];
                            if(isset($_COOKIE["lastvisit"]))
                            {
                                echo "您上次登录时间是：".$_COOKIE["lastvisit"];
                                setcookie("lastvisit",date("Y-m-d H:i:s"),time()+30*24*60*60);
                            }
                            else{
                                echo "您是第一次登录！";
                                setcookie("lastvisit",date("Y-m-d H:i:s"),time()+30*24*60*60);
                            }
                            echo "！<a href='logout.php'>退出登录</a>";
                        }
                    }
                }
                else{
                    date_default_timezone_set("Asia/Shanghai");
                    if(isset($_SESSION['username']))
                    {
                        echo "您好，".$_SESSION["username"];
                        if(isset($_COOKIE["lastvisit"]))
                        {
                            echo "您上次登录时间是：".$_COOKIE["lastvisit"];
                            setcookie("lastvisit",date("Y-m-d 	H:i:s"),time()+30*24*60*60);
                        }
                        else{
                            echo "您是第一次登录！";
                            setcookie("lastvisit",date("Y-m-d H:i:s"),time()+30*24*60*60);
                        }
                        echo "！<a href='logout.php'>退出登录</a>";
                    }
                    else
                    {
                        echo "<a href='login.php'>登录</a>";
                    }
                }

                ?>
            </li>

            <li class="top-nav-menu register">
                <a href="regsiter.php">注册</a>
            </li>
            <li class="top-nav-menu cutOff">
                <span>|</span>
            </li>
           <li>  <a href="gouwuche.php"><img src="img/car.png" style="width: 15px;margin-top: 10px;margin-right: -10px;"></li> </a>
            <li class="top-nav-menu shopCar">

                <a href="gouwuche.php">
                   <span>购物车</span>
                </a>
            </li>
            <li class="top-nav-menu order">
                <a href="#">
                    <span>我的订单</span>
                </a>

            </li>
            <li class="top-nav-menu cutOff">
                <span>|</span>
            </li>
            <li class="top-nav-menu">
                <a href="#">
                    联系客服
                </a>
            </li>
        </ul>
    </div>
</div>