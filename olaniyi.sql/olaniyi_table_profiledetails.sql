
-- --------------------------------------------------------

--
-- Table structure for table `profiledetails`
--

CREATE TABLE `profiledetails` (
  `Id` int(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `biography` varchar(255) NOT NULL,
  `blogurl` varchar(255) NOT NULL,
  `socialmediaaccount` varchar(255) NOT NULL,
  `address_2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiledetails`
--

INSERT INTO `profiledetails` (`Id`, `country`, `state`, `city`, `address_1`, `biography`, `blogurl`, `socialmediaaccount`, `address_2`) VALUES
(1, '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', ''),
(25, '', '', '', '', '', '', '', ''),
(26, 'Algeria', 'Algeria', 'rt', 'f', 'f', 'f', 'f', 'j'),
(27, 'Nigeria', 'Nigeria', 'Ibadan', '11, Odukoya Street, Felele', 'me', 'h', 'h', 'h'),
(28, 'Nigeria', 'Nigeria', 'Ibadan', '11, Odukoya Street, Felele', 'me', '11, Odukoya Street, Felele, Behind Former Pinnacle Plaza', 'gg', 'Behind Former Pinnacle Plaza'),
(29, 'Nigeria', 'Nigeria', 'ibadan', 'adegbayi close', '', 'self.co', 'live.com/roi', 'twitter.com/roi');
