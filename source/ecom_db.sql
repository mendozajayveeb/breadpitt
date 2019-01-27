-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 08:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Classic Favorites'),
(2, 'Specialty Breads'),
(3, 'Doughnuts');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`, `img_path`, `category_id`) VALUES
(21, 'Chocolate Chip Bread Loaf', '128.00', 'Machine-sliced chocolate chip bread loaf.', '../assets/images/cbreadloaf.jpg', 1),
(22, 'Classic Buchi', '65.00', 'Mini buchi bread topped with sesame seeds and onion chives.', '../assets/images/cbuchi.jpg', 1),
(23, 'Fudgee Ensaymada', '139.50', 'Our very own ensaymada topped with peanut butter and sprinkled with ground coffee beans from Thailand.', '../assets/images/censaymada.jpg', 1),
(24, 'Spanish Bread', '69.00', 'Hand-made buttery spanish bread made to perfection.', '../assets/images/cspanish.jpg', 1),
(25, 'Apple Cider Donut', '83.00', 'Sweet apple cider donut with cinnamon.', '../assets/images/dappleciderdn.jpg', 3),
(26, 'Donutella', '87.00', 'Nutella-stuffed classic doughnut.', '../assets/images/ddonutella.jpg', 3),
(27, 'Doughnuthan', '69.00', 'Doughnut made for Jonathan. ', '../assets/images/ddonuthandn.jpg', 3),
(28, 'Creamy Pie', '69.00', 'Special doughnut for your love ones.', '../assets/images/dcreampie.jpg', 3),
(29, 'Ice Cream Doughnuts', '120.00', 'Ice cream inspired doughnuts for your sweet tooth.', '../assets/images/dicecreamdn.jpeg', 3),
(30, 'Princess Doughnut', '320.00', 'Doughnut made for royalties.', '../assets/images/dprincessdn.jpg', 3),
(31, 'Red Velvet', '230.00', 'Blockbuster doughnut made with fresh strawberries and dark chocolate that you should not miss.', '../assets/images/dredvelvet.jpg', 3),
(32, 'Vegan Doughnuts', '65.00', 'Worry no more with our low-calorie doughnut for people who still wants to lose weight and enjoy life at the same time.', '../assets/images/dvegandn.jpg', 3),
(33, 'Brasserie', '380.00', 'Unsweetened recipe bread from France at the lowest price.', '../assets/images/sbrasserie.jpg', 2),
(34, 'Chocolate Wheat Bread', '286.00', 'Special chocolate wheat bread for stronger immunity and caloric surplus.', '../assets/images/schoco.jpg', 2),
(35, 'Olive Bread', '194.75', 'Gluten-free olive bread that is good for the heart.', '../assets/images/solive.jpg', 2),
(36, 'Breadzza', '340.00', 'Bread pizza or pizza bread? You decide.', '../assets/images/spizza.jpg', 2),
(37, 'Pumpkin Bread', '99.95', 'Special pumpkin bread with lutein for good eyesight.', '../assets/images/spumpkin.jpg', 2),
(38, 'Swiss County Bread', '800.00', 'Special swiss county bread from county of swiss topped with nuts, almonds, and hazelnuts. *made to order*', '../assets/images/sswisscountry.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) NOT NULL,
  `payment_mode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `transaction_code`, `purchase_date`, `status_id`, `payment_mode_id`) VALUES
(1, 6, '5DDEFDAB21A1A937-1548469014', '2019-01-25 19:16:54', 3, 1),
(2, 6, 'B1CE65BDB573911C-1548470834', '2019-01-25 19:47:14', 3, 1),
(3, 6, '9ECEE77FABD7686C-1548472415', '2019-01-25 20:13:35', 2, 1),
(4, 6, '683EE89D7EC87337-1548473782', '2019-01-25 20:36:22', 3, 1),
(5, 6, '28B47F0CE0824D00-1548474235', '2019-01-25 20:43:55', 3, 1),
(6, 6, '6B79756395F11893-1548493193', '2019-01-26 01:59:53', 3, 1),
(7, 6, '871F240253D48905-1548563475', '2019-01-26 21:31:15', 3, 1),
(8, 6, 'E148AD6140DF1260-1548571497', '2019-01-26 23:44:57', 2, 1),
(9, 6, '680EDBA4FDC2374A-1548573100', '2019-01-27 00:11:40', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_modes`
--

CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_modes`
--

INSERT INTO `payment_modes` (`id`, `name`) VALUES
(1, 'Cash On Delivery'),
(2, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Completed'),
(3, 'Cancel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`, `roles_id`) VALUES
(1, 'admin', '$2y$10$UD9hp59tqQEsDFvxvNW5CuVtEldMZXjkTJa4DwaTJywYVFF.kwr4O', 'Jayvee', 'Mendoza', 'jebs.btc8@gmail.com', 'Bulacan', 1),
(6, 'user1234321', '$2y$10$4.5ag1NT0pCgktAMELA4ye18fa39q0TTU2ZZ9RIT1yLIOsPCRUNZi', 'Jayvee', 'Mendoza', 'mendozajayveeb@gmail.com', 'Bulacan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `payment_mode_id` (`payment_mode_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `payment_modes`
--
ALTER TABLE `payment_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_modes`
--
ALTER TABLE `payment_modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_mode_id`) REFERENCES `payment_modes` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
