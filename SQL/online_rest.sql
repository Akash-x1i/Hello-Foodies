-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 09:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `code`, `date` ) VALUES
('admin1', '0192023a7bbd73250516f069df18b500', 'admin1@gmail.com', '', '2024-04-07 02:40:28'),
('admin2', '0192023a7bbd73250516f069df18b500', 'admin2@gmail.com', '', '2024-04-07 02:40:28'),
('admin3', '0192023a7bbd73250516f069df18b500', 'admin3@gmail.com', '', '2024-04-07 02:40:28'),
('admin4', '0192023a7bbd73250516f069df18b500', 'admin4@gmail.com', '', '2024-04-07 02:40:28')
;

-- --------------------------------------------------------

--
-- Table structure for table `masterAdmin`
--

CREATE TABLE `masterAdmin` (
  `adm_id` int(222) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterAdmin`
--

INSERT INTO `masterAdmin` (`username`, `password`, `email`, `code`, `date`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', '', '2024-04-07 02:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 'Paneer Saag', 'Cottage cheese cooked with fresh ground spinach, onion, garlic and indian herbs.', '390.00', '606d72f3cb12f.jpg'),
(1, 'Chicken Achari', 'Dahi, achar, tomatoes, mustard oil, fennel seeds', '250.00', '606d73302ece2.jpg'),
(1, 'Murgh Tikka Biryani', 'Chicken Tikka Biryani Recipe is the famous Indian delicacy of Punjabi Cuisine. Boneless Chicken is marinated in spicy mix of Yogurt and Spices.', '470.00', '606d73771366a.jpg'),
(1, 'Murgh Zafrani Kabab', 'Murgh Zafrani Kabab. A plateful of succulent pieces of meat, straight out of tandoor, is tough to resist.', '380.00', '606d73d2d37f4.jpg'),
(2, 'Pink Spaghetti Gamberoni', 'Spaghetti pasta, grilled shrimps, parmesan cheese, with our homemade pink sauce,', '380.00', '606d7491a9d13.jpg'),
(2, 'Cheesy Mashed Potato', 'Covered with mozzarella cheese.', '250.00', '606d74c416da5.jpg'),
(2, 'Crispy Chicken Strips', 'Fried chicken strips, served with special honey mustard sauce.', '460.00', '606d74f6ecbbb.jpg'),
(2, 'Lemon Grilled Chicken And Pasta', 'Marinated rosemary grilled chicken breast served with mashed potatoes and your choice of pasta.', '380.00', '606d752a209c3.jpg'),
(3, 'Vegetable Fried Rice', 'Chinese rice wok with cabbage, beans, carrots, and spring onions.', '350.00', '606d7575798fb.jpg'),
(3, 'Prawn Crackers', '12 pieces deep-fried prawn crackers', '120.00', '606d75a7e21ec.jpg'),
(3, 'Spring Rolls', 'Lightly seasoned shredded cabbage, onion and carrots, wrapped in house made spring roll wrappers, deep fried to golden brown.', '470.00', '606d75ce105d0.jpg'),
(3, 'Manchurian Chicken', 'Chicken pieces slow cooked with spring onions in our house made manchurian style sauce.', '500.00', '606d7600dc54c.jpg'),
(4, ' Buffalo Wings', 'Fried chicken wings tossed in spicy Buffalo sauce served with crisp celery sticks and Blue cheese dip.', '450.00', '606d765f69a19.jpg'),
(4, 'Mac N Cheese Bites', 'Served with our traditional spicy queso and marinara sauce.', '350.00', '606d768a1b2a1.jpg'),
(4, 'Signature Potato Twisters', 'Spiral sliced potatoes, topped with our traditional spicy queso, Monterey Jack cheese, pico de gallo, sour cream and fresh cilantro.', '320.00', '606d76ad0c0cb.jpg'),
(4, 'Meatballs Penne Pasta', 'Garlic-herb beef meatballs tossed in our house-made marinara sauce and penne pasta topped with fresh parsley.', '470.00', '606d76eedbb99.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `adm_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `adm_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(1, 1, 1, 'Gazebo', 'gazebo@gmail.com', '4312533432', 'www.gazebo.com', '12pm', '12am', 'Mon-Sat', 'Borivali', '606d71a81ec5d.jpg', '2021-04-07 09:18:19'),
(2, 2, 2, 'Eataly', 'eataly@gmail.com', '0557426406', 'www.eataly.com', '11am', '9pm', 'Mon-Sat', 'Goregaon', '606d720b5fc71.jpg', '2021-04-07 08:49:15'),
(3, 3, 3, 'Mainland China', 'mainland@china.com', '4326538776', 'www.mainlandchina.com', '8am', '9pm', 'Mon-Fri', 'Malad', '606d72653306f.jpg', '2021-04-07 08:50:45'),
(4, 4, 4, 'TGI Fridays', 'tgi@gmail.com', '2342353325', 'www.tgif.com', '9am', '9pm', 'Mon-Sat', 'Lower Parel', '606d72a49503a.jpg', '2021-04-07 08:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Indian', '2021-04-07 08:45:20'),
(2, 'Italian', '2021-04-07 08:45:23'),
(3, 'Chinese', '2021-04-07 08:45:25'),
(4, 'American', '2021-04-07 08:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
('SAL', 'Salman', 'Ansari', 'salman@gmail.com', '1324325445', 'a32de55ffd7a9c4101a0c5c8788b38ed', 'Mira Road', 1, '2021-04-07 08:43:49'),
('PAR', 'Parth', 'Desai', 'parth@gmail.com', '4325345332', 'bc28715006af20d0e961afd053a984d9', 'Vasai', 1, '2021-04-07 08:44:35'),
('HIT', 'Hitesh', 'Gosavi', 'hitesh@gmail.com', '4325345332', '58b2318af54435138065ee13dd8bea16', 'Malad', 1, '2021-04-07 08:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `u_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for Dish Category
--

CREATE TABLE dish_cat (
  dcat_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `d_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  category VARCHAR(50) NOT NULL
  -- FOREIGN KEY (d_id) REFERENCES dishes(d_id),
  -- FOREIGN KEY (c_id) REFERENCES res_category(c_id)
) ENGINE=InnoDB;



-- --------------------------------------------------------



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
