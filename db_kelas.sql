-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2019 at 04:24 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.0.33-13+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `nip` int(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `nip`, `nama`, `alamat`) VALUES
(1, 123456789, 'Michael', 'Batang'),
(2, 111111111, 'Burhan', 'Pekalongan'),
(3, 123456789, 'Michael', 'Batang'),
(4, 111111111, 'Burhan', 'Pekalongan'),
(5, 123456789, 'Michael', 'Batang'),
(6, 111111111, 'Burhan', 'Pekalongan'),
(7, 123456789, 'Michael', 'Batang'),
(8, 111111111, 'Burhan', 'Pekalongan'),
(9, 111111111, 'Burhan', 'Pekalongan'),
(10, 123456789, 'Michael', 'Batang'),
(11, 111111111, 'Burhan', 'Pekalongan'),
(12, 123456789, 'Michael', 'Batang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nama`, `alamat`, `no_hp`) VALUES
(1, 'Sukirman', 'Jakarta Barat', '085774564526'),
(4, 'Bambang', 'Jakarta Barat', '08564756585'),
(5, 'Anggoro', 'Bekasi', '086996320562');

-- --------------------------------------------------------

--
-- Table structure for table `tb_info_bimbel`
--

CREATE TABLE `tb_info_bimbel` (
  `id` int(11) NOT NULL,
  `bimbel` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `tryout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_info_bimbel`
--

INSERT INTO `tb_info_bimbel` (`id`, `bimbel`, `materi`, `tryout`) VALUES
(12, 'Nuansa', 'Bahasa Indonesia', '90'),
(13, 'Gajah', 'Bahasa Indonesia', '85'),
(14, 'Neuron', 'Bahasa Indonesia', '70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelola_jadwal`
--

CREATE TABLE `tb_kelola_jadwal` (
  `id` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jam_bimbingan` varchar(255) NOT NULL,
  `jumlah_siswa` varchar(255) NOT NULL,
  `hari_bimbingan` varchar(255) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelola_jadwal`
--

INSERT INTO `tb_kelola_jadwal` (`id`, `kelas`, `jam_bimbingan`, `jumlah_siswa`, `hari_bimbingan`, `mata_pelajaran`) VALUES
(1, '12 IPA 1', '10.00 - 12.00', '40 orang', 'Selasa', 'Biologi'),
(2, '12 IPA 2', '11-00 - 13.00', '50 Orang', 'Jumat', 'Matematika'),
(7, '12 IPA 3', '12.00 - 14.00', '40 orang', 'Senin', 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelola_kelas`
--

CREATE TABLE `tb_kelola_kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `jam_tersedia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelola_kelas`
--

INSERT INTO `tb_kelola_kelas` (`id`, `kelas`, `kapasitas`, `jam_tersedia`) VALUES
(1, '12 IPA 1', '40 orang', '10.00 - 12.00'),
(2, '12 IPS 1', '45 orang', '11.00 - 13.00'),
(8, '12 IPS 2', '50 orang', '12.00 - 14.00'),
(9, '12 IPA 2', '55 orang', '13.00 - 15.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `path_sambutan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id`, `date`, `judul`, `caption`, `path_sambutan`) VALUES
(1, '2019-12-18 09:02:57', 'Materi 1', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf'),
(2, '2019-12-18 09:03:02', 'Materi 2', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi2.pdf'),
(4, '2019-12-18 09:03:02', 'Materi 3', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf'),
(5, '2019-12-18 09:03:02', 'Materi 4', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf'),
(6, '2019-12-18 09:03:02', 'Materi 5', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf'),
(7, '2019-12-18 09:03:02', 'Materi 6', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf'),
(8, '2019-12-18 09:03:02', 'Materi 7', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf'),
(9, '2019-12-18 09:03:02', 'Materi 8', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,', 'materi1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama`, `jurusan`, `alamat`, `asal_sekolah`) VALUES
(1, 'Tejo', 'IPS', 'Jakarta', 'SMA 1 Jakarta'),
(2, 'Kevin', 'IPA', 'Jakarta Selatan', 'SMAN 3 Jakarta'),
(3, 'Anggara', 'IPA', 'Jakarta Barat', 'SMAN 2 Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tryout`
--

CREATE TABLE `tb_tryout` (
  `Id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `tryout` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tryout`
--

INSERT INTO `tb_tryout` (`Id`, `kode`, `tryout`, `nama_siswa`, `jurusan`, `alamat`, `asal_sekolah`, `nilai`) VALUES
(1, '101', 'Bahasa Indonesia', 'Rizqi', 'IPA', 'Jakarta', 'SMA 11', '90'),
(2, '102', 'Bahasa Indonesia', 'Ina', 'IPA', 'Jakarta', 'SMA 12', '80'),
(3, '103', 'Bahasa Indonesia', 'Wati', 'IPA', 'Jakarta', 'SMA 14', '70');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `privilege`, `bagian`) VALUES
(1, 'super', '8451ba8a14d79753d34cb33b51ba46b4b025eb81', 'superadmin', 'superadmin'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin'),
(11, 'ojo', '2db9e0c6245289507aa81e344d0c23dc798eb26f', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_info_bimbel`
--
ALTER TABLE `tb_info_bimbel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelola_jadwal`
--
ALTER TABLE `tb_kelola_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelola_kelas`
--
ALTER TABLE `tb_kelola_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tryout`
--
ALTER TABLE `tb_tryout`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_info_bimbel`
--
ALTER TABLE `tb_info_bimbel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_kelola_jadwal`
--
ALTER TABLE `tb_kelola_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_kelola_kelas`
--
ALTER TABLE `tb_kelola_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_tryout`
--
ALTER TABLE `tb_tryout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
