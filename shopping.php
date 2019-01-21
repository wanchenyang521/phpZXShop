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


        <?php
        include "htmlFoot.php";
        ?>

    </div>

</body>
</html>