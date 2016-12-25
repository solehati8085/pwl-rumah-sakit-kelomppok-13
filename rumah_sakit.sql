-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Des 2016 pada 18.51
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(5) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12353 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password`) VALUES
(12345, 'MARTA DARMA PUTRA', '8096'),
(12346, 'NITA HERLINA', '8075'),
(12347, 'RIZQIKA ANNISA INSAN', '8093'),
(12348, 'FANDU SIGIT PAMBUDII', '8088'),
(12351, 'IIS SOLEHATI', '8085'),
(12352, 'PARADISE', '8097');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_dokter`
--

CREATE TABLE IF NOT EXISTS `detail_dokter` (
`id_detail_dokter` int(5) NOT NULL,
  `id_poli` int(5) NOT NULL,
  `id_dokter` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_dokter`
--

INSERT INTO `detail_dokter` (`id_detail_dokter`, `id_poli`, `id_dokter`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 0, 1),
(4, 1, 1),
(5, 3, 5),
(6, 1, 6),
(7, 3, 4),
(8, 4, 23),
(9, 5, 24),
(10, 1, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
`id_dokter` int(5) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `alamat_dokter` varchar(255) NOT NULL,
  `no_telpn_dokter` varchar(15) NOT NULL,
  `riwayat_pendidikan_dokter` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `alamat_dokter`, `no_telpn_dokter`, `riwayat_pendidikan_dokter`, `foto`) VALUES
(4, 'IIS SOLEHATI', 'PALEMBANG', '081234678901', 'S2 UNY', 'images/dokter/4.jpg'),
(6, 'PARADISE', 'JL FLAMBOYANn', '089765453123', 'S3 SPESIALIS JANTUNG', 'images/dokter/6.jpg'),
(23, 'NITA HERLINA', 'KLATEN', '087878787787', 'S2 AMIKOM', 'images/dokter/23.jpg'),
(24, 'MARTA DARMA PUTRA', 'BENGKULU', '098787586960', 'S3 STIPER', 'images/dokter/24.jpg'),
(25, 'FANDU SIGIT', 'KALIMANTAN', '098765433456', 'S2 SANATA', 'images/dokter/25.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(5) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `isi_event` text NOT NULL,
  `tgl_event` datetime NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `judul_event`, `isi_event`, `tgl_event`, `foto`) VALUES
(1, 'SEMINAR KESEHATAN', '<p>Seminar Kesehatan</p>', '2016-12-20 00:00:00', 'images/event/1.jpg'),
(2, 'DONOR DARAH', '<p>Donor Darah dilakukan setiap satu bulan&nbsp;sekali.</p>', '2016-12-19 00:00:00', 'images/event/2.jpg'),
(3, 'OPERASI KATARAK', '<p>Operasi katarak gratis dilakukan pada tanggal 28 Desember 2016</p>', '2012-06-07 00:00:00', 'images/event/3.jpg'),
(4, 'hbjh', '<p>hv</p>', '2012-12-13 00:00:00', 'images/event/12-12-13.jpg'),
(5, 'aku', '<p>hjknkjnjb</p>', '0000-00-00 00:00:00', 'images/event/5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `nama` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
`id_galeri` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`nama`, `foto`, `id_galeri`) VALUES
('DAPUR RUMAH SAKIT', 'images/galeri/1.jpg', 1),
('Operasi', 'images/galeri/2.jpg', 2),
('penelitian', 'images/galeri/penelitian.jpg', 3),
('Orientasi Dokter', 'images/galeri/Orientasi Dokter.jpg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
`id_hari` int(11) NOT NULL,
  `nama_hari` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(5) NOT NULL,
  `id_detail_dokter` int(5) NOT NULL,
  `id_hari` int(5) NOT NULL,
  `id_jam` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_detail_dokter`, `id_hari`, `id_jam`) VALUES
