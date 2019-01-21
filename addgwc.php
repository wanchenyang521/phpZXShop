<?php
session_start();
$goodsid=$_GET['goodsid'];
include "include/conn.php";
$sql="select * from goods where goodsid=$goodsid";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$goodsname=$row['goodsname'];
$arr=$_SESSION['mygoods'];
if(!is_array($arr)){
    $arr[$goodsid]=array("goodsid"=>$goodsid,"goodsname"=>$goodsname,"goodsnum"=>1);
}
else{
    if(!array_key_exists($goodsid,$arr)){
        $arr[$goodsid]=array("goodsid"=>$goodsid,"goodsname"=>$goodsname,"goodsnum"=>1);
    }
    else{
        $arr[$goodsid]["goodsnum"]+=1;
    }
}
$_SESSION['mygoods']=$arr;
echo "<script>location.href='gouwuche.php';</script>";
?>