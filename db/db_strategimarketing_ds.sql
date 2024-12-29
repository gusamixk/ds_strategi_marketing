-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 01:08 PM
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
-- Database: `db_strategimarketing_ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id` int(11) NOT NULL,
  `kdkriteria` varchar(5) DEFAULT NULL,
  `kriteria` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id`, `kdkriteria`, `kriteria`) VALUES
(1, 'KS1', 'Meningkatkan visibilitas merek di mesin pencari'),
(2, 'KS2', 'Meningkatkan jumlah pengunjung atau trafik organik'),
(3, 'KS3', 'Meningkatkan konversi dari pengunjung menjadi pelanggan'),
(4, 'KS4', 'Menggunakan analitik untuk memonitor kinerja kampanye'),
(5, 'KS5', 'Menyesuaikan iklan berdasarkan demografi audiens'),
(6, 'KS6', 'Meningkatkan interaksi dengan audiens (like, comment)'),
(7, 'KS7', 'Menarik perhatian audiens baru melalui media sosial'),
(8, 'KS8', 'Menyediakan informasi yang bernilai melalui konten'),
(9, 'KS9', 'Menghasilkan video yang mengedukasi atau menghibur'),
(10, 'KS10', 'Memanfaatkan visual seperti gambar dan infografis'),
(11, 'KS11', 'Meningkatkan loyalitas pelanggan melalui hubungan jangka panjang'),
(12, 'KS12', 'Meningkatkan retensi pelanggan melalui konten yang relevan'),
(13, 'KS13', 'Melakukan segmentasi audiens berdasarkan perilaku online'),
(14, 'KS14', 'Melakukan penargetan ulang pada audiens yang sudah berinteraksi'),
(15, 'KS15', 'Menggunakan kata kunci atau hashtag untuk menjangkau audiens'),
(16, 'KS16', 'Menargetkan audiens melalui lokasi geografis'),
(17, 'KS17', 'Menyediakan penawaran atau diskon untuk meningkatkan pembelian'),
(18, 'KS18', 'Memperkenalkan produk baru dengan fitur berbeda dari pesaing'),
(19, 'KS19', 'Memperluas jangkauan audiens melalui kemitraan atau kolaborasi'),
(20, 'KS20', 'kredibilitas merek dengan ulasan dan testimoni'),
(21, 'KS21', 'Mengoptimalkan biaya iklan dengan penargetan yang lebih tepat'),
(22, 'KS22', 'Menggunakan data analitik untuk mengoptimalkan iklan'),
(23, 'KS23', 'Mengelola dan melacak ROI dari kampanye pemasaran'),
(24, 'KS24', 'Menggunakan testimoni dan studi kasus untuk membangun kepercayaan'),
(25, 'KS25', 'Mengembangkan konten berbasis cerita untuk menghubungkan audiens dengan merek'),
(26, 'KS26', 'Mengoptimalkan pengalaman pengguna di website (UX)'),
(27, 'KS27', 'Membuat konten yang dapat dibagikan di media sosial'),
(28, 'KS28', 'Menyusun strategi pemasaran berdasarkan data dan insight'),
(29, 'KS29', 'Menyediakan konten berkualitas tinggi untuk meningkatkan kredibilitas merek'),
(30, 'KS30', 'Membuat program loyalitas untuk pelanggan setia'),
(31, 'KS31', 'Meningkatkan interaksi langsung dengan audiens melalui chat langsung'),
(32, 'KS32', 'Membuat aplikasi mobile atau solusi berbasis mobile'),
(33, 'KS33', 'Menggunakan gamifikasi untuk meningkatkan engagement'),
(34, 'KS34', 'Menggunakan data A/B testing untuk mengoptimalkan konten dan iklan'),
(35, 'KS35', 'Mempromosikan produk atau layanan melalui email marketing'),
(36, 'KS36', 'Menyusun strategi PR berbasis media untuk menjangkau audiens lebih luas'),
(37, 'KS37', 'Menargetkan audiens melalui pencarian suara'),
(38, 'KS38', 'Menyediakan penawaran waktu terbatas untuk meningkatkan urgensi'),
(39, 'KS39', 'Menggunakan platform iklan berbasis lokasi untuk menargetkan audiens secara lebih efektif'),
(40, 'KS40', 'Mengoptimalkan halaman landing page untuk konversi yang lebih baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_rules` int(11) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `id_strategi` int(11) DEFAULT NULL,
  `belief` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id_rules`, `id_kriteria`, `id_strategi`, `belief`) VALUES
(14, 3, 1, 0.85),
(191, 12, 3, 0.9),
(12, 2, 1, 0.7),
(5, 13, 2, 0.75),
(11, 1, 1, 0.75),
(7, 1, 3, 0.75),
(9, 11, 3, 0.7),
(15, 3, 2, 0.85),
(17, 3, 4, 0.85),
(19, 3, 7, 0.85),
(22, 3, 10, 0.85),
(24, 4, 2, 0.6),
(28, 4, 8, 0.6),
(29, 4, 8, 0.6),
(192, 22, 1, 0.6),
(32, 5, 4, 0.65),
(35, 5, 8, 0.65),
(36, 5, 10, 0.65),
(37, 6, 2, 0.8),
(38, 6, 4, 0.8),
(39, 6, 6, 0.8),
(40, 6, 8, 0.8),
(41, 7, 2, 0.7),
(42, 7, 4, 0.7),
(43, 7, 8, 0.7),
(44, 8, 1, 0.6),
(45, 8, 2, 0.6),
(46, 8, 3, 0.6),
(47, 8, 6, 0.6),
(48, 8, 9, 0.6),
(190, 5, 2, 0.65),
(50, 9, 6, 0.8),
(52, 9, 9, 0.8),
(53, 10, 2, 0.87),
(54, 10, 3, 0.87),
(56, 10, 6, 0.87),
(57, 10, 8, 0.87),
(58, 10, 9, 0.87),
(61, 11, 5, 0.7),
(62, 11, 5, 0.7),
(63, 11, 6, 0.7),
(64, 11, 8, 0.7),
(65, 11, 9, 0.7),
(66, 12, 2, 0.9),
(69, 12, 8, 0.9),
(70, 13, 1, 0.75),
(71, 13, 2, 0.75),
(72, 13, 3, 0.75),
(73, 13, 4, 0.75),
(75, 13, 7, 0.75),
(76, 13, 8, 0.75),
(78, 13, 10, 0.75),
(79, 14, 7, 0.85),
(80, 14, 8, 0.85),
(82, 14, 10, 0.85),
(83, 15, 1, 0.6),
(84, 15, 2, 0.6),
(85, 15, 8, 0.6),
(86, 15, 9, 0.6),
(87, 16, 7, 0.78),
(88, 16, 8, 0.78),
(89, 16, 10, 0.78),
(90, 17, 2, 0.85),
(91, 17, 4, 0.85),
(92, 17, 5, 0.85),
(93, 17, 8, 0.85),
(96, 18, 2, 0.65),
(97, 18, 3, 0.65),
(98, 18, 4, 0.65),
(100, 18, 9, 0.65),
(101, 19, 2, 0.7),
(102, 19, 4, 0.7),
(103, 19, 8, 0.7),
(104, 19, 9, 0.7),
(106, 20, 2, 0.75),
(107, 20, 3, 0.75),
(108, 20, 8, 0.75),
(109, 20, 9, 0.75),
(110, 21, 5, 0.65),
(112, 8, 8, 0.65),
(113, 21, 8, 0.65),
(116, 22, 7, 0.6),
(117, 22, 8, 0.6),
(118, 22, 10, 0.6),
(120, 23, 5, 0.6),
(121, 23, 7, 0.6),
(122, 23, 8, 0.6),
(124, 23, 10, 0.6),
(125, 24, 2, 0.7),
(126, 24, 3, 0.7),
(127, 24, 4, 0.7),
(128, 24, 5, 0.7),
(131, 25, 2, 0.7),
(132, 25, 3, 0.7),
(133, 25, 4, 0.7),
(134, 25, 6, 0.7),
(135, 25, 9, 0.7),
(136, 26, 1, 0.85),
(137, 26, 7, 0.65),
(139, 27, 2, 0.8),
(140, 27, 3, 0.8),
(141, 27, 6, 0.8),
(142, 28, 1, 0.7),
(143, 28, 3, 0.7),
(144, 28, 7, 0.7),
(145, 28, 8, 0.7),
(146, 28, 9, 0.7),
(148, 29, 2, 0.8),
(149, 29, 3, 0.8),
(150, 29, 9, 0.8),
(151, 30, 4, 0.65),
(152, 30, 5, 0.65),
(153, 30, 8, 0.65),
(154, 31, 4, 0.8),
(155, 31, 8, 0.8),
(157, 32, 2, 0.6),
(159, 33, 2, 0.9),
(160, 33, 4, 0.9),
(161, 33, 6, 0.9),
(162, 34, 1, 0.9),
(163, 34, 2, 0.9),
(164, 34, 3, 0.9),
(165, 34, 6, 0.9),
(189, 22, 1, 0.6),
(201, 4, 1, 0),
(172, 36, 2, 0.9),
(173, 36, 4, 0.9),
(174, 36, 6, 0.9),
(175, 36, 8, 0.9),
(176, 36, 9, 0.9),
(177, 37, 1, 0.65),
(179, 38, 2, 0.9),
(180, 38, 4, 0.9),
(181, 38, 8, 0.9),
(182, 38, 10, 0.9),
(193, 35, 9, 0.75),
(184, 39, 10, 0.7),
(185, 40, 1, 0.85),
(186, 40, 7, 0.85),
(187, 40, 10, 0.85);

-- --------------------------------------------------------

--
-- Table structure for table `tb_strategi`
--

CREATE TABLE `tb_strategi` (
  `id` int(11) NOT NULL,
  `kdstrategi` varchar(5) DEFAULT NULL,
  `nama_strategi` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_strategi`
