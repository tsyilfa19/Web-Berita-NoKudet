-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 04:01 PM
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
-- Database: `db_nokudet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(5) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
(2, 'Tiara Syilfa', 'syilfa', 'syilfa'),
(3, 'Tiara Syilfa', 'syilfa', 'syilfa');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `kategori` enum('Music','Film') DEFAULT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi_berita` longtext NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori`, `judul`, `penulis`, `isi_berita`, `tgl_posting`, `gambar`) VALUES
(9, 'Music', 'Pencinta Musik Sejati? Dengerin 5 Lagu Barat Terbaik Rilis Maret 2019', 'Rosita A.', 'Pencinta Musik Sejati? Dengerin 5 Lagu Barat Terbaik Rilis Maret 2019\r\nMusik sudah seperti makanan yang jadi kebutuhan konsumsi setiap orang sehari-hari. Mengingat hal tersebut membuat para musisi juga semakin terpacu untuk menghadirkan karya-karya terbaik mereka. Setiap bulannya ada ratusan lagu yang rilis dari berbagai negara.\r\nBagi kamu para pencinta musik Benua Biru dan Paman Sam, berikut ini 5 lagu barat terbaik yang berhasil mengudara di Maret 2019 ini yang dihiasi dengan comebacknya beberapa musisi yang telah lama vakum. Yakin deh, pasti ada favoritmu.\r\n1.	 Sucker, The Jonas Brothers\r\nSetelah penantian yang cukup panjang, akhirnya fans dapat melepas rindu dengan boyband keluarga The Jonas Brothers. Kevin, Nick, dan Joe merilis â€Suckerâ€ di awal Maret 2019. Hanya butuh waktu dua minggu, lagu tersebut melejit di posisi pertama hot 100 Billboard. \r\n\r\n2.	 Flux, Ellie Goulding\r\nOur lady is back! Setelah beristirahat beberapa waktu karena alasan pita suara, tahun ini Ellie Goulding siap menghentak panggung musik dunia. Ia baru saja merilis single â€Fluxâ€. Sebuah lagu tentang ketegaran menjalani hidup. \r\n\r\n3.	 Only Want You, Rita Ora feat 6LACK\r\nMenggaet 6LACK, Rita Ora berhasil membuat â€Only Want Youâ€ menjadi salah satu hits di bulan ini yang wajib didengarkan pecinta musik. Dibuka dengan dialog, musik videonya benar-benar unik nih. Khas Rita Ora banget deh.\r\n\r\n4.	I Canâ€™t Get Enough, Benny Blanco, Tainy, Selena Gomez & J Balvin\r\nSelena Gomez mengejutkan publik dengan merilis kolaborasi bersama Benny Blanco, Tainy dan J Balvin lewat lagu â€I Canâ€™t Get Enoughâ€. Empat musisi berbakat kolaborasi, sudah pasti kualitas musiknya gak perlu diragukan lagi, easy listening dan siap menduduki posisi menjanjikan di tangga lagu. \r\n\r\n5.	You Should See Me in a Crown, Billie Eilish\r\nBillie Eilish merupakan satu di antara musisi muda wanita yang gak boleh dipandang sebelah mata. Ia dengan konsisten mengeluarkan lagu setiap musimnya. Di album kali ini ia memasukkan â€You Should See Me in a Crownâ€ sebagai salah satu single. Lagu ini akan membangkitkan kepercayaan diri pendengarnya.\r\n\r\n', '2019-04-26', 'artikel music1.jpg'),
(10, 'Film', 'Contoh Persona yang Baik', 'Adinda', 'Terimakasih', '2019-05-17', 'persona.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` enum('Music','Film') DEFAULT NULL,
  `isi_berita` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
