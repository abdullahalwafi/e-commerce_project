-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 06:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgmotor`
--

CREATE TABLE `imgmotor` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `motor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imgmotor`
--

INSERT INTO `imgmotor` (`id`, `img`, `motor_id`) VALUES
(37, 'uploads/1680941942_64312376b5876.jpeg', 1),
(38, 'uploads/1680941942_64312376b61c6.jpeg', 1),
(39, 'uploads/1680941942_64312376b6806.jpeg', 1),
(40, 'uploads/1680941942_64312376b6f8b.jpeg', 1),
(41, 'uploads/1680942048_643123e05b76e.jpeg', 2),
(42, 'uploads/1680942048_643123e05bf1c.jpeg', 2),
(43, 'uploads/1680942175_6431245f7123f.jpeg', 3),
(44, 'uploads/1680942175_6431245f71a64.jpeg', 3),
(45, 'uploads/1680942175_6431245f72106.jpeg', 3),
(46, 'uploads/1680942534_643125c64433e.jpeg', 4),
(47, 'uploads/1680942534_643125c644f04.jpeg', 4),
(48, 'uploads/1680941942_64312376b5876.jpeg', 7),
(49, 'uploads/1680941942_64312376b61c6.jpeg', 7),
(50, 'uploads/1680941942_64312376b6806.jpeg', 7),
(51, 'uploads/1680941942_64312376b6f8b.jpeg', 7),
(52, 'uploads/1680942048_643123e05b76e.jpeg', 7),
(53, 'uploads/1680942048_643123e05bf1c.jpeg', 8),
(54, 'uploads/1680942175_6431245f7123f.jpeg', 9),
(55, 'uploads/1680942175_6431245f71a64.jpeg', 9),
(56, 'uploads/1680942175_6431245f72106.jpeg', 9),
(57, 'uploads/1680942534_643125c64433e.jpeg', 10),
(58, 'uploads/1680942534_643125c644f04.jpeg', 10),
(59, 'uploads/1680944906_64312f0a351b9.jpeg', 11),
(60, 'uploads/1680944906_64312f0a39281.jpeg', 11),
(61, 'uploads/1680941942_64312376b5876.jpeg', 12),
(62, 'uploads/1680941942_64312376b61c6.jpeg', 12),
(63, 'uploads/1680941942_64312376b6806.jpeg', 12),
(64, 'uploads/1680941942_64312376b6f8b.jpeg', 12),
(65, 'uploads/1680942048_643123e05b76e.jpeg', 13),
(66, 'uploads/1680942048_643123e05bf1c.jpeg', 13),
(67, 'uploads/1680942175_6431245f7123f.jpeg', 14),
(68, 'uploads/1680942175_6431245f71a64.jpeg', 14),
(69, 'uploads/1680942175_6431245f72106.jpeg', 14),
(70, 'uploads/1680942534_643125c64433e.jpeg', 15),
(71, 'uploads/1680942534_643125c644f04.jpeg', 15),
(72, 'uploads/1680941942_64312376b5876.jpeg', 16),
(73, 'uploads/1680941942_64312376b61c6.jpeg', 16),
(74, 'uploads/1680941942_64312376b6806.jpeg', 16),
(75, 'uploads/1680941942_64312376b6f8b.jpeg', 16),
(76, 'uploads/1680942048_643123e05b76e.jpeg', 16),
(77, 'uploads/1680942048_643123e05bf1c.jpeg', 17),
(78, 'uploads/1680942175_6431245f7123f.jpeg', 9),
(79, 'uploads/1680942175_6431245f71a64.jpeg', 18),
(80, 'uploads/1680942175_6431245f72106.jpeg', 18),
(81, 'uploads/1680942534_643125c64433e.jpeg', 19),
(82, 'uploads/1680942534_643125c644f04.jpeg', 19),
(83, 'uploads/1680944906_64312f0a351b9.jpeg', 20),
(84, 'uploads/1680944906_64312f0a39281.jpeg', 20),
(85, 'uploads/1680989983_6431df1f239c5.jpeg', 21),
(86, 'uploads/1680989983_6431df1f28c2a.jpeg', 21),
(87, 'uploads/1680989983_6431df1f29297.jpeg', 21),
(88, 'uploads/1680989983_6431df1f299c9.jpeg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `merk`, `img`, `slug`) VALUES
(7, 'honda', 'uploads/1680945510_64313166c4697.png', 'honda'),
(8, 'yamaha', 'uploads/1680945522_64313172709b0.png', 'yamaha'),
(9, 'suzuki', 'uploads/1680945533_6431317d5001d.png', 'suzuki'),
(11, 'kawasaki', 'uploads/1680945543_6431318748a3f.png', 'kawasaki'),
(14, 'tvs', 'uploads/1680945554_6431319295fac.png', 'tvs'),
(16, 'Benelli', 'uploads/1680946093_643133ad5cf27.jpeg', 'benelli'),
(17, 'ktm', 'uploads/1680946108_643133bc853b6.png', 'ktm');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `nama_motor` varchar(191) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `cc` int(11) NOT NULL,
  `harga` int(45) NOT NULL,
  `merk_id` int(45) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id`, `nama_motor`, `slug`, `cc`, `harga`, `merk_id`, `stok`, `deskripsi`) VALUES
