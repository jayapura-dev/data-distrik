-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 10:19 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_distrik`
--

CREATE TABLE `tb_distrik` (
  `id_distrik` int(14) NOT NULL,
  `id_wp` int(14) NOT NULL,
  `distrik` varchar(128) CHARACTER SET utf8 NOT NULL,
  `id_type` int(2) NOT NULL,
  `id_distrik_siopapua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_distrik`
--

INSERT INTO `tb_distrik` (`id_distrik`, `id_wp`, `distrik`, `id_type`, `id_distrik_siopapua`) VALUES
(1, 2, 'DEPAPRE', 1, 97),
(4, 2, 'RAVENIRARA', 1, 109),
(5, 1, 'SENTANI', 1, 4),
(6, 2, 'SENTANI BARAT', 1, 98),
(7, 1, 'SENTANI TIMUR', 1, 96),
(8, 3, 'KEMTUK', 1, 99),
(9, 3, 'KEMTUK GRESI', 1, 5),
(10, 3, 'GRESI SELATAN', 1, 110),
(11, 3, 'NIMBORAN', 1, 6),
(12, 3, 'NIMBOKRANG', 1, 100),
(13, 3, 'NAMBLONG', 1, 106),
(14, 4, 'UNURUMGUAY', 2, 101),
(15, 4, 'YAPSI', 2, 107),
(16, 4, 'KAUREH', 1, 103),
(17, 4, 'AIRU', 2, 108),
(18, 1, 'WAIBU', 1, 105),
(19, 1, 'EBUNGFAUW', 1, 104),
(20, 2, 'DEMTA', 1, 102),
(21, 2, 'YOKARI', 1, 111);

-- --------------------------------------------------------

--
-- Table structure for table `tb_familiy`
--

CREATE TABLE `tb_familiy` (
  `id_fam` int(10) NOT NULL,
  `id_distrik` int(10) NOT NULL,
  `id_kampung` int(10) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `nomor_kartu_keluarga` varchar(128) NOT NULL,
  `nomor_rumah` varchar(5) NOT NULL,
  `nomor_telfon` varchar(13) NOT NULL,
  `suku` varchar(10) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `penguasaan_bangunan` varchar(20) NOT NULL,
  `status_lahan` varchar(20) NOT NULL,
  `luas_lantai` varchar(10) NOT NULL,
  `jenis_lantai` varchar(30) NOT NULL,
  `kondisi_lantai` varchar(30) NOT NULL,
  `jenis_dinding` varchar(30) NOT NULL,
  `kondisi_dinding` varchar(30) NOT NULL,
  `jenis_atap` varchar(30) NOT NULL,
  `kondisi_atap` varchar(30) NOT NULL,
  `jumlah_kamar` decimal(10,0) NOT NULL,
  `sumber_air_minum` varchar(20) NOT NULL,
  `peroleh_air_minum` varchar(20) NOT NULL,
  `ketersediaan_air` varchar(30) NOT NULL,
  `sumber_penerangan` varchar(20) NOT NULL,
  `energi_memasak` varchar(20) NOT NULL,
  `daya_pln` varchar(5) NOT NULL,
  `fasilitas_buang_air` varchar(10) NOT NULL,
  `penggunaan_jamban` varchar(30) NOT NULL,
  `pembuangan_air` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_familiy`
--

