
--
-- Table structure for table `passport_details`
--

CREATE TABLE `passport_details` (
  `Id` int(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  
  `DOB` date NOT NULL,
  `nation` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Picture` blob,
) 

