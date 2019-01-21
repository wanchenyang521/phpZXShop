<?php
session_start();
$goodsid=$_GET['goodsid'];
$arr=$_SESSION['mygoods'];
foreach($arr as $key=>$value){
    if($key==$goodsid){
        unset($arr[$key]);
    }
}
$_SESSION['mygoods']=$arr;
echo "<script>location.href='gouwuche.php';</script>";
?>