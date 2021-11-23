
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `rail7`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(15) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_mail` varchar(50) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1 = male, 2 = female',
  `cust_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_address`, `cust_mail`, `cust_phone`, `gender`, `cust_password`) VALUES
(1, 'Hasan', 'Dhaka', 'hasanabrar09@gmail.com', '01521223833', 1, 'hasan');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(15) NOT NULL,
  `category` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `category`, `origin`, `destination`, `number`, `mobile`, `date`) VALUES
(1, 'Tourist', 'Uttara', 'Mirpur', 2, 1521223833, '2021-04-18'),
(2, 'Student', 'Pallabi', 'Uttara', 1, 1841260645, '2021-04-19'),
(3, 'Tourist', 'Uttara', 'Mirpur', 1, 3445454557, '2021-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(15) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `origin`, `destination`, `category`, `availability`, `price`) VALUES
(1, 'Uttara North', 'Uttara Center', 'Tourist', 'Yes', 100),
(2, 'Uttara North', 'Uttara Center', 'Student', 'Yes', 50),
(3, 'Uttara North', 'Uttara Center', 'Business', 'Yes', 110),
(4, 'Uttara North', 'Uttara South', 'Tourist', 'Yes', 150),
(5, 'Uttara North', 'Uttara South', 'Student', 'Yes', 100),
(6, 'Uttara North', 'Uttara South', 'Business', 'Yes', 170),
(7, 'Uttara North', 'Pallabi', 'Tourist', 'Yes', 210),
(8, 'Uttara North', 'Pallabi', 'Student', 'Yes', 180),
(9, 'Uttara North', 'Pallabi', 'Business', 'Yes', 200),
(10, 'Uttara North', 'Mirpur 11', 'Tourist', 'Yes', 260),
(11, 'Uttara North', 'Mirpur 11', 'Student', 'Yes', 180),
(12, 'Uttara North', 'Mirpur 11', 'Business', 'Yes', 210);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_reservation`
--

CREATE TABLE `admins` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_reservation`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ticket_reservation`
--
ALTER TABLE `admins`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

