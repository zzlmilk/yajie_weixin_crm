-- phpMyAdmin SQL Dump
-- version 4.1.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-03-10 06:52:52
-- 服务器版本： 5.5.35
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weixin`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(12) NOT NULL,
  `compang_id` int(12) NOT NULL,
  `admin_auth` text NOT NULL,
  `account` varchar(20) NOT NULL,
  `account_password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台账号' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(60) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(12) NOT NULL,
  `company_token` varchar(20) NOT NULL,
  `appid` varchar(40) NOT NULL,
  `app_secret` varchar(60) NOT NULL,
  `create_time` int(40) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='合作公司' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_token`, `appid`, `app_secret`, `create_time`) VALUES
(1, '雅捷', 'company', 'wxe7878882ea37482b', 'afc26fbaff69f7ce8c3c2a1cabdf0047', 0);

-- --------------------------------------------------------

--
-- 表的结构 `company_token`
--

CREATE TABLE IF NOT EXISTS `company_token` (
  `company_id` int(10) NOT NULL,
  `token` varchar(80) NOT NULL,
  `expires_in` int(4) NOT NULL,
  `application_time` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='token 存储';

--
-- 转存表中的数据 `company_token`
--

INSERT INTO `company_token` (`company_id`, `token`, `expires_in`, `application_time`) VALUES
(1, 'dasdsadhjkhdkjsahdk', 7200, 1234);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
