
-- --------------------------------------------------------

--
-- Table structure for table `campbasic`
--

CREATE TABLE `campbasic` (
  `id` int(20) NOT NULL,
  `tag` varchar(130) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `category` varchar(120) NOT NULL,
  `location` varchar(230) NOT NULL,
  `tagline` varchar(100) NOT NULL,
  `imageupload` varchar(30) NOT NULL,
  `whatcampaign` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campbasic`
--

INSERT INTO `campbasic` (`id`, `tag`, `duration`, `category`, `location`, `tagline`, `imageupload`, `whatcampaign`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, 'mn', 'kjn', 'nc', 'nbv', 'hg', 'lkkn@gmail.com', 'vgfh'),
(5, 'tasg', '56', 'Executivestark1!', '@ibadan', 'me', 'aeroprimea@gmail.com', 'me'),
(6, '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '');
