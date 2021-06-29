
--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  
  `accno` bigint(30) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `acc_type` varchar(30) NOT NULL,
  `balance` int(30) NOT NULL
);