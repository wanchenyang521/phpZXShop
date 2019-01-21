<?php
session_start();//启动session
header("Content-type:image/gif");//输出头信息
$image_w=100;   //图像宽
$image_h=30;    //图像高
//range(low,high,step)
//参数	描述
//low	必需。规定数组的最低值。
//high	必需。规定数组的最高值。
//step	可选。规定元素之间的步进制。默认是 1。
$number=range(0,9);         //生成一个成员为数字的数组
$character=range("a","z");  //生成一个a-z小写字母的数组
$result=array_merge($number,$character);//合并一个或多个数组
$string="";  //初始化
$len=count($result); //新数组长度10+26=36
for($i=0;$i<4;$i++) //循环获取四位验证码
{
    $new_number[$i]=$result[rand(0,$len-1)];  //rand(min,max) 随机生成   min<=number<=max    0--35共36个随机下标
    $string=$string.$new_number[$i];          //拼接字符，生成验证码字符串
}
$_SESSION["yzm"]=$string;                     //使用会话变量存储信息
$check_image=imagecreatetruecolor($image_w,$image_h);//返回一个图像标识符，代表了一幅大小为 x_size 和 y_size 的空白图像。
$white=imagecolorallocate($check_image,255,255,255);//生成在空白图片所需要的颜色
$black=imagecolorallocate($check_image,0,0,0);
imagefill($check_image,0,0,$white);  //设置背景颜色为白色
for($i=0;$i<100;$i++)                       //生成黑色干扰点
{
    imagesetpixel($check_image,rand(0,$image_w),rand(0,$image_h),$black);// 画一个单一像素
}
for($i=0;$i<count($new_number);$i++)
{   //生成随机数速度更快
    $x=mt_rand(1,8)+$image_w*$i/4;      //保证字符按顺序排列
    $y=mt_rand(1,$image_h/4);
    $color=imagecolorallocate($check_image,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));    //生成随机颜色
    imagestring($check_image,5,$x,$y,$new_number[$i],$color);                          //font只能取1（最小）-5（最大）
}
imagepng($check_image); //输出一个图片
imagedestroy($check_image);//销毁这个图片
?>