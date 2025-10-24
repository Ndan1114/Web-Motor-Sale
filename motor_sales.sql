-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 05:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motor_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Honda CBR 150R', 'Honda CBR 150R – Sporty, Agresif, & Penuh Performa\r\n\r\nHonda CBR 150R adalah motor sport fairing yang dirancang untuk pengendara yang menginginkan keseimbangan antara performa, kenyamanan, dan gaya agresif. Ditenagai mesin 150cc, 4-tak, DOHC, 6-percepatan, motor ini memberikan akselerasi responsif dan efisiensi bahan bakar optimal.\r\n\r\nDengan desain aerodinamis yang terinspirasi dari CBR series, CBR 150R tampil gagah dengan sistem pencahayaan full LED serta panel instrumen digital yang modern dan informatif. Ditambah Assist & Slipper Clutch, perpindahan gigi jadi lebih halus dan nyaman, mengurangi risiko ban selip saat deselerasi.\r\n\r\nSuspensi depan USD (Upside Down) Showa memberikan kestabilan maksimal saat bermanuver, sedangkan rem cakram depan & belakang dengan opsi ABS memastikan keamanan dan kontrol yang lebih baik.\r\n\r\nHonda CBR 150R – Ride with Power, Race with Style!', 35000000, 'cbr.jpg'),
(2, 'Honda CBR 250RR', 'Honda CBR 250RR – Masterpiece of Speed & Precision\r\n\r\nHonda CBR 250RR adalah motor sport premium yang dirancang untuk memberikan pengalaman berkendara yang luar biasa. Dibekali dengan mesin 250cc, 2-silinder, DOHC, 8-katup, motor ini mampu menghasilkan tenaga besar dengan respons throttle yang agresif.\r\n\r\nDesainnya yang aerodinamis dan agresif menghadirkan kesan sporty dan futuristik, diperkuat dengan sistem pencahayaan full LED serta panel instrumen digital yang modern. Dengan teknologi Throttle-By-Wire (TBW) dan Mode Riding yang bisa disesuaikan, CBR 250RR memberikan performa optimal di berbagai kondisi jalan.\r\n\r\nDilengkapi dengan Suspensi USD (Upside Down) Showa, rem ABS (Anti-lock Braking System), serta rangka ringan namun kuat, motor ini menawarkan kestabilan maksimal saat bermanuver.\r\n\r\nHonda CBR 250RR – Born to Race, Built to Dominate!', 70000000, 'cbr250.jpg'),
(3, 'Yamaha R15 V3', 'Yamaha R15 V3 – The True Racing DNA\r\n\r\nYamaha R15 V3 adalah motor sport fairing yang mengusung konsep R-Series DNA, memberikan pengalaman berkendara layaknya motor balap sejati. Dibekali mesin 155cc, SOHC, VVA (Variable Valve Actuation), dan 6-percepatan, motor ini mampu menghasilkan performa maksimal dengan akselerasi responsif di setiap putaran mesin.\r\n\r\nDesainnya yang agresif dan aerodinamis semakin menegaskan karakter sporty, dipadukan dengan sistem pencahayaan full LED dan panel instrumen digital yang modern dan informatif. Fitur Assist & Slipper Clutch membuat perpindahan gigi lebih halus dan mengurangi efek engine brake saat downshift, memberikan pengalaman berkendara lebih nyaman dan stabil.\r\n\r\nDilengkapi dengan suspensi depan USD (Upside Down), serta rangka Delta Box yang kokoh dan ringan, R15 V3 menawarkan kestabilan luar biasa di tikungan maupun kecepatan tinggi. Dengan sistem pengereman cakram depan & belakang, serta opsi ABS, motor ini semakin aman untuk dikendarai di berbagai kondisi jalan.\r\n\r\nYamaha R15 V3 – Born to be a Champion!', 23000000, 'r15.jpg'),
(4, 'Yamaha R25', 'Yamaha R25 – Pure Supersport DNA, Maximum Performance!\r\n\r\nYamaha R25 hadir sebagai motor sport fairing dengan desain agresif dan aerodinamis, terinspirasi dari Yamaha R-Series. Dibekali mesin 250cc, 2-silinder, DOHC, 8-katup, berpendingin cairan, motor ini menghasilkan tenaga yang besar dengan akselerasi responsif di setiap putaran mesin.\r\n\r\nDesain fairing bergaya superbike memberikan kesan gagah dan sporty, dipadukan dengan lampu full LED yang tajam serta panel instrumen full digital yang informatif. Suspensi depan USD (Upside Down) KYB memastikan handling yang lebih stabil, terutama saat bermanuver di kecepatan tinggi.\r\n\r\nDibangun dengan rangka Diamond Frame yang ringan namun kokoh, serta sistem pengereman cakram depan & belakang dengan ABS, Yamaha R25 memberikan kestabilan dan keamanan maksimal saat berkendara. Posisi berkendara yang sporty namun tetap nyaman menjadikannya pilihan ideal bagi pecinta motor sport yang mengutamakan performa dan gaya.\r\n\r\nYamaha R25 – R-DNA for the True Racer!', 37000000, 'r25.jpg'),
(5, 'Ninja ZX-25R', 'Kawasaki Ninja ZX-25R – The Ultimate 250cc Supersport!\r\n\r\nKawasaki Ninja ZX-25R adalah motor sport fairing kelas premium yang menghadirkan performa luar biasa dengan mesin 250cc, 4-silinder segaris, DOHC, 16-katup, berpendingin cairan. Dengan redline yang mencapai 17.000 rpm, motor ini menawarkan sensasi berkendara khas motor superbike dalam kelas 250cc.\r\n\r\nDesainnya yang agresif dan aerodinamis terinspirasi langsung dari keluarga Ninja ZX-Series, dipadukan dengan sistem pencahayaan full LED serta panel instrumen digital TFT yang modern, lengkap dengan konektivitas ke smartphone melalui Kawasaki Rideology App.\r\n\r\nDilengkapi dengan Throttle-By-Wire & Riding Modes, pengendara bisa memilih mode berkendara sesuai kebutuhan. Fitur Kawasaki Traction Control (KTRC) dan Quick Shifter (KQS) dual-direction membuat perpindahan gigi lebih cepat tanpa perlu menarik kopling, memberikan sensasi balap yang sesungguhnya.\r\n\r\nSuspensi depan USD Showa SFF-BP (Separate Function Fork - Big Piston) dan rangka teralis ringan memastikan kestabilan dan handling luar biasa, terutama saat menikung dengan kecepatan tinggi. Ditambah rem cakram besar dengan ABS, Ninja ZX-25R menawarkan keamanan dan kontrol maksimal di berbagai kondisi jalan.\r\n\r\nKawasaki Ninja ZX-25R – Rev Up to 17K RPM & Dominate the Road! ', 115000000, 'zx25.jpg'),
(6, 'Ninja H2', 'Kawasaki Ninja H2 – The Supercharged Hyperbike!\r\n\r\nKawasaki Ninja H2 adalah motor sport supercharged yang dirancang untuk menghadirkan performa luar biasa di jalan raya. Ditenagai mesin 998cc, 4-silinder segaris, DOHC, supercharged, motor ini mampu menghasilkan tenaga yang luar biasa dengan akselerasi yang brutal.\r\n\r\nDesainnya yang futuristik dan aerodinamis, dipadukan dengan fairing berbahan karbon dan cat spesial Mirror Coated Spark Black, membuat Ninja H2 terlihat eksklusif dan ikonik. Lampu full LED serta panel instrumen TFT digital dengan konektivitas smartphone melalui Kawasaki Rideology App menambah kesan modern dan fungsional.\r\n\r\nDilengkapi dengan Kawasaki Traction Control (KTRC), Kawasaki Quick Shifter (KQS) dual-direction, serta Kawasaki Launch Control Mode (KLCM), Ninja H2 memberikan pengalaman berkendara yang tak tertandingi. Suspensi depan USD Showa BPF (Big Piston Fork) dan single-sided swingarm memastikan handling yang stabil di kecepatan tinggi.\r\n\r\nSistem pengereman Brembo Stylema dengan ABS, serta rangka trellis ringan berbahan high-tensile steel, membuat motor ini tetap aman dan terkendali meski memiliki tenaga yang dahsyat.\r\n\r\nKawasaki Ninja H2 – Supercharged Speed, Unmatched Power! ', 872000000, 'h2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `motor_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
