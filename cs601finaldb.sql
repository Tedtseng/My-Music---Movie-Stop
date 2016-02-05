-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 12:49 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs601finaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmusic`
--

CREATE TABLE IF NOT EXISTS `addmusic` (
  `music_id` int(11) NOT NULL,
  `music_name` varchar(60) NOT NULL,
  `music_desc` varchar(999) NOT NULL,
  `youtube` varchar(455) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmusic`
--

INSERT INTO `addmusic` (`music_id`, `music_name`, `music_desc`, `youtube`, `address`) VALUES
(3, 'I MiSS U - Joyce Chu ', '<b>Red People FB Fanpage</b><br>\r\n https://www.facebook.com/malaysiaredpeople<br>\r\n<b>POET PRODUCTION</b><br>\r\n https://www.facebook.com/poetproduction<br>\r\n<b>JOYCE CHU FB</b><br>\r\n  https://www.facebook.com/JoyceChu<br> \r\n', ' <iframe width="350" height="200" src="https://www.youtube.com/embed/fdQgPu3iUYk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=fdQgPu3iUYk');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `topic_id`, `username`) VALUES
(60, 'I love drive moive', '2015-12-14 21:00:17', 0, 0, 'Ted'),
(61, 'I love girl', '2015-12-14 21:16:11', 0, 0, 'kenny');

-- --------------------------------------------------------

--
-- Table structure for table `comment1`
--

CREATE TABLE IF NOT EXISTS `comment1` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment1`
--

INSERT INTO `comment1` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `topic_id`, `username`) VALUES
(57, 'æ¸¬è©¦', '2015-12-14 05:19:34', 0, 0, 'test'),
(58, 'areegreag', '2015-12-14 20:07:41', 0, 0, 'ergserg'),
(59, 'zxvcvcxv', '2015-12-14 20:08:29', 0, 0, 'xzcvxcv'),
(60, 'dgfsdfg', '2015-12-14 20:23:35', 0, 0, 'sdfgsfdg'),
(61, 'adfgsdfg', '2015-12-14 20:24:04', 0, 0, 'dfgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `comment2`
--

CREATE TABLE IF NOT EXISTS `comment2` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment2`
--

INSERT INTO `comment2` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `topic_id`, `username`) VALUES
(57, 'you', '2015-12-14 07:25:59', 0, 0, 'ping ping');

-- --------------------------------------------------------

--
-- Table structure for table `comment3`
--

CREATE TABLE IF NOT EXISTS `comment3` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment3`
--

INSERT INTO `comment3` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `topic_id`, `username`) VALUES
(57, 'ping', '2015-12-14 19:29:08', 0, 0, 'test3'),
(58, 'virginia', '2015-12-14 19:34:01', 0, 0, 'test3'),
(59, 'kenny', '2015-12-14 19:54:50', 0, 0, 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `comment4`
--

CREATE TABLE IF NOT EXISTS `comment4` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment4`
--

INSERT INTO `comment4` (`comment_id`, `comment_text`, `comment_date`, `user_id`, `topic_id`, `username`) VALUES
(57, 'one', '2015-12-14 20:48:29', 0, 0, 'test4');

-- --------------------------------------------------------

--
-- Table structure for table `comment5`
--

