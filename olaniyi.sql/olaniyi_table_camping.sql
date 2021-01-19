
-- --------------------------------------------------------

--
-- Table structure for table `camping`
--

CREATE TABLE `camping` (
  `id` int(20) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `question` varchar(220) NOT NULL,
  `story` varchar(230) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `video` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
