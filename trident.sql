-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 06:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trident`
--

-- --------------------------------------------------------

--
-- Table structure for table `complete_projects`
--

CREATE TABLE `complete_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `locations` varchar(255) NOT NULL,
  `land_size` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complete_projects`
--

INSERT INTO `complete_projects` (`id`, `project_name`, `locations`, `land_size`, `images`, `created_at`) VALUES
(61, '1th ', 'Ratmalana', '#', '[\"../completes/678f9b2825558_uploadbox.webp\"]', '2025-01-21 13:03:36'),
(62, '2th', 'Ratmalana', '#', '[\"../completes/678f9b4039fb0_projects.webp\",\"../completes/678f9b403a307_uploadbox.webp\",\"../completes/678f9b403a4c3_vision.webp\",\"../completes/678f9b403a689_y1.webp\",\"../completes/678f9b403a890_y2.webp\",\"../completes/678f9b403aa2b_y3.webp\",\"../completes/678f9b403abe2_y4.webp\"]', '2025-01-21 13:04:00'),
(63, '3tha', 'colombo', '#', '[\"../completes/678f9b6045664_678a1f3b2112d_WhatsApp Image 2025-01-03 at 12.36.32 PM (2).webp\",\"../completes/678f9b6045a65_678a1f3b21339_WhatsApp Image 2025-01-03 at 12.36.32 PM (3).webp\",\"../completes/678f9b6045be9_678a1f3b21523_WhatsApp Image 2025-01-03 at 12.36.33 PM.webp\",\"../completes/678f9b6045d09_678f73850fc71_page3s2.webp\"]', '2025-01-21 13:04:32'),
(64, '4th project', 'kiribathgoida', '34', '[\"../completes/678f9b919ac99_678a1ec3ea3ff_WhatsApp Image 2025-01-03 at 12.36.36 PM (2).webp\",\"../completes/678f9b919ae52_678a1ec3ea059_WhatsApp Image 2025-01-03 at 12.36.36 PM (1).webp\",\"../completes/678f9b919b057_678a1ec3ea96c_WhatsApp Image 2025-01-03 at 12.36.36 PM.webp\",\"../completes/678f9b919b1ba_678a1ec3eafee_WhatsApp Image 2025-01-03 at 12.36.37 PM.webp\"]', '2025-01-21 13:05:21'),
(65, '9th ', 'kandy', '67', '[\"../completes/678f9ba7bbf28_678a1ef61b92d_WhatsApp Image 2025-01-03 at 2.44.34 PM.webp\",\"../completes/678f9ba7bc320_678a1ef61b663_WhatsApp Image 2025-01-03 at 2.44.34 PM (1).webp\",\"../completes/678f9ba7bc5ed_678a1f0e47b97_WhatsApp Image 2025-01-03 at 12.36.40 PM.webp\",\"../completes/678f9ba7bc802_678a1f0e4822a_WhatsApp Image 2025-01-03 at 12.36.41 PM (2).webp\",\"../completes/678f9ba7bc9c9_678a1f0e47578_WhatsApp Image 2025-01-03 at 12.36.40 PM (1).webp\",\"../completes/678f9ba7bcdba_678a1f3b21523_WhatsApp Image 2025-01-03 at 12.36.33 PM.webp\",\"../completes/678f9ba7bcf95_678f73850fc71_page3s2.webp\"]', '2025-01-21 13:05:43'),
(66, '10th', 'weliweriya', '78', '[\"../completes/678f9bd0a06de_678a1f0e47b97_WhatsApp Image 2025-01-03 at 12.36.40 PM.webp\",\"../completes/678f9bd0a0c71_678a1f0e4822a_WhatsApp Image 2025-01-03 at 12.36.41 PM (2).webp\"]', '2025-01-21 13:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_projects`
--

CREATE TABLE `upcoming_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `locations` varchar(255) NOT NULL,
  `land_size` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_projects`
--

INSERT INTO `upcoming_projects` (`id`, `project_name`, `locations`, `land_size`, `images`, `created_at`) VALUES
(13, 'project one', 'weliweriya', '78', '[\"../upcomings/678fcca5e62dd_678fcc94cf7b6_678f73850fc71_page3s2.webp\"]', '2025-01-21 16:34:45'),
(14, 'project two', 'weliweriya', '78', '[\"../upcomings/678fccc52bc50_678a1ef61b663_WhatsApp Image 2025-01-03 at 2.44.34 PM (1).webp\",\"../upcomings/678fccc52bebd_678a1f0e47b97_WhatsApp Image 2025-01-03 at 12.36.40 PM.webp\",\"../upcomings/678fccc52c07b_678a1f0e4822a_WhatsApp Image 2025-01-03 at 12.36.41 PM (2).webp\",\"../upcomings/678fccc52c2f1_678a1f0e47578_WhatsApp Image 2025-01-03 at 12.36.40 PM (1).webp\",\"../upcomings/678fccc52c466_678f73850fc71_page3s2.webp\",\"../upcomings/678fccc52c720_678fcc94cf7b6_678f73850fc71_page3s2.webp\",\"../upcomings/678fccc52c89f_678fcca5e62dd_678fcc94cf7b6_678f73850fc71_page3s2.webp\"]', '2025-01-21 16:35:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complete_projects`
--
ALTER TABLE `complete_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complete_projects`
--
ALTER TABLE `complete_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
