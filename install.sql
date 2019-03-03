-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018-07-27 17:22:09
-- 服务器版本: 5.6.37-log
-- PHP 版本: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bjl`
--

-- --------------------------------------------------------

--
-- 表的结构 `app_admin_user`
--

CREATE TABLE IF NOT EXISTS `app_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '权限  0 普通用户  1超级管理员',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='后台用户' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `app_admin_user`
--

INSERT INTO `app_admin_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'e9279cc65e5b8b3b1ce38973837b9e7e', 1);

-- --------------------------------------------------------

--
-- 表的结构 `app_config`
--

CREATE TABLE IF NOT EXISTS `app_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conkey` varchar(20) DEFAULT NULL COMMENT '配置名称',
  `values` varchar(100) DEFAULT NULL COMMENT '系统设置值1 运营，0关闭)',
  `name` varchar(50) DEFAULT NULL,
  `con_type` varchar(20) DEFAULT NULL COMMENT 'con_type',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='配置' AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `app_config`
--

INSERT INTO `app_config` (`id`, `conkey`, `values`, `name`, `con_type`) VALUES
(1, 'lock', '1', '维护配置', 'system'),
(2, 'num', '987', '订单计数 ', '0order'),
(3, 'yong', '0.05', '佣金比例', '0ststem'),
(4, 'cz', '1', '充值开关', 'system'),
(5, 'tx', '1', '提现开关', 'system'),
(6, 'first', '5', '分销一级佣金', 'rebate'),
(7, 'second', '3', '分销二级佣金', 'rebate'),
(8, 'three', '2', '分销三级佣金', 'rebate'),
(9, 'ai', '1', '机器人开关', 'system'),
(11, 'chi', '1', '杀大赔小模式', 'system'),
(12, 'banben', '1.0.0', '版本号', '0order'),
(13, 'money', '800', '大额提现金额设置', 'order'),
(14, 'xztime', '60', '下注时间', '0ststem'),
(15, 'qztime', '10', '抢庄时间', '0ststem'),
(16, 'jsjgtime', '3', '计算结果时间', '0ststem'),
(17, 'jstime', '3', '结算时间', '0ststem'),
(18, 'four', '2', '分销四级佣金', 'rebate'),
(19, 'five', '1.5', '分销五级佣金', 'rebate'),
(20, 'glx', '47', '开闲家概率', 'ststem'),
(21, 'glh', '6', '开和概率', 'ststem'),
(22, 'glz', '47', '开庄家概率', 'ststem'),
(23, 'glxd', '1', '开闲家对概率', 'ststem'),
(24, 'glzd', '1', '开庄家对概率', 'ststem'),
(25, 'url', 'http://www.71js.cn', '微信授权登录域名', 'url'),
(26, 'adminUrl', 'http://www.gjj3.cn', '后台登录域名', 'url'),
(27, 'aiCount', '10', '机器人个数', 'order'),
(28, 'six', '1.5', '分销六级代理', 'rebate'),
(29, 'seven', '1', '分销七级代理', 'rebate'),
(30, 'eight', '1', '分销八级佣金', 'rebate'),
(31, 'nine', '0.5', '分销九级佣金', 'rebate'),
(32, 'ten', '0.5', '分销十级佣金', 'rebate');

-- --------------------------------------------------------

--
-- 表的结构 `app_dian`
--

CREATE TABLE IF NOT EXISTS `app_dian` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dian` tinyint(1) NOT NULL DEFAULT '0' COMMENT '开点 0=>闲 1=>闲对 2=>和 3=>庄对 4=>庄',
  `is_double` tinyint(1) DEFAULT '0' COMMENT '0 没有对 1闲对 3庄对',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '开点编号',
  `home_id` int(11) DEFAULT '0' COMMENT '房间号',
  `add_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='开点记录表' AUTO_INCREMENT=85879 ;

--
-- 转存表中的数据 `app_dian`
--

INSERT INTO `app_dian` (`id`, `dian`, `is_double`, `num`, `home_id`, `add_time`) VALUES
(85876, 4, 0, 987, 1, 1532683251),
(85877, 0, 0, 987, 1, 1532683289),
(85878, 0, 0, 987, 1, 1532683327);

-- --------------------------------------------------------

--
-- 表的结构 `app_gametext`
--

CREATE TABLE IF NOT EXISTS `app_gametext` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='公告规则表' AUTO_INCREMENT=4971 ;

--
-- 转存表中的数据 `app_gametext`
--

INSERT INTO `app_gametext` (`id`, `text`) VALUES

(4970, '用户=>10127===时间=>2018-07-27 09:43:03====提现金额=>1.20=====账户余额com_money=>1.20');

-- --------------------------------------------------------

--
-- 表的结构 `app_order`
--

CREATE TABLE IF NOT EXISTS `app_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `home_id` int(11) NOT NULL COMMENT '房间id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `money` int(11) NOT NULL DEFAULT '0' COMMENT '下注的钱',
  `win_money` int(11) DEFAULT '0' COMMENT '赢得钱',
  `dian` tinyint(1) NOT NULL DEFAULT '0' COMMENT '当前局开的点\r\n0 闲家\r\n2 和\r\n4 庄家',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '下注时间',
  `num` int(11) DEFAULT '0' COMMENT '订单计数',
  `is_winning` tinyint(1) DEFAULT '0' COMMENT '0未中奖，1以中奖 2不输不赢',
  `is_double` tinyint(1) DEFAULT '0' COMMENT '0没有对 1闲对 2庄对',
  `order_type` tinyint(1) DEFAULT '0' COMMENT '0普通订单',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `点索引` (`dian`) USING BTREE,
  KEY `时间计时索引` (`num`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='下注订单表' AUTO_INCREMENT=29125 ;

--
-- 转存表中的数据 `app_order`
--

INSERT INTO `app_order` (`id`, `home_id`, `user_id`, `money`, `win_money`, `dian`, `add_time`, `num`, `is_winning`, `is_double`, `order_type`) VALUES
(28405, 1, 12390, 30, -30, 4, 1532453475, 919, 0, 0, 0),
(29124, 1, 12674, 5, -5, 0, 1532620555, 968, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `app_rebate`
--

CREATE TABLE IF NOT EXISTS `app_rebate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `money` decimal(10,2) DEFAULT NULL COMMENT '返佣金额',
  `buy_id` int(11) DEFAULT NULL COMMENT '下级用户',
  `add_time` int(11) DEFAULT '0' COMMENT '时间',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态 0失败 1成功',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='佣金表' AUTO_INCREMENT=136102 ;

--
-- 转存表中的数据 `app_rebate`
--

-- --------------------------------------------------------

--
-- 表的结构 `app_recharge`
--

CREATE TABLE IF NOT EXISTS `app_recharge` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `money` int(11) DEFAULT '0' COMMENT '充值金额',
  `status` tinyint(1) DEFAULT '0' COMMENT '1充值成功 0 失败',
  `order_id` int(11) DEFAULT '0' COMMENT '订单号',
  `bz` varchar(200) DEFAULT NULL,
  `add_time` varchar(100) DEFAULT NULL COMMENT '时间',
  `type` tinyint(1) DEFAULT '0' COMMENT '0后台 3微信 1支付宝 2 QQ',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='充值表' AUTO_INCREMENT=14397 ;

--
-- 转存表中的数据 `app_recharge`
--

INSERT INTO `app_recharge` (`id`, `user_id`, `money`, `status`, `order_id`, `bz`, `add_time`, `type`) VALUES
(380, 337, 20, 0, 1530222912, '微信充值', '1529543160', 3),
(381, 337, 20, 0, 1530038397, '微信充值', '1529543162', 3),
(382, 13, 20, 1, 1530154364, '微信充值', '1529543493', 3),
(383, 13, 20, 0, 1530086939, '微信充值', '1529543553', 3),
(384, 13, 20, 0, 1530417836, '微信充值', '1529543595', 3),
(385, 590, 20, 1, 1530168768, '微信充值', '1529543807', 3),
(386, 590, 20, 0, 1529639393, '微信充值', '1529543867', 3),
(387, 590, 20, 0, 1530057321, '微信充值', '1529543933', 3),
(388, 591, 20, 1, 1529953609, '微信充值', '1529544004', 3),
(389, 591, 100, 1, 1530151206, '微信充值', '1529544138', 3),
(390, 596, 20, 0, 1530038787, '微信充值', '1529544497', 3),
(391, 596, 20, 0, 1530328264, '微信充值', '1529544513', 3),
(392, 587, 20, 1, 1529932347, '微信充值', '1529544824', 3),
(393, 587, 20, 0, 1530512079, '微信充值', '1529544839', 3),
(394, 333, 1000, 0, 1530260879, '微信充值', '1529544935', 3),
(395, 602, 20, 0, 1530242987, '微信充值', '1529545258', 3),
(396, 604, 20, 1, 1529932591, '微信充值', '1529545378', 3),
(14395, 10127, 50, 0, 1532876366, '微信充值', '1532655915', 3),
(14396, 8750, 20, 1, 1, '后台管理充值', '1532656198', 0);

-- --------------------------------------------------------

--
-- 表的结构 `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` varchar(50) DEFAULT '0' COMMENT '电话',
  `reg_time` int(11) DEFAULT '0' COMMENT '注册时间',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '用户金额',
  `openid` varchar(255) NOT NULL COMMENT 'openid',
  `url` varchar(200) DEFAULT NULL COMMENT '头像url',
  `nickname` varchar(100) DEFAULT NULL COMMENT '昵称',
  `sex` tinyint(1) DEFAULT '0' COMMENT '性别',
  `first_parent_id` int(11) DEFAULT '0' COMMENT '上一级',
  `second_parent_id` int(11) DEFAULT '0' COMMENT '上二级',
  `three_parent_id` int(11) DEFAULT '0' COMMENT '上三级',
  `four_parent_id` int(11) DEFAULT '0' COMMENT '上四级',
  `five_parent_id` int(11) DEFAULT '0' COMMENT '上五级',
  `six_parent_id` int(11) DEFAULT '0' COMMENT '上六级',
  `seven_parent_id` int(11) DEFAULT '0' COMMENT '七级',
  `eight_parent_id` int(11) DEFAULT '0' COMMENT '八级',
  `nine_parent_id` int(11) DEFAULT '0' COMMENT '九级',
  `ten_parent_id` int(11) DEFAULT '0' COMMENT '十级',
  `user_type` tinyint(1) DEFAULT '0' COMMENT '0 普通用户',
  `com_money` decimal(10,2) DEFAULT '0.00' COMMENT '佣金',
  `state` int(1) DEFAULT '1' COMMENT '是否冻结用户 0禁用 1启用',
  `is_daili` tinyint(1) DEFAULT '1' COMMENT '代理 1是代理  0 不是代理',
  `fopenid` varchar(255) DEFAULT NULL COMMENT '提现用的openid',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='用户' AUTO_INCREMENT=12734 ;

--
-- 转存表中的数据 `app_users`
--

INSERT INTO `app_users` (`id`, `mobile`, `reg_time`, `user_money`, `openid`, `url`, `nickname`, `sex`, `first_parent_id`, `second_parent_id`, `three_parent_id`, `four_parent_id`, `five_parent_id`, `six_parent_id`, `seven_parent_id`, `eight_parent_id`, `nine_parent_id`, `ten_parent_id`, `user_type`, `com_money`, `state`, `is_daili`, `fopenid`) VALUES
(12732, '0', 1532620461, '0.00', 'oTYbG1fIJLBMJfccqeteeiNVMe-c', 'http://thirdwx.qlogo.cn/mmopen/vi_32/qmLudgSBgJAPVqjTAicrc3y85rdCGAyic2aJMLooYiafK60V9DSpXc7p0HVRTNKHOh3uicVOpINxia5dHEf3sWj0HQw/132', '气质小啊斌', 2, 10812, 10810, 9972, 9970, 9969, 9968, 0, 0, 0, 0, 0, '0.00', 1, 1, NULL),
(12733, '0', 1532644447, '0.00', 'oTYbG1Whn3G2YslJ6RYAIRDl4roo', 'http://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83ervlRlZER01yHrOvCrTAXniaMu3pJkVlrxaKfgox7zPRQGgtLFINKeY3dAVTHdYHUP2LLPvymLGHrA/132', 'A自动发码机器人', 0, 5578, 5577, 5573, 4085, 3385, 1285, 0, 0, 0, 0, 0, '0.00', 1, 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `app_widthraswals`
--

CREATE TABLE IF NOT EXISTS `app_widthraswals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `money` int(11) DEFAULT '0' COMMENT '金额',
  `status` tinyint(1) DEFAULT '0' COMMENT '0待审核 1成功 2 失败\r\n',
  `bz` varchar(200) DEFAULT NULL,
  `add_time` varchar(100) DEFAULT NULL,
  `tx_type` tinyint(1) DEFAULT NULL COMMENT '提现类型 1余额  2佣金',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='提现表' AUTO_INCREMENT=4311 ;

--
-- 转存表中的数据 `app_widthraswals`
--


-- --------------------------------------------------------

--
-- 表的结构 `app_zhuang`
--

CREATE TABLE IF NOT EXISTS `app_zhuang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `formid` int(11) DEFAULT '0',
  `toid` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `add_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='转账' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;