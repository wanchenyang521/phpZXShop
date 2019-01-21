<?php
/**
 * Created by PhpStorm.
 * User: wan11
 * Date: 2018-09-15
 * Time: 15:14
 */

//测试连接服务器
$conn = @mysqli_connect("localhost","root","") or die("数据库连接失败".mysqli_connect_error());
//连接相应的数据库
$selsect = @mysqli_select_db($conn,"db_zx");
//设置编码
mysqli_set_charset($conn,"utf8");