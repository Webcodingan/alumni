-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2022 pada 08.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL DEFAULT '',
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `isi`, `gambar`, `tanggal`) VALUES
(6, 'Dampak Virus covid-19', 'Virus covid 19 yang masih merajalela di Indonesia', 'Pemerintah memperbarui data terkait kasus Corona di Indonesia. Hari ini dilaporkan ada tambahan 617 kasus positif COVID-19 di Indonesia. Data perkembangan penyebaran COVID-19 ini dipublikasi di situs Kemenkes, Dengan tambahan tersebut, jumlah total kasus COVID-19 yang ditemukan di Indonesia sejak Maret 2020 hingga hari ini menjadi 6.045.660 kasus. Dari jumlah tersebut, 9.142 masih positif Corona (kasus aktif). Dilaporkan juga, hari ini ada 1.178 orang di Indonesia yang sembuh dari COVID-19. Jumlah total yang telah sembuh dari Corona sebanyak 5.880.319 orang.', 'corona.jpg', '27-4-2021'),
(14, 'Bukber bersama', 'Warga melaksanakan buka bersama di Masjid Sunda Kelapa, Jakarta', 'Warga menyantap hidangan berbuka puasa di Masjid Agung Sunda Kelapa, Jakarta, Rabu (6/4/2022). Masjid Agung Sunda Kelapa kembali menggelar buka puasa bersama selama Ramadhan 1443 Hijriah, setelah dua tahun vakum akibat pandemi Covid19. ', 'images (1).jpg', '27-4-2022'),
(17, 'Acara Kelulusan SMK Cinta Kasih Tzu Chi', 'Kelulusan SMK tahun ajaran 2022 ', 'Acara nya berlangsung meriah dan haru', 'klls.jpg', '27-4-2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telepone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `email`, `no_telepone`) VALUES
(18, 'Danniel ', 'danniel.x2rpl20@cintakasihtzuc', 821146372),
(20, 'makmur', 'makmurabadi@gmail.com', 2147483647),
(21, 'jenny', 'jenny@gmail.com', 839221),
(22, 'jody', 'jody@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tahun_lulus` int(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `search`
--

INSERT INTO `search` (`id`, `nama`, `tahun_lulus`, `email`) VALUES
(10, 'Chandra Wijaya', 2022, 'Chandrawijaya.xirpl2@gmail.com'),
(16, 'Danniel ', 2023, 'danniel.x2rpl20@cintakasihtzuc'),
(21, 'Jose', 2022, 'Jose@gmail.com'),
(22, 'zayn', 2011, 'zayn_almalik@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(10, 'Admin', 'ADMIN', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, '', 'Daniel', 'liudaniel2201@gmail.com', '$2y$10$DMRJ3FDtNHk0PUhxDh2NlOjQYqrRw0hLHEq5wOcmq90IRwx26vixm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_file`
--

CREATE TABLE `u_file` (
  `id_gambar` int(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `u_file`
--

INSERT INTO `u_file` (`id_gambar`, `gambar`) VALUES
(12, 'kartini day.png'),
(13, 'sekul.jpg'),
(14, 'Merk-laptop-terbaik-7.jpg'),
(15, '1466345070.jpg'),
(17, 'sekul.jpg'),
(18, 'bukber.jpeg'),
(19, 'images (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `u_file`
--
ALTER TABLE `u_file`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `u_file`
--
ALTER TABLE `u_file`
  MODIFY `id_gambar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
