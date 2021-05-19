-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 04:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: realgamerli
--

-- --------------------------------------------------------

--
-- Table structure for table game_genre
--

CREATE TABLE game_genre (
  id bigint(20) UNSIGNED NOT NULL,
  game_id bigint(20) UNSIGNED NOT NULL,
  genre_id bigint(20) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table game_genre
--

INSERT INTO game_genre (id, game_id, genre_id, created_at, updated_at) VALUES
(1, 102, 26, 2021-05-17 08:26:52, 2021-05-17 08:26:52),
(2, 44, 5, 2021-05-17 08:27:29, 2021-05-17 08:27:29),
(3, 1, 1, 2021-05-17 08:33:03, 2021-05-17 08:33:03),
(4, 79, 20, 2021-05-17 08:34:04, 2021-05-17 08:34:04),
(5, 33, 29, 2021-05-17 08:36:53, 2021-05-17 08:36:53),
(6, 77, 10, 2021-05-17 11:36:02, 2021-05-17 11:36:02),
(7, 75, 3, 2021-05-17 11:36:44, 2021-05-17 11:36:44),
(8, 68, 8, 2021-05-17 11:36:46, 2021-05-17 11:36:46),
(9, 55, 20, 2021-05-17 11:36:47, 2021-05-17 11:36:47),
(10, 46, 3, 2021-05-17 15:03:32, 2021-05-17 15:03:32),
(11, 95, 17, 2021-05-18 07:18:39, 2021-05-18 07:18:39),
(12, 74, 14, 2021-05-18 07:18:43, 2021-05-18 07:18:43),
(13, 50, 23, 2021-05-18 07:19:07, 2021-05-18 07:19:07),
(14, 11, 4, 2021-05-18 07:19:11, 2021-05-18 07:19:11),
(15, 51, 5, 2021-05-18 07:19:13, 2021-05-18 07:19:13),
(16, 48, 1, 2021-05-18 07:19:16, 2021-05-18 07:19:16),
(17, 92, 9, 2021-05-18 07:19:18, 2021-05-18 07:19:18),
(18, 33, 1, 2021-05-18 07:19:20, 2021-05-18 07:19:20),
(19, 10, 18, 2021-05-18 07:19:22, 2021-05-18 07:19:22),
(20, 3, 24, 2021-05-18 07:19:24, 2021-05-18 07:19:24),
(21, 4, 27, 2021-05-18 07:19:26, 2021-05-18 07:19:26),
(22, 45, 2, 2021-05-18 07:19:28, 2021-05-18 07:19:28),
(23, 42, 19, 2021-05-18 07:19:31, 2021-05-18 07:19:31),
(24, 25, 6, 2021-05-18 07:19:33, 2021-05-18 07:19:33),
(25, 44, 17, 2021-05-18 07:19:35, 2021-05-18 07:19:35),
(26, 6, 30, 2021-05-18 07:19:37, 2021-05-18 07:19:37),
(27, 6, 23, 2021-05-18 07:19:39, 2021-05-18 07:19:39),
(28, 70, 13, 2021-05-18 07:19:41, 2021-05-18 07:19:41),
(29, 60, 27, 2021-05-18 07:19:43, 2021-05-18 07:19:43),
(30, 92, 9, 2021-05-18 07:19:45, 2021-05-18 07:19:45),
(31, 65, 17, 2021-05-18 07:19:48, 2021-05-18 07:19:48),
(32, 55, 17, 2021-05-18 07:19:50, 2021-05-18 07:19:50),
(33, 49, 8, 2021-05-18 07:19:54, 2021-05-18 07:19:54),
(34, 35, 17, 2021-05-18 07:19:56, 2021-05-18 07:19:56),
(35, 16, 26, 2021-05-18 07:19:59, 2021-05-18 07:19:59),
(36, 102, 15, 2021-05-18 07:20:01, 2021-05-18 07:20:01),
(37, 55, 23, 2021-05-18 07:20:04, 2021-05-18 07:20:04),
(38, 35, 18, 2021-05-18 07:20:07, 2021-05-18 07:20:07),
(39, 12, 17, 2021-05-18 07:20:09, 2021-05-18 07:20:09),
(40, 85, 12, 2021-05-18 07:20:11, 2021-05-18 07:20:11),
(41, 52, 3, 2021-05-18 07:20:14, 2021-05-18 07:20:14),
(42, 30, 27, 2021-05-18 07:20:17, 2021-05-18 07:20:17),
(43, 69, 13, 2021-05-18 07:20:20, 2021-05-18 07:20:20),
(44, 30, 9, 2021-05-18 07:20:22, 2021-05-18 07:20:22),
(45, 94, 26, 2021-05-18 07:20:27, 2021-05-18 07:20:27),
(46, 74, 12, 2021-05-18 07:20:30, 2021-05-18 07:20:30),
(47, 89, 1, 2021-05-18 07:20:32, 2021-05-18 07:20:32),
(48, 14, 9, 2021-05-18 07:20:34, 2021-05-18 07:20:34),
(49, 44, 17, 2021-05-18 07:20:37, 2021-05-18 07:20:37),
(50, 29, 23, 2021-05-18 07:20:39, 2021-05-18 07:20:39),
(51, 76, 9, 2021-05-18 07:20:41, 2021-05-18 07:20:41),
(52, 64, 25, 2021-05-18 07:20:43, 2021-05-18 07:20:43),
(53, 4, 6, 2021-05-18 07:20:45, 2021-05-18 07:20:45),
(54, 50, 29, 2021-05-18 07:20:48, 2021-05-18 07:20:48),
(55, 75, 28, 2021-05-18 07:20:49, 2021-05-18 07:20:49),
(56, 38, 7, 2021-05-18 07:20:51, 2021-05-18 07:20:51),
(57, 24, 11, 2021-05-18 07:20:54, 2021-05-18 07:20:54),
(58, 102, 12, 2021-05-18 07:20:56, 2021-05-18 07:20:56),
(59, 60, 3, 2021-05-18 07:20:58, 2021-05-18 07:20:58),
(60, 102, 4, 2021-05-18 07:21:01, 2021-05-18 07:21:01),
(61, 77, 21, 2021-05-18 07:21:03, 2021-05-18 07:21:03),
(62, 62, 4, 2021-05-18 07:21:05, 2021-05-18 07:21:05),
(63, 94, 1, 2021-05-18 07:21:07, 2021-05-18 07:21:07),
(64, 52, 12, 2021-05-18 07:21:10, 2021-05-18 07:21:10),
(65, 82, 23, 2021-05-18 07:21:12, 2021-05-18 07:21:12),
(66, 88, 10, 2021-05-18 07:21:14, 2021-05-18 07:21:14),
(67, 55, 20, 2021-05-18 07:21:17, 2021-05-18 07:21:17),
(68, 17, 27, 2021-05-18 07:21:19, 2021-05-18 07:21:19),
(69, 37, 26, 2021-05-18 07:21:21, 2021-05-18 07:21:21),
(70, 33, 7, 2021-05-18 07:21:23, 2021-05-18 07:21:23),
(71, 69, 24, 2021-05-18 07:21:26, 2021-05-18 07:21:26),
(72, 38, 14, 2021-05-18 07:21:28, 2021-05-18 07:21:28),
(73, 39, 16, 2021-05-18 07:21:47, 2021-05-18 07:21:47),
(74, 65, 27, 2021-05-18 07:21:50, 2021-05-18 07:21:50),
(75, 51, 27, 2021-05-18 07:21:52, 2021-05-18 07:21:52),
(76, 70, 26, 2021-05-18 07:21:54, 2021-05-18 07:21:54),
(77, 88, 4, 2021-05-18 07:21:56, 2021-05-18 07:21:56),
(78, 39, 19, 2021-05-18 07:21:58, 2021-05-18 07:21:58),
(79, 72, 8, 2021-05-18 07:21:59, 2021-05-18 07:21:59),
(80, 11, 5, 2021-05-18 07:22:02, 2021-05-18 07:22:02),
(81, 29, 5, 2021-05-18 07:22:04, 2021-05-18 07:22:04),
(82, 47, 5, 2021-05-18 07:22:06, 2021-05-18 07:22:06),
(83, 5, 25, 2021-05-18 07:22:08, 2021-05-18 07:22:08),
(84, 7, 26, 2021-05-18 07:22:10, 2021-05-18 07:22:10),
(85, 97, 24, 2021-05-18 07:22:13, 2021-05-18 07:22:13),
(86, 20, 29, 2021-05-18 07:22:15, 2021-05-18 07:22:15),
(87, 60, 11, 2021-05-18 07:22:17, 2021-05-18 07:22:17),
(88, 49, 7, 2021-05-18 07:22:20, 2021-05-18 07:22:20),
(89, 2, 6, 2021-05-18 07:22:22, 2021-05-18 07:22:22),
(90, 63, 27, 2021-05-18 07:22:24, 2021-05-18 07:22:24),
(91, 55, 14, 2021-05-18 07:22:26, 2021-05-18 07:22:26),
(92, 80, 28, 2021-05-18 07:22:28, 2021-05-18 07:22:28),
(93, 54, 15, 2021-05-18 07:22:30, 2021-05-18 07:22:30),
(94, 52, 13, 2021-05-18 07:22:33, 2021-05-18 07:22:33),
(95, 7, 23, 2021-05-18 07:22:35, 2021-05-18 07:22:35),
(96, 88, 19, 2021-05-18 07:22:37, 2021-05-18 07:22:37),
(97, 53, 1, 2021-05-18 07:22:39, 2021-05-18 07:22:39),
(98, 62, 26, 2021-05-18 07:22:42, 2021-05-18 07:22:42),
(99, 69, 22, 2021-05-18 07:22:44, 2021-05-18 07:22:44),
(100, 53, 13, 2021-05-18 07:22:46, 2021-05-18 07:22:46),
(101, 78, 17, 2021-05-18 07:22:48, 2021-05-18 07:22:48),
(102, 55, 27, 2021-05-18 07:22:50, 2021-05-18 07:22:50),
(103, 43, 24, 2021-05-18 07:22:52, 2021-05-18 07:22:52),
(104, 90, 23, 2021-05-18 07:22:55, 2021-05-18 07:22:55),
(105, 83, 18, 2021-05-18 07:22:57, 2021-05-18 07:22:57),
(106, 1, 4, 2021-05-18 07:22:59, 2021-05-18 07:22:59),
(107, 34, 7, 2021-05-18 07:23:02, 2021-05-18 07:23:02),
(108, 60, 2, 2021-05-18 07:23:04, 2021-05-18 07:23:04),
(109, 74, 10, 2021-05-18 07:27:41, 2021-05-18 07:27:41),
(110, 52, 22, 2021-05-18 07:38:50, 2021-05-18 07:38:50),
(111, 49, 9, 2021-05-18 07:38:53, 2021-05-18 07:38:53),
(112, 19, 2, 2021-05-18 07:38:55, 2021-05-18 07:38:55),
(113, 47, 18, 2021-05-18 07:38:57, 2021-05-18 07:38:57),
(114, 17, 17, 2021-05-18 07:39:00, 2021-05-18 07:39:00),
(115, 102, 26, 2021-05-18 07:39:02, 2021-05-18 07:39:02),
(116, 27, 29, 2021-05-18 07:39:04, 2021-05-18 07:39:04),
(117, 89, 9, 2021-05-18 07:39:06, 2021-05-18 07:39:06),
(118, 37, 3, 2021-05-18 07:39:08, 2021-05-18 07:39:08),
(119, 25, 15, 2021-05-18 07:39:12, 2021-05-18 07:39:12),
(120, 13, 6, 2021-05-18 07:39:16, 2021-05-18 07:39:16),
(121, 43, 25, 2021-05-18 07:39:19, 2021-05-18 07:39:19),
(122, 24, 26, 2021-05-18 07:39:22, 2021-05-18 07:39:22),
(123, 43, 30, 2021-05-18 07:39:25, 2021-05-18 07:39:25),
(124, 62, 28, 2021-05-18 07:39:27, 2021-05-18 07:39:27),
(125, 79, 5, 2021-05-18 07:39:30, 2021-05-18 07:39:30),
(126, 58, 1, 2021-05-18 07:39:31, 2021-05-18 07:39:31),
(127, 81, 22, 2021-05-18 07:39:34, 2021-05-18 07:39:34),
(128, 86, 1, 2021-05-18 07:39:36, 2021-05-18 07:39:36),
(129, 51, 8, 2021-05-18 07:39:38, 2021-05-18 07:39:38),
(130, 90, 2, 2021-05-18 07:39:40, 2021-05-18 07:39:40),
(131, 101, 22, 2021-05-18 07:39:42, 2021-05-18 07:39:42),
(132, 34, 11, 2021-05-18 07:39:44, 2021-05-18 07:39:44),
(133, 67, 12, 2021-05-18 07:39:46, 2021-05-18 07:39:46),
(134, 95, 18, 2021-05-18 07:39:49, 2021-05-18 07:39:49),
(135, 28, 10, 2021-05-18 07:39:51, 2021-05-18 07:39:51),
(136, 42, 6, 2021-05-18 07:39:53, 2021-05-18 07:39:53),
(137, 90, 11, 2021-05-18 07:39:56, 2021-05-18 07:39:56),
(138, 67, 29, 2021-05-18 07:39:58, 2021-05-18 07:39:58),
(139, 36, 5, 2021-05-18 07:40:00, 2021-05-18 07:40:00),
(140, 83, 8, 2021-05-18 07:40:03, 2021-05-18 07:40:03),
(141, 6, 3, 2021-05-18 07:40:08, 2021-05-18 07:40:08),
(142, 77, 26, 2021-05-18 07:40:10, 2021-05-18 07:40:10),
(143, 37, 22, 2021-05-18 07:40:11, 2021-05-18 07:40:11),
(144, 84, 25, 2021-05-18 07:40:13, 2021-05-18 07:40:13),
(145, 72, 9, 2021-05-18 07:40:15, 2021-05-18 07:40:15),
(146, 40, 24, 2021-05-18 07:40:16, 2021-05-18 07:40:16),
(147, 86, 20, 2021-05-18 07:40:18, 2021-05-18 07:40:18),
(148, 103, 4, 2021-05-18 07:40:20, 2021-05-18 07:40:20),
(149, 26, 5, 2021-05-18 07:40:21, 2021-05-18 07:40:21),
(150, 84, 20, 2021-05-18 07:40:23, 2021-05-18 07:40:23),
(151, 74, 2, 2021-05-18 07:40:24, 2021-05-18 07:40:24),
(152, 57, 24, 2021-05-18 07:40:26, 2021-05-18 07:40:26),
(153, 80, 18, 2021-05-18 07:40:27, 2021-05-18 07:40:27),
(154, 74, 1, 2021-05-18 07:40:29, 2021-05-18 07:40:29),
(155, 53, 10, 2021-05-18 07:40:31, 2021-05-18 07:40:31),
(156, 102, 30, 2021-05-18 07:40:33, 2021-05-18 07:40:33),
(157, 73, 30, 2021-05-18 07:40:34, 2021-05-18 07:40:34),
(158, 1, 28, 2021-05-18 07:40:36, 2021-05-18 07:40:36),
(159, 77, 2, 2021-05-18 07:40:38, 2021-05-18 07:40:38),
(160, 98, 11, 2021-05-18 07:40:39, 2021-05-18 07:40:39),
(161, 46, 23, 2021-05-18 07:40:41, 2021-05-18 07:40:41),
(162, 8, 24, 2021-05-18 07:40:43, 2021-05-18 07:40:43),
(163, 67, 11, 2021-05-18 07:40:44, 2021-05-18 07:40:44),
(164, 59, 12, 2021-05-18 07:40:46, 2021-05-18 07:40:46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table game_genre
--
ALTER TABLE game_genre
  ADD PRIMARY KEY (id),
  ADD KEY game_genre_game_id_foreign (game_id),
  ADD KEY game_genre_genre_id_foreign (genre_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table game_genre
--
ALTER TABLE game_genre
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- Constraints for dumped tables
--

--
-- Constraints for table game_genre
--
ALTER TABLE game_genre
  ADD CONSTRAINT game_genre_game_id_foreign FOREIGN KEY (game_id) REFERENCES games (id),
  ADD CONSTRAINT game_genre_genre_id_foreign FOREIGN KEY (genre_id) REFERENCES genres (id);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
