-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2021 at 04:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs3140database2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cID` int(10) UNSIGNED NOT NULL,
  `cpID` int(10) UNSIGNED NOT NULL,
  `ccomment` varchar(255) NOT NULL,
  `cauthor` varchar(30) NOT NULL,
  `cauthemail` varchar(30) NOT NULL,
  `cdateposted` datetime NOT NULL,
  `capproved` char(1) NOT NULL DEFAULT '0',
  `cusername` varchar(15) DEFAULT NULL,
  `crevdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cID`, `cpID`, `ccomment`, `cauthor`, `cauthemail`, `cdateposted`, `capproved`, `cusername`, `crevdate`) VALUES
(11, 2, 'This blog post is boring', 'Adrian Humphrey', 'humphar@bgsu.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(13, 1, 'This blog post is not terrible.', 'Jimbo Mann', 'JMann@gmail.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(14, 1, 'This is an informative blog post, thank you!', 'Jimmy Neutron', 'Jneutron@hotmail.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(15, 1, 'I do not like this post.', 'Matt Cohen', 'MCohen@mkhs.org', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(16, 1, 'This blog post is cool!', 'Adrian Humphrey', 'humphar@bgsu.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(17, 1, 'I like this blog post, it tells me a ton!', 'Adrian Humphrey', 'humphar@bgsu.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(27, 4, 'The image to this one is great!', 'Phil Johnson', 'PJohnson@gmail.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(19, 3, 'How long did it take you to complete this assignment?', 'Adrian Humphrey', 'humphar@bgsu.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(20, 3, 'Far Far too long', 'Jimbo Mann', 'JMann@gmail.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(21, 3, 'HAHA, I can see it took a long time.', 'Jimmy Neutron', 'Jneutron@hotmail.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(22, 2, 'How can you say its boring! This is an interesting read!', 'Merwan Yeditha', 'Myed@olin.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(23, 2, 'I appreciate the feedback!', 'Adrian Humphrey', 'humphar@bgsu.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(24, 3, 'As can I HAHA!', 'Erica Perk', 'EPerk2003@gmail.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(25, 5, 'This post is too long to understand.', 'Jake Nienstadt', 'JNien@yahoo.com', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37'),
(26, 5, 'Oh alright, thanks for the tip!', 'Adrian Humphrey', 'humphar@bgsu.edu', '2021-12-11 01:39:37', '0', 'user', '2021-12-11 01:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pID` int(10) UNSIGNED NOT NULL,
  `pheading` varchar(50) DEFAULT NULL,
  `psubheading` varchar(50) DEFAULT NULL,
  `pcontent` longtext DEFAULT NULL,
  `pkeywords` varchar(20) DEFAULT NULL,
  `pallowcomment` char(1) NOT NULL DEFAULT '1',
  `pyear` varchar(4) NOT NULL DEFAULT '2009',
  `pmonth` varchar(2) NOT NULL DEFAULT '01',
  `pdateposted` datetime NOT NULL,
  `pauthor` varchar(30) NOT NULL DEFAULT 'Default Name',
  `pusername` varchar(15) DEFAULT NULL,
  `prevdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pID`, `pheading`, `psubheading`, `pcontent`, `pkeywords`, `pallowcomment`, `pyear`, `pmonth`, `pdateposted`, `pauthor`, `pusername`, `prevdate`) VALUES
