-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2020 pada 09.02
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smp7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'Idul Adha', '2020-01-03 03:44:55', 'Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. SMP Negeri 7 tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.', '2017-01-22', '2017-01-22', 'SMP 7', '08.00 - 11.00 WIB', 'Dihadiri oleh guru-guru, siswa dan pengurus OSIS', 'Bagian Kesiswaan'),
(2, 'Peluncuran Website', '2020-01-03 03:45:33', 'Peluncuran website resmi  SMP Negeri 7, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2017-01-04', '2017-01-04', 'SMP 7', '07.30 - 12.00 WIB', '', 'Bagian Riset dan Teknologi'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018', '2020-01-03 03:46:18', 'Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.', '2017-02-17', '2017-02-17', 'SMP 7', '07.30 - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'Bagian Kesiswaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`album_id`, `album_nama`, `album_tanggal`, `album_author`, `album_count`, `album_cover`) VALUES
(9, 'Profil Sekolah', '2020-01-02 14:44:53', 'Tim Dokumenter', 20, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`) VALUES
(18, 'Belajar di luar ruangan merupakan cara yang efektif dalam belajar', '<p>Menjalani aktifitas belajar yang padat, terkadang dapat meningkatkan stres yang tinggi bagi siswa. Setiap siswa memiliki cara yang berbeda untuk mengembalikan semangat mereka dalam belajar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel v Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:15:54', 1, 'Pendidikan', 7, '2dc57557d0e3902753e5e88979119e67.jpg', 1, 'M Fikri Setiadi', 1),
(19, 'Cantik, multi talenta. itulah sebuat untuk siswa yang satu ini', '<p>Talenta luar biasa bukan hanya dimiliki oleh kaum pria saja. Nyatanya siswa cantik yang satu ini sangat berakat memainkan alat musik tradisional yaitu seruling. Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel &nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel v Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel vv Ini adalah sampel artikel Ini adalah sampel artikel vvv Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:21:24', 6, 'Prestasi', 4, '2c4b0960f1ca907c24af163b29ae1cec.jpg', 1, 'M Fikri Setiadi', 0),
(20, 'Persiapan siswa menjelang ujian nasional', '<p>Banyak metode bejalar yang dilakukan oleh siswa untuk persiapan menghadapi ujian nasional (UN). Biantaranya mengingat dengan metode Mind Map, ataupun bejalar diluar kelas (outdoor).&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:24:42', 1, 'Pendidikan', 1, 'df0d8ccac0ba567fe01079b0477c5c12.jpg', 1, 'M Fikri Setiadi', 1),
(21, 'Siswi alai M-Sekolah', '<p>Remaja beumur 15-22 tahun, biasa beperilaku alai dan cenderung lebai. Di M-Sekolah sendiri ada begitu banyak siswa yang berperilaku alai dan lebai. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:34:28', 1, 'Pendidikan', 6, '20b326d88bc3454a82624a671021e1da.jpg', 1, 'M Fikri Setiadi', 0),
(22, 'Prestasi membangga dari siswa m-sekolah', '<p>Prestasi dan penghargaan merupakan trigger (pemicu) semangat belajar siswa. Ada banyak prestasi yang telah diraih oleh siswa m-sekolah. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:38:21', 6, 'Prestasi', 2, '2b594ea1f1b782e89f10f572ce193122.jpg', 1, 'M Fikri Setiadi', 1),
(23, 'Pelaksanaan Ujian Nasional M-Sekolah', '<p>Pelaksanaan UN (Ujian Nasional) di sekolah M-Sekolah berlangsung tentram dan damai. Terlihat ketenangan terpancar diwajah siswa berprestasi.&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:41:30', 1, 'Pendidikan', 5, '6866d36b2085f40dd4d5b18b664af6bc.jpg', 1, 'M Fikri Setiadi', 0),
(24, 'Proses belajar mengajar m-sekolah', '<p>Proses belajar mengajar di sekolah m-sekolah berlangsung menyenangkan. Didukung oleh instruktur yang fun dengan metode mengajar yang tidak biasa. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel a Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 09:46:29', 1, 'Pendidikan', 3, '67bac7f1c3891034cf9d55e66c44aa10.jpg', 1, 'M Fikri Setiadi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `data_id` int(11) NOT NULL,
  `data_sambutan` text NOT NULL,
  `data_visi` text NOT NULL,
  `data_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`data_id`, `data_sambutan`, `data_visi`, `data_misi`) VALUES
(0, '   \r\nPuji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya, sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan. Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang imbalan apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita. Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi perkembangan zaman. Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik mungkin, sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang kontekstual dan efektif, kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi M-Sekolah, sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.\r\n\r\n\r\nDalam sebuah sistem ketata kelolaan Sekolah Berbasis Manajemen, kami berusaha terus meningkatkan kinerja dan profesionalisme demi terwujudnya pelayanan prima dalam cakupan Lembaga Pendidikan terutama di Sekolah M-Sekolah ini. Kami sudah mulai menerapkan sistem Teknologi Komputerisasi agar transparansi pengelolaan pendidikan terjaga optimalisasinya. Sebuah sistem akan bermanfaat dan berdaya guna tinggi jika didukung dan direalisasikan oleh semua komponen yang berkompeten di M-Sekolah baik sistem manajerial, akademik, pelayanan publik, prestasi,moralitas dan semua hal yang berinteraksi di dalamnya. Alhamdulilah peningkatan tersebut dapat dilihat dari data-data kepegawaian dan karya-karya nyata yang telah dihasilkan walaupun masih ada kelemahan yang terus kami treatment dengan menyeimbangkan hasil kinerja dan prize yang diberikan. Mudah-mudahan semua yang kita berikan untuk kemajuan dan keajegan nilai-nilai pendidikan dapat terus meningkat.        \r\n\r\n\r\nSecara pribadi saya mohon maaf, jika pemenuhan tuntutan dan kinerja yang saya lakukan masih ada kelemahan. Oleh karena itu, bantuan dan kerjasama dari berbagai pihak untuk optimalisasi mutu dan kualitas pendidikan sangat saya harapkan. Mudah-mudahan dalam tiap langkah dan nafas kita menciptakan nilai jual yang tinggi bagi keilmuan dan nilai hakiki di hadapan Tuhan Yang Maha Esa.\r\nDemikian sambutan ini saya sampaikan, ditutup dengan pesan moral dan keilmuan bagi kita semua.\r\n', ' Ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel visi ini adalah sampel ini adalah sampel visi ini adalah sampel visi.', 'Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi. Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi.Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi Ini adalah sampel misi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(14, 'Surat Pemberitahuan', NULL, '2020-01-03 03:54:35', 'Tata Usaha', 0, '2d25fdf4f028a7e1c4e7b4a8718dc5c4.docx'),
(15, 'Form Penghasilan Orang Tua', NULL, '2020-01-03 04:00:37', 'Tata Usaha', 0, '90a9f735e2e3ce7bb504fd58efd1e0a3.doc'),
(16, 'Contoh Surat Izin Sekolah', NULL, '2020-01-03 04:08:11', 'Tata Usaha', 0, 'ab9aca067f5e0570b6f200ce1d0c6f99.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_author`) VALUES
(21, 'Piala Sekolah', '2020-01-02 20:00:00', '066418760cc447ad751bca429bc43131.jpeg', 9, 'Tim Dokumentasi'),
(22, 'Piala Sekolah', '2020-01-02 20:00:12', 'bde7ca677ef732442e6924190b65a903.jpeg', 9, 'Tim Dokumentasi'),
(23, 'Piala Sekolah', '2020-01-02 20:00:25', '109439e5b2dfb11b31d20896ef57f5b0.jpeg', 9, 'Tim Dokumentasi'),
(24, 'Tempat Parkir Guru', '2020-01-02 20:00:39', 'f975a63f428b243108e571cf5ac4addf.jpeg', 9, 'Tim Dokumentasi'),
(25, 'Gerbang Sekolah', '2020-01-02 20:00:53', '750a7026d9b82aaf32feb3e281c27e44.jpeg', 9, 'Tim Dokumentasi'),
(26, 'Pos Security', '2020-01-02 20:01:06', 'b7113cf73520022e98ad969e086561a7.jpeg', 9, 'Tim Dokumentasi'),
(27, 'Ruang Guru', '2020-01-02 20:01:21', '50d8d3559187aa9a4bc3481eac24a0c2.jpeg', 9, 'Tim Dokumentasi'),
(28, 'Ruang Guru', '2020-01-02 20:01:34', 'a9e90d73db465d8d01f58164963d9ad3.jpeg', 9, 'Tim Dokumentasi'),
(29, 'Ruang Kelas', '2020-01-02 20:02:01', '1ddc73190c8f6a23bb9f5c950ded1701.jpeg', 9, 'Tim Dokumentasi'),
(30, 'Lorong Kelas', '2020-01-02 20:02:21', 'b21063ae032e1acaa52ab9a6e962ee61.jpeg', 9, 'Tim Dokumentasi'),
(31, 'Lorong Kelas', '2020-01-02 20:02:36', '75d7b8dad47e2211fee5310376ba536e.jpeg', 9, 'Tim Dokumentasi'),
(32, 'Lapangan Sekolah', '2020-01-02 20:02:54', 'e126971fc69da4e1173696c1532762c7.jpeg', 9, 'Tim Dokumentasi'),
(33, 'Taman Sekolah', '2020-01-02 20:03:15', 'baebde236dba1a21c6f824d8db35df9b.jpeg', 9, 'Tim Dokumentasi'),
(34, 'Lapangan Basket', '2020-01-02 20:03:44', '08b6bd5cb5300cd4d7436bfd23de7db1.jpeg', 9, 'Tim Dokumentasi'),
(35, 'Ruang Kelas', '2020-01-02 20:04:16', '0927202665d67a110710d79bcd2ab4fc.jpeg', 9, 'Tim Dokumentasi'),
(37, 'Perpustakaan Sekolah', '2020-01-02 20:05:38', '22ef9e802dfb6975e55fe17c994dfec1.jpeg', 9, 'Tim Dokumentasi'),
(38, 'Program 9K Sekolah', '2020-01-02 20:06:04', '23b7d2d49a45a2b3261c07eef0aa8500.jpeg', 9, 'Tim Dokumentasi'),
(39, 'Beranda Sekolah', '2020-01-02 20:06:16', '8c2042adfb7e8535c87829501b2b8df9.jpeg', 9, 'Tim Dokumentasi'),
(40, '5 Mantap', '2020-01-02 20:06:24', 'a2fd56ca44c433cad4a30d1b31243cbd.jpeg', 9, 'Tim Dokumentasi'),
(41, 'halaman ', '2020-01-03 07:26:26', '72727d01bd6ad29229caaa68205c917c.jpeg', 9, 'saya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `guru_keterangan` varchar(100) NOT NULL,
  `guru_jabatan_id` int(11) NOT NULL,
  `guru_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_mapel`, `guru_photo`, `guru_tgl_input`, `guru_keterangan`, `guru_jabatan_id`, `guru_jenis_id`) VALUES
(121, '19721105 199802 2 001', 'Siti Latifah, S.Pd, M.Pd', '', '', '', 'IPA', '', '0000-00-00 00:00:00', '', 1, 1),
(122, '19590813 197903 1 003', 'Drs. Sulistyo', 'L', 'Klaten', '13-08-1964', 'IPA', '28432b7d1879b01c381c0c49cf728c95.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(123, '19610104 198112 2 002', 'Dra. Nurnaningsih', '', '', '', 'IPS', '', '0000-00-00 00:00:00', '', 1, 1),
(124, '19610603 198603 2 006', 'Dra. Glutida Hermini', '', '', '', 'IPS', '', '0000-00-00 00:00:00', '', 1, 1),
(125, '19601011 198603 1 015', 'Drs. Hadi Wibowo', 'L', '', '', 'BK', '', '0000-00-00 00:00:00', ' ', 1, 2),
(126, '19610513 198503 2 008', 'Heni Riyanti, S.Pd', '', '', '', 'IPA', '', '0000-00-00 00:00:00', '', 1, 1),
(127, '19600125 198403 1 007', 'Sunarto, S.Pd', '', '', '', 'Matematika', '', '0000-00-00 00:00:00', '', 1, 1),
(128, '19610712 198403 1 019', 'Suparno, S.Pd', '', '', '', 'Matematika', '', '0000-00-00 00:00:00', '', 1, 1),
(129, '19610603 198603 2 006', 'Ratna Trianawanti, S.Pd', 'P', 'Surakarta', '30-01-1962', 'Matematika', '1188b2c960731ce7cc3df81f9deb73e2.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(130, '19650324 198803 2 008', 'Sri Martuti, S.Pd', '', '', '', 'IPA', '', '0000-00-00 00:00:00', '', 1, 1),
(131, '19610804 198403 2 005', 'Sri Agustini, S.Pd', '', '', '', 'Matematika', '', '0000-00-00 00:00:00', '', 1, 1),
(132, '19601010 198303 2 027', 'Musdalifah, S.Pd', '', '', '', 'Matematika', '', '0000-00-00 00:00:00', '', 1, 1),
(133, '19610627 198603 2 009', 'Puji Hartati, S.Pd', 'P', '', '', 'BK', '', '0000-00-00 00:00:00', ' ', 1, 2),
(134, '19631029 199512 1 001', 'Drs. Joko Riyanto', 'L', 'Magelang', '29-10-1963', 'BK', '008ad561ed3ac820ea64082daa3eb2f4.jpg', '0000-00-00 00:00:00', ' ', 1, 2),
(135, '19640923 198601 2 005', 'Rahmayanti, S.Pd', '', '', '', 'Seni Budaya', '', '0000-00-00 00:00:00', '', 1, 1),
(136, '19640409 198703 1 010', 'Suprapto, S.Pd', 'L', 'Sukoharjo', '09-04-1964', 'Bahasa Inggris', '10792ce42e5d6340272e23ab81aaae98.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(137, '19640430 198903 1 014', 'Yaro Alfara', '', '', '', 'IPS,Prakarya', '', '0000-00-00 00:00:00', '', 1, 1),
(138, '19650409 198702 2 008', 'Asih Eko Rini Lulusiana, S.PAK', 'P', 'Surakarta', '09-04-1965', 'Pend. Ag. Kristen', '10ead21df8d5fb67b38cf54e2b67d742.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(139, '19640813 198403 2 002', 'Runi Atmirah, S.Pd', '', '', '', 'PPKn', '', '0000-00-00 00:00:00', '', 1, 1),
(140, '19670706 199512 2 006', 'Dra. Tri Astuti', '', '', '', 'Bahasa Inggris', '', '0000-00-00 00:00:00', '', 1, 1),
(141, '19670428 199003 2 007', 'Kartikarini Evi Rakhmaningdyah, S.Pd', '', '', '', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '', 1, 1),
(142, '19631127 199802 2 001', 'Dra. Dwi Atminingsih', '', '', '', 'IPS', '', '0000-00-00 00:00:00', '', 1, 1),
(143, '19680608 199802 2 009', 'Tri Hastuti Pendo Puspaningrum, S.Pd', '', '', '', 'Bahasa Jawa', '', '0000-00-00 00:00:00', '', 1, 1),
(144, '19600520 198301 1 004', 'Vera Lucia Soepadi', 'P', 'Surakarta', '20-05-1960', 'Bahasa Indonesia', '7217d491523a2a94f1552562be376ec6.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(145, '19590706 198601 1 003', 'Mulyadi, S.Pd', 'L', 'Sukoharjo', '06-07-1959', 'Penjasorkes', 'fb65719654af42472f68490dc00f01ac.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(146, '19690413 199903 2 004', 'Nur Rokhmawati, S.Ag', 'P', 'Surakarta', '13-04-1969', 'Pend. Ag. Islam', '9fa296618e159494b634aa33111a347a.jpg', '0000-00-00 00:00:00', ' ', 1, 1),
(147, '19620907 198903 1 011', 'Soemo Haryomo, S.Pd', '', '', '', 'Penjasorkes', '', '0000-00-00 00:00:00', '', 1, 1),
(148, '19750125 200501 2 017', 'Dian Ekawati, S.Pd', 'P', 'Surakarta', '25-01-1975', 'Bahasa Inggris', '593c04217300f5f2b8e566f0b5f8a6de.jpg', '0000-00-00 00:00:00', ' ', 2, 1),
(149, '19591206 198301 1 004', 'Hariyoto, SE', 'L', 'Boyolali', '06-12-1959', 'IPS', '68b474ca0939da7a901f792ccd1236d4.jpg', '0000-00-00 00:00:00', ' ', 2, 1),
(150, '19790808 200604 1 008', 'Agung Wijayanto, S.Psi, M.Pd', 'L', 'Sragen', '08-08-1979', 'BK', 'b62f20c411111d2d4e9faeaa18a6fbb1.jpg', '0000-00-00 00:00:00', ' ', 1, 2),
(151, '19611016 198412 2 001', 'Aas Asiah, S.Pd', '', '', '', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '', 2, 1),
(152, '19650622 200701 2 007', 'Tri Puji Hastuti, SH', '', '', '', 'PPKn', '', '0000-00-00 00:00:00', '', 2, 1),
(153, '19790120 200902 2 003', 'Qoribah Rahmawati, S.Pd', 'P', 'Surakarta', '20-01-1979', 'Pend. Ag. Islam', '7a35366a9d7b8e1ce88ec59eceef4dbc.jpg', '0000-00-00 00:00:00', ' ', 3, 1),
(154, '19681207 200701 2 011', 'Lidia Stefana Rina Harmastuti, S.Ag', 'P', 'Surakarta', '7-12-1968', 'Pend. Ag. Katholik', 'afcc5233553f1778d7587af0613cec23.jpg', '0000-00-00 00:00:00', ' ', 3, 1),
(155, '19671121 200801 1 007', 'A. Triangkoso Warsito, S.Pd', '', '', '', 'IPA', '', '0000-00-00 00:00:00', '', 3, 1),
(156, '19711207 200701 1 024', 'Kasih Hanggeni, S.Pd', 'L', 'Surakarta', '20-11-1971', 'Seni Budaya', 'b5ad2dd5bc7397cc736ffd12d93a8be9.jpg', '0000-00-00 00:00:00', ' ', 3, 1),
(157, '19750910 201001 1 014', 'B. Bimo Fitertika, S.Sn, M.Sn', '', '', '', 'Seni Budaya', '', '0000-00-00 00:00:00', '', 3, 1),
(158, '19640808 200701 1 020', 'Maryadi, A.Md', 'L', 'Boyolali', '08-08-1964', 'Bahasa Inggris', '37259ddf59da12230ed3cd310093b6de.jpg', '0000-00-00 00:00:00', ' ', 3, 1),
(159, '19851011 201101 2 008', 'Dwi Nur Fatimah, S.Kom', 'P', 'Salatiga', '11-10-1985', 'TIK, Prakarya', 'c61411df92e13e7b0fa750930e4ae28f.jpg', '0000-00-00 00:00:00', ' ', 3, 1),
(160, '19620114 201406 2 001', 'Dra. Wulandjari Retno Rahaju', '', '', '', 'Bahasa Indonesia', '', '0000-00-00 00:00:00', '', 3, 1),
(161, '19710608 201406 2 001', 'Karunia Kusumawati, S.Pd', 'P', 'Semarang', '08-06-1971', 'Bahasa Indonesia', 'a751201afe2743be0bf66562650e649d.jpg', '0000-00-00 00:00:00', ' ', 3, 1),
(162, '19880620 201902 2 006', 'Arifatun Nafiah, S.Pd', '', '', '', 'PPKn', '', '0000-00-00 00:00:00', '', 4, 1),
(163, '19910224 201902 2 003', 'Ita Rahmawati, S.Pd', 'P', '', '', 'BK', '', '0000-00-00 00:00:00', ' ', 4, 2),
(164, '19950212 201902 1 002', 'Fenu Anwar, S.Pd', '', '', '', 'Pend. Ag. Islam', '', '0000-00-00 00:00:00', '', 4, 1),
(165, '19630908 199512 1 002', 'Drs. Agus Suntoro, M.Pd', '', '', '', 'Matematika', '', '0000-00-00 00:00:00', '', 1, 1),
(166, '19640421 200801 2 004', 'Dra. Partini', '', '', '', 'IPS, Prakarya', '', '0000-00-00 00:00:00', '', 3, 1),
(167, '19700923 200801 1 007', 'Kristianto, S.Pd', '', '', '', '', '', '0000-00-00 00:00:00', '', 2, 1),
(168, '19670302 200604 2 013', 'Sri Mulyani, S.Pd', '', '', '', 'PPKn', '', '0000-00-00 00:00:00', '', 2, 1),
(169, '-', 'Didik Harliyandoko, S.PdI', '', '', '', 'Pend. Ag. Islam ', '', '0000-00-00 00:00:00', '', 0, 1),
(170, '-', 'Dewi Pramestuti, S.Pd', '', '', '', 'Pend. Ag. Hindu', '', '0000-00-00 00:00:00', '', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'Mamat', 'mamatgaming@gmail.com', '-', 'Assalamu\'alaikum', '2019-12-15 03:44:12', 0),
(3, 'coy', 'coygaming@gmail.com', '-', 'Ini adalah pesan ', '2019-12-15 03:44:12', 0),
(5, 'Sandi', 'sandibarbar@gmail.com', '-', 'Ping !', '2019-12-15 03:44:12', 0),
(7, 'Ucok', 'ucok@gmail.com', '-', 'Hi, there!', '2019-12-15 03:44:12', 0),
(10, 'Sando', 'iqbalnurhaq@ymail.com', '33', 'saya tinggalkan pesan disini\r\n', '2019-12-29 11:53:06', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_nama`) VALUES
(0, '-'),
(1, 'Guru Madya'),
(2, 'Guru Muda'),
(3, 'Guru Pertama'),
(4, 'CPNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_guru`
--

CREATE TABLE `jenis_guru` (
  `jenis_guru_id` int(11) NOT NULL,
  `jenis_guru_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_guru`
--

INSERT INTO `jenis_guru` (`jenis_guru_id`, `jenis_guru_nama`) VALUES
(1, 'Guru Mapel'),
(2, 'Guru BK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(2, 'Politik', '2016-09-06 05:50:01'),
(3, 'Sains', '2016-09-06 05:59:39'),
(5, 'Penelitian', '2016-09-06 06:19:26'),
(6, 'Prestasi', '2016-09-07 02:51:09'),
(13, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'Kelas 7A'),
(2, 'Kelas 7B'),
(3, 'Kelas 7C'),
(4, 'Kelas 7D'),
(5, 'Kelas 7E'),
(6, 'Kelas 7F'),
(7, 'Kelas 7G'),
(8, 'Kelas 7H'),
(9, 'Kelas 8A'),
(10, 'Kelas 8B'),
(11, 'Kelas 8C'),
(12, 'Kelas 8D'),
(13, 'Kelas 8E'),
(14, 'Kelas 8F'),
(15, 'Kelas 8G'),
(16, 'Kelas 8H'),
(17, 'Kelas 9A'),
(18, 'Kelas 9B'),
(19, 'Kelas 9C'),
(20, 'Kelas 9D'),
(21, 'Kelas 9E'),
(22, 'Kelas 9F'),
(23, 'Kelas 9H');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(3, 'Admin', NULL, 'L', 'Admin', '7488e331b8b64e5794da3fa4eb10ad5d', NULL, 'mmt@gmail.com', '081288831443', NULL, NULL, NULL, NULL, 1, '1', '2017-01-12 03:29:47', 'ea682f37eef8fa2ca3e037d30323ecca.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_isi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_isi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2019', '   Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 sampai dengan tanggal 7 September 2019.', '2019-11-28 02:16:22', 'Bagian Kesiswaan'),
(2, 'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2016-2017', '  Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2016-2017, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB.\r\nYang bertempat kelas masing-masing. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2019-11-28 02:09:20', 'Tata Usaha'),
(4, 'Pengumuman Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2019', ' Setelah libur semester ganjil tahun ajaran 2019, proses belajar mengajar di semester genap tahun ajaran 2019 mulai aktif kembali tanggal 2 Maret 2020.', '2017-01-22 02:15:14', 'Bagian Kesiswaan'),
(5, 'Pengumuman Peresmian dan Launching Website SMP Negeri 7', '  Peresmian dan launching website resmi akan diadakan pada hari 23 Desember 2019 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2019', '2019-11-28 02:11:12', 'Kepala Sekolah'),
(6, 'Pembelajaran sekolah', ' Untuk anak kelas 9 diharapkan untuk dapat mengikuti kegiatan sekolah dengan tepat', '2019-12-29 13:47:55', 'Bagian Kesiswaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_tmp_lahir` varchar(20) NOT NULL,
  `siswa_tgl_lahir` varchar(45) NOT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL,
  `siswa_alamat` varchar(100) NOT NULL,
  `siswa_keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_tmp_lahir`, `siswa_tgl_lahir`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_photo`, `siswa_alamat`, `siswa_keterangan`) VALUES
(1, '9287482', 'Sandi Nur Alam alamsyah', 'Depok Bekasi jabar', '8 Oktober 1912', 'P', 13, 'bf883909ad6b991ec9b264fd02beb01b.jpg', 'Jl. Merdeka, wegah sambat, wani rekoso', 'Juara 1 Mobile Legends'),
(20, '14859', 'ABKAR DWI ISWANTO', 'SURAKARTA', '2007-03-08', 'L', 1, '', 'RT.5 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(21, '14610', 'AFIELDA RIVARA PRASTA DITA AFRODITH', 'SURAKARTA', '2006-12-29', 'P', 1, '', 'RT.3 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(22, '14611', 'AGIL TIKA PRAMESI', 'SURAKARTA', '2007-05-07', 'P', 1, '', 'RT.3 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(23, '14612', 'ARIF BURHANUDDIN', 'SURAKARTA', '2006-12-13', 'L', 1, '', 'RT.5 RW.4 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(24, '14613', 'DAMAR EKA OKTAVIYANTO', 'SURAKARTA', '2006-10-26', 'L', 1, '', 'RT.2 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(25, '14614', 'DESI CITRA ANDRIYANI', 'SURAKARTA', '2006-12-06', 'P', 1, '', 'RT.3 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(26, '14615', 'DIAN PUTRA ALAMSYAH', 'SURAKARTA', '2007-05-28', 'L', 1, '', 'RT.1 RW.19 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(27, '14616', 'DINAR PRAMESTI', 'WONOGIRI', '2006-07-18', 'P', 1, '', 'RT.2 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(28, '14617', 'DIVA RANIA SARI', 'KAB. SEMARANG', '2005-03-13', 'P', 1, '', 'RT.2 RW.19 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(29, '14619', 'FARREL ADITYA WIJAYA', 'SURAKARTA', '2006-08-19', 'L', 1, '', 'RT.6 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(30, '14620', 'FARREL KUNUDHANI YUDISTIRA', 'SURAKARTA', '2006-12-09', 'L', 1, '', 'RT.3 RW.20 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(31, '14621', 'HANUNG DIAS LAKSANA', 'SURAKARTA', '2005-03-11', 'L', 1, '', 'RT.1 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(32, '14622', 'KRISABELLA WAHYU NUR AINI', 'SURAKARTA', '2006-08-17', 'P', 1, '', 'RT.2 RW.5 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(33, '14623', 'LEVIRNA IMELDA AMELIA', 'SURAKARTA', '2006-06-17', 'P', 1, '', 'RT.5 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(34, '14624', 'LUKY ALEX SANDRA', 'SURAKARTA', '2007-05-14', 'L', 1, '', 'RT.3 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(35, '14626', 'MUHAMMAD MIFTAHUL FIRDAUS', 'SURAKARTA', '2006-12-26', 'L', 1, '', 'RT.4 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(36, '14629', 'NAZWA MAHARANI', 'SURAKARTA', '2006-08-12', 'P', 1, '', 'RT.1 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(37, '14630', 'NIMAS ADITYA RIZKI ANDRIANI', 'SURAKARTA', '2007-01-27', 'P', 1, '', 'RT.1 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(38, '14631', 'RAFA LIANO JATI PRASETYO', 'SURAKARTA', '2006-09-14', 'L', 1, '', 'RT.5 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(39, '14632', 'RAKHA GALIH PANDU SANTOSO', 'SURAKARTA', '2005-12-31', 'L', 1, '', 'RT.1 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(40, '14633', 'REGA TRI FEBIYANTI', 'SURAKARTA', '2007-02-21', 'P', 1, '', 'RT.1 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(41, '14634', 'REHAN DANU WINDO', 'SURAKARTA', '2006-09-13', 'L', 1, '', 'RT.2 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(42, '14852', 'SYARIFAH UTSULA AZKA FATHIMAH', 'JAKARTA', '02/22/2008', 'P', 8, '', 'RT. 24 RW. 08 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(43, '14636', 'SIKY INTAN CANARY', 'SURAKARTA', '2007-04-02', 'P', 1, '', 'RT.2 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(44, '14637', 'TIO RESTU JEFRI SYAHPUTRA', 'SURAKARTA', '2006-02-26', 'L', 1, '', 'RT.4 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(45, '14638', 'ZEA AVISA RAMADHANI', 'SURAKARTA', '2006-09-27', 'P', 1, '', 'RT.1 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(46, '14639', 'ABED OKTATIANA WALUYO', 'SURAKARTA', '2006-10-26', 'P', 2, '', 'RT.5 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(47, '14641', 'AFNIA LAILA RAHMADANI', 'SURAKARTA', '2006-10-17', 'P', 2, '', 'RT.2 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(48, '14642', 'ARYA TIRTA GRAHA MAWARDANA', 'BLORA', '2006-04-05', 'L', 2, '', 'RT.4 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(49, '14643', 'CHELSEANA ANISA NURAINI', 'SURAKARTA', '2007-03-22', 'P', 2, '', 'RT.6 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(50, '14644', 'DEA ANJAS WIDIA TUTI', 'SURAKARTA', '2006-12-14', 'P', 2, '', 'RT.2 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(51, '14645', 'DESTRYA VIVI RAHMASARI', 'SURAKARTA', '2006-12-01', 'P', 2, '', 'RT.1 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(52, '14646', 'DWI BIMA SETIAWAN', 'SURAKARTA', '2006-07-27', 'L', 2, '', 'RT.4 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(53, '14647', 'ELLANAR TANTIO UTAMI', 'SURAKARTA', '2006-08-19', 'P', 2, '', 'RT.7 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(54, '14648', 'FAHRUL DIHAN ELSANDRO', 'KARANGANYAR', '2006-08-23', 'L', 2, '', 'RT.6 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(55, '14649', 'FRASYA NASWA SUCI PERMATA SARI', 'SRAGEN', '2007-01-11', 'P', 2, '', 'RT.4 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(56, '14650', 'GADIS SEPTA PRIHARTININGRUM', 'SURAKARTA', '2007-09-03', 'P', 2, '', 'RT.1 RW.19 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(57, '14651', 'GALIH ZAKA AL HAIDAR', 'SURAKARTA', '08/15/2006', 'L', 2, '', 'RT. 01 RW. 12 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(58, '14652', 'HAMDAN HASAN KUKUH PRAKOSO', 'SURAKARTA', '2005-03-23', 'L', 2, '', 'RT.2 RW.3 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(59, '14653', 'JIMMY SABDA SETYAWAN', 'SURAKARTA', '2006-02-17', 'L', 2, '', 'RT.3 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(60, '14654', 'KEVIN ILYASA PUTRA', 'SURAKARTA', '2005-09-27', 'L', 2, '', 'RT.3 RW.20 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(61, '14655', 'LEO PUTRA PEA', 'SURAKARTA', '2006-08-25', 'L', 2, '', 'RT.4 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(62, '14656', 'LULU NAJLA MEILANI', 'SURAKARTA', '2007-05-15', 'P', 2, '', 'RT.1 RW.17 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(63, '14657', 'NAAFI GAUS RIYANTO', 'SURAKARTA', '2006-11-18', 'P', 2, '', 'RT.2 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(64, '14658', 'NAMIRA KHESYA SAVINKA', 'SURAKARTA', '2006-11-01', 'P', 2, '', 'RT.1 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(65, '14659', 'QOSHID ARKAN', 'SURAKARTA', '2007-04-29', 'L', 2, '', 'RT.4 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(66, '14660', 'RAFADILLA APRILIANKA', 'SURAKARTA', '2007-04-19', 'P', 2, '', 'RT.2 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(67, '14661', 'RAMADHAN DAVA KUSUMA TAKBIR', 'SURAKARTA', '2006-10-22', 'L', 2, '', 'RT.4 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(68, '14662', 'RESTU DWI KUSUMO AJI', 'SURAKARTA', '2005-06-29', 'L', 2, '', 'RT.7 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(69, '14663', 'RINTAN ARDHIANTY PRATIWI', 'SRAGEN', '2007-08-06', 'P', 2, '', 'RT.5 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(70, '14664', 'ROZZAQ TRI RAMADHAN', 'SURAKARTA', '2006-10-18', 'L', 2, '', 'RT.3 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(71, '14665', 'SAMUEL SANDY PUTRA BUDIHARSO', 'SURAKARTA', '2006-07-20', 'L', 2, '', 'RT.3 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(72, '14666', 'SELVIA JEKKY ARIYANI', 'SURAKARTA', '2006-02-12', 'P', 2, '', 'RT.2 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(73, '14667', 'VICTORIA CHESYA YUKE SUMPENO', 'SURAKARTA', '2007-07-04', 'P', 2, '', 'RT.1 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(74, '14668', 'WAHYU FEBRIYANTO', 'SURAKARTA', '2006-09-05', 'L', 2, '', 'RT.2 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(75, '14669', 'ABEL ZAKI MASYKI', 'SURAKARTA', '2006-01-26', 'L', 3, '', 'RT.5 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(76, '14670', 'AFIF ARFIANTO', 'SURAKARTA', '2006-09-03', 'L', 3, '', 'RT.1 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(77, '14671', 'AISYAH NOVIA DWINA SAPUTRI', 'SURAKARTA', '2006-11-29', 'P', 3, '', 'RT.2 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(78, '14672', 'ALIFAH SOFI ARIANI', 'SURAKARTA', '2007-04-23', 'P', 3, '', 'RT.1 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(79, '14673', 'ANASYA QOLBY SALIMA', 'SURAKARTA', '2006-08-04', 'P', 3, '', 'RT.2 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(80, '14674', 'ANGGER NUR DYANTO', 'SURAKARTA', '2006-06-05', 'L', 3, '', 'RT.1 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(81, '14675', 'ANNISA DEWI SARASWATI', 'SURAKARTA', '2007-01-14', 'P', 3, '', 'RT.5 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(82, '14676', 'ANNISA FAWWAS NUR AFIFAH', 'SURAKARTA', '2007-06-14', 'P', 3, '', 'RT.4 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(83, '14677', 'ARUM SETYOWATI', 'SURAKARTA', '2006-12-30', 'P', 3, '', 'RT.7 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(84, '14678', 'AULIA WULANDARI', 'SRAGEN', '02/14/2007', 'P', 3, '', 'RT. 02 RW. 04 KELURAHAN KADIPIRO - KECAMATAN BANJARSARI', ''),
(85, '14679', 'AZZAHRA SILVA ANGGRAINI', 'SURAKARTA', '2006-09-11', 'P', 3, '', 'RT.5 RW.21 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(86, '14680', 'CANTIKA ARISTI LAMIANA', 'SURAKARTA', '2006-08-29', 'P', 3, '', 'RT.3 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(87, '14681', 'DAVID PRATAMA PUTRA', 'SURAKARTA', '2005-08-30', 'L', 3, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(88, '14682', 'DYORA CAHYANINGRUM EKA SANTOSO', 'SURAKARTA', '2007-05-30', 'P', 3, '', 'RT.4 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(89, '14683', 'GALIH PERMANA', 'SURAKARTA', '2007-01-02', 'L', 3, '', 'RT.7 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(90, '14684', 'HAFIZHAH RAMADHANI PUTRI SUSILO', 'SUKOHARJO', '2006-10-03', 'P', 3, '', 'RT.4 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(91, '14685', 'ILHAM RAFI ATHA', 'SURAKARTA', '2006-07-14', 'L', 3, '', 'RT.3 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(92, '14687', 'MUHAMMAD DHAFA DANISWARA', 'SURAKARTA', '2006-08-04', 'L', 3, '', 'RT.1 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(93, '14688', 'MUHAMMAD FADLI MAULANA', 'SURAKARTA', '2006-04-13', 'L', 3, '', 'RT.4 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(94, '14689', 'MUHHAMAD RIDWAN NURMAN SAPUTRA', 'SURAKARTA', '2007-03-31', 'L', 3, '', 'RT.1 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(95, '14690', 'NABILA FITRI VERAWATI', 'SURAKARTA', '06/07/2007', 'P', 3, '', 'RT. 01 RW. 02 KELURAHAN PLESUNGAN - KECAMATAN GONDANGREJO', ''),
(96, '14691', 'NATHANIELA ZAHRA NUGROHO', 'SEMARANG', '2006-09-29', 'P', 3, '', 'RT.2 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(97, '14692', 'RAHMAD FARHAN SUSANTO', 'SURAKARTA', '2006-09-09', 'L', 3, '', 'RT.1 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(98, '14693', 'RAKA RIDHO RABBANI', 'SURAKARTA', '2007-04-05', 'L', 3, '', 'RT.1 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(99, '14694', 'REVINA RESPATI AYU ANJANI', 'SURAKARTA', '2007-03-15', 'P', 3, '', 'RT.1 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(100, '14695', 'RIVALDO MAULANA SADEWA', 'SURAKARTA', '2006-04-13', 'L', 3, '', 'RT.4 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(101, '14696', 'SUBHAN QEEN ARKHANUDIN AKBAR', 'SURAKARTA', '2006-11-09', 'L', 3, '', 'RT.2 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(102, '14697', 'TAZKHIA AYUTYA', 'SEMARANG', '12/14/2006', 'P', 3, '', 'RT. 03 RW. 35 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(103, '14698', 'VALENCIA SATYA NURIAN', 'SURAKARTA', '2007-02-14', 'P', 3, '', 'RT.3 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(104, '14699', 'AFIYAH AN NUR RAHMAH', 'SURAKARTA', '09/17/2007', 'P', 4, '', 'RT. 01 RW. 31 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(105, '14700', 'AILA ALVIOLINA', 'SUKARAJA', '2008-01-27', 'P', 4, '', 'RT.2 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(106, '14701', 'ALEADEO DYLAN BARLIAN', 'YOGYAKARTA', '2006-08-23', 'L', 4, '', 'RT.2 RW.3 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(107, '14702', 'ALI ABDUL AZIZ', 'SURAKARTA', '2006-03-12', 'L', 4, '', 'RT.4 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(108, '14703', 'ALIFIA NURUL AINI', 'SURAKARTA', '11/30/2007', 'P', 4, '', 'RT. 01 RW. 03 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(109, '14704', 'ANGELINA MARTHA ARI SAPUTRI', 'SURAKARTA', '2007-03-12', 'P', 4, '', 'RT.2 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(110, '14705', 'BRIAN DESTA VERNANDO', 'SURAKARTA', '2006-12-07', 'L', 4, '', 'RT.4 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(111, '14706', 'FAUZIYYAH PUTRI RAHARJO', 'PELALAWAN', '2007-09-07', 'P', 4, '', 'RT.2 RW.19 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(112, '14707', 'GABRIELLA GALUH PERWITASARI', 'SURAKARTA', '2006-11-27', 'P', 4, '', 'RT.4 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(113, '14708', 'HILARIA KEIZA HANDAYANINGRUM', 'SURAKARTA', '2007-02-20', 'P', 4, '', 'RT.4 RW.5 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(114, '14709', 'JOSHI DWI STIAWAN', 'SURAKARTA', '2006-07-18', 'L', 4, '', 'RT.3 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(115, '14710', 'KAKA ADITYA SAPUTRA', 'SURAKARTA', '2007-05-09', 'L', 4, '', 'RT.3 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(116, '14711', 'KIRANA MENTARI FADHILLAH', 'SURAKARTA', '05/01/2007', 'P', 4, '', 'RT. 08 RW. 04 KELURAHAN KADIPIRO - KECAMATAN BANJARSARI', ''),
(117, '14712', 'MAYLA ANGEL PUTRI HARLIS', 'SURAKARTA', '2007-05-22', 'P', 4, '', 'RT.3 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(118, '14713', 'MEYLANIE INDAH SAFITRI', 'SURAKARTA', '2007-05-25', 'P', 4, '', 'RT.1 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(119, '14714', 'MICHAEL BRIANT RITHOMA', 'SURAKARTA', '2007-05-13', 'L', 4, '', 'RT.2 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(120, '14715', 'MUHAMMAD ALNAAFI PRATAMA', 'SURAKARTA', '2007-08-14', 'L', 4, '', 'RT.1 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(121, '14716', 'MUHAMMAD FIRDAUS', 'SURAKARTA', '2006-12-08', 'L', 4, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(122, '14717', 'NASYWA YASMIN NUR AMEYLIA', 'SURAKARTA', '2007-05-11', 'P', 4, '', 'RT.3 RW.19 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(123, '14718', 'OCTA PUTRA FITRIANTO', 'SURAKARTA', '2006-10-27', 'L', 4, '', 'RT.2 RW.17 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(124, '14720', 'PUTRI RAHAYU', 'SURAKARTA', '2007-05-08', 'P', 4, '', 'RT.4 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(125, '14721', 'RASYA FARREL GALVINO', 'SURAKARTA', '2007-04-18', 'L', 4, '', 'RT.1 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(126, '14722', 'REIGA KURNIAWAN', 'SURAKARTA', '2006-12-06', 'L', 4, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(127, '14723', 'RIFANIKA FIBIANI', 'SURAKARTA', '2008-09-22', 'P', 4, '', 'RT.4 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(128, '14724', 'RIO FERDINAND', 'SURAKARTA', '2007-03-12', 'L', 4, '', 'RT.2 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(129, '14725', 'RISMA AISYA CHOIRUNISA', 'SURAKARTA', '2007-08-10', 'P', 4, '', 'RT.3 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(130, '14726', 'RIVANDI EKA PRATAMA', 'SURAKARTA', '2007-05-17', 'L', 4, '', 'RT.2 RW.20 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(131, '14727', 'RIYANI LIDYA PRATIWI', 'SURAKARTA', '2007-01-18', 'P', 4, '', 'RT.2 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(132, '14728', 'TASYA NOVIERA DINIARY', 'SURAKARTA', '2007-11-01', 'P', 4, '', 'RT.2 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(133, '14729', 'YUANA RISMA RIYANTI', 'SURAKARTA', '2006-06-01', 'P', 4, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(134, '14730', 'ZULEYKA NURAYLA', 'SURAKARTA', '2007-06-14', 'P', 4, '', 'RT.2 RW.6 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(135, '14731', 'ABIGAEL FARREL GIOVANNI', 'SURAKARTA', '2007-01-22', 'L', 5, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(136, '14732', 'AERO RIZKY IRAWAN', 'SURAKARTA', '2007-05-16', 'L', 5, '', 'RT.3 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(137, '14733', 'AULIA RAHMAN', 'SUKOHARJO', '2007-07-10', 'P', 5, '', 'RT.1 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(138, '14734', 'DENI KURNIAWAN SAPUTRA', 'SURAKARTA', '2004-12-11', 'L', 5, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(139, '14735', 'ELRICO DWIKY PUTRA PANGESTU', 'SURAKARTA', '10/26/2006', 'L', 5, '', 'RT.01 RW. 21 KELURAHAN BANJARSARI - KECAMATAN BANJARSARI', ''),
(140, '14736', 'FATIN ZULFA FADILAH', 'SURAKARTA', '08/07/2007', 'P', 5, '', 'RT. 03 RW. 14 KELURAHAN BANJARSARI - KECAMATAN BANJARSARI', ''),
(141, '14737', 'FERDINANDUS PANDU ROSSY PUTRA', 'SURAKARTA', '2006-07-18', 'L', 5, '', 'RT.3 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(142, '14738', 'INTAN MAHARANI', 'SURAKARTA', '2007-03-28', 'P', 5, '', 'RT.2 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(143, '14739', 'ISHIANA AJENG PERTIWI', 'SURAKARTA', '07/10/2007', 'P', 5, '', 'RT. 04 RW. 31 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(144, '14740', 'KAROLINA GRACIA EVITA ARIN', 'KARANGANYAR', '01/08/2007', 'P', 5, '', 'RT. 08 RW. 12 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(145, '14741', 'KATANA GALUH CIPTANINGTIYAS', 'SURAKARTA', '2007-04-23', 'P', 5, '', 'RT.5 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(146, '14742', 'LATHIFA AZMI', 'YOGYAKARTA', '2007-05-09', 'P', 5, '', 'RT.2 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(147, '14743', 'LIBRA SANDI RAMADHAN', 'SURAKARTA', '2007-10-09', 'L', 5, '', 'RT.1 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(148, '14744', 'LOUIS BERTRAND TEGUH WICAKSONO', 'SURAKARTA', '2006-09-26', 'L', 5, '', 'RT.7 RW.13 KELURAHAN KADIPIRO - KECAMATAN BANJARSARI', ''),
(149, '14745', 'LUH SUBASITA', 'BOYOLALI', '2007-05-22', 'P', 5, '', 'RT.1 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(150, '14746', 'MEIDINA LESTI UNTARI', 'SURAKARTA', '2007-05-08', 'P', 5, '', 'RT.2 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(151, '14747', 'MERBAK HARUMNYA JANNAH', 'SRAGEN', '2007-07-14', 'P', 5, '', 'RT.5 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(152, '14748', 'MUHAMMAD RAFI FAISHA', 'SURAKARTA', '2007-07-02', 'L', 5, '', 'RT.4 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(153, '14749', 'MUTIARA TRI HAPSARI', 'SURAKARTA', '2007-06-13', 'P', 5, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(154, '14750', 'NABILAH AYU PUSPITA', 'SURAKARTA', '2007-08-13', 'P', 5, '', 'RT.2 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(155, '14751', 'NAUFAL IZZA RAMADHAN', 'SURAKARTA', '10/25/2006', 'L', 5, '', 'RT. 02 RW. 07 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(156, '14752', 'NINA NINDHITA TASLIMAH', 'SURAKARTA', '2007-01-18', 'P', 5, '', 'RT.1 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(157, '14753', 'RADITYA PRASETYO NUGROHO', 'SURAKARTA', '2006-11-12', 'L', 5, '', 'RT.7 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(158, '14754', 'RAIHAN FADHIL DESTYAN', 'BANJARMASIN', '2006-08-13', 'L', 5, '', 'RT.7 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(159, '14755', 'RENGGANATA ARIDHOLLAH', 'SURAKARTA', '2006-01-28', 'L', 5, '', 'RT.3 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(160, '14756', 'SALSABILA ARDITA PUTRI', 'SURAKARTA', '2007-01-12', 'P', 5, '', 'RT.5 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(161, '14757', 'SYIFA AZARIA CLARESTA', 'KARANGANYAR', '04/07/2007', 'P', 5, '', 'RT. 04 RW. 33 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(162, '14758', 'TIARA CITRA PRAMUDITA', 'SURAKARTA', '2007-11-27', 'P', 5, '', 'RT.3 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(163, '14759', 'TOMI ILHAM RAMADHANI', 'SURAKARTA', '2006-09-28', 'L', 5, '', 'RT.6 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(164, '14760', 'VERIA RIZKI ASDHI PRASETYO', 'GROBOGAN', '12/25/2006', 'L', 5, '', 'RT. 01 RW. 33 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(165, '14761', 'WILDA ERLINDA MEYLINA', 'SURAKARTA', '2007-05-10', 'P', 5, '', 'RT.6 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(166, '14762', 'WISEKA ROSDIANA ARIMBI', 'SURAKARTA', '2007-03-27', 'P', 5, '', 'RT.1 RW.17 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(167, '14763', 'ALDI ARDIANTO', 'SURAKARTA', '2004-11-24', 'L', 6, '', 'RT.5 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(168, '14765', 'ALITA CAHYA ANDIRA', 'SURAKARTA', '2007-02-01', 'P', 6, '', 'RT.4 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(169, '14766', 'ARDINE ALODIA AZZAHRA', 'SURAKARTA', '2007-03-08', 'P', 6, '', 'RT.3 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(170, '14767', 'ARJUNA PUTRA JODANNIX', 'SURAKARTA', '2007-07-06', 'L', 6, '', 'RT.5 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(171, '14768', 'ARTDINA SARASWATI', 'SURAKARTA', '2007-01-09', 'P', 6, '', 'RT.6 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(172, '14769', 'AULIA FRANSISKA NADIA KIRANI', 'SURAKARTA', '2007-02-01', 'P', 6, '', 'RT.2 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(173, '14771', 'AUZAN NAUFAL KHOLIL', 'SURAKARTA', '2007-06-14', 'L', 6, '', 'RT.2 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(174, '14772', 'BELLA CHARISSA NATHANIA', 'SURAKARTA', '2007-09-19', 'P', 6, '', 'RT.1 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(175, '14773', 'CHRISANTONIO', 'SURAKARTA', '2007-05-06', 'L', 6, '', 'RT.2 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(176, '14774', 'CHRIST ANGEL BILLY MARDOPO', 'TANGERANG', '2007-01-04', 'L', 6, '', 'RT.2 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(177, '14775', 'DAMAR JAGAD SALIRO NURJANTO', 'SURAKARTA', '2007-04-10', 'L', 6, '', 'RT.7 RW.13 KELURAHAN KADIPIRO - KECAMATAN BANJARSARI', ''),
(178, '14776', 'FAUZIAH MAYA FITRIA MEZALUNA', 'SURAKARTA', '10/12/2007', 'P', 1, '', 'RT. 07 RW. 01 KELURAHAN BANJARSARI - KECAMATAN BANJARSARI', ''),
(179, '14777', 'GETSA ANESETYA', 'SURAKARTA', '2007-01-22', 'L', 6, '', 'RT.6 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(180, '14778', 'HAWILLA ENDAH HAMASTUTI', 'SURAKARTA', '2007-03-06', 'P', 6, '', 'RT.1 RW.5 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(181, '14779', 'IMA AGUSTIN RAMADHANI', 'SURAKARTA', '2007-08-25', 'P', 6, '', 'RT.5 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(182, '14780', 'KARISMA SYAFA SHARAPOVA', 'SURAKARTA', '2007-01-24', 'P', 6, '', 'RT.8 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(183, '14781', 'KHAYLA MAYVA KUSUMANING YOGA', 'SURAKARTA', '2007-05-27', 'P', 6, '', 'RT.1 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(184, '14783', 'MEITA BUNGA ARISITA', 'SURAKARTA', '2007-05-12', 'P', 6, '', 'RT.8 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(185, '14784', 'MIRACLE RELFI YOGA SETYAWAN', 'SURAKARTA', '05/05/2007', 'L', 6, '', 'RT. 04 RW. 07 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(186, '14785', 'MUSTAQIM', 'SURAKARTA', '2006-03-08', 'L', 6, '', 'RT.3 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(187, '14787', 'OBED SEKTI WIBOWO', 'SURAKARTA', '2007-04-14', 'L', 6, '', 'RT.3 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(188, '14789', 'SASTA GRACE SELLA', 'SURAKARTA', '2007-03-03', 'P', 6, '', 'RT.2 RW.4 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(189, '14790', 'SHINTIA DEWI KASIH', 'SURAKARTA', '2005-07-03', 'P', 6, '', 'RT.4 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(190, '14791', 'STEFANIA EKA MULYA DESIDERIA', 'SURAKARTA', '2007-09-26', 'P', 6, '', 'RT.3 RW.4 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(191, '14792', 'VANIA TESALONIKA JEHOSHAPHAT', 'SURAKARTA', '2006-07-31', 'P', 6, '', 'RT.1 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(192, '14793', 'WIJDAN AKBAR RAMADHAN', 'SURAKARTA', '2006-10-13', 'L', 6, '', 'RT.6 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(193, '14794', 'YEHUDA JUAN BEZALIEL', 'SURAKARTA', '2006-09-15', 'L', 6, '', 'RT.3 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(194, '14795', 'ADJIE SAKA PANGESTU', 'SURAKARTA', '2007-05-24', 'L', 7, '', 'RT.3 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(195, '14797', 'BAGAS ADE SAPUTRO', 'SURAKARTA', '2005-08-15', 'L', 7, '', 'RT.7 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(196, '14798', 'CHRISTABELLE NEYSA GUNAWAN', 'SURAKARTA', '2007-05-31', 'P', 7, '', 'RT.1 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(197, '14799', 'CHRISTIAN ARDI YULIAWAN', 'SURAKARTA', '2007-07-16', 'L', 7, '', 'RT.3 RW.6 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(198, '14800', 'DAVIA ERIN HAQNUGROHO', 'SURAKARTA', '2006-11-19', 'P', 7, '', 'RT.7 RW.13 KELURAHAN KADIPIRO - KECAMATAN BANJARSARI', ''),
(199, '14802', 'FEBRIANA', 'SURAKARTA', '2005-05-24', 'P', 7, '', 'RT.6 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(200, '14803', 'GITA FLORENSIA ADI', 'SURAKARTA', '2007-08-15', 'P', 7, '', 'RT.4 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(201, '14804', 'IBRA BAGUS FAVIAN ANDHIKA', 'KARANGANYAR', '2007-03-05', 'L', 7, '', 'RT.4 RW.2 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(202, '14805', 'INGGRIT NASTIYA DWI PERTIWI', 'SURAKARTA', '2006-07-14', 'P', 7, '', 'RT.3 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(203, '14806', 'ISMAIL ANDI NUGROHO', 'SURAKARTA', '2007-01-05', 'L', 7, '', 'RT.3 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(204, '14807', 'IVANA NABILIA HEPAR PAZIA', 'SURAKARTA', '04/23/2007', 'P', 7, '', 'RT. 04 RW. 29 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(205, '14808', 'KEYSA FATMANIA AZZAHRA', 'SURAKARTA', '2006-12-24', 'P', 7, '', 'RT.2 RW.8 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(206, '14809', 'KEYZIA FEBIOLA SANTOSO', 'SURAKARTA', '2007-02-23', 'P', 7, '', 'RT.3 RW.14 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(207, '14810', 'KHALILA AZ-ZAHRA MALIHA SETYOKO', 'SURAKARTA', '2008-03-10', 'P', 7, '', 'RT.3 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(208, '14812', 'MAFIKHA SALMA PRAMESTI', 'SURAKARTA', '2007-03-24', 'P', 7, '', 'RT.1 RW.3 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(209, '14627', 'NABILA NURUL HIDAYAH', 'SURAKARTA', '2007-04-27', 'P', 7, '', 'RT.2 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(210, '14815', 'RAJENDRA EDMUND DANIEL', 'SUKOHARJO', '2006-09-19', 'L', 7, '', 'RT.5 RW.4 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(211, '14816', 'RANGGA MAHENDRA MURTIADI', 'SURAKARTA', '2007-01-07', 'L', 7, '', 'RT.5 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(212, '14817', 'RAPAEL MAHARANI PUTRI', 'SURAKARTA', '2007-05-24', 'P', 7, '', 'RT.7 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(213, '14818', 'RIBCHA APRILIA', 'SURAKARTA', '2007-04-19', 'P', 7, '', 'RT.1 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(214, '14819', 'ROFIFAH HASNA', 'SURAKARTA', '2007-08-01', 'P', 7, '', 'RT.4 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(215, '14820', 'TABITA KARTIKA FANI', 'SURAKARTA', '2006-12-14', 'P', 7, '', 'RT.2 RW.19 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(216, '14821', 'TIFIA BRYNA ALETA', 'SURAKARTA', '2007-09-07', 'P', 7, '', 'RT.5 RW.4 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(217, '14822', 'VAISAL NUR ADIYANSAH', 'WONOGIRI', '2007-01-30', 'L', 7, '', 'RT.3 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(218, '14823', 'VEBRIO ANUGRAH PRADITYA WARDHANA', 'SURAKARTA', '2007-02-08', 'L', 7, '', 'RT.1 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(219, '14824', 'WISNHU SATYA FIRMANSYAH', 'SURAKARTA', '2007-06-04', 'L', 7, '', 'RT.4 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(220, '14825', 'YOSIA ADI KURNIA', 'SURAKARTA', '2007-04-05', 'L', 7, '', 'RT.1 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(221, '14829', 'ANELIA URBANINGRUM', 'SURAKARTA', '2007-04-09', 'P', 8, '', 'RT.6 RW.18 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(222, '14830', 'ANGELA MERICY DERA DAMARA PUTRI BINTANG', 'SURAKARTA', '2007-09-02', 'P', 8, '', 'RT.1 RW.1 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(223, '14831', 'CEZARIA ANNISYA KRYSTI', 'SURAKARTA', '2007-07-01', 'P', 8, '', 'RT.1 RW.6 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(224, '14833', 'DAIVA AMANTA PUTRA AGUNG', 'SURAKARTA', '2007-03-04', 'L', 8, '', 'RT.1 RW.20 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(225, '14834', 'DEVITA AYDA ANGGORO PUTRI', 'SURAKARTA', '2008-06-14', 'P', 8, '', 'RT.2 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(226, '14835', 'GALANG PUTRA YULIAWAN', 'SURAKARTA', '2007-06-16', 'L', 8, '', 'RT.3 RW.24 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(227, '14837', 'JHONATAN FIRMANSYAH', 'SURAKARTA', '01/03/2007', 'L', 8, '', 'RT. 02 RW. 35 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(228, '14838', 'KEZIA NURINDRA NUGRAHENI', 'SURAKARTA', '2007-11-05', 'P', 8, '', 'RT.1 RW.4 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(229, '14839', 'KRISNA CAHYO PRATAMA', 'SURAKARTA', '2007-10-19', 'L', 8, '', 'RT.5 RW.3 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(230, '14840', 'MARSHA AYU MAHARANI', 'SURAKARTA', '2007-08-01', 'P', 8, '', 'RT.4 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(231, '14843', 'NAREENDRA GALUH LINTANG SANTOSO', 'SURAKARTA', '2007-08-01', 'P', 8, '', 'RT.1 RW.23 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(232, '14844', 'NATANAEL ARYA WARDANA', 'SURAKARTA', '2006-12-14', 'L', 8, '', 'RT.4 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(233, '14845', 'NELSON NAYA PUTRA', 'SURAKARTA', '2005-05-09', 'L', 8, '', 'RT.2 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(234, '14847', 'PASHA SEVA DEFINTA', 'SURAKARTA', '2006-10-21', 'P', 8, '', 'RT.4 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(235, '14849', 'RAYHAN FITO PRATAMA', 'SURAKARTA', '2007-11-18', 'L', 8, '', 'RT.5 RW.22 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(236, '14850', 'SAMUEL ANANDA KURNIA', 'SURAKARTA', '11/06/2006', 'L', 8, '', 'RT.03 RW.05 KELURAHAN KADOKAN - KECAMATAN GROGOL', ''),
(237, '14635', 'SELVI WIDOSARI', 'SURAKARTA', '2006-10-27', 'P', 1, '', 'RT.6 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(238, '14851', 'SHOFFIANSYAH RAMADHAN', 'SURAKARTA', '2007-09-12', 'L', 8, '', 'RT.2 RW.17 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(239, '14853', 'TESSA GRACIA YUDI SAPUTRI', 'SURAKARTA', '2007-05-15', 'P', 8, '', 'RT.6 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(240, '14854', 'VANECHA DONA RAHMAWATI', 'SURAKARTA', '2007-01-24', 'P', 8, '', 'RT.6 RW.15 KELURAHAN GILINGAN - KECAMATAN BANJARSARI', ''),
(241, '14855', 'VANNESA JOVITA CHRYSTIE', 'SURAKARTA', '2006-08-23', 'P', 8, '', 'RT.3 RW.21 KELURAHAN NUSUKAN - KECAMATAN BANJARSARI', ''),
(242, '14856', 'VELEN IOTA DISTER', 'SURAKARTA', '05/14/2007', 'P', 8, '', 'RT. 08 RW. 02 KELURAHAN KADIPIRO - KECAMATAN BANJARSARI', ''),
(243, '14857', 'WISNU ADI PRANATA', 'SURAKARTA', '2006-10-16', 'L', 8, '', 'RT.4 RW.2 KELURAHAN MOJOSONGO - KECAMATAN JEBRES', ''),
(244, '14858', 'YOHANA SUCI NUGRAHENI', 'SURAKARTA', '2007-07-31', 'P', 8, '', 'RT.2 RW.1 KELURAHAN JOGLO - KECAMATAN BANJARSARI', ''),
(245, '14576', 'Adhani Naylakrisma Ristiadi', '', '', 'P', 9, '', '', ''),
(246, '14577', 'Alivia Fasya Lintang Permata', '', '', 'P', 9, '', '', ''),
(247, '14578', 'Alvicki Lail Sutra Ramadhan', '', '', 'L', 9, '', '', ''),
(248, '14579', 'Andara Nadien Hapsari', '', '', 'P', 9, '', '', ''),
(249, '14580', 'Artasya Putri Liyona', '', '', 'P', 9, '', '', ''),
(250, '14581', 'Bagas Prola Alfiansyah', '', '', 'L', 9, '', '', ''),
(251, '14582', 'Bagus Hanan Nauval', '', '', 'L', 9, '', '', ''),
(252, '14583', 'Chandradewi Purnomo Putri', '', '', 'P', 9, '', '', ''),
(253, '14584', 'Denisya Putri Irawan', '', '', 'P', 9, '', '', ''),
(254, '14585', 'Dyah Riska Amalia', '', '', 'P', 9, '', '', ''),
(255, '14586', 'Edwin Samudra Wardana', '', '', 'L', 9, '', '', ''),
(256, '14587', 'Elang Putra Sanjaya', '', '', 'L', 9, '', '', ''),
(257, '14588', 'Fairuz Zayan Firdauzie', '', '', 'L', 9, '', '', ''),
(258, '14589', 'Feyzabell Alya Mukhbita', '', '', 'P', 9, '', '', ''),
(259, '14590', 'Flavia Dwi Cahya', '', '', 'P', 9, '', '', ''),
(260, '14591', 'Ihsan Fadlia Addin', '', '', 'L', 9, '', '', ''),
(261, '14592', 'Imam Sidiq Hidayatulloh', '', '', 'L', 9, '', '', ''),
(262, '14593', 'Imelda Putri Purnamasari', '', '', 'P', 9, '', '', ''),
(263, '14594', 'Iva Vita Wijaya Jati', '', '', 'P', 9, '', '', ''),
(264, '14595', 'Ivan Oktanio Syahputra', '', '', 'L', 9, '', '', ''),
(265, '14596', 'Meilani Dwi Haryati', '', '', 'P', 9, '', '', ''),
(266, '14597', 'Nabila Faisa Purnomo', '', '', 'P', 9, '', '', ''),
(267, '14598', 'Nerva Tsaaniya Choirunnisa', '', '', 'P', 9, '', '', ''),
(268, '14599', 'Novan Ade Pratama', '', '', 'L', 9, '', '', ''),
(269, '14600', 'Oktavia Rahmadani', '', '', 'P', 9, '', '', ''),
(270, '14601', 'Prayuga Farhaan Bimantara', '', '', 'L', 9, '', '', ''),
(271, '14602', 'Raehana Nurindera Dhawisyah', '', '', 'P', 9, '', '', ''),
(272, '14603', 'Safitri Fionanda', '', '', 'P', 9, '', '', ''),
(273, '14604', 'Salsabilla Tsabita', '', '', 'P', 9, '', '', ''),
(274, '14605', 'Siti Aisyah Rahmadani', '', '', 'P', 9, '', '', ''),
(275, '14606', 'Tegar Nur Buwana', '', '', 'L', 9, '', '', ''),
(276, '14607', 'Yoshefira Tresia Prameswari', '', '', 'P', 9, '', '', ''),
(277, '14544', 'Adi Hermawan', '', '', 'L', 10, '', '', ''),
(278, '14545', 'Aisya Ifananda Putri', '', '', 'P', 10, '', '', ''),
(279, '14546', 'Alya Nailah Ramadhani', '', '', 'P', 10, '', '', ''),
(280, '14547', 'Alya Wahyu Khoirunisa', '', '', 'P', 10, '', '', ''),
(281, '14548', 'Amelia Eka Mutiara', '', '', 'P', 10, '', '', ''),
(282, '14549', 'Andini Noviana Ramadhani', '', '', 'P', 10, '', '', ''),
(283, '14550', 'Athallansyah Dimas Rafi Phasya', '', '', 'L', 10, '', '', ''),
(284, '14551', 'Callula Zivana Elfreda', '', '', 'P', 10, '', '', ''),
(285, '14552', 'Dennavia Gladis Mustika', '', '', 'P', 10, '', '', ''),
(286, '14553', 'Fadhillah Putri Adhiguna', '', '', 'P', 10, '', '', ''),
(287, '14554', 'Fatima Harjanto', '', '', 'P', 10, '', '', ''),
(288, '14555', 'Galang Vito Firmansyah', '', '', 'L', 10, '', '', ''),
(289, '14556', 'Gladis Santa Angelina', '', '', 'P', 10, '', '', ''),
(290, '14557', 'Guntur Haryo Cendono', '', '', 'L', 10, '', '', ''),
(291, '14558', 'Ilham Rusdi', '', '', 'L', 10, '', '', ''),
(292, '14559', 'Indhira Zhara Pova', '', '', 'P', 10, '', '', ''),
(293, '14560', 'Juventino Junior Del Nugraha', '', '', 'L', 10, '', '', ''),
(294, '14561', 'Mayra Dwi Putriana', '', '', 'P', 10, '', '', ''),
(295, '14562', 'Muftia Arum Arifa', '', '', 'P', 10, '', '', ''),
(296, '14563', 'Muhammad Rizky Pratama', '', '', 'L', 10, '', '', ''),
(297, '14564', 'Nabilah Salsa Febriyanti', '', '', 'P', 10, '', '', ''),
(298, '14565', 'Nala Rahma Anjani', '', '', 'P', 10, '', '', ''),
(299, '14566', 'Nasywa Athania Saharani', '', '', 'P', 10, '', '', ''),
(300, '14567', 'Nathasya Digna Anggraini', '', '', 'P', 10, '', '', ''),
(301, '14568', 'Naufal Aditya Pratama', '', '', 'L', 10, '', '', ''),
(302, '14569', 'Nikita Chandra Salsabilla', '', '', 'P', 10, '', '', ''),
(303, '14570', 'Nur Aini Fatimah', '', '', 'P', 10, '', '', ''),
(304, '14571', 'Rafael Maulana Iwansyah', '', '', 'L', 10, '', '', ''),
(305, '14572', 'Ridho Ramadhan Yuslianto', '', '', 'L', 10, '', '', ''),
(306, '14573', 'Rizal Andrean Saputra', '', '', 'L', 10, '', '', ''),
(307, '14574', 'Vallentino Yoga Pratama', '', '', 'L', 10, '', '', ''),
(308, '14575', 'Vikri Alfareza Rendy Saputra Wijaya', '', '', 'L', 10, '', '', ''),
(309, '14512', 'Ahmad Faisal Akbar', '', '', 'L', 11, '', '', ''),
(310, '14513', 'Alika Pratista Jelita Maharani', '', '', 'P', 11, '', '', ''),
(311, '14514', 'Alyfia Etsa Putri Nabilah', '', '', 'P', 11, '', '', ''),
(312, '14515', 'Ardia Nindita Syarif', '', '', 'P', 11, '', '', ''),
(313, '14516', 'Areta Tresnawati', '', '', 'P', 11, '', '', ''),
(314, '14517', 'Arjuna Putra Kusuma', '', '', 'L', 11, '', '', ''),
(315, '14518', 'Aulia Kusuma Nada', '', '', 'P', 11, '', '', ''),
(316, '14519', 'Azril Nur Immam Dewangga', '', '', 'L', 11, '', '', ''),
(317, '14520', 'Berliana Deswita Putri', '', '', 'P', 11, '', '', ''),
(318, '14521', 'Dika Ardiansyah Putra Pratama', '', '', 'L', 11, '', '', ''),
(319, '14522', 'Dyah Ayu Mahastri', '', '', 'P', 11, '', '', ''),
(320, '14523', 'Fauzi Andika Candra', '', '', 'L', 11, '', '', ''),
(321, '14524', 'Fregita Savira', '', '', 'P', 11, '', '', ''),
(322, '14525', 'Hanif Dwi Ananto', '', '', 'L', 11, '', '', ''),
(323, '14526', 'Indra Dwi Ramadhan', '', '', 'L', 11, '', '', ''),
(324, '14527', 'Muhammad Ar-Royan Rafi S', '', '', 'L', 11, '', '', ''),
(325, '14528', 'Muhammad Fazy Ila Fauzan', '', '', 'L', 11, '', '', ''),
(326, '14529', 'Nadila Marsya Puspita', '', '', 'P', 11, '', '', ''),
(327, '14530', 'Nazla Anatasya Zaskia', '', '', 'P', 11, '', '', ''),
(328, '14531', 'Nobel Hernawati', '', '', 'P', 11, '', '', ''),
(329, '14532', 'Nyiaranasti Arbella Miarinava', '', '', 'P', 11, '', '', ''),
(330, '14533', 'Pergata Galan Febian Davin', '', '', 'L', 11, '', '', ''),
(331, '14534', 'Rafael Suryo Fahrudin', '', '', 'L', 11, '', '', ''),
(332, '14535', 'Rohana Devi Khansa Salsabila', '', '', 'P', 11, '', '', ''),
(333, '14536', 'Salsabilla Sukma Wahyuningtyas', '', '', 'P', 11, '', '', ''),
(334, '14537', 'Sandy Ilhamsyah', '', '', 'L', 11, '', '', ''),
(335, '14538', 'Suryo Saputro', '', '', 'L', 11, '', '', ''),
(336, '14539', 'Syakirana Azizah Noviyanti', '', '', 'P', 11, '', '', ''),
(337, '14540', 'Tieranajwa Idzihar', '', '', 'P', 11, '', '', ''),
(338, '14541', 'Valentiara Tryasmaya Leni Anggraheni', '', '', 'P', 11, '', '', ''),
(339, '14542', 'Viola Alya Destiyana', '', '', 'P', 11, '', '', ''),
(340, '14543', 'Widya Ayu Probo Nugroho', '', '', 'P', 11, '', '', ''),
(341, '14480', 'Allisya Maula Putri Irawan', '', '', 'P', 12, '', '', ''),
(342, '14481', 'Aurel Aleka Ale Sandro', '', '', 'L', 12, '', '', ''),
(343, '14482', 'Azzahra Suryapuspita', '', '', 'P', 12, '', '', ''),
(344, '14483', 'Cindy Nugrohowati', '', '', 'P', 12, '', '', ''),
(345, '14484', 'Deana Adelia Chelsea', '', '', 'P', 12, '', '', ''),
(346, '14485', 'Dhafi Putra Pratama', '', '', 'L', 12, '', '', ''),
(347, '14486', 'Dzaky Alden Syukur Pratama', '', '', 'L', 12, '', '', ''),
(348, '14487', 'Evan Septiyan Syahputra', '', '', 'L', 12, '', '', ''),
(349, '14488', 'Fattah Halim Insanu', '', '', 'L', 12, '', '', ''),
(350, '14489', 'Fikri Adhiatma Nugroho', '', '', 'L', 12, '', '', ''),
(351, '14490', 'Kelvin Rizky Bachtiar', '', '', 'L', 12, '', '', ''),
(352, '14491', 'Linka Indah Cantika', '', '', 'P', 12, '', '', ''),
(353, '14492', 'Meidila Putri Nurmala', '', '', 'P', 12, '', '', ''),
(354, '14493', 'Mohammad Ivan Arruga', '', '', 'L', 12, '', '', ''),
(355, '14494', 'Nabilla Olivia', '', '', 'P', 12, '', '', ''),
(356, '14495', 'Nafi Abdullah', '', '', 'L', 12, '', '', ''),
(357, '14496', 'Nanang Adira Prakosa', '', '', 'L', 12, '', '', ''),
(358, '14497', 'Nasra Alesha Sulaiman', '', '', 'P', 12, '', '', ''),
(359, '14498', 'Natasya Della Indriyanesa', '', '', 'P', 12, '', '', ''),
(360, '14499', 'Natasya Laudya Cindy A.U.K', '', '', 'P', 12, '', '', ''),
(361, '14500', 'Nismara Aptarani Fauziyah', '', '', 'P', 12, '', '', ''),
(362, '14501', 'Risma Riva Adilya Saputri', '', '', 'P', 12, '', '', ''),
(363, '14502', 'Rokif Nugroho Prasetyo Aji', '', '', 'L', 12, '', '', ''),
(364, '14504', 'Septian Dwi Cahyo', '', '', 'L', 12, '', '', ''),
(365, '14505', 'Sri Wahyuningsih', '', '', 'P', 12, '', '', ''),
(366, '14506', 'Syaka Garindra Ilyas Setyawan', '', '', 'L', 12, '', '', ''),
(367, '14507', 'Tri Esti Ika Wulandari', '', '', 'P', 12, '', '', ''),
(368, '14508', 'Vidya Indah Sulistiarni', '', '', 'P', 12, '', '', ''),
(369, '14509', 'Wening Anisa Norin', '', '', 'P', 12, '', '', ''),
(370, '14510', 'Yoga Firmansyah', '', '', 'L', 12, '', '', ''),
(371, '14511', 'Zalfa Anisah Nurhaliza', '', '', 'P', 12, '', '', ''),
(372, '14448', 'Ananda Pratama Putra', '', '', 'L', 13, '', '', ''),
(373, '14449', 'Aprilia Yui Bayu Anita', '', '', 'P', 13, '', '', ''),
(374, '14450', 'Arvian Zaki', '', '', 'L', 13, '', '', ''),
(375, '14451', 'Aziz Fikri Bayu Martama', '', '', 'L', 13, '', '', ''),
(376, '14452', 'Aziz Kurniawan', '', '', 'L', 13, '', '', ''),
(377, '14453', 'Azzah Fakhriyyah', '', '', 'P', 13, '', '', ''),
(378, '14454', 'Canny Milkiriyad', '', '', 'P', 13, '', '', ''),
(379, '14455', 'Chyella Lupita Cahya', '', '', 'P', 13, '', '', ''),
(380, '14456', 'Dhiaz Erta Ramadhani', '', '', 'P', 13, '', '', ''),
(381, '14457', 'Excel Radya Pratama Putra', '', '', 'L', 13, '', '', ''),
(382, '14458', 'Fadhillah Riyanni Khoirunnisa', '', '', 'P', 13, '', '', ''),
(383, '14459', 'Farid` Abduh', '', '', 'L', 13, '', '', ''),
(384, '14460', 'Fawwas Ammar Wardaya', '', '', 'L', 13, '', '', ''),
(385, '14461', 'Fisichella Adela Putri', '', '', 'P', 13, '', '', ''),
(386, '14462', 'Ganung Rindra Kusuma', '', '', 'L', 13, '', '', ''),
(387, '14463', 'Imelda Indrasto', '', '', 'P', 13, '', '', ''),
(388, '14464', 'Islamedina Maheswari', '', '', 'P', 13, '', '', ''),
(389, '14465', 'Naufal Muhammad Rizqi', '', '', 'L', 13, '', '', ''),
(390, '14466', 'Oktavia Renita Larasati', '', '', 'P', 13, '', '', ''),
(391, '14467', 'Pandya Rama Wisesa', '', '', 'L', 13, '', '', ''),
(392, '14468', 'Rafli Hanafi Ardiansyah', '', '', 'L', 13, '', '', ''),
(393, '14470', 'Ridana Dhamar Pradipa', '', '', 'L', 13, '', '', ''),
(394, '14471', 'Safa Tiya Permadani', '', '', 'P', 13, '', '', ''),
(395, '14472', 'Salsabilla Sabrina Regita Putri', '', '', 'P', 13, '', '', ''),
(396, '14473', 'Selvia Putri Safitri', '', '', 'P', 13, '', '', ''),
(397, '14474', 'Shafa Athaya Kaveada', '', '', 'P', 13, '', '', ''),
(398, '14475', 'Syahya Azka Nabila', '', '', 'P', 13, '', '', ''),
(399, '14476', 'Velandry Nasuro', '', '', 'L', 13, '', '', ''),
(400, '14477', 'Viona Kusuma Wardhani', '', '', 'P', 13, '', '', ''),
(401, '14478', 'Vony Nur Jannah', '', '', 'P', 13, '', '', ''),
(402, '14479', 'Zalfa Hisanah Raniah', '', '', 'P', 13, '', '', ''),
(403, '14416', 'Alvin Satria', '', '', 'L', 14, '', '', ''),
(404, '14417', 'Cahya Bintang Krisna Dewa', '', '', 'L', 14, '', '', ''),
(405, '14418', 'Chelsea Verentzia', '', '', 'P', 14, '', '', ''),
(406, '14419', 'Daniel Adrian Kusuma', '', '', 'L', 14, '', '', ''),
(407, '14420', 'Daniswari Anggadewi', '', '', 'P', 14, '', '', ''),
(408, '14421', 'Dyah Ayu Puspitasari', '', '', 'P', 14, '', '', ''),
(409, '14422', 'Fachry Agung Wicaksana', '', '', 'L', 14, '', '', ''),
(410, '14423', 'Firdha Cahya Oktaviani', '', '', 'P', 14, '', '', ''),
(411, '14424', 'Fitria Rahmadani', '', '', 'P', 14, '', '', ''),
(412, '14425', 'Gladis Bintang Binar Cahyaningtyas', '', '', 'P', 14, '', '', ''),
(413, '14426', 'Gracella Angeline Yuan Mayleana', '', '', 'P', 14, '', '', ''),
(414, '14427', 'Gracia Agustine', '', '', 'P', 14, '', '', ''),
(415, '14428', 'Gracia Vega Putri Ariyani', '', '', 'P', 14, '', '', ''),
(416, '14429', 'Imanuel Reris Anggraito', '', '', 'L', 14, '', '', ''),
(417, '14430', 'Irma Estu Utami', '', '', 'P', 14, '', '', ''),
(418, '14431', 'Irsyad Nur Salim', '', '', 'L', 14, '', '', ''),
(419, '14432', 'Jessica Amelia Pramesti', '', '', 'P', 14, '', '', ''),
(420, '14433', 'Jonathan Lury Prawira', '', '', 'L', 14, '', '', ''),
(421, '14434', 'Maria Dwi Yuliastuti', '', '', 'P', 14, '', '', ''),
(422, '14436', 'Natanael Revitosesar Andromeda', '', '', 'L', 14, '', '', ''),
(423, '14435', 'Natanael William Widyasmoro', '', '', 'L', 14, '', '', ''),
(424, '14437', 'Novarino Rossi Ramadhan', '', '', 'L', 14, '', '', ''),
(425, '14438', 'Pacificha Islamey Bilqis', '', '', 'P', 14, '', '', ''),
(426, '14439', 'Petronella Sthenio Yuvens', '', '', 'L', 14, '', '', ''),
(427, '14440', 'Ribka Nifohunia Putri Mendrofa', '', '', 'P', 14, '', '', ''),
(428, '14441', 'Safira Naafi Widyarani', '', '', 'P', 14, '', '', ''),
(429, '14442', 'Samuel Yudi Prayitno', '', '', 'L', 14, '', '', ''),
(430, '14443', 'Stefany Pramaysela Anggraini', '', '', 'P', 14, '', '', ''),
(431, '14444', 'Wahyu Aji Prasetya', '', '', 'L', 14, '', '', ''),
(432, '14445', 'Yeskia Wido Semonowati', '', '', 'P', 14, '', '', ''),
(433, '14446', 'Yoel Arinto Wibowo', '', '', 'L', 14, '', '', ''),
(434, '14447', 'Zeva Fairuz Atalla Putra', '', '', 'L', 14, '', '', ''),
(435, '14382', 'Aditya Imam Ramadhan', '', '', 'L', 15, '', '', ''),
(436, '14383', 'Berlian Italiana Putri', '', '', 'P', 15, '', '', ''),
(437, '14384', 'Chery Cahya Imelda', '', '', 'P', 15, '', '', ''),
(438, '14385', 'Daffa Yusianto', '', '', 'L', 15, '', '', ''),
(439, '14386', 'Danina Afroida Fauziah Sobani', '', '', 'P', 15, '', '', ''),
(440, '14387', 'Farrel Prabudyan Paleva', '', '', 'L', 15, '', '', ''),
(441, '14388', 'Filipus Valentino Wisnutama', '', '', 'L', 15, '', '', ''),
(442, '14389', 'Frisca Virginia Diaz Arismaya', '', '', 'P', 15, '', '', ''),
(443, '14390', 'Hanan Bagus Sulistyo', '', '', 'L', 15, '', '', ''),
(444, '14391', 'Jezreel Jaya Prabowo', '', '', 'L', 15, '', '', ''),
(445, '14392', 'Jonathan Praditama', '', '', 'L', 15, '', '', ''),
(446, '14393', 'Joyce Marsay Melody', '', '', 'P', 15, '', '', ''),
(447, '14394', 'Kapten Tegar Terumbukarang', '', '', 'L', 15, '', '', ''),
(448, '14395', 'Kezia Meilani', '', '', 'P', 15, '', '', ''),
(449, '14396', 'Kezia Putri Kristia Wardani', '', '', 'P', 15, '', '', ''),
(450, '14397', 'Lovenia Candra Kharisma Ashari', '', '', 'P', 15, '', '', ''),
(451, '14398', 'Manuel Juan Tama', '', '', 'L', 15, '', '', ''),
(452, '14399', 'Marcelina Lilis Suryani', '', '', 'P', 15, '', '', ''),
(453, '14400', 'Nicholas Surya Dewanto', '', '', 'L', 15, '', '', ''),
(454, '14401', 'Oni Simus Setyawan', '', '', 'L', 15, '', '', ''),
(455, '14402', 'Pingkan Dama Ameliyan', '', '', 'P', 15, '', '', ''),
(456, '14403', 'Rekhael Novian Bagas Purnama', '', '', 'L', 15, '', '', ''),
(457, '14404', 'Rista Angga Pratiwi', '', '', 'P', 15, '', '', ''),
(458, '14405', 'Rizka Amelia Putri', '', '', 'P', 15, '', '', ''),
(459, '14406', 'Rizky Kurniawan', '', '', 'L', 15, '', '', ''),
(460, '14407', 'Septalexsa Mahesa Jaya', '', '', 'L', 15, '', '', ''),
(461, '14408', 'Shallomita Marsya Cintania', '', '', 'P', 15, '', '', ''),
(462, '14409', 'Sinta Ramadhayanti', '', '', 'P', 15, '', '', ''),
(463, '14410', 'Stefanus Ricko Irsandi', '', '', 'L', 15, '', '', ''),
(464, '14411', 'Suci Nur Hafifah', '', '', 'P', 15, '', '', ''),
(465, '14412', 'Teffyla Manna Prasintalenthy', '', '', 'P', 15, '', '', ''),
(466, '14413', 'Viola Serafina Pramudhita Putri', '', '', 'P', 15, '', '', ''),
(467, '14414', 'Widi Wijayanti', '', '', 'P', 15, '', '', ''),
(468, '14415', 'Yehezkiel Christian Adiasmara', '', '', 'L', 15, '', '', ''),
(469, '14348', 'Alven Milano Kurniawan', '', '', 'L', 16, '', '', ''),
(470, '14349', 'Andre Ilyas Ramadhani', '', '', 'L', 16, '', '', ''),
(471, '14350', 'Andrew Ferdinand Suryono', '', '', 'L', 16, '', '', ''),
(472, '14351', 'Areta Nailah Irhabiyah', '', '', 'P', 16, '', '', ''),
(473, '14352', 'Arya Maheswara Putra', '', '', 'L', 16, '', '', ''),
(474, '14353', 'Azarya Kristama Putra', '', '', 'L', 16, '', '', ''),
(475, '14354', 'Bagus Putro Sanjoyo', '', '', 'L', 16, '', '', ''),
(476, '14355', 'Bernadetta Jessi Adventya', '', '', 'P', 16, '', '', ''),
(477, '14356', 'Charita Ika Putri', '', '', 'P', 16, '', '', ''),
(478, '14357', 'Chrisalista Andhanavira', '', '', 'P', 16, '', '', ''),
(479, '14358', 'Dhea Yuanita Sari', '', '', 'P', 16, '', '', ''),
(480, '14359', 'Dian Ananda Putra', '', '', 'L', 16, '', '', ''),
(481, '14360', 'Dutharadhya Kusuma', '', '', 'L', 16, '', '', ''),
(482, '14361', 'Helmalia Ira Alzahra', '', '', 'P', 16, '', '', ''),
(483, '14362', 'Irfan Nicolas', '', '', 'L', 16, '', '', ''),
(484, '14363', 'Lamuel Kevin Ebbeenheizer', '', '', 'L', 16, '', '', ''),
(485, '14364', 'Loris Oktaviano', '', '', 'L', 16, '', '', ''),
(486, '14365', 'Marchelo Shallom Adnael Putra', '', '', 'L', 16, '', '', ''),
(487, '14366', 'Nabila Denti Wahyuningsih', '', '', 'P', 16, '', '', ''),
(488, '14367', 'Nafiri Agreelya Wibowo', '', '', 'P', 16, '', '', ''),
(489, '14368', 'Naura Ade Putri', '', '', 'P', 16, '', '', ''),
(490, '14369', 'Nur Shafi`ah', '', '', 'P', 16, '', '', ''),
(491, '14370', 'Raditya Banu Tri Prasetya', '', '', 'L', 16, '', '', ''),
(492, '14371', 'Samuel Ardian', '', '', 'L', 16, '', '', ''),
(493, '14372', 'Samuel Jitro Pradana', '', '', 'L', 16, '', '', ''),
(494, '14373', 'Shafa Rifkika Nur Fauziah', '', '', 'P', 16, '', '', ''),
(495, '14374', 'Shofi Salsabila', '', '', 'P', 16, '', '', ''),
(496, '14375', 'Sifora Putri Wisena', '', '', 'P', 16, '', '', ''),
(497, '14376', 'Stelarisa Meiliana Keysha Puteri', '', '', 'P', 16, '', '', ''),
(498, '14377', 'Tesalonika Christy Tyassari', '', '', 'P', 16, '', '', ''),
(499, '14378', 'Theofania Putri Andini', '', '', 'P', 16, '', '', ''),
(500, '14379', 'Tika Rohmania', '', '', 'P', 16, '', '', ''),
(501, '14380', 'Yesi Meilani', '', '', 'P', 16, '', '', ''),
(502, '14381', 'Yonatan Kartiko Yudo', '', '', 'L', 16, '', '', ''),
(503, '14187', 'Aisah Juwita Syahrani', '', '', 'P', 17, '', '', ''),
(504, '14252', 'Aldi Santoso', '', '', 'L', 17, '', '', ''),
(505, '14223', 'Allice Juliamanda Anissa', '', '', 'P', 17, '', '', ''),
(506, '14225', 'Andrya Putriningsih', '', '', 'P', 17, '', '', ''),
(507, '14127', 'Aning Haryanti', '', '', 'P', 17, '', '', ''),
(508, '14255', 'Annita Tata Pradipta', '', '', 'P', 17, '', '', ''),
(509, '14321', 'Dewi Rahma Lia', '', '', 'P', 17, '', '', ''),
(510, '14196', 'Elvando Ridho Virgiawan', '', '', 'L', 17, '', '', ''),
(511, '14197', 'Faizal Abel Fiandito', '', '', 'L', 17, '', '', ''),
(512, '14268', 'Ghea Saylendra Candraneswari', '', '', 'P', 17, '', '', ''),
(513, '14235', 'Gusti Fatma Nur Rakhimah Budi Arti', '', '', 'P', 17, '', '', ''),
(514, '14201', 'Hanifah Zulkarnaen', '', '', 'P', 17, '', '', ''),
(515, '14292', 'Hanum Syifa Rafsanjani', '', '', 'P', 17, '', '', ''),
(516, '14202', 'Izamudin Faqih', '', '', 'L', 17, '', '', ''),
(517, '14302', 'Muhammad Haykal Gibran Qadhaffi', '', '', 'L', 17, '', '', ''),
(518, '14109', 'Muhammad Hilmy Pandoyo', '', '', 'L', 17, '', '', ''),
(519, '14208', 'Nabila Raya Rahmadina', '', '', 'P', 17, '', '', ''),
(520, '14210', 'Niko Mahar Firmansyah', '', '', 'L', 17, '', '', ''),
(521, '14275', 'Nouval Ammar Ibrahim', '', '', 'L', 17, '', '', ''),
(522, '14347', 'Nurhanna Sajidah', '', '', 'P', 17, '', '', ''),
(523, '14306', 'Palefia Neysha Candra Rivama', '', '', 'P', 17, '', '', ''),
(524, '14334', 'Putra Ari Febriansyah Wicaksono', '', '', 'L', 17, '', '', '');
INSERT INTO `siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_tmp_lahir`, `siswa_tgl_lahir`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_photo`, `siswa_alamat`, `siswa_keterangan`) VALUES
(525, '14336', 'Rangga Putra Wijaya', '', '', 'L', 17, '', '', ''),
(526, '14308', 'Rizqika Vidya Shavira', '', '', 'P', 17, '', '', ''),
(527, '14309', 'Satria Putra Brilliant ', '', '', 'L', 17, '', '', ''),
(528, '14243', 'Selva Mawar Maharani', '', '', 'P', 17, '', '', ''),
(529, '14217', 'Shalma Dwi Hapsari', '', '', 'P', 17, '', '', ''),
(530, '14244', 'Thanuh Rulyanto', '', '', 'L', 17, '', '', ''),
(531, '14247', 'Vera Alissiya Putri', '', '', 'P', 17, '', '', ''),
(532, '14312', 'Vina Aditia Pratama', '', '', 'P', 17, '', '', ''),
(533, '14251', 'Abdul Hakim Nugroho', '', '', 'L', 18, '', '', ''),
(534, '14315', 'Achmad Wijdan Rajendra Istaryanto', '', '', 'L', 18, '', '', ''),
(535, '14219', 'Adit Novriandri', '', '', 'L', 18, '', '', ''),
(536, '14316', 'Aditiya Virgiawan Trisna Saputra', '', '', 'L', 18, '', '', ''),
(537, '14286', 'Agustin Fajar Herwinda ', '', '', 'P', 18, '', '', ''),
(538, '14221', 'Al May Dzaka Rafi Wijaya', '', '', 'L', 18, '', '', ''),
(539, '14287', 'Annisa Nurul Khasanah', '', '', 'P', 18, '', '', ''),
(540, '14256', 'Arifyanto Lutfi Nurhidayat', '', '', 'L', 18, '', '', ''),
(541, '14192', 'Armando Aprilio Jaya Suprapto', '', '', 'L', 18, '', '', ''),
(542, '14323', 'Edo Rival Kurniawan', '', '', 'L', 18, '', '', ''),
(543, '14324', 'Faradina Ayu Rismadewi', '', '', 'P', 18, '', '', ''),
(544, '14266', 'Fayyaadh Adi Saputra', '', '', 'L', 18, '', '', ''),
(545, '14200', 'Genta Pandu Wicaksana Naufal Ristofandi', '', '', 'L', 18, '', '', ''),
(546, '14327', 'Gibran Saura Pujian', '', '', 'L', 18, '', '', ''),
(547, '14291', 'Greece Lovely Putri Laksono', '', '', 'P', 18, '', '', ''),
(548, '14203', 'Joavinco Hafit Hamazah Robbi Takhodsa', '', '', 'L', 18, '', '', ''),
(549, '14204', 'Kalifa Fidelia Maharani', '', '', 'P', 18, '', '', ''),
(550, '14238', 'Lilis Kartika Dewi', '', '', 'P', 18, '', '', ''),
(551, '14301', 'Muhammad Adin Wijaya', '', '', 'L', 18, '', '', ''),
(552, '14305', 'Novia Ardianata Putri', '', '', 'P', 18, '', '', ''),
(553, '14144', 'Nur Dwi Handayani', '', '', 'P', 18, '', '', ''),
(554, '14276', 'Nur Wahid Fadila Yulianto', '', '', 'L', 18, '', '', ''),
(555, '14241', 'Pandu Arta Bima', '', '', 'L', 18, '', '', ''),
(556, '14310', 'Surya Putra Tri Pamekas ', '', '', 'L', 18, '', '', ''),
(557, '14311', 'Susilo Joko Wijayanto', '', '', 'L', 18, '', '', ''),
(558, '14246', 'Tri Dewi Pamilih', '', '', 'P', 18, '', '', ''),
(559, '14344', 'Valencia Azzahra Anthony Putri', '', '', 'P', 18, '', '', ''),
(560, '14345', 'Verdiansyah Hernyana Rudra Perkasa', '', '', 'L', 18, '', '', ''),
(561, '14314', 'Widi Cahya Bening', '', '', 'P', 18, '', '', ''),
(562, '14282', 'Yanuar Ekaputra', '', '', 'L', 18, '', '', ''),
(563, '14248', 'Yashinta Seftyanisa', '', '', 'P', 18, '', '', ''),
(564, '14249', 'Yumnasyach Al Aushofi Yudhaputri', '', '', 'P', 18, '', '', ''),
(565, '14189', 'Amanda Putri Canisa', '', '', 'P', 19, '', '', ''),
(566, '14253', 'Anggarda Bintang Pamungkas', '', '', 'L', 19, '', '', ''),
(567, '14254', 'Anggi Saputri', '', '', 'P', 19, '', '', ''),
(568, '14288', 'Aprilia Khloud Mustikasari', '', '', 'P', 19, '', '', ''),
(569, '14258', 'Arnezal Caesar Sahizidan ', '', '', 'L', 19, '', '', ''),
(570, '14157', 'Audina Dwi Fildawan', '', '', 'P', 19, '', '', ''),
(571, '14259', 'Bagus Sholeh Hariyanto', '', '', 'L', 19, '', '', ''),
(572, '14194', 'Carissa Ayu Ariyani', '', '', 'P', 19, '', '', ''),
(573, '14319', 'Choirunnisa Callista Avrilia Astanto', '', '', 'P', 19, '', '', ''),
(574, '14320', 'Dania Mei Indriyani', '', '', 'P', 19, '', '', ''),
(575, '14232', 'Ferisa Ratmalia Putri', '', '', 'P', 19, '', '', ''),
(576, '14267', 'Fissy Ana Talisha', '', '', 'P', 19, '', '', ''),
(577, '14234', 'Gita Dea Febrianingsih', '', '', 'P', 19, '', '', ''),
(578, '14166', 'Iqbal Muhammad Atha', '', '', 'L', 19, '', '', ''),
(579, '14295', 'Kezya Ney Silla Nur Syafrida', '', '', 'P', 19, '', '', ''),
(580, '14240', 'Maya Oktaviana', '', '', 'P', 19, '', '', ''),
(581, '14271', 'Mohammad Yogi Caninggia', '', '', 'L', 19, '', '', ''),
(582, '14205', 'Muhammad Arief Prasetyo', '', '', 'L', 19, '', '', ''),
(583, '14277', 'Putra Pamungkas', '', '', 'L', 19, '', '', ''),
(584, '14116', 'Rifky Andrian Pangestu', '', '', 'L', 19, '', '', ''),
(585, '14337', 'Rivonda Duwi Saputra ', '', '', 'L', 19, '', '', ''),
(586, '14338', 'Rizky Muhammad Akbar ', '', '', 'L', 19, '', '', ''),
(587, '14339', 'Sayidina Ali Abdillah', '', '', 'L', 19, '', '', ''),
(588, '14340', 'Septi Arum Nawang Wulan', '', '', 'P', 19, '', '', ''),
(589, '14147', 'Shiva Nandya Cahya', '', '', 'P', 19, '', '', ''),
(590, '14342', 'Syandana Shafa Salsabila ', '', '', 'P', 19, '', '', ''),
(591, '14245', 'Tiara Putri Maharani', '', '', 'P', 19, '', '', ''),
(592, '14280', 'Vemas Arjun Raynaldi', '', '', 'L', 19, '', '', ''),
(593, '14281', 'Wahyu Indraswari', '', '', 'P', 19, '', '', ''),
(594, '14346', 'Windi Sabrina', '', '', 'P', 19, '', '', ''),
(595, '14250', 'Zulvia Ramadhani', '', '', 'P', 19, '', '', ''),
(596, '14285', 'Agnesia Winda Sari', '', '', 'P', 20, '', '', ''),
(597, '14188', 'Ajeng Lestari Indrayani', '', '', 'P', 20, '', '', ''),
(598, '14190', 'Ana Anggraini', '', '', 'P', 20, '', '', ''),
(599, '14128', 'Arya Bagus Gumilang', '', '', 'L', 20, '', '', ''),
(600, '14193', 'Candra Suryavimala Prabhasri', '', '', 'P', 20, '', '', ''),
(601, '14195', 'Chintya Ine Maharani', '', '', 'P', 20, '', '', ''),
(602, '14289', 'Dhafa Solan Aji Putra ', '', '', 'L', 20, '', '', ''),
(603, '14262', 'Dhiva Anggun Insani', '', '', 'P', 20, '', '', ''),
(604, '14264', 'Eko Haryanto', '', '', 'L', 20, '', '', ''),
(605, '14231', 'Fachrel Brahmanda Pramaditya Dewanta', '', '', 'L', 20, '', '', ''),
(606, '14265', 'Fajar Dwi Prasetya', '', '', 'L', 20, '', '', ''),
(607, '14199', 'Fausta Nanda Shifa', '', '', 'P', 20, '', '', ''),
(608, '14293', 'Ica Dewi Septiana', '', '', 'P', 20, '', '', ''),
(609, '14100', 'Ilyasa Ridho Nafsintomi', '', '', 'L', 20, '', '', ''),
(610, '14329', 'Jihan Salmanida Wibowo', '', '', 'P', 20, '', '', ''),
(611, '14270', 'Luftifah Novika Nur Hidayah', '', '', 'P', 20, '', '', ''),
(612, '14239', 'Mardihono Nur Rohman', '', '', 'L', 20, '', '', ''),
(613, '14299', 'Meytha Priscilia ', '', '', 'P', 20, '', '', ''),
(614, '14300', 'Monika Dwi Putriana', '', '', 'P', 20, '', '', ''),
(615, '14142', 'Muhammad Ibnu Sufi', '', '', 'L', 20, '', '', ''),
(616, '14303', 'Muhammad Rizki Agus Santoso ', '', '', 'L', 20, '', '', ''),
(617, '14304', 'Muhammad Sabian Keizaro', '', '', 'L', 20, '', '', ''),
(618, '14272', 'Muthia Haifa Luthfiana', '', '', 'P', 20, '', '', ''),
(619, '14332', 'Nabeel Muhammad Alimudin', '', '', 'L', 20, '', '', ''),
(620, '14274', 'Nabilla Alya Faradina', '', '', 'P', 20, '', '', ''),
(621, '14333', 'Oktavia Dinda Ramadhani', '', '', 'P', 20, '', '', ''),
(622, '14307', 'Putri Rahmawati', '', '', 'P', 20, '', '', ''),
(623, '14335', 'Raditya Leonanda Gustafa', '', '', 'L', 20, '', '', ''),
(624, '14609', 'Rindansyah', '', '', 'L', 20, '', '', ''),
(625, '14214', 'Rushita Ayu Dinar Ramadhani', '', '', 'P', 20, '', '', ''),
(626, '14215', 'Sahistyo Rizqy Wijaya', '', '', 'L', 20, '', '', ''),
(627, '14218', 'Tazqia Atiqatus Zahra', '', '', 'P', 20, '', '', ''),
(628, '14284', 'Adena Zahra Tohar', '', '', 'P', 21, '', '', ''),
(629, '14317', 'Afrizal Arya Syahputra ', '', '', 'L', 21, '', '', ''),
(630, '14220', 'Akbar Nurfiriyan', '', '', 'L', 21, '', '', ''),
(631, '14318', 'Aldito Frizi Meygantara', '', '', 'L', 21, '', '', ''),
(632, '14222', 'Ale Aji Pambudi', '', '', 'L', 21, '', '', ''),
(633, '14224', 'Alvinandra Prasetya', '', '', 'L', 21, '', '', ''),
(634, '14191', 'Aqila Maula Fahriza', '', '', 'L', 21, '', '', ''),
(635, '14257', 'Arjun Salwa Awali Ramadhan', '', '', 'L', 21, '', '', ''),
(636, '14260', 'Caezhara Sosro Saputri', '', '', 'P', 21, '', '', ''),
(637, '14261', 'Cornelia Eva Rahmawati', '', '', 'P', 21, '', '', ''),
(638, '14322', 'Diki Setiawan ', '', '', 'L', 21, '', '', ''),
(639, '14230', 'Elysia Salwa Amanda Syifa', '', '', 'P', 21, '', '', ''),
(640, '14096', 'Erik Putra Oktavian', '', '', 'L', 21, '', '', ''),
(641, '14198', 'Fatimah Iefa Rusydiana Nursetyo', '', '', 'P', 21, '', '', ''),
(642, '14290', 'Febrina Eka Elsagi', '', '', 'P', 21, '', '', ''),
(643, '14325', 'Ferdian Saputra', '', '', 'L', 21, '', '', ''),
(644, '14326', 'Gema Adam Sanjaya', '', '', 'L', 21, '', '', ''),
(645, '14328', 'Gigih Dimar Kanugrahan Bakrie', '', '', 'L', 21, '', '', ''),
(646, '14137', 'Haniva Ika Rosida', '', '', 'P', 21, '', '', ''),
(647, '14236', 'Ikhsan Afif Maulana Putra', '', '', 'L', 21, '', '', ''),
(648, '14294', 'Irfan Akbar Fahreza', '', '', 'L', 21, '', '', ''),
(649, '14167', 'Irvy Shafira Nurwijayanti', '', '', 'P', 21, '', '', ''),
(650, '14330', 'Maylisa Dewanti Guna Negara', '', '', 'P', 21, '', '', ''),
(651, '14298', 'Meriesta Faradilla', '', '', 'P', 21, '', '', ''),
(652, '14207', 'Muhammad Fikri Nur Ikhzan', '', '', 'L', 21, '', '', ''),
(653, '14209', 'Naswa Navitamayla Ristiadi', '', '', 'P', 21, '', '', ''),
(654, '14242', 'Rangga Alif Excellino', '', '', 'L', 21, '', '', ''),
(655, '14279', 'Ravinda Hita Arsita Sari', '', '', 'P', 21, '', '', ''),
(656, '14213', 'Revouzvillo Aslerste Zart Yusuf', '', '', 'L', 21, '', '', ''),
(657, '14216', 'Satya Rafi Nugraha ', '', '', 'L', 21, '', '', ''),
(658, '14343', 'Tereshifa Surya Winata', '', '', 'P', 21, '', '', ''),
(659, '14313', 'Vio Nurdita Indriawan', '', '', 'L', 21, '', '', ''),
(660, '14125', 'Allan Ido Nugraha Sihombing', '', '', 'L', 22, '', '', ''),
(661, '14126', 'Alvin Christian Aprianto', '', '', 'L', 22, '', '', ''),
(662, '14226', 'Annisa Nur Afifah', '', '', 'P', 22, '', '', ''),
(663, '14227', 'Arrohma Vidya Prasojo', '', '', 'P', 22, '', '', ''),
(664, '14092', 'Calvin Widian Permata Adji', '', '', 'L', 22, '', '', ''),
(665, '14162', 'Christova  Andro Pramudya', '', '', 'L', 22, '', '', ''),
(666, '14163', 'Dhara Tri Hastutiningsih ', '', '', 'P', 22, '', '', ''),
(667, '14263', 'Diffa Lutfiana Salsabila', '', '', 'P', 22, '', '', ''),
(668, '14229', 'Elisa Lusiana', '', '', 'P', 22, '', '', ''),
(669, '14095', 'Eric Antona Joy Supriya', '', '', 'L', 22, '', '', ''),
(670, '14099', 'Gavin Christ Yohanes', '', '', 'L', 22, '', '', ''),
(671, '14136', 'Gleen Nathanael Toyang', '', '', 'L', 22, '', '', ''),
(672, '14165', 'Hani Suciwati', '', '', 'P', 22, '', '', ''),
(673, '14170', 'Jocylyn Serafi Nugroho', '', '', 'P', 22, '', '', ''),
(674, '14138', 'Joscha Alverano Archi Prasetyo', '', '', 'L', 22, '', '', ''),
(675, '14139', 'Joshua Poundra Kumaratungga Sumarsono', '', '', 'L', 22, '', '', ''),
(676, '14140', 'Kurniawan Ardhi Putra Pamungkas', '', '', 'L', 22, '', '', ''),
(677, '14331', 'Meisya Fajar Putri Santoso', '', '', 'P', 22, '', '', ''),
(678, '14141', 'Mikhael Geraldino', '', '', 'L', 22, '', '', ''),
(679, '14110', 'Nadia Rahmadhani Putri', '', '', 'P', 22, '', '', ''),
(680, '14111', 'Nathanael Auldy Raharjo', '', '', 'L', 22, '', '', ''),
(681, '14211', 'Nina Ayu Permata Sari', '', '', 'P', 22, '', '', ''),
(682, '14145', 'Nurul Hamidah', '', '', 'P', 22, '', '', ''),
(683, '14178', 'Petrick Yoga Wira Adi Putra', '', '', 'L', 22, '', '', ''),
(684, '14278', 'Putri Amelia', '', '', 'P', 22, '', '', ''),
(685, '14180', 'Regina Renate Yosuana ', '', '', 'P', 22, '', '', ''),
(686, '14182', 'Soffin Arfian', '', '', 'L', 22, '', '', ''),
(687, '14117', 'Stefanus Alexander Sudrajat', '', '', 'L', 22, '', '', ''),
(688, '14183', 'Stevani Merry Natalia', '', '', 'P', 22, '', '', ''),
(689, '14118', 'Talenta Bahtera Paksi', '', '', 'L', 22, '', '', ''),
(690, '14120', 'Vito Iswin Nathaniel', '', '', 'L', 22, '', '', ''),
(691, '14153', 'Willy Christiano', '', '', 'L', 22, '', '', ''),
(692, '14156', 'Almuzammil Ichsan', '', '', 'L', 23, '', '', ''),
(693, '14158', 'Azka Aulia Damayanti', '', '', 'P', 23, '', '', ''),
(694, '14159', 'Benedictus Graceanando Suryo Saputro', '', '', 'L', 23, '', '', ''),
(695, '14161', 'Christopher Prajna Arkananta', '', '', 'L', 23, '', '', ''),
(696, '14133', 'Diza Orlana Devina', '', '', 'P', 23, '', '', ''),
(697, '14164', 'Eliza Dian Hapsari', '', '', 'P', 23, '', '', ''),
(698, '14097', 'Fajar Andri Setia Utomo', '', '', 'L', 23, '', '', ''),
(699, '14098', 'Florencia Lovy Kristyandari', '', '', 'P', 23, '', '', ''),
(700, '14101', 'Imanuel Gracius Diego Surya Damara', '', '', 'L', 23, '', '', ''),
(701, '14171', 'Luky Listyanto', '', '', 'L', 23, '', '', ''),
(702, '14296', 'Mahiswari Adya Mumpuni ', '', '', 'P', 23, '', '', ''),
(703, '14172', 'Merry Ayu Listiari', '', '', 'P', 23, '', '', ''),
(704, '14107', 'Mikael Jeflin Putra Atmaja', '', '', 'L', 23, '', '', ''),
(705, '14273', 'Nabila Wita Neswari', '', '', 'P', 23, '', '', ''),
(706, '14143', 'Nadea Ayu Tri Handayani', '', '', 'P', 23, '', '', ''),
(707, '14173', 'Nandeo Yasin Rahmata Azhim', '', '', 'L', 23, '', '', ''),
(708, '14175', 'Naura Anggun Wuryaningtyas', '', '', 'P', 23, '', '', ''),
(709, '14176', 'Ni Komang Luna Drupadi Windrastuti', '', '', 'P', 23, '', '', ''),
(710, '14177', 'Pandu Wicaksono', '', '', 'L', 23, '', '', ''),
(711, '14179', 'Raymond Gustamadi Putra Modok', '', '', 'L', 23, '', '', ''),
(712, '14212', 'Reiza Arditya Putra', '', '', 'L', 23, '', '', ''),
(713, '14115', 'Renista Isnaini Nurul Azizah', '', '', 'P', 23, '', '', ''),
(714, '14181', 'Revaldo Hafiz Hanafianto', '', '', 'L', 23, '', '', ''),
(715, '14146', 'Rizki Putri Febrianti', '', '', 'P', 23, '', '', ''),
(716, '14341', 'Syafira Dian Nurani', '', '', 'P', 23, '', '', ''),
(717, '14149', 'Tenetha Zahra Prasanti', '', '', 'P', 23, '', '', ''),
(718, '14184', 'Theresia Natasya Dodi Amanda', '', '', 'P', 23, '', '', ''),
(719, '14119', 'Tito Bintang Fajar', '', '', 'L', 23, '', '', ''),
(720, '14151', 'Vania Wijaya Susanto', '', '', 'P', 23, '', '', ''),
(721, '14152', 'Velisca Aprilia Dwiyanti', '', '', 'P', 23, '', '', ''),
(722, '14185', 'Vijar Sagita Christyawati ', '', '', 'P', 23, '', '', ''),
(723, '14186', 'Vitha Septania Margareni', '', '', 'P', 23, '', '', ''),
(724, '14091', 'Abigael Sherlly Christiana', '', '', 'P', 24, '', '', ''),
(725, '14283', 'Adelia Dwi Pratiwi', '', '', 'P', 24, '', '', ''),
(726, '14124', 'Agnes Amanda Agni Asmara', '', '', 'P', 24, '', '', ''),
(727, '14160', 'Cahya Anugrah Setya Irawan', '', '', 'L', 24, '', '', ''),
(728, '14129', 'Calvin Guifaro Setyaki', '', '', 'L', 24, '', '', ''),
(729, '14228', 'Cheisya Kinanti Imourani', '', '', 'P', 24, '', '', ''),
(730, '14093', 'Cleora Nestya Ayu Patralita', '', '', 'P', 24, '', '', ''),
(731, '14130', 'Cornelius Felix Pamungkas', '', '', 'L', 24, '', '', ''),
(732, '14132', 'Dinda Lorensa Valentina ', '', '', 'P', 24, '', '', ''),
(733, '14094', 'Ellyza Natalia Putri Ardika', '', '', 'P', 24, '', '', ''),
(734, '14134', 'Eustachia Valerina Ruby Dharma', '', '', 'P', 24, '', '', ''),
(735, '14135', 'Gavra Farrel Aryaputra', '', '', 'L', 24, '', '', ''),
(736, '14233', 'Gifta Mulen Paradisa', '', '', 'P', 24, '', '', ''),
(737, '14102', 'Immanuel David Sanjaya', '', '', 'L', 24, '', '', ''),
(738, '14103', 'Ivania Jaziel Christiani', '', '', 'P', 24, '', '', ''),
(739, '14168', 'Jessica Dara Novita', '', '', 'P', 24, '', '', ''),
(740, '14169', 'Jessica Niken Endah Sulistyowati', '', '', 'P', 24, '', '', ''),
(741, '14104', 'Kezia Waila Nayaka', '', '', 'P', 24, '', '', ''),
(742, '14269', 'Lambang Firmansyah', '', '', 'L', 24, '', '', ''),
(743, '14105', 'Leticia Della Aganiata', '', '', 'P', 24, '', '', ''),
(744, '14106', 'Marietta Anna Satriani ', '', '', 'P', 24, '', '', ''),
(745, '14297', 'Medina Nur Cantika Putri Prasetyo', '', '', 'P', 24, '', '', ''),
(746, '14174', 'Nathaniell Jody Saputra', '', '', 'L', 24, '', '', ''),
(747, '14112', 'Paskalia Apriyani', '', '', 'P', 24, '', '', ''),
(748, '14113', 'Puguh Jati Wicaksana', '', '', 'L', 24, '', '', ''),
(749, '14114', 'Raul Abdie Prasetyo', '', '', 'L', 24, '', '', ''),
(750, '14148', 'Tabita Debi Pramesthi', '', '', 'P', 24, '', '', ''),
(751, '14150', 'Vania Noverina', '', '', 'P', 24, '', '', ''),
(752, '14121', 'Yoel Abimanyu Wahono', '', '', 'L', 24, '', '', ''),
(753, '14154', 'Yosua Tirzano Chandra Saputra', '', '', 'L', 24, '', '', ''),
(754, '14122', 'Zulfaa Zayni Khumaydah', '', '', 'P', 24, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `jenis_guru`
--
ALTER TABLE `jenis_guru`
  ADD PRIMARY KEY (`jenis_guru_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_guru`
--
ALTER TABLE `jenis_guru`
  MODIFY `jenis_guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=755;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
