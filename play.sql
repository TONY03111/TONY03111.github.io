-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 06 月 18 日 12:05
-- 伺服器版本： 10.3.15-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `網頁設計`
--

-- --------------------------------------------------------

--
-- 資料表結構 `play`
--

CREATE TABLE `play` (
  `place_id` varchar(5) NOT NULL,
  `place_name` varchar(15) NOT NULL,
  `place_kind` varchar(10) NOT NULL,
  `place_image` varchar(10) NOT NULL,
  `address` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `play`
--

INSERT INTO `play` (`place_id`, `place_name`, `place_kind`, `place_image`, `address`) VALUES
('B1', '富民生態公園', '公園', '', '台北市松山區三民路130巷'),
('B10', '延壽二號公園', '公園', '', '台北市松山區民生東路四段56巷3弄'),
('B11', '富錦五號公園', '公園', '', '台北市松山區民生東路四段97巷4弄20號'),
('B12', '富錦街 林蔭大道', '其他', '', '台北市松山區富錦街'),
('B13', 'Botanica 柏藤華漾', '其他', '', '台北市松山區富錦街470號'),
('B14', '撫遠街 飛機巷', '其他', '', '台北市松山區撫遠街'),
('B15', '小普羅旺斯', '其他', '', '台北市松山區富錦街447號'),
('B16', '開心鋼筆店', '其他', '', '台北市松山區延壽街82號'),
('B17', 'BEAMS', '其他', '', '台北市松山區富錦街340號'),
('B18', 'funfuntown放放堂', '其他', '', '台北市松山區富錦街359巷1弄2號'),
('B19', 'HeavyUse Oasis', '其他', '', '台北市松山區民生東路五段69巷2號'),
('B2', '新民生戲院', '其他', '', '台北市松山區民生東路五段190號'),
('B20', 'Design Butik', '其他', '', '台北市松山區民生東路五段38號'),
('B21', 'Fujin Tree 355', '其他', '', '台北市松山區富錦街355號'),
('B22', 'BEING spa 民生別館', '其他', '', '台北市松山區民生東路五段149號'),
('B3', '三民公園', '公園', '', '台北市松山區撫遠街與富錦街交叉口'),
('B4', '民生公園', '公園', '', '民生東路五段36巷4弄與8弄間'),
('B5', '富錦一號公園', '公園', '', '台北市松山區民生東路五段85號'),
('B6', '富錦二號公園', '公園', '', '台北市松山區民生東路五段69巷2弄27號'),
('B7', '富錦三號公園', '公園', '', '台北市松山區民生東路五段69巷4弄11號'),
('B8', '新中公園', '公園', '', '台北市松山區新中街12巷'),
('B9', '民有三號公園', '公園', '', '台北市松山區民生東路三段127巷14號');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`place_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
