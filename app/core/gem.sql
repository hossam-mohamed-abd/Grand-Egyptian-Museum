-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2025 at 01:40 PM
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
-- Database: `gem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `base_price` decimal(10,2) DEFAULT NULL,
  `type` enum('event','plan','kids','learn') NOT NULL,
  `item_id` int(11) NOT NULL,
  `tickets_adult` int(11) DEFAULT 0,
  `tickets_child` int(11) DEFAULT 0,
  `tickets_student` int(11) DEFAULT 0,
  `total_tickets` int(11) DEFAULT 0,
  `date_selected` date DEFAULT NULL,
  `time_selected` varchar(50) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `promo_code_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `full_name`, `email`, `phone`, `notes`, `base_price`, `type`, `item_id`, `tickets_adult`, `tickets_child`, `tickets_student`, `total_tickets`, `date_selected`, `time_selected`, `total_price`, `promo_code_id`, `created_at`) VALUES
(14, 6, 'Hossam Mohamed', 'hossam545mohamed@gmail.com', '01015981677', '', 450.00, 'plan', 1, 1, 1, 0, 2, NULL, NULL, 630.00, NULL, '2025-12-14 18:09:38'),
(15, 6, 'Hossam Mohamed', 'hossam545mohamed@gmail.com', '01015981677', '', 450.00, 'plan', 1, 1, 1, 0, 2, NULL, NULL, 630.00, NULL, '2025-12-14 18:09:38'),
(16, 9, 'test', 'test@test.com', '12345678', '', 650.00, 'plan', 2, 7, 5, 4, 16, NULL, NULL, 7670.00, NULL, '2025-12-16 07:24:18'),
(17, 9, 'test', 'test@test.com', '12345678', '', 650.00, 'plan', 2, 7, 5, 4, 16, NULL, NULL, 7670.00, NULL, '2025-12-16 07:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `created_at`) VALUES
(1, 'Akhenaten', 'https://discoveringegypt.com/wp-content/uploads/2014/06/akenaten1a.jpg', '2025-12-12 11:19:49'),
(2, 'Amenhotep III and Tiy', 'https://egymonuments.gov.eg/media/4794/tye3.jpg', '2025-12-12 11:19:49'),
(3, 'Bent Pyramid of Seneferu', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXvXZcBqIJYFJQVQQ2eymJOdn-dJUODZBStA&s', '2025-12-12 11:19:49'),
(4, 'Bust of Ramesses II', 'https://upload.wikimedia.org/wikipedia/commons/7/7e/BM%2C_AES_Egyptian_Sulpture_~_Colossal_bust_of_Ramesses_II%2C_the_%27Younger_Memnon%27_%281250_BC%29_%28Room_4%29.jpg', '2025-12-12 11:19:49'),
(5, 'Colossal Statue of Ramesses II', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1tGRpAoliFB1uXjxgw_1JuTtT3MMyQ008Ww&s', '2025-12-12 11:19:49'),
(6, 'Colossi of Memnon', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiFtSRucXXwxMdEIC8ViB6YfVc2xe33UDmnQ&s', '2025-12-12 11:19:49'),
(7, 'Goddess Isis with her child', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDxtCnMB8HLAb-SWKBvCDNbkjmF5yiFhWrHw&s', '2025-12-12 11:19:49'),
(8, 'Hatshepsut', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF-sbJcVnCeNLvo-xNAF1qvTSc1jz6DIDkZQ&s', '2025-12-12 11:19:49'),
(9, 'Hatshepsut face', 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Seated_Statue_of_Hatshepsut_MET_Hatshepsut2012.jpg', '2025-12-12 11:19:49'),
(10, 'Khafre Pyramid', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpqHhk4sVacZn4jcwjy-oh-nX6ZfiRcmHwsw&s', '2025-12-12 11:19:49'),
(11, 'Mask of Tutankhamun', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ4OmHrpGFc2A2tg4woPTfPz73GW_JfjDk7Q&s', '2025-12-12 11:19:49'),
(12, 'Menkau­re Pyramid', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCOKKlyWZ_8MHEhD1rEFkBL5cc4I-mJhCs4A&s', '2025-12-12 11:19:49'),
(13, 'Nefertiti', 'https://cdn.britannica.com/18/110218-050-14BAD112/Nefertiti-limestone-bust-New-Museum-Berlin-1350-bce.jpg?w=400&h=300&c=crop', '2025-12-12 11:19:49'),
(14, 'Pyramid of Djoser', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5GOGaUmbIQVpbFUgih8D9uKdgljCK6lv-IQ&s', '2025-12-12 11:19:49'),
(15, 'Ramesseum', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNu4-j9Kco73AdAJOnPiEHTtP3hQIgy-wXag&s', '2025-12-12 11:19:49'),
(16, 'Ramses II Red Granite Statue', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0Pe9e2e_qwCGtxKDgd5llVyhA9DzFKf2FuA&s', '2025-12-12 11:19:49'),
(17, 'Sphinx', 'https://www.marcmaison.com/maisonpedia/sphinx/_01_pedia.jpg', '2025-12-12 11:19:49'),
(18, 'Statue of King Zoser', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR_5rFxr9pCPMEDJHSqDdF-njlDmsVKAXIwA&s', '2025-12-12 11:19:49'),
(19, 'Statue of Tutankhamun with Ankhesenamun', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5LdUTVzDfDxjTFZ3Rl0OaYC3ZZZqvekb4Bw&s', '2025-12-12 11:19:49'),
(20, 'Temple of Isis in Philae', 'https://d3rr2gvhjw0wwy.cloudfront.net/uploads/mandators/49581/file-manager/egypt-philae-temple.jpg', '2025-12-12 11:19:49'),
(21, 'Temple of Kom Ombo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvOxzTlk4CpV-IDtU7a3cqIxMGrOTF3NbOfQ&s', '2025-12-12 11:19:49'),
(22, 'The Great Temple of Ramesses II', 'https://lp-cms-production.imgix.net/2023-07/shutterstockRF236409301.jpg?w=1920&h=640&fit=crop&crop=faces%2Cedges&auto=format&q=75', '2025-12-12 11:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `full_details` text DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `description`, `image`, `category`, `category_id`, `period`, `full_details`, `video_url`, `created_at`) VALUES
(8, 'Nefertiti – The Icon of Beauty\n', 'A timeless masterpiece representing beauty, elegance, and royal power in Ancient Egypt.', '/GEM_mvc/public/uploads/collections/1 (17).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:05:38'),
(9, 'Amenhotep III & Queen Tiye – Royal Power\n', 'Majestic statues reflecting the strength, prosperity, and royal authority of Ancient Egypt.', '/GEM_mvc/public/uploads/collections/1 (16).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:05:38'),
(10, 'Luxor Temple – Eternal Grandeur\n', 'Monumental statues showcasing the architectural grandeur and spiritual legacy of ancient temples.', '/GEM_mvc/public/uploads/collections/1 (3).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:05:38'),
(11, 'Collection Item 4', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (4).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:05:38'),
(12, 'Collection Item 5', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (5).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:05:38'),
(13, 'Collection Item 6', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (6).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(14, 'Collection Item 7', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (7).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(15, 'Collection Item 8', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (8).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(16, 'Collection Item 9', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (9).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(17, 'Collection Item 10', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (10).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(18, 'Collection Item 11', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (11).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(19, 'Collection Item 12', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (12).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(20, 'Collection Item 13', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (13).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(21, 'Collection Item 14', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (2).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(22, 'Collection Item 15', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (15).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(23, 'Collection Item 16', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (14).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(24, 'Collection Item 17', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (1).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(25, 'Collection Item 18', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (18).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(26, 'Collection Item 19', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (19).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(27, 'Collection Item 20', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (20).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(28, 'Collection Item 21', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (21).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56'),
(29, 'Collection Item 22', 'Auto imported item', '/GEM_mvc/public/uploads/collections/1 (22).jpeg', NULL, NULL, NULL, NULL, NULL, '2025-12-12 22:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `message` text DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `user_id`, `name`, `email`, `amount`, `message`, `payment_method`, `currency`, `created_at`) VALUES
(22, NULL, 'Hossam Mohamed', 'hossam545mohamed@gmail.com', 32323.00, 'ggggg', 'mobile', 'EGP', '2025-12-13 19:19:40'),
(23, NULL, 'Hossam Mohamed', 'hossam545mohamed@gmail.com', 2323.00, 'wqwq', 'instapay', 'EGP', '2025-12-13 19:20:32'),
(24, NULL, 'abdalrahman', 'abdalrahman@gmail.com', 10000.00, 'true', 'mobile', 'EGP', '2025-12-14 11:11:05'),
(25, NULL, 'abdalrahman', 'hossam545mohamed@gmail.com', 100.00, 'thanks', 'mobile', 'EGP', '2025-12-14 18:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `full_details` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `full_details`, `date`, `time`, `location`, `image`, `price`, `created_at`) VALUES
(1, 'Golden Pharaohs Exhibition', 'Discover rare artifacts from Egypt’s greatest kings.', 'This exhibition showcases golden treasures, ceremonial artifacts, and historical secrets from the 18th dynasty.', '2025-03-14', '10:00', 'Grand Egyptian Museum – Main Exhibition Hall', 'https://imonkey-blog.imgix.net/blog/wp-content/uploads/2015/12/23052256/shutterstock_242036125.jpg', 350.00, '2025-12-11 18:01:07'),
(2, 'Ancient Art Workshop', 'Join art experts to recreate legendary Pharaonic artworks.', 'Hands-on creative workshop exploring ancient techniques with guided experts.', '2025-04-22', '12:00', 'Grand Egyptian Museum – Creative Lab', 'https://powertraveller.com/wp-content/uploads/2024/07/1_ancient-art-workshop-fresco..jpg', 220.00, '2025-12-11 18:01:07'),
(3, 'The Secrets of the Pyramids', 'Exclusive lecture revealing untold stories of the pyramids.', 'Lecture and Q&A session with historians discussing pyramid construction and discoveries.', '2025-05-30', '15:00', 'Grand Egyptian Museum – Lecture Hall', 'assets/image/events.png', 180.00, '2025-12-11 18:01:07'),
(4, 'Museum Night Tour', 'After-hours tour of dimly lit galleries and statues.', 'Limited capacity evening tour featuring light installations, audio storytelling, and balcony views of the Grand Staircase.', '2025-06-18', '19:30', 'Grand Egyptian Museum – Night Route', 'assets/image/events.png', 260.00, '2025-12-11 18:01:07'),
(5, 'Hieroglyphics Crash Course', 'Learn to read and write your name in hieroglyphics.', 'Interactive workshop with take-home calligraphy kit and certificate.', '2025-07-12', '11:00', 'Education Center Studio 2', 'https://cdn.britannica.com/88/124388-050-EFAFCE59/Hieroglyphs-temple-Ombos-Egypt.jpg', 195.00, '2025-12-11 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`id`, `name`, `image`, `created_at`, `slug`, `description`) VALUES
(5, 'Pizza', 'uploads/categories/Pizza.jpg', '2025-12-14 13:47:54', 'pizza', 'Authentic Italian pizzas baked fresh daily.'),
(6, 'Burger', 'uploads/categories/Burger.jpg', '2025-12-14 13:47:54', 'burger', 'Juicy burgers made with premium beef.'),
(7, 'Pasta', 'uploads/categories/Pasta.jpg', '2025-12-14 13:47:54', 'pasta', 'Classic pasta dishes inspired by Italy.'),
(8, 'Sandwiches', 'uploads/categories/Sandwiches.jpg', '2025-12-14 13:47:54', 'sandwiches', 'Freshly prepared sandwiches.'),
(9, 'Grilled Meals', 'uploads/categories/Grilled Meals.jpg', '2025-12-14 13:47:54', 'grilled-meals', 'Grilled chicken and meat selections.'),
(10, 'Seafood', 'uploads/categories/Seafood.jpg', '2025-12-14 13:47:54', 'seafood', 'Fresh seafood prepared daily.'),
(11, 'Egyptian Cuisine', 'uploads/categories/Egyptian Cuisine.jpg', '2025-12-14 13:47:54', 'egyptian-cuisine', 'Traditional Egyptian dishes.'),
(12, 'Oriental Food', 'uploads/categories/Oriental Food.jpg', '2025-12-14 13:47:54', 'oriental-food', 'Middle Eastern specialties.'),
(13, 'International Cuisine', 'uploads/categories/International Cuisine.jpg', '2025-12-14 13:47:54', 'international-cuisine', 'Flavors from around the world.'),
(14, 'Salads', 'uploads/categories/Salads.jpg', '2025-12-14 13:47:54', 'salads', 'Healthy and fresh salad options.'),
(15, 'Vegetarian', 'uploads/categories/Vegetarian.jpg', '2025-12-14 13:47:54', 'vegetarian', 'Delicious vegetarian meals.'),
(16, 'Vegan', 'uploads/categories/Vegan.jpg', '2025-12-14 13:47:54', 'vegan', 'Plant-based dishes.'),
(17, 'Kids Meals', 'uploads/categories/Kids Meals.jpg', '2025-12-14 13:47:54', 'kids-meals', 'Special meals for children.'),
(18, 'Desserts', 'uploads/categories/Desserts.jpg', '2025-12-14 13:47:54', 'desserts', 'Sweet desserts and cakes.'),
(19, 'Ice Cream', 'uploads/categories/Ice Cream.jpg', '2025-12-14 13:47:54', 'ice-cream', 'Ice cream and frozen treats.'),
(20, 'Bakery', 'uploads/categories/Bakery.jpg', '2025-12-14 13:47:54', 'bakery', 'Fresh baked goods.'),
(21, 'Hot Drinks', 'uploads/categories/Hot Drinks.jpg', '2025-12-14 13:47:54', 'hot-drinks', 'Coffee and hot beverages.'),
(22, 'Cold Drinks', 'uploads/categories/Cold Drinks.jpg', '2025-12-14 13:47:54', 'cold-drinks', 'Refreshing cold beverages.'),
(23, 'Fresh Juices', 'uploads/categories/Fresh Juices.jpg', '2025-12-14 13:47:54', 'fresh-juices', 'Natural fresh juices.'),
(24, 'Smoothies', 'uploads/categories/Smoothies.jpg', '2025-12-14 13:47:54', 'smoothies', 'Healthy fruit smoothies.'),
(25, 'Breakfast', 'uploads/categories/Breakfast.jpg', '2025-12-14 13:47:54', 'breakfast', 'Morning breakfast meals.'),
(26, 'Brunch', 'uploads/categories/Brunch.jpg', '2025-12-14 13:47:54', 'brunch', 'Late morning brunch dishes.'),
(27, 'Fast Food', 'uploads/categories/Fast Food.jpg', '2025-12-14 13:47:54', 'fast-food', 'Quick and tasty fast food.'),
(28, 'Healthy Food', 'uploads/categories/Healthy Food.jpg', '2025-12-14 13:47:54', 'healthy-food', 'Nutritious and balanced meals.'),
(29, 'Street Food', 'uploads/categories/Street Food.jpg', '2025-12-14 13:47:54', 'street-food', 'Popular street food flavors.'),
(30, 'Asian Food', 'uploads/categories/Asian Food\n.jpg', '2025-12-14 13:47:54', 'asian-food', 'Asian cuisine specialties.'),
(31, 'Italian Food', 'uploads/categories/Italian Food.jpeg', '2025-12-14 13:47:54', 'italian-food', 'Classic Italian cuisine.'),
(32, 'French Cuisine', 'uploads/categories/French Cuisine.jpg', '2025-12-14 13:47:54', 'french-cuisine', 'Elegant French dishes.'),
(33, 'Mexican Food', 'uploads/categories/Mexican Food.jpg', '2025-12-14 13:47:54', 'mexican-food', 'Spicy Mexican flavors.'),
(34, 'Arabic Sweets', 'uploads/categories/Arabic Sweets.jpg', '2025-12-14 13:47:54', 'arabic-sweets', 'Traditional Arabic desserts.'),
(35, 'Coffee & Pastries', 'uploads/categories/Coffee & Pastries.jpg', '2025-12-14 13:47:54', 'coffee-pastries', 'Coffee paired with pastries.');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`id`, `restaurant_id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`) VALUES
(7, 1, 5, 'Margherita Pizza', 'Classic Italian pizza with tomato sauce and mozzarella.', 120.00, 'https://images.unsplash.com/photo-1548365328-9bdbd8c1f6f3', '2025-12-14 13:57:00'),
(8, 1, 6, 'Classic Beef Burger', 'Grilled beef patty with lettuce and cheese.', 110.00, 'uploads/food-items/burger/Classic Beef Burger.jpg', '2025-12-14 13:57:00'),
(9, 1, 8, 'Club Sandwich', 'Triple-layer sandwich with chicken and vegetables.', 95.00, 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af', '2025-12-14 13:57:00'),
(10, 2, 11, 'Koshary', 'Traditional Egyptian dish with rice, lentils, and pasta.', 60.00, 'https://images.unsplash.com/photo-1541516160071-7c2c8e3e6b95', '2025-12-14 13:57:00'),
(11, 2, 11, 'Molokhia with Chicken', 'Egyptian molokhia soup served with rice.', 130.00, 'https://images.unsplash.com/photo-1625944527732-4cfa6c2e6d7f', '2025-12-14 13:57:00'),
(12, 2, 9, 'Grilled Kofta', 'Spiced minced meat grilled to perfection.', 160.00, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', '2025-12-14 13:57:00'),
(13, 3, 7, 'Creamy Alfredo Pasta', 'Pasta tossed in creamy alfredo sauce.', 125.00, 'https://images.unsplash.com/photo-1525755662778-989d0524087e', '2025-12-14 13:57:00'),
(14, 3, 10, 'Grilled Salmon', 'Fresh salmon fillet served with lemon sauce.', 220.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 13:57:00'),
(15, 1, 6, 'Cheese Burger Deluxe', 'Beef burger with double cheese and sauce.', 140.00, 'uploads/food-items/burger/Cheese Burger Deluxe.jpg', '2025-12-14 13:57:00'),
(16, 4, 5, 'Margherita Pizza', 'Classic tomato sauce and mozzarella.', 120.00, 'https://images.unsplash.com/photo-1548365328-9bdbd8c1f6f3', '2025-12-14 14:15:45'),
(17, 4, 5, 'Pepperoni Pizza', 'Pepperoni with melted cheese.', 150.00, 'https://images.unsplash.com/photo-1601924928581-4cc06c7c9a19', '2025-12-14 14:15:45'),
(18, 4, 5, 'Four Cheese Pizza', 'Mozzarella, parmesan, gorgonzola, ricotta.', 165.00, 'https://images.unsplash.com/photo-1541745537411-b8046dc6d66c', '2025-12-14 14:15:45'),
(19, 4, 5, 'Vegetarian Pizza', 'Loaded with fresh vegetables.', 135.00, 'https://images.unsplash.com/photo-1594007654729-407eedc4be45', '2025-12-14 14:15:45'),
(20, 4, 5, 'Chicken BBQ Pizza', 'BBQ sauce with grilled chicken.', 170.00, 'https://images.unsplash.com/photo-1604382354936-07c5d9983bd3', '2025-12-14 14:15:45'),
(21, 4, 5, 'Mushroom Pizza', 'Fresh mushrooms and cheese.', 130.00, 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38', '2025-12-14 14:15:45'),
(22, 4, 5, 'Spicy Pizza', 'Chili sauce and jalapeños.', 145.00, 'https://images.unsplash.com/photo-1601924582975-7e1b1c8d8c3f', '2025-12-14 14:15:45'),
(23, 4, 5, 'Seafood Pizza', 'Shrimp and calamari topping.', 190.00, 'https://images.unsplash.com/photo-1544986581-efac024faf62', '2025-12-14 14:15:45'),
(24, 4, 5, 'Truffle Pizza', 'Premium truffle oil.', 220.00, 'https://images.unsplash.com/photo-1573821663912-6df460f9c684', '2025-12-14 14:15:45'),
(25, 4, 5, 'Italian Classic Pizza', 'Traditional Italian recipe.', 160.00, 'https://images.unsplash.com/photo-1513104890138-7c749659a591', '2025-12-14 14:15:45'),
(27, 5, 6, 'Cheese Burger', 'Double cheese delight.', 125.00, 'uploads/food-items/burger/Cheese Burger.jpg', '2025-12-14 14:16:26'),
(28, 5, 6, 'Chicken Burger', 'Grilled chicken breast.', 105.00, 'uploads/food-items/burger/Chicken Burger.jpg', '2025-12-14 14:16:26'),
(29, 2, 6, 'BBQ Burger', 'Smoky BBQ sauce.', 135.00, 'uploads/food-items/burger/BBQ Burger.jpg', '2025-12-14 14:16:26'),
(30, 5, 6, 'Mushroom Burger', 'Burger with sautéed mushrooms.', 130.00, 'uploads/food-items/burger/Mushroom Burger.jpg', '2025-12-14 14:16:26'),
(31, 2, 6, 'Spicy Burger', 'Hot sauce and jalapeños.', 120.00, 'uploads/food-items/burger/Spicy Burger.jpg', '2025-12-14 14:16:26'),
(32, 5, 6, 'Double Beef Burger', 'Two beef patties.', 160.00, 'uploads/food-items/burger/Double Beef Burger.jpg', '2025-12-14 14:16:26'),
(33, 5, 6, 'Smash Burger', 'Crispy smashed beef.', 145.00, 'uploads/food-items/burger/Smash Burger.jpg', '2025-12-14 14:16:26'),
(34, 2, 6, 'Truffle Burger', 'Premium truffle sauce.', 190.00, 'uploads/food-items/burger/Truffle Burger.jpg', '2025-12-14 14:16:26'),
(35, 13, 6, 'Kids Mini Burger', 'Small burger for kids.', 75.00, 'uploads/food-items/burger/Kids Mini Burger.jpg', '2025-12-14 14:16:26'),
(36, 5, 6, 'Classic Beef Burger', 'Beef patty with cheese.', 110.00, 'uploads/food-items/burger/Classic Beef Burger.jpg', '2025-12-14 14:17:23'),
(39, 5, 6, 'BBQ Burger', 'Smoky BBQ sauce.', 135.00, 'uploads/food-items/burger/BBQ Burger.jpg', '2025-12-14 14:17:23'),
(41, 5, 6, 'Spicy Burger', 'Hot sauce and jalapeños.', 120.00, 'uploads/food-items/burger/Spicy Burger.jpg', '2025-12-14 14:17:23'),
(44, 5, 6, 'Truffle Burger', 'Premium truffle sauce.', 190.00, 'uploads/food-items/burger/Truffle Burger.jpg', '2025-12-14 14:17:23'),
(47, 1, 8, 'Turkey Sandwich', 'Smoked turkey slices.', 90.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:17:23'),
(48, 1, 8, 'Tuna Sandwich', 'Tuna with mayonnaise.', 85.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:17:23'),
(49, 1, 8, 'Grilled Cheese Sandwich', 'Melted cheese.', 75.00, 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af', '2025-12-14 14:17:23'),
(50, 1, 8, 'Chicken Panini', 'Grilled panini sandwich.', 100.00, 'https://images.unsplash.com/photo-1617196034183-421b4917c92d', '2025-12-14 14:17:23'),
(51, 1, 8, 'Beef Sandwich', 'Grilled beef slices.', 110.00, 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1', '2025-12-14 14:17:23'),
(52, 1, 8, 'Vegetarian Sandwich', 'Fresh vegetables.', 80.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:17:23'),
(53, 1, 8, 'Egg Sandwich', 'Boiled eggs and sauce.', 70.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:17:23'),
(54, 1, 8, 'Falafel Sandwich', 'Egyptian falafel.', 65.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:17:23'),
(55, 1, 8, 'Breakfast Sandwich', 'Egg & cheese.', 85.00, 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1', '2025-12-14 14:17:23'),
(56, 2, 9, 'Grilled Chicken', 'Charcoal grilled chicken.', 150.00, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', '2025-12-14 14:17:24'),
(58, 2, 9, 'Grilled Steak', 'Premium beef steak.', 240.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:17:24'),
(59, 2, 9, 'Mixed Grill', 'Chicken, kofta, kebab.', 280.00, 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1', '2025-12-14 14:17:24'),
(60, 2, 9, 'Grilled Lamb Chops', 'Juicy lamb chops.', 260.00, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', '2025-12-14 14:17:24'),
(61, 2, 9, 'Grilled Turkey', 'Herb-marinated turkey.', 170.00, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', '2025-12-14 14:17:24'),
(62, 2, 9, 'Grilled Sausages', 'Spicy sausages.', 140.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:17:24'),
(63, 2, 9, 'BBQ Ribs', 'Slow-cooked ribs.', 230.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:17:24'),
(64, 2, 9, 'Grilled Fish', 'Seasoned whole fish.', 190.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:24'),
(65, 2, 9, 'Grilled Chicken Breast', 'Healthy grilled option.', 145.00, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', '2025-12-14 14:17:24'),
(66, 6, 10, 'Grilled Salmon', 'Fresh salmon fillet.', 220.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:55'),
(67, 6, 10, 'Fried Shrimp', 'Crispy shrimp.', 180.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:17:55'),
(68, 6, 10, 'Seafood Platter', 'Mixed seafood.', 320.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:55'),
(69, 6, 10, 'Calamari', 'Fried calamari.', 160.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:17:55'),
(70, 6, 10, 'Grilled Sea Bass', 'Mediterranean style.', 210.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:55'),
(71, 6, 10, 'Shrimp Pasta', 'Shrimp with pasta.', 190.00, 'https://images.unsplash.com/photo-1525755662778-989d0524087e', '2025-12-14 14:17:55'),
(72, 6, 10, 'Fish & Chips', 'Classic fried fish.', 170.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:17:55'),
(73, 6, 10, 'Seafood Soup', 'Rich seafood broth.', 140.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:55'),
(74, 6, 10, 'Grilled Octopus', 'Charcoal grilled.', 260.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:55'),
(75, 6, 10, 'Shrimp Skewers', 'Grilled shrimp skewers.', 200.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:17:55'),
(77, 2, 11, 'Molokhia Chicken', 'Traditional molokhia with rice.', 140.00, 'https://images.unsplash.com/photo-1625944527732-4cfa6c2e6d7f', '2025-12-14 14:19:21'),
(78, 2, 11, 'Mahshi', 'Stuffed vegetables with rice.', 120.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(79, 2, 11, 'Fatta', 'Rice, bread and meat with garlic sauce.', 160.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(80, 2, 11, 'Grilled Kofta', 'Egyptian spiced kofta.', 155.00, 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', '2025-12-14 14:19:21'),
(81, 2, 11, 'Kebab Halla', 'Slow cooked beef.', 190.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:19:21'),
(82, 2, 11, 'Chicken Shawarma', 'Egyptian style shawarma.', 110.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(83, 2, 11, 'Hawawshi', 'Spiced minced meat bread.', 90.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(84, 2, 11, 'Fried Liver', 'Alexandrian liver sandwich.', 85.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(85, 2, 11, 'Baladi Breakfast', 'Foul, falafel and eggs.', 70.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(86, 7, 12, 'Chicken Shawarma Plate', 'Middle Eastern shawarma.', 130.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(87, 7, 12, 'Meat Shawarma Plate', 'Beef shawarma.', 150.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(88, 7, 12, 'Falafel Plate', 'Crispy falafel.', 70.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(89, 7, 12, 'Hummus', 'Classic hummus.', 60.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(90, 7, 12, 'Mutabbal', 'Eggplant dip.', 65.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(91, 7, 12, 'Mixed Mezze', 'Oriental appetizers.', 140.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(92, 7, 12, 'Kebab Plate', 'Grilled kebab.', 180.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:19:21'),
(93, 7, 12, 'Arabic Rice', 'Spiced rice.', 80.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(94, 7, 12, 'Stuffed Grape Leaves', 'Warak Enab.', 95.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(95, 7, 12, 'Chicken Mandi', 'Arabian rice & chicken.', 190.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(96, 3, 13, 'Beef Stroganoff', 'Russian beef dish.', 210.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:19:21'),
(97, 3, 13, 'Chicken Tikka Masala', 'Indian classic.', 180.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(98, 3, 13, 'Sushi Rolls', 'Japanese sushi.', 240.00, 'https://images.unsplash.com/photo-1553621042-f6e147245754', '2025-12-14 14:19:21'),
(99, 3, 13, 'Pad Thai', 'Thai noodles.', 170.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(100, 3, 13, 'Fish Tacos', 'Mexican tacos.', 160.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(101, 3, 13, 'Paella', 'Spanish rice dish.', 260.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:19:21'),
(102, 3, 13, 'Lasagna', 'Italian baked pasta.', 190.00, 'https://images.unsplash.com/photo-1617196034183-421b4917c92d', '2025-12-14 14:19:21'),
(103, 3, 13, 'Beef Ramen', 'Japanese noodles.', 200.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(104, 3, 13, 'Chicken Curry', 'Asian curry.', 160.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(105, 3, 13, 'Grilled Sausages', 'European sausages.', 150.00, 'https://images.unsplash.com/photo-1544025162-d76694265947', '2025-12-14 14:19:21'),
(106, 9, 14, 'Greek Salad', 'Fresh veggies and feta.', 85.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(107, 9, 14, 'Caesar Salad', 'Chicken and parmesan.', 110.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(108, 9, 14, 'Tuna Salad', 'Tuna and greens.', 95.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(109, 9, 14, 'Quinoa Salad', 'Healthy grains.', 120.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(110, 9, 14, 'Avocado Salad', 'Fresh avocado.', 130.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(111, 9, 14, 'Chicken Salad', 'Grilled chicken.', 115.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(112, 9, 14, 'Pasta Salad', 'Cold pasta salad.', 100.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(113, 9, 14, 'Shrimp Salad', 'Seafood salad.', 145.00, 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', '2025-12-14 14:19:21'),
(114, 9, 14, 'Fruit Salad', 'Mixed fruits.', 75.00, 'https://images.unsplash.com/photo-1490645935967-10de6ba17061', '2025-12-14 14:19:21'),
(115, 9, 14, 'Green Salad', 'Light fresh salad.', 70.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', '2025-12-14 14:19:21'),
(116, 9, 15, 'Vegetable Lasagna', 'Vegetarian lasagna.', 150.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(117, 9, 15, 'Veggie Burger', 'Plant based burger.', 120.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(118, 9, 15, 'Stuffed Peppers', 'Rice & veggies.', 130.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(119, 9, 15, 'Vegetable Stir Fry', 'Asian vegetables.', 115.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(120, 9, 15, 'Falafel Plate', 'Classic falafel.', 90.00, 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', '2025-12-14 14:19:21'),
(121, 9, 15, 'Vegetarian Pasta', 'Tomato basil pasta.', 125.00, 'https://images.unsplash.com/photo-1525755662778-989d0524087e', '2025-12-14 14:19:21'),
(122, 9, 15, 'Vegetable Soup', 'Healthy soup.', 85.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(123, 9, 15, 'Grilled Veggies', 'Charcoal grilled.', 110.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21'),
(124, 9, 15, 'Cheese Omelette', 'Vegetarian breakfast.', 95.00, 'https://images.unsplash.com/photo-1506084868230-bb9d95c24759', '2025-12-14 14:19:21'),
(125, 9, 15, 'Mushroom Risotto', 'Italian risotto.', 145.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe', '2025-12-14 14:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `food_likes`
--

CREATE TABLE `food_likes` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_likes`
--

INSERT INTO `food_likes` (`id`, `food_id`, `user_id`) VALUES
(23, 7, 1),
(24, 7, 2),
(25, 8, 1),
(156, 8, 2),
(29, 9, 1),
(158, 9, 2),
(26, 9, 3),
(42, 10, 1),
(27, 10, 2),
(285, 10, 4),
(28, 11, 1),
(43, 12, 1),
(163, 12, 2),
(223, 12, 3),
(67, 13, 1),
(68, 14, 1),
(175, 14, 2),
(30, 15, 1),
(219, 15, 3),
(282, 15, 4),
(79, 16, 1),
(181, 16, 2),
(80, 17, 1),
(81, 18, 1),
(182, 18, 2),
(234, 18, 3),
(82, 19, 1),
(83, 20, 1),
(183, 20, 2),
(292, 20, 4),
(84, 21, 1),
(235, 21, 3),
(85, 22, 1),
(184, 22, 2),
(86, 23, 1),
(87, 24, 1),
(185, 24, 2),
(236, 24, 3),
(88, 25, 1),
(293, 25, 4),
(89, 27, 1),
(237, 27, 3),
(90, 28, 1),
(186, 28, 2),
(44, 29, 1),
(91, 30, 1),
(187, 30, 2),
(238, 30, 3),
(294, 30, 4),
(45, 31, 1),
(92, 32, 1),
(188, 32, 2),
(242, 32, 3),
(93, 33, 1),
(239, 33, 3),
(46, 34, 1),
(164, 34, 2),
(143, 35, 1),
(256, 35, 3),
(304, 35, 4),
(94, 36, 1),
(189, 36, 2),
(240, 36, 3),
(97, 39, 1),
(241, 39, 3),
(99, 41, 1),
(102, 44, 1),
(193, 44, 2),
(33, 47, 1),
(34, 48, 1),
(159, 48, 2),
(220, 48, 3),
(35, 49, 1),
(160, 50, 2),
(283, 50, 4),
(37, 51, 1),
(221, 51, 3),
(38, 52, 1),
(161, 52, 2),
(39, 53, 1),
(40, 54, 1),
(162, 54, 2),
(222, 54, 3),
(41, 55, 1),
(284, 55, 4),
(47, 56, 1),
(165, 56, 2),
(49, 58, 1),
(166, 58, 2),
(50, 59, 1),
(51, 60, 1),
(167, 60, 2),
(225, 60, 3),
(286, 60, 4),
(52, 61, 1),
(53, 62, 1),
(168, 62, 2),
(54, 63, 1),
(226, 63, 3),
(55, 64, 1),
(169, 64, 2),
(56, 65, 1),
(287, 65, 4),
(103, 66, 1),
(194, 66, 2),
(243, 66, 3),
(104, 67, 1),
(105, 68, 1),
(195, 68, 2),
(106, 69, 1),
(244, 69, 3),
(107, 70, 1),
(196, 70, 2),
(296, 70, 4),
(108, 71, 1),
(109, 72, 1),
(197, 72, 2),
(245, 72, 3),
(110, 73, 1),
(111, 74, 1),
(198, 74, 2),
(112, 75, 1),
(246, 75, 3),
(297, 75, 4),
(58, 77, 1),
(59, 78, 1),
(171, 78, 2),
(227, 78, 3),
(60, 79, 1),
(61, 80, 1),
(172, 80, 2),
(288, 80, 4),
(62, 81, 1),
(228, 81, 3),
(63, 82, 1),
(173, 82, 2),
(64, 83, 1),
(65, 84, 1),
(174, 84, 2),
(229, 84, 3),
(66, 85, 1),
(289, 85, 4),
(113, 86, 1),
(199, 86, 2),
(114, 87, 1),
(247, 87, 3),
(115, 88, 1),
(200, 88, 2),
(116, 89, 1),
(117, 90, 1),
(201, 90, 2),
(248, 90, 3),
(298, 90, 4),
(118, 91, 1),
(119, 92, 1),
(202, 92, 2),
(120, 93, 1),
(249, 93, 3),
(121, 94, 1),
(203, 94, 2),
(122, 95, 1),
(299, 95, 4),
(69, 96, 1),
(176, 96, 2),
(230, 96, 3),
(70, 97, 1),
(71, 98, 1),
(177, 98, 2),
(72, 99, 1),
(231, 99, 3),
(73, 100, 1),
(178, 100, 2),
(290, 100, 4),
(74, 101, 1),
(75, 102, 1),
(179, 102, 2),
(232, 102, 3),
(76, 103, 1),
(77, 104, 1),
(180, 104, 2),
(78, 105, 1),
(233, 105, 3),
(291, 105, 4),
(123, 106, 1),
(204, 106, 2),
(124, 107, 1),
(125, 108, 1),
(205, 108, 2),
(250, 108, 3),
(126, 109, 1),
(127, 110, 1),
(206, 110, 2),
(300, 110, 4),
(128, 111, 1),
(251, 111, 3),
(129, 112, 1),
(207, 112, 2),
(130, 113, 1),
(131, 114, 1),
(208, 114, 2),
(252, 114, 3),
(132, 115, 1),
(301, 115, 4),
(133, 116, 1),
(209, 116, 2),
(134, 117, 1),
(253, 117, 3),
(135, 118, 1),
(210, 118, 2),
(136, 119, 1),
(137, 120, 1),
(211, 120, 2),
(254, 120, 3),
(302, 120, 4),
(138, 121, 1),
(139, 122, 1),
(212, 122, 2),
(140, 123, 1),
(255, 123, 3),
(141, 124, 1),
(213, 124, 2),
(142, 125, 1),
(303, 125, 4);

-- --------------------------------------------------------

--
-- Table structure for table `food_reviews`
--

CREATE TABLE `food_reviews` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ;

--
-- Dumping data for table `food_reviews`
--

INSERT INTO `food_reviews` (`id`, `food_id`, `user_id`, `rating`, `comment`, `created_at`) VALUES
(15, 7, 1, 5, 'Excellent taste and very fresh ingredients.', '2025-12-14 14:00:25'),
(16, 8, 2, 4, 'Really good, but could use more sauce.', '2025-12-14 14:00:25'),
(17, 9, 3, 5, 'Authentic flavor, reminded me of traditional cuisine.', '2025-12-14 14:00:25'),
(18, 10, 1, 4, 'Well cooked and nicely presented.', '2025-12-14 14:00:25'),
(19, 11, 2, 5, 'One of the best dishes I tried here.', '2025-12-14 14:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `kids_games`
--

CREATE TABLE `kids_games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` enum('memory','guess','maze','puzzle') NOT NULL,
  `difficulty` enum('easy','medium','hard') NOT NULL DEFAULT 'medium',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kids_games`
--

INSERT INTO `kids_games` (`id`, `title`, `description`, `image`, `type`, `difficulty`, `created_at`) VALUES
(1, 'Memory Game', 'Match ancient Egyptian symbols and test your memory skills!', 'https://h5p.org/sites/default/files/styles/medium-logo/public/logos/memory-game-icon.png?itok=bIQqHE7Y', 'memory', 'medium', '2025-12-11 18:01:07'),
(2, 'Guess the Artifact', 'Identify hidden artifacts and learn fun historical facts.', 'https://cdn-icons-png.flaticon.com/512/5930/5930147.png', 'guess', 'easy', '2025-12-11 18:01:07'),
(3, 'Kids Museum Tour', 'A guided trip designed for kids to explore treasures in a fun way.', 'https://resilienteducator.com/wp-content/uploads/2020/09/childrens-museum-educator-2.jpg', 'puzzle', 'easy', '2025-12-11 18:01:07'),
(4, 'Maze of the Sphinx', 'Navigate the maze to help the Sphinx find its missing crown.', 'https://cdn-icons-png.flaticon.com/512/8920/8920636.png', 'maze', 'hard', '2025-12-11 18:01:07'),
(5, 'Hieroglyph Puzzle', 'Arrange hieroglyph tiles to unlock the temple door.', 'https://cdn-icons-png.flaticon.com/512/9855/9855619.png', 'puzzle', 'medium', '2025-12-11 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `kids_game_assets`
--

CREATE TABLE `kids_game_assets` (
  `id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `asset_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kids_game_assets`
--

INSERT INTO `kids_game_assets` (`id`, `game_id`, `asset_url`) VALUES
(1, 1, 'https://h5p.org/sites/default/files/styles/medium-logo/public/logos/memory-game-icon.png?itok=bIQqHE7Y'),
(2, 2, 'https://cdn-icons-png.flaticon.com/512/5930/5930147.png'),
(3, 3, 'https://resilienteducator.com/wp-content/uploads/2020/09/childrens-museum-educator-2.jpg'),
(4, 4, 'https://cdn-icons-png.flaticon.com/512/8920/8920636.png'),
(5, 5, 'https://cdn-icons-png.flaticon.com/512/9855/9855619.png');

-- --------------------------------------------------------

--
-- Table structure for table `learn_courses`
--

CREATE TABLE `learn_courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `instructor` varchar(255) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learn_courses`
--

INSERT INTO `learn_courses` (`id`, `title`, `description`, `image`, `duration`, `price`, `instructor`, `features`, `created_at`) VALUES
(1, 'Schools Programs', 'Educational tours and guided workshops tailored for school groups.', 'assets/image/learn.png', 'Half Day', 150.00, 'Museum Educator Team', 'Guided Learning Tour; Hands-on Activities; Certified Educational Content', '2025-12-11 18:01:07'),
(2, 'Youth Workshops', 'Creative sessions and interactive activities for young explorers.', 'assets/image/learn.png', '3 Hours', 180.00, 'Art & History Coaches', 'Art & History Workshops; Heritage Exploration; Group Projects', '2025-12-11 18:01:07'),
(3, 'Online Learning', 'Digital lessons and virtual programs about Ancient Egyptian culture.', 'assets/image/learn.png', 'Self-paced', 90.00, 'Virtual Hosts', 'Virtual Tours; Interactive History Lessons; Downloadable Resources', '2025-12-11 18:01:07'),
(4, 'Weekend Family Lab', 'Family-friendly lab with pottery, painting, and mini-excavation.', 'assets/image/learn.png', '2 Hours', 160.00, 'Family Activities Crew', 'Pottery Painting; Sand Excavation; Family Photo Spot', '2025-12-11 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `halls_count` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `description`, `duration`, `halls_count`, `price`, `image`, `created_at`) VALUES
(1, 'Royal Statues Tour', 'Guided visit through monumental statue halls with a short break and drink.', 'Half Day', 12, 450.00, 'https://egyptra.pro/uploads/products/676bf845d5926.jpeg', '2025-12-11 18:01:07'),
(2, 'Egyptian Civilizations Route', 'Route across Old to New Kingdom halls with VIP access and inscriptions corridor.', 'Full Day', 18, 650.00, 'https://egyptra.pro/uploads/products/676bf845d5926.jpeg', '2025-12-11 18:01:07'),
(3, 'Golden Dynasty Trail', 'Royal family highlights, mummies zone, jewelry and masks with souvenir.', 'Half Day', 10, 400.00, 'https://egyptra.pro/uploads/products/676bf845d5926.jpeg', '2025-12-11 18:01:07'),
(4, 'Sun Court Terrace', 'Outdoor statue court visit with café stop and guided photo moments.', '2 Hours', 6, 220.00, 'https://egyptra.pro/uploads/products/676bf845d5926.jpeg', '2025-12-11 18:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `expires_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promo_codes`
--

INSERT INTO `promo_codes` (`id`, `code`, `discount_percent`, `expires_at`) VALUES
(1, 'GEMWELCOME', 10, '2025-12-31'),
(2, 'FAMILYDAY', 15, '2025-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `description`, `logo`, `user_id`, `created_at`) VALUES
(1, 'Nile Terrace Café', 'Panoramic café inspired by the Grand Staircase views.', 'https://example.com/logos/nile-terrace.png', 3, '2025-12-11 18:01:07'),
(2, 'Pharaohs Feast', 'Signature Egyptian dishes for museum visitors.', 'https://example.com/logos/pharaohs-feast.png', 3, '2025-12-11 18:01:07'),
(3, 'Lotus Garden', 'Indoor restaurant with contemporary Nubian touches.', 'https://example.com/logos/lotus-garden.png', 3, '2025-12-11 18:01:07'),
(4, 'Nile Terrace Café', 'Luxury café overlooking the Nile inside GEM.', 'https://images.unsplash.com/photo-1552566626-52f8b828add9', 1, '2025-12-14 14:14:33'),
(5, 'Pharaohs Feast', 'Authentic Egyptian cuisine inspired by ancient recipes.', 'https://images.unsplash.com/photo-1528605248644-14dd04022da1', 1, '2025-12-14 14:14:33'),
(6, 'Lotus Garden', 'International fine dining restaurant.', 'https://images.unsplash.com/photo-1555992336-03a23c1f2a2b', 1, '2025-12-14 14:14:33'),
(7, 'Roman Slice', 'Italian pizzas and pastas.', 'https://images.unsplash.com/photo-1600891964599-f61ba0e24092', 1, '2025-12-14 14:14:33'),
(8, 'Burger Forge', 'Premium burgers made with quality beef.', 'https://images.unsplash.com/photo-1561758033-d89a9ad46330', 1, '2025-12-14 14:14:33'),
(9, 'Sea Pearl', 'Fresh seafood restaurant.', 'https://images.unsplash.com/photo-1504674900247-0877df9cc836', 1, '2025-12-14 14:14:33'),
(10, 'Orient Express', 'Oriental and Middle Eastern dishes.', 'https://images.unsplash.com/photo-1604908177522-050bfcb0f6c5', 1, '2025-12-14 14:14:33'),
(11, 'Sweet Crown', 'Desserts, cakes and sweets.', 'https://images.unsplash.com/photo-1606313564200-e75d5e30476c', 1, '2025-12-14 14:14:33'),
(12, 'Green Bowl', 'Healthy and vegetarian food.', 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c', 1, '2025-12-14 14:14:33'),
(13, 'Kids Kingdom Meals', 'Fun and healthy meals for kids.', 'https://images.unsplash.com/photo-1604908554020-90b6cce02c1b', 1, '2025-12-14 14:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `ticket_type` enum('adult','child','student') NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_ticket` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `role` enum('user','admin','restaurant') NOT NULL DEFAULT 'user',
  `points` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `profile_image`, `role`, `points`, `created_at`) VALUES
(1, 'Grand Museum Admin', 'admin@gem.eg', '$2y$10$examplehashedpassword', 'https://example.com/avatars/admin.png', 'admin', 120, '2025-12-11 18:01:07'),
(2, 'Museum Visitor', 'visitor@gem.eg', '$2y$10$examplehashedpassword', 'https://example.com/avatars/visitor.png', 'user', 40, '2025-12-11 18:01:07'),
(3, 'Nile Terrace Owner', 'restaurant@gem.eg', '$2y$10$examplehashedpassword', 'https://example.com/avatars/restaurant-owner.png', 'restaurant', 0, '2025-12-11 18:01:07'),
(4, 'Family Explorer', 'family@gem.eg', '$2y$10$examplehashedpassword', 'https://example.com/avatars/family.png', 'user', 25, '2025-12-11 18:01:07'),
(5, 'School Group Coordinator', 'schools@gem.eg', '$2y$10$examplehashedpassword', 'https://example.com/avatars/schools.png', 'user', 60, '2025-12-11 18:01:07'),
(6, 'Hossam Mohamed', 'hossam545mohamed@gmail.com', '$2y$10$zb2QcqxuS3ZX119BmPDdQulP9ma.pvAkmDSacsLwbgzMDg4zWwd/u', 'uploads/users/1765787785_image3.png', 'user', 0, '2025-12-11 18:01:38'),
(7, 'Mohamed Sayed', 'MohamedSayedS@gmail.com', '$2y$10$WyTjz/QZY70ExLPKsJ.Vouu79vFg7MnzI9X3SIFGtoT7LYod6FGXq', 'uploads/users/1765869050_Blue and Red Modern Business Strategy Book Cover .png', 'user', 0, '2025-12-16 07:10:06'),
(8, 'test', 'test@gmail.com', '$2y$10$IqQ2oPJSmt.oOg1rdR8VpuUSDIcnNdUV/tPLJD0UCFR1PnYMuqPNy', NULL, 'user', 0, '2025-12-16 07:19:26'),
(9, 'test', 'test1@gmail.com', '$2y$10$ocreaWpyZB7MSqMawH50keUkHIIpCPU0r20Duyu0am6vZMzkqFFi6', NULL, 'user', 0, '2025-12-16 07:22:00'),
(10, 'Hossam Mohamedd', 'hossam545mohamedD@gmail.com', '$2y$10$3T1NFzWIZQ8PTjmIsnkKquxax.2SmesRDiw1/0tugaKosxujSf87i', 'uploads/users/1765956225_1751191462-D761044453ACEE93.png', 'admin', 0, '2025-12-17 07:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_game_results`
--

CREATE TABLE `user_game_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `points_earned` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_game_results`
--

INSERT INTO `user_game_results` (`id`, `user_id`, `game_id`, `points_earned`, `created_at`) VALUES
(1, 2, 1, 120, '2025-12-11 18:01:07'),
(2, 2, 2, 90, '2025-12-11 18:01:07'),
(3, 4, 4, 150, '2025-12-11 18:01:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bookings_user` (`user_id`),
  ADD KEY `fk_bookings_promo` (`promo_code_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donations_user` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_food_item` (`name`,`restaurant_id`,`category_id`),
  ADD KEY `fk_food_items_restaurant` (`restaurant_id`),
  ADD KEY `fk_food_items_category` (`category_id`);

--
-- Indexes for table `food_likes`
--
ALTER TABLE `food_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `food_id` (`food_id`,`user_id`),
  ADD KEY `fk_like_user` (`user_id`);

--
-- Indexes for table `food_reviews`
--
ALTER TABLE `food_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_food_reviews_food` (`food_id`),
  ADD KEY `fk_food_reviews_user` (`user_id`);

--
-- Indexes for table `kids_games`
--
ALTER TABLE `kids_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_game_assets`
--
ALTER TABLE `kids_game_assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kids_game_assets_game` (`game_id`);

--
-- Indexes for table `learn_courses`
--
ALTER TABLE `learn_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_restaurants_user` (`user_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tickets_booking` (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_game_results`
--
ALTER TABLE `user_game_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_game_results_user` (`user_id`),
  ADD KEY `fk_user_game_results_game` (`game_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `food_likes`
--
ALTER TABLE `food_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `food_reviews`
--
ALTER TABLE `food_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kids_games`
--
ALTER TABLE `kids_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kids_game_assets`
--
ALTER TABLE `kids_game_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `learn_courses`
--
ALTER TABLE `learn_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_game_results`
--
ALTER TABLE `user_game_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_bookings_promo` FOREIGN KEY (`promo_code_id`) REFERENCES `promo_codes` (`id`),
  ADD CONSTRAINT `fk_bookings_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `fk_donations_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `food_items`
--
ALTER TABLE `food_items`
  ADD CONSTRAINT `fk_food_items_category` FOREIGN KEY (`category_id`) REFERENCES `food_categories` (`id`),
  ADD CONSTRAINT `fk_food_items_restaurant` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`);

--
-- Constraints for table `food_likes`
--
ALTER TABLE `food_likes`
  ADD CONSTRAINT `fk_food_likes_food` FOREIGN KEY (`food_id`) REFERENCES `food_items` (`id`),
  ADD CONSTRAINT `fk_food_likes_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_like_food` FOREIGN KEY (`food_id`) REFERENCES `food_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_like_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `food_reviews`
--
ALTER TABLE `food_reviews`
  ADD CONSTRAINT `fk_food_reviews_food` FOREIGN KEY (`food_id`) REFERENCES `food_items` (`id`),
  ADD CONSTRAINT `fk_food_reviews_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kids_game_assets`
--
ALTER TABLE `kids_game_assets`
  ADD CONSTRAINT `fk_kids_game_assets_game` FOREIGN KEY (`game_id`) REFERENCES `kids_games` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `fk_restaurants_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_tickets_booking` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_game_results`
--
ALTER TABLE `user_game_results`
  ADD CONSTRAINT `fk_user_game_results_game` FOREIGN KEY (`game_id`) REFERENCES `kids_games` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_game_results_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
