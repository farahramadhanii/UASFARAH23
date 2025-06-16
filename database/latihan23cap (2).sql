-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2025 pada 16.57
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
-- Database: `latihan23cap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`) VALUES
(1, 'dr. Arsa - Spesialis Jantung'),
(2, 'dr. Ningrum - Spesialis Anak'),
(3, 'dr. Rima - Spesialis Bedah Umum'),
(4, 'dr. Radit - Spesialis Penyakit Dalam'),
(5, 'dr. Aura - Spesialis Kejiwaan'),
(6, 'dr. Karin - Spesialis Kandungan'),
(7, 'dr. Nina - Spesialis THT'),
(8, 'dr. Andi - Spesialis Mata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `nama_pasien` varchar(200) NOT NULL,
  `nama_dokter` varchar(150) NOT NULL,
  `jadwal_pasien` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `keluhan` text NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `waktu_kunjung` time NOT NULL,
  `id_dokter` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `tgl_lahir`, `alamat`, `telp`, `keluhan`, `tgl_kunjung`, `waktu_kunjung`, `id_dokter`, `status`) VALUES
(1, 'ahyeon', '2015-04-11', 'Jl. Bima No. 20', '0813873922929', 'Jantung koroner', '2025-06-20', '06:15:00', '1', 'disetujui'),
(2, 'rami', '2007-10-17', 'Jl. Gadjah Mada No. 60', '081355256357', 'Paru-paru basah', '2025-06-17', '12:50:00', '4', 'disetujui'),
(3, 'chiquita', '2009-12-05', 'Jl. Ksatria Airlangga No. 51', '089571655254', 'gangguan kecemasan', '2025-06-18', '07:50:00', '5', 'tidak disetujui'),
(4, 'rora', '2008-08-20', 'Jl. Soekarno Hatta No. 20', '0922872716621', 'infeksi saluran pernapasan', '2025-06-20', '09:50:00', '4', 'tidak disetujui'),
(5, 'asa', '2006-06-02', 'Jl. Merpati Indah No. 12', '08136527627', 'saluran pencernaan', '2025-06-25', '10:50:00', '3', 'disetujui'),
(8, 'rina', '2005-12-20', 'Jl. Brawijaya No. 30', '081375937521', 'iritasi mata', '2025-06-19', '12:00:00', '8', 'disetujui'),
(9, 'lisa', '1997-03-28', 'Jl. Mawar Indah No. 04', '08218737263', 'sakit tenggorokan', '2025-06-12', '10:00:00', '7', 'tidak disetujui'),
(10, 'vio', '2010-10-25', 'Jl. Diponegoro No. 02', '08124582134', 'borderline personality disorder', '2025-06-20', '15:15:00', '5', 'disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `create_at`) VALUES
(1, 'farahrd', '$2y$10$rDuW4utd0GXu0j1xr9vileTw2adYsbBX79qmj62irLOz1EjtNUCnm', 'admin', '2025-03-18 03:20:45'),
(2, 'farah', '$2y$10$k8hI.l3butH7E7eTvhRn/eRBzIgwZTpwYmRoRtLyXgfiQ67pLMOx6', 'admin', '2025-03-18 03:26:30'),
(3, 'fani', '$2y$10$FbM3r9ieg8FB.wL6jCWoVuhb3xMaPakquMzZT6KztheKdmuzDHoUS', 'admin', '2025-04-29 03:03:49'),
(4, 'fannie', '$2y$10$Yp5D65QML4rPQYwqrLSQeOK4DJAIVBjX2RgV41eH1k4cjkRuDMytW', 'admin', '2025-05-06 01:18:16'),
(5, 'funnyyy', '$2y$10$r6V3TU69oHsEZ8dWHG.6eOixKhgIIkuNqsk215z6OzRvFQoh2VgwG', 'user', '2025-05-06 01:41:29'),
(6, 'farrah', '$2y$10$FbyicPEF0cwCG.w4XOqUuexz6kMe9FNT6xG1tJ5pXZlV9e7BH7/be', 'user', '2025-05-06 01:56:34'),
(7, 'rania', '$2y$10$zG4x63STkvZGxZM0wMnvUOokEu7yiX6NDQVMi5S2ADdJ4yeteJD3W', 'user', '2025-06-15 15:52:49'),
(8, 'pharita', '$2y$10$npAUBknbya1DLZ./V7BjyuesnGeYHzbwB0.Mz.wvqPXWm4a.8jm7y', 'admin', '2025-06-16 10:02:58'),
(9, 'ruka', '$2y$10$OLNXARphY1eXUPXqptiNP.jZJNY8a8HY7QmPCXRqj2iT009hDPpXK', 'user', '2025-06-16 10:03:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
