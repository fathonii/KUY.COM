-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2019 pada 11.47
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status_login` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user_id`, `user_pass`, `level`, `status_login`) VALUES
(1, 'admin', 'admin', 'admin', 0),
(2, 'user', 'user', 'user', 1),
(3, 'alharis.dharmariski1049', 'aaaaaaaaaaaaaaaa', 'user', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `tempat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`tempat`) VALUES
('CGV TRANSMART LAMPUNG'),
('BOEMI KEDATON XXI'),
('CENTRAL 21'),
('MALL KARTINI XXI PREMIERE'),
('CGV GRAND INDONESIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_beli` int(11) NOT NULL,
  `judul_film` varchar(256) NOT NULL,
  `harga_film` int(10) NOT NULL,
  `tempat` varchar(256) NOT NULL,
  `jadwal` varchar(5) NOT NULL,
  `kursi` varchar(100) NOT NULL,
  `makan_minum` varchar(256) NOT NULL,
  `harga_makan_minum` int(10) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `promo` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_beli`, `judul_film`, `harga_film`, `tempat`, `jadwal`, `kursi`, `makan_minum`, `harga_makan_minum`, `kode`, `promo`, `total`) VALUES
(76, 'my Stupid BOSS 2', 35000, '', '', '', '', 0, '', 0, 0),
(77, 'my Stupid BOSS 2', 35000, '', '', '', '', 0, '', 0, 0),
(78, 'my Stupid BOSS 2', 35000, '', '', '', '', 0, '', 0, 0),
(79, 'my Stupid BOSS 2', 35000, '', '', '', '', 0, '', 0, 0),
(80, 'PERCY JACKSON & THE LIGHTNING THIEF', 50000, 'CGV TRANSMART LAMPUNG', '10:15', 'A7', 'Nu Green Tea', 10000, '', 0, 0),
(81, 'my Stupid BOSS 2', 35000, 'CGV TRANSMART LAMPUNG', '10:15', 'A8', '', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uu`
--

CREATE TABLE `uu` (
  `id` int(11) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `title` varchar(256) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uu`
--

INSERT INTO `uu` (`id`, `imagename`, `image_text`, `title`, `harga`) VALUES
(38, '1.jpg', '22 Desember 1990, Dilan (Iqbaal Ramadhan) dan Milea (Vanesha Prescilla) resmi berpacaran. Ditengah kebahagiaan mereka Dilan terancam dipecat dari sekolah akibat perkelahian dengan Anhar (Giulio Parengkuan). Dilan juga semakin sering berkelahi dan mendapatkan musuh.Milea khawatir dengan masa depan Dilan. Milea merasa berhak melarang Dilan terlibat dalam geng motor. Suatu ketika, Dilan dikeroyok oleh orang tak dikenal. Saat mengetahui siapa yang berbuat, Dilan merencanakan balas dendam. Milea akhirnya meminta Dilan berhenti dari geng motor atau hubungan mereka berakhir. Dilan, seorang panglima tempur dan ketua geng motor, akan selalu terlibat masalah. Di tengah semua masalah itu, hadir Yugo (Jerome Kurnia), anak dari sepupu jauh ayah Milea yang baru pulang dari Belgia. Mereka sering menghabiskan waktu bersama. Yugo menyukai Milea. Dan Milea...hanya mencintai Dilan.', 'Dilan (1991)', 30000),
(39, '2.jpg', 'Karena kekurangan karyawan pabrik, Bossman (Reza Rahadian) berniat mencari karyawan baru di Vietnam. Berangkatlah Bossman, Diana (Bunga Ctra Lestgari), Mr Kho (Chew Kin Wah), dan Adrian (Iedil Putra ) ke Vietnam.  Di Vietnam alih-alih mendapatkan karyawan, mereka justru mendapatkan bertubi-tubi masalah karena ulah Bossman: Bossman melanggar kesepakatan jumlah gaji yang membuat para calon pekerja Vietnam mengamuk; dan ditahan di kantor polisi. Sementara itu di Kuala Lumpur, Norahsikin (Atikah Suhaemi) dan Azahari (Iskandar Zulkarnaen) juga harus menghadapi masalah. Keduanya disandera oleh gangster sampai Bossman mau melunasi hutangnya. Kali ini ulah Bossman membuat Diana dkk geram dan berpikir untuk melakukan sesuatu.', 'my Stupid BOSS 2', 35000),
(40, '3.jpg', 'Pada tahun 1995, Carol Danvers (Brie Larson), mantan pilot Angkatan Udara Amerika Serikat, berubah menjadi salah satu pahlawan terkuat galaksi dan bergabung dengan Starforce, sebuah tim elit militer Kree, sebelum kembali ke rumahnya di Bumi dengan pertanyaan baru tentang masa lalu dan identitasnya ketika Bumi terjebak di pusat konflik galaksi antara dua dunia asing.', 'CAPTAIN MARVEL', 50000),
(41, '4.jpg', 'Percy tak menyadari bahwa ia adalah manusia setengah dewa dan dituduh telah mencuri petir Zeus. Kini pencariannya adalah untuk menyelamatkan ibunya dari Underworld dan mendapatkan petir dari Hades.', 'PERCY JACKSON & THE LIGHTNING THIEF', 50000),
(42, '5.jpg', 'Meski ber ayah kan seorang banser, Rahabi tidak bangga. Di kampus, Rahabi bersahabat dengan Markus, umat kristiani, Hitu yang bercita-cita menjadi Banser, Sayid calon novelis, dan Tiara yang juga bermasalah dengan keluarga nya. Mereka membentuk grup acapella dengan nama Rujak Acapella. Rahabi ingin Rujak acapella sukses demi membiayai kuliah kedokteran Rara, adiknya.', 'Bumi itu Bulat', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu`
--

CREATE TABLE `waktu` (
  `jadwal` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `waktu`
--

INSERT INTO `waktu` (`jadwal`) VALUES
('10:15'),
('15:20'),
('20:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `uu`
--
ALTER TABLE `uu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `uu`
--
ALTER TABLE `uu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
