
-- --------------------------------------------------------

--
-- Table structure for table `campcontent`
--

CREATE TABLE `campcontent` (
  `full` varchar(200) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `question` varchar(400) NOT NULL,
  `story` int(240) NOT NULL,
  `passport` int(11) NOT NULL,
  `video` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