(1, 'Thunder 125', 'thunder-125', 125, 5000000, 9, 10, '<p>Motor Thunder adalah sepeda motor bermotor bensin berkapasitas kecil yang diproduksi oleh pabrikan otomotif terkenal. Motor ini memiliki desain sporty yang agresif dengan tampilan yang modern dan dinamis. Dengan mesin yang bertenaga dan performa tinggi, Motor Thunder cocok untuk pengendara yang menginginkan pengalaman berkendara yang cepat dan memacu adrenalin.</p>\r\n\r\n<p>Motor Thunder dilengkapi dengan mesin bensin yang efisien dan andal, yang mampu menghasilkan tenaga tinggi dan torsi yang kuat. Mesin ini dilengkapi dengan teknologi terbaru untuk meningkatkan kinerja dan efisiensi bahan bakar, sehingga memberikan akselerasi yang cepat dan responsif.</p>\r\n\r\n<p>Desain bodi Motor Thunder menampilkan garis-garis tegas dan futuristik, dengan lampu depan dan lampu belakang yang modern dan aerodinamis. Tampilan keseluruhan motor ini sangat sporty dan dinamis, mencerminkan kecepatan dan kekuatan yang dimilikinya.</p>\r\n\r\n<p>Fitur-fitur lainnya pada Motor Thunder termasuk sistem suspensi yang handal untuk kenyamanan berkendara, rem cakram yang kuat untuk keamanan pengereman yang optimal, serta sistem penggerak yang responsif untuk menghadapi berbagai kondisi jalan.</p>\r\n\r\n<p>Interior Motor Thunder juga didesain ergonomis dengan posisi berkendara yang nyaman dan kontrol yang mudah dijangkau, sehingga pengendara dapat mengontrol motor dengan baik dan menghadapi tantangan berkendara dengan percaya diri.</p>\r\n\r\n<p>Motor Thunder cocok untuk pengendara yang mengutamakan performa tinggi, kecepatan, dan tampilan yang sporty. Dengan kombinasi desain yang menarik dan performa yang handal, Motor Thunder merupakan pilihan yang ideal bagi mereka yang menginginkan pengalaman berkendara yang mengasyikkan dan mengesankan.</p>\r\n'),
(2, 'Motor Beat', 'motor-beat', 125, 15000000, 7, 10, '<p>Motor Beat adalah sepeda motor matic yang diproduksi oleh produsen otomotif terkenal. Motor ini dikenal sebagai salah satu motor yang sangat populer di Indonesia, dengan desain yang stylish, performa yang tangguh, dan kepraktisan dalam penggunaan sehari-hari. Motor Beat cocok untuk pengendara yang mengutamakan kenyamanan, efisiensi bahan bakar, dan kemudahan dalam berkendara.</p>\r\n\r\n<p>Motor Beat hadir dengan desain yang modern dan atraktif, dengan garis-garis yang halus dan aerodinamis. Motor ini memiliki tampilan yang elegan dan futuristik, yang menarik perhatian di jalanan. Selain itu, Motor Beat juga dilengkapi dengan beragam pilihan warna yang trendy, memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Beat sangat tangguh, dilengkapi dengan teknologi canggih untuk meningkatkan efisiensi bahan bakar. Motor ini mampu memberikan akselerasi yang responsif dan kecepatan yang cukup untuk menavigasi lalu lintas perkotaan yang padat. Mesin maticnya juga memberikan kenyamanan dalam pengoperasian, membuat berkendara menjadi lebih mudah dan praktis.</p>\r\n\r\n<p>Motor Beat juga menawarkan kenyamanan maksimal bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang ringkas, Motor Beat mudah untuk dikendalikan dan dikemudikan. Fitur-fitur seperti suspensi yang nyaman, sistem pengereman yang handal, serta sistem keamanan yang lengkap menjadikan Motor Beat sebagai pilihan yang aman dan nyaman untuk perjalanan sehari-hari.</p>\r\n\r\n<p>Selain itu, Motor Beat juga dilengkapi dengan fitur canggih seperti lampu LED, panel instrumen digital, dan sistem pengisian daya USB, yang menambah kenyamanan dan kepraktisan dalam penggunaan sehari-hari.</p>\r\n\r\n<p>Motor Beat adalah pilihan yang sempurna bagi mereka yang mencari sepeda motor matic yang stylish, andal, dan nyaman untuk kebutuhan harian. Dengan kombinasi desain yang menarik, performa yang tangguh, dan fitur-fitur canggih, Motor Beat menjadi salah satu motor yang sangat diminati di pasar otomotif Indonesia.</p>\r\n'),
(3, 'Vario 160', 'vario-160', 160, 20000000, 7, 10, '<p>Motor Vario 160 adalah sepeda motor matic yang menghadirkan gaya modern, kinerja handal, dan kenyamanan tingkat tinggi. Motor ini merupakan salah satu pilihan terbaik untuk mereka yang menginginkan pengalaman berkendara yang nyaman, efisien, dan bertenaga.</p>\r\n\r\n<p>Dengan desain yang sporty dan aerodinamis, Motor Vario 160 memiliki tampilan yang menarik dan dinamis. Dilengkapi dengan lampu LED yang stylish dan desain bodi yang futuristik, motor ini mampu menarik perhatian di jalanan. Tersedia dalam beragam pilihan warna yang menawan, Motor Vario 160 memungkinkan pengendara untuk mengungkapkan gaya pribadi mereka.</p>\r\n\r\n<p>Motor Vario 160 didukung oleh mesin 160cc yang tangguh, yang memberikan kinerja handal dan responsif. Dengan teknologi canggih, motor ini mampu menghadirkan akselerasi yang lancar, kecepatan tinggi, dan efisiensi bahan bakar yang optimal. Pengendara dapat dengan mudah menjelajahi jalan perkotaan yang padat dengan performa mesin yang andal.</p>\r\n\r\n<p>Kenyamanan menjadi salah satu fokus utama pada Motor Vario 160. Dengan suspensi depan teleskopik dan suspensi belakang ganda, motor ini mampu menghadirkan perjalanan yang halus dan nyaman, bahkan di jalan yang tidak rata. Fitur-fitur seperti kursi yang ergonomis, ruang penyimpanan yang luas, dan panel instrumen digital yang lengkap, menjadikan pengalaman berkendara semakin menyenangkan.</p>\r\n\r\n<p>Motor Vario 160 juga dilengkapi dengan beragam fitur keamanan, seperti sistem pengereman canggih dan kunci pengaman berbasis smart key, yang memberikan perlindungan tambahan bagi pengendara dan kendaraannya. Fitur-fitur canggih seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan kenyamanan dan keamanan selama berkendara.</p>\r\n\r\n<p>Motor Vario 160 adalah pilihan ideal bagi mereka yang mengutamakan gaya, performa, dan kenyamanan dalam berkendara. Dengan kombinasi desain yang modern, performa yang handal, dan fitur-fitur canggih, Motor Vario 160 menjadi pilihan yang menarik dalam pasar sepeda motor matic di Indonesia.</p>\r\n'),
(4, 'Nmax 155', 'nmax-155', 155, 37500000, 8, 21, '<p>Motor Nmax 2023 adalah sepeda motor skutik yang menjadi salah satu pilihan unggulan bagi pengendara yang menginginkan gaya premium, performa tinggi, dan kenyamanan maksimal. Motor ini menawarkan pengalaman berkendara yang modern dan mewah, dengan teknologi terbaru dan fitur-fitur canggih yang menghadirkan kenyamanan dan keamanan tingkat tinggi.</p>\r\n\r\n<p>Motor Nmax 2023 hadir dengan desain yang elegan dan futuristik, dengan garis-garis yang halus dan bentuk bodi yang aerodinamis. Tampilannya yang mewah dan modern membuat motor ini tampil menarik dan menjadi sorotan di jalanan. Selain itu, tersedia dalam pilihan warna yang menawan, Motor Nmax 2023 memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Nmax 2023 sangat tinggi, didukung oleh mesin 155cc yang bertenaga dan responsif. Motor ini mampu memberikan akselerasi yang cepat dan kecepatan tinggi, membuat perjalanan menjadi lebih menyenangkan. Mesin yang efisien dalam konsumsi bahan bakar juga membuat motor ini menjadi pilihan yang ekonomis.</p>\r\n\r\n<p>Motor Nmax 2023 juga menawarkan kenyamanan tingkat tinggi bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang luas, motor ini memberikan kenyamanan dalam berkendara jarak jauh. Fitur-fitur seperti suspensi depan teleskopik dan suspensi belakang ganda memberikan perjalanan yang halus dan stabil di berbagai kondisi jalan.</p>\r\n\r\n<p>Motor Nmax 2023 dilengkapi dengan fitur-fitur canggih seperti sistem pengereman ABS, panel instrumen digital yang lengkap, dan sistem kunci pengaman berbasis smart key. Fitur-fitur keamanan seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan keamanan saat berkendara. Selain itu, motor ini juga dilengkapi dengan fitur konektivitas Bluetooth yang memungkinkan pengendara untuk terhubung dengan smartphone mereka dan mengakses informasi penting, seperti panggilan telepon, navigasi, dan pemutaran musik.</p>\r\n\r\n<p>Motor Nmax 2023 adalah pilihan yang sangat menarik bagi mereka yang menginginkan pengalaman berkendara yang mewah, performa tinggi, dan kenyamanan tingkat tinggi. Dengan kombinasi desain yang elegan, performa yang handal, dan fitur-fitur canggih, Motor Nmax 2023 menjadi salah satu motor yang diincar di pasar sepeda motor skutik premium.</p>\r\n'),
(7, 'Thunder 250', 'thunder-250', 125, 10000000, 9, 10, '<p>Motor Thunder adalah sepeda motor bermotor bensin berkapasitas kecil yang diproduksi oleh pabrikan otomotif terkenal. Motor ini memiliki desain sporty yang agresif dengan tampilan yang modern dan dinamis. Dengan mesin yang bertenaga dan performa tinggi, Motor Thunder cocok untuk pengendara yang menginginkan pengalaman berkendara yang cepat dan memacu adrenalin.</p>\r\n\r\n<p>Motor Thunder dilengkapi dengan mesin bensin yang efisien dan andal, yang mampu menghasilkan tenaga tinggi dan torsi yang kuat. Mesin ini dilengkapi dengan teknologi terbaru untuk meningkatkan kinerja dan efisiensi bahan bakar, sehingga memberikan akselerasi yang cepat dan responsif.</p>\r\n\r\n<p>Desain bodi Motor Thunder menampilkan garis-garis tegas dan futuristik, dengan lampu depan dan lampu belakang yang modern dan aerodinamis. Tampilan keseluruhan motor ini sangat sporty dan dinamis, mencerminkan kecepatan dan kekuatan yang dimilikinya.</p>\r\n\r\n<p>Fitur-fitur lainnya pada Motor Thunder termasuk sistem suspensi yang handal untuk kenyamanan berkendara, rem cakram yang kuat untuk keamanan pengereman yang optimal, serta sistem penggerak yang responsif untuk menghadapi berbagai kondisi jalan.</p>\r\n\r\n<p>Interior Motor Thunder juga didesain ergonomis dengan posisi berkendara yang nyaman dan kontrol yang mudah dijangkau, sehingga pengendara dapat mengontrol motor dengan baik dan menghadapi tantangan berkendara dengan percaya diri.</p>\r\n\r\n<p>Motor Thunder cocok untuk pengendara yang mengutamakan performa tinggi, kecepatan, dan tampilan yang sporty. Dengan kombinasi desain yang menarik dan performa yang handal, Motor Thunder merupakan pilihan yang ideal bagi mereka yang menginginkan pengalaman berkendara yang mengasyikkan dan mengesankan.</p>\r\n'),
(8, 'Motor Beat 2023', 'motor-beat-2023', 150, 45000000, 7, 10, '<p>Motor Beat adalah sepeda motor matic yang diproduksi oleh produsen otomotif terkenal. Motor ini dikenal sebagai salah satu motor yang sangat populer di Indonesia, dengan desain yang stylish, performa yang tangguh, dan kepraktisan dalam penggunaan sehari-hari. Motor Beat cocok untuk pengendara yang mengutamakan kenyamanan, efisiensi bahan bakar, dan kemudahan dalam berkendara.</p>\r\n\r\n<p>Motor Beat hadir dengan desain yang modern dan atraktif, dengan garis-garis yang halus dan aerodinamis. Motor ini memiliki tampilan yang elegan dan futuristik, yang menarik perhatian di jalanan. Selain itu, Motor Beat juga dilengkapi dengan beragam pilihan warna yang trendy, memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Beat sangat tangguh, dilengkapi dengan teknologi canggih untuk meningkatkan efisiensi bahan bakar. Motor ini mampu memberikan akselerasi yang responsif dan kecepatan yang cukup untuk menavigasi lalu lintas perkotaan yang padat. Mesin maticnya juga memberikan kenyamanan dalam pengoperasian, membuat berkendara menjadi lebih mudah dan praktis.</p>\r\n\r\n<p>Motor Beat juga menawarkan kenyamanan maksimal bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang ringkas, Motor Beat mudah untuk dikendalikan dan dikemudikan. Fitur-fitur seperti suspensi yang nyaman, sistem pengereman yang handal, serta sistem keamanan yang lengkap menjadikan Motor Beat sebagai pilihan yang aman dan nyaman untuk perjalanan sehari-hari.</p>\r\n\r\n<p>Selain itu, Motor Beat juga dilengkapi dengan fitur canggih seperti lampu LED, panel instrumen digital, dan sistem pengisian daya USB, yang menambah kenyamanan dan kepraktisan dalam penggunaan sehari-hari.</p>\r\n\r\n<p>Motor Beat adalah pilihan yang sempurna bagi mereka yang mencari sepeda motor matic yang stylish, andal, dan nyaman untuk kebutuhan harian. Dengan kombinasi desain yang menarik, performa yang tangguh, dan fitur-fitur canggih, Motor Beat menjadi salah satu motor yang sangat diminati di pasar otomotif Indonesia.</p>\r\n'),
(9, 'Vario Terbaru', 'vario-terbaru', 160, 40000000, 7, 10, '<p>Motor Vario 160 adalah sepeda motor matic yang menghadirkan gaya modern, kinerja handal, dan kenyamanan tingkat tinggi. Motor ini merupakan salah satu pilihan terbaik untuk mereka yang menginginkan pengalaman berkendara yang nyaman, efisien, dan bertenaga.</p>\r\n\r\n<p>Dengan desain yang sporty dan aerodinamis, Motor Vario 160 memiliki tampilan yang menarik dan dinamis. Dilengkapi dengan lampu LED yang stylish dan desain bodi yang futuristik, motor ini mampu menarik perhatian di jalanan. Tersedia dalam beragam pilihan warna yang menawan, Motor Vario 160 memungkinkan pengendara untuk mengungkapkan gaya pribadi mereka.</p>\r\n\r\n<p>Motor Vario 160 didukung oleh mesin 160cc yang tangguh, yang memberikan kinerja handal dan responsif. Dengan teknologi canggih, motor ini mampu menghadirkan akselerasi yang lancar, kecepatan tinggi, dan efisiensi bahan bakar yang optimal. Pengendara dapat dengan mudah menjelajahi jalan perkotaan yang padat dengan performa mesin yang andal.</p>\r\n\r\n<p>Kenyamanan menjadi salah satu fokus utama pada Motor Vario 160. Dengan suspensi depan teleskopik dan suspensi belakang ganda, motor ini mampu menghadirkan perjalanan yang halus dan nyaman, bahkan di jalan yang tidak rata. Fitur-fitur seperti kursi yang ergonomis, ruang penyimpanan yang luas, dan panel instrumen digital yang lengkap, menjadikan pengalaman berkendara semakin menyenangkan.</p>\r\n\r\n<p>Motor Vario 160 juga dilengkapi dengan beragam fitur keamanan, seperti sistem pengereman canggih dan kunci pengaman berbasis smart key, yang memberikan perlindungan tambahan bagi pengendara dan kendaraannya. Fitur-fitur canggih seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan kenyamanan dan keamanan selama berkendara.</p>\r\n\r\n<p>Motor Vario 160 adalah pilihan ideal bagi mereka yang mengutamakan gaya, performa, dan kenyamanan dalam berkendara. Dengan kombinasi desain yang modern, performa yang handal, dan fitur-fitur canggih, Motor Vario 160 menjadi pilihan yang menarik dalam pasar sepeda motor matic di Indonesia.</p>\r\n'),
(10, 'Nmax Terbaru', 'nmax-terbaru', 155, 47500000, 8, 20, '<p>Motor Nmax 2023 adalah sepeda motor skutik yang menjadi salah satu pilihan unggulan bagi pengendara yang menginginkan gaya premium, performa tinggi, dan kenyamanan maksimal. Motor ini menawarkan pengalaman berkendara yang modern dan mewah, dengan teknologi terbaru dan fitur-fitur canggih yang menghadirkan kenyamanan dan keamanan tingkat tinggi.</p>\r\n\r\n<p>Motor Nmax 2023 hadir dengan desain yang elegan dan futuristik, dengan garis-garis yang halus dan bentuk bodi yang aerodinamis. Tampilannya yang mewah dan modern membuat motor ini tampil menarik dan menjadi sorotan di jalanan. Selain itu, tersedia dalam pilihan warna yang menawan, Motor Nmax 2023 memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Nmax 2023 sangat tinggi, didukung oleh mesin 155cc yang bertenaga dan responsif. Motor ini mampu memberikan akselerasi yang cepat dan kecepatan tinggi, membuat perjalanan menjadi lebih menyenangkan. Mesin yang efisien dalam konsumsi bahan bakar juga membuat motor ini menjadi pilihan yang ekonomis.</p>\r\n\r\n<p>Motor Nmax 2023 juga menawarkan kenyamanan tingkat tinggi bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang luas, motor ini memberikan kenyamanan dalam berkendara jarak jauh. Fitur-fitur seperti suspensi depan teleskopik dan suspensi belakang ganda memberikan perjalanan yang halus dan stabil di berbagai kondisi jalan.</p>\r\n\r\n<p>Motor Nmax 2023 dilengkapi dengan fitur-fitur canggih seperti sistem pengereman ABS, panel instrumen digital yang lengkap, dan sistem kunci pengaman berbasis smart key. Fitur-fitur keamanan seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan keamanan saat berkendara. Selain itu, motor ini juga dilengkapi dengan fitur konektivitas Bluetooth yang memungkinkan pengendara untuk terhubung dengan smartphone mereka dan mengakses informasi penting, seperti panggilan telepon, navigasi, dan pemutaran musik.</p>\r\n\r\n<p>Motor Nmax 2023 adalah pilihan yang sangat menarik bagi mereka yang menginginkan pengalaman berkendara yang mewah, performa tinggi, dan kenyamanan tingkat tinggi. Dengan kombinasi desain yang elegan, performa yang handal, dan fitur-fitur canggih, Motor Nmax 2023 menjadi salah satu motor yang diincar di pasar sepeda motor skutik premium.</p>\r\n'),
(11, 'Xmax Terbaru', 'xmax-terbaru', 150, 45000000, 8, 12, '<p>Motor Nmax 2023 adalah sepeda motor skutik yang menjadi salah satu pilihan unggulan bagi pengendara yang menginginkan gaya premium, performa tinggi, dan kenyamanan maksimal. Motor ini menawarkan pengalaman berkendara yang modern dan mewah, dengan teknologi terbaru dan fitur-fitur canggih yang menghadirkan kenyamanan dan keamanan tingkat tinggi.</p>\r\n\r\n<p>Motor Nmax 2023 hadir dengan desain yang elegan dan futuristik, dengan garis-garis yang halus dan bentuk bodi yang aerodinamis. Tampilannya yang mewah dan modern membuat motor ini tampil menarik dan menjadi sorotan di jalanan. Selain itu, tersedia dalam pilihan warna yang menawan, Motor Nmax 2023 memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Nmax 2023 sangat tinggi, didukung oleh mesin 155cc yang bertenaga dan responsif. Motor ini mampu memberikan akselerasi yang cepat dan kecepatan tinggi, membuat perjalanan menjadi lebih menyenangkan. Mesin yang efisien dalam konsumsi bahan bakar juga membuat motor ini menjadi pilihan yang ekonomis.</p>\r\n\r\n<p>Motor Nmax 2023 juga menawarkan kenyamanan tingkat tinggi bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang luas, motor ini memberikan kenyamanan dalam berkendara jarak jauh. Fitur-fitur seperti suspensi depan teleskopik dan suspensi belakang ganda memberikan perjalanan yang halus dan stabil di berbagai kondisi jalan.</p>\r\n\r\n<p>Motor Nmax 2023 dilengkapi dengan fitur-fitur canggih seperti sistem pengereman ABS, panel instrumen digital yang lengkap, dan sistem kunci pengaman berbasis smart key. Fitur-fitur keamanan seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan keamanan saat berkendara. Selain itu, motor ini juga dilengkapi dengan fitur konektivitas Bluetooth yang memungkinkan pengendara untuk terhubung dengan smartphone mereka dan mengakses informasi penting, seperti panggilan telepon, navigasi, dan pemutaran musik.</p>\r\n\r\n<p>Motor Nmax 2023 adalah pilihan yang sangat menarik bagi mereka yang menginginkan pengalaman berkendara yang mewah, performa tinggi, dan kenyamanan tingkat tinggi. Dengan kombinasi desain yang elegan, performa yang handal, dan fitur-fitur canggih, Motor Nmax 2023 menjadi salah satu motor yang diincar di pasar sepeda motor skutik premium.</p>\r\n'),
(12, 'Thunder 125', 'thunder-125-2', 125, 5000000, 9, 10, '<p>Motor Thunder adalah sepeda motor bermotor bensin berkapasitas kecil yang diproduksi oleh pabrikan otomotif terkenal. Motor ini memiliki desain sporty yang agresif dengan tampilan yang modern dan dinamis. Dengan mesin yang bertenaga dan performa tinggi, Motor Thunder cocok untuk pengendara yang menginginkan pengalaman berkendara yang cepat dan memacu adrenalin.</p>\r\n\r\n<p>Motor Thunder dilengkapi dengan mesin bensin yang efisien dan andal, yang mampu menghasilkan tenaga tinggi dan torsi yang kuat. Mesin ini dilengkapi dengan teknologi terbaru untuk meningkatkan kinerja dan efisiensi bahan bakar, sehingga memberikan akselerasi yang cepat dan responsif.</p>\r\n\r\n<p>Desain bodi Motor Thunder menampilkan garis-garis tegas dan futuristik, dengan lampu depan dan lampu belakang yang modern dan aerodinamis. Tampilan keseluruhan motor ini sangat sporty dan dinamis, mencerminkan kecepatan dan kekuatan yang dimilikinya.</p>\r\n\r\n<p>Fitur-fitur lainnya pada Motor Thunder termasuk sistem suspensi yang handal untuk kenyamanan berkendara, rem cakram yang kuat untuk keamanan pengereman yang optimal, serta sistem penggerak yang responsif untuk menghadapi berbagai kondisi jalan.</p>\r\n\r\n<p>Interior Motor Thunder juga didesain ergonomis dengan posisi berkendara yang nyaman dan kontrol yang mudah dijangkau, sehingga pengendara dapat mengontrol motor dengan baik dan menghadapi tantangan berkendara dengan percaya diri.</p>\r\n\r\n<p>Motor Thunder cocok untuk pengendara yang mengutamakan performa tinggi, kecepatan, dan tampilan yang sporty. Dengan kombinasi desain yang menarik dan performa yang handal, Motor Thunder merupakan pilihan yang ideal bagi mereka yang menginginkan pengalaman berkendara yang mengasyikkan dan mengesankan.</p>\r\n'),
(13, 'Motor Beat', 'motor-beat', 125, 15000000, 7, 10, '<p>Motor Beat adalah sepeda motor matic yang diproduksi oleh produsen otomotif terkenal. Motor ini dikenal sebagai salah satu motor yang sangat populer di Indonesia, dengan desain yang stylish, performa yang tangguh, dan kepraktisan dalam penggunaan sehari-hari. Motor Beat cocok untuk pengendara yang mengutamakan kenyamanan, efisiensi bahan bakar, dan kemudahan dalam berkendara.</p>\r\n\r\n<p>Motor Beat hadir dengan desain yang modern dan atraktif, dengan garis-garis yang halus dan aerodinamis. Motor ini memiliki tampilan yang elegan dan futuristik, yang menarik perhatian di jalanan. Selain itu, Motor Beat juga dilengkapi dengan beragam pilihan warna yang trendy, memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Beat sangat tangguh, dilengkapi dengan teknologi canggih untuk meningkatkan efisiensi bahan bakar. Motor ini mampu memberikan akselerasi yang responsif dan kecepatan yang cukup untuk menavigasi lalu lintas perkotaan yang padat. Mesin maticnya juga memberikan kenyamanan dalam pengoperasian, membuat berkendara menjadi lebih mudah dan praktis.</p>\r\n\r\n<p>Motor Beat juga menawarkan kenyamanan maksimal bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang ringkas, Motor Beat mudah untuk dikendalikan dan dikemudikan. Fitur-fitur seperti suspensi yang nyaman, sistem pengereman yang handal, serta sistem keamanan yang lengkap menjadikan Motor Beat sebagai pilihan yang aman dan nyaman untuk perjalanan sehari-hari.</p>\r\n\r\n<p>Selain itu, Motor Beat juga dilengkapi dengan fitur canggih seperti lampu LED, panel instrumen digital, dan sistem pengisian daya USB, yang menambah kenyamanan dan kepraktisan dalam penggunaan sehari-hari.</p>\r\n\r\n<p>Motor Beat adalah pilihan yang sempurna bagi mereka yang mencari sepeda motor matic yang stylish, andal, dan nyaman untuk kebutuhan harian. Dengan kombinasi desain yang menarik, performa yang tangguh, dan fitur-fitur canggih, Motor Beat menjadi salah satu motor yang sangat diminati di pasar otomotif Indonesia.</p>\r\n'),
(14, 'Vario 160', 'vario-160-2', 160, 20000000, 7, 10, '<p>Motor Vario 160 adalah sepeda motor matic yang menghadirkan gaya modern, kinerja handal, dan kenyamanan tingkat tinggi. Motor ini merupakan salah satu pilihan terbaik untuk mereka yang menginginkan pengalaman berkendara yang nyaman, efisien, dan bertenaga.</p>\r\n\r\n<p>Dengan desain yang sporty dan aerodinamis, Motor Vario 160 memiliki tampilan yang menarik dan dinamis. Dilengkapi dengan lampu LED yang stylish dan desain bodi yang futuristik, motor ini mampu menarik perhatian di jalanan. Tersedia dalam beragam pilihan warna yang menawan, Motor Vario 160 memungkinkan pengendara untuk mengungkapkan gaya pribadi mereka.</p>\r\n\r\n<p>Motor Vario 160 didukung oleh mesin 160cc yang tangguh, yang memberikan kinerja handal dan responsif. Dengan teknologi canggih, motor ini mampu menghadirkan akselerasi yang lancar, kecepatan tinggi, dan efisiensi bahan bakar yang optimal. Pengendara dapat dengan mudah menjelajahi jalan perkotaan yang padat dengan performa mesin yang andal.</p>\r\n\r\n<p>Kenyamanan menjadi salah satu fokus utama pada Motor Vario 160. Dengan suspensi depan teleskopik dan suspensi belakang ganda, motor ini mampu menghadirkan perjalanan yang halus dan nyaman, bahkan di jalan yang tidak rata. Fitur-fitur seperti kursi yang ergonomis, ruang penyimpanan yang luas, dan panel instrumen digital yang lengkap, menjadikan pengalaman berkendara semakin menyenangkan.</p>\r\n\r\n<p>Motor Vario 160 juga dilengkapi dengan beragam fitur keamanan, seperti sistem pengereman canggih dan kunci pengaman berbasis smart key, yang memberikan perlindungan tambahan bagi pengendara dan kendaraannya. Fitur-fitur canggih seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan kenyamanan dan keamanan selama berkendara.</p>\r\n\r\n<p>Motor Vario 160 adalah pilihan ideal bagi mereka yang mengutamakan gaya, performa, dan kenyamanan dalam berkendara. Dengan kombinasi desain yang modern, performa yang handal, dan fitur-fitur canggih, Motor Vario 160 menjadi pilihan yang menarik dalam pasar sepeda motor matic di Indonesia.</p>\r\n'),
(15, 'Nmax 155', 'nmax-155', 155, 37500000, 8, 21, '<p>Motor Nmax 2023 adalah sepeda motor skutik yang menjadi salah satu pilihan unggulan bagi pengendara yang menginginkan gaya premium, performa tinggi, dan kenyamanan maksimal. Motor ini menawarkan pengalaman berkendara yang modern dan mewah, dengan teknologi terbaru dan fitur-fitur canggih yang menghadirkan kenyamanan dan keamanan tingkat tinggi.</p>\r\n\r\n<p>Motor Nmax 2023 hadir dengan desain yang elegan dan futuristik, dengan garis-garis yang halus dan bentuk bodi yang aerodinamis. Tampilannya yang mewah dan modern membuat motor ini tampil menarik dan menjadi sorotan di jalanan. Selain itu, tersedia dalam pilihan warna yang menawan, Motor Nmax 2023 memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Nmax 2023 sangat tinggi, didukung oleh mesin 155cc yang bertenaga dan responsif. Motor ini mampu memberikan akselerasi yang cepat dan kecepatan tinggi, membuat perjalanan menjadi lebih menyenangkan. Mesin yang efisien dalam konsumsi bahan bakar juga membuat motor ini menjadi pilihan yang ekonomis.</p>\r\n\r\n<p>Motor Nmax 2023 juga menawarkan kenyamanan tingkat tinggi bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang luas, motor ini memberikan kenyamanan dalam berkendara jarak jauh. Fitur-fitur seperti suspensi depan teleskopik dan suspensi belakang ganda memberikan perjalanan yang halus dan stabil di berbagai kondisi jalan.</p>\r\n\r\n<p>Motor Nmax 2023 dilengkapi dengan fitur-fitur canggih seperti sistem pengereman ABS, panel instrumen digital yang lengkap, dan sistem kunci pengaman berbasis smart key. Fitur-fitur keamanan seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan keamanan saat berkendara. Selain itu, motor ini juga dilengkapi dengan fitur konektivitas Bluetooth yang memungkinkan pengendara untuk terhubung dengan smartphone mereka dan mengakses informasi penting, seperti panggilan telepon, navigasi, dan pemutaran musik.</p>\r\n\r\n<p>Motor Nmax 2023 adalah pilihan yang sangat menarik bagi mereka yang menginginkan pengalaman berkendara yang mewah, performa tinggi, dan kenyamanan tingkat tinggi. Dengan kombinasi desain yang elegan, performa yang handal, dan fitur-fitur canggih, Motor Nmax 2023 menjadi salah satu motor yang diincar di pasar sepeda motor skutik premium.</p>\r\n'),
(16, 'Thunder 250', 'thunder-250-2', 125, 10000000, 9, 10, '<p>Motor Thunder adalah sepeda motor bermotor bensin berkapasitas kecil yang diproduksi oleh pabrikan otomotif terkenal. Motor ini memiliki desain sporty yang agresif dengan tampilan yang modern dan dinamis. Dengan mesin yang bertenaga dan performa tinggi, Motor Thunder cocok untuk pengendara yang menginginkan pengalaman berkendara yang cepat dan memacu adrenalin.</p>\r\n\r\n<p>Motor Thunder dilengkapi dengan mesin bensin yang efisien dan andal, yang mampu menghasilkan tenaga tinggi dan torsi yang kuat. Mesin ini dilengkapi dengan teknologi terbaru untuk meningkatkan kinerja dan efisiensi bahan bakar, sehingga memberikan akselerasi yang cepat dan responsif.</p>\r\n\r\n<p>Desain bodi Motor Thunder menampilkan garis-garis tegas dan futuristik, dengan lampu depan dan lampu belakang yang modern dan aerodinamis. Tampilan keseluruhan motor ini sangat sporty dan dinamis, mencerminkan kecepatan dan kekuatan yang dimilikinya.</p>\r\n\r\n<p>Fitur-fitur lainnya pada Motor Thunder termasuk sistem suspensi yang handal untuk kenyamanan berkendara, rem cakram yang kuat untuk keamanan pengereman yang optimal, serta sistem penggerak yang responsif untuk menghadapi berbagai kondisi jalan.</p>\r\n\r\n<p>Interior Motor Thunder juga didesain ergonomis dengan posisi berkendara yang nyaman dan kontrol yang mudah dijangkau, sehingga pengendara dapat mengontrol motor dengan baik dan menghadapi tantangan berkendara dengan percaya diri.</p>\r\n\r\n<p>Motor Thunder cocok untuk pengendara yang mengutamakan performa tinggi, kecepatan, dan tampilan yang sporty. Dengan kombinasi desain yang menarik dan performa yang handal, Motor Thunder merupakan pilihan yang ideal bagi mereka yang menginginkan pengalaman berkendara yang mengasyikkan dan mengesankan.</p>\r\n'),
(17, 'Motor Beat 2023', 'motor-beat-2023-2', 150, 45000000, 7, 10, '<p>Motor Beat adalah sepeda motor matic yang diproduksi oleh produsen otomotif terkenal. Motor ini dikenal sebagai salah satu motor yang sangat populer di Indonesia, dengan desain yang stylish, performa yang tangguh, dan kepraktisan dalam penggunaan sehari-hari. Motor Beat cocok untuk pengendara yang mengutamakan kenyamanan, efisiensi bahan bakar, dan kemudahan dalam berkendara.</p>\r\n\r\n<p>Motor Beat hadir dengan desain yang modern dan atraktif, dengan garis-garis yang halus dan aerodinamis. Motor ini memiliki tampilan yang elegan dan futuristik, yang menarik perhatian di jalanan. Selain itu, Motor Beat juga dilengkapi dengan beragam pilihan warna yang trendy, memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Beat sangat tangguh, dilengkapi dengan teknologi canggih untuk meningkatkan efisiensi bahan bakar. Motor ini mampu memberikan akselerasi yang responsif dan kecepatan yang cukup untuk menavigasi lalu lintas perkotaan yang padat. Mesin maticnya juga memberikan kenyamanan dalam pengoperasian, membuat berkendara menjadi lebih mudah dan praktis.</p>\r\n\r\n<p>Motor Beat juga menawarkan kenyamanan maksimal bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang ringkas, Motor Beat mudah untuk dikendalikan dan dikemudikan. Fitur-fitur seperti suspensi yang nyaman, sistem pengereman yang handal, serta sistem keamanan yang lengkap menjadikan Motor Beat sebagai pilihan yang aman dan nyaman untuk perjalanan sehari-hari.</p>\r\n\r\n<p>Selain itu, Motor Beat juga dilengkapi dengan fitur canggih seperti lampu LED, panel instrumen digital, dan sistem pengisian daya USB, yang menambah kenyamanan dan kepraktisan dalam penggunaan sehari-hari.</p>\r\n\r\n<p>Motor Beat adalah pilihan yang sempurna bagi mereka yang mencari sepeda motor matic yang stylish, andal, dan nyaman untuk kebutuhan harian. Dengan kombinasi desain yang menarik, performa yang tangguh, dan fitur-fitur canggih, Motor Beat menjadi salah satu motor yang sangat diminati di pasar otomotif Indonesia.</p>\r\n'),
(18, 'Vario Terbaru', 'vario-terbaru-2', 160, 40000000, 7, 10, '<p>Motor Vario 160 adalah sepeda motor matic yang menghadirkan gaya modern, kinerja handal, dan kenyamanan tingkat tinggi. Motor ini merupakan salah satu pilihan terbaik untuk mereka yang menginginkan pengalaman berkendara yang nyaman, efisien, dan bertenaga.</p>\r\n\r\n<p>Dengan desain yang sporty dan aerodinamis, Motor Vario 160 memiliki tampilan yang menarik dan dinamis. Dilengkapi dengan lampu LED yang stylish dan desain bodi yang futuristik, motor ini mampu menarik perhatian di jalanan. Tersedia dalam beragam pilihan warna yang menawan, Motor Vario 160 memungkinkan pengendara untuk mengungkapkan gaya pribadi mereka.</p>\r\n\r\n<p>Motor Vario 160 didukung oleh mesin 160cc yang tangguh, yang memberikan kinerja handal dan responsif. Dengan teknologi canggih, motor ini mampu menghadirkan akselerasi yang lancar, kecepatan tinggi, dan efisiensi bahan bakar yang optimal. Pengendara dapat dengan mudah menjelajahi jalan perkotaan yang padat dengan performa mesin yang andal.</p>\r\n\r\n<p>Kenyamanan menjadi salah satu fokus utama pada Motor Vario 160. Dengan suspensi depan teleskopik dan suspensi belakang ganda, motor ini mampu menghadirkan perjalanan yang halus dan nyaman, bahkan di jalan yang tidak rata. Fitur-fitur seperti kursi yang ergonomis, ruang penyimpanan yang luas, dan panel instrumen digital yang lengkap, menjadikan pengalaman berkendara semakin menyenangkan.</p>\r\n\r\n<p>Motor Vario 160 juga dilengkapi dengan beragam fitur keamanan, seperti sistem pengereman canggih dan kunci pengaman berbasis smart key, yang memberikan perlindungan tambahan bagi pengendara dan kendaraannya. Fitur-fitur canggih seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan kenyamanan dan keamanan selama berkendara.</p>\r\n\r\n<p>Motor Vario 160 adalah pilihan ideal bagi mereka yang mengutamakan gaya, performa, dan kenyamanan dalam berkendara. Dengan kombinasi desain yang modern, performa yang handal, dan fitur-fitur canggih, Motor Vario 160 menjadi pilihan yang menarik dalam pasar sepeda motor matic di Indonesia.</p>\r\n'),
(19, 'Nmax Terbaru', 'nmax-terbaru', 155, 47500000, 8, 21, '<p>Motor Nmax 2023 adalah sepeda motor skutik yang menjadi salah satu pilihan unggulan bagi pengendara yang menginginkan gaya premium, performa tinggi, dan kenyamanan maksimal. Motor ini menawarkan pengalaman berkendara yang modern dan mewah, dengan teknologi terbaru dan fitur-fitur canggih yang menghadirkan kenyamanan dan keamanan tingkat tinggi.</p>\r\n\r\n<p>Motor Nmax 2023 hadir dengan desain yang elegan dan futuristik, dengan garis-garis yang halus dan bentuk bodi yang aerodinamis. Tampilannya yang mewah dan modern membuat motor ini tampil menarik dan menjadi sorotan di jalanan. Selain itu, tersedia dalam pilihan warna yang menawan, Motor Nmax 2023 memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Nmax 2023 sangat tinggi, didukung oleh mesin 155cc yang bertenaga dan responsif. Motor ini mampu memberikan akselerasi yang cepat dan kecepatan tinggi, membuat perjalanan menjadi lebih menyenangkan. Mesin yang efisien dalam konsumsi bahan bakar juga membuat motor ini menjadi pilihan yang ekonomis.</p>\r\n\r\n<p>Motor Nmax 2023 juga menawarkan kenyamanan tingkat tinggi bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang luas, motor ini memberikan kenyamanan dalam berkendara jarak jauh. Fitur-fitur seperti suspensi depan teleskopik dan suspensi belakang ganda memberikan perjalanan yang halus dan stabil di berbagai kondisi jalan.</p>\r\n'),
(20, 'Xmax Terbaru', 'xmax-terbaru-2', 150, 45000000, 8, 6, '<p>Motor Nmax 2023 adalah sepeda motor skutik yang menjadi salah satu pilihan unggulan bagi pengendara yang menginginkan gaya premium, performa tinggi, dan kenyamanan maksimal. Motor ini menawarkan pengalaman berkendara yang modern dan mewah, dengan teknologi terbaru dan fitur-fitur canggih yang menghadirkan kenyamanan dan keamanan tingkat tinggi.</p>\r\n\r\n<p>Motor Nmax 2023 hadir dengan desain yang elegan dan futuristik, dengan garis-garis yang halus dan bentuk bodi yang aerodinamis. Tampilannya yang mewah dan modern membuat motor ini tampil menarik dan menjadi sorotan di jalanan. Selain itu, tersedia dalam pilihan warna yang menawan, Motor Nmax 2023 memungkinkan pengendara untuk mengekspresikan gaya pribadi mereka.</p>\r\n\r\n<p>Performa mesin Motor Nmax 2023 sangat tinggi, didukung oleh mesin 155cc yang bertenaga dan responsif. Motor ini mampu memberikan akselerasi yang cepat dan kecepatan tinggi, membuat perjalanan menjadi lebih menyenangkan. Mesin yang efisien dalam konsumsi bahan bakar juga membuat motor ini menjadi pilihan yang ekonomis.</p>\r\n\r\n<p>Motor Nmax 2023 juga menawarkan kenyamanan tingkat tinggi bagi pengendara dan penumpangnya. Dengan posisi duduk yang ergonomis dan desain bodi yang luas, motor ini memberikan kenyamanan dalam berkendara jarak jauh. Fitur-fitur seperti suspensi depan teleskopik dan suspensi belakang ganda memberikan perjalanan yang halus dan stabil di berbagai kondisi jalan.</p>\r\n\r\n<p>Motor Nmax 2023 dilengkapi dengan fitur-fitur canggih seperti sistem pengereman ABS, panel instrumen digital yang lengkap, dan sistem kunci pengaman berbasis smart key. Fitur-fitur keamanan seperti lampu depan otomatis dan lampu hazard juga hadir untuk meningkatkan keamanan saat berkendara. Selain itu, motor ini juga dilengkapi dengan fitur konektivitas Bluetooth yang memungkinkan pengendara untuk terhubung dengan smartphone mereka dan mengakses informasi penting, seperti panggilan telepon, navigasi, dan pemutaran musik.</p>\r\n\r\n<p>Motor Nmax 2023 adalah pilihan yang sangat menarik bagi mereka yang menginginkan pengalaman berkendara yang mewah, performa tinggi, dan kenyamanan tingkat tinggi. Dengan kombinasi desain yang elegan, performa yang handal, dan fitur-fitur canggih, Motor Nmax 2023 menjadi salah satu motor yang diincar di pasar sepeda motor skutik premium.</p>\r\n'),
(21, 'Motor Terbaru', 'motor-terbaru', 150, 20000000, 7, 10, '<p>Motor dengan Spek terbaik yang ada selama ini. bangun dengan segala jenis teknologi terbaru yang membuat motor ini semakin nyaman untuk digunakan</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` int(6) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice` char(30) NOT NULL,
  `nama_pelanggan` varchar(191) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `motor_id` int(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `user_id`, `invoice`, `nama_pelanggan`, `alamat_pelanggan`, `motor_id`, `quantity`, `tanggal`) VALUES
(5, 2, '4600488420', 'wafi', 'wafi', 20, 1, '2023-04-09'),
(6, 2, '4600488420', 'wafi', 'wafi', 10, 1, '2023-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` char(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `status` enum('aktif','off') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nohp`, `email`, `password`, `role`, `status`) VALUES
(1, 'Admin Utama', '0', 'admin@admin.com', '$2y$10$cEZl1PODACJN8aNmDzskeOaBmkBT/yaNKWmll1MA5vI9JeMKaxMUy', 'admin', 'aktif'),
(2, 'wafi', '08558883118', 'abdullahalwafi16@gmail.com', '$2y$10$T7XPwJE7k0Qpv7ZmatEF3eXNYgucQjMIhB5gUkXl4eQg26Pmbw.pa', 'user', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgmotor`
--
ALTER TABLE `imgmotor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motor_id` (`motor_id`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_motor2` (`merk_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`motor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgmotor`
--
ALTER TABLE `imgmotor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9988;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imgmotor`
--
ALTER TABLE `imgmotor`
  ADD CONSTRAINT `imgmotor_ibfk_1` FOREIGN KEY (`motor_id`) REFERENCES `motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `fk_motor2` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`motor_id`) REFERENCES `motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
