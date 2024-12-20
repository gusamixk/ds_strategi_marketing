-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Sep 2023 pada 10.53
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ds_sapi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(1, 'G1', 'Batuk-batuk'),
(2, 'G2', 'Bayi kelihatan lemas'),
(3, 'G3', 'Bayi menjadi rewel'),
(4, 'G4', 'Bercak kemerahan pada bagian bokong, paha dan alat kelamin'),
(5, 'G5', 'Bintik-bintik putih pada area mulut'),
(6, 'G6', 'Bintik-bintik kemerahan pada kulit bayi'),
(7, 'G7', 'Demam'),
(8, 'G8', 'Feses yang dihasilkan banyak dan cair'),
(9, 'G9', 'Gatal-gatal'),
(10, 'G10', 'Hidung tersumbat'),
(11, 'G11', 'Kulit bayi terasa panas saat disentuh'),
(12, 'G12', 'Mata merah'),
(13, 'G13', 'Mulut dan bibir pecah-pecah'),
(14, 'G14', 'Muntah-muntah'),
(15, 'G15', 'Nafsu makan menurun'),
(16, 'G16', 'Perut Kembung'),
(17, 'G17', 'Ruam kemerahan di wajah'),
(18, 'G18', 'Suhu tubuh bayi diatas 37,6 C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text,
  `solusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
(1, 'P1', 'DIARE', ' Penyakit antraks (Anthrax) atau radang limpa merupakan salah satu penyakit yang bersifat zoonosis, endemi di beberapa wilayah di Indonesia, bersifat sporadis dan perlu diwaspadai cukup. Penyebaran penyakit ini cukup luas di dunia sedangkan di Indonesia tercatat 15 propinsi yang pernah terdapat kejadian penyakit antraks termasuk salah satunya NTB. Catatan kejadian antraks pertama kali di Indonesia adalah tahun 1885.', 'Pengobatan penyakit antraks pada ternak sebetulnya tidak menguntungkan untuk strategi pengendalian jangka panjang. Ternak terserang antraks jika ditangani dengan cepat akan tertolong dengan antibiotika seperti penisilin, tetrasiklin, streptomisin dan antibiotika lainnya. Antibiotika tersebut juga sering digunakan pada orang yang secara klinis terkontaminasi antraks.'),
(2, 'P2', 'CAMPAK', 'Penyakit SE merupakan penyakit menular terutama menyerang sapi dan kerbau. Penyakit biasanya berjalan akut. Angka kematian tinggi terutama pada penderita yang telah memperlihatkan penyakit dengan jelas.', 'Pengobatan dapat dilakukan dengan antibiotika Streptomisin, khloramfenikol, teramisin dan sejenisnya. Preparat sulfa juga cukup baik untuk digunakan. Pencegahan dapat dilakukan dengan vaksinasi\r\n\r\nTernak yang terserang penyakit dapat dipotong dan dagingnya dapat dikonsumsi dibawah pengawasan Dokter Hewan/ petugas kesehatan hewan. Jaringan yang terserang terutama paru paru dimusnahkan dengan dibakar atau dikubur. Semua pakan dan minuman yang tercemar harus dimusnahkan dan wadahnya disucihamakan.'),
(3, 'P3', 'RUAM POPOK', ' Penyakit ingusan merupakan penyakit menular yang bersifat akut dan fatal pada sapi dan kerbau. Gejala yang sangat menyolok adalah keluarnya ingus yang hebat dari hidung disertai demam yang tinggi, radang mukopurelen pada selaput epitel pernapasan maupun selaput mata dan encephalitis. Penyakit ini tersebar luas diberbagai negara di dunia.', '\r\n    Menghindari memelihara atau menggembalakan secara bersamaan antara sapi/ kerbau dengan domba pada satu lokasi.\r\n    Menghindari pemasukan domba dari daerah lain, karena domba adalah sebagai carrier/ pembawa penyakit. Meningkatkan sanitasi lingkungan dan tata laksana pemeliharaan ternak.\r\n    Sampai saat ini tidak ada obat yang efektif, oleh karena itu dianjurkan ternak yang menderita penyakit ingusan agar dipotong.\r\n'),
(4, 'P4', 'RUAM DEMAM', ' Penyakit ingusan merupakan penyakit menular yang bersifat akut dan fatal pada sapi dan kerbau. Gejala yang sangat menyolok adalah keluarnya ingus yang hebat dari hidung disertai demam yang tinggi, radang mukopurelen pada selaput epitel pernapasan maupun selaput mata dan encephalitis. Penyakit ini tersebar luas diberbagai negara di dunia.', '\r\n    Menghindari memelihara atau menggembalakan secara bersamaan antara sapi/ kerbau dengan domba pada satu lokasi.\r\n    Menghindari pemasukan domba dari daerah lain, karena domba adalah sebagai carrier/ pembawa penyakit. Meningkatkan sanitasi lingkungan dan tata laksana pemeliharaan ternak.\r\n    Sampai saat ini tidak ada obat yang efektif, oleh karena itu dianjurkan ternak yang menderita penyakit ingusan agar dipotong.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_rules` int(11) NOT NULL,
  `id_gejala` int(11) DEFAULT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `belief` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_rules`
--

INSERT INTO `tb_rules` (`id_rules`, `id_gejala`, `id_penyakit`, `belief`) VALUES
(273, 16, 4, 0.5),
(272, 17, 4, 0.5),
(271, 16, 4, 0.5),
(270, 15, 4, 0.5),
(269, 14, 4, 0.5),
(268, 13, 3, 0.5),
(267, 12, 3, 0.5),
(266, 11, 3, 0.5),
(265, 10, 3, 0.5),
(264, 3, 3, 0.5),
(263, 9, 2, 0.5),
(262, 8, 2, 0.5),
(261, 4, 2, 0.5),
(260, 7, 1, 0.3),
(259, 6, 1, 0.3),
(258, 5, 1, 0.3),
(257, 4, 1, 0.3),
(256, 3, 1, 0.3),
(255, 2, 1, 0.3),
(254, 1, 1, 0.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
