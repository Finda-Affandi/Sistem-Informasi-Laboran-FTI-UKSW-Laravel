-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 08:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `ruangan`, `nama_dosen`, `jabatan`, `email`) VALUES
(1, '425', 'Erwien Christanto, S.Kom., M.Cs.', 'Kepala Sarpras & Infrastruktur', 'erwien@gmail.com'),
(2, '425', 'Pratyaksa Ocsa  Nugraha Saian, S.Kom., M.T.', 'Koordinator Promosi', 'ocsa@gmail.com'),
(3, '323', 'Prof. Dr. Ir. Eko Sediyono, M.Kom.', NULL, 'eko@gmail.com'),
(4, '304', 'Ramos Somya, S.Kom., M.Cs.', NULL, 'ramos@gmail.com'),
(5, '304', 'Charitas Fibriani, S.Kom., M.Eng.', NULL, 'charitas@gmail.com'),
(6, '304', 'Mila Crismawati Paseleng, S.Si., M.Pd.', NULL, 'mila@gmail.com'),
(7, '304', 'Yeremia Alfa Ssusetyo, S.Kom., M.Cs.', NULL, 'yere@gmail.com'),
(8, '304', 'Hanita Yulia, M.Pd.', NULL, 'hanita@gmail.com'),
(9, '315', 'Deasy Carolina', NULL, 'deasy@gmail.com'),
(10, '315', 'Dwi Hosana Bangkalang', NULL, 'hosana@gmail.com'),
(11, '123', 'Birmanti Setia Utami, M.Sn.', 'Kepala Program Studi DKV', 'birma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gedung_ftis`
--

CREATE TABLE `gedung_ftis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedung_ftis`
--

INSERT INTO `gedung_ftis` (`id`, `ruangan`, `nama_ruangan`, `kapasitas`, `view`) VALUES
(1, '600', 'Auditorium', '500', '<iframe width=\"1095\" height=\"730\" allowfullscreen style=\"border-style:none;\" src=\"https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//images.unsplash.com/photo-1674719334770-edf15a5fcad1%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D1760%26q%3D80&title=Tes&author=Laboran%20FTI&autoLoad=true\"></iframe>'),
(2, '120', 'Ruang Rapat', '100', '<iframe width=\"1095\" height=\"730\" allowfullscreen style=\"border-style:none;\" src=\"https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//images.unsplash.com/photo-1674719334770-edf15a5fcad1%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D1760%26q%3D80&title=Tes&author=Laboran%20FTI&autoLoad=true\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `kalenders`
--

CREATE TABLE `kalenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_kalender` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kalenders`
--

INSERT INTO `kalenders` (`id`, `ruangan`, `embed_kalender`) VALUES
(1, '453', '8d74fd9b13d7d5591ab3f46f542a22390765fc9d0072ddea139aa50de09020bc@group.calendar.google.com'),
(2, '306', 'e566f9f4cb3e4d675c4c941e61547513a22cb92d1b1218bf8dbf0c5ef05eeba9@group.calendar.google.com'),
(3, '455', '357ad7ec0b70c1b4d6ec7a8b386ae7e11f699f3355e7b000716f526d637de4a0@group.calendar.google.com'),
(4, '308', '8d74fd9b13d7d5591ab3f46f542a22390765fc9d0072ddea139aa50de09020bc@group.calendar.google.com'),
(5, '120', 'e3af6bf1c197565086e17ac6908a46751f888fc7882a99b8b91c27c86b11a6af@group.calendar.google.com'),
(6, '600', '8a3201fad5ea56e06311bcebc290bb949f5f804a43d296fbc670b71aeab9c926@group.calendar.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_kelas`
--

CREATE TABLE `kelengkapan_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelengkapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelengkapan_kelas`
--

INSERT INTO `kelengkapan_kelas` (`id`, `ruangan`, `kelengkapan`, `jumlah`) VALUES
(1, '306', 'Papan Tulis', 1),
(2, '306', 'Kursi', 35),
(3, '306', 'Proyektor Hitachi', 1),
(4, '308', 'Papan Tulis', 1),
(5, '308', 'Kursi', 35),
(6, '308', 'Proyektor Hitachi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_ruangs`
--

CREATE TABLE `kelengkapan_ruangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelengkapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelengkapan_ruangs`
--

INSERT INTO `kelengkapan_ruangs` (`id`, `ruangan`, `kelengkapan`, `jumlah`, `kondisi`) VALUES
(1, '306', 'Papan Tulis', 1, 'Baik'),
(2, '306', 'Proyektor Hitachi', 1, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `komputer_labs`
--

CREATE TABLE `komputer_labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_komputer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komputer_labs`
--

INSERT INTO `komputer_labs` (`id`, `ruangan`, `no_komputer`, `kondisi`, `keterangan`) VALUES
(1, '455', '01', 'Baik', NULL),
(2, '455', '02', 'Buruk', NULL),
(3, '453', '01', 'Buruk', NULL),
(4, '453', '02', 'Baik', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_22_052113_create_komputer_labs_table', 1),
(7, '2023_01_22_052138_create_spek_komputers_table', 1),
(9, '2023_01_22_185252_create_ruang_dosens_table', 3),
(11, '2023_01_22_185336_create_dosens_table', 4),
(12, '2023_01_25_013657_create_software_labs_table', 5),
(14, '2023_01_26_042535_create_kelengkapan_kelas_table', 5),
(19, '2023_01_22_183007_create_kalenders_table', 7),
(21, '2023_01_26_042427_create_ruang_kelas_table', 8),
(23, '2023_01_22_052053_create_ruang_labs_table', 9),
(25, '2023_02_07_023623_create_kelengkapan_ruangs_table', 10),
(26, '2023_02_01_141605_create_gedung_ftis_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruang_dosens`
--

CREATE TABLE `ruang_dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang_dosens`
--

INSERT INTO `ruang_dosens` (`id`, `ruangan`) VALUES
(1, '425'),
(2, '323'),
(3, '304'),
(4, '315'),
(5, '123');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE `ruang_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `view` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`id`, `ruangan`, `nama_ruangan`, `kapasitas`, `view`) VALUES
(1, '306', 'Kelas Teori', 35, '<iframe width=\"1095\" height=\"730\" allowfullscreen style=\"border-style:none;\" src=\"https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//images.unsplash.com/photo-1674719334770-edf15a5fcad1%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D1760%26q%3D80&title=Tes&author=Laboran%20FTI&autoLoad=true\"></iframe>'),
(2, '308', 'Kelas Teori', 35, '<iframe width=\"1095\" height=\"730\" allowfullscreen style=\"border-style:none;\" src=\"https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//images.unsplash.com/photo-1674719334770-edf15a5fcad1%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D1760%26q%3D80&title=Tes&author=Laboran%20FTI&autoLoad=true\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_labs`
--

CREATE TABLE `ruang_labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_komputer` int(11) NOT NULL,
  `nama_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang_labs`
--

INSERT INTO `ruang_labs` (`id`, `ruangan`, `nama_ruangan`, `view`, `jumlah_komputer`, `nama_pic`, `kontak_pic`) VALUES
(1, '453', 'Laboratorium Riset', '<iframe width=\"1095\" height=\"730\" allowfullscreen style=\"border-style:none;\" src=\"https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//images.unsplash.com/photo-1674719334770-edf15a5fcad1%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D1760%26q%3D80&title=Tes&author=Laboran%20FTI&autoLoad=true\"></iframe>', 10, 'Chester', 'https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=vandhie97@gmail.com'),
(2, '455', 'Laboratorium Umum', '<iframe width=\"1095\" height=\"730\" allowfullscreen style=\"border-style:none;\" src=\"https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https%3A//images.unsplash.com/photo-1674719334770-edf15a5fcad1%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26auto%3Dformat%26fit%3Dcrop%26w%3D1760%26q%3D80&title=Tes&author=Laboran%20FTI&autoLoad=true\"></iframe>', 40, 'Chester', 'https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=vandhie97@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `software_labs`
--

CREATE TABLE `software_labs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `software` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software_labs`
--

INSERT INTO `software_labs` (`id`, `ruangan`, `software`) VALUES
(1, '453', 'Cisco Packet Tracer'),
(2, '453', 'Microsoft Office'),
(3, '455', 'Netbeans 14'),
(4, '455', 'Coreldraw X7');

-- --------------------------------------------------------

--
-- Table structure for table `spek_komputers`
--

CREATE TABLE `spek_komputers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_penyimpanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherboard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spek_komputers`
--

INSERT INTO `spek_komputers` (`id`, `ruangan`, `processor`, `ram`, `tipe_penyimpanan`, `monitor`, `motherboard`, `tipe`) VALUES
(1, '455', 'Intel i3 3220', '2 GB', 'Hardisk', 'Acer 19\"', 'Asrock', 'Kentang'),
(2, '453', 'Intel Pentium', '2 GB', 'Hardisk', 'AOC 16\"', 'Gigabyte', 'Kentang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gedung_ftis`
--
ALTER TABLE `gedung_ftis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalenders`
--
ALTER TABLE `kalenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelengkapan_kelas`
--
ALTER TABLE `kelengkapan_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelengkapan_ruangs`
--
ALTER TABLE `kelengkapan_ruangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komputer_labs`
--
ALTER TABLE `komputer_labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ruang_dosens`
--
ALTER TABLE `ruang_dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang_labs`
--
ALTER TABLE `ruang_labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_labs`
--
ALTER TABLE `software_labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spek_komputers`
--
ALTER TABLE `spek_komputers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gedung_ftis`
--
ALTER TABLE `gedung_ftis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kalenders`
--
ALTER TABLE `kalenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelengkapan_kelas`
--
ALTER TABLE `kelengkapan_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelengkapan_ruangs`
--
ALTER TABLE `kelengkapan_ruangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komputer_labs`
--
ALTER TABLE `komputer_labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruang_dosens`
--
ALTER TABLE `ruang_dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang_labs`
--
ALTER TABLE `ruang_labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `software_labs`
--
ALTER TABLE `software_labs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spek_komputers`
--
ALTER TABLE `spek_komputers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
