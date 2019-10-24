-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2019 pada 04.12
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `resume` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_pendek` varchar(20) NOT NULL,
  `link_wa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `jenis_kelamin`, `ttl`, `agama`, `alamat`, `email`, `telpon`, `resume`, `foto`, `nama_pendek`, `link_wa`) VALUES
(0, 'Muhamad Fajar Rizqi', 'L', 'Tulungagung, 29 April 2002', 'Islam', 'JL. Terusan Batu Bara GG.6 No. 78', 'fajarizqi2002@gmail.com', '087776239077', 'Saya salah satu murid Vohisma, yaitu jurusan Rekayasa Perangkat Lunak. Dengan penglaman bekerja di software house selama 6 bulan.', '0.jpg', 'Fajar', 'https://api.whatsapp.com/send?phone=6287776239077');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `icon` varchar(20) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keahlian`
--

INSERT INTO `keahlian` (`id`, `judul`, `icon`, `keterangan`) VALUES
(1, 'Graphic Designer', 'fa-pencil', 'Biasa membuat vector atau mendesain banner, poster, dan lain-lain'),
(2, 'Fotografer', 'fa-camera', 'Juga sering memfoto keindahan alam atau hobby yaitu otomotif'),
(3, 'Web Designer', 'fa-code', 'Designer web dan aplikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `judul`, `tahun`, `keterangan`) VALUES
(1, 'Sekolah Dasar', '2008 - 2014', 'Pernah Bersekolah Di SDN Pandanwangi 1'),
(3, 'Sekola Menengah Pertama', '2014 - 2017', 'Pernah Bersekolah Di SMPN 24 MALANG'),
(4, 'Sekola Menengah Kejuruhan', '2017 - Sekarang', 'Sedang bersekolah di SMKN 5 Malang Jurusan Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `keterangan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `judul`, `tahun`, `keterangan`) VALUES
(1, 'Mendesain Front end Web Bioskop', '2018', 'Saat magang di qubite software pada tahun 2018. Saya membuat front end dari sebuah web bioskop, yaitu Denpasar Cineplex'),
(2, 'Web Aplication', '2018', 'Saat magang di qubite software pada tahun 2018. Saya juga ikut andil bagian dalam pembuatan aplikasi kasir'),
(3, 'Android Developer', '2019', 'Mengikuti salah satu program dari kominfo, yaitu SMK CODING untuk menambah wawasan tentang android developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `persentase` varchar(20) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `judul`, `persentase`, `warna`) VALUES
(2, 'HTML', '85%', 'red'),
(3, 'JavaScript', '65%', 'green'),
(4, 'PhP', '75%', 'blue');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `pass`) VALUES
(1, 'fajarizqi', '24bc50d85ad8fa9cda686145cf1f8aca');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
