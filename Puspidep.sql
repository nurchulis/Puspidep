-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 08:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Puspidep`
--

-- --------------------------------------------------------

--
-- Table structure for table `About`
--

CREATE TABLE `About` (
  `id_about` int(11) NOT NULL,
  `isi_about` text NOT NULL,
  `place` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `About`
--

INSERT INTO `About` (`id_about`, `isi_about`, `place`) VALUES
(1, '<h2 >Pusat Pengkajian Islam,Demokrasi dan Perdamaian</h2>\r\n\r\n            <p>Puspidepp adalah sebuah lembaga penelitian yang berfokus pada kajian islam,demokrasi dan perdamaian. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country,</p>\r\n            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '2'),
(2, 'ab1.jpg', '1'),
(3, 'Sejarah lahirnya puspidep yaitu: On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country.', '3'),
(4, 'Puspidep merupakan lembaga penelitian yang berfokus pada kajian keislaman, demokrasi dan generasi millenial,                              Puspidep tidak hanya melakukan kegiatan riset saja akan tetepi juga turut serta aktif melakukan kegiatan Seminar,workshop,FGd,dan sebagainya.', '4'),
(5, '  <p>Puspidep merupakan lembaga penelitian yang berfokus pada kajian <strong>keislaman</strong> <strong>demokrasi</strong> dan <strong>perdamaian</strong></p>\r\n                      <ul>\r\n                        <li>Puspidep tidak hanya melakukan kegiatan riset saja akan tetepi juga turut serta aktif melakukan kegiatan Seminar,workshop,FGd,dan sebagainya.</li>\r\n                      </ul>', '5'),
(6, 'Puspidep merupakan lembaga penelitian yang berfokus pada kajian keislaman demokrasi dan perdamaian', '6');

-- --------------------------------------------------------

--
-- Table structure for table `Blog`
--

CREATE TABLE `Blog` (
  `id_blog` int(5) NOT NULL,
  `judul_blog` varchar(40) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `tgl_blog` date NOT NULL,
  `gambar_blog` varchar(50) NOT NULL,
  `isi_blog` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Blog`
--

INSERT INTO `Blog` (`id_blog`, `judul_blog`, `kategori`, `tgl_blog`, `gambar_blog`, `isi_blog`) VALUES
(1, 'BUKU HASIL PENELITIAN', 'RECENT WOR', '2018-06-14', 'w1.jpg', 'Buku ini berisi beberapa 8 Bab, meliputi: Pendahuluan-Menuju Islamisme Populer, Menu Bacaan Pendidikan Agama Islam di SMA dan Perguruang Tinggi, Produksi wacana islam(is) di Indonesia'),
(2, 'MONOGRAF', 'RECENT WOR', '2018-06-13', 'w2.jpeg', 'Penelitian ini bertujuan untuk memetakan literatur keislaman yang tersebar dan diakses kalangan pelajar SMA dan mahasiswa di Indonesia.'),
(25, 'Mencoba 4', 'Work', '2018-06-18', 'ab2w.jpg', 'amsmals'),
(26, 'Mencoba 4', 'Work', '2018-06-18', 'ab2w.jpg', 'amsmals'),
(27, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'amsmals'),
(28, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(29, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(30, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(31, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(32, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(33, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(34, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(35, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal'),
(36, 'Mencoba 5', 'Work', '2018-06-18', 'ab2w.jpg', 'aasnal');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Portofolio`
--

CREATE TABLE `Portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `Judul_portofolio` varchar(40) NOT NULL,
  `Gambar_portofolio` varchar(100) NOT NULL,
  `isi_portofolio` text NOT NULL,
  `tgl_portofolio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Portofolio`
--

INSERT INTO `Portofolio` (`id_portofolio`, `Judul_portofolio`, `Gambar_portofolio`, `isi_portofolio`, `tgl_portofolio`) VALUES
(1, 'Work1', 'w1.jpg', 'Work', '2018-06-19'),
(2, 'Work2', 'w2.jpeg', 'Work', '2018-04-19'),
(3, 'Work3', 'w3.jpg', 'Work', '2018-02-19'),
(4, 'Work4', 'w4.jpg', 'Work', '2018-04-19'),
(5, 'Work5', 'w5.jpg', 'Work', '2018-01-19'),
(6, 'Work6', 'w6.jpg', 'Work', '2018-05-19'),
(7, 'Work 7', 'w2.jpeg', 'wokey', '2018-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `Project`
--

CREATE TABLE `Project` (
  `id_project` int(11) NOT NULL,
  `judul_project` varchar(40) NOT NULL,
  `logo_project` varchar(40) NOT NULL,
  `deskripsi_project` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Project`
--

INSERT INTO `Project` (`id_project`, `judul_project`, `logo_project`, `deskripsi_project`) VALUES
(1, 'RISET PENELITIAN', 'flaticon-worker', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(2, 'WORKSHOP', 'flaticon-sketch', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(3, 'FOCUS GROUP DISCCUSION', 'flaticon-engineering', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\n'),
(4, 'SEMINAR', 'flaticon-crane', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.');

-- --------------------------------------------------------

--
-- Table structure for table `Slider_project`
--

CREATE TABLE `Slider_project` (
  `id_slider_project` int(5) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Slider_project`
--

INSERT INTO `Slider_project` (`id_slider_project`, `Judul`, `Gambar`) VALUES
(1, 'WORKSHOP', 'ab2w.jpg'),
(2, 'FOCUS GROUP DISCUSSION', 'ab3.jpg'),
(3, 'MEDIA CONVEY INDONESIA', 'ab4.jpg'),
(4, 'DISEMINASI JAKARTA', 'ab6.jpg'),
(5, 'DISEMINASI YOGYAKARTA', 'ab5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About`
--
ALTER TABLE `About`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `Portofolio`
--
ALTER TABLE `Portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `Project`
--
ALTER TABLE `Project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `Slider_project`
--
ALTER TABLE `Slider_project`
  ADD PRIMARY KEY (`id_slider_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `About`
--
ALTER TABLE `About`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Blog`
--
ALTER TABLE `Blog`
  MODIFY `id_blog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Portofolio`
--
ALTER TABLE `Portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Project`
--
ALTER TABLE `Project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Slider_project`
--
ALTER TABLE `Slider_project`
  MODIFY `id_slider_project` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
