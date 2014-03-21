-- phpMyAdmin SQL Dump
-- version 4.1.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-03-20 02:21:42
-- 服务器版本： 5.5.35
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weixin_company`
--

-- --------------------------------------------------------

--
-- 表的结构 `exchange`
--

CREATE TABLE IF NOT EXISTS `exchange` (
  `exchange_id` int(90) NOT NULL AUTO_INCREMENT,
  `exchange_name` varchar(20) NOT NULL COMMENT '兑换的物品名称',
  `exchange_type` int(1) NOT NULL COMMENT '兑换类型  0为虚拟 1为实物',
  `exchange_integration` int(15) NOT NULL COMMENT '兑换此物品需要的积分',
  `exchange_image` text NOT NULL COMMENT '兑换物品图片',
  `exchange_summary` text NOT NULL COMMENT '简介介绍',
  `exchangez_details` longtext NOT NULL COMMENT '兑换物品详细介绍',
  PRIMARY KEY (`exchange_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='兑换物品表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `exchange`
--

INSERT INTO `exchange` (`exchange_id`, `exchange_name`, `exchange_type`, `exchange_integration`, `exchange_image`, `exchange_summary`, `exchangez_details`) VALUES
(1, '兑换1', 0, 10, '174Small.jpg', 'asdasjbdjasbf', 'dasdasf'),
(2, '兑换2', 1, 20, '184Small.jpg', 'dasdasddkhjasdhkajshdkjsad', 'dasbjkdhasjkhdkjasf');

-- --------------------------------------------------------

--
-- 表的结构 `exchange_record`
--

