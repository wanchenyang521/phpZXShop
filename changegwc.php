<?php
session_start();
$arr=$_SESSION['mygoods'];
foreach($_POST as $key=>$value)
{
    foreach($arr as $k=>$v){
        if($key==$k){
            $v['goodsnum']=$value;
            $arr[$k]=$v;
        }
    }
}
$_SESSION['mygoods']=$arr;
echo "<script>location.href='gouwuche.php';</script>";
?>