-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2023 pada 10.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickyt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nik` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `password`, `nik`) VALUES
(0, 'Yami', 'yamiyaminomi@gmail.com', 'kurohige', '12345678'),
(1, 'Muhammad Taufiq', 'mtaufiq@example.com', 'passwordA', '1234567890'),
(2, 'Asyam Thoriq', 'asthorenak@example.com', 'passwordB', '0987654321'),
(3, 'Aisyatuz Zahroh', 'aiszahroh@example.com', 'passwordC', '2468135790');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_order`
--

CREATE TABLE `customer_order` (
  `customer_order_id` int(11)PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_amount` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `time_paid` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_order`
--

INSERT INTO `customer_order` (`customer_order_id`, `customer_id`, `order_time`, `order_amount`, `total_price`, `time_paid`) VALUES
(1, 1, '2023-06-15 08:36:42', 2, '1500000.00', '2023-06-15 10:00:00'),
(2, 2, '2023-06-15 08:37:15', 1, '900000.00', '2023-06-20 12:00:00'),
(3, 3, '2023-06-15 08:37:27', 2, '467000.00', '2023-06-25 13:30:00'),
(4, 2, '2023-05-26 07:33:14', 7, '3600000.00', '2023-06-16 07:33:14'),
(5, 3, '2023-05-27 07:33:14', 4, '5400000.00', '2023-06-16 07:33:14'),
(6, 2, '2023-06-03 07:33:14', 4, '1800000.00', '2023-06-16 07:33:14'),
(7, 2, '2023-06-03 07:33:14', 4, '6000000.00', '2023-06-16 07:33:14'),
(8, 2, '2023-05-26 07:33:14', 2, '167000.00', '2023-06-16 07:33:14'),
(9, 3, '2023-06-06 07:33:14', 7, '2000000.00', '2023-06-16 07:33:14'),
(10, 1, '2023-05-23 07:33:14', 7, '600000.00', '2023-06-16 07:33:14'),
(11, 2, '2023-05-28 07:33:14', 6, '9000000.00', '2023-06-16 07:33:14'),
(12, 2, '2023-06-15 07:33:14', 4, '900000.00', '2023-06-16 07:33:14'),
(13, 1, '2023-06-11 07:33:14', 9, '4500000.00', '2023-06-16 07:33:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konser`
--

CREATE TABLE `konser` (
  `konser_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `konser_nama` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `venue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konser`
--

INSERT INTO `konser` (`konser_id`, `konser_nama`, `date`, `venue`) VALUES
(1, 'JKT 47 Summer Concert', '2023-06-15 12:00:00', 'Tennis Indoor Senayan, Jakarta'),
(2, 'Konser Afgan', '2023-06-20 13:30:00', 'Tennis Indoor Senayan, Jakarta'),
(3, 'SOD Festival', '2023-06-25 11:00:00', 'Lapangan Bhumi Marinir, Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_tiket`
--

CREATE TABLE `order_tiket` (
  `order_tiket_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `customer_order_id` int(11) DEFAULT NULL,
  `tiket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_tiket`
--

INSERT INTO `order_tiket` (`order_tiket_id`, `customer_order_id`, `tiket_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 4),
(4, 3, 7),
(5, 3, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `tiket_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `konser_id` int(11) DEFAULT NULL,
  `tiket_cat_id` int(11) DEFAULT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`tiket_id`, `konser_id`, `tiket_cat_id`, `purchase_date`) VALUES
(1, 1, 1, '2023-06-15 05:30:00'),
(2, 1, 1, '2023-06-15 06:45:00'),
(3, 1, 2, '2023-06-15 07:20:00'),
(4, 2, 3, '2023-06-20 04:10:00'),
(5, 2, 3, '2023-06-20 05:05:00'),
(6, 2, 4, '2023-06-20 07:50:00'),
(7, 3, 5, '2023-06-25 04:30:00'),
(8, 3, 6, '2023-06-25 08:15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_kategori`
--

CREATE TABLE `tiket_kategori` (
  `tiket_cat_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `konser_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `cat_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket_kategori`
--

INSERT INTO `tiket_kategori` (`tiket_cat_id`, `konser_id`, `price`, `cat_name`) VALUES
(1, 1, '750000.00', 'VIP'),
(2, 1, '500000.00', 'UMUM'),
(3, 2, '900000.00', 'VIP'),
(4, 2, '600000.00', 'UMUM'),
(5, 3, '300000.00', 'VIP'),
(6, 3, '167000.00', 'UMUM');

--
-- Indexes for dumped tables
--

--
--
-- Indeks untuk tabel `customer_order`
--
ALTER TABLE `customer_order`
  ADD KEY `customer_id` (`customer_id`);

--
--
-- Indeks untuk tabel `order_tiket`
--
ALTER TABLE `order_tiket`
  ADD KEY `customer_order_id` (`customer_order_id`),
  ADD KEY `tiket_id` (`tiket_id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD KEY `konser_id` (`konser_id`),
  ADD KEY `tiket_cat_id` (`tiket_cat_id`);

--
-- Indeks untuk tabel `tiket_kategori`
--
ALTER TABLE `tiket_kategori`
  ADD KEY `konser_id` (`konser_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Ketidakleluasaan untuk tabel `order_tiket`
--
ALTER TABLE `order_tiket`
  ADD CONSTRAINT `order_tiket_ibfk_1` FOREIGN KEY (`customer_order_id`) REFERENCES `customer_order` (`customer_order_id`),
  ADD CONSTRAINT `order_tiket_ibfk_2` FOREIGN KEY (`tiket_id`) REFERENCES `tiket` (`tiket_id`);

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`konser_id`) REFERENCES `konser` (`konser_id`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`tiket_cat_id`) REFERENCES `tiket_kategori` (`tiket_cat_id`);

--
-- Ketidakleluasaan untuk tabel `tiket_kategori`
--
ALTER TABLE `tiket_kategori`
  ADD CONSTRAINT `tiket_kategori_ibfk_1` FOREIGN KEY (`konser_id`) REFERENCES `konser` (`konser_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
