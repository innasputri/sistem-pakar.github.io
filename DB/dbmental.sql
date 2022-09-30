-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 03:24 PM
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
-- Database: `dbmental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpasien`
--

CREATE TABLE `tbpasien` (
  `idpasien` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `namaorangtua` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` int(5) NOT NULL,
  `asuransi` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpasien`
--

INSERT INTO `tbpasien` (`idpasien`, `nama`, `kelamin`, `umur`, `alamat`, `noip`, `tanggal`, `whatsapp`, `namaorangtua`, `prodi`, `semester`, `asuransi`) VALUES
(48, 'innas putri', 'Wanita', '23', 'babadan', '127.0.0.1', '2022-06-09', '0', 'agung', '0', 0, ''),
(49, 'riki', 'Laki-laki', '23', 'pono', '127.0.0.1', '2022-06-10', '0', '', '0', 0, ''),
(50, 'agung', 'Wanita', '20', 'jogja', '127.0.0.1', '2022-06-10', '0', 'ponorogo', '0', 0, ''),
(51, 'prayoga', 'Laki-laki', '23', 'madiun', '127.0.0.1', '2022-06-10', '0', 'susilo', '0', 0, ''),
(52, 'hasna', 'Wanita', '22', 'bungkal', '127.0.0.1', '2022-06-13', '0', 'rudi', '0', 0, ''),
(53, 'zara', 'Wanita', '17', 'surabaya', '127.0.0.1', '2022-06-16', '0', 'syahhid', '0', 0, ''),
(54, 'dinda', 'Wanita', '22', 'ponorogo', '127.0.0.1', '2022-06-16', '0', 'wahyu', '0', 0, ''),
(55, 'rini', 'Wanita', '20', 'madiun', '127.0.0.1', '2022-06-16', '0', 'susilo', '0', 0, ''),
(56, 'yuli', 'Laki-laki', '19', 'skniowc', '127.0.0.1', '2022-06-17', '0', 'mkwnk', '0', 0, ''),
(57, 'Innas Putri Agung', 'Wanita', '8', 'Teknik Informatika', '127.0.0.1', '2022-06-20', '0', 'Agung Sasono Maito', '', 0, ''),
(58, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-20', '0', 'Agung Sasono Maito', '', 0, ''),
(59, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-20', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, ''),
(60, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-20', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, ''),
(61, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-20', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'Tidak Punya'),
(62, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-21', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'Tidak Punya'),
(63, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-21', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'Tidak Punya'),
(64, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-22', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'Tidak Punya'),
(65, 'Innas Putri Agung', 'Laki-laki', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-22', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'ASKES'),
(66, 'Innas Putri Agung', 'Wanita', '22', 'Perum Bumi Cokromenggalan Damai Blok A-11, Ponorog', '127.0.0.1', '2022-06-22', '2147483647', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'BPJS Mandiri'),
(67, 'Innas Putri Agung', 'Wanita', '22', 'ponorogo', '127.0.0.1', '2022-06-23', '08993187821', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'KIS'),
(68, 'innas putri', 'Laki-laki', '22', 'ponorogo', '127.0.0.1', '2022-06-23', '08993187821', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'ASKES'),
(69, 'Nayni', 'Wanita', '22', 'ponorogo', '127.0.0.1', '2022-06-23', '08993187821', 'agung', 'Teknik Informatika', 8, 'Tidak Punya'),
(70, 'Innas Putri Agung', 'Laki-laki', '1', 'ponorogo', '127.0.0.1', '2022-06-23', '08993187821', 'Agung Sasono Maito', 'Teknik Informatika', 8, 'Tidak Punya'),
(71, 'Sari', 'Wanita', '20', 'jakarta', '127.0.0.1', '2022-06-24', '08967536748', 'galuh', 'fisip', 8, 'KIS'),
(72, 'tono', 'Laki-laki', '24', 'bandung', '127.0.0.1', '2022-06-24', '089478739746', 'surti', 'agama islam', 5, 'Tidak Punya'),
(73, 'fitri', 'Wanita', '27', 'ponorogo', '127.0.0.1', '2022-06-24', '0878598498564', 'hjfh', 'elektronika', 4, 'BPJS Mandiri'),
(74, 'yuni', 'Wanita', '23', 'dbvjbxj', '127.0.0.1', '2022-06-29', '98t979e', 'dbngkuhbjkv', 'sdhjkvnx', 9, 'Tidak Punya'),
(75, 'sudghjkvbcn', 'Laki-laki', 'cgj', 'duhvjknxz', '127.0.0.1', '2022-06-29', 'shuifhknx,v', 'dushvknclx', 'dhvjknx', 0, 'ASKES'),
(76, 'udin', 'Wanita', '45', 'vmfgklx,g', '127.0.0.1', '2022-06-29', 'gmvbm,vb,', 'xfnjrdfjncfg', 'fjditdcn', 5, 'KIS'),
(77, 'jihun', 'Laki-laki', '19', 'bandung', '127.0.0.1', '2022-07-18', '08927498289', 'suyono', 'hukum', 5, 'ASKES'),
(78, 'suli', 'Wanita', '34', 'solo', '127.0.0.1', '2022-07-18', '328409735', 'susilo', 'english', 8, 'BPJS Mandiri'),
(79, 'suli', 'Wanita', '678', 'jakarta', '127.0.0.1', '2022-07-18', '8647576899089', 'suhar', 'teknik', 5, 'BPJS Mandiri'),
(80, 'jibleng', 'Laki-laki', '18', 'boyolali', '127.0.0.1', '2022-07-18', '03798257', 'agung', 'teknik', 10, 'KIS'),
(81, 'risna', '0', '18', 'bandung', '127.0.0.1', '2022-07-19', '97056328', 'suri', 'elektro', 9, 'KIS'),
(82, 'jdshgui', '0', '483', 'sjhfkhjk', '127.0.0.1', '2022-07-19', '32895723', 'shdfhioa', 'hsahf', 12, 'ASKES'),
(83, 'dlsjgl', '0', '793', 'snfhkjisohv', '127.0.0.1', '2022-07-19', '375893', '', 'hkdshj', 89, 'KIS'),
(84, 'dlsjgl', '0', '793', 'snfhkjisohv', '127.0.0.1', '2022-07-19', '375893', '', 'hkdshj', 89, 'KIS'),
(85, 'dlsjgl', '0', '793', 'snfhkjisohv', '127.0.0.1', '2022-07-19', '375893', '', 'hkdshj', 89, 'KIS'),
(86, 'dlsjgl', '0', '793', 'snfhkjisohv', '127.0.0.1', '2022-07-19', '375893', '', 'hkdshj', 89, 'KIS'),
(87, 'dlsjgl', '0', '793', 'snfhkjisohv', '127.0.0.1', '2022-07-19', '375893', '', 'hfgik', 89, 'KIS'),
(88, 'dlsjgl', '0', '793', 'snfhkjisohv', '127.0.0.1', '2022-07-19', '375893', '', 'hfgik', 89, 'KIS'),
(89, 'oisdlgjkl', '0', '437', 'jkdhkfndv', '127.0.0.1', '2022-07-19', 'kdnsknk', '', 'dksh', 34, '0'),
(90, 'Yunita Sari', 'Wanita', '21', 'Madiun', '127.0.0.1', '2022-07-19', '08993187821', 'Wahyu Danang', 'Ilmu Komunikasi', 6, 'ASKES');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(3) NOT NULL,
  `username_user` varchar(30) NOT NULL DEFAULT '',
  `password_user` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `username_user`, `password_user`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(20, 'G20', 'Saya merasa takut tanpa alasan yang jelas'),
(19, 'G19', 'Saya menyadari perubahan detak jantung, walaupun tidak sehabis melakukan aktivitas'),
(18, 'G18', 'Saya merasa bahwa saya mudah tersinggung'),
(17, 'G17', 'Saya merasa bahwa saya tidak berharga sebagai seorang manusia'),
(16, 'G16', 'Saya merasa tidak antusias dalam hal apapun'),
(14, 'G14', 'Saya sulit untuk sabar dalam menghadapi gangguan terhadap hal yang sedang saya lakukan'),
(15, 'G15', 'Saya merasa hampir panik'),
(13, 'G13', 'Saya merasa sedih dan tertekan'),
(12, 'G12', 'Saya merasa sulit untuk bersantai'),
(11, 'G11', 'Saya sedang merasa gelisah'),
(10, 'G10', 'Saya merasa tidak ada hal yang dapat diharapkan di masa depan'),
(9, 'G9', 'Saya merasa khawatir dengan situasi diaman saya mungkin menjadi panik dan mempermalukan diri sendiri'),
(8, 'G8', 'Saya merasa telah mengahabiskan banyak energi disaat merasa cemas'),
(7, 'G7', 'Saya merasa gemetar (misalnya : pada tangan)'),
(5, 'G5', 'Saya sepertinya tidak kuat lagi untuk melakukan suatu kegiatan'),
(6, 'G6', 'Saya cenderung bereaksi berlebihan terhadap suatu situasi'),
(4, 'G4', 'Saya mengalami kesulitan bernafas (misalnya : sering terengah-engah atau tidak dapat bernafas padahal tidak melakukan aktivitas fisik sebelumnya'),
(2, 'G2', 'Saya merasa mulut saya sering kering'),
(3, 'G3', 'Saya sama sekali tidak dapat merasakan perasaan positif'),
(1, 'G1', 'Saya merasa bahwa diri saya menjadi marah karena hal-hal sepele'),
(21, 'G21', 'Saya merasa bahwa hidup tidak bermanfaat atau berarti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `idhasil` int(5) NOT NULL,
  `idpasien` int(5) NOT NULL,
  `kdpenyakit` varchar(4) NOT NULL,
  `persentase` double NOT NULL,
  `tanggal` datetime NOT NULL,
  `gejala_terpilih` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`idhasil`, `idpasien`, `kdpenyakit`, `persentase`, `tanggal`, `gejala_terpilih`) VALUES
(139, 49, 'P1', 55.75, '2022-06-10 09:20:38', ''),
(140, 49, 'P2', 22.57, '2022-06-10 09:20:39', ''),
(141, 51, 'P1', 60, '2022-06-10 14:33:31', ''),
(144, 53, 'P1', 60.26, '2022-06-16 15:24:25', ''),
(145, 53, 'P2', 32.82, '2022-06-16 15:24:25', ''),
(146, 54, 'P1', 60, '2022-06-16 19:08:00', ''),
(147, 62, 'P1', 60, '2022-06-21 03:49:01', ''),
(190, 68, 'P1', 60, '2022-06-23 20:01:06', ''),
(239, 71, 'P2', 60, '2022-06-24 11:35:09', ''),
(240, 72, 'P1', 83.49, '2022-06-24 11:36:53', ''),
(241, 72, 'P2', 6.94, '2022-06-24 11:36:53', ''),
(293, 78, 'P2', 70, '2022-07-18 13:43:18', ''),
(294, 79, 'P2', 70, '2022-07-18 13:49:25', ''),
(302, 90, 'P3', 99.2, '2022-07-19 10:16:03', ''),
(303, 90, 'P3', 99.2, '2022-07-19 10:17:33', ''),
(304, 90, 'P3', 99.2, '2022-07-19 10:17:59', ''),
(305, 90, 'P3', 99.2, '2022-07-19 10:18:46', ''),
(306, 90, 'P3', 99.2, '2022-07-19 16:20:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
(3, 'P3', 'Gangguan Depresi (Depression Disorder)', 'Depresi adalah gangguan mental yang umumnya ditandai dengan perasaan depresi, kehilangan minat atau kesenangan, penurunan energi, perasaan bersalah atau rendah diri, sulit tidur atau nafsu makan berkurang, perasaan kelelahan dan kurang konsentrasi. Kondisi tersebut dapat menjadi kronis dan berulang, dan secara substansial dapat mengganggu kemampuan individu dalam menjalankan tanggung jawab sehari- hari.', 'Hal-hal yang dapat meringankan gangguan depresi yaiut dengan olahraga teratur membantu menciptakan perasaan positif dan meningkatkan suasana hati. Mendapatkan kualitas tidur yang cukup secara teratur, makan makanan yang sehat dan menghindari alkohol (depresan) juga dapat membantu mengurangi gejala depresi.'),
(1, 'P1', 'Gangguan Kecemasan (Anxiety Disorder) ', 'Kecemasan adalah perasaan subjektif dari ketegangan, ketakutan, kegugupan, dan kekhawatiran yang terkait dengan gairah sistem saraf. Pada konteks pendidikan, kecemasan studi adalah situasi khusus yang merujuk pada kondisi kecemasan yang dialami selama proses studi dan bisa menjadi gangguan kinerja akademik. ', 'Berikut ini  beberapa cara untuk mengurangi gangguan kecemasan yang bisa dilakukan yaitu berolahraga, meditasi, relaksasi, menulis, aromaterapi dan meminum teh herbal untuk menenangkan.'),
(2, 'P2', 'Gangguan Stres (Stress Disorder)', 'Stres merupakan pengalaman subyektif yang didasarkan pada persepsi seseorang terhadap situasi yang dihadapinya. Stres berkaitan dengan kenyataan yang tidak sesuai dengan harapan atau situasi yang menekan. Kondisi ini mengakibatkan perasaan cemas, marah dan frustrasi.\r\n', 'Berikut ini adalah beberapa cara untuk mengatasi gangguan stres yaitu berolahrga secara rutin, makan sehat, tidur cukup, hidup bersih, melakukan kegiatan sesuaikan dengan minat dan kemampuan, tenangkan pikiran dan berpikiran positif.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_rules` int(11) NOT NULL,
  `id_problem` int(11) DEFAULT NULL,
  `id_evidence` int(11) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id_rules`, `id_problem`, `id_evidence`, `cf`) VALUES
(2, 1, 11, 0.7),
(61, 3, 10, 0.8),
(5, 1, 8, 0.8),
(8, 1, 6, 0.6),
(55, 2, 3, 0.7),
(12, 1, 1, 0.7),
(64, 3, 17, 0.6),
(15, 2, 15, 0.4),
(21, 2, 2, 0.7),
(66, 1, 20, 0.5),
(24, 3, 12, 0.8),
(30, 2, 19, 0.5),
(54, 3, 3, 0.7),
(35, 2, 4, 0.6),
(56, 1, 4, 0.6),
(57, 3, 5, 0.8),
(58, 2, 6, 0.6),
(39, 2, 7, 0.7),
(59, 2, 8, 0.8),
(41, 2, 9, 0.5),
(60, 1, 9, 0.5),
(62, 3, 13, 0.8),
(44, 1, 14, 0.7),
(45, 1, 15, 0.4),
(46, 3, 15, 0.4),
(63, 3, 16, 0.8),
(49, 1, 18, 0.6),
(65, 1, 19, 0.5),
(51, 2, 20, 0.5),
(67, 3, 21, 0.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpasien`
--
ALTER TABLE `tbpasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpasien`
--
ALTER TABLE `tbpasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `idhasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
