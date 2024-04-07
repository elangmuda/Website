-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 07.05
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `file_kartu_keluarga` text NOT NULL,
  `file_ijazah` text NOT NULL,
  `file_shun` text NOT NULL,
  `file_kip` text NOT NULL,
  `file_serti_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `username`, `nama_lengkap`, `file_kartu_keluarga`, `file_ijazah`, `file_shun`, `file_kip`, `file_serti_prestasi`) VALUES
(3, 'cacan', 'Cacan Nur Vera', 'src/madan2020.pdf', 'src/statnikov2008.pdf', 'src/A_Study_of_Some_Data_Mining_Classificati.pdf', 'src/yi2019.pdf', 'src/statnikov2008.pdf'),
(10, 'adhani', 'Adhani M', 'src/cervantes2020.pdf', 'src/Unit Testing(Pembuatan WhiteBox Test Case)_Kelompok 6.pdf', 'src/229192374.pdf', 'src/s11277-021-08974-3 (1).pdf', 'src/PAI TUGAS 2-1.pdf'),
(11, 'alfin', 'Alfin G', 'src/#8 MOBILE PROGRAMMING.pdf', 'src/PAI TUGAS 2-1.pdf', 'src/Modul 5_DSE-B_Nurul Fadhilah Anwar_3411201095.pdf', 'src/1679322339175_TBO_4___DFA.pdf', 'src/Profoosal IMK Kelompok1.pdf'),
(12, 'rizky', 'Rizky RNK', 'src/459443-implementasi-algoritma-decision-tree-unt-e07c7694.pdf', 'src/1388-5345-1-PB.pdf', 'src/Modul Praktikum Sistem Multimedia 2022.pdf', 'src/MODUL MANAJEMEN PROYEK 2022.pdf', 'src/1388-5345-1-PB.pdf'),
(13, 'isni', 'Isni Kamaleng', 'src/MODUL PRAKTIKUM BASIS DATA PERTEMUAN 8.pdf', 'src/1680569823479_ndfa_e_move.pdf', 'src/Proposal iyan.pdf', 'src/1678756800806_TBO_3.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Modul3_PPL.pdf'),
(14, 'setio', 'Setio Nurohman', 'src/01 - Pendahuluan SW Testing, Tingkat Atas (BARU) (1).pdf', 'src/02 - Hal Terkait dalam Pengujian.pdf', 'src/03 - Strategi Pengujian PL.pdf', 'src/04 - Pengujian Unit.pdf', 'src/05-06 - Intro+whitebox.pdf'),
(15, 'Kukuh', 'Kukuh Yulion', 'src/07 - Black box.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Modul 4_PPL.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Modul 5_PPL.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Progres Modul 5.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Progres Modul 6.pdf'),
(16, 'eras', 'Eras LM', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Progres Modul 4.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Progres Modul 5.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Progres Modul 7.pdf', 'src/Kelompok 6_DSE-B_Progres Modul 7.pdf', 'src/3411201095_Nurul Fadhilah Anwar_DSE-B_Progres Modul 7.pdf'),
(17, 'sinta', 'Sinta Azzahra', 'src/Kelompok 6_DSE-B_Tubes..pdf', 'src/revisi.pdf', 'src/Ubah 1.pdf', 'src/Kelompok 6_DSE-B_Progres Modul 7.pdf', 'src/07 - Black box.pdf'),
(19, 'bili', 'Alfin G', 'src/Bab_1.pdf', 'src/6254-11755-1-SM.pdf', 'src/120-208-1-PB.pdf', 'src/1679322339175_TBO_4___DFA.pdf', 'src/MODUL MANAJEMEN PROYEK 2022.pdf'),
(20, 'yasmina', 'Adhani M', 'src/Your First Project.pdf', 'src/120-208-1-PB.pdf', 'src/A_Study_of_Some_Data_Mining_Classificati id.pdf', 'src/Kelompok 3 - Pengarsipan Skripsi.pdf', 'src/A_Study_of_Some_Data_Mining_Classificati id.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_test` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal_test` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `angkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_test`, `username`, `tanggal_test`, `tempat`, `angkatan`) VALUES
(1, 1, 'adhani', '2023-06-23', 'Bandung Barat ', '23'),
(2, 2, 'alfin', '2023-06-23', 'Bandung Barat', '23'),
(6, 3, 'rizky', '2023-06-23', 'Bandung Barat', '23'),
(8, 4, 'cacan', '2023-06-23', 'Bandung Barat', '23'),
(9, 5, 'isni', '2023-06-23', 'Bandung Barat', '23'),
(10, 6, 'Setio', '2023-06-23', 'Bandung Barat ', '23'),
(11, 7, 'Kukuh', '2023-06-23', 'Bandung Barat', '23'),
(12, 8, 'fahmi', '2023-06-23', 'Bandung Barat', '23'),
(13, 9, 'sinta', '2023-06-23', 'Bandung Barat', '23'),
(15, 10, 'eras', '2023-06-23', 'Bandung Barat', '23'),
(16, 100, 'yasmina', '2023-09-19', 'Bandung Barat 2', '23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'Fadil', '123', 'admin'),
(21, 'alfin', '123', 'peserta'),
(22, 'adhani', '123', 'peserta'),
(23, 'rizky', '123', 'peserta'),
(26, 'admin', '123', 'admin'),
(27, 'Setio', '123', 'peserta'),
(28, 'isni', '123', 'peserta'),
(29, 'cacan', '123', 'peserta'),
(30, 'Kukuh', '123', 'peserta'),
(31, 'eras', '123', 'peserta'),
(32, 'sinta', '123', 'peserta'),
(33, 'fahmi', '123', 'peserta'),
(34, 'Doni', '123', 'peserta'),
(35, 'bili', '123', 'peserta'),
(36, 'yasmina', '123', 'peserta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(5) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`id_periode`, `angkatan`, `tahun`) VALUES
(1, '23', '2023'),
(3, '24', '2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nilai_rata_rata` varchar(20) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_lengkap`, `username`, `email`, `no_hp`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `nilai_rata_rata`, `asal_sekolah`) VALUES
(21, 'Alfin G', 'alfin', 'alfindeva36@gmail.com', '087732771105', 'L', '2023-06-28', 'KP. KARYAWANGI', '95', 'SMP 1 Cimahi'),
(22, 'Adhani M', 'adhani', 'adhnai@gmail.com', '087732771105', 'P', '2023-06-30', 'KP. KARYAWANGI', '90', 'SMP PWK'),
(23, 'Rizky RNK', 'rizky', 'rizky@gmail.com', '087732771105', 'L', '2023-06-12', 'KP. KARYAWANGI', '30', 'SMP PWK'),
(24, 'Setio Nurohman', 'Setio', 'setio12@gmail.com', '087', 'L', '2004-02-21', 'KP. KARYAWANGI', '90', 'SMP 1 Cimahi'),
(25, 'Isni Kamaleng', 'isni', 'Isni21@gmail.com', '08154975412', 'P', '2007-02-21', 'Bandung,Kec.Cihideuing Rw 09 Rt 08', '95', 'SMP 1 Parongpong'),
(26, 'Cacan Nur Vera', 'cacan', 'cacan21@gmail.com', '084578954512', 'L', '2006-06-01', 'Bandung,Cihideui Gombong', '90', 'SMP 1 Parongpong'),
(27, 'Kukuh Yulion', 'Kukuh', 'kukuh@gmail.com', '087732771105', 'L', '2007-03-21', 'Bansung,Cihideuing', '75', 'SMP 1 Parongpong'),
(28, 'Eras LM', 'eras', 'eras@gmail.com', '084578451654', 'L', '2007-02-21', 'Bandung,Cihideuing', '75', 'SMP 1 Parongpong'),
(29, 'Sinta Azzahra', 'sinta', 'sinta@gmail.com', '084578945612', 'P', '2005-07-22', 'Bandung,Cihideui Gombong', '75', 'SMP 1 Parongpong'),
(30, 'Fahmi Abdul', 'fahmi', 'fahmi123@gmail.com', '08154654784', 'L', '2007-02-22', 'Bandung,Cihideui Gombong', '90', 'SMP 1 Parongpong'),
(34, 'Dony septi', 'Doni', 'dony@gmail.com', '08623576576', 'L', '2023-06-07', 'KP. KARYAWANGI', '70', 'SMP PWK'),
(35, 'Bilyy', 'bili', 'fadilahfadil021@gmail.com', '087732771105', 'L', '2023-08-16', 'KP. KARYAWANGI', '90', 'SMP 1 Cimahi'),
(36, 'Adhani M', 'yasmina', 'nurulfadhilaha20@if.unjani.ac.id', '087732771105', 'P', '2023-09-19', 'KP. KARYAWANGI', '90', 'SMP 1 Cimahi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id_test` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `nilai_test` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id_test`, `username`, `nama_lengkap`, `nilai_test`, `status`) VALUES
(1, 'adhani', 'Adhani M', 90, 'Lulus'),
(2, 'alfin', 'Alfin G', 95, 'Lulus'),
(3, 'rizky', 'Rizky RNK', 90, 'Lulus'),
(4, 'cacan', 'Cacan Nur Vera', 90, 'Lulus'),
(5, 'isni', 'Isni Kamaleng', 90, 'Lulus'),
(6, 'Setio', 'Setio Nurohman', 80, 'Lulus'),
(7, 'Kukuh', 'Kukuh Yulion', 90, 'Lulus'),
(8, 'fahmi', 'Fahmi Abdul', 95, 'Lulus'),
(9, 'sinta', 'Sinta Azzahra', 60, 'Tidak Lulus'),
(100, 'yasmina', 'Adhani M', 90, 'Lulus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_peserta` (`username`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_test` (`id_test`),
  ADD KEY `username` (`username`),
  ADD KEY `angkatan` (`angkatan`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`),
  ADD KEY `angkatan` (`angkatan`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_peserta` (`username`),
  ADD KEY `id_test` (`id_test`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`username`) REFERENCES `peserta` (`username`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`username`) REFERENCES `peserta` (`username`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`angkatan`) REFERENCES `periode` (`angkatan`);

--
-- Ketidakleluasaan untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
