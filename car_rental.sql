-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 09:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(5) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `brand_id` int(3) NOT NULL,
  `type_id` int(3) NOT NULL,
  `color` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `brand_id`, `type_id`, `color`, `model`, `description`) VALUES
(1, 'TOYOTA AXIO', 3, 2, 'BLACK', '2012', 'The engine lineup was downsized from 1.8/1.5 liters to 1.5/1.3 liters, while substantially improving the performance. The 1.5-liter engine was coupled with the newly developed CVT-i to boost the driving performance and fuel economy. The newly introduced 1.3-liter engine (1NR-FE) adopted the Dual VVT-i technology, optimally controlling the intake and exhaust valves to achieve a fuel economy of 20.6 km/l under the JC08 test cycle.'),
(2, 'BMW 7 Series', 1, 2, 'WHITE', '2015', 'The passenger cell of the 7 Series is made of carbon-fibre-reinforced polymer (CFRP), tensile steel and aluminium, resulting in a lower kerb weight, lower centre of gravity and maintaining a 50/50 axle load distribution. The usage of CFRP allows for weight reduction due to being lighter than steel and aluminium. CFRP also increases structural strength in areas exposed to high steering forces, as it is capable of diverting impact forces to prevent deformations of the material, resulting in higher'),
(3, 'MAZDA CX3', 2, 3, 'DARK BLUE', '2016', 'Bore x stroke 83.5 x 91.2mm\r\nCompression ratio 13.0 : 1\r\nDrivetrain Front wheel drive\r\nEmissions standard Euro stage 5\r\nEngine capacity 1,998cc\r\nEngine type 2.0 litre in-line 4 cylinder 16-valve DOHC S-VT petrol engine with i-stop\r\nFuel consumption (ADR 81/02) - combined 6.6 l/100km\r\n\r\n1\r\nFuel consumption (ADR 81/02) - extra urban 5.6 l/100km\r\n\r\n1\r\nFuel consumption (ADR 81/02) - urban 8.3 l/100km\r\n\r\n1\r\nFuel system Electronic direct injection\r\nFuel tank capacity 48 litres'),
(4, 'FORD RANGER', 4, 4, 'GREY', '2015', 'The current generation of the Ranger is offered in two configurations on a 127-inch wheelbase, including a 2+2 door SuperCab (6-foot bed) and a 4-door SuperCrew (5-foot bed); the 2.3L EcoBoost twin-turbocharged inline-4 and 10-speed automatic is exclusive to KENYA.'),
(5, 'LEXUS LX', 6, 1, 'RED', '2015', 'Another facelift was unveiled in August 2015 at the US Pebble Beach Concours d\'Elegance. The update brought significant changes with an all-new interior, and the only exterior panels carried over were the doors and the roof.'),
(6, 'SUBARU OUTBACK', 5, 6, 'DARK GREEN', '2009', 'Under the hood, Subaru engineers installed the first turbocharged boxer engine on the Outback since 2009. The 2.4-liter flat-four packs a total of 260 HP and a maximum torque of 277 lb-ft (375 Nm). Base models and trims will have the naturally aspirated 2.5-liter engines, which will deliver only 182 HP. Regardless of their engines, all Subaru Outbacks will be paired with the new CVT gearbox, which has a manual function where the driver can choose between 8 forward gears.');

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

CREATE TABLE `car_brands` (
  `brand_id` int(3) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_brands`
--

INSERT INTO `car_brands` (`brand_id`, `brand_name`, `brand_image`) VALUES
(1, 'BMW', '27545_bmw2.jpg'),
(2, 'MAZDA', '1141_mazda.jpg'),
(3, 'TOYOTA', '5213_toyota1.jpg'),
(4, 'FORD', '34808_ford.jpg'),
(5, 'SUBARU', '83173_subaru.jpg'),
(6, 'LEXUS', '41277_2016-Lexus-RX-350-BM-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `type_id` int(3) NOT NULL,
  `type_label` varchar(50) NOT NULL,
  `type_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`type_id`, `type_label`, `type_description`) VALUES
(1, 'SUV', 'An SUV is a powerful vehicle with four-wheel drive that can be driven over rough ground. SUV is an abbreviation for \'sport utility vehicle\'.'),
(2, 'Sedan', 'This is a passenger car in a three-box configuration with separate compartments for engine, passenger, and cargo.'),
(3, 'Hatchback', 'This is a car body configuration with a rear door that swings upward to provide access to a cargo area. Hatchbacks may feature fold-down second row seating, where the interior can be reconfigured to prioritize passenger or cargo volume.'),
(4, 'Pickup', 'This is a light-duty truck that has an enclosed cabin and an open cargo area with low sides and tailgate.'),
(5, '7 Seater', 'These are cars with a high load capacity, mostly used by large families as they occupy seven passenger seats.'),
(6, 'Station Wagon', 'This is an automotive body-style variant of a sedan/saloon with its roof extended rearward[1] over a shared passenger/cargo volume with access at the back via a third or fifth door (the liftgate or tailgate), instead of a trunk/boot lid.'),
(7, 'Minivan', 'This is a North American car classification for vehicles designed to transport passengers in the rear seating row(s), with reconfigurable seats in two or three rows.');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(10) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_phone` varchar(20) NOT NULL,
  `id_no` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `full_name`, `client_email`, `client_phone`, `id_no`, `address`) VALUES
(1, 'user1', 'user@gmail.com', '0712345678', 33475891, 'Rehema Estate, Ngong Rd'),
(2, 'user2', 'user2@gmail.com', '0721346578', 33415982, 'Maziwa Estate, Jogoo Rd'),
(3, 'user3', 'user3@gmail.com', '0712345678', 33475897, 'Mtwapa Luxury Apartments, Mombasa'),
(4, 'user4', 'user4@gmail.com', '0717492637', 33415988, 'King Sherwood Apartments, Riara Rd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` mediumtext NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `client_name`, `email`, `subject`, `message`, `posting_date`) VALUES
(1, 'Anonymous', 'anonymous@gmail.com', 'Toyota Tail Lights', 'The Tail Light of the Toyota Axio are not working.', '2021-10-11 20:04:24'),
(2, 'Anonymous2', '', '', 'The Lexus front tyre on the right has a puncture', '2021-10-11 20:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `car_id` int(3) NOT NULL,
  `pickup_date` date NOT NULL,
  `return_date` date NOT NULL,
  `pickup_location` varchar(50) NOT NULL,
  `return_location` varchar(50) NOT NULL,
  `canceled` tinyint(1) NOT NULL DEFAULT 0,
  `cancellation_reason` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `client_id`, `car_id`, `pickup_date`, `return_date`, `pickup_location`, `return_location`, `canceled`, `cancellation_reason`) VALUES
(1, 1, 1, '2021-09-24', '2021-09-27', 'Kenyatta Ave, Nairobi', 'GPO, Nairobi', 1, ''),
(2, 2, 2, '2021-09-25', '2021-09-28', 'Moi Ave, Nairobi', 'GPO, Nairobi', 1, 'Busy Schedule'),
(3, 3, 3, '2021-09-25', '2021-09-29', 'Likoni Road, Mombasa', 'Kisauni Road, Mombasa', 1, 'Changed my mind'),
(4, 4, 6, '2021-09-25', '2021-09-28', 'Moi Ave, Nairobi', 'Kenyatta Ave, Nairobi', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_id` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `full_name`, `password`, `group_id`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_brands`
--
ALTER TABLE `car_brands`
  MODIFY `brand_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `type_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