CREATE TABLE IF NOT EXISTS `comment5` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(100) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(45) NOT NULL,
  `movie_year` varchar(45) NOT NULL,
  `movie_desc` varchar(999) NOT NULL,
  `imdb` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_year`, `movie_desc`, `imdb`, `youtube`) VALUES
(1, 'Memento', '(2000)', 'Leonard Shelby wears expensive, tailored suits, drives a late model Jaguar sedan, but lives in cheap anonymous motels, paying his way with thick wads of cash. Although he looks like a successful businessman, his only work is the pursuit of vengeance: tracking and punishing the man who raped and murdered his wife. His suspicions dismissed by the police, Leonard''s life has become an all-consuming quest for justice.<p>\r\nThe difficulty, however, of locating his wife''s killer is compounded by the fact that Leonard suffers from a rare, untreatable form of memory loss. Although he can recall details of life before his "accident", Leonard can''t remember what happened fifteen minutes ago, where he is, where he''s going, or why.</p>', 'http://www.imdb.com/title/tt0209144/', '<iframe width="600" height="300" src="https://www.youtube.com/embed/lTV-UJqqRRY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'),
(3, 'Inception', '(2010)', 'A thief who steals corporate secrets through use of the dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.', 'http://www.imdb.com/title/tt1375666/?ref_=fn_al_tt_1', '<iframe width="600" height="300" src="https://www.youtube.com/embed/66TuSJo4dZM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'),
(4, 'Shutter Island', '(2010)', 'A U.S Marshal investigates the disappearance of a murderess who escaped from a hospital for the criminally insane.', 'http://www.imdb.com/title/tt1130884/', '<iframe width="600" height="300" src="https://www.youtube.com/embed/5iaYLCiq5RM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'),
(5, 'Drive', '(2011)', 'A mysterious Hollywood stuntman and mechanic moonlights as a getaway driver and finds himself trouble when he helps out his neighbor.', 'http://www.imdb.com/title/tt0780504/?ref_=fn_al_tt_1', '<iframe width="600" height="300" src="https://www.youtube.com/embed/-BF8hnw6OEw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>'),
(6, 'The Dark Knight', '(2008)', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.', 'http://www.imdb.com/title/tt0468569/?ref_=fn_al_tt_1', '<iframe width="600" height="300" src="https://www.youtube.com/embed/EXeTwQWrcwY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `music_id` int(11) NOT NULL,
  `music_name` varchar(60) NOT NULL,
  `music_desc` varchar(999) NOT NULL,
  `youtube` varchar(455) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `music_name`, `music_desc`, `youtube`, `address`) VALUES
(1, 'Daniela Andrade - Crazy (Cover)', 'I''ve loved this song for a long time and just recently came across TEEMID &amp; Joie Tan''s cover and really loved the subtle jazzy feel of it.', '<iframe width="350" height="200" src="https://www.youtube.com/embed/fzxag7U3Snk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://itunes.apple.com/album/crazy-single/id794455910'),
(2, 'The xx - Islands', '''Islands'' comes from their debut album, xx.', '<iframe width="350" height="200" src="https://www.youtube.com/embed/PElhV8z7I60?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=PElhV8z7I60'),
(3, 'I MiSS U - Joyce Chu ', 'Red People FB Fanpage:\r\n                    https://www.facebook.com/malaysiaredpeople\r\n                    POET PRODUCTION:\r\n                    https://www.facebook.com/poetproduction\r\n                    JOYCE CHU FB?\r\n                    https://www.facebook.com/JoyceChu ', ' <iframe width="350" height="200" src="https://www.youtube.com/embed/fdQgPu3iUYk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=fdQgPu3iUYk'),
(4, 'Niki & The Dove - Mother''s Protect (Goldroom Remix)', 'Picture : http://weheartit.com', '<iframe width="350" height="200" src="https://www.youtube.com/embed/SAG4wFcWunE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=SAG4wFcWunE'),
(5, 'Mayday-You Are Not Truly Happy', 'MayDay FB:<br>http://www.facebook.com/imayday555', '<iframe width="350" height="200" src="https://www.youtube.com/embed/hr8jWDyb1jg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=hr8jWDyb1jg'),
(6, 'ONE OK ROCK', 'C.h.a.o.s.m.y.t.h. [Official Music Video]\r\n                    ONE OK ROCK Official Website\r\n                    http://www.oneokrock.com/', '<iframe width="350" height="200" src="https://www.youtube.com/embed/C-xF2MAFw5s?list=RDC-xF2MAFw5s&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=C-xF2MAFw5s&list=RDC-xF2MAFw5s'),
(7, 'The xx - Basic Space', '''Basic Space'' by The xx\r\n                    Directed by Anthony Dickenson', '<iframe width="350" height="200" src="https://www.youtube.com/embed/kHZVGqqf3gg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=kHZVGqqf3gg'),
(8, 'Summertime Sadness', 'Lana Del Rey (Cover) by Daniela Andrade & Gia Margaret', '<iframe width="350" height="200" src="https://www.youtube.com/embed/2FpW1ctrDHE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=2FpW1ctrDHE'),
(9, 'Nirvana', 'Smells Like Teen Spirit (Cover) by Daniela Andrade', '<iframe width="350" height="200" src="https://www.youtube.com/embed/LkxSU__Bi3w?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=LkxSU__Bi3w');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `order_price` float NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_pic` varchar(255) NOT NULL,
  `product_desc` varchar(450) NOT NULL,
  `product_price` float NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_pic`, `product_desc`, `product_price`, `code`) VALUES
(1, 'INCEPTION (2010)', 'dummy/dvd-1.jpg', 'Leonardo DiCaprio plays a thief who steals corporate secrets from sleeping minds. Now he must be the first to pull off the reverse: planting an idea in exchange for his freedom.', 3.97, 'movie01'),
(2, 'The xx (Coexist)', 'dummy/cd-1.jpg', 'STANDARD EDITION : Sparse 2012 album ... their first in 3 years! Breathless post-punk ''n'' skeletal bass rhythms from the treasured London trio. Includes "Angels". ("CO-EXIST")', 3.79, 'album01'),
(3, 'BioShock -Infinite (Xbox 360)', 'dummy/game-1.jpg', 'Product Description: The year is 1912. Deep in debt, Booker DeWitt has only one opportunity for a clean slate: rescue Elizabeth, a mysterious girl imprisoned since childhood in the flying city of Columbia. Forced to trust one another, they must harness an expanding arsenal of weapons and abilities as they fight to survive the threats of the city and uncover its dark secrets.', 12.47, 'game01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `order_id`) VALUES
(7, '½làíÉ$Â`ëÚR	', '½làíÉ$Â`ëÚR	', '¨?%q¼Â;ý†ÚÑ}ÑòŠÛŽ þ¨V^lô©ÓM', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmusic`
--
ALTER TABLE `addmusic`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `comment1`
--
ALTER TABLE `comment1`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `comment2`
--
ALTER TABLE `comment2`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `comment3`
--
ALTER TABLE `comment3`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `comment4`
--
ALTER TABLE `comment4`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `comment5`
--
ALTER TABLE `comment5`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmusic`
--
ALTER TABLE `addmusic`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `comment1`
--
ALTER TABLE `comment1`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `comment2`
--
ALTER TABLE `comment2`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `comment3`
--
ALTER TABLE `comment3`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `comment4`
--
ALTER TABLE `comment4`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `comment5`
--
ALTER TABLE `comment5`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