(1, 2, 1, 1),
(2, 1, 3, 1),
(3, 2, 2, 3),
(4, 2, 2, 3),
(5, 1, 2, 3),
(6, 6, 1, 4),
(7, 0, 2, 7),
(8, 7, 3, 5),
(9, 8, 3, 6),
(10, 9, 4, 7),
(11, 10, 5, 15),
(12, 9, 6, 16),
(13, 6, 7, 10),
(14, 8, 2, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
`id_jam` int(5) NOT NULL,
  `nama_jam` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id_jam`, `nama_jam`) VALUES
(4, '07.00-08.00'),
(5, '08.00-09.00'),
(6, '09.00-10.00'),
(7, '10.00-11.00'),
(8, '11.00-12.00'),
(9, '12.00-13.00'),
(10, '13.00-14.00'),
(11, '15.00-16.00'),
(12, '16.00-17.00'),
(13, '17.00-18.00'),
(14, '18.00-19.00'),
(15, '19.00-20.00'),
(16, '20.00-21.00'),
(17, '21.00-22.00'),
(18, '22.00-23.00'),
(19, '23.00-00.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
`id_pelayanan` int(5) NOT NULL,
  `nama_pelayanan` varchar(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `nama_pelayanan`, `deskripsi`, `foto`) VALUES
(1, 'Rawat Inap Dewasa', '<p>Instalasi Rawat Inap (Bangsal Perawatan Dewasa)</p>\r\n<p>Melayani perawatan kelas I,II,dan III dan&nbsp;Memiliki Pelayanan:</p>\r\n<ol>\r\n<li>Rawat Gabung (Perawatan Terpadu Bagi Ibu Yang Melahirkan Beserta Bayinya)</li>\r\n<li>a. Kebidanan dan Penyakit Kandungan</li>\r\n<li>Penyakit Dalam (geriatric, penyakit jantung,TBC,HIV/Aids,hepatitis,ginjal,endrokin,penyakit darah kanker)</li>\r\n<li>Bedah Urologi, Bedah Digestif,</li>\r\n<li>Bedah Saraf, Bedah Anak,</li>\r\n<li>Bedah Orthopaedi</li>\r\n<li>Bedah Onkologi</li>\r\n<li>Traumatologi</li>\r\n<li>Penyakit Mata</li>\r\n<li>Penyakit Saraf serta Paraplegia</li>\r\n<li>Penyakit Kulit dan Kelamin</li>\r\n<li>Penyakit THT</li>\r\n<li>Bedah Mulut</li>\r\n<li>Unit Stroke</li>\r\n</ol>\r\n<p>&nbsp;</p>', 'images/layanan/1.jpg'),
(2, 'Rawat Inap', '<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pusat Leukemia Anak</p>\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tumbuh Kembang Anak dan Remaja</p>\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gizi</p>\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hemato &ndash; Onkologi</p>\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Infeksi Tropik</p>\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pulmonologi</p>\r\n<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kardiologi</p>\r\n<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gastrohepatologi</p>\r\n<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nefrologi</p>\r\n<p>10.&nbsp;&nbsp; Yang dilengkapi dengan :</p>\r\n<p>11.&nbsp;&nbsp; Poliklinik Perjanjian&nbsp; &ldquo;Cempaka Mulya&rdquo;</p>\r\n<p>12.&nbsp;&nbsp; Rawat Inap Anak (kelas : VIP, Utama, I, II, III)</p>\r\n<p>13.&nbsp;&nbsp; Ruang Bermain</p>\r\n<p>14.&nbsp;&nbsp; Ruang Perawatan Isolasi Perlindungan</p>\r\n<p>15.&nbsp;&nbsp; Pelayanan Gawat Darurat</p>\r\n<p>16.&nbsp;&nbsp; Penunjang Diagnostik</p>\r\n<p>17.&nbsp;&nbsp; Pencitraan</p>', 'images/layanan/2.jpg'),
(3, 'RAWAT JALAN', '<p>Memberi&nbsp; Pelayanan/pemeriksaan :</p>\r\n<ul>\r\n<li>Glaukoma</li>\r\n<li>Katarak, Liveitis, Oftalmoimunologi</li>\r\n<li>Infeksi mata luar</li>\r\n<li>Kesehatan mata anak dan mata juling (strabismus)</li>\r\n<li>Retina</li>\r\n<li>Tumor mata dan trauma mata</li>\r\n<li>Penyakit saraf matya (neuroofalmalogi) dan oftalmogenetika</li>\r\n<li>Okuloplasti (bedah plastik mata)</li>\r\n<li>Pengukuran kaca mata dan lensa kontak</li>\r\n<li>Low Vision (setiap hari Senin)</li>\r\n</ul>', 'images/layanan/3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE IF NOT EXISTS `poli` (
`id_poli` int(11) NOT NULL,
  `nama_poli` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'POLI HATI'),
(3, 'POLI MATA'),
(4, 'POLI ANAK'),
(5, 'POLI PENYAKT DALAM'),
(6, 'POLI JANTUNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id_profile` int(5) NOT NULL,
  `visi_profile` text NOT NULL,
  `misi_profile` text NOT NULL,
  `sejarah_profile` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `visi_profile`, `misi_profile`, `sejarah_profile`) VALUES
(4, '<p>afdf</p>', '<p>asf</p>', '<p>SDd</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_dokter`
--
ALTER TABLE `detail_dokter`
 ADD PRIMARY KEY (`id_detail_dokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
 ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
 ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
 ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
 ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12353;
--
-- AUTO_INCREMENT for table `detail_dokter`
--
ALTER TABLE `detail_dokter`
MODIFY `id_detail_dokter` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id_galeri` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
MODIFY `id_jam` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
MODIFY `id_pelayanan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `id_profile` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
