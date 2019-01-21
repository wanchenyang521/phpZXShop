<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>甄选——以严谨的态度为天下消费者甄选天下优品</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/shutter.css">
    <link rel="stylesheet" href="css/showType.css">
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
    //  获取搜索关键字
    $key=$_GET["keyWord"];
    $keyArr = explode(' ',$key);
    $sqlGoods="select * from goods";
    for($i = 0;$i<count($keyArr);$i++)
    {
        if($i==0)
        {
            $sqlGoods=$sqlGoods." where goodsname like '%$keyArr[$i]%'";
        }
        else
        {
            $sqlGoods=$sqlGoods." and goodsname like '%$keyArr[$i]%'";
        }
    }
    $resGoods = mysqli_query($conn,$sqlGoods);
    //获取总数
    $toTal = mysqli_num_rows($resGoods);
    //设置每页显示的个数
    $pageSize = 3;
    //显示一共有几页
    $pageNum = ceil($toTal/$pageSize);
    //显示当前是第几页 接收p，判断如果没有p传值，默认为第一页
    if(isset($_GET["p"]))
    {
        $curPage = $_GET["p"];
    }
    else
    {
        $curPage = 1;
    }
    //设置数据库分段显示
    $start = ($curPage-1)*$pageSize;
    $sqlShow = $sqlGoods." limit $start,$pageSize";
    $resShow = mysqli_query($conn,$sqlShow);
    ?>
</head>
<body>
<div class="wrapper">
    <!-- 父级自适应 -->
    <div class="top-nav-wrap">
        <div class="top-nav">
            <ul class="top-nav-l">
                <li class="top-nav-menu goodLife">
                    <span class="goodLife-span">好的生活，没那么贵</span>

                </li>
            </ul>
            <ul class="top-nav-r">
                <li class="top-nav-menu login">
                    <a href="login.php">登录</a>
                </li>
                <li class="top-nav-menu register">
                    <a href="#">注册</a>
                </li>
                <li class="top-nav-menu cutOff">
                    <span>|</span>
                </li>
                <li class="top-nav-menu shopCar">
                    <a href="#">
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



    <div class="search-wrap">
        <div class="search-con">
            <div class="logo-box">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="search-box">
                <div class="search-bd">

                    <div class="search-panel">
                        <form action="searchResult.php" method="get">
                            <div class="btn">
                                <input type="submit" class="searchBtn" id="search" name="search" value="搜索">
                            </div>

                            <div class="search-inp-box">
                                <div class="search-inp">
                                    <input type="text" placeholder="这是一个搜索框" class="text" name="keyWord">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


            </div>

        </div>

        <div class="scrren-nav-wrap">
            <div class="scrren-nav-content">
                <h2><a href="index.php" style="color: #B4A078">首页</a> </h2>
                <ul>
                    <?php

                    while($rowNav=mysqli_fetch_array($resNav)) {

                        ?>
                        <li><a href="showType.php?tid=<?php echo $rowNav['typeid']?>"><?php echo $rowNav['typename'];?></a></li>
                        <?php
                    }
                    ?>
                </ul>

            </div>
        </div>


        <div class="showtype">
               <?php
               while($rowGoods = mysqli_fetch_array($resShow)){
               ?>
                   <div class="showtypes">
                       <div class="showTypePic">
                           <img src="<?php echo $rowGoods['photo']?>">
                       </div>

                       <div class="showTypeName">
                           <?php echo $rowGoods['goodsname']?>
                       </div>

                       <div class="showTypeMoney">
                           ￥<?php echo $rowGoods['goodsprice']?>
                       </div>
                       <div class="showTypecontent">
                           <?php echo $rowGoods['introduction']?>
                       </div>
                   </div>
            <?php }?>
        </div>
    </div>

    <div class="fenye">
    <p>
    共有 <?php echo $toTal; ?> 件商品&nbsp;&nbsp;每页显示 <?php echo $pageSize; ?> 条 第 <?php echo $curPage; ?> 页/共 <?php echo $pageNum; ?> 页&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="searchResult.php?keyWord=<?php echo $key;?>&p=1" target="_self">首页</a>
        <a href="searchResult.php?keyWord=<?php echo $key;?>&p=<?php
        if($curPage>1)
            echo $curPage-1;
        else
            echo $curPage;
        ?>" target="_self">上一页</a> <a href="searchResult.php?keyWord=<?php echo $key;?>&p=<?php
        if($curPage<$pageNum)
            echo $curPage+1;
        else
            echo $curPage;
        ?>" target="_self">下一页</a> <a href="searchResult.php?keyWord=<?php echo $key;?>&p=<?php echo $pageNum;?>" target="_self">尾页</a>
    </p>
    </div>
        <div class="foot">
            <div class="phone">
                <div>
                    <p>客服电话</p>
                    <p>666-666-6666</p>
                    <p>9:00-22:00</p>
                </div>
                <div>
                    <p>何为甄选</p>
                    <p style="text-align: center"> 原创生活类电商品牌，秉承一贯的严谨态度，我们深入世界各地，从源头全程严格把控商品生产环节，力求帮消费者甄选到优质商品。</p>
                </div>
                <div>
                    <p>扫码下载APP </p>
                    <p>假装有一个二维码 </p>
                </div>
            </div>

            <div class="fgf">
                <hr>
            </div>
            <div class="chengruo">
                <div section="data11">
                    <p><img src="img/无忧退货.png" width="100" height="100" alt=""/></p>
                    <p>30天无忧退货</p>
                </div>
                <div section="data21">
                    <p><img src="img/包邮.png" width="100" height="100" alt=""/>
                    </p>
                    <p>满88元包邮</p>
                </div>
                <div section="data31">
                    <p><img src="img/品质.png" width="100" height="100" alt=""/></p>
                    <p>甄选品质保证</p>
                </div>
            </div>
            <div class="fgf">
                <hr>
            </div>

            <div class="banquan">
                <p>为了获得最佳浏览效果建议使用较新版本的Chrome、Firefox、Opera、IE等浏览器浏览本站</p>
                <p>版权所有Copyright © 2017 甄选公司 All Rights Reserved</p>
                <p>地址：中国江苏 联系电话：86666666</p>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(function() {
            $( "#Tabs1" ).tabs();
        });
    </script>
</body>
</html>