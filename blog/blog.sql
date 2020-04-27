-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 01:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Title` varchar(120) NOT NULL,
  `ShortDesc` text DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `LastModified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ArticleID`, `UserID`, `Title`, `ShortDesc`, `Content`, `CreationDate`, `LastModified`) VALUES
(8, 1, 'Regulatory Affairs Modified', 'This is an interesting article about how the regulatory affairs...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non aliquet nisl, egestas pharetra tortor. Nullam ante risus, suscipit sit amet ligula et, fermentum bibendum lectus. Integer vitae ipsum ultrices, ultrices neque et, mollis libero. Nunc lacus neque, ornare ac convallis eget, facilisis sit amet ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas vel justo vel felis euismod congue. Ut condimentum massa ac nisi consectetur.</p><p>Curabitur luctus a magna vitae sagittis. In eu sem lorem. Aenean mollis vulputate nibh. Phasellus a nulla nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin molestie, odio nec finibus tincidunt, orci lacus pellentesque sem, pharetra consectetur ante magna vel massa. Morbi at odio ac enim pellentesque hendrerit. In ac ligula eget nisl cursus condimentum quis vel libero. Nulla ullamcorper dapibus laoreet. Sed fringilla sed nisi ac finibus. Mauris nec augue sit amet enim tincidunt venenatis. Mauris egestas imperdiet enim, eu convallis quam bibendum id. Phasellus ultrices molestie magna, at venenatis nisl mattis ut. Suspendisse convallis, erat et volutpat gravida, lectus diam fermentum mi, quis mollis sem ipsum eget nulla. Nam sed molestie orci.</p><p>Nulla magna risus, tincidunt vitae mattis mattis, convallis ut urna. Ut tempus, justo ut luctus luctus, ligula tellus tincidunt nisl, eget ultrices eros risus sit amet enim. Aenean varius felis sit amet dictum luctus. Maecenas nec ligula maximus, volutpat dolor a, iaculis eros. Praesent accumsan quis purus sodales varius. Ut vestibulum tincidunt sapien, id sodales ante porta eget. Etiam scelerisque egestas odio sed vulputate. Duis fringilla nisl sed risus auctor, a scelerisque ligula dignissim. Ut pretium, magna at fermentum pretium, ex sapien ornare mi, sit amet bibendum nisi nisl et sem. Pellentesque vel molestie nulla.&nbsp;</p>', '2020-01-24 00:17:48', '2020-01-24 01:17:48'),
(9, 1, 'New Rules in Hospitals Regarding Smoking', 'There were some regulations, from 2020 employees in the healthcare are not allowed to take smoking breaks.', '<p>Nulla magna risus, tincidunt vitae mattis mattis, convallis ut urna. Ut tempus, justo ut luctus luctus, ligula tellus tincidunt nisl, eget ultrices eros risus sit amet enim. Aenean varius felis sit amet dictum luctus. Maecenas nec ligula maximus, volutpat dolor a, iaculis eros. Praesent accumsan quis purus sodales varius.&nbsp;</p><p>Ut vestibulum tincidunt sapien, id sodales ante porta eget. Etiam scelerisque egestas odio sed vulputate. Duis fringilla nisl sed risus auctor, a scelerisque ligula dignissim. Ut pretium, magna at fermentum pretium, ex sapien ornare mi, sit amet bibendum nisi nisl et sem. Pellentesque vel molestie nulla. Curabitur dictum quam et sollicitudin vulputate. Aliquam dictum cursus mattis. Vivamus risus urna, porttitor ac eros in, accumsan bibendum lacus.</p><p>In a dictum erat. Nam fringilla, sapien eget tempor lobortis, dolor arcu gravida dui, eu feugiat velit justo nec felis. Ut nunc velit, pharetra nec iaculis nec, pharetra eu justo. Nulla sit amet sem fringilla, sodales nunc in, mattis elit. Nam posuere nisi odio, ac interdum nisi aliquet eu. Donec imperdiet viverra dignissim. Sed eget efficitur velit, vitae faucibus risus. In finibus nulla a pretium condimentum. Nam id porttitor dui. Integer varius ex enim, vitae auctor nisi sodales sed. Pellentesque mi arcu, viverra tincidunt placerat in, semper id tortor. Ut euismod consectetur imperdiet. Nunc a nisl viverra, sollicitudin nibh at, vulputate quam.</p><p>Aliquam maximus commodo commodo. Phasellus at est pharetra, bibendum quam ut, auctor est.&nbsp;</p><p>Donec fermentum mauris enim, eget commodo est varius non. Curabitur et elit vel dolor hendrerit facilisis nec et enim. Pellentesque orci leo, sodales at rhoncus non, vehicula in orci. Phasellus tristique pellentesque neque, quis molestie eros egestas eget.</p><p>&nbsp;Mauris lectus lorem, tincidunt sit amet elementum sed, feugiat vitae ante.</p>', '2020-01-24 00:20:48', '2020-01-24 01:25:30'),
(10, 1, 'This is Another Medical Related Article', 'It is impossible to avoid reading these interesting articles on this fantastic blog', '<p>Eget, facilisis sit amet ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas vel justo vel felis euismod congue. Ut condimentum massa ac nisi consectetur, quis imperdiet velit sollicitudin. Integer sit amet sagittis urna, nec vehicula dolor. Duis id nisi fringilla, porttitor tortor sed, pharetra nunc. Vestibulum semper posuere ex, ut aliquet leo. Quisque commodo neque quis erat tincidunt commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam iaculis sit amet eros vel consequat. Nunc eget diam nisl. Nam nibh lacus, commodo ac pulvinar eu, ultrices et purus.</p><p>Curabitur luctus a magna vitae sagittis. In eu sem lorem. Aenean mollis vulputate nibh. Phasellus a nulla nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin molestie, odio nec finibus tincidunt, orci lacus pellentesque sem, pharetra consectetur ante magna vel massa. Morbi at odio ac enim pellentesque hendrerit. In ac ligula eget nisl cursus condimentum quis vel libero. Nulla ullamcorper dapibus laoreet. Sed fringilla sed nisi ac finibus. Mauris nec augue sit amet enim tincidunt venenatis. Mauris egestas imperdiet enim, eu convallis quam bibendum id. Phasellus ultrices molestie magna, at venenatis nisl mattis ut. Suspendisse convallis, erat et volutpat gravida, lectus diam fermentum mi, quis mollis sem ipsum eget nulla. Nam sed molestie orci.</p>', '2020-01-24 00:28:09', '2020-01-24 01:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ArticleID` int(11) NOT NULL,
  `CommentText` text DEFAULT NULL,
  `CommentDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `UserID`, `ArticleID`, `CommentText`, `CommentDate`) VALUES
(7, 1, 9, 'See, I can comment on this article! How interesting. ', '2020-01-24 00:22:38'),
(8, 1, 9, 'However, unfortunately, I can not reply to myself.', '2020-01-24 00:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserID` int(11) NOT NULL,
  `RegType` tinyint(4) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(128) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserID`, `RegType`, `UserName`, `Email`, `Pass`, `RegDate`) VALUES
(1, 1, 'admin', 'admin@admin.hu', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86', '2020-01-14 16:23:42'),
(2, 0, 'user1', 'user1@gmail.com', 'f272bde3a05d1e2beacff0852af0935518c8e5977ac79413fa89d169c461f6b5d60eeefd6b128470c36c14e4f5a1cf192d01f93caa01dcb55ce6fedf8008173c', '2020-01-21 16:43:04'),
(3, 0, 'user1', 'user1@gmail.com', 'f272bde3a05d1e2beacff0852af0935518c8e5977ac79413fa89d169c461f6b5d60eeefd6b128470c36c14e4f5a1cf192d01f93caa01dcb55ce6fedf8008173c', '2020-01-21 16:43:24'),
(4, 0, 'user2', 'use2@gmail.com', '552dc2e616c351e1a6ffaadb32dbacbaaeeb8359a9f6ec33668e9265997c8aa8fa8b501c6759b989742bf0b4e566ecf2079f9359d3224ecef116ce42c4ec07ad', '2020-01-21 16:54:47'),
(5, 0, 'malacka', 'malacka@gmail.com', 'f08e054b453db492ca112571cfe61d7b6fb57380123d77306ffa323a51ee877e213e679fc85bd0ee1796a020c9ba7eeb6cd630f589d5f690e787663f02d3238d', '2020-01-22 20:14:35'),
(6, 0, 'alma', 'alma@gmail.com', '9780e59ea6fbef09eb08c7c8dd6ef42044d11780edeb9bb2c7a5a3385aaf6a94744ca23961b911f209c81043fa32cda860dd9d2e295b68270541f7275e82e70f', '2020-01-22 23:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `ProfileID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Position` varchar(100) DEFAULT NULL,
  `LastModified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`ProfileID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `ProfileID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `login` (`UserID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `login` (`UserID`);

--
-- Constraints for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD CONSTRAINT `userprofile_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `login` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
