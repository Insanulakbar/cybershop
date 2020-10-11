-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cybershop_db
CREATE DATABASE IF NOT EXISTS `cybershop_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cybershop_db`;

-- Dumping structure for table cybershop_db.tbl_pembelian
CREATE TABLE IF NOT EXISTS `tbl_pembelian` (
  `pembelian_id` int(11) NOT NULL AUTO_INCREMENT,
  `pembelian_nama` varchar(50) NOT NULL,
  `pembelian_category` varchar(50) NOT NULL,
  `pembelian_kuantitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`pembelian_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table cybershop_db.tbl_pembelian: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_pembelian` DISABLE KEYS */;
INSERT INTO `tbl_pembelian` (`pembelian_id`, `pembelian_nama`, `pembelian_category`, `pembelian_kuantitas`) VALUES
	(1, 'Black Diamond iPhone 5', 'Smartphone', 5);
/*!40000 ALTER TABLE `tbl_pembelian` ENABLE KEYS */;

-- Dumping structure for table cybershop_db.tbl_product
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` varchar(15) NOT NULL,
  `product_nama` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_harga` double NOT NULL,
  `product_stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cybershop_db.tbl_product: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` (`product_id`, `product_nama`, `product_category`, `product_harga`, `product_stok`) VALUES
	('BB0001', 'Intel Core i7 7820X', 'PC', 9000000, 4),
	('BB0002', 'Lenovo Thinkpad W540', 'Laptop', 33000000, 8),
	('BB0003', 'Luvaglio', 'Notebook', 9500000, 5),
	('BB0004', 'Falcon Supernova iPhone 6 Pink Diamond', 'Smartphone', 150000000, 2);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;

-- Dumping structure for table cybershop_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cybershop_db.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`) VALUES
	(1, 'Insanul Akbar.S.K', 'admin', '$2y$10$385V6ftFB.t6wEkUPiv2ceAiAHdiHJR61KStkPVjCUntaA4wubx3a', 1),
	(2, 'Muhammad Alfiqri', 'pimpinan', '$2y$10$hor700oJqKzAZ0kw66pxOuj40VVlsT6GWxV2rjk.rQPfp5svoykiK', 2),
	(3, 'Ahmar Sugiono', 'kasir', '$2y$10$98Q1QVFEJM7CSJ9D4NZzDeaK.MFdvz6Ggu4VTkUHND/Z5mj4agi/.', 3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
