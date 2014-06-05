-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2014 at 10:19 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `partnersDB`
--
CREATE DATABASE IF NOT EXISTS `partnersDB` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `partnersDB`;

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

DROP TABLE IF EXISTS `personality`;
CREATE TABLE IF NOT EXISTS `personality` (
  `row_id` int(8) NOT NULL,
  `uid` int(8) NOT NULL,
  `character` int(2) NOT NULL DEFAULT '1',
  `children` int(2) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality`
--

INSERT INTO `personality` (`row_id`, `uid`, `character`, `children`) VALUES
(0, 56, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `questionID` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  PRIMARY KEY (`questionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionID`, `question`) VALUES
(0, 'stdClass Object ( [questionType] => table [questionContent] => 1. Over the last 2 weeks, how often have you been bothered by any of the following: [scale] => daily [childQuestions] => stdClass Object ( [Little interest or pleasure in doing things?] => radio [Feeling down, depressed, or hopeless?] => radio [Trouble falling or staying asleep, or sleeping too much?] => radio [Feeling tired or having little energy?] => radio [Poor appetite or overeating?] => radio [Feeling bad about yourself, or that you are a failure, or have let yourself or your family down?] => radio [Trouble concentrating on things, such as reading the newspaper or watching television?] => radio [Moving or speaking so slowly that other people could have noticed. Or the opposite – being so fidgety or restless that you have been moving around a lot more than usual?] => radio ) )');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `submission_id` varchar(150) NOT NULL,
  `qualified` int(2) NOT NULL,
  `user_ip` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new',
  `declined` int(2) NOT NULL DEFAULT '0',
  `consent` int(2) NOT NULL,
  `userid` int(6) NOT NULL,
  `baseline` int(2) NOT NULL,
  `baseline_completed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `group_condition` int(11) NOT NULL,
  `initial_contact` int(2) NOT NULL DEFAULT '0',
  `decline_notes` text,
  `user_decline_options` varchar(300) NOT NULL,
  `row_id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`submission_id`, `qualified`, `user_ip`, `status`, `declined`, `consent`, `userid`, `baseline`, `baseline_completed`, `group_condition`, `initial_contact`, `decline_notes`, `user_decline_options`, `row_id`) VALUES
('8e51539edb9d43c711d0d37bf8d1f9ac', 1, '127.110.0.1', 'registered', 1, 3, 52, 1, '2014-05-27 17:25:52', 1, 0, NULL, '', 24),
('dbdcfd7c0a1963e492d2f59fedcacb91', 1, '127.0.0.111', 'registered', 0, 1, 53, 1, '2014-05-14 19:49:28', 0, 1, NULL, '', 25),
('a56ce434b3e2b4c9d8a614258d2dc2b8', 1, '127.0.0.11', 'registered', 0, 1, 54, 1, '2014-05-14 20:12:53', 1, 0, NULL, '', 28),
('8183adfc141aebd1b696eb1b59add1c6', 3, '127.0.0.11', 'registered', 0, 1, 55, 0, '2014-05-27 17:10:38', 0, 0, NULL, '', 29),
('1400625422', 1, '1400625422', 'registered', 0, 1, 56, 1, '2014-06-04 07:07:27', 0, 0, NULL, '', 30),
('2e0d92ccdfa727991525b7dabb7060fe', 1, '127.0.0.11', 'new', 0, 0, 0, 0, '2014-05-21 22:16:54', 5, 0, NULL, '', 32),
('61c0e622cc185151ade647add054ba14', 1, '127.0.0.11', 'new', 0, 0, 0, 0, '2014-05-23 17:41:23', 5, 0, NULL, '', 33),
('ced4bed628648feb4f521c6222683351', 1, '127.0.00.1', 'registered', 0, 1, 57, 0, '2014-05-28 18:16:57', 5, 0, ' ', '', 34);

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_sessions`
--

DROP TABLE IF EXISTS `scheduled_sessions`;
CREATE TABLE IF NOT EXISTS `scheduled_sessions` (
  `row_id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(4) NOT NULL,
  `session_number` int(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_completed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` int(2) NOT NULL DEFAULT '0',
  `page_count` int(4) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `scheduled_sessions`
--

INSERT INTO `scheduled_sessions` (`row_id`, `uid`, `session_number`, `date`, `date_completed`, `completed`, `page_count`) VALUES
(11, 55, 0, '2014-05-16 07:00:00', '2014-05-20 07:00:00', 1, 0),
(33, 55, 1, '2014-05-27 19:05:00', '2014-05-31 07:00:00', 1, 15),
(34, 55, 2, '0000-00-00 00:00:00', '2014-06-06 07:00:00', 1, 10),
(35, 55, 3, '0000-00-00 00:00:00', '2014-06-11 07:00:00', 1, 0),
(36, 55, 4, '2014-06-18 19:06:00', '0000-00-00 00:00:00', 1, 0),
(37, 56, 0, '1970-01-01 09:01:00', '2014-05-20 07:00:00', 1, 0),
(38, 56, 1, '2014-05-26 19:05:00', '2014-05-20 23:05:51', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_tasks`
--

DROP TABLE IF EXISTS `scheduled_tasks`;
CREATE TABLE IF NOT EXISTS `scheduled_tasks` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `action` varchar(250) NOT NULL,
  `run_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(300) NOT NULL,
  `completed` int(2) NOT NULL,
  `message` text NOT NULL,
  `path` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scheduled_tasks`
--

INSERT INTO `scheduled_tasks` (`id`, `uid`, `action`, `run_time`, `title`, `completed`, `message`, `path`) VALUES
(1, 37, 'email', '2014-05-16 23:56:38', '', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', ''),
(2, 51, 'email', '2014-05-14 18:38:54', 'Email Reminder', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'gregorysobotka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_types`
--

DROP TABLE IF EXISTS `schedule_types`;
CREATE TABLE IF NOT EXISTS `schedule_types` (
  `id` int(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `action` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session_content`
--

DROP TABLE IF EXISTS `session_content`;
CREATE TABLE IF NOT EXISTS `session_content` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_number` int(2) NOT NULL,
  `page_number` int(4) NOT NULL,
  `audio` varchar(250) NOT NULL,
  `video` int(6) NOT NULL,
  `template` varchar(150) NOT NULL,
  `questions` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `previous` int(4) NOT NULL,
  `next` int(4) NOT NULL,
  `dynamic_model` varchar(250) NOT NULL,
  `form` varchar(300) NOT NULL,
  `required` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `session_content`
--

INSERT INTO `session_content` (`row_id`, `session_number`, `page_number`, `audio`, `video`, `template`, `questions`, `title`, `content`, `previous`, `next`, `dynamic_model`, `form`, `required`) VALUES
(1, 1, 1, '', 1, 'user/sessions/session1/description', '', 'Welcome to Partners Connect', '<ul>\n<li>\nThis type of program has been successful around the world</li>\n<li>Most people that go through this program feel better about themselves </li>\n<li>We’ll help you take care of yourself</li>\n<li>We’ll help you take care of yourself</li>\n<li>This program is confidential</li>\n<li>Click the resources tab for more help</li>\n\n</ul>\n', 0, 2, '', '', 0),
(2, 1, 2, '', 2, 'user/sessions/content_video', '', 'Four sessions', '<ul>\n<li>We ask that you space your sessions about 10 days apart</li>\n<li>We will ask you to practice some of the skills you learn in this program, so if you need more time to practice before your next scheduled session, you can reschedule for a time when you feel ready. </li>\n<li>So, it’s 4 sessions over about 2 hours total</li>\n<li>This type of program has helped many people </li>\n\n</ul>', 1, 3, '', '', 0),
(3, 1, 3, '', 3, 'user/sessions/content_video', '', 'Who do you identify with the most?', '', 2, 4, '', '', 0),
(4, 1, 4, '', 4, 'user/sessions/session1/mygoalspageone', '', 'My goals', '', 3, 5, '', 'user/sessions/session1/forms/mygoalsone', 1),
(5, 1, 5, '', 5, 'user/sessions/session1/mygoalspageone', '', 'My goals', '', 4, 6, '', '', 1),
(6, 1, 6, '', 6, 'user/sessions/session1/mygoalspageone', '', 'My goals', '', 5, 7, '', '', 0),
(7, 1, 7, '', 7, 'user/sessions/content_video', '', 'It’s my time: My personalized feedback', '', 6, 8, '', '', 0),
(8, 1, 8, '', 8, 'user/sessions/content_video', '', 'It’s my time: My personalized feedback', '', 7, 9, '', '', 0),
(9, 1, 9, '', 9, 'user/sessions/content_video', '', 'It’s my time: My goals for myself', '', 8, 10, '', '', 0),
(10, 1, 10, '', 10, 'user/sessions/content_video', '', 'It’s my time: My goals for myself', '', 9, 11, '', '', 0),
(11, 1, 11, '', 11, 'user/sessions/content_video', '', 'It’s my time: My goals for myself', '', 10, 12, '', '', 0),
(12, 1, 12, '', 12, 'user/sessions/content_video', '', 'It’s my time: My goals for myself', '', 11, 13, '', '', 0),
(13, 1, 13, '', 13, 'user/sessions/content_video', '', 'My support person', '', 12, 14, '', '', 0),
(14, 1, 14, '', 14, 'user/sessions/content_video', '', 'My support person', '', 13, 15, '', '', 0),
(15, 1, 15, '', 15, 'user/sessions/content_video', '', 'My support person', '', 14, 16, '', '', 0),
(16, 1, 16, '', 16, 'user/sessions/content_video', '', 'Summary', '', 15, 17, '', '', 0),
(17, 1, 17, '', 17, 'user/sessions/content_video', '', 'Summary and practice card', '', 16, 100, '', '', 0),
(18, 1, 0, '', 0, 'user/sessions/session1/char_select', '', 'Choose your character', '', 0, 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_goals`
--

DROP TABLE IF EXISTS `user_goals`;
CREATE TABLE IF NOT EXISTS `user_goals` (
  `row_id` int(10) NOT NULL,
  `uid` int(7) NOT NULL,
  `goal` text NOT NULL,
  `session` int(2) NOT NULL,
  `section` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_notes`
--

DROP TABLE IF EXISTS `user_notes`;
CREATE TABLE IF NOT EXISTS `user_notes` (
  `row_id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `note_subject` varchar(250) NOT NULL,
  `note_message` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_notes`
--

INSERT INTO `user_notes` (`row_id`, `uid`, `note_subject`, `note_message`, `post_time`) VALUES
(1, 53, 'User note here....', 'USER NOTE!!! ', '2014-05-13 05:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_progress`
--

DROP TABLE IF EXISTS `user_progress`;
CREATE TABLE IF NOT EXISTS `user_progress` (
  `uid` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `completed` int(2) NOT NULL DEFAULT '0',
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user_progress`
--

INSERT INTO `user_progress` (`uid`, `session`, `page`, `completed`, `row_id`) VALUES
(56, 1, 1, 1, 22),
(56, 1, 2, 1, 23),
(56, 1, 3, 1, 24),
(56, 1, 4, 1, 25),
(56, 1, 5, 0, 27),
(56, 1, 0, 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `video_ids`
--

DROP TABLE IF EXISTS `video_ids`;
CREATE TABLE IF NOT EXISTS `video_ids` (
  `row_id` int(6) NOT NULL AUTO_INCREMENT,
  `session_number` int(6) NOT NULL,
  `page_number` int(6) NOT NULL,
  `character` varchar(100) NOT NULL,
  `vimeo_id` varchar(100) NOT NULL,
  `child_vimeo` varchar(250) NOT NULL,
  `video_content` text NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `video_ids`
--

INSERT INTO `video_ids` (`row_id`, `session_number`, `page_number`, `character`, `vimeo_id`, `child_vimeo`, `video_content`) VALUES
(1, 1, 1, '0', '96841811', '', ''),
(4, 1, 2, '1', '96841811', '', ''),
(5, 1, 2, '2', '96841811', '', ''),
(6, 1, 2, '3', '96841811', '', ''),
(7, 1, 3, '1', '96841811', '', '<ul> \n	<li>Since he’s come back from Afghanistan, he’s not the same</li>\n	<li>He drinks until he falls asleep</li>\n	<li>He’s gone through so much, I’m afraid to bring anything up</li>\n</ul>'),
(8, 1, 3, '2', '96841811', '', '<ul> \n	<li>He’s been coming home from work late because he goes out with his friends to drink </li>\n	<li>When I’m waiting for him, I get so angry, it’s like he doesn’t care about me. We argue almost every night when he gets home</li>\n	<li>I feel alone </li>\n</ul>'),
(9, 1, 3, '3', '96841811', '', '<ul> \n	<li>He came back injured</li>\n	<li>Now that he’s home, I have to take care of him, the kids, and it’s a lot now</li>\n	<li>We just don’t connect like we used to, sometimes it feels like I don’t know him anymore</li>\n</ul>'),
(10, 1, 0, '0', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
