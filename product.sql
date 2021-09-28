-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 10:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `productadd`
--

CREATE TABLE `productadd` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productadd`
--

INSERT INTO `productadd` (`id`, `name`, `text`, `image`, `price`) VALUES
(1, 'ADMIN', 'HELLO WORLD', '', 0),
(31, 'bro Imagine ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/47922912-39af-49e3-ac43-d11aac1ac7ba/air-jordan-1-mid-shoes-scZZ99.png', 0),
(33, 'Nike Air Max ', 'When the road beckons, answer the call in a lightweight pair that\'ll keep you moving mile after mile.', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/7e90a06d-13fa-46d0-8cde-e3f3f0c61363/air-max-pre-day-be-true-shoes-vrnrD7.png', 240),
(35, 'Nike Air Max Motion 2 ', 'The Nike Air Force 1 Shadow puts a playful twist on a classic b-ball design, Using a layered approach.', 'https://static.nike.com/a/images/t_default/249127f3-3b8e-42ae-9c96-b7fb43005a17/air-max-motion-2-mens-shoes-Ctfkrt.png', 299),
(36, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(37, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(38, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(39, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(40, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(41, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(42, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(43, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(44, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(45, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(46, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(47, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(48, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(49, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(50, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(51, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(52, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(53, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(54, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(55, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(56, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(57, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250),
(58, 'Nike Air Max Motion 2 ', 'nike jordans with amazing ooutfit and another cool free stuff, get before other niggas', 'https://static.nike.com/a/images/t_default/z12golttmgjbp3zhxvvq/revolution-5-running-shoe-7TKVTL.png', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productadd`
--
ALTER TABLE `productadd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productadd`
--
ALTER TABLE `productadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
