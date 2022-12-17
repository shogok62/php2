-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-12-17 04:24:21
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_hw_1216`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_hw_1216_t`
--

CREATE TABLE `gs_hw_1216_t` (
  `ユニーク値` int(12) NOT NULL,
  `書籍名` varchar(64) NOT NULL,
  `書籍URL` text DEFAULT NULL,
  `書籍コメント` text DEFAULT NULL,
  `登録日時` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_hw_1216_t`
--

INSERT INTO `gs_hw_1216_t` (`ユニーク値`, `書籍名`, `書籍URL`, `書籍コメント`, `登録日時`) VALUES
(1, 'name', 'URL', 'Comments', '2022-12-16 01:23:11'),
(2, '人新世の「資本論」', 'xxx@shueisha.jp', '脱成長コミュニズム', '2022-12-16 09:04:51');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_hw_1216_t`
--
ALTER TABLE `gs_hw_1216_t`
  ADD PRIMARY KEY (`ユニーク値`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_hw_1216_t`
--
ALTER TABLE `gs_hw_1216_t`
  MODIFY `ユニーク値` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
