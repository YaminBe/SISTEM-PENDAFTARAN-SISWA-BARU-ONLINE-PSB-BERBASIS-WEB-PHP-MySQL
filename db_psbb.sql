-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2018 pada 07.15
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psbb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
(1, 'admin', 'admin', 'Abdul Yamin', 'tafsir.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ijazah`
--

CREATE TABLE `tb_ijazah` (
  `id_siswa` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ijazah`
--

INSERT INTO `tb_ijazah` (`id_siswa`, `deskripsi`, `foto`) VALUES
(1, 'ijazah', 'h.jpg'),
(2, '', ' mnn'),
(3, '', 'jnjn'),
(4, '', ' n b'),
(5, '', 'bhbh'),
(6, '', 'hbhb'),
(7, '', 'hbhb'),
(8, '', 'hbhb'),
(9, '', 'jnjnj'),
(10, '', 'jnjnj'),
(11, '', 'jnjnj'),
(12, '', 'jnjnj'),
(13, '', 'jnjn'),
(14, '', 'jnj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_siswa` int(11) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `nilai5` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_siswa`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `jumlah`) VALUES
(1, 90, 90, 100, 100, 100, 96),
(3, 80, 60, 70, 80, 90, 90),
(5, 70, 80, 90, 60, 89, 90),
(8, 90, 90, 80, 70, 70, 80),
(9, 100, 90, 80, 80, 90, 88),
(10, 90, 90, 80, 80, 10, 70),
(11, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `id_siswa` int(11) NOT NULL,
  `nama_ayah` varchar(70) NOT NULL,
  `nik_ayah` varchar(30) NOT NULL,
  `tmp_ayah` varchar(60) NOT NULL,
  `tgl_ayah` date NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `pddk_ayah` varchar(60) NOT NULL,
  `kerja_ayah` varchar(60) NOT NULL,
  `penghasilan_ayah` varchar(15) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `pos_ayah` varchar(10) NOT NULL,
  `hp_ayah` varchar(13) NOT NULL,
  `nama_ibu` varchar(70) NOT NULL,
  `nik_ibu` varchar(30) NOT NULL,
  `tmp_ibu` varchar(60) NOT NULL,
  `tgl_ibu` date NOT NULL,
  `agama_ibu` varchar(30) NOT NULL,
  `pddk_ibu` varchar(50) NOT NULL,
  `kerja_ibu` varchar(60) NOT NULL,
  `penghasilan_ibu` text NOT NULL,
  `alamat_ibu` text NOT NULL,
  `pos_ibu` varchar(10) NOT NULL,
  `hp_ibu` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ortu`
--

INSERT INTO `tb_ortu` (`id_siswa`, `nama_ayah`, `nik_ayah`, `tmp_ayah`, `tgl_ayah`, `agama_ayah`, `pddk_ayah`, `kerja_ayah`, `penghasilan_ayah`, `alamat_ayah`, `pos_ayah`, `hp_ayah`, `nama_ibu`, `nik_ibu`, `tmp_ibu`, `tgl_ibu`, `agama_ibu`, `pddk_ibu`, `kerja_ibu`, `penghasilan_ibu`, `alamat_ibu`, `pos_ibu`, `hp_ibu`) VALUES
(1, 'tes', '989778787', 'Padang', '2018-04-12', 'Islam', 's1', 'pns', '40000000', 'pADANG', '090909', '0888888', 'Tes saja', '908797989', 'Pikumbuah', '2018-04-13', 'Islam', 'SMA', 'IRT', '8808080', 'Payakumbuah', '9088', '08666'),
(3, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(5, 'Rasuli', '09878654345', 'Talang Baru', '2018-03-23', 'Islam', 'SLTP', 'PETANI', '23000', 'Sibak', '0988', '08888xx', 'Zuknawati', '098890', 'Sibak', '1991-02-04', 'Islam', 'SMK', 'IRT', '230000', 'Sibak', '080808', '999887'),
(8, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(9, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(10, 'jububuu', 'bubu', 'bub', '2018-11-30', 'Islam', 'bhbhb', 'hbhbh', 'bhbh', 'bhbhbhb', 'hbhb', 'hbhbh', 'bhbhbh', 'bhbh', 'bhbhb', '2018-04-24', 'Islam', 'mjnj', 'njnj', 'njn', 'jnjn', 'njnjn', 'jnjnjn'),
(11, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(12, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(13, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(14, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pddk`
--

CREATE TABLE `tb_pddk` (
  `id_siswa` int(11) NOT NULL,
  `pddk_sebelum` varchar(40) NOT NULL,
  `lulus_dr` varchar(50) NOT NULL,
  `tg_no_sttb` varchar(50) NOT NULL,
  `lama` varchar(20) NOT NULL,
  `no_un` varchar(20) NOT NULL,
  `no_seri` varchar(20) NOT NULL,
  `no_skhu` varchar(10) NOT NULL,
  `r1` varchar(10) NOT NULL,
  `r2` varchar(10) NOT NULL,
  `r3` varchar(10) NOT NULL,
  `r4` varchar(10) NOT NULL,
  `r5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pddk`
--

INSERT INTO `tb_pddk` (`id_siswa`, `pddk_sebelum`, `lulus_dr`, `tg_no_sttb`, `lama`, `no_un`, `no_seri`, `no_skhu`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES
(1, 'SMP 1123', 'SMP1234', '10-01-2001/ 000000000000000000', '3 Tahun', '0990909', '098979686', '866868686', '9', '8', '7', '6', '5'),
(2, 'hjhj', 'hjh', 'hh', 'jhh', 'khk', 'hkh', 'khk', 'hkhk', 'hkhk', 'gjgg', 'jggjg', 'jgjg'),
(3, 'gfh', 'hvgvg', 'vgvg', 'gvgv', 'gvgvg', 'vgvg', 'vgvg', 'vgvg', 'vgvg', 'vgvg', 'vgv', 'gvgv'),
(4, 'ger', 'hhb', 'hbh', 'bhb', 'hbh', 'bhbh', 'bh', 'bh', 'bh', 'bh', 'b', 'hbh'),
(5, 'gerg', 'jnjn', 'jnj', 'njn', 'jn', 'jn', 'jnj', 'nj', 'nj', 'nj', 'nj', 'n'),
(6, 'bhbh', 'bhbh', 'bhb', 'hbh', 'bhb', 'hbh', 'bh', 'bhb', 'hbh', 'bh', 'bh', 'b'),
(7, 'hbgvgv', 'gvgvg', 'vgvg', 'vgv', 'gv', 'gvg', 'vg', 'vg', 'vg', 'vg', 'vg', 'v'),
(8, 'gg', 'hgfh', 'f', 'hgvh', 'vhvh', 'vhvh', 'vhv', 'hvhv', 'hvhv', 'hvh', 'vhvh', 'vhvh'),
(9, 'jyjnn', 'njn', 'jnj', 'njn', 'jnj', 'njn', 'jnj', 'njn', 'jn', 'jn', 'j', 'nj'),
(10, 'jknjbj', 'bjbjb', 'jbj', 'jbjb', 'jbj', 'bj', 'bjb', 'jbjb', 'j', 'bj', 'b', 'jbj'),
(11, 'kjkji', 'jij', 'iji', 'ji', 'ji', 'j', 'ij', 'i', 'j', 'ij', 'i', 'ji'),
(12, 'jhjhk', 'hkhkh', 'khk', 'hk', 'hkh', 'k', 'hkhk', 'hk', 'hk', 'hk', 'hk', 'hk'),
(13, 'jkjkj', 'kjkjkjk', 'jkj', 'kj', 'kjk', 'jk', 'jk', 'j', 'kj', 'k', 'jk', 'jk'),
(14, 'kjkjk', 'jkj', 'k', 'jk', 'jk', 'j', 'kj', 'k', 'j', 'kj', 'k', 'w');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `provinsi`) VALUES
(1, 'Aceh'),
(2, 'Bali'),
(3, 'Banten'),
(4, 'Bengkulu'),
(5, 'Gorontalo'),
(6, 'Jakarta'),
(7, 'Jambi'),
(8, 'Jawa Barat'),
(9, 'Jawa Tengah'),
(10, 'Jawa Timur'),
(11, 'Kalimantan Barat'),
(12, 'Kalimantan Selatan'),
(13, 'Kalimantan Tengah'),
(14, 'Kalimantan Timur'),
(15, 'Kalimantan Utara'),
(16, 'Kepulauan Bangka Belitung'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nusa Tenggara Timur'),
(22, 'Papua'),
(23, 'Papua Barat'),
(24, 'Riau'),
(25, 'Sulawesi Barat'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Tenggara'),
(29, 'Sulawesi Utara'),
(30, 'Sumatera Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_siswa` varchar(70) NOT NULL,
  `tpt_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(16) NOT NULL,
  `anakke` varchar(10) NOT NULL,
  `jml_saudara` varchar(10) NOT NULL,
  `anak_yatim` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `cita` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_rumah` varchar(60) NOT NULL,
  `rt` varchar(60) NOT NULL,
  `rw` varchar(60) NOT NULL,
  `kel` varchar(60) NOT NULL,
  `kec` varchar(60) NOT NULL,
  `kab` varchar(60) NOT NULL,
  `prov` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `wns` varchar(60) NOT NULL,
  `asal_sekolah` varchar(60) NOT NULL,
  `no_nisn` varchar(30) NOT NULL,
  `no_npsn` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `username`, `password`, `nama_siswa`, `tpt_lahir`, `tgl_lahir`, `jk`, `anakke`, `jml_saudara`, `anak_yatim`, `hobi`, `cita`, `alamat`, `no_rumah`, `rt`, `rw`, `kel`, `kec`, `kab`, `prov`, `pos`, `wns`, `asal_sekolah`, `no_nisn`, `no_npsn`, `no_kk`, `foto`, `keterangan`) VALUES
(1, 'yamin', 'yamin', 'Abdul yamin', 'Bengkulu', '2018-03-10', 'Laki-laki', '03', '05', 'Anak Yatim', 'Memancing', 'Polisi', 'Desa Sibak', '09', '90', '80', 'Sibak', 'Ipuh', 'Muko-muko', 'Aceh', '22456', 'INDONESIA', 'SMK Taruna Bengkulu', '0987', '080897', 'JKJH', '8.JPG', 'TIDAK LULUS'),
(3, 'popy', 'popy', 'Poppy Yendriani', 'Jakarta', '2018-03-14', 'Perempuan', '01', '04', '', 'Membaca', 'Dosen', 'Padang', '09', '03', '01', 'Balingka', 'Banuhampu', 'Agama', 'Bengkulu', '09888', 'Indonesia', 'MA Guguak Randah', '09887', '90909', '8989', '8.JPG', 'TIDAK LULUS'),
(5, 'iwan', 'iwan', 'Marta Iwan Zuanda', 'Sibak', '1996-03-04', 'Laki-laki', '01', '04', '', 'Makan', 'ABRI', 'Desa Sibak, Ipuh kab. Muko-muko', '09', '08', '01', 'SIBAK', 'IPUH', 'MUKO-MUKO', 'Bengkulu', '08888', 'Melayu', 'MTSN Ipuh', '09888', '0999', '098', '8.JPG', 'TIDAK LULUS'),
(8, 'rahma', 'rahma', 'Rahma', 'Padang', '2018-04-21', 'Perempuan', '3', '6', '', 'Mancing Mania', 'pns', 'GDV', '090', '98989', '89898', 'PP', 'BANUHAMPU', 'AGAM', 'Bali', '90909', 'INDONESIA', 'SMP', '98989898', '-090', 'U887', '8.JPG', 'LULUS'),
(9, 'randu', 'randu', 'Randu Franstio', 'Padang', '2018-04-10', 'Laki-laki', '1', '5', '', 'nonton', 'Polisi', 'Pasaman Barat', '03', '98', '01', 'Sibak', 'Sijunjung', 'Tanah datar', 'Bengkulu', '0909', 'Minang', 'SMP Padang', '9098', '90909090', '978', '8.JPG', 'LULUS'),
(10, 'inoy', 'inoy', 'M. Zainul', 'bhbhbhb', '2018-04-18', 'Laki-laki', '1', '3', '', 'bhbh', 'bhbh', 'bhPP', 'bhbhb', 'hbhbh', 'bhbh', 'bhb', 'hbh', 'bhbhbh', 'Bengkulu', 'hbhbh', 'bhbh', 'bhbh', 'bhbh', 'bhbhb', 'hbh', '8.JPG', 'LULUS'),
(11, 'rani', '12345', 'rani octaviani', '', '0000-00-00', '', '', '', '', '', '', 'pariaman', '', '', '', '', '', '', 'Aceh', '', '', '', '', '', '', '8.JPG', 'SEDANG DIPROSES OLEH PANITIA'),
(12, 'nopri', 'nopri', 'Nopriadi', 'njhbnhbh', '2018-05-26', 'Laki-laki', '3', '5', '', 'fcfc', 'fcfc', 'cgcgSIBAK', 'cgcgc', 'gcgc', 'gcgc', 'gcgc', 'gcgc', 'gc', 'Bengkulu', 'nbhbb', 'hvgvgv', 'fcfc', 'fct65', 'gvgvg', 'vgv', '8.JPG', 'SEDANG DIPROSES OLEH PANITIA'),
(13, 'a', 'a', 'yamin', '', '0000-00-00', '', '', '', '', '', '', 'hhg', '', '', '', '', '', '', 'Bengkulu', '', '', '', '', '', '', '8.JPG', 'SEDANG DIPROSES OLEH PANITIA'),
(14, 'l', 'l', 'tesss', '', '0000-00-00', '', '', '', '', '', '', 'sss', '', '', '', '', '', '', 'Bengkulu', '', '', '', '', '', '', '8.JPG', 'SEDANG DIPROSES OLEH PANITIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_siswa` int(11) NOT NULL,
  `nama_wali` varchar(70) NOT NULL,
  `nik_wali` varchar(30) NOT NULL,
  `tmp_wali` varchar(60) NOT NULL,
  `tgl_wali` date NOT NULL,
  `agama_wali` varchar(50) NOT NULL,
  `pddk_wali` varchar(60) NOT NULL,
  `kerja_wali` varchar(60) NOT NULL,
  `penghasilan_wali` varchar(15) NOT NULL,
  `wns_wali` varchar(50) NOT NULL,
  `alamat_wali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wali`
--

INSERT INTO `tb_wali` (`id_siswa`, `nama_wali`, `nik_wali`, `tmp_wali`, `tgl_wali`, `agama_wali`, `pddk_wali`, `kerja_wali`, `penghasilan_wali`, `wns_wali`, `alamat_wali`) VALUES
(1, 'Ad', '90909090', 'Bengkulu', '1993-01-10', 'Islam', 'S1', 'Wiraswasta', '230000', 'Minang', 'Bukittinggi'),
(3, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(5, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(8, 'IHUHYH', 'YBYBY', 'BYBYBYB', '2018-04-14', 'Islam', 'KIJIJ', 'IJIUHU', 'HUHU', 'HUHU', 'HU'),
(9, 'Tarzan', '989898', 'bhbhb', '2018-04-10', 'Islam', 'SMA', 'PNS', '780000', 'INDONESIA', 'Padang'),
(10, 'jnjnj', 'bhb', 'hbh', '2018-04-20', 'Islam', 'bhbbb', 'hbhbh', 'bhbhb', 'hbhbh', 'bhbh'),
(11, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(12, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(13, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(14, '', '', '', '0000-00-00', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_ijazah`
--
ALTER TABLE `tb_ijazah`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_pddk`
--
ALTER TABLE `tb_pddk`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ijazah`
--
ALTER TABLE `tb_ijazah`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_pddk`
--
ALTER TABLE `tb_pddk`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_wali`
--
ALTER TABLE `tb_wali`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