INSERT INTO `tb_familiy` (`id_fam`, `id_distrik`, `id_kampung`, `nama_kk`, `nomor_kartu_keluarga`, `nomor_rumah`, `nomor_telfon`, `suku`, `rw`, `rt`, `penguasaan_bangunan`, `status_lahan`, `luas_lantai`, `jenis_lantai`, `kondisi_lantai`, `jenis_dinding`, `kondisi_dinding`, `jenis_atap`, `kondisi_atap`, `jumlah_kamar`, `sumber_air_minum`, `peroleh_air_minum`, `ketersediaan_air`, `sumber_penerangan`, `energi_memasak`, `daya_pln`, `fasilitas_buang_air`, `penggunaan_jamban`, `pembuangan_air`) VALUES
(5, 4, 6, 'Yohosua Isak Ormuseray', '9103021212121013', '2', '082199537593', 'OAP', '004', '001', 'Milik Sendiri', 'Milik Sendiri', '340', 'semen', 'bagus, kualitas tinggi', 'tembok', 'Bagus, kualitas tinggi', 'Seng', 'Bagus, kualitas tinggi', '2', 'Kali', 'Tidak Membeli', 'Sepanjang tahun', 'Listrik PLN', 'Minyak tanah', '1300', 'Sendiri', 'Dipakai seluruh anggota keluar', 'Selokan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_index_distrik`
--

CREATE TABLE `tb_index_distrik` (
  `id_dis_index` int(2) NOT NULL,
  `id_distrik` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_index_distrik`
--

INSERT INTO `tb_index_distrik` (`id_dis_index`, `id_distrik`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampung`
--

CREATE TABLE `tb_kampung` (
  `id_kampung` int(14) NOT NULL,
  `id_distrik` int(14) NOT NULL,
  `kampung` varchar(128) CHARACTER SET utf8 NOT NULL,
  `id_kakam` int(10) NOT NULL,
  `sekam` varchar(50) NOT NULL,
  `id_kamp_siopapua` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kampung`
--

INSERT INTO `tb_kampung` (`id_kampung`, `id_distrik`, `kampung`, `id_kakam`, `sekam`, `id_kamp_siopapua`) VALUES
(1, 1, 'Dormena', 2, '-', 0),
(2, 6, 'Maribu', 0, '', 0),
(3, 6, 'Dosay', 1, '-', 0),
(4, 1, 'Yewena', 0, '', 0),
(5, 4, 'Yongsu Spari', 0, '', 0),
(6, 4, 'Yongsu Desoyo', 0, '', 0),
(7, 20, 'Demta Kota', 0, '', 0),
(8, 20, 'Yaugabsa', 0, '', 0),
(9, 20, 'Muris kecil', 0, '', 0),
(10, 20, 'Yakore', 0, '', 0),
(11, 20, 'Ambora', 0, '', 0),
(12, 20, 'Kamdera', 0, '', 0),
(13, 20, 'Muaif', 0, '', 0),
(14, 1, 'Kendate', 0, '', 0),
(15, 1, 'Wambena', 0, '', 0),
(17, 1, 'Yepase', 0, '', 0),
(18, 1, 'Waiya', 0, '', 0),
(19, 1, 'Nusu', 0, '', 0),
(20, 1, 'Supa', 0, '', 0),
(21, 17, 'Muara Nawa', 0, '', 0),
(22, 17, 'Aurina', 0, '', 0),
(23, 17, 'Pagai', 0, '', 0),
(24, 17, 'Kamikaru', 0, '', 0),
(25, 17, 'Naira', 0, '', 0),
(26, 21, 'Meukisi', 0, '', 0),
(27, 21, 'Endokisi', 0, '', 0),
(28, 21, 'Snamai', 0, '', 0),
(29, 21, 'Maruwai', 0, '', 0),
(30, 6, 'Sabron', 0, '', 0),
(31, 6, 'Sabron Sari', 0, '', 0),
(32, 6, 'Waibron', 0, '', 0),
(33, 19, 'Abar', 0, '', 0),
(34, 19, 'Babrongkho', 0, '', 0),
(35, 19, 'Ebungfa', 0, '', 0),
(36, 19, 'Khameyaka', 0, '', 0),
(37, 19, 'Simporo', 0, '', 0),
(38, 16, 'Lapua', 0, '', 0),
(39, 16, 'Sebum', 0, '', 0),
(40, 16, 'Soskotek', 0, '', 0),
(41, 16, 'Umbron', 0, '', 0),
(42, 16, 'Yadaouw', 0, '', 0),
(43, 8, 'Aib', 0, '', 0),
(44, 8, 'Bengguin Progo', 0, '', 0),
(45, 8, 'Kwansu', 0, '', 0),
(46, 8, 'Mamda', 0, '', 0),
(47, 8, 'Mamda yawan', 0, '', 0),
(48, 8, 'Nambon', 0, '', 0),
(49, 8, 'Namei', 0, '', 0),
(50, 8, 'Sebeab Kecil', 0, '', 0),
(51, 8, 'Sama', 0, '', 0),
(52, 8, 'Sekori', 0, '', 0),
(53, 8, 'Skoaim', 0, '', 0),
(54, 8, 'Soaib', 0, '', 0),
(55, 9, 'Braso', 0, '', 0),
(56, 9, 'Bring', 0, '', 0),
(57, 9, 'Damoi Kati', 0, '', 0),
(58, 9, 'Demetin', 0, '', 0),
(59, 9, 'Hatib', 0, '', 0),
(60, 9, 'Ibub', 0, '', 0),
(61, 9, 'Jangrang', 0, '', 0),
(62, 9, 'Nembu Gresi', 0, '', 0),
(63, 9, 'Omon', 0, '', 0),
(64, 9, 'Pupehabu', 0, '', 0),
(65, 9, 'Swetab', 0, '', 0),
(66, 9, 'Yanbra', 0, '', 0),
(67, 12, 'Benyom Jaya I', 0, '', 0),
(68, 12, 'Benyom Jaya II', 0, '', 0),
(69, 12, 'Berap', 0, '', 0),
(70, 12, 'Benyom', 0, '', 0),
(71, 12, 'Hamongkrang', 0, '', 0),
(72, 12, 'Nimbokrang', 0, '', 0),
(73, 12, 'Nimbokrang Sari', 0, '', 0),
(74, 12, 'Rhepang Muaif', 0, '', 0),
(75, 11, 'Benyom', 0, '', 0),
(76, 11, 'Gemebs', 0, '', 0),
(77, 11, 'Imsar', 0, '', 0),
(78, 11, 'Kaitemung', 0, '', 0),
(79, 11, 'Kuipons', 0, '', 0),
(80, 11, 'Kuwase', 0, '', 0),
(81, 11, 'Meyu', 0, '', 0),
(82, 11, 'Oyengsi', 0, '', 0),
(83, 11, 'Pobaim', 0, '', 0),
(84, 11, 'Singgri', 0, '', 0),
(85, 11, 'Singgriway', 0, '', 0),
(86, 11, 'Tabri', 0, '', 0),
(87, 11, 'Yenggu Lama', 0, '', 0),
(88, 11, 'Yenggu Baru', 0, '', 0),
(89, 13, 'Besum', 0, '', 0),
(90, 13, 'Hanggai Hamong', 0, '', 0),
(91, 13, 'Imestum', 0, '', 0),
(92, 13, 'Karya Bumi', 0, '', 0),
(93, 13, 'Sanggai', 0, '', 0),
(94, 13, 'Sarmai Atas', 0, '', 0),
(95, 13, 'Sarmai Bawah', 0, '', 0),
(96, 13, 'Sumbe', 0, '', 0),
(97, 13, 'Yakasib', 0, '', 0),
(98, 5, 'Dobonsolo', 0, '', 0),
(99, 5, 'Hinekombe', 0, '', 0),
(100, 5, 'Hobong', 0, '', 0),
(101, 5, 'Ifale', 0, '', 0),
(102, 5, 'Ifar Besar', 0, '', 0),
(103, 5, 'Kehiran', 0, '', 0),
(104, 5, 'Sereh', 0, '', 0),
(105, 5, 'Yobeh', 0, '', 0),
(106, 5, 'Yoboy', 0, '', 0),
(107, 7, 'Asai Besar', 0, '', 628),
(108, 7, 'Asai Kecil', 0, '', 629),
(109, 7, 'Ayapo', 0, '', 627),
(110, 7, 'Nendali', 0, '', 630),
(111, 7, 'Nolokla', 0, '', 625),
(112, 7, 'Puay', 0, '', 626),
(113, 7, 'Yokiwa', 0, '', 631),
(114, 14, 'Beniek', 0, '', 0),
(115, 14, 'Garusa', 0, '', 0),
(116, 14, 'Guriad', 0, '', 0),
(117, 14, 'Nendalzi', 0, '', 0),
(118, 14, 'Sawesuma', 0, '', 0),
(119, 14, 'Sentosa', 0, '', 0),
(120, 18, 'Bambar', 0, '', 0),
(121, 18, 'Dondai', 0, '', 0),
(122, 18, 'Doyo baru', 0, '', 0),
(123, 18, 'Doyo lama', 0, '', 0),
(124, 18, 'Kwadeware', 0, '', 0),
(125, 18, 'Sosiri', 0, '', 0),
(126, 18, 'Yakonde', 0, '', 0),
(127, 15, 'Bumi Sahaja', 0, '', 0),
(128, 15, 'Bundru', 0, '', 0),
(129, 15, 'Kwarja', 0, '', 0),
(130, 15, 'Nawa Mukti', 0, '', 0),
(131, 15, 'Nawa Mulya', 0, '', 0),
(132, 15, 'Ongan jaya', 0, '', 0),
(133, 15, 'Purnawajati', 0, '', 0),
(134, 15, 'Tabbeyan', 0, '', 0),
(135, 15, 'Taqwa bangun', 0, '', 0),
(136, 21, 'Buseryo', 0, '', 0),
(137, 5, 'Sentani Kota', 0, '', 0),
(138, 4, 'Necheibe', 0, '-', 0),
(139, 4, 'Ormuwari', 0, '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(10) NOT NULL,
  `id_fam` int(10) NOT NULL,
  `id_kampung` int(10) NOT NULL,
  `no_urut` int(10) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `suku` varchar(10) NOT NULL,
  `golongan_darah` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `adminduk_ktp` varchar(10) NOT NULL,
  `adminduk_akta_lahir` varchar(10) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `ijazah_terahir` varchar(20) NOT NULL,
  `partisipasi_sekolah` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `hub_kk` varchar(40) NOT NULL,
  `id_distrik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `id_fam`, `id_kampung`, `no_urut`, `nama`, `nik`, `suku`, `golongan_darah`, `tempat_lahir`, `tgl_lahir`, `nama_ayah`, `status_perkawinan`, `adminduk_ktp`, `adminduk_akta_lahir`, `pekerjaan`, `ijazah_terahir`, `partisipasi_sekolah`, `agama`, `hub_kk`, `id_distrik`) VALUES
(6, 5, 6, NULL, 'Ponny Naomi Nerotouw', '9103100502600002', 'OAP', 'AB', 'Kampung Waiya', '1989-11-07', 'Menase Nerotouw', 'Kawin', 'Ya', 'Ya', 'Pegawai Negri Sipil', 'Perguruan tinggi', 'Tidak bersekolah lagi', 'Kristen', 'Ibu', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_distrik`
--
ALTER TABLE `tb_distrik`
  ADD PRIMARY KEY (`id_distrik`);

--
-- Indexes for table `tb_familiy`
--
ALTER TABLE `tb_familiy`
  ADD PRIMARY KEY (`id_fam`);

--
-- Indexes for table `tb_index_distrik`
--
ALTER TABLE `tb_index_distrik`
  ADD PRIMARY KEY (`id_dis_index`);

--
-- Indexes for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  ADD PRIMARY KEY (`id_kampung`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_familiy`
--
ALTER TABLE `tb_familiy`
  MODIFY `id_fam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  MODIFY `id_kampung` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
