-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2021 pada 16.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u806483859_pweb_1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `interlock_cars`
--

-- DROP TABLE IF EXISTS `interlock_cars`;

CREATE TABLE `interlock_cars` (
  `id` int(11) NOT NULL,
  `turn_on` datetime NOT NULL,
  `turn_off` datetime NOT NULL,
  `ack_by` varchar(255) NOT NULL,
  `id_reason` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `interlock_cars`
--

INSERT INTO `interlock_cars` (`id`, `turn_on`, `turn_off`, `ack_by`, `id_reason`) VALUES
(7, '2021-11-02 13:12:42', '2021-11-02 13:12:42', 'Boedi', 6),
(8, '2021-09-05 19:20:26', '2021-09-09 19:20:26', 'Agus', 2),
(9, '2021-06-15 19:20:26', '2021-11-02 13:20:26', 'Beni', 2),
(10, '2020-12-17 19:22:03', '2020-12-31 19:22:03', 'Annisa', 12),
(11, '2021-11-02 13:23:41', '2021-11-02 13:23:41', 'Daffa', 8),
(12, '2021-11-02 13:27:41', '2021-11-02 13:27:41', 'Andi', 13),
(13, '2021-11-02 13:49:47', '2021-11-02 13:49:47', 'Ara', 13),
(14, '2021-11-02 14:01:46', '2021-11-02 14:01:46', 'Bayu', 1),
(15, '2021-10-18 20:01:46', '2021-11-02 14:01:46', 'David', 3),
(16, '2021-11-01 20:40:44', '2021-11-02 14:40:44', 'Maman Supraman', 4),
(17, '2021-10-10 20:40:44', '2021-10-22 20:40:44', 'Arale', 5),
(18, '2021-08-16 20:41:44', '2021-08-20 20:41:44', 'Babang Cangkul', 5),
(19, '2021-09-14 20:41:44', '2021-11-01 20:41:44', 'Dito', 5),
(20, '2021-11-02 14:40:44', '2021-11-02 14:40:44', 'Andri', 7),
(21, '2021-11-02 14:40:44', '2021-11-02 14:40:44', 'Susi', 8),
(22, '2020-09-25 20:54:45', '2021-11-02 14:54:45', 'Enies', 9),
(23, '2021-11-02 14:54:45', '2021-11-02 14:54:45', 'Oddo', 10),
(24, '2021-09-07 20:55:29', '2021-11-02 14:55:29', 'Jumali', 11),
(25, '2021-09-13 20:55:29', '2021-10-27 20:55:29', 'Fian', 11),
(26, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Fajar', 14),
(27, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Agung', 14),
(28, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Farrel', 15),
(29, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Dicky', 16),
(30, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Ferry', 16),
(31, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Didik', 16),
(32, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Nur Hadi', 16),
(33, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Luwarsono', 11),
(34, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Brenda', 8),
(35, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Amar', 14),
(36, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Ryan', 16),
(37, '2021-11-02 14:55:29', '2021-11-02 14:55:29', 'Syafii', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `offices`
--

-- DROP TABLE IF EXISTS `offices`;

CREATE TABLE `offices` (
  `officeCode` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `employees` int(11) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `territory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `offices`
--

-- DROP TABLE IF EXISTS `offices`;

INSERT INTO `offices` (`officeCode`, `city`, `phone`, `addressLine1`, `addressLine2`, `employees`, `state`, `country`, `postalCode`, `territory`) VALUES
(1, 'San Francisco', '+1 650 219 4782', '100 Market Street', 'Suite 300', 20, 'CA', 'USA', '94080', 'NA'),
(2, 'Boston', '+1 215 837 0825', '1550 Court Place', 'Suite 102', 15, 'MA', 'USA', '02107', 'NA'),
(3, 'NYC', '+1 212 555 3000', '523 East 53rd Street', 'apt. 5A', 50, 'NY', 'USA', '10022', 'NA'),
(4, 'Paris', '+33 14 723 4404', '43 Rue Jouffroy Abbans', NULL, 44, NULL, 'France', '75017', 'EMEA'),
(5, 'Tokyo', '+81 33 224 5000', '4-1 Kioicho', NULL, 55, 'Chiyoda-Ku', 'Japan', '102-8578', 'Japan'),
(6, 'Sydney', '+61 2 9264 2451', '5-11 Wentworth Avenue', 'Floor #2', 23, NULL, 'Australia', 'NSW 2010', 'APAC'),
(7, 'London', '+44 20 7877 2041', '25 Old Broad Street', 'Level 7', 22, NULL, 'UK', 'EC2N 1HN', 'EMEA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reason`
--

-- DROP TABLE IF EXISTS `reason`;

CREATE TABLE `reason` (
  `id_reason` int(11) NOT NULL,
  `txtreason` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reason`
--

INSERT INTO `reason` (`id_reason`, `txtreason`, `jumlah`) VALUES
(1, 'Interlock Hose Reel Front', 1),
(2, 'Interlock Hose Reel Rear', 2),
(3, 'Interlock Input Coupler Stow', 1),
(4, 'Interlock Input Hose Boom Stow', 1),
(5, 'Interlock Platform Stow', 3),
(6, 'Interlock Platform Nozzle Left', 1),
(7, 'Interlock Platform Nozzle Right', 1),
(8, 'Interlock Boom Stow', 3),
(9, 'Interlock Bonding Static Reel Front', 1),
(10, 'Interlock Bonding Static Reel Rear', 2),
(11, 'Interlock Bottom Loading', 3),
(12, 'Interlock Handrail', 1),
(13, 'PTO', 2),
(14, 'Preventive Maintenance', 3),
(15, 'Interlock System Fault', 1),
(16, 'Breakdown', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

-- DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `no_hp`) VALUES
(1, 'Bayu Eka Prawira', 'bayuekap', 'bayueka980@gmail.com', '9ba115fe627899fd87d3478a354068e9', '082230399683'),
(2, 'Bayyyy', 'bayyy', 'jadigini37@gmail.com', '5088fef9e3fd77302bd9d1ed7189b86b', '082230399683');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `interlock_cars`
--
ALTER TABLE `interlock_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reason` (`id_reason`);

--
-- Indeks untuk tabel `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`officeCode`);

--
-- Indeks untuk tabel `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id_reason`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `interlock_cars`
--
ALTER TABLE `interlock_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `reason`
--
ALTER TABLE `reason`
  MODIFY `id_reason` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `interlock_cars`
--
ALTER TABLE `interlock_cars`
  ADD CONSTRAINT `interlock_cars_ibfk_1` FOREIGN KEY (`id_reason`) REFERENCES `reason` (`id_reason`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
