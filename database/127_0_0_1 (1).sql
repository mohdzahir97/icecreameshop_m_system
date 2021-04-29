-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 07:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asad`
--
CREATE DATABASE IF NOT EXISTS `asad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `asad`;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) DEFAULT NULL,
  `sal` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `sal`) VALUES
(1, '40000'),
(5, '600000');
--
-- Database: `cmd`
--
CREATE DATABASE IF NOT EXISTS `cmd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cmd`;

-- --------------------------------------------------------

--
-- Table structure for table `cmdtable`
--

CREATE TABLE `cmdtable` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `demo_table`
--
CREATE DATABASE IF NOT EXISTS `demo_table` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `demo_table`;

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `name`) VALUES
(0, '');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `amount`) VALUES
(2, 'Ice CreaM', 0),
(3, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `address`) VALUES
(1, 'zahir', 'utran');

-- --------------------------------------------------------

--
-- Table structure for table `emp2`
--

CREATE TABLE `emp2` (
  `id` int(11) DEFAULT NULL,
  `empname` varchar(40) DEFAULT NULL,
  `empadd` varchar(50) DEFAULT NULL,
  `empsalafry` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp2`
--

INSERT INTO `emp2` (`id`, `empname`, `empadd`, `empsalafry`) VALUES
(1, 'rehan', 'parola', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `salary`) VALUES
(1, 50000),
(3, 700000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `icecreame`
--
CREATE DATABASE IF NOT EXISTS `icecreame` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `icecreame`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `billing_table`
--

CREATE TABLE `billing_table` (
  `cust_id` int(200) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `chocolate_with_ice_cream` varchar(200) NOT NULL,
  `quantity_p1` int(200) NOT NULL,
  `amount_p1` float NOT NULL,
  `tamount_p1` float NOT NULL,
  `oreo_with_ice_cream` varchar(200) NOT NULL,
  `quantity_p2` int(200) NOT NULL,
  `amount_p2` float NOT NULL,
  `tamount_p2` float NOT NULL,
  `chocolate_nuts_with_ice` varchar(200) NOT NULL,
  `quantity_p3` int(200) NOT NULL,
  `amount_p3` float NOT NULL,
  `tamount_p3` float NOT NULL,
  `chocolate_fappichino` varchar(200) NOT NULL,
  `quantity_p4` int(200) NOT NULL,
  `amount_p4` float NOT NULL,
  `tamount_p4` float NOT NULL,
  `vanilla_fappichino` varchar(200) NOT NULL,
  `quantity_p5` int(200) NOT NULL,
  `amount_p5` float NOT NULL,
  `tamount_p5` float NOT NULL,
  `caramal_moca` varchar(200) NOT NULL,
  `quantity_p6` int(200) NOT NULL,
  `amount_p6` float NOT NULL,
  `tamount_p6` float NOT NULL,
  `pineapple_ice_cream` varchar(200) NOT NULL,
  `quantity_p7` int(200) NOT NULL,
  `amount_p7` float NOT NULL,
  `tamount_p7` float NOT NULL,
  `caramal_crunch_ice_cream` varchar(200) NOT NULL,
  `quantity_p8` int(200) NOT NULL,
  `amount_p8` float NOT NULL,
  `tamount_p8` float NOT NULL,
  `vanilla_ice_cream` varchar(200) NOT NULL,
  `quantity_p9` int(200) NOT NULL,
  `amount_p9` float NOT NULL,
  `tamount_p9` float NOT NULL,
  `mango_ice_cream` varchar(200) NOT NULL,
  `quantity_p10` int(200) NOT NULL,
  `amount_p10` float NOT NULL,
  `tamount_p10` int(11) NOT NULL,
  `chocolate_ice_cream` varchar(200) NOT NULL,
  `quantity_p11` int(200) NOT NULL,
  `amount_p11` float NOT NULL,
  `tamount_p11` float NOT NULL,
  `strawberry_ice_cream` varchar(200) NOT NULL,
  `quantity_p12` int(200) NOT NULL,
  `amount_p12` float NOT NULL,
  `tamount_p12` float NOT NULL,
  `total_product` int(200) NOT NULL,
  `final_amount` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_table`
--

INSERT INTO `billing_table` (`cust_id`, `cust_name`, `chocolate_with_ice_cream`, `quantity_p1`, `amount_p1`, `tamount_p1`, `oreo_with_ice_cream`, `quantity_p2`, `amount_p2`, `tamount_p2`, `chocolate_nuts_with_ice`, `quantity_p3`, `amount_p3`, `tamount_p3`, `chocolate_fappichino`, `quantity_p4`, `amount_p4`, `tamount_p4`, `vanilla_fappichino`, `quantity_p5`, `amount_p5`, `tamount_p5`, `caramal_moca`, `quantity_p6`, `amount_p6`, `tamount_p6`, `pineapple_ice_cream`, `quantity_p7`, `amount_p7`, `tamount_p7`, `caramal_crunch_ice_cream`, `quantity_p8`, `amount_p8`, `tamount_p8`, `vanilla_ice_cream`, `quantity_p9`, `amount_p9`, `tamount_p9`, `mango_ice_cream`, `quantity_p10`, `amount_p10`, `tamount_p10`, `chocolate_ice_cream`, `quantity_p11`, `amount_p11`, `tamount_p11`, `strawberry_ice_cream`, `quantity_p12`, `amount_p12`, `tamount_p12`, `total_product`, `final_amount`, `date`) VALUES
(1, 'asad', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Vanilla Fappichino', 4, 100, 400, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 4, 400, '2019-07-20'),
(3, 'zahir_shaikh', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Vanilla Fappichino', 4, 100, 400, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 4, 400, '2019-07-20'),
(4, 'zahir', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Vanilla Fappichino', 10, 100, 1000, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 10, 1000, '2019-07-20'),
(5, 'zahir', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Vanilla Fappichino', 2, 100, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 2, 200, '2019-07-20'),
(6, 'ahmed_khan', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, 0, '2019-07-20'),
(7, 'asad', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, 0, '2019-07-20'),
(8, 'zahir_shaikh', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, 0, '2019-07-20'),
(9, 'zahir', '', 0, 0, 0, 'oreo with ice cream', 9, 60, 540, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Caramal crunch ice cream', 10, 100, 1000, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 19, 1540, '2019-07-20'),
(10, 'zahir', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Caramal Moca', 4, 50, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 4, 200, '2019-07-20'),
(11, 'zahir', '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Caramal Moca', 4, 50, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 4, 200, '2019-07-20'),
(12, 'zahir', '', 0, 0, 0, 'oreo with ice cream', 2, 60, 120, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 2, 120, '2019-07-20'),
(13, 'demo', '', 0, 0, 0, 'oreo with ice cream', 2, 60, 120, 'chocolate Nuts with ice cream', 2, 100, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 'Pineapple ice cream', 2, 100, 200, '', 0, 0, 0, 'Vanilla ice cream', 2, 100, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 8, 720, '2019-07-20'),
(14, 'mahenoor', '', 0, 0, 0, 'oreo with ice cream', 2, 60, 120, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 2, 120, '2019-07-20'),
(15, 'naziya shaikh', '', 0, 0, 0, 'oreo with ice cream', 2, 60, 120, 'chocolate Nuts with ice cream', 2, 100, 200, 'chocolate Fappichino', 2, 100, 200, 'Vanilla Fappichino', 2, 100, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 8, 720, '2019-07-20'),
(16, 'zahir', '', 0, 0, 0, 'oreo with ice cream', 2, 60, 120, 'chocolate Nuts with ice cream', 2, 100, 200, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 4, 320, '2019-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_unit` varchar(100) NOT NULL,
  `p_amount` double NOT NULL,
  `remaining_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`p_id`, `p_name`, `p_unit`, `p_amount`, `remaining_quantity`) VALUES
(42, 'vanilla_fappichino', 'Box', 100, '27'),
(43, 'caramal_moca', 'Box', 50, '18'),
(44, 'pineapple_ice_cream', 'Box', 100, '31'),
(45, 'caramal_crunch_ice_cream', 'Box', 100, '30'),
(46, 'vanilla_ice_cream', 'Box', 100, '32'),
(47, 'mango_ice_cream', 'Box', 60, '5'),
(48, 'chocolate_ice_cream', 'Box', 40, '39'),
(49, 'chocolate_with_ice_cream', 'Box', 60, '0'),
(50, 'oreo_with_ice_cream', 'Box', 60, '50'),
(51, 'chocolate_nuts_with_ice_cream', 'Box', 100, '44'),
(52, 'chocolate_fappichino', 'Box', 100, '89'),
(53, 'strawberry_ice_cream', 'Box', 100, '97');

-- --------------------------------------------------------

--
-- Table structure for table `sales_table`
--

CREATE TABLE `sales_table` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `sales_quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_table`
--

INSERT INTO `sales_table` (`product_id`, `product_name`, `sales_quantity`) VALUES
(1, 'chocolate_with_ice_cream', 0),
(2, 'oreo_with_ice_cream', 19),
(3, 'chocolate_nuts_with_ice_cream', 6),
(4, 'chocolate_fappichino', 2),
(5, 'vanilla_fappichino', 14),
(6, 'caramal_moca', 8),
(7, 'pineapple_ice_cream', 2),
(8, 'caramal_crunch_ice_cream', 10),
(9, 'vanilla_ice_cream', 2),
(10, 'mango_ice_cream', 0),
(11, 'chocolate_ice_cream', 0),
(12, 'strawberry_ice_cream', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_table`
--
ALTER TABLE `billing_table`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sales_table`
--
ALTER TABLE `sales_table`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_table`
--
ALTER TABLE `billing_table`
  MODIFY `cust_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sales_table`
--
ALTER TABLE `sales_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'icecream', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"admin\",\"billing_table\",\"product_detail\",\"sales_table\"],\"table_structure[]\":[\"admin\",\"billing_table\",\"product_detail\",\"sales_table\"],\"table_data[]\":[\"admin\",\"billing_table\",\"product_detail\",\"sales_table\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'server', 'icecream', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"asad\",\"cmd\",\"demo_table\",\"icecreame\",\"phpmyadmin\",\"test\",\"zahir\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(3, 'root', 'server', 'icecreamdatabase', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"asad\",\"cmd\",\"demo_table\",\"icecreame\",\"phpmyadmin\",\"test\",\"zahir\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

--
-- Dumping data for table `pma__navigationhiding`
--

INSERT INTO `pma__navigationhiding` (`username`, `item_name`, `item_type`, `db_name`, `table_name`) VALUES
('root', 'product_detail', 'table', 'icecreame', ''),
('root', 'xyz', 'table', 'icecreame', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'icecreame', 'billing_table', '[]', '2019-03-10 10:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-11-09 18:11:14', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `zahir`
--
CREATE DATABASE IF NOT EXISTS `zahir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zahir`;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(11) DEFAULT NULL,
  `emp_name` varchar(25) DEFAULT NULL,
  `emp_add` varchar(25) DEFAULT NULL,
  `emp_salary` varchar(25) DEFAULT NULL,
  `emp_state` varchar(25) DEFAULT NULL,
  `emp_country` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `salary`) VALUES
(1, '50000'),
(3, '60000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
