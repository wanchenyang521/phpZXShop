-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-12-11 03:25:37
-- 服务器版本： 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zx`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL COMMENT '管理员编号',
  `name` varchar(30) NOT NULL COMMENT '用户姓名',
  `password` varchar(30) NOT NULL COMMENT '用户密码'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin1', '123456'),
(2, 'admin2', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `gonggao`
--

CREATE TABLE `gonggao` (
  `id` int(11) NOT NULL COMMENT '公告id',
  `title` varchar(200) NOT NULL COMMENT '公告标题',
  `content` text NOT NULL COMMENT '公告内容',
  `ggdate` varchar(20) NOT NULL COMMENT '公告时间'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `gonggao`
--

INSERT INTO `gonggao` (`id`, `title`, `content`, `ggdate`) VALUES
(1, '甄选上线', '甄选电商网站正式上线啦！！！！', '2018-01-01'),
(2, '公告呀', '我也不知道要发布什么公告，反正这里就是一个公告，来不及解释了，赶紧上车', '2018-01-02');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `goodsid` int(11) NOT NULL COMMENT '商品编号',
  `typeid` int(11) DEFAULT NULL COMMENT '商品类型',
  `goodsname` varchar(100) DEFAULT NULL COMMENT '商品名称',
  `goodsprice` int(11) DEFAULT NULL COMMENT '商品价格',
  `vipprice` int(11) DEFAULT NULL COMMENT '会员价格',
  `photo` varchar(100) DEFAULT NULL COMMENT '商品图片',
  `introduction` varchar(11) DEFAULT NULL COMMENT '商品简介'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`goodsid`, `typeid`, `goodsname`, `goodsprice`, `vipprice`, `photo`, `introduction`) VALUES
(1, 2, '20寸 纯PC迷彩登机箱', 10, 9, 'imgs/1.png', '20寸 纯PC迷彩登机'),
(2, 2, '牛皮纤薄双层公文包', 11, 10, 'imgs/2.png', '牛皮纤薄双层公文包介绍'),
(3, 2, '头层牛皮名片夹', 12, 11, 'imgs/3.png', '头层牛皮名片夹介绍'),
(4, 2, '满天星头层羊反绒女鞋', 13, 12, 'imgs/4.png', '满天星头层羊反绒女鞋介'),
(5, 2, '男士优质小牛皮手工正装鞋', 14, 13, 'imgs/5.png', '男士优质小牛皮手工正装'),
(6, 2, '软弹增高鞋垫', 15, 14, 'imgs/6.png', '软弹增高鞋垫介绍'),
(7, 3, '3双装 清凉透气男式船袜', 16, 15, 'imgs/7.png', '3双装 清凉透气男式船'),
(8, 3, '简约纯色平沿棒球帽', 17, 16, 'imgs/8.png', '简约纯色平沿棒球帽介绍'),
(9, 3, '100%真丝玩彩波纹飘带', 18, 17, 'imgs/9.png', '100%真丝玩彩波纹飘'),
(10, 3, '女式可脱卸蝴蝶结卫衣', 19, 18, 'imgs/10.png', '女式可脱卸蝴蝶结卫衣介'),
(11, 3, '女式典雅柔色真丝衬衫', 20, 19, 'imgs/11.png', '女式典雅柔色真丝衬衫介'),
(12, 3, '女式撞色领羊毛开衫', 21, 20, 'imgs/12.png', '女式撞色领羊毛开衫介绍'),
(13, 3, '男式潮流水洗皮机车夹克', 22, 21, 'imgs/13.png', '男式潮流水洗皮机车夹克'),
(14, 3, '情侣款 M-65 战地休闲夹克', 23, 22, 'imgs/14.png', '情侣款 M-65 战地'),
(15, 3, '中古徽章 MA-1飞行员夹克', 24, 23, 'imgs/15.png', '中古徽章 MA-1飞行'),
(16, 4, '便携式高清投影仪', 25, 24, 'imgs/16.png', '便携式高清投影仪介绍'),
(17, 4, '网易智造手持式小旋风风扇', 26, 25, 'imgs/17.png', '网易智造手持式小旋风风'),
(18, 4, '迷你多功能扭腰踏步机', 27, 26, 'imgs/18.png', '迷你多功能扭腰踏步机介'),
(19, 4, '轻质线控自拍杆', 28, 27, 'imgs/19.png', '轻质线控自拍杆介绍'),
(20, 4, '入门款 单屏显示器支架', 29, 28, 'imgs/20.png', '入门款 单屏显示器支架'),
(21, 4, '网易智造精纺复古手机壳', 30, 29, 'imgs/21.png', '网易智造精纺复古手机壳'),
(22, 1, '新色 奢华植鞣头层水牛皮席三件套', 31, 30, 'imgs/22.png', '新色 奢华植鞣头层水牛'),
(23, 1, '平滑细篾头层青碳化竹凉席', 32, 31, 'imgs/23.png', '平滑细篾头层青碳化竹凉'),
(24, 1, '升级款日式针织羽丝绒夏凉被', 33, 32, 'imgs/24.png', '升级款日式针织羽丝绒夏'),
(25, 1, '假日物语阳台折叠挂桌', 34, 33, 'imgs/25.png', '假日物语阳台折叠挂桌介'),
(26, 1, '北欧简约布艺软包床', 35, 34, 'imgs/26.png', '北欧简约布艺软包床介绍'),
(27, 1, '北欧布艺长条凳', 36, 35, 'imgs/27.png', '北欧布艺长条凳介绍'),
(28, 1, '开学季 收纳袋组合', 37, 36, 'imgs/28.png', '开学季 收纳袋组合介绍'),
(29, 1, '条纹布艺收纳盒', 38, 37, 'imgs/29.png', '条纹布艺收纳盒介绍'),
(30, 1, '真空压缩袋', 39, 38, 'imgs/30.png', '真空压缩袋介绍'),
(31, 6, '仲秋拾月?月华浓月饼礼盒 60克*12枚', 40, 39, 'imgs/31.png', '仲秋拾月?月华浓月饼礼'),
(32, 6, '仲秋拾月?茗月夜月饼礼盒 60克*8枚', 41, 40, 'imgs/32.png', '仲秋拾月?茗月夜月饼礼'),
(33, 6, '女生零食礼盒', 42, 41, 'imgs/33.png', '女生零食礼盒介绍'),
(34, 7, '茅台镇的酒', 43, 42, 'imgs/34.png', '茅台镇的酒介绍'),
(35, 7, '特型黄酒', 44, 43, 'imgs/35.png', '特型黄酒介绍'),
(36, 7, '挚爱佳酿 6款组合葡萄酒', 45, 44, 'imgs/36.png', '挚爱佳酿 6款组合葡萄'),
(37, 7, '即食燕窝 70克*6瓶 30%', 46, 45, 'imgs/37.png', '即食燕窝 70克*6瓶'),
(38, 7, '干海参 200克（34-40头）', 47, 46, 'imgs/38.png', '干海参 200克（34'),
(39, 7, '干制松茸 50克', 48, 47, 'imgs/39.png', '干制松茸 50克介绍'),
(40, 8, '小怪兽超绒浴巾礼盒（3件套装）', 49, 48, 'imgs/40.png', '小怪兽超绒浴巾礼盒（3'),
(41, 8, '婴儿奶瓶宽口径PPSU奶套装(2支装)', 50, 49, 'imgs/41.png', '婴儿奶瓶宽口径PPSU'),
(42, 8, '稻壳原生态儿童餐具六件套', 51, 50, 'imgs/42.png', '稻壳原生态儿童餐具六件'),
(43, 8, '新手妈妈吸奶哺乳套装（3件套）', 52, 51, 'imgs/43.png', '新手妈妈吸奶哺乳套装（'),
(44, 8, '多功能孕妇枕哺乳枕', 53, 52, 'imgs/44.png', '多功能孕妇枕哺乳枕介绍'),
(45, 8, '超人奶爸包', 54, 53, 'imgs/45.png', '超人奶爸包介绍'),
(46, 9, '云音乐金属夹磨砂笔', 55, 54, 'imgs/46.png', '云音乐金属夹磨砂笔介绍'),
(47, 9, '云音乐?哆啦A梦密码钥匙扣 金银岛系列', 56, 55, 'imgs/47.png', '云音乐?哆啦A梦密码钥'),
(48, 9, '云音乐?哆啦A梦团结伞 蓝色直柄雨伞', 57, 56, 'imgs/48.png', '云音乐?哆啦A梦团结伞'),
(49, 9, '尤克里里Long Play款', 58, 57, 'imgs/49.png', '尤克里里Long Pl'),
(50, 9, '瑞鸣收藏版CD-摇篮曲EP', 59, 58, 'imgs/50.png', '瑞鸣收藏版CD-摇篮曲'),
(51, 9, '瑞鸣收藏版CD-三国', 60, 59, 'imgs/51.png', '瑞鸣收藏版CD-三国介');

-- --------------------------------------------------------

--
-- 表的结构 `maders`
--

CREATE TABLE `maders` (
  `maderid` int(11) NOT NULL COMMENT '制造商id',
  `photo` varchar(100) NOT NULL COMMENT '图片',
  `recommend` int(5) NOT NULL COMMENT '推荐'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `maders`
--

INSERT INTO `maders` (`maderid`, `photo`, `recommend`) VALUES
(1, 'img/mader1.jpg', 1),
(2, 'img/mader2.jpg', 1),
(3, 'img/mader3.jpg', 1),
(4, 'img/mader4.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `newgood`
--

CREATE TABLE `newgood` (
  `newId` int(100) NOT NULL,
  `photos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `newgood`
