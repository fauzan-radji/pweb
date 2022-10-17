-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2022 pada 17.41
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
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `judul` varchar(256) NOT NULL,
  `genre` varchar(12) NOT NULL,
  `keterangan` varchar(16) NOT NULL,
  `penulis` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`judul`, `genre`, `keterangan`, `penulis`) VALUES
('Harry Potter', 'Fantasi', 'Selesai Dibaca', 'JK Rowling'),
('Naruto', 'Fantasi', 'Sementara Dibaca', 'Masashi Kishimoto'),
('Pulang-Pergi', 'Romatis', 'Belum Dibaca', 'Tere Liye'),
('Garis Waktu', 'Romatis', 'Selesai Dibaca', 'Fiersa Besari'),
('Bumi', 'Fantasi', 'Belum Dibaca', 'Tere Liye'),
('Bulan', 'Fantasi', 'Belum Dibaca', 'Tere Liye'),
('Negeri Di Ujung Tanduk', 'Fiksi ilmiah', 'Belum Dibaca', 'Tere Liye'),
('Eragon', 'Fiksi ilmiah', 'Belum Dibaca', 'Christoper Paolini'),
('Death Note', 'Fantasi', 'Sementara Dibaca', 'Tsugumi Ohba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quotes`
--

DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes` (
  `author` varchar(64) NOT NULL,
  `isi` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `quotes`
--

INSERT INTO `quotes` (`author`, `isi`) VALUES
('J. K. Rowling', 'Ketika kamu ragu akan sesuatu, carilah di perpustakaan.'),
('Stephen King', 'Buku adalah sebuah portal sihir.'),
('Walt Disney', 'Ada lebih banyak harta di dalam buku daripada yang di dapat perampok di Pulau Harta.'),
('Theordore Rosevelt', 'Aku adalah bagian dari semua yang telah aku baca.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