CREATE TABLE IF NOT EXISTS `exchange_record` (
  `exchange_record_id` int(20) NOT NULL AUTO_INCREMENT,
  `exchange_id` int(20) NOT NULL COMMENT '兑换物品表的id',
  `user_id` int(20) NOT NULL COMMENT '用户id',
  `exchange_time` varchar(20) NOT NULL COMMENT '兑换时间',
  `exchange_state` int(1) NOT NULL COMMENT '兑换状态',
  PRIMARY KEY (`exchange_record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='兑换记录表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `exchange_record`
--

INSERT INTO `exchange_record` (`exchange_record_id`, `exchange_id`, `user_id`, `exchange_time`, `exchange_state`) VALUES
(1, 1, 1, '1395132325', 0);

-- --------------------------------------------------------

--
-- 表的结构 `gift`
--

CREATE TABLE IF NOT EXISTS `gift` (
  `gift_id` int(30) NOT NULL AUTO_INCREMENT,
  `gift_type` int(1) NOT NULL,
  `gift_award_type` int(1) NOT NULL DEFAULT '0' COMMENT '奖励类型 0为积分 1为兑换中的奖品 2为兑换妈',
  `gift_integration` int(4) NOT NULL COMMENT '当奖励类型为0时 生效 奖励的积分数量',
  `gift_exchange_id` int(4) NOT NULL COMMENT '当奖励1时生效 为兑换礼品id',
  PRIMARY KEY (`gift_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `gift`
--

INSERT INTO `gift` (`gift_id`, `gift_type`, `gift_award_type`, `gift_integration`, `gift_exchange_id`) VALUES
(1, 1, 1, 100000, 1),
(5, 1, 0, 0, 0),
(9, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gift_setting`
--

CREATE TABLE IF NOT EXISTS `gift_setting` (
  `gift_id` int(10) NOT NULL AUTO_INCREMENT,
  `gift_one_probability` float DEFAULT NULL,
  `gift_two_probability` float DEFAULT NULL,
  `gift_three_probability` float DEFAULT NULL,
  `gift_image` varchar(20) NOT NULL,
  `gift_type` int(1) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`gift_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='礼品配置表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gift_setting`
--

INSERT INTO `gift_setting` (`gift_id`, `gift_one_probability`, `gift_two_probability`, `gift_three_probability`, `gift_image`, `gift_type`, `create_time`) VALUES
(1, 1, 5, 10, '', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `merchandise`
--

CREATE TABLE IF NOT EXISTS `merchandise` (
  `merchandise_id` int(11) NOT NULL AUTO_INCREMENT,
  `merchandise_name` varchar(20) NOT NULL COMMENT '商品名称',
  `merchandise_money` int(11) NOT NULL COMMENT '商品金额',
  PRIMARY KEY (`merchandise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='商品列表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `merchandise`
--

INSERT INTO `merchandise` (`merchandise_id`, `merchandise_name`, `merchandise_money`) VALUES
(1, '测试1', 1),
(2, '测试2', 2),
(3, '测试3', 3),
(4, '测试4', 4);

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_code` varchar(40) NOT NULL,
  `appointment_time` varchar(20) NOT NULL COMMENT '预约时间',
  `orders_remarks` text COMMENT '订单备注',
  `appointment_object` varchar(30) DEFAULT NULL COMMENT '预约对象',
  `merchandise_id` int(10) NOT NULL COMMENT '商品id',
  `order_number` int(4) NOT NULL COMMENT '预约人数',
  `user_id` int(10) DEFAULT NULL,
  `user_phone` varchar(11) NOT NULL,
  `order_type` int(1) NOT NULL COMMENT '订单类型。。 如1则是通过微信公众平台进行预约  如是通过后台crm系统插入 则为2 user_phone 必须填写',
  `order_pay_state` int(1) NOT NULL COMMENT '0为未支付 1为已支付',
  `order_state` int(1) NOT NULL DEFAULT '0' COMMENT '0为正在进行 1为完成 2为取消',
  `order_time` int(20) NOT NULL COMMENT '下单时间',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单列表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `registration_day`
--

CREATE TABLE IF NOT EXISTS `registration_day` (
  `day` int(11) NOT NULL,
  `award` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='连续签到奖励';

--
-- 转存表中的数据 `registration_day`
--

INSERT INTO `registration_day` (`day`, `award`) VALUES
(1, 10),
(2, 20),
(3, 30),
(4, 40),
(5, 50);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_open_id` text NOT NULL COMMENT '微信公众平台id',
  `user_name` varchar(20) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `sex` int(1) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `user_money` int(20) NOT NULL,
  `user_integration` int(20) NOT NULL COMMENT '积分',
  `user_state` int(1) DEFAULT '0' COMMENT '用户激活状态 0为未激活 1为激活',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `user_open_id`, `user_name`, `user_phone`, `sex`, `birthday`, `user_money`, `user_integration`, `user_state`) VALUES
(1, 'ocpOot-COx7UruiqEfag_Lny7dlc', '张三', '13955555555', 2, '1993-05-07', 605, 343, 1),
(2, '', '李四', '13855555555', 2, '1980-07-05', 200, 30, 1),
(3, '', '王五', '13755555555', 1, '1985-06-04', 150, 350, 1),
(4, '', '赵六', '13655555555', 1, '1989-06-04', 200, 140, 1),
(5, '', '孙七', '13555555555', 2, '1990-07-06', 0, 0, 1),
(6, '', '周八', '1345555577', 2, '1993-06-07', 50, 0, 1),
(7, '', '吴九', '13455558888', 1, '1994-07-10', 150, 12, 0),
(8, '', '郑十', '13055555555', 1, '1992-05-10', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user_points_record`
--

CREATE TABLE IF NOT EXISTS `user_points_record` (
  `record_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `record_type` int(1) NOT NULL COMMENT 'record_type 1积分 2钱',
  `fraction` int(20) NOT NULL COMMENT '积分',
  `source` varchar(20) NOT NULL COMMENT '操作者',
  `create_time` varchar(20) NOT NULL COMMENT '创建时间',
  `exchange_id` int(4) DEFAULT NULL COMMENT '兑换物品id',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分数获得记录' AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `user_points_record`
--

INSERT INTO `user_points_record` (`record_id`, `user_id`, `record_type`, `fraction`, `source`, `create_time`, `exchange_id`) VALUES
(1, 1, 1, 100, 'crm', '1394542295', NULL),
(2, 1, 1, 120, 'crm', '1394542411', NULL),
(3, 1, 1, 120, 'crm', '1394542434', NULL),
(4, 1, 1, 100, 'crm', '1394543005', NULL),
(5, 1, 1, 100, 'crm', '1394543156', NULL),
(6, 1, 1, 123, 'crm', '1394543227', NULL),
(7, 1, 2, 300, 'crm', '1394543236', NULL),
(8, 1, 2, 100, 'crm', '1394543256', NULL),
(9, 1, 2, 1, 'crm', '1394543286', NULL),
(10, 1, 2, 1, 'crm', '1394543328', NULL),
(11, 1, 1, -100, 'crm', '1394543343', NULL),
(12, 1, 2, 100, 'crm', '1394543348', NULL),
(13, 1, 2, -100, 'crm', '1394543352', NULL),
(14, 1, 2, 100, 'crm', '1394543373', NULL),
(15, 1, 2, 100, 'crm', '1394543390', NULL),
(16, 1, 2, -100, 'crm', '1394543434', NULL),
(17, 1, 2, 100, 'crm', '1394543440', NULL),
(18, 1, 2, -100, 'crm', '1394543466', NULL),
(19, 1, 2, 100, 'crm', '1394543470', NULL),
(20, 1, 2, -50, 'crm', '1394543798', NULL),
(21, 1, 2, 50, 'crm', '1394543804', NULL),
(22, 1, 1, -300, 'crm', '1394544344', NULL),
(23, 1, 2, 1, 'crm', '1394673705', NULL),
(24, 1, 2, 1, 'crm', '1394673730', NULL),
(25, 1, 2, 1, 'crm', '1394673751', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `user_registration_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `day` int(10) NOT NULL,
  `today_able` int(1) NOT NULL COMMENT '当天是否签到',
  PRIMARY KEY (`user_registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户连续签到表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user_registration_record`
--

CREATE TABLE IF NOT EXISTS `user_registration_record` (
  `user_registration_record_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `registration_time` int(10) NOT NULL,
  PRIMARY KEY (`user_registration_record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户签到记录表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `weixin_user`
--

CREATE TABLE IF NOT EXISTS `weixin_user` (
  `subscribe` int(1) NOT NULL,
  `openid` varchar(20) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `sex` int(1) NOT NULL,
  `language` varchar(20) NOT NULL,
  `city` varchar(6) NOT NULL,
  `province` varchar(10) NOT NULL,
  `country` varchar(9) NOT NULL,
  `headimgurl` text NOT NULL,
  `subscribe_time` int(30) NOT NULL,
  `weixin_user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微信用户信息';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