--

INSERT INTO `newgood` (`newId`, `photos`) VALUES
(1, 'img/new1.png'),
(2, '		\r\nimg/new2.png\r\n'),
(3, '		\r\nimg/new3.png\r\n'),
(4, 'img/new4.png\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL COMMENT '订单编号',
  `userid` int(11) DEFAULT NULL COMMENT '客户编号',
  `spc` varchar(100) DEFAULT NULL COMMENT '商品串',
  `slc` varchar(100) DEFAULT NULL COMMENT '数量串',
  `shouhuoren` varchar(30) DEFAULT NULL COMMENT '收货人姓名',
  `address` varchar(100) DEFAULT NULL COMMENT '收货人地址',
  `tel` varchar(30) DEFAULT NULL COMMENT '联系电话',
  `shff` varchar(30) DEFAULT NULL COMMENT '收货方式',
  `orderdate` varchar(12) DEFAULT NULL COMMENT '下单时间',
  `xiadanren` varchar(30) DEFAULT NULL COMMENT '下单人姓名',
  `zt` varchar(20) DEFAULT NULL COMMENT '订单状态',
  `total` float DEFAULT NULL COMMENT '价格总计'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `spc`, `slc`, `shouhuoren`, `address`, `tel`, `shff`, `orderdate`, `xiadanren`, `zt`, `total`) VALUES
