<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>甄选——以严谨的态度为天下消费者甄选天下优品</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shutter.css">
<!--    <link rel="stylesheet" href="css/style.css">-->
    <link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
    <link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
    <link href="jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
    <script src="jQueryAssets/jquery-1.11.1.min.js"></script>
    <script src="jQueryAssets/jquery.ui-1.10.4.tabs.min.js"></script>
    <?php
    include "include/conn.php";
    //获取导航栏
    $sqlNav = "select * from type";
    $resNav = mysqli_query($conn,$sqlNav);
    //获取轮播图
    $sqlShutter = "select * from shutter";
    $resShutter = mysqli_query($conn,$sqlShutter);
    //获取新品首发
    $sqlNew = "select * from newGood";
    $resNew = mysqli_query($conn,$sqlNew);
    ?>
</head>
<body>
<div class="wrapper">
    <!-- 父级自适应 -->
<?php
//黑色页头
include "htmlHeader.php";
?>

    <div class="search-wrap">
<?php
include "htmlSearch.php";
?>

        <!-- 轮播图 -->

        <div class="shutter">
            <div class="shutter-img">
                <?php
                while($rowShutter=mysqli_fetch_array($resShutter)) {
                    ?>

                    <a href="#" data-shutter-title="好的生活，没那么贵"><img src="<?php echo $rowShutter['photo'];?>" alt="#"></a>
                    <?php
                }
                ?>
<!--                <a href="#" data-shutter-title="好的生活，没那么贵"><img src="img/shutter_1.jpg" alt="#"></a>-->
<!--                <a href="#" data-shutter-title="好的生活，没那么贵"><img src="img/shutter_2.jpg" alt="#"></a>-->
<!--                <a href="#" data-shutter-title="好的生活，没那么贵"><img src="img/shutter_3.jpg" alt="#"></a>-->
<!--                <a href="#" data-shutter-title="好的生活，没那么贵"><img src="img/shutter_4.jpg" alt="#"></a>-->
<!--                <a href="#" data-shutter-title="好的生活，没那么贵"><img src="img/shutter_5.jpg" alt="#"></a>-->
            </div>
            <ul class="shutter-btn">
                <li class="prev"></li>
                <li class="next"></li>
            </ul>
            <div class="shutter-desc">
                <p>好的生活，没那么贵</p>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/velocity.js"></script>
        <script src="js/shutter.js"></script>
        <script>
            jQuery.noConflict();
            jQuery(function () {
                jQuery('.shutter').shutter({
                    shutterW: 1515, // 容器宽度
                    shutterH: 358, // 容器高度
                    isAutoPlay: true, // 是否自动播放
                    playInterval: 3000, // 自动播放时间
                    curDisplay: 3, // 当前显示页
                    fullPage: false // 是否全屏展示
                });
            });
        </script>
        <div style="text-align:center;clear:both">
        </div>


        <!-- 中间内容展示 -->
        <div class="content">
            <!-- 制造商 -->
            <div class="mader">
                <div class="word1">
                    <h2>品牌制造商</h2>
                    <p>工厂直达消费者，剔除品牌溢价</p>
                </div>
                <div class="mader-pic">
                    <div class="mader-pic1">
                        <a href="#">
                            <img src="img/mader1.jpg" alt="">
                        </a>
                    </div>

                    <div class="mader-pic2">
                        <a href="#">
                            <img src="img/mader2.jpg" alt="">
                        </a>
                    </div>
                    <div class="mader-pic3">
                        <a href="#">
                            <img src="img/mader3.jpg" alt="">
                        </a>
                    </div>
                    <div class="mader-pic4">
                        <a href="#">
                            <img src="img/mader4.jpg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="new">
                <div class="word2">
                    <h2 style="float: left">新品首发</h2>
                    <p style="margin-left: 130px;padding-top: 10px;">为你寻觅世间好物</p>
                </div>
                <div class="newpics">
                    <ul class="newPic">
                        <?php
                        while($rowNew=mysqli_fetch_array($resNew)) {
                            ?>
                            <li class="newPic1">
                                <a href="#">
                                    <img src="<?php echo $rowNew['photos'];?>" alt="">
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>


            </div>
            <div class="idea">
                <div class="word1">
                    <h2>人气推荐</h2>
                </div>
                <div id="Tabs1">
                    <ul>
                        <li><a href="#tabs-1">编辑推荐</a></li>
                        <li><a href="#tabs-2">热销总榜</a></li>

                    </ul>
                    <div id="tabs-1">
                        <ul class="ideaPic">
                            <li class="ideaPic1">
                                <a href="#">
                                    <img src="img/new1.png" alt="">
                                </a>
                            </li>
                            <li class="ideaPic2">
                                <a href="#">
                                    <img src="img/new2.png" alt="">
                                </a>
                            </li>
                            <li class="ideaPic3">
                                <a href="#">
                                    <img src="img/new3.png" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div id="tabs-2">
                        <ul class="ideaPic">
                            <li class="ideaPic1">
                                <a href="#">
                                    <img src="img/new3.png" alt="">
                                </a>
                            </li>
                            <li class="ideaPic2">
                                <a href="#">
                                    <img src="img/new1.png" alt="">
                                </a>
                            </li>
                            <li class="ideaPic3">
                                <a href="#">
                                    <img src="img/new2.png" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
<?php
include "htmlFoot.php";
?>

    </div>
    <script type="text/javascript">
        $(function() {
            $( "#Tabs1" ).tabs();
        });
    </script>
</body>
</html>