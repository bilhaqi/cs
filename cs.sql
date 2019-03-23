-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2019 pada 15.09
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id_chat` int(11) NOT NULL,
  `id_pengirim` varchar(12) NOT NULL,
  `id_penerima` varchar(12) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_pesan` date NOT NULL,
  `waktu_pesan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat`
--

INSERT INTO `tbl_chat` (`id_chat`, `id_pengirim`, `id_penerima`, `pesan`, `tgl_pesan`, `waktu_pesan`) VALUES
(1, 'e', 'e', 'e', '2019-03-13', '10:05:08'),
(2, 'dasd', 'd', 'd', '2019-03-19', '01:03:00'),
(3, '', '', '', '2019-03-23', '10:20:02'),
(4, '1', '2', 'dasdasdasda', '2019-03-23', '10:20:02'),
(5, '1', '2', 'dsadsadas', '2019-03-23', '10:20:02'),
(6, '2', '1', 'dsadasd', '2019-03-05', '00:05:05'),
(7, '1', '2', 'dsad', '2019-03-23', '10:20:02'),
(8, '2', '1', 'dsadsad', '2019-03-23', '10:20:02'),
(9, '2', '1', 'bil', '2019-03-23', '10:20:02'),
(10, '2', '1', 'dasdas', '2019-03-23', '10:20:02'),
(11, '2', '1', 'dadsadasdasdasd', '2019-03-23', '10:20:02'),
(12, '2', '1', 'dsadasd', '2019-03-23', '10:20:02'),
(13, '2', '1', 'hay bilhaqi', '2019-03-23', '10:20:02'),
(14, '2', '1', 'okey', '2019-03-23', '10:20:02'),
(15, '2', '1', 'how are you ?', '2019-03-23', '10:20:02'),
(16, '1', '2', 'im fine', '2019-03-23', '10:20:02'),
(17, '2', '1', 'are you okay ?', '2019-03-23', '10:20:02'),
(18, '1', '2', ' im fine to thank you', '2019-03-23', '10:20:02'),
(19, '1', '2', 'okey', '2019-03-23', '10:20:02'),
(20, '2', '1', 'im fine too', '2019-03-23', '10:20:02'),
(21, '3', '1', 'dsadas', '2019-03-19', '10:03:08'),
(22, '1', '3', 'apo dang', '2019-03-23', '10:20:02'),
(23, '3', '1', 'aden kini lah jadi demisioner haa', '2019-03-23', '10:20:02'),
(24, '1', '3', ' trus masalah untuak den ?', '2019-03-23', '10:20:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `foto_user` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `foto_user`, `tgl_lahir`) VALUES
(1, 'bilhaqi', 'bilhaqi28', '@BilHaqi28', 'bilhaqi.jpg', '1999-06-28'),
(2, 'dion', 'dion', '@DionMedinastra', 'dion.jpg', '1999-12-24'),
(3, 'dio', 'dio', '@DioPratama', 'dio.jpg', '2019-03-20'),
(4, 'monik', 'monik', '@MonikhaPutri', 'monik.jpg', '2019-03-13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
