-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 10:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escolar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `escola_id` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `email`, `date`, `user_id`, `sexo`, `escola_id`, `nivel`, `password`) VALUES
(1, 'Jonas', 'Mendes', 'sangiorgiovba@gmail.com', '2021-11-16 13:11:52', 'TITWBDC79o0yLzQk68SdaN4Pi2DAP2XitZ7gBJgSpStQJbRMtSZbrpKTtQBFbIgQQkG8lphlRm2GNR7HNa6aQkomcFmP4ufE1xiMePDWVQLguBitfdHy7H77JjSCGQR6Xkjx2dZ7RWEmUMstsNjLINm7J596QBOBZT1EUmzGdRtHkFl64ow9oGnB2ymA4GjwL1KMSM87AmyFlR49ovHk65PpLD3ZKNMFaE9vHNeV2DLHY2mbdNiDUz1oDjl51zI', 'masculino', '', 'recepicionista', '$2y$10$SqST2xtYUTinG3bh/39jSOFQdar0GJRbaMwt13Od2Tb5prfIoRlbm'),
(2, 'Jonas', 'Mendes', 'sangiorgiovbajj@gmail.com', '2021-11-16 13:16:13', 'lHjzKJqHvesCImJ9b54B618ei84bZ737sPa7Z9Y1vagNOwjsGmjG35WVhel4ItE10qOhtDny14VjKXN34E4H4r7Vk8S6jzl8QJQxVAmRcOMuV1v896ZNHGcDiGwtRuQhSbYGRMFPeAjtJE4VihzxtO3GqViDAs4MgWq4nYogmusCI1kalj2pl76Jzoz4jkAJH719nwduJNIjUO6dOFHtyvqTXZNZQ7z10RWab2VGTPnwLsPgjfjux5t9XTEfykM', 'masculino', '', 'estudante', '$2y$10$.HLYqNdKmoe8FHTo4ZnFeOqI2LWCEee2DC39vqZT6hwzw9HAaOVgW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `sname` (`sname`),
  ADD KEY `date` (`date`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `nivel` (`nivel`),
  ADD KEY `escola_id` (`escola_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
