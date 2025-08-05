/* Create Database and Table */
create database uas_ecommerseif23h;
 
use uas_ecommerseif23h;

CREATE TABLE `warga` (
  `NIK` VARCHAR(16) COLLATE utf8mb4_general_ci NOT NULL,
  `Nama` VARCHAR(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `JenisKelamin` VARCHAR(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TanggalLahir` DATE DEFAULT NULL,
  `Alamat` VARCHAR(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NoKK` VARCHAR(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB 
  DEFAULT CHARSET=utf8mb4 
  COLLATE=utf8mb4_general_ci;
