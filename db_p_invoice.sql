-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 06:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_p_invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `jatuhTempo` text NOT NULL,
  `noAkun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `vendor_id`, `jatuhTempo`, `noAkun`) VALUES
(1, 1, '06/10/2019', 16833127),
(2, 4, '2019-11-22', 8876884),
(3, 2, '2019-12-20', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `no` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`no`, `invoice`, `activity`, `description`, `harga`) VALUES
(1, 1, 'Pembuatan Perangkat Lunak', 'Contoh Pembuatan System Tracking Tagihan (Invoice)', 25000000),
(2, 1, 'Cicilan Pembayaran', 'Cicilan Pembayaran Perangkat Lunak System dibayar dimuka (Down Payment)', -10000000),
(3, 1, 'Cicilan Pembayaran', 'Cicilan Pembayaran 2', -2000000),
(6, 2, 'Customer Care', 'Memberi Pelayanan kepada Customer dalam tanggang waktu yang disepakati', 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` text NOT NULL,
  `email` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `nama`, `alamat`, `telp`, `email`, `status`) VALUES
(1, 'Ikhsan Software', '1763 Snyder Avenue Salisbury, NC 28144', '304-393-9636', 'ikhsan@IkhsanSoft.com', 'active'),
(2, 'Widy Design', '791 Fulton Street Kermit, WV 25674', '919-257-6024', 'widi@Design.com', 'active'),
(3, 'Claudia Software', '4304 Glenwood Avenue Shaker Heights, OH 44120', '216-283-4727', 'claudia@kittensoft.com', 'active'),
(4, 'Silvie Customer Support', '474 Irish Lane Madison, WI 53718', '608-712-8019', 'silvie@cs.com', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
