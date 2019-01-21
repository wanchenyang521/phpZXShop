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
    <link rel="stylesheet" href="css/gouwuche.css">
    <script src="jQueryAssets/jquery-1.11.1.min.js"></script>
    <script src="jQueryAssets/jquery.ui-1.10.4.tabs.min.js"></script>
    <?php
    include "include/conn.php";
    //获取导航栏
    $sqlNav = "select * from type";
    $resNav = mysqli_query($conn,$sqlNav);
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
<div class="content">
    <form action="changegwc.php" method="post" onsubmit="return slyz()">
        <table width="1100" border="1" bordercolor='#b4a078' bgcolor="#FFFFFF"  cellspacing="0" >
            <tr >
                <th width="214" >商品名称</th>
                <th width="252">商品价格</th>
                <th width="261">商品数量</th>
                <th width="255">操作</th>
            </tr>
            <?php
            error_reporting(E_ALL & ~E_NOTICE);
             session_start();
            $arr=$_SESSION['mygoods'];
            if(!is_array($arr)){
                echo "<script>alert('您还没有选购，请选购');</script>";
                echo "<script>location.href='index.php';</script>";
            }
            else{
                $total=0;
                foreach($arr as $goods)
                {
                    $goodsid=$goods['goodsid'];
                    $goodsname=$goods['goodsname'];
                    $goodsnum=$goods['goodsnum'];
                    include "include/conn.php";
                    $sql="select * from goods where goodsid=$goodsid";
                    $res=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($res);
                    ?>
                    <tr style="border-top:1px #B4A078 solid;">
                        <td style="border-top:1px #B4A078 solid;">
                            <img src="<?php echo $row['photo'];?>" width="100" height="100" onload="resizeImage(this)"/>
                               <p style="color: #B4A078"><?php echo $goodsname; ?></a></p>
                           </td>
                        <td style="border-top:1px #B4A078 solid;">￥<?php
                            if($row['vipprice']<10){
                                $price=number_format($row['goodsprice']*$row['vipprice']/10,2);
                            }
                            else{
                                $price=number_format($row['goodsprice']*$row['vipprice']/100,2);
                            }
                            echo $price;
                            $total+=$price*$goodsnum;
                            ?> </td>
                        <td style="border-top:1px #B4A078 solid;">
                            <input type="text" name="<?php echo $goodsid; ?>" id="textfield"  value="<?php echo $goodsnum; ?>" onblur="slyz()"/>
                        </td>
                        <td style="border-top:1px #B4A078 solid; border-right:0px">
                            <a href="delgwc.php?goodsid=<?php echo $goodsid;?>" id="quxiao">取消商品</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <div id="ft">

                <div id="changeNum"><input id="changeNumbtn" type="submit" value="修改商品数量" /></div>
                <div id="priceSum">商品金额总计：￥<?php echo number_format($total,2);?></div>

        </div>


    <div class="inputOne">
        <input class="pay" name="ok" value="" type="submit" style=" float:right;"/></div>
        <div id="delGwc"><a href="delgwc2.php">清空购物车</a> </div>

    </form>
</div>












        <?php
        include "htmlFoot.php";
        ?>
    </div>

</body>
</html>