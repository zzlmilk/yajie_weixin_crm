-- phpMyAdmin SQL Dump
-- version 4.1.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-03-10 06:52:56
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
-- 表的结构 `gift`
--

CREATE TABLE IF NOT EXISTS `gift` (
  `gift_id` int(10) NOT NULL AUTO_INCREMENT,
  `gift_name` varchar(20) NOT NULL,
  `gift_probability` int(10) NOT NULL,
  `gift_image` varchar(20) NOT NULL,
  `gift_type` int(1) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`gift_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='礼品' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) NOT NULL,
  `order_code` varchar(20) NOT NULL,
  `order_open_id` varchar(20) NOT NULL,
  `order_money` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单列表';

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `sex` int(1) NOT NULL,
  `birthday` int(20) NOT NULL,
  `user_money` int(20) NOT NULL,
  `user_integration` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user_points_record`
--

CREATE TABLE IF NOT EXISTS `user_points_record` (
  `record_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `record_type` int(1) NOT NULL,
  `fraction` int(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分数获得记录' AUTO_INCREMENT=1 ;

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