(1, 1, '牛皮纤薄双层公文包@头层牛皮名片夹@', '1@2@', 'wcy', '泰州', '11111111111', '快递', '2018-01-01', 'wcy', '待发货', 21),
(2, 2, '男士优质小牛皮手工正装鞋', '1', 'www', '江苏', '21111111111', '快递', '2018-01-02', 'www', '已发货', 13);

-- --------------------------------------------------------

--
-- 表的结构 `shutter`
--

CREATE TABLE `shutter` (
  `shutterID` int(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `shutter`
--

INSERT INTO `shutter` (`shutterID`, `photo`) VALUES
(1, 'img/shutter_1.jpg'),
(2, 'img/shutter_2.jpg'),
(3, 'img/shutter_3.jpg'),
(4, 'img/shutter_4.jpg'),
(5, 'img/shutter_5.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE `type` (
  `typeid` int(11) NOT NULL COMMENT '类别编号',
  `typename` varchar(30) DEFAULT NULL COMMENT '类别名称',
  `introduction` text COMMENT '类别简介'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`typeid`, `typename`, `introduction`) VALUES
(1, '居家', '居家介绍'),
(2, '鞋包配饰', '鞋靴介绍'),
(3, '服装', '服装'),
(4, '电器', '电器'),
(6, '饮食', '饮食'),
(7, '餐厨', '餐厨'),
(8, '婴童', '婴童'),
(9, '文体', '文体');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL COMMENT '用户编号',
  `username` varchar(30) NOT NULL COMMENT '用户姓名',
  `userpassword` varchar(200) NOT NULL COMMENT '用户密码',
  `telephones` varchar(15) NOT NULL COMMENT '用户电话',
  `regdate` varchar(12) NOT NULL COMMENT '注册时间'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `username`, `userpassword`, `telephones`, `regdate`) VALUES
(1, 'user1', '123456', '11111111111', '2018-01-01'),
(2, 'user2', '123456', '21111111111', '2018-01-02'),
(3, 'user3', '123456', '31111111111', '2018-01-03'),
(4, 'user4', '123456', '41111111111', '2018-01-04'),
(5, 'user5', '123456', '51111111111', '2018-01-05'),
(6, 'user6', '123456', '61111111111', '2018-01-06'),
(7, 'user7', '123456', '71111111111', '2018-01-07'),
(8, 'user8', '123456', '81111111111', '2018-01-08'),
(9, 'q111111', '96e79218965eb72c92a549dd5a3301', '18994648230', '2018-12-11'),
(10, 'q222222', 'e3ceb5881a0a1fdaad01296d755486', '18994648230', '2018-12-11'),
(11, 'q1111111', '96e79218965eb72c92a549dd5a330112', '18994648230', '2018-12-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonggao`
--
ALTER TABLE `gonggao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goodsid`),
  ADD KEY `typeid` (`typeid`);

--
-- Indexes for table `maders`
--
ALTER TABLE `maders`
  ADD PRIMARY KEY (`maderid`);

--
-- Indexes for table `newgood`
--
ALTER TABLE `newgood`
  ADD PRIMARY KEY (`newId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `shutter`
--
ALTER TABLE `shutter`
  ADD PRIMARY KEY (`shutterID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员编号', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `gonggao`
--
ALTER TABLE `gonggao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告id', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `goodsid` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品编号', AUTO_INCREMENT=52;

--
-- 使用表AUTO_INCREMENT `maders`
--
ALTER TABLE `maders`
  MODIFY `maderid` int(11) NOT NULL AUTO_INCREMENT COMMENT '制造商id', AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `newgood`
--
ALTER TABLE `newgood`
  MODIFY `newId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单编号', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `shutter`
--
ALTER TABLE `shutter`
  MODIFY `shutterID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `type`
--
ALTER TABLE `type`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT COMMENT '类别编号', AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号', AUTO_INCREMENT=12;

--
-- 限制导出的表
--

--
-- 限制表 `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`typeid`) REFERENCES `type` (`typeid`);

--
-- 限制表 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
