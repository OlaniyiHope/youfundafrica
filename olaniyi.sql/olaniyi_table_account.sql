
-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_1` varchar(255) NOT NULL,
  `password_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `email`, `password_1`, `password_2`) VALUES
(1, 'Festus Oluwaseyi', 'hope@gmail.com', '8c728e685ddde9f7fbbc452155e29639', ''),
(2, 'horler', 'hhfhfhfhfhfhfhh@gm.com', '8c728e685ddde9f7fbbc452155e29639', ''),
(3, 'Faith', 'aasrsw@gmail.com', '343d9040a671c45832ee5381860e2996', ''),
(4, 'rat', 'rat@gmail.com', 'e756f6aafafdef4debdb5e49bcbd3f11', ''),
(5, 'david', 'david@gmail.com', '172522ec1028ab781d9dfd17eaca4427', ''),
(6, 'city', 'cityofdavid@gmail.com', '4ed5d2eaed1a1fadcc41ad1d58ed603e', ''),
(7, 'und', 'und@gmail.com', 'un', 'un'),
(8, 'Blog blo', 'blo@gmail.com', 'blo', 'blo'),
(9, 'adebisi', 'adebisi@gmail.com', 'ade', 'ade'),
(10, 'daniel', 'danny@gmail.com', 'vin', 'vin'),
(11, 'magic', 'magic@gmail.com', 'magic', 'magic'),
(12, 'Oluwamuyiwa Omole', 'omole.olumuyiwa@gmail.com', 'Executivestark1!', 'Executivestark1!'),
(13, 'Faith Olaniyi', 'adefaith12345@gmail.com', 'heavenly37', 'heavenly37'),
(14, 'Faithhhhhhhhhh', 'Faitho@gmail.com', '90', '90'),
(15, 'pablo', 'why@gmail.com', 'zz', 'zz'),
(16, 'utyurtfuf', 'why@gmail.com', ',,', ',,'),
(17, 'test', 'why@gmail.com', 'test', 'test'),
(18, 'Pass', 'pass@gmail.com', 'pass', 'pass'),
(19, 'funmi', 'adefaith12345@gmail.com', 'fun', 'fun'),
(20, 'muyiwa', 'aeroprimea@gmail.com', '123456', '123456'),
(21, 'Peter', 'peter@gmail.com', 'pet', 'pet'),
(22, 'grkrkl', 'aderonke_adekunle@gmail.com', '11', '11');