(1, 'Post 1', 'My First Blog Post!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Nunc sed velit dignissim sodales ut eu sem. Eget nunc lobortis mattis aliquam faucibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Mauris in aliquam sem fringilla ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Varius morbi enim nunc faucibus a pellentesque sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Eget nulla facilisi etiam dignissim. Est velit egestas dui id ornare arcu odio ut sem. In aliquam sem fringilla ut morbi. Fermentum leo vel orci porta non pulvinar neque. Lacus laoreet non curabitur gravida arcu ac. Nec dui nunc mattis enim. Mi quis hendrerit dolor magna eget est lorem ipsum.\r\n</br>\r\n</br>\r\nQuis lectus nulla at volutpat diam ut venenatis. Ipsum nunc aliquet bibendum enim. Porta nibh venenatis cras sed felis eget velit. Tempor commodo ullamcorper a lacus vestibulum. Ultricies mi eget mauris pharetra et ultrices. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus sed vulputate odio ut enim blandit volutpat. Porta non pulvinar neque laoreet. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nisi scelerisque eu ultrices vitae auctor. Id donec ultrices tincidunt arcu non sodales neque sodales ut.\r\n</br>\r\n</br>\r\nMolestie at elementum eu facilisis. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Nunc lobortis mattis aliquam faucibus. Et egestas quis ipsum suspendisse ultrices gravida. Diam quam nulla porttitor massa id neque. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Commodo odio aenean sed adipiscing. Vitae justo eget magna fermentum. Morbi non arcu risus quis varius. Blandit libero volutpat sed cras ornare arcu. Mi bibendum neque egestas congue quisque egestas diam. Quam quisque id diam vel. Nisi lacus sed viverra tellus in hac.</p>', NULL, '0', '2021', '01', '2021-12-11 18:33:45', 'Adrian Humphrey', 'admin', '2021-12-11 18:33:45'),
(2, 'Post 2', 'My Second POST!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Nunc sed velit dignissim sodales ut eu sem. Eget nunc lobortis mattis aliquam faucibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Mauris in aliquam sem fringilla ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Varius morbi enim nunc faucibus a pellentesque sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Eget nulla facilisi etiam dignissim. Est velit egestas dui id ornare arcu odio ut sem. In aliquam sem fringilla ut morbi. Fermentum leo vel orci porta non pulvinar neque. Lacus laoreet non curabitur gravida arcu ac. Nec dui nunc mattis enim. Mi quis hendrerit dolor magna eget est lorem ipsum.\r\n</br>\r\n</br>\r\nQuis lectus nulla at volutpat diam ut venenatis. Ipsum nunc aliquet bibendum enim. Porta nibh venenatis cras sed felis eget velit. Tempor commodo ullamcorper a lacus vestibulum. Ultricies mi eget mauris pharetra et ultrices. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus sed vulputate odio ut enim blandit volutpat. Porta non pulvinar neque laoreet. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nisi scelerisque eu ultrices vitae auctor. Id donec ultrices tincidunt arcu non sodales neque sodales ut.\r\n</br>\r\n</br>\r\nMolestie at elementum eu facilisis. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Nunc lobortis mattis aliquam faucibus. Et egestas quis ipsum suspendisse ultrices gravida. Diam quam nulla porttitor massa id neque. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Commodo odio aenean sed adipiscing. Vitae justo eget magna fermentum. Morbi non arcu risus quis varius. Blandit libero volutpat sed cras ornare arcu. Mi bibendum neque egestas congue quisque egestas diam. Quam quisque id diam vel. Nisi lacus sed viverra tellus in hac.</p>', NULL, '0', '2021', '02', '2021-12-11 18:33:45', 'Adrian Humphrey', 'admin', '2021-12-11 18:33:45'),
(3, 'Post 3', 'The Third Post!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Nunc sed velit dignissim sodales ut eu sem. Eget nunc lobortis mattis aliquam faucibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Mauris in aliquam sem fringilla ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Varius morbi enim nunc faucibus a pellentesque sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Eget nulla facilisi etiam dignissim. Est velit egestas dui id ornare arcu odio ut sem. In aliquam sem fringilla ut morbi. Fermentum leo vel orci porta non pulvinar neque. Lacus laoreet non curabitur gravida arcu ac. Nec dui nunc mattis enim. Mi quis hendrerit dolor magna eget est lorem ipsum.\r\n</br>\r\n</br>\r\nQuis lectus nulla at volutpat diam ut venenatis. Ipsum nunc aliquet bibendum enim. Porta nibh venenatis cras sed felis eget velit. Tempor commodo ullamcorper a lacus vestibulum. Ultricies mi eget mauris pharetra et ultrices. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus sed vulputate odio ut enim blandit volutpat. Porta non pulvinar neque laoreet. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nisi scelerisque eu ultrices vitae auctor. Id donec ultrices tincidunt arcu non sodales neque sodales ut.\r\n</br>\r\n</br>\r\nMolestie at elementum eu facilisis. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Nunc lobortis mattis aliquam faucibus. Et egestas quis ipsum suspendisse ultrices gravida. Diam quam nulla porttitor massa id neque. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Commodo odio aenean sed adipiscing. Vitae justo eget magna fermentum. Morbi non arcu risus quis varius. Blandit libero volutpat sed cras ornare arcu. Mi bibendum neque egestas congue quisque egestas diam. Quam quisque id diam vel. Nisi lacus sed viverra tellus in hac.</p>', NULL, '1', '2021', '03', '2021-12-11 18:33:45', 'Adrian Humphrey', 'admin', '2021-12-11 18:33:45'),
(4, 'Post 4', 'My fourth post!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Nunc sed velit dignissim sodales ut eu sem. Eget nunc lobortis mattis aliquam faucibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Mauris in aliquam sem fringilla ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Varius morbi enim nunc faucibus a pellentesque sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Eget nulla facilisi etiam dignissim. Est velit egestas dui id ornare arcu odio ut sem. In aliquam sem fringilla ut morbi. Fermentum leo vel orci porta non pulvinar neque. Lacus laoreet non curabitur gravida arcu ac. Nec dui nunc mattis enim. Mi quis hendrerit dolor magna eget est lorem ipsum.\r\n</br>\r\n</br>\r\nQuis lectus nulla at volutpat diam ut venenatis. Ipsum nunc aliquet bibendum enim. Porta nibh venenatis cras sed felis eget velit. Tempor commodo ullamcorper a lacus vestibulum. Ultricies mi eget mauris pharetra et ultrices. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus sed vulputate odio ut enim blandit volutpat. Porta non pulvinar neque laoreet. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nisi scelerisque eu ultrices vitae auctor. Id donec ultrices tincidunt arcu non sodales neque sodales ut.\r\n</br>\r\n</br>\r\nMolestie at elementum eu facilisis. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Nunc lobortis mattis aliquam faucibus. Et egestas quis ipsum suspendisse ultrices gravida. Diam quam nulla porttitor massa id neque. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Commodo odio aenean sed adipiscing. Vitae justo eget magna fermentum. Morbi non arcu risus quis varius. Blandit libero volutpat sed cras ornare arcu. Mi bibendum neque egestas congue quisque egestas diam. Quam quisque id diam vel. Nisi lacus sed viverra tellus in hac.</p>', NULL, '0', '2021', '04', '2021-12-11 18:33:45', 'Adrian Humphrey', 'admin', '2021-12-11 18:33:45'),
(5, 'Post 5', 'The Fifth Post!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Nunc sed velit dignissim sodales ut eu sem. Eget nunc lobortis mattis aliquam faucibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Mauris in aliquam sem fringilla ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Varius morbi enim nunc faucibus a pellentesque sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Eget nulla facilisi etiam dignissim. Est velit egestas dui id ornare arcu odio ut sem. In aliquam sem fringilla ut morbi. Fermentum leo vel orci porta non pulvinar neque. Lacus laoreet non curabitur gravida arcu ac. Nec dui nunc mattis enim. Mi quis hendrerit dolor magna eget est lorem ipsum.\r\n</br>\r\n</br>\r\nQuis lectus nulla at volutpat diam ut venenatis. Ipsum nunc aliquet bibendum enim. Porta nibh venenatis cras sed felis eget velit. Tempor commodo ullamcorper a lacus vestibulum. Ultricies mi eget mauris pharetra et ultrices. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus sed vulputate odio ut enim blandit volutpat. Porta non pulvinar neque laoreet. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nisi scelerisque eu ultrices vitae auctor. Id donec ultrices tincidunt arcu non sodales neque sodales ut.\r\n</br>\r\n</br>\r\nMolestie at elementum eu facilisis. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Nunc lobortis mattis aliquam faucibus. Et egestas quis ipsum suspendisse ultrices gravida. Diam quam nulla porttitor massa id neque. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Commodo odio aenean sed adipiscing. Vitae justo eget magna fermentum. Morbi non arcu risus quis varius. Blandit libero volutpat sed cras ornare arcu. Mi bibendum neque egestas congue quisque egestas diam. Quam quisque id diam vel. Nisi lacus sed viverra tellus in hac.</p>', NULL, '0', '2021', '05', '2021-12-11 18:33:45', 'Adrian Humphrey', 'admin', '2021-12-11 18:33:45'),
(6, 'Post 6', 'The Sixth!', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci ac auctor augue mauris augue neque. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Nunc sed velit dignissim sodales ut eu sem. Eget nunc lobortis mattis aliquam faucibus. Adipiscing diam donec adipiscing tristique risus nec feugiat in. Mauris in aliquam sem fringilla ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Varius morbi enim nunc faucibus a pellentesque sit amet. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Eget nulla facilisi etiam dignissim. Est velit egestas dui id ornare arcu odio ut sem. In aliquam sem fringilla ut morbi. Fermentum leo vel orci porta non pulvinar neque. Lacus laoreet non curabitur gravida arcu ac. Nec dui nunc mattis enim. Mi quis hendrerit dolor magna eget est lorem ipsum.\r\n</br>\r\n</br>\r\nQuis lectus nulla at volutpat diam ut venenatis. Ipsum nunc aliquet bibendum enim. Porta nibh venenatis cras sed felis eget velit. Tempor commodo ullamcorper a lacus vestibulum. Ultricies mi eget mauris pharetra et ultrices. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Risus sed vulputate odio ut enim blandit volutpat. Porta non pulvinar neque laoreet. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nisi scelerisque eu ultrices vitae auctor. Id donec ultrices tincidunt arcu non sodales neque sodales ut.\r\n</br>\r\n</br>\r\nMolestie at elementum eu facilisis. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Accumsan lacus vel facilisis volutpat est velit egestas dui id. Nunc lobortis mattis aliquam faucibus. Et egestas quis ipsum suspendisse ultrices gravida. Diam quam nulla porttitor massa id neque. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Commodo odio aenean sed adipiscing. Vitae justo eget magna fermentum. Morbi non arcu risus quis varius. Blandit libero volutpat sed cras ornare arcu. Mi bibendum neque egestas congue quisque egestas diam. Quam quisque id diam vel. Nisi lacus sed viverra tellus in hac.</p>', NULL, '0', '2021', '06', '2021-12-11 18:33:45', 'Adrian Humphrey', 'admin', '2021-12-11 18:33:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cID`);
ALTER TABLE `comments` ADD FULLTEXT KEY `ccomment` (`ccomment`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pID`);
ALTER TABLE `posts` ADD FULLTEXT KEY `pheading` (`pheading`,`pkeywords`);
ALTER TABLE `posts` ADD FULLTEXT KEY `pcontent` (`pcontent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
