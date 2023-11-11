-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 03:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `create_at`, `img_url`) VALUES
(13, 'Jsauce', '$2y$10$PSmhdrSjcZw/r9wNtQg/Ku.HCxpeFfIDcObLRyhmJhxt8KO96PdhC', 'jsauce@gmail.com', '2023-11-04 15:39:05', ''),
(14, 'cart', '$2y$10$RK5ksSqSY3K.38axlbqlKOGYqz./r/cCUo0nYKQJnX6l0O99J0aVK', 'carljameslangres@yahoo.com', '2023-11-04 15:40:45', ''),
(15, 'test', '$2y$10$BmyIj9eC2QNpgN5Dzbyuk..aTYggtT9XNR6Ljr7GcMoSAr2BaTp0G', 'testera@gmail.com', '2023-11-04 15:41:37', ''),
(16, 'cart', 'caart', 'cart@gmail.com', '2023-11-04 15:43:11', ''),
(17, 'try', '$2y$10$MdapT.hSnpSy9KXk.40I/ePb5qZPhhej2Pz6qebY.W8cYkKFgMs9i', 'carloyap@gmail.com', '2023-11-04 15:47:27', ''),
(18, 'turks', '$2y$10$vRRUVKeM.l5Wed59tRKX5u6cdpy46cuVooS6c/FiIvijlaEHTZQ3q', 'turks@yahoo.com', '2023-11-04 15:54:47', ''),
(19, 'carlcarl', '$2y$10$P5dHmZXuN9nwHGBTEyTdAel.QmA1/xSN0tjraYxZa.Tj/Jt9ZL49i', 'carlcarl@gmail.com', '2023-11-04 16:07:55', ''),
(20, 'boy', '$2y$10$EYHerML6QsfRgAUYldHzwutdhE4vSgdWkWSyDOkwL7eAKLdluik5O', 'boy@gmail.com', '2023-11-05 14:05:17', 'IMG654d15062f6c49.73685094.jpg'),
(21, 'bad', '$2y$10$coRJCjcJTDMJYj8ENTkNSu2qp4H1I45Ce2Hw/ovDP6FlegFK1ckgK', 'bad@gmail.com', '2023-11-05 14:16:57', ''),
(22, 'boy', '$2y$10$fimh0O8pnt2arMWqeXW0D.lYWW1nQIQCn6TPww94vHhDWAkU9wFCe', 'try@gmail.com', '2023-11-05 15:54:14', ''),
(23, 'freddy', '$2y$10$XYKlAKeclucDfStdMZP0UOfrMLJIP7xOqs2HQEimUVr.LpKek4QOy', 'freddy@gmail.com', '2023-11-05 18:35:42', ''),
(24, 'badboy', '$2y$10$b44rnDqjsiROdx03TXrAlOly08qDcGMfMiC9.xyEJ.I5q/KjYhN.C', 'baddy@gmail.com', '2023-11-05 18:40:41', ''),
(25, 'badboy', '$2y$10$1VdARUkjzTilXYCx6SO5weV2sY4DOfOk/tirE0JUY49k5bJFcpXcm', 'baddy@gmail.com', '2023-11-05 18:41:06', ''),
(26, 'boy', '$2y$10$Ol6tOSCVlrhjprVuAMHs2eZ48DbSmtD7Afcnk4pDrdI5JDS9HFF3m', 'carljameslangres@gmail.com', '2023-11-05 18:41:18', ''),
(27, 'boy', '$2y$10$x6e5Y.eU2GLsoDWgsE1HW.giyFOp8AOY6xwNYP06Mjv1MLMao33Ym', 'carljameslangres@gmail.com', '2023-11-05 18:42:45', ''),
(28, 'carljameslangres', '$2y$10$6PnTLI3sF9HR5GeDOY91E.TNLxBlXm/0.7jDgGXtjAbPFhHylXy8S', 'langrescarljames.pdm@gmail.com', '2023-11-05 18:49:08', ''),
(29, 'micahel', '$2y$10$j8PV2A7Zm1WCqrbb0TEY/.nYeuyy/O0Dyjhz7l.VtyY1U.hQN8wtW', 'michael@gmail.com', '2023-11-05 18:55:00', ''),
(30, 'hopeless', '$2y$10$wDJeK8xNcZA.4DVUQ8xo2OFziP0I6xnvnNKdqvfL0Dz50NJopBDYq', 'hopeless@gmail.com', '2023-11-06 15:54:15', ''),
(37, 'catherine', '$2y$10$3kSnaUD9RVAnpBv8VpA3O.6Bs7QHJQgSlOHsq2m32AEsQp7Faop/m', 'catherine.langres.d@bulsu.edu.ph', '2023-11-07 16:56:00', ''),
(38, 'caritas', '$2y$10$lMiWgeoGhRUHwGUarpi80umf.efmCgGqqMPCtu25TJnN3.pcQG1me', 'caritas@gmail.com', '2023-11-07 16:58:42', ''),
(39, 'joey', '$2y$10$MdCMeeLqmELJHkaNzXj.QuvhJEGcEMvQ/lKPTkq0rpglgrQt5Qyle', 'joeydetiger@gmail.com', '2023-11-07 17:08:54', ''),
(40, 'Arianna', '$2y$10$aX3LU7h8FW5d5A.bhr9TsOwpOpbAjH.eEmLPXFSQnubIKKRUDltJ2', 'arianngrande@gmail.com', '2023-11-08 02:12:17', ''),
(42, 'carlosjamesyap', '$2y$10$hqKCi4IJtxWJx6Gf9e25y.uVHfyh7GCy/1bMMvVnUIryfIZv89Lf.', 'carlosjamesyap@gmail.com', '2023-11-09 20:01:00', 'IMG654cccf10ef6e8.40768154.jpg'),
(43, 'kapitan', '$2y$10$X9GI1ZQaRw927VsuzSykrekk1NsXVOSqs52/c5V6wfH7xBS6nZcWy', 'kapitan@gmail.com', '2023-11-09 20:18:49', 'IMG654cd2a47d30e7.44509201.png'),
(44, 'sirena', '$2y$10$HnaLeWgzUOgk1fnkD7BsP.2HIRu2pETt5OGfMjo6y770UEc/2T4nW', 'sirena@gmail.com', '2023-11-09 20:49:18', ''),
(45, 'tanya', '$2y$10$3YEIhIbPc0ilmYnWFPMrTODJyOK14T0u9K4bElvzW4drNEh8fD.mO', 'tanyamarkova@gmail.com', '2023-11-10 00:38:47', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
