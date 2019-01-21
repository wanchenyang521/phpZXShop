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

    //获取商品
    $typeid = $_GET["tid"];
    $sqlGoods = "select * from goods where typeid=$typeid";
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
    <?php
    //黑色页头
    include "htmlHeader.php";
    ?>

    <div class="search-wrap">
        <?php
        include "htmlSearch.php";
        ?>

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
                           <a href="addgwc.php?goodsid=<?php echo$rowGoods['goodsid']; ?>">
                           <img  src="img/car.png" style="width: 15px;height: 15px;margin-left: 40px;margin-right: -60px;">
                            </a>
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
        <a href="showType.php?tid=<?php echo $typeid;?>&p=1" target="_self">首页</a>
        <a href="showType.php?tid=<?php echo $typeid;?>&p=<?php
        if($curPage>1)
            echo $curPage-1;
        else
            echo $curPage;
        ?>" target="_self">上一页</a> <a href="showType.php?tid=<?php echo $typeid;?>&p=<?php
        if($curPage<$pageNum)
            echo $curPage+1;
        else
            echo $curPage;
        ?>" target="_self">下一页</a> <a href="showType.php?tid=<?php  echo $typeid; ?>&p=<?php echo $pageNum;?>" target="_self">尾页</a>
    </p>
    </div>
    <?php
    include "htmlFoot.php";
    ?>
    </div>

</body>
</html>