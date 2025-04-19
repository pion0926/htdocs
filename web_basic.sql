-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 25-04-13 20:20
-- 서버 버전: 10.4.32-MariaDB
-- PHP 버전: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `web_basic`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `notices`
--

CREATE TABLE `notices` (
  `sno` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `views` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `notices`
--

INSERT INTO `notices` (`sno`, `title`, `content`, `author`, `date`, `views`, `image`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, '홈페이지 방문을 환영합니다!', '저희 글로벌헬스파트너스 웹사이트에 오신 것을 환영합니다.\\n이곳에서 다양한 소식과 활동 내용을 확인하실 수 있습니다.', '관리자', '2025-04-14', 4, NULL, '2025-04-13 17:25:23', NULL, 0),
(2, '[모집] 2025 상반기 사진 공모전 안내\r\n', '여러분의 시선으로 담은 희망의 순간들을 공유해주세요! 2025년 상반기 사진 공모전을 개최합니다. \r\n\r\n주제: 희망, 나눔, 건강\r\n\r\n접수 기간: 2025-05-01 ~ 2025-05-31', '홍보팀', '2025-04-13', 4, NULL, '2025-04-13 17:38:26', NULL, 0),
(3, 'TEST', 'TEST 입니다.', '관리자', '0000-00-00', 4, 'img_67fbf7fbd827a6.66958294.png', '2025-04-13 17:44:27', '2025-04-13 17:44:27', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`user_id`, `username`, `password_hash`, `is_admin`, `created_at`) VALUES
(1, 'admin', '$2y$10$p7OP.fnw/vIYfq7wH.RPReLn4ISYs2zSRP91aTN72aA8M8WAILSuO', 1, '2025-04-13 18:04:57');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`sno`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `notices`
--
ALTER TABLE `notices`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
