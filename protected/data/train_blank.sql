-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 03 月 13 日 22:53
-- 服务器版本: 5.5.29
-- PHP 版本: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `train`
--

-- --------------------------------------------------------

--
-- 表的结构 `train_item`
--

CREATE TABLE IF NOT EXISTS `train_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '试题被选ID',
  `nid` int(10) unsigned NOT NULL COMMENT '对应试题主体ID',
  `uid` int(10) unsigned DEFAULT NULL COMMENT '所属用户',
  `modified` int(10) unsigned DEFAULT NULL COMMENT '修改时间',
  `text` text COMMENT '试题被选文字部分',
  `correct` char(1) DEFAULT NULL COMMENT '该备选项是否正确',
  `order` int(10) unsigned DEFAULT NULL COMMENT '排序',
  `status` varchar(16) DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `nid` (`nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='试题选项部分' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `train_metas`
--

CREATE TABLE IF NOT EXISTS `train_metas` (
  `id` int(10) unsigned NOT NULL COMMENT '元数据ID',
  `uid` int(10) unsigned DEFAULT NULL COMMENT '所属用户',
  `name` varchar(200) DEFAULT NULL COMMENT '名称',
  `slug` varchar(200) DEFAULT NULL COMMENT '缩略',
  `type` varchar(32) DEFAULT NULL COMMENT '元数据所属类型',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `count` int(10) unsigned DEFAULT NULL COMMENT '所属试题个数',
  `order` int(10) unsigned DEFAULT NULL COMMENT '排序',
  `parent` int(10) DEFAULT NULL COMMENT '父级ID',
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `train_node`
--

CREATE TABLE IF NOT EXISTS `train_node` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '试题主体ID',
  `text` text NOT NULL COMMENT '试题主体的文字部分',
  `created` int(10) unsigned DEFAULT NULL COMMENT '创建时间',
  `modified` int(10) unsigned DEFAULT NULL COMMENT '修改时间',
  `uid` int(10) unsigned DEFAULT NULL COMMENT '用户ID',
  `status` varchar(16) DEFAULT NULL COMMENT '试题状态',
  `extent` int(2) NOT NULL DEFAULT '5' COMMENT '试题难度系数',
  `parent` int(10) DEFAULT NULL COMMENT '试题父级ID',
  `itemNum` int(10) unsigned DEFAULT NULL COMMENT '试题所属被选个数',
  `aloowPublic` char(1) DEFAULT NULL COMMENT '是否公开',
  PRIMARY KEY (`id`),
  KEY `created` (`created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='试题主体部分' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `train_profiles`
--

CREATE TABLE IF NOT EXISTS `train_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `train_profiles`
--

INSERT INTO `train_profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo');

-- --------------------------------------------------------

--
-- 表的结构 `train_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `train_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `train_profiles_fields`
--

INSERT INTO `train_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- 表的结构 `train_relationship`
--

CREATE TABLE IF NOT EXISTS `train_relationship` (
  `nid` int(10) unsigned NOT NULL,
  `mid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`nid`,`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='试题和元素之间的关系标';

-- --------------------------------------------------------

--
-- 表的结构 `train_users`
--

CREATE TABLE IF NOT EXISTS `train_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `train_users`
--

INSERT INTO `train_users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2013-03-13 14:53:18', '0000-00-00 00:00:00', 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2013-03-13 14:53:18', '0000-00-00 00:00:00', 0, 1);

--
-- 限制导出的表
--

--
-- 限制表 `train_profiles`
--
ALTER TABLE `train_profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `train_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
