-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 05:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_edi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'hendik', 'hendik123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `id_input` int(10) NOT NULL,
  `no_urut` int(50) NOT NULL,
  `k_saldo` varchar(255) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_bukti` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `saldo_awal` int(20) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `saldo_kas_kecil` int(50) DEFAULT NULL,
  `kategori` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`id_input`, `no_urut`, `k_saldo`, `tgl`, `no_bukti`, `kegiatan`, `saldo_awal`, `jumlah`, `saldo_kas_kecil`, `kategori`) VALUES
(0, 94, 'A006', '2019-02-04', 'COS/19/024', 'By. konsumsi dengan rekan', 524565, 234000, 290565, 'K10'),
(159, 1, 'KKS01', '2019-01-04', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(161, 4, 'KKS01', '2019-01-04', 'COS/19/001', 'By.fotocopy + jilid', 1608749, 105000, 1503749, 'K07'),
(162, 3, 'KKS01', '2019-01-04', 'COS/19/001', 'Biaya transportasi(bbm & parkir)', 2000000, 391251, 1608749, 'K02'),
(166, 7, 'KKS01', '2019-02-04', 'COS/19/002', 'Pengisian e-toll card', 1351749, 200000, 1151749, 'K02'),
(167, 5, 'KKS01', '2019-01-04', 'COS/19/002', 'pbl map L', 1503749, 26000, 1477749, 'K04'),
(168, 6, 'KKS01', '2019-01-04', 'COS/19/002', 'Biaya konsumsi integrasi interface di PT.Bentoel(malam)', 1477749, 126000, 1351749, 'K01'),
(169, 8, 'KKS01', '2019-01-04', 'COS/19/002', 'Biaya konsumsi integrasi interface di PT. Bentoel(siang)', 1151749, 145000, 1006749, 'K01'),
(170, 11, 'KKS01', '2019-01-04', 'COS/19/003', 'Biaya tranportasi bbm & parkir', 958749, 131000, 827749, 'K02'),
(171, 10, 'KKS01', '2019-01-04', 'COS/19/003', 'By.berlangganan tanjung perak news', 988749, 30000, 958749, 'K03'),
(172, 9, 'KKS01', '2019-01-04', 'COS/19/003', 'By.fotocopy', 1006749, 18000, 988749, 'K04'),
(173, 12, 'KKS01', '2019-01-04', 'COS/19/003', 'pbl.kertas A4', 827749, 79000, 748749, 'K04'),
(174, 13, 'KKS01', '2019-01-04', 'COS/19/003', 'Biaya berlangganan jawa pos bulan november - desember 2018', 748749, 240000, 508749, 'K08'),
(175, 16, 'KKS01', '2019-01-04', 'COS/19/004', 'By.service Ac', 408749, 240000, 168749, 'K08'),
(176, 15, 'KKS01', '2019-01-04', 'COS/19/004', 'Biaya transportasi(bbm & parkir)', 508749, 100000, 408749, 'K02'),
(177, 17, 'KKS01', '2019-01-04', 'COS/19/004', 'Uber dari kantor - bc Gresik/pelatihan/kefas', 168749, 81000, 87749, 'K02'),
(178, 18, 'KKS01', '2019-01-04', 'COS/19/004', 'Uber dari kantor - bc Gresik/pelatihan/kefas', 87749, 75000, 12749, 'K02'),
(179, 19, 'KKS02', '2019-01-14', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(180, 20, 'KKS02', '2019-01-14', 'COS/19/005', 'By.BBM', 2000000, 20000, 1980000, 'K02'),
(181, 21, 'KKS02', '2019-01-14', 'COS/19/005', 'By.konsumsi project BC Juanda', 1980000, 126500, 1853500, 'K01'),
(182, 22, 'KKS02', '2019-01-14', 'COS/19/005', 'By.konsumsi dengan BC Perak', 1853500, 337000, 1516500, 'K10'),
(183, 23, 'KKS02', '2019-01-14', 'COS/19/006', 'By.konsumsi presentasi ERP di PT Skyline', 1516500, 99000, 1417500, 'K01'),
(184, 25, 'KKS02', '2019-01-14', 'COS/19/006', 'Pembelian Aqua 6 dus', 1241500, 195000, 1046500, 'K01'),
(185, 24, 'KKS02', '2019-01-14', 'COS/19/006', 'Pembelian Aqua 8 aqua galon', 1417500, 176000, 1241500, 'K01'),
(186, 26, 'KKS02', '2019-01-14', 'COS/19/006', 'Biaya kirim lapor pajak', 1046500, 10500, 1036000, 'K11'),
(187, 27, 'KKS02', '2019-01-11', 'COS/19/007', 'By. BBM & parkir', 1036000, 496000, 540000, 'K02'),
(188, 28, 'KKS02', '2019-01-14', 'COS/19/008', 'By.transportasi dari BC Gresik - kantor/pelatihan/ Kefas', 540000, 91000, 449000, 'K02'),
(189, 29, 'KKS02', '2019-01-14', 'COS/19/008', 'By.konsumsi invent 2 & ISG di PT Marine Cipta Agung', 449000, 193000, 256000, 'K01'),
(190, 30, 'KKS02', '2019-01-14', 'COS/19/008', 'parkir mobil bulan januari 2019', 256000, 100000, 156000, 'K03'),
(191, 32, 'KKS02', '2019-01-14', 'COS/19/008', 'By.transportasi dari Disperindag - kantor / dayyin', 131000, 38000, 93000, 'K02'),
(192, 31, 'KKS02', '2019-01-14', 'COS/19/008', 'By.transportasi dari kantor - Disperindag / dayyin', 156000, 25000, 131000, 'K02'),
(193, 33, 'KKS02', '2019-01-14', 'COS/19/008', 'By.transportasi dari Disperindag - kantor / dayyin', 93000, 38000, 55000, 'K02'),
(194, 34, 'KKS03', '2019-01-17', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(196, 35, 'KKS03', '2019-01-17', 'COS/19/009', 'By. BBM & parkir', 2000000, 274000, 1726000, 'K02'),
(197, 36, 'KKS03', '2019-01-17', 'COS/19/009', 'By.konsumsi dengan bea cukai', 1726000, 218800, 1507200, 'K03'),
(198, 38, 'KKS03', '2019-01-17', 'COS/19/010', 'Biaya konsumsiinvent 2 di Kyowa', 1507200, 124000, 1383200, 'K01'),
(199, 39, 'KKS03', '2019-01-17', 'COS/19/010', 'konsumsi rekan', 1383200, 238700, 1144500, 'K10'),
(200, 40, 'KKS03', '2019-01-17', 'COS/19/010', 'pbl.kertas A4', 1144500, 62000, 1082500, 'K04'),
(201, 41, 'KKS03', '2019-01-17', 'COS/19/010', 'Pbl. kabel hy', 1082500, 65000, 1017500, 'K04'),
(202, 43, 'KKS03', '2019-01-17', 'COS/19/011', 'By. komsumsi dinas', 898500, 100000, 798500, 'K01'),
(203, 42, 'KKS03', '2019-01-17', 'COS/19/011', 'By. konsumsi project FKM Unair', 1017500, 119000, 898500, 'K01'),
(204, 44, 'KKS03', '2019-01-17', 'COS/19/011', 'By. konsumsi rekan', 798500, 273350, 525150, 'K10'),
(205, 47, 'KKS03', '2019-01-17', 'COS/19/012', 'by. transportasi dari kantor - BC Gresik/kefas/pelatihan', 465150, 85000, 380150, 'K02'),
(206, 48, 'KKS03', '2019-01-17', 'COS/19/012', 'by. transportasi dari kantor - BC Gresik/kefas/pelatihan', 380150, 85000, 295150, 'K02'),
(207, 45, 'KKS03', '2019-01-17', 'COS/19/012', 'berlangganan trans log & news edisi 57 & 58', 525150, 30000, 495150, 'K03'),
(208, 46, 'KKS03', '2019-01-17', 'COS/19/012', 'Biaya berlangganan Tanjung perak pos bulan Januari 2019', 495150, 30000, 465150, 'K03'),
(209, 50, 'KKS03', '2019-01-17', 'COS/19/012', 'pbl.lakban', 175150, 19000, 156150, 'K04'),
(210, 49, 'KKS03', '2019-01-17', 'COS/19/012', 'pbl.pot', 295150, 120000, 175150, 'K04'),
(211, 51, 'KKS03', '2019-01-17', 'COS/19/012', 'pbl. lakban & kertas hvs', 156150, 49000, 107150, 'K04'),
(212, 52, 'KKS03', '2019-01-17', 'COS/19/012', 'By. BBM & parkir', 107150, 23500, 83650, 'K02'),
(213, 53, 'KKS03', '2019-01-17', 'COS/19/012', 'By. fotocopy', 83650, 50000, 33650, 'K07'),
(214, 54, 'KKS04', '2019-02-01', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(215, 55, 'KKS04', '2019-02-01', 'COS/19/013', 'By. BBM & parkir', 2000000, 488500, 1511500, 'K02'),
(216, 58, 'KKS04', '2019-02-01', 'COS/19/014', 'By. transportasi dari kantor - BC Gresik/kurnia/pelatihan', 1111500, 96000, 1015500, 'K02'),
(217, 57, 'KKS04', '2019-02-01', 'COS/19/014', 'Pengisian e-toll card', 1511500, 400000, 1111500, 'K02'),
(218, 59, 'KKS04', '2019-02-01', 'COS/19/015', 'By. BBM & parkir', 1015500, 412000, 603500, 'K02'),
(219, 60, 'KKS04', '2019-02-01', 'COS/19/015', 'By. transportasi dari kantor - BC Gresik/kurnia/pelatihan', 603500, 83000, 520500, 'K02'),
(220, 61, 'KKS04', '2019-02-01', 'COS/19/016', 'By. BBM & parkir', 520500, 407802, 112698, 'K02'),
(221, 62, 'KKS04', '2019-02-01', 'COS/19/016', 'By. transportasi dari kantor - BC Gresik/kurnia/pelatihan', 112698, 92000, 20698, 'K02'),
(222, 63, 'KKS05', '2019-02-04', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(225, 64, 'KKS05', '2019-02-04', 'COS/19/017', 'Pengisian e-toll card', 2000000, 400000, 1600000, 'K02'),
(226, 65, 'KKS05', '2019-02-04', 'COS/19/017', 'By. transportasi dari BC Gresik - kantor / kurnia / pelatihan', 1600000, 90000, 1510000, 'K02'),
(227, 67, 'KKS05', '2019-02-04', 'COS/19/018', 'pbl. CDRW', 1502000, 18000, 1484000, 'K05'),
(228, 68, 'KKS05', '2019-02-04', 'COS/19/018', 'By. transportasi dari kantor - BC Gresik / kefas / pelatihan', 1484000, 78000, 1406000, 'K02'),
(229, 66, 'KKS05', '2019-02-04', 'COS/19/018', 'By. fotocopy', 1510000, 8000, 1502000, 'K07'),
(230, 70, 'KKS05', '2019-02-04', 'COS/19/018', 'Biaya kebersihan dan keamanan bulan januari 2018', 1323000, 300000, 1023000, 'K03'),
(231, 69, 'KKS05', '2019-02-04', 'COS/19/018', 'By. transportasi dari BC Gresik - kantor / kefas / pelatihan', 1406000, 83000, 1323000, 'K02'),
(232, 71, 'KKS05', '2019-02-04', 'COS/19/019', 'By. BBM & parkir', 1023000, 188000, 835000, 'K02'),
(233, 72, 'KKS05', '2019-02-04', 'COS/19/019', 'By. transportasi dari EDII - BC Gresik / KURNIA / pelatihan', 835000, 90000, 745000, 'K02'),
(234, 73, 'KKS05', '2019-02-04', 'COS/19/019', 'By. transportasi dari BC GRESIK - EDII / KEFAS / pelatihan', 745000, 84000, 661000, 'K02'),
(235, 74, 'KKS05', '2019-02-04', 'COS/19/019', 'By. transportasi dari EDII - BC Gresik /KEFAS / pelatihan', 0, 82000, 579000, 'K02'),
(236, 75, 'KKS05', '2019-02-04', 'COS/19/019', 'By. transportasi dari Disperindag - kantor / dayyin', 579000, 31000, 548000, 'K02'),
(237, 76, 'KKS05', '2019-02-04', 'COS/19/019', 'By. transportasi dari kantor - Disperindag / dayyin', 548000, 18000, 530000, 'K02'),
(238, 77, 'KKS05', '2019-02-04', 'COS/19/020', 'By. BBM & parkir', 530000, 325000, 205000, 'K02'),
(239, 78, 'KKS05', '2019-02-04', 'COS/19/020', 'By. transportasi dadri BC GRESIK - EDII / KEFAS / PELATIHAN', 205000, 24000, 181000, 'K02'),
(240, 79, 'KKS05', '2019-02-04', 'COS/19/020', 'By. transportasi dadri BC GRESIK - EDII / KURNIA / PELATIHAN', 181000, 12000, 169000, 'K02'),
(241, 80, 'KKS05', '2019-02-04', 'COS/19/020', 'By. transportasi dari kantor - PT IJS / Andri', 169000, 40000, 129000, 'K02'),
(242, 82, 'KKS05', '2019-02-04', 'COS/19/020', 'By. transportasi dari Sampoerna - kantor / Andri', 77000, 41000, 36000, 'K02'),
(243, 81, 'KKS05', '2019-02-04', 'COS/19/020', 'By. transportasi dari PT IJS - Kantor / Andri', 129000, 52000, 77000, 'K02'),
(244, 83, 'KKS06', '2019-02-04', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(245, 84, 'KKS06', '2019-02-04', 'COS/19/021', 'Makan siang bersama rekan', 2000000, 435435, 1564565, 'K10'),
(246, 85, 'KKS06', '2019-02-04', 'COS/19/021', 'By. fotocopy', 1564565, 57000, 1507565, 'K07'),
(247, 86, 'KKS06', '2019-02-04', 'COS/19/022', 'Pembelian aqua 6 dus', 1507565, 132000, 1375565, 'K01'),
(248, 87, 'KKS06', '2019-02-04', 'COS/19/022', 'Biaya berlangganan jawa pos bulan januari 2019', 1375565, 120000, 1255565, 'K03'),
(249, 89, 'KKS06', '2019-02-04', 'COS/19/022', 'By. pembuatan saluran PDAM yang rusak', 1215565, 200000, 1015565, 'K12'),
(250, 88, 'KKS06', '2019-02-04', 'COS/19/022', 'Pbl.pasang ban', 1255565, 40000, 1215565, 'K09'),
(251, 91, 'KKS06', '2019-02-04', 'COS/19/023', 'By. olahraga rutin bulan januari 2019', 805565, 250000, 555565, 'K13'),
(252, 92, 'KKS06', '2019-02-04', 'COS/19/023', 'By. kirim invoice', 555565, 11000, 544565, 'K11'),
(253, 90, 'KKS06', '2019-02-04', 'COS/19/023', 'By. BBM & parkir', 1015565, 210000, 805565, 'K02'),
(254, 93, 'KKS06', '2019-02-04', 'COS/19/023', 'By. fotocopy', 544565, 20000, 524565, 'K07'),
(255, 95, 'KKS06', '2019-02-04', 'COS/19/024', 'By. transportasi dari kantor - PT Skyline / rofiq', 290565, 100000, 190565, 'K02'),
(257, 96, 'KKS06', '2019-02-04', 'COS/19/024', 'By. konsumsi KITE Inventory PT MK Prima', 190565, 105000, 85565, 'K01'),
(258, 97, 'KKS06', '2019-02-04', 'COS/19/024', 'Biaya makan siang presentasi IT Inventory di PT Skyline', 85565, 57000, 28565, 'K01'),
(263, 98, 'KKS07', '2019-02-04', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(265, 99, 'KKS07', '2019-02-04', 'COS/19/025', 'Biaya konsumsi KITE di PT Bayer', 2000000, 128000, 1872000, 'K01'),
(266, 100, 'KKS07', '2019-02-04', 'COS/19/025', 'Biaya konsumsi (Presentasi di PT. Invent 2 di PT Tomatect dan PT DPS)', 1872000, 119998, 1752002, 'K01'),
(267, 102, 'KKS07', '2019-02-04', 'COS/19/025', 'By. transportasi dari EDII - BC Gresik / Kefas / pelatihan', 1677002, 85000, 1592002, 'K02'),
(268, 101, 'KKS07', '2019-02-04', 'COS/19/025', 'By. transportasi dari BC Gresik - PT EDII / Kefas / pelatihan', 1752002, 75000, 1677002, 'K02'),
(269, 103, 'KKS07', '2019-02-04', 'COS/19/025', 'By. transportasi dari BC Gresik - EDII / Kurnia / pelatihan', 1592002, 79000, 1513002, 'K02'),
(270, 106, 'KKS07', '2019-02-04', 'COS/19/026', 'Pembelian pulsa untuk driver', 1201002, 100000, 1101002, 'K16'),
(271, 104, 'KKS07', '2019-02-04', 'COS/19/026', 'Pbl.Keperluan kantor', 1513002, 99000, 1414002, 'K04'),
(272, 105, 'KKS07', '2019-02-04', 'COS/19/026', 'Konsumsi presentasi Invent 2 di PT Tomatec', 1414002, 213000, 1201002, 'K01'),
(273, 107, 'KKS07', '2019-02-04', 'COS/19/026', 'By.transportasi dari BC Gresik - edii/kurnia/pelatihan', 1101002, 87000, 1014002, 'K02'),
(274, 108, 'KKS07', '2019-02-04', 'COS/19/027', 'Pbl.Keperluan kantor', 1014002, 447500, 566502, 'K04'),
(275, 109, 'KKS07', '2019-02-04', 'COS/19/027', 'Biaya cuci mobil', 566502, 50000, 516502, 'K09'),
(276, 111, 'KKS07', '2019-02-04', 'COS/19/028', 'by.service ac', 504002, 450000, 54002, 'K12'),
(277, 110, 'KKS07', '2019-02-04', 'COS/19/028', 'pbl.lakban hitam', 516502, 12500, 504002, 'K04'),
(278, 112, 'KKS07 ', '2019-02-04', 'COS/19/028', 'Biaya isi nitrogen', 54002, 20000, 34002, 'K09'),
(279, 113, 'KKS08', '2019-02-11', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(281, 116, 'KKS08', '2019-02-11', 'COS/19/029', 'by.konsumsi dg dinas', 1755000, 114000, 1641000, 'K01'),
(282, 114, 'KKS08', '2019-02-11', 'COS/19/029', 'By.fotocopy', 2000000, 45000, 1955000, 'K07'),
(283, 115, 'KKS08', '2019-02-11', 'COS/19/029', 'Pengisian e-toll card', 1955000, 200000, 1755000, 'K02'),
(284, 117, 'KKS08', '2019-02-11', 'COS/19/029', 'by.konsumsi presentasi dan pendampingan di PT Skyline', 1641000, 138000, 1503000, 'K01'),
(285, 119, 'KKS08', '2019-02-11', 'COS/19/030', 'by.service ac', 1353000, 240000, 1113000, 'K12'),
(286, 118, 'KKS08', '2019-02-11', 'COS/19/030', 'By.BBM & parkir', 1503000, 150000, 1353000, 'K02'),
(287, 120, 'KKS08', '2019-02-11', 'COS/19/030', 'Pbl.display port hdmi', 1113000, 90000, 1023000, 'K06'),
(293, 122, 'KKS08', '2019-02-11', 'COS/19/031', 'Biaya berlangganan Tanjung Perak pos bulan februari 2019', 555000, 30000, 525000, 'K03'),
(294, 121, 'KKS08', '2019-02-11', 'COS/19/031', 'By. BBM & parkir', 1023000, 468000, 555000, 'K02'),
(295, 127, 'KKS08', '2019-02-11', 'COS/19/032', 'By. transportasi dari kantor - BC Juanda - makan siang - BC Juanda - kantor / dika / Project B', 173000, 135000, 38000, 'K02'),
(296, 125, 'KKS08', '2019-02-11', 'COS/19/032', 'By. berlangganan Tanjung Perak News', 503000, 30000, 473000, 'K03'),
(297, 126, 'KKS08', '2019-02-11', 'COS/19/032', 'Biaya kebersihan dan keamanan bulan februari 2019', 473000, 300000, 173000, 'K03'),
(298, 124, 'KKS08', '2019-02-11', 'COS/19/032', 'By. fotocopy', 525000, 22000, 503000, 'K07'),
(299, 128, 'KKS09', '2019-02-18', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(300, 130, 'KKS09', '2019-02-18', 'COS/19/033', 'Biaya makan instalasi MIR di PT Henkel dan testing event 2 di PT Kyowa', 1846000, 156000, 1690000, 'K01'),
(301, 131, 'KKS09', '2019-02-18', 'COS/19/033', 'By. pemasangan stiker ruang manajer', 1690000, 150000, 1540000, 'K13'),
(302, 132, 'KKS09', '2019-02-18', 'COS/19/033', 'By. jilid ', 1540000, 35000, 1505000, 'K07'),
(303, 133, 'KKS09', '2019-02-18', 'COS/19/034', 'By konsumsi pak didik ke Jakarta', 1505000, 55999, 1449001, 'K01'),
(304, 136, 'KKS09', '2019-02-18', 'COS/19/034', 'Pembelian aqua 6 galon', 1147001, 108000, 1039001, 'K01'),
(305, 135, 'KKS09', '2019-02-18', 'COS/19/034', 'Biaya konsumsi KITE di PT. Kurnia Anggun', 1347001, 200000, 1147001, 'K01'),
(306, 134, 'KKS09', '2019-02-18', 'COS/19/034', 'By. BBM & parkir', 1449001, 102000, 1347001, 'K02'),
(307, 137, 'KKS09', '2019-02-18', 'COS/19/034', 'Gojek antar invoice ke PT Gudang Garam', 1039001, 25000, 1014001, 'K02'),
(308, 138, 'KKS09', '2019-02-18', 'COS/19/035', 'By. BBM & parkir', 1014001, 347940, 666061, 'K02'),
(309, 139, 'KKS09', '2019-02-18', 'COS/19/035', 'By pbl stiker kaca ruang manajer', 666061, 140000, 526061, 'K13'),
(310, 140, 'KKS09', '2019-02-18', 'COS/19/036', 'By. BBM & parkir', 526061, 401000, 125061, 'K02'),
(311, 141, 'KKS09', '2019-02-18', 'COS/19/036', 'By. jilid dan fotocopy', 125061, 72400, 52661, 'K07'),
(312, 142, 'KKS09', '2019-02-18', 'COS/19/036', 'By. thermal pasta tabung', 52661, 11000, 41661, 'K06'),
(313, 143, 'KKS10', '2019-02-22', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(314, 144, 'KKS10', '2019-02-22', 'COS/19/037', 'By. BBM & parkir', 2000000, 28000, 1972000, 'K02'),
(315, 145, 'KKS10', '2019-02-22', 'COS/19/037', 'Pembelian perlengkapan kantor', 1972000, 460200, 1511800, 'K04'),
(316, 146, 'KKS10', '2019-02-22', 'COS/19/038', 'By. jilid dan fc', 1511800, 21000, 1490800, 'K07'),
(317, 147, 'KKS10', '2019-02-22', 'COS/19/038', 'Biaya konsumsi maintenance IT Inventory e-Inkaber di PTPN X & PT VTI', 1490800, 470650, 1020150, 'K01'),
(318, 148, 'KKS10', '2019-02-22', 'COS/19/039', 'Biaya konsumsi presentasi PLB dan implementasi Invent2 di PT Skyline dan Daiichi', 1020150, 175000, 845150, 'K01'),
(319, 149, 'KKS10', '2019-02-22', 'COS/19/039', 'By. konsumsi rekan', 845150, 319550, 525600, 'K10'),
(320, 150, 'KKS10', '2019-02-22', 'COS/19/040', 'By. konsumsi Invent2 PT DPS', 525600, 100000, 425600, 'K01'),
(321, 151, 'KKS10', '2019-02-22', 'COS/19/040', 'Pbl tinta printer', 425600, 385000, 40600, 'K04'),
(322, 152, 'KKS11', '2019-03-10', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(323, 153, 'KKS11', '2019-03-10', 'COS/19/041', 'By. BBM & parkir', 2000000, 498000, 1502000, 'K02'),
(324, 154, 'KKS11', '2019-03-10', 'COS/19/042', 'By. BBM & parkir', 1502000, 487785, 1014215, 'K02'),
(325, 155, 'KKS11', '2019-03-10', 'COS/19/042', 'Gojek antar surat ke BECAS Mayjend', 1014215, 8000, 1006215, 'K02'),
(326, 156, 'KKS11', '2019-03-10', 'COS/19/043', 'By. BBM & parkir', 1006215, 300000, 706215, 'K02'),
(327, 157, 'KKS11', '2019-03-10', 'COS/19/043', 'By. konsumsi meeting', 706215, 125625, 580590, 'K01'),
(328, 158, 'KKS11', '2019-03-10', 'COS/19/043', 'Pembelian peralatan listrik', 580590, 73500, 507090, 'K04'),
(329, 159, 'KKS11', '2019-03-10', 'COS/19/044', 'By. BBM & parkir', 507090, 264986, 242104, 'K02'),
(330, 162, 'KKS11', '2019-03-10', 'COS/19/044', 'By. kirim pajak', 26404, 11000, 15404, 'K11'),
(331, 160, 'KKS11', '2019-03-10', 'COS/19/044', 'Biaya konsumsi uji coba ISG di PT Panji Mas', 242104, 130000, 112104, 'K01'),
(332, 161, 'KKS11', '2019-03-10', 'COS/19/044', 'Pembelian konsumsi maintenance IT Inventory di PTPN & PT VTI Jember', 112104, 85700, 26404, 'K01'),
(333, 163, 'KKS12', '2019-03-14', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(334, 164, 'KKS12', '2019-03-14', 'COS/19/045', 'Pengisian e-toll card', 2000000, 300000, 1700000, 'K02'),
(335, 166, 'KKS12', '2019-03-14', 'COS/19/045', 'Parkir mobil bulan maret 2019', 1620000, 100000, 1520000, 'K03'),
(336, 165, 'KKS12', '2019-03-14', 'COS/19/045', 'Transportasi Juanda - kantor / kefas', 1700000, 80000, 1620000, 'K02'),
(337, 167, 'KKS12', '2019-03-14', 'COS/19/046', 'By. BBM & parkir', 1520000, 278000, 1242000, 'K02'),
(338, 168, 'KKS12', '2019-03-14', 'COS/19/046', 'Pembelian perlengkapan kantor', 1242000, 121000, 1121000, 'K04'),
(339, 169, 'KKS12', '2019-03-14', 'COS/19/046', 'Pembelian peralatan listrik', 1121000, 100000, 1021000, 'K04'),
(340, 171, 'KKS12', '2019-03-14', 'COS/19/047', 'Pembetulan listrik di ruang server', 806000, 250000, 556000, 'K17'),
(341, 170, 'KKS12', '2019-03-14', 'COS/19/047', 'By. BBM & parkir', 1021000, 215000, 806000, 'K02'),
(342, 172, 'KKS12', '2019-03-14', 'COS/19/047', 'Biaya isi nitrogen', 556000, 25000, 531000, 'K09'),
(343, 173, 'KKS12', '2019-03-14', 'COS/19/048', 'By. BBM & parkir', 531000, 420000, 111000, 'K02'),
(344, 175, 'KKS12', '2019-03-14', 'COS/19/048', 'Uber dr Essentra - kantor / install MIR / kefas', 61000, 29000, 32000, 'K01'),
(345, 174, 'KKS12', '2019-03-14', 'COS/19/048', 'Biaya konsumsi dengan BC Juanda', 111000, 50000, 61000, 'K01'),
(346, 176, 'KKS13', '2019-04-05', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(347, 178, 'KKS13', '2019-04-05', 'COS/19/049', 'Biaya konsumsi persentasi INVENT2 di PT Aneka Glass', 1938000, 115000, 1823000, 'K01'),
(348, 180, 'KKS13', '2019-04-05', 'COS/19/049', 'Pbl. TP-Link 722N', 1749000, 115000, 1634000, 'K06'),
(349, 181, 'KKS13', '2019-04-05', 'COS/19/049', 'Biaya konsumsi pelatihan KITE di PT Panji Mas Tekstil', 1634000, 125000, 1509000, 'K01'),
(350, 179, 'KKS13', '2019-04-05', 'COS/19/049', 'Biaya konsumsi persentasi INVENT2 di PT Hou Tech', 1823000, 74000, 1749000, 'K01'),
(351, 177, 'KKS13', '2019-04-05', 'COS/19/049', 'Biaya konsumsi pendampingan e-Inkaber di PT Smelting', 2000000, 62000, 1938000, 'K01'),
(352, 182, 'KKS13', '2019-04-05', 'COS/19/050', 'By. BBM & parkir', 1509000, 243029, 1265971, 'K02'),
(353, 183, 'KKS13', '2019-04-05', 'COS/19/050', 'Pembelian aqua 4 galon 4 dus', 1265971, 240000, 1025971, 'K01'),
(354, 185, 'KKS13', '2019-04-05', 'COS/19/051', 'parkir mobil bulan april 2019', 926971, 100000, 826971, 'K03'),
(355, 187, 'KKS13', '2019-04-05', 'COS/19/051', 'By. konsumsi pelatihan PT EDII', 787971, 250875, 537096, 'K01'),
(356, 184, 'KKS13', '2019-04-05', 'COS/19/051', 'By. konsumsi Invent2 PT DBS', 1025971, 99000, 926971, 'K01'),
(357, 186, 'KKS13', '2019-04-05', 'COS/19/051', 'By. transportasi dari kantor - PT essentra / kefas / install MIR', 826971, 39000, 787971, 'K02'),
(358, 188, 'KKS13', '2019-04-05', 'COS/19/052', 'By. BBM & parkir', 537096, 415529, 121567, 'K02'),
(359, 189, 'KKS13', '2019-04-05', 'COS/19/052', 'Pembelian perlengkapan kantor', 121567, 75000, 46567, 'K04'),
(360, 190, 'KKS14', '2019-04-08', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(361, 191, 'KKS14', '2019-04-08', 'COS/19/053', 'By. BBM & parkir', 2000000, 471620, 1528380, 'K02'),
(362, 192, 'KKS14', '2019-04-08', 'COS/19/053', 'pbl. baterai', 1528380, 20000, 1508380, 'K04'),
(363, 193, 'KKS14', '2019-04-08', 'COS/19/054', 'By. BBM & parkir', 1508380, 409992, 1098388, 'K02'),
(364, 194, 'KKS14', '2019-04-08', 'COS/19/054', 'pbl. kertas A4', 1098388, 39500, 1058888, 'K04'),
(365, 196, 'KKS14', '2019-04-08', 'COS/19/054', 'Biaya berlangganan Tanjung perak pos bulan maret 2019', 1039388, 30000, 1009388, 'K03'),
(366, 195, 'KKS14', '2019-04-08', 'COS/19/054', 'pbl. staplers dll', 1058888, 19500, 1039388, 'K04'),
(367, 199, 'KKS14', '2019-04-08', 'COS/19/055', 'Pembelian aqua 4 galon 3 dus', 943888, 154000, 789888, 'K01'),
(368, 198, 'KKS14', '2019-04-08', 'COS/19/055', 'Biaya konsumsi presentasi INVENT2 di PT DPS Ngoro', 1001888, 58000, 943888, 'K01'),
(369, 200, 'KKS14', '2019-04-08', 'COS/19/055', 'Pembelian jack RS', 789888, 169000, 620888, 'K04'),
(370, 201, 'KKS14', '2019-04-08', 'COS/19/055', 'Pembayaran 30% INVENT2 PT Kyowa (kekurangan)', 620888, 27000, 593888, 'K15'),
(371, 197, 'KKS14', '2019-04-08', 'COS/19/055', 'By. jilid & fc', 1009388, 7500, 1001888, 'K07'),
(372, 202, 'KKS14', '2019-04-08', 'COS/19/055', 'Pembayaran 30% INVENT2 PT Skyline (kekurangan)', 593888, 22500, 571388, 'K15'),
(373, 203, 'KKS14', '2019-04-08', 'COS/19/055', 'By. transportasi dari kantor - BCA Darmo / Ajeng', 571388, 12000, 559388, 'K02'),
(374, 204, 'KKS14', '2019-04-08', 'COS/19/055', 'By. transportasi dari BCA Darmo - kantor / Ajeng', 559388, 13000, 546388, 'K02'),
(375, 205, 'KKS14', '2019-04-08', 'COS/19/055', 'By. transportasi dari kantor -  BCA Mayjend / Ajeng', 546388, 12000, 534388, 'K02'),
(376, 206, 'KKS14', '2019-04-08', 'COS/19/055', 'By. transportasi dari BCA Mayjend - kantor / Ajeng', 534388, 12000, 522388, 'K02'),
(377, 208, 'KKS14', '2019-04-08', 'COS/19/056', 'Biaya kebersihan dan keamanan bulan maret 2019', 335388, 300000, 35388, 'K03'),
(378, 207, 'KKS14', '2019-04-08', 'COS/19/056', 'By. BBM & parkir', 522388, 187000, 335388, 'K02'),
(379, 209, 'KKS15', '2019-04-10', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(380, 210, 'KKS15', '2019-04-10', 'COS/19/057', 'Pembelian perlengkapan kantor', 2000000, 493650, 1506350, 'K04'),
(381, 212, 'KKS15', '2019-04-10', 'COS/19/058', 'Biaya konsumsi implementasi ISG di PTS Gresik', 1498350, 112000, 1386350, 'K01'),
(382, 213, 'KKS15', '2019-04-10', 'COS/19/058', 'Biaya konsumsi pendalaman integrasi dan pembuatan aplikasi accounting di PT Young Tree', 1386350, 134000, 1252350, 'K01'),
(383, 211, 'KKS15', '2019-04-10', 'COS/19/058', 'By. BBM & parkir', 1506350, 8000, 1498350, 'K02'),
(384, 214, 'KKS15', '2019-04-10', 'COS/19/058', 'By. transportasi daro BC perak - kantor (E-Dec) / kefas', 1252350, 63000, 1189350, 'K02'),
(385, 215, 'KKS15', '2019-04-10', 'COS/19/058', 'Pbl. kue untuk rekan BC', 1189350, 178700, 1010650, 'K10'),
(396, 216, 'KKS15', '2019-04-10', 'COS/19/059', 'Biaya konsumsi presentasi ISG di PT Shinwa & PT Envirropallets', 1010650, 141000, 869650, 'K01'),
(397, 218, 'KKS15', '2019-04-10', 'COS/19/059', 'Biaya berlangganan surya bulan maret 2019', 569650, 55000, 514650, 'K03'),
(398, 217, 'KKS15', '2019-04-10', 'COS/19/059', 'Biaya kebersihan dan keamanan bulan april 2019', 869650, 300000, 569650, 'K03'),
(399, 219, 'KKS15', '2019-04-10', 'COS/19/060', 'Pbl. tinta printer', 514650, 260000, 254650, 'K06'),
(400, 220, 'KKS15', '2019-04-10', 'COS/19/060', 'parkir mobil bulan april 2019', 254650, 100000, 154650, 'K03'),
(401, 221, 'KKS15', '2019-04-10', 'COS/19/060', 'By. transportasi dari kantor - PT Skyline/andri', 154650, 137000, 17650, 'K02'),
(402, 222, 'KKS16', '2019-04-11', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(403, 223, 'KKS16', '2019-04-11', 'COS/19/061', 'Biaya konsumsi presentasi INVENT 2 di PT Ngoro Hui Ding,King Jim,Hou Tech', 2000000, 125400, 1874600, 'K01'),
(404, 224, 'KKS16', '2019-04-11', 'COS/19/061', 'Biaya konsumsi presentasi IT Inventory di PT DPS,NIP + BC', 1874600, 135000, 1739600, 'K01'),
(405, 225, 'KKS16', '2019-04-11', 'COS/19/061', 'By. konsumsi implementasi ISG & pelatihan e-inkaber di PT Smelting', 1739600, 238700, 1500900, 'K01'),
(406, 227, 'KKS16', '2019-04-11', 'COS/19/062', 'Biaya konsumsi presentasi pengendalian solusi integrasi sistem inventory di KB di KPBC Pasuruan', 1257400, 155000, 1102400, 'K01'),
(407, 228, 'KKS16', '2019-04-11', 'COS/19/062', 'Biaya konsumsi implementasi hari ke-2 di PT Tomatec', 1102400, 33000, 1069400, 'K01'),
(408, 230, 'KKS16', '2019-04-11', 'COS/19/062', 'Biaya berlangganan Tanjung perak pos bulan april 2019', 1039400, 30000, 1009400, 'K03'),
(409, 229, 'KKS16', '2019-04-11', 'COS/19/062', 'berlangganan trans log & news edisi 61 & 62', 1069400, 30000, 1039400, 'K03'),
(410, 226, 'KKS16', '2019-04-11', 'COS/19/062', 'By. BBM & parkir', 1500900, 243500, 1257400, 'K02'),
(411, 231, 'KKS16', '2019-04-11', 'COS/19/063', 'Pembelian perlengkapan kantor', 1009400, 16700, 992700, 'K04'),
(412, 232, 'KKS16', '2019-04-11', 'COS/19/063', 'By. BBM & parkir', 992700, 384000, 608700, 'K02'),
(413, 233, 'KKS16', '2019-04-11', 'COS/19/063', 'By. transportasi dari kantor - sampoerna / meeting / kefas', 608700, 31000, 577700, 'K02'),
(414, 235, 'KKS16', '2019-04-11', 'COS/19/063', 'berlangganan trans log & news edisi 63 & 64', 546700, 30000, 516700, 'K03'),
(415, 234, 'KKS16', '2019-04-11', 'COS/19/063', 'By. transportasi dari sampoerna - kantor / meeting / kefas', 577700, 31000, 546700, 'K02'),
(416, 239, 'KKS16', '2019-04-11', 'COS/19/064', 'Gojek antar invoice ke gudang garam', 74700, 25000, 49700, 'K02'),
(417, 236, 'KKS16', '2019-04-11', 'COS/19/064', 'By. kirim pajak', 516700, 10000, 506700, 'K11'),
(418, 238, 'KKS16', '2019-04-11', 'COS/19/064', 'By. BBM & parkir', 476700, 402000, 74700, 'K02'),
(419, 240, 'KKS16', '2019-04-11', 'COS/19/064', 'By. transportasi dari ITS - kantor / meeting / kefas', 49700, 29000, 20700, 'K02'),
(420, 237, 'KKS16', '2019-04-11', 'COS/19/064', 'pbl. bantex', 506700, 30000, 476700, 'K04'),
(424, 241, 'KKS17', '11-Apr-19', '', 'Saldo Awal', 2000000, 0, 2000000, ''),
(425, 242, 'KKS17', '11-Apr-19', 'COS/19/065', 'Pembelian pulsa untuk driver', 2000000, 100000, 1900000, 'K16'),
(426, 243, 'KKS17', '11-Apr-19', 'COS/19/065', 'by. pindah kamera cctv di bc Juanda', 1900000, 387000, 1513000, 'K15'),
(427, 244, 'KKS17', '11-Apr-19', 'COS/19/066', 'By. BBM & parkir', 1513000, 154042, 1358958, 'K02'),
(428, 245, 'KKS17', '11-Apr-19', 'COS/19/066', 'By. konsumsi', 1358958, 321996, 1036962, 'K01'),
(429, 246, 'KKS17', '11-Apr-19', 'COS/19/067', 'Biaya berlangganan surya bulan februari 2019', 1036962, 120000, 916962, 'K03'),
(430, 247, 'KKS17', '11-Apr-19', 'COS/19/067', 'By. print sticker + pemasangan sticker', 916962, 360000, 556962, 'K03'),
(431, 249, 'KKS17', '11-Apr-19', 'COS/19/068', 'Biaya konsumsi implementasi invent 2 di PT Tomatec', 540962, 34000, 506962, 'K01'),
(432, 248, 'KKS17', '11-Apr-19', 'COS/19/068', 'Ongkos taxi dari BCA Syariah Mayjend - kantor / ajeng', 556962, 16000, 540962, 'K02'),
(433, 250, 'KKS17', '11-Apr-19', 'COS/19/068', 'Konsumsi project', 506962, 52500, 454462, 'K01'),
(434, 251, 'KKS17', '11-Apr-19', 'COS/19/068', 'By. jasa ganti DVR di BC Juanda', 454462, 185000, 269462, 'K15'),
(435, 252, 'KKS17', '11-Apr-19', 'COS/19/068', 'Pembelian Aqua 6 karton', 269462, 192000, 77462, 'K01');

-- --------------------------------------------------------

--
-- Table structure for table `kateg`
--

CREATE TABLE `kateg` (
  `id_kateg` int(20) NOT NULL,
  `konsumsi` varchar(50) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `kehumasan` varchar(50) NOT NULL,
  `perlengkapan_kantor` varchar(50) NOT NULL,
  `peralatan_kantor` varchar(50) NOT NULL,
  `peralatan_komputer` varchar(50) NOT NULL,
  `fotocopy_jilid` varchar(50) NOT NULL,
  `perawatan_peralatan` varchar(50) NOT NULL,
  `perawatan_kendaraan` varchar(50) NOT NULL,
  `entertain` varchar(50) NOT NULL,
  `pos_paket` varchar(50) NOT NULL,
  `perawatan_gedung` varchar(50) NOT NULL,
  `lain_lain` varchar(50) NOT NULL,
  `perawatan_komputer` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `telp_fax` varchar(50) NOT NULL,
  `pdam_listrik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kateg`
--

INSERT INTO `kateg` (`id_kateg`, `konsumsi`, `transportasi`, `kehumasan`, `perlengkapan_kantor`, `peralatan_kantor`, `peralatan_komputer`, `fotocopy_jilid`, `perawatan_peralatan`, `perawatan_kendaraan`, `entertain`, `pos_paket`, `perawatan_gedung`, `lain_lain`, `perawatan_komputer`, `project`, `telp_fax`, `pdam_listrik`) VALUES
(1, '', '', '', '', '', '19012', '', '', '', '', '', '', '', '', '', '', ''),
(2, '12222', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '1790', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `k_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`k_kategori`, `nama_kategori`) VALUES
('K01', 'Konsumsi'),
('K02', 'Transportasi'),
('K03', 'Kehumasan'),
('K04', 'Perlengkapan Kantor'),
('K05', 'Peralatan Kantor'),
('K06', 'Peralatan Komputer'),
('K07', 'Fotocopy & Jilid'),
('K08', 'Perawatan Peralatan'),
('K09', 'Perawatan Kendaraan'),
('K10', 'Entertain'),
('K11', 'Pos & Paket'),
('K12', 'Perawatan Gedung'),
('K13', 'Lain-Lain'),
('K14', 'Perawatan Komputer'),
('K15', 'Project'),
('K16', 'Telp & Fax'),
('K17', 'PDAM & Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'user\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `logger`
--

CREATE TABLE `logger` (
  `id` bigint(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logger`
--

INSERT INTO `logger` (`id`, `created_on`, `created_by`, `type`, `type_id`, `token`, `comment`) VALUES
(1, '2019-09-17 02:00:43', 1, 'user', 1, 'delete', ''),
(2, '2019-09-17 02:02:57', 1, 'user', 1, 'delete', ''),
(3, '2019-09-17 02:04:41', 1, 'admin', 1, 'delete', ''),
(4, '2019-09-17 02:08:21', 1, 'admin', 1, 'delete', ''),
(5, '2019-09-17 02:13:16', 1, 'user', 1, 'delete', ''),
(6, '2019-09-17 02:14:08', 1, 'admin', 1, 'delete', ''),
(7, '2019-09-17 02:14:21', 1, 'admin', 1, 'delete', ''),
(8, '2019-09-17 02:14:52', 1, 'admin', 1, 'delete', ''),
(9, '2019-09-17 02:16:23', 1, 'user', 1, 'delete', ''),
(10, '2019-09-17 02:16:51', 1, 'admin', 1, 'delete', ''),
(11, '2019-09-17 02:18:33', 1, 'admin', 1, 'delete', ''),
(12, '2019-09-17 02:23:28', 1, 'admin', 1, 'delete', ''),
(13, '2019-09-17 02:23:55', 1, 'user', 1, 'delete', ''),
(14, '2019-09-17 02:25:07', 1, 'user', 1, 'delete', ''),
(15, '2019-09-17 02:28:07', 1, 'admin', 1, 'delete', ''),
(16, '2019-09-17 02:28:27', 1, 'user', 1, 'delete', ''),
(17, '2019-09-17 02:30:44', 1, 'admin', 1, 'delete', ''),
(18, '2019-09-17 02:32:26', 1, 'admin', 1, 'delete', ''),
(19, '2019-09-17 02:33:45', 1, 'admin', 1, 'delete', ''),
(20, '2019-09-17 02:44:41', 1, 'admin', 1, 'delete', ''),
(21, '2019-09-17 02:45:55', 1, 'user', 1, 'delete', ''),
(22, '2019-09-17 03:05:15', 1, 'user', 1, 'delete', ''),
(23, '2019-09-17 03:17:14', 1, 'admin', 1, 'delete', ''),
(24, '2019-09-17 03:17:51', 1, 'user', 1, 'delete', ''),
(25, '2019-09-17 03:23:38', 1, 'admin', 1, 'delete', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(50) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `telp`, `username`, `password`) VALUES
(1, 'hendik', '092710', 'hendikhendik', 'hendik123');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_uang_muka`
--

CREATE TABLE `pengajuan_uang_muka` (
  `id_pengajuan` int(255) NOT NULL,
  `tgl` date NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_uang_muka`
--

INSERT INTO `pengajuan_uang_muka` (`id_pengajuan`, `tgl`, `bukti`, `kegiatan`, `jumlah`) VALUES
(1, '2019-09-10', 'CA 202524', 'By.transportasi dari BC perak - kantor (E-Dec) / kefas', 112000),
(4, '2019-09-11', 'CA 202525', 'saldo awal', 493650);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_bank`
--

CREATE TABLE `pengeluaran_bank` (
  `id_pengeluaran` int(255) NOT NULL,
  `tgl` date NOT NULL,
  `bukti_cek` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran_bank`
--

INSERT INTO `pengeluaran_bank` (`id_pengeluaran`, `tgl`, `bukti_cek`, `kegiatan`, `jumlah`) VALUES
(1, '2019-09-10', 'CA 0501', 'By. BBM & parkir', 114000),
(3, '2019-09-11', 'CA 0502', 'Pembelian Perlengkapan Kantor', 112000),
(4, '2019-09-11', 'CA 0503', 'By.transportasi dari BC perak - kantor (E-Dec) / kefas', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `pertanggungan_uang`
--

CREATE TABLE `pertanggungan_uang` (
  `id_pertanggungan` int(255) NOT NULL,
  `tgl` date NOT NULL,
  `bukti_cek` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanggungan_uang`
--

INSERT INTO `pertanggungan_uang` (`id_pertanggungan`, `tgl`, `bukti_cek`, `kegiatan`, `jumlah`) VALUES
(1, '2019-09-10', 'COS/09/01', 'Pembelian Perlengkapan Kantor', 493650),
(2, '2019-09-11', 'COS/09/02', 'By.transportasi dari BC perak - kantor (E-Dec) / kefas', 112000);

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `k_saldo` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `saldo_awal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`k_saldo`, `tgl`, `saldo_awal`) VALUES
('A001', '30-Jul-19', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `username`, `password`, `id_level`) VALUES
(1, 'admin1', 'admin', 'admin', 1),
(2, 'user1', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id_input`);

--
-- Indexes for table `kateg`
--
ALTER TABLE `kateg`
  ADD PRIMARY KEY (`id_kateg`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`k_kategori`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengajuan_uang_muka`
--
ALTER TABLE `pengajuan_uang_muka`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `pengeluaran_bank`
--
ALTER TABLE `pengeluaran_bank`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `pertanggungan_uang`
--
ALTER TABLE `pertanggungan_uang`
  ADD PRIMARY KEY (`id_pertanggungan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `id_input` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `kateg`
--
ALTER TABLE `kateg`
  MODIFY `id_kateg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logger`
--
ALTER TABLE `logger`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengajuan_uang_muka`
--
ALTER TABLE `pengajuan_uang_muka`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengeluaran_bank`
--
ALTER TABLE `pengeluaran_bank`
  MODIFY `id_pengeluaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pertanggungan_uang`
--
ALTER TABLE `pertanggungan_uang`
  MODIFY `id_pertanggungan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
