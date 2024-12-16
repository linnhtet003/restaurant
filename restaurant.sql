-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2024 at 02:51 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `person` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `person`, `message`) VALUES
(10, 'Emily R', 'emily@gmail.com', 'food', 'The food was absolutely amazing! The flavors were rich and perfectly balanced. I’ll definitely be coming back soon!'),
(11, 'Michael T', 'michael@gmail.com', 'service', 'Fantastic service and a cozy atmosphere. The staff were friendly, and the dishes exceeded my expectations. Highly recommended!'),
(12, 'Sarah L', 'sarah@gmail.com', 'Decoration', 'YamiFood truly delivers on quality and taste. Everything from the appetizers to the dessert was exceptional. A five-star experience!');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

DROP TABLE IF EXISTS `dinner`;
CREATE TABLE IF NOT EXISTS `dinner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id`, `name`, `description`, `price`, `img`) VALUES
(4, 'Filet Mignon', ' With garlic mashed potatoes', '35000', 'Filet Mignon.jpg'),
(5, 'Chicken Alfredo', 'Creamy pasta topped with herbs', '35000', 'Chicken Alfredo.jpg'),
(6, 'Vegetable Stir-fry', 'Fresh veggies in soy glaze', '17000', 'Vegetable Stir-fry.jpg'),
(7, 'Shrimp Scampi', ' Sautéed shrimp with garlic pasta', '35000', 'Shrimp Scampi.jpg'),
(8, 'Beef Stroganoff', 'Tender beef in creamy mushroom sauce', '40000', 'Beef Stroganoff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE IF NOT EXISTS `drinks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `description`, `price`, `img`) VALUES
(9, 'Classic Daiquiri', 'Rum, lime juice, simple syrup; shaken, served chilled', '10000', 'Classic-Daiquiri.jpg'),
(8, 'Old Fashioned', 'Classic cocktail, whiskey', '6000', 'old-fashionded.jpg'),
(7, 'Negroni Cocktail', 'Gin, vermouth, Campari, bitter, classic.', '7000', 'Negroni-Cocktail.jpg'),
(10, 'Martini', 'Gin or vodka, dry vermouth, olive or twist.', '7000', 'Martini.jpg'),
(12, 'Classic Whiskey Sour', 'Whiskey, lemon juice, sugar, bitters, shaken, served chilled.', '12000', 'Classic Whiskey Sour.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

DROP TABLE IF EXISTS `lunch`;
CREATE TABLE IF NOT EXISTS `lunch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `name`, `description`, `price`, `img`) VALUES
(5, 'Margherita Pizza', 'Fresh basil, mozzarella, and tomato sauce', '30000', 'Margherita Pizza.jpg'),
(6, 'Beef Burger with Fries', 'Juicy patty, toppings, and golden fries', '15000', 'Beef Burger with Fries.jpg'),
(7, 'Spaghetti Carbonara', 'Creamy pasta with bacon and Parmesan', '30000', 'spaghetti carbonara.jpg'),
(4, 'Grilled Chicken Caesar Salad', 'Crisp greens, grilled chicken, and creamy dressing', '20000', 'Grilled-Chicken-Caesar-Salad.jpg'),
(8, 'Grilled Salmon with Vegetables', 'Healthy, flavorful, and perfectly cooked', '25000', 'Grilled Salmon with Vegetables.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `person` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `date`, `time`, `person`) VALUES
(2, 'ni ni', 'lhtet4001@gmail.com', '0945614548', '2024-11-23', '16:15:00.000000', 2),
(5, 'Jassicia', 'Jassicia@gmail.com', '0945614548', '2024-12-05', '01:00:00.000000', 6),
(6, 'John', 'john@gmail.com', '024587745', '2024-12-07', '01:20:00.000000', 5),
(7, 'Daniel vebar', 'lhtet445@gmail.com', '024587745', '2024-12-07', '12:00:00.000000', 4),
(8, 'Steve Fonsi', 'linn544@gmail.com', '0945614548', '2024-12-11', '12:30:00.000000', 3),
(10, 'Steve Fonsi', 'linn544@gmail.com', '0945614548', '2024-12-12', '01:30:00.000000', 7),
(11, 'Paul Mitchel', 'paul@gmail.com', '024587745', '2024-12-07', '03:00:00.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`) VALUES
(11, 'Savor the Flavors of Authenticity', 'Delight in a curated menu of authentic dishes made with the freshest ingredients and a dash of love.', 'slider-01.jpg'),
(12, 'Experience Culinary Excellence', 'Discover a world of exquisite flavors and impeccable presentation, crafted to perfection for every palate.', 'slider-02.jpg'),
(13, 'Your Journey to Delicious Begins Here', 'Indulge in a memorable dining experience where passion meets taste, only at YamiFood.', 'slider-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

DROP TABLE IF EXISTS `stuff`;
CREATE TABLE IF NOT EXISTS `stuff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`id`, `name`, `position`, `image`) VALUES
(4, 'Steve Thomas', 'Waiter', 'stuff-img-03.jpg'),
(5, 'Kristiana', ' Assistant Chef', 'stuff-img-02.jpg'),
(6, 'Williamson', 'Chef', 'stuff-img-01.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
