-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-09-01 10:42:31
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `casencms`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `thumb` varchar(225) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `category_id`, `thumb`, `content`, `created_at`, `updated_at`) VALUES
(16, '陕西第一条', '	\r\n陕西第一条陕西第一条陕西第一条				        ', 5, 'Upload/images/201508/4f2017a84d0564995c2f477063c51a81afad756f.jpg', '<p>陕西第一条陕西第一条陕西第一条陕西第一条陕西第一条陕西第一条</p>\r\n', '2015-08-14', '2015-08-14'),
(17, '陕西第二条', '	\r\n陕西第二条陕西第二条				        ', 5, 'Upload/images/201508/411b5b4a23485628804bb6b132eea439ed6d06bf.jpg', '<p>陕西第二条陕西第二条陕西第二条陕西第二条陕西第二条陕西第二条</p>\r\n', '2015-08-14', '2015-08-14'),
(18, '北京第一条', '	\r\n北京第一条北京第一条北京第一条				        ', 6, 'Upload/images/201508/525b8a198642c521ea5e39c37f4a936003ad2118.jpg', '<p>北京第一条北京第一条北京第一条北京第一条北京第一条北京第一条北京第一条北京第一条北京第一条</p>\r\n', '2015-08-14', '2015-08-14'),
(19, '北京第二条', '	\r\n北京第二条北京第二条				        ', 6, 'Upload/images/201508/36241767e546b78759b19f192e21e38ccea7ad60.jpg', '<p>北京第二条北京第二条北京第二条北京第二条北京第二条北京第二条北京第二条北京第二条</p>\r\n', '2015-08-14', '2015-08-14'),
(20, '阿瑟大时代', '	\r\n阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代				        ', 8, 'http://laravel.cc//Upload/images/201508/8a3add1babc6a8599e2bd290b8af9422658114bf.jpg', '<p>阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代阿瑟大时代</p>\r\n', '2015-08-14', '2015-08-14'),
(21, '啊是大叔大叔的', '啊是大叔大叔的啊是大叔大叔的啊是大叔大叔的	\r\n				        ', 8, 'http://laravel.cc/Upload/images/201508/7f237acb33c81b0e04b7642783dbf5dce86d5783.jpg', '<p>啊是大叔大叔的啊是大叔大叔的啊是大叔大叔的啊是大叔大叔的啊是大叔大叔的</p>\r\n', '2015-08-14', '2015-08-14');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(20) unsigned NOT NULL,
  `token` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mark` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `pid`, `token`, `name`, `mark`, `description`, `updated_at`, `created_at`) VALUES
(4, 0, '7kT79Jwed1KMlzjipiG9RdgCGUjYS5nPn71oKvkv', '新闻中心', 'news', '	\r\n新闻中心新闻中心新闻中心新闻中心新闻中心新闻中心新闻中心				        ', '2015-08-07 01:55:40', '2015-08-07 01:55:40'),
(5, 4, '7kT79Jwed1KMlzjipiG9RdgCGUjYS5nPn71oKvkv', '陕西新闻', 'sxnews', '陕西新闻陕西新闻陕西新闻陕西新闻陕西新闻陕西新闻	\r\n				        ', '2015-08-07 01:56:03', '2015-08-07 01:56:03'),
(6, 4, '7kT79Jwed1KMlzjipiG9RdgCGUjYS5nPn71oKvkv', '北京新闻', 'bjnews', '北京新闻北京新闻北京新闻北京新闻北京新闻北京新闻	\r\n				        ', '2015-08-07 01:56:31', '2015-08-07 01:56:31'),
(7, 0, '7kT79Jwed1KMlzjipiG9RdgCGUjYS5nPn71oKvkv', '产品中心', 'product', '产品中心产品中心产品中心产品中心产品中心产品中心产品中心	\r\n				        ', '2015-08-07 01:56:53', '2015-08-07 01:56:53'),
(8, 7, '7kT79Jwed1KMlzjipiG9RdgCGUjYS5nPn71oKvkv', '热卖产品', 'hot', '	\r\n热卖产品热卖产品热卖产品热卖产品热卖产品热卖产品热卖产品	热卖产品			        ', '2015-08-07 01:57:34', '2015-08-07 01:57:34'),
(9, 0, '7kT79Jwed1KMlzjipiG9RdgCGUjYS5nPn71oKvkv', '关于我们', 'pt', '普通产品普通产品普通产品普通产品普通产品普通产品	\r\n				        ', '2015-08-07 01:57:53', '2015-08-07 01:57:53'),
(10, 0, 'zSl9gbIJfdHPcr7E1OKmq227sXICgX0yn5lkXdGt', '关于博客', 'blog', '	\r\n关于博客关于博客关于博客				        ', '2015-08-11 05:38:33', '2015-08-11 05:38:33');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `content`, `ip`, `updated_at`, `created_at`) VALUES
(1, 'casen', 'casen@mail.com', 'sadsadasd', '', '2015-08-14', '2015-08-14'),
(2, 'casen', 'casen@mail.com', 'sadsadasd', '', '2015-08-14', '2015-08-14');

-- --------------------------------------------------------

--
-- 表的结构 `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `thumb` varchar(225) DEFAULT NULL,
  `description` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `page`
--

INSERT INTO `page` (`id`, `category_id`, `title`, `thumb`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 9, '关于我们', NULL, '关于我们关于我们关于我们  ', '<p>关于我们关于我们关于我们关于我们关于我们关于我们</p>\r\n', '2015-08-10', '2015-08-10'),
(2, 10, '博客简介', NULL, '博客简介博客简介	\r\n				        ', '<p>博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介博客简介</p>\r\n', '2015-08-11', '2015-08-11');

-- --------------------------------------------------------

--
-- 表的结构 `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `seo_title` varchar(225) NOT NULL,
  `seo_keyword` varchar(225) NOT NULL,
  `seo_description` varchar(225) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `hottel` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `site`
--

INSERT INTO `site` (`id`, `seo_title`, `seo_keyword`, `seo_description`, `domain`, `hottel`, `address`, `created_at`, `updated_at`) VALUES
(1, '标题', '关键字', '描述						        ', 'www.baidu.com', '400-800-1111', '啥就是放假哦啊睡觉的哈', '2015-08-27', '2015-08-27');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) CHARACTER SET utf32 NOT NULL,
  `email` varchar(30) NOT NULL,
  `authority` tinyint(3) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `authority`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0c909a141f1f2c0a1cb602b0b2d7d050', 'admin@mail.com', 1, '2015-08-07', '2015-08-07'),
(2, 'qhorse', 'fb3b663498be888d834fde35aeee527e', 'qhorse@mail.com', 0, '2015-08-07', '2015-08-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