--

INSERT INTO `tb_strategi` (`id`, `kdstrategi`, `nama_strategi`, `definisi`, `solusi`) VALUES
(1, 'DM1', 'SEO (Search Engine Optimization)', 'SEO adalah proses mengoptimalkan situs web atau konten untuk mendapatkan peringkat yang lebih tinggi di halaman hasil mesin pencari (SERP). Tujuannya adalah untuk meningkatkan visibilitas organik, menarik lebih banyak pengunjung, dan mendorong konversi melalui kata kunci yang relevan.', 'Untuk mengimplementasikan strategi SEO mencakup penelitian kata kunci yang mendalam untuk menentukan istilah pencarian yang relevan, mengoptimalkan konten dengan kata kunci tersebut, meningkatkan kecepatan situs web untuk memberikan pengalaman pengguna yang lebih baik, dan membangun backlink berkualitas dari situs terpercaya. Selain itu, memastikan situs web ramah seluler dan responsif juga menjadi langkah penting, diikuti dengan pemantauan performa secara rutin menggunakan alat seperti Google Analytics dan Google Search Console untuk mengidentifikasi peluang peningkatan lebih lanjut.'),
(2, 'DM2', 'Social Media Marketing ', 'Social Media Marketing adalah strategi pemasaran yang menggunakan platform media sosial untuk mempromosikan produk, jasa, atau merek kepada audiens yang lebih luas. Tujuan utamanya adalah membangun kesadaran merek, menciptakan interaksi dengan pengguna, serta meningkatkan konversi dan loyalitas pelanggan.', 'Untuk menerapkan strategi Social Media Marketing meliputi pembuatan konten yang menarik dan relevan dengan audiens, konsistensi dalam jadwal unggahan untuk menjaga keterlibatan pengguna, serta penggunaan analitik untuk memahami perilaku dan preferensi audiens. Selain itu, memanfaatkan fitur iklan berbayar pada platform media sosial dapat meningkatkan jangkauan secara signifikan, sementara berinteraksi langsung dengan pengguna melalui komentar dan pesan pribadi dapat menciptakan hubungan yang lebih erat dengan pelanggan.'),
(3, 'DM3', 'Content Marketing', 'Content Marketing adalah strategi pemasaran yang berfokus pada pembuatan dan distribusi konten yang bernilai, relevan, dan konsisten untuk menarik dan mempertahankan audiens tertentu. Strategi ini bertujuan untuk mendorong tindakan konsumen yang menguntungkan, seperti pembelian produk atau peningkatan loyalitas terhadap merek.', 'Untuk menjalankan strategi Content Marketing mencakup identifikasi audiens target untuk memastikan konten yang dibuat sesuai dengan kebutuhan dan minat mereka. Membuat kalender konten yang terorganisir membantu dalam menjaga konsistensi distribusi konten. Selain itu, diversifikasi format konten, seperti artikel, video, infografik, dan podcast, dapat meningkatkan daya tarik kepada berbagai jenis audiens. Mengoptimalkan konten untuk SEO memastikan visibilitas yang lebih tinggi, sedangkan distribusi melalui berbagai saluran, termasuk media sosial dan email marketing, memperluas jangkauan. Terakhir, analisis performa konten secara berkala memungkinkan penyesuaian untuk mencapai hasil yang lebih baik.'),
(4, 'DM4', 'Influencer Marketing ', 'Influencer Marketing adalah strategi pemasaran yang melibatkan kolaborasi dengan individu berpengaruh atau influencer untuk mempromosikan produk atau layanan. Tujuannya adalah untuk meningkatkan kesadaran merek, memperluas jangkauan audiens, dan membangun kepercayaan melalui rekomendasi dari pihak yang memiliki pengaruh besar pada target pasar.', 'Untuk menerapkan Influencer Marketing meliputi identifikasi influencer yang sesuai dengan nilai dan target audiens merek, baik berdasarkan niche maupun tingkat pengaruh mereka (nano, micro, atau macro influencer). Menyusun kerjasama yang jelas dan transparan, termasuk tujuan kampanye dan hasil yang diharapkan, sangat penting untuk kesuksesan strategi ini. Selain itu, menyediakan kebebasan kreatif kepada influencer untuk menyampaikan pesan dengan cara yang autentik dapat meningkatkan kepercayaan audiens. Melacak performa kampanye melalui metrik seperti engagement, reach, dan konversi juga membantu mengevaluasi efektivitas strategi.'),
(5, 'DM5', 'Affiliate Marketing', 'Affiliate Marketing adalah strategi pemasaran berbasis kinerja di mana mitra afiliasi mempromosikan produk atau layanan suatu bisnis dan menerima komisi atas setiap penjualan atau tindakan yang dihasilkan melalui tautan afiliasi mereka. Strategi ini memungkinkan bisnis untuk memperluas jangkauan tanpa investasi besar di muka.', 'Untuk menerapkan Affiliate Marketing melibatkan pembuatan program afiliasi yang jelas dengan struktur komisi yang menarik bagi mitra. Memilih mitra afiliasi yang relevan dan memiliki audiens yang sesuai dengan target pasar sangat penting untuk keberhasilan strategi ini. Selain itu, menyediakan alat pemasaran seperti banner, tautan, dan materi promosi lainnya dapat membantu afiliasi memaksimalkan usaha mereka. Pelacakan dan analisis kinerja program melalui perangkat lunak afiliasi memungkinkan bisnis untuk mengidentifikasi afiliasi terbaik dan menyesuaikan strategi guna meningkatkan hasil.'),
(6, 'DM6', 'Video Marketing', 'Video Marketing adalah strategi pemasaran yang menggunakan konten video untuk mempromosikan produk, layanan, atau merek. Video ini dapat berupa iklan, tutorial, testimoni pelanggan, atau cerita merek yang dirancang untuk menarik perhatian, membangun hubungan emosional, dan mendorong tindakan konsumen.', 'Untuk menjalankan Video Marketing mencakup pembuatan video yang sesuai dengan target audiens, dengan fokus pada pesan yang jelas dan menarik. Konten video harus dioptimalkan untuk berbagai platform, seperti YouTube, media sosial, atau situs web, dengan mempertimbangkan durasi dan format yang ideal. Selain itu, menambahkan elemen interaktif, seperti ajakan bertindak (CTA), dapat mendorong lebih banyak keterlibatan. Strategi distribusi yang efektif dan penggunaan fitur analitik untuk memantau performa video juga penting untuk mengevaluasi dampaknya dan mengidentifikasi peluang peningkatan.'),
(7, 'DM7', 'Web Analytics', 'Web Analytics adalah strategi untuk mengumpulkan, menganalisis, dan melaporkan data dari aktivitas pengunjung di situs web. Tujuannya adalah untuk memahami perilaku pengguna, mengukur performa situs, dan mendapatkan wawasan yang dapat digunakan untuk meningkatkan pengalaman pengguna serta mengoptimalkan konversi.', 'Untuk menerapkan Web Analytics mencakup penggunaan alat seperti Google Analytics, Hotjar, atau Adobe Analytics untuk melacak metrik penting, seperti jumlah pengunjung, tingkat konversi, dan rasio pentalan. Mengidentifikasi halaman dengan kinerja terbaik dan yang memerlukan perbaikan dapat membantu dalam pengambilan keputusan strategis. Selain itu, mendefinisikan tujuan yang jelas, seperti pelacakan pembelian atau formulir yang diisi, akan memberikan fokus dalam analisis data. Data yang dikumpulkan harus diterjemahkan menjadi langkah-langkah tindakan untuk meningkatkan desain situs, navigasi, atau strategi pemasaran digital.'),
(8, 'DM8', 'Remarketing ', 'Remarketing adalah strategi pemasaran yang menargetkan kembali pengguna yang sebelumnya telah berinteraksi dengan situs web atau aplikasi bisnis tetapi belum mengambil tindakan yang diinginkan, seperti melakukan pembelian. Strategi ini bertujuan untuk meningkatkan konversi dengan menyampaikan pesan atau penawaran yang relevan melalui iklan yang dipersonalisasi.', 'Untuk menerapkan Remarketing meliputi penggunaan alat seperti Google Ads atau Facebook Ads untuk menargetkan kembali pengguna berdasarkan aktivitas mereka, seperti melihat produk atau meninggalkan keranjang belanja. Membuat iklan yang dipersonalisasi dan relevan dapat meningkatkan peluang konversi. Selain itu, membagi audiens ke dalam segmen, seperti pengguna baru dan pelanggan lama, memungkinkan pesan yang lebih spesifik. Menyertakan penawaran khusus, seperti diskon atau pengiriman gratis, juga dapat mendorong pengguna untuk kembali dan menyelesaikan transaksi. Memantau performa kampanye secara berkala memungkinkan optimalisasi untuk hasil yang lebih baik.'),
(9, 'DM9', 'Online Public Relations', 'Online Public Relations (PR) adalah strategi komunikasi yang digunakan untuk membangun dan mempertahankan citra positif merek melalui media online. Ini melibatkan interaksi dengan audiens melalui blog, media sosial, dan situs web, serta mengelola reputasi merek melalui berbagai platform digital untuk membangun hubungan yang baik dengan publik, jurnalis, dan influencer.', 'Untuk menerapkan Online PR meliputi pemantauan percakapan online dan menciptakan konten yang relevan untuk meningkatkan keterlibatan audiens di platform seperti media sosial, blog, dan situs web. Merespons ulasan atau komentar dengan cepat dan profesional membantu memperkuat citra merek. Kolaborasi dengan influencer dan media online yang relevan juga dapat meningkatkan kredibilitas dan jangkauan pesan. Selain itu, melibatkan audiens dalam percakapan yang bernilai dan mengelola krisis secara efektif jika diperlukan sangat penting untuk menjaga hubungan baik dengan publik. Memanfaatkan analitik untuk memantau dampak strategi PR dan membuat penyesuaian yang diperlukan akan meningkatkan efektivitas kampanye.'),
(10, 'DM10', 'Pay-Per-Click Advertising (PPC)', 'Pay-Per-Click (PPC) Advertising adalah strategi pemasaran digital di mana pengiklan membayar biaya setiap kali iklan mereka diklik. Iklan ini biasanya muncul di hasil pencarian mesin pencari atau di situs web lain melalui jaringan iklan. PPC memungkinkan bisnis untuk menargetkan audiens yang sangat spesifik berdasarkan kata kunci, demografi, atau perilaku pengguna, sehingga meningkatkan peluang konversi.', 'Untuk menjalankan PPC meliputi penelitian kata kunci yang mendalam untuk memastikan iklan muncul pada pencarian yang relevan. Membuat iklan yang menarik dan menyertakan ajakan bertindak yang jelas sangat penting untuk meningkatkan tingkat klik. Penargetan audiens berdasarkan lokasi, usia, dan minat akan meningkatkan efektivitas iklan. Selain itu, memantau dan mengoptimalkan kampanye secara berkala menggunakan metrik seperti biaya per klik (CPC), tingkat konversi, dan ROI akan memastikan bahwa anggaran iklan digunakan dengan bijak. Menggunakan platform seperti Google Ads atau Bing Ads juga memungkinkan pengiklan untuk mengelola kampanye PPC dengan lebih efisien dan efektif.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- Indexes for table `tb_strategi`
--
ALTER TABLE `tb_strategi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `tb_strategi`
--
ALTER TABLE `tb_strategi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
