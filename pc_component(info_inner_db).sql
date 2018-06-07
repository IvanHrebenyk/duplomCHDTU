-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 07 2018 р., 20:49
-- Версія сервера: 5.6.37
-- Версія PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `pc_component`
--

-- --------------------------------------------------------

--
-- Структура таблиці `additional_power_videocard`
--

CREATE TABLE `additional_power_videocard` (
  `id_videocard` int(11) NOT NULL,
  `count_need_loop` int(11) NOT NULL,
  `count_contact_loop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `additional_power_videocard`
--

INSERT INTO `additional_power_videocard` (`id_videocard`, `count_need_loop`, `count_contact_loop`) VALUES
(16, 1, 6),
(18, 2, 8),
(22, 2, 8);

-- --------------------------------------------------------

--
-- Структура таблиці `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `admin`
--

INSERT INTO `admin` (`id_user`) VALUES
(1),
(4);

-- --------------------------------------------------------

--
-- Структура таблиці `connect_cpu`
--

CREATE TABLE `connect_cpu` (
  `id_power` int(11) NOT NULL,
  `count_contact` int(11) NOT NULL,
  `count_loop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `connect_cpu`
--

INSERT INTO `connect_cpu` (`id_power`, `count_contact`, `count_loop`) VALUES
(1, 4, 1),
(1, 8, 1),
(2, 4, 1),
(3, 4, 1),
(4, 4, 1),
(5, 4, 1),
(6, 4, 1),
(6, 8, 1),
(7, 4, 1),
(7, 8, 1),
(8, 4, 1),
(9, 4, 1),
(9, 8, 1),
(10, 4, 2),
(10, 8, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `connect_motherboard`
--

CREATE TABLE `connect_motherboard` (
  `id_power` int(11) NOT NULL,
  `count_pin_atx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `connect_motherboard`
--

INSERT INTO `connect_motherboard` (`id_power`, `count_pin_atx`) VALUES
(1, 20),
(1, 24),
(2, 20),
(2, 24),
(3, 20),
(3, 24),
(4, 20),
(4, 24),
(5, 20),
(5, 24),
(6, 20),
(6, 24),
(7, 20),
(7, 24),
(8, 24),
(9, 20),
(9, 24),
(10, 20),
(10, 24);

-- --------------------------------------------------------

--
-- Структура таблиці `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `firm` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `ghz` double NOT NULL,
  `type_ram` int(11) NOT NULL,
  `socket` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `command_set` int(11) NOT NULL,
  `cache` double NOT NULL,
  `level_cache` int(11) NOT NULL,
  `core` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `cpu`
--

INSERT INTO `cpu` (`id`, `firm`, `model`, `ghz`, `type_ram`, `socket`, `power`, `command_set`, `cache`, `level_cache`, `core`) VALUES
(8, 'Intel', 'i3-8100', 3.6, 4, 2, 65, 64, 6, 3, 4),
(9, 'Intel', 'G4560', 3.5, 4, 2, 54, 64, 3, 3, 2),
(10, 'Intel', 'i5-5400', 2.8, 4, 2, 65, 64, 9, 3, 6),
(11, 'AMD', 'FX-8300', 3.3, 3, 6, 90, 64, 8, 3, 8),
(12, 'AMD', 'Ryzen 3 2200G', 3.5, 4, 3, 65, 64, 4, 3, 4),
(13, 'AMD', 'A10-9700', 3.5, 4, 3, 65, 64, 1, 2, 4),
(14, 'Intel', 'G5400', 3.7, 4, 2, 54, 64, 4, 3, 2),
(15, 'AMD', 'Athlon X4 860K', 3.7, 3, 7, 95, 64, 4, 2, 4),
(16, 'AMD', 'Richland A4-6300', 3.7, 3, 8, 65, 64, 1, 2, 2),
(17, 'Intel', 'i5-5675C', 3.1, 4, 9, 65, 64, 4, 3, 4);

-- --------------------------------------------------------

--
-- Структура таблиці `cpu_graphic`
--

CREATE TABLE `cpu_graphic` (
  `id_cpu` int(11) NOT NULL,
  `title_graphic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `cpu_graphic`
--

INSERT INTO `cpu_graphic` (`id_cpu`, `title_graphic`) VALUES
(8, ' Intel UHD 630'),
(9, 'Intel HD Graphics 610'),
(10, 'Intel UHD 630'),
(12, 'AMD Radeon Vega 8'),
(13, 'AMD Radeon R7 Series'),
(14, 'Intel UHD Graphics 610'),
(16, 'AMD Radeon HD8370D'),
(17, 'Intel Iris Pro Graphics 6200');

-- --------------------------------------------------------

--
-- Структура таблиці `hdd`
--

CREATE TABLE `hdd` (
  `id_rom` int(11) NOT NULL,
  `rpm` int(11) NOT NULL,
  `buffer` double NOT NULL,
  `noise` double NOT NULL,
  `speed_transfer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `hdd`
--

INSERT INTO `hdd` (`id_rom`, `rpm`, `buffer`, `noise`, `speed_transfer`) VALUES
(3, 7200, 32, 25, '600'),
(6, 5400, 64, 22, '600'),
(7, 5400, 16, 22, '6144'),
(8, 7200, 64, 26, '400'),
(9, 7200, 256, 29, '240');

-- --------------------------------------------------------

--
-- Структура таблиці `image_cpu`
--

CREATE TABLE `image_cpu` (
  `id_cpu` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `image_cpu`
--

INSERT INTO `image_cpu` (`id_cpu`, `path`) VALUES
(8, 'img/935015278544536069.jpg'),
(10, 'img/p1.jpg'),
(11, 'img/385415280257232643.jpg'),
(12, 'img/600915280259374940.jpg'),
(13, 'img/630215280263272712.jpg'),
(15, 'img/athlon.jpg'),
(16, 'img/467115280269037694.jpg'),
(17, 'img/intel_bx80658I55675c_images_773039596.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `image_gpu`
--

CREATE TABLE `image_gpu` (
  `id_gpu` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `image_gpu`
--

INSERT INTO `image_gpu` (`id_gpu`, `path`) VALUES
(16, 'img/935715278073771384.jpg'),
(17, 'img/631515278081474370.jpg'),
(18, 'img/427315280227852484.jpg'),
(19, 'img/324015280231706125.jpg'),
(20, 'img/261515280233683578.jpg'),
(21, 'img/538815280239247593.jpg'),
(22, 'img/201115280241877575.jpg'),
(23, 'img/201615280244494347.jpg'),
(24, 'img/copy_zotac_zt_71302_20l_56e940da008db_images_1483109456.jpg'),
(25, 'img/386615280248967787.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `image_motherboard`
--

CREATE TABLE `image_motherboard` (
  `id_mb` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `image_motherboard`
--

INSERT INTO `image_motherboard` (`id_mb`, `path`) VALUES
(9, 'img/mb.jpg'),
(10, 'img/285215280327896944.jpg'),
(11, 'img/520115280330941861.jpg'),
(12, 'img/asus_prime_z270_p_images_1811993512.jpg'),
(13, 'img/827515280336803020.jpg'),
(15, 'img/412315280343901155.jpg'),
(16, 'img/asus_rog_maximus_x_formula_images_2553331015.jpg'),
(17, 'img/776615280350013485.jpg'),
(18, 'img/asus_prime_x299_deluxe_images_2052144136.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `image_power`
--

CREATE TABLE `image_power` (
  `id_power` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `image_power`
--

INSERT INTO `image_power` (`id_power`, `path`) VALUES
(1, 'img/cooler_master_rs400_acabb1_eu_images_2224498384.jpg'),
(2, 'img/139215280364525857.jpg'),
(3, 'img/510515280366188308.jpg'),
(4, 'img/976715280367248253.jpg'),
(5, 'img/570515280368428110.jpg'),
(6, 'img/294715280370581382.jpg'),
(7, 'img/214615280371854646.jpg'),
(8, 'img/640615280372944637.jpg'),
(9, 'img/447515280374165504.jpg'),
(10, 'img/160515280375507935.png');

-- --------------------------------------------------------

--
-- Структура таблиці `image_ram`
--

CREATE TABLE `image_ram` (
  `id_ram` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `image_ram`
--

INSERT INTO `image_ram` (`id_ram`, `path`) VALUES
(1, 'img/613115278489678781.jpg'),
(2, 'img/copy_kingston_ddr4_2400_8gb_pc4_19200_hypahx_fury_blk_570cdc824a968_images_1537960677.jpg'),
(3, 'img/729215280280319809.jpg'),
(4, 'img/448615280281104562.jpg'),
(5, 'img/202615280281693406.jpg'),
(6, 'img/677015280282396587.jpg'),
(7, 'img/954015280282893945.jpg'),
(8, 'img/goodram_ddr2-800_2048mb_pc2-800_pc2-6400_gr800d264l62g_images_2356411.jpg'),
(9, 'img/508115280285227592.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `image_rom`
--

CREATE TABLE `image_rom` (
  `id_rom` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `image_rom`
--

INSERT INTO `image_rom` (`id_rom`, `path`) VALUES
(3, 'img/western_digital_wd5000lplx_images_602258412.jpg'),
(4, 'img/462115279550173089.jpg'),
(5, 'img/454915279562107339.jpg'),
(6, 'img/western_digital_wd5000azrz_images_1348188561.jpg'),
(7, 'img/western_digital_wd5000lpcx_images_1242541089.jpg'),
(8, 'img/toshiba_hdwd110uzsva_images_3019534479.jpg'),
(9, 'img/241015280308119872.jpg'),
(10, 'img/480215280313451021.jpg'),
(11, 'img/309315280315217968.jpg'),
(12, 'img/650415280316547760.jpg'),
(13, 'img/713815280319113280.jpg'),
(14, 'img/261015280320771291.jpg'),
(15, 'img/710515280322775534.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `interface_memory`
--

CREATE TABLE `interface_memory` (
  `id` int(11) NOT NULL,
  `id_rom` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `generation` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `interface_memory`
--

INSERT INTO `interface_memory` (`id`, `id_rom`, `title`, `generation`) VALUES
(1, 3, 'SATA', 3),
(2, 4, 'SATA', 3),
(3, 5, 'PCI', 3),
(4, 6, 'SATA', 3),
(5, 7, 'SATA', 3),
(6, 8, 'SATA', 3),
(7, 9, 'SATA', 3),
(8, 10, 'SATA', 3),
(9, 11, 'SATA', 3),
(10, 12, 'SATA', 3),
(11, 13, 'PCI', 3),
(12, 14, 'SATA', 3),
(13, 15, 'SATA', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `moderator`
--

CREATE TABLE `moderator` (
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `motherboard`
--

CREATE TABLE `motherboard` (
  `id` int(11) NOT NULL,
  `firm` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `socket` int(11) NOT NULL,
  `count_ide` int(11) NOT NULL,
  `count_vga` int(11) NOT NULL,
  `count_hdmi` int(11) NOT NULL,
  `count_audio` int(11) NOT NULL,
  `speed_lan` double NOT NULL,
  `title_audio` varchar(70) NOT NULL,
  `count_dvi` int(11) NOT NULL,
  `count_contact_power_cpu` int(11) NOT NULL,
  `count_contact_power_mb` int(11) NOT NULL,
  `max_ram_mhz` int(11) NOT NULL,
  `formfactor` varchar(30) NOT NULL,
  `count_ps2_mouse` int(11) NOT NULL,
  `count_ps2_keyboard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `motherboard`
--

INSERT INTO `motherboard` (`id`, `firm`, `model`, `socket`, `count_ide`, `count_vga`, `count_hdmi`, `count_audio`, `speed_lan`, `title_audio`, `count_dvi`, `count_contact_power_cpu`, `count_contact_power_mb`, `max_ram_mhz`, `formfactor`, `count_ps2_mouse`, `count_ps2_keyboard`) VALUES
(9, 'Asus', 'Expedition EX-B250-V7', 2, 0, 0, 1, 6, 100, 'Realtek ALC887', 0, 8, 24, 2133, 'ATX', 0, 0),
(10, 'Asus', 'H110M-K', 2, 0, 1, 0, 3, 100, 'Realtek ALC887', 1, 4, 24, 2133, 'MicroATX', 1, 1),
(11, 'MSI', 'B250M', 2, 0, 1, 0, 3, 100, 'ALC887', 0, 8, 24, 2400, 'MicroATX', 1, 1),
(12, 'Asus', 'Z270-P', 2, 0, 0, 1, 3, 100, 'Realtek ALC887', 1, 8, 24, 2200, 'ATX', 1, 1),
(13, 'MSI', 'H81M-P33', 9, 0, 1, 0, 3, 100, 'Realtek ALC887', 1, 4, 20, 1033, 'MicroATX', 1, 1),
(14, 'Gigabyte', 'GA-F2A68HM-S1', 7, 0, 1, 0, 3, 100, 'Realtek ALC887', 0, 4, 24, 1600, 'MicroATX', 1, 1),
(15, 'Asus', 'Maximus IX Formula', 2, 0, 0, 1, 5, 1024, 'SupremeFX S1220', 0, 8, 24, 4133, 'ATX', 0, 0),
(16, 'Asus', 'Maximus X Formula', 2, 0, 0, 1, 5, 1024, 'SupremeFX S1220', 0, 8, 24, 4133, 'ATX', 0, 0),
(17, 'Asus', 'B250M-C', 2, 0, 0, 1, 3, 100, 'Realtek ALC887', 1, 4, 24, 2400, 'MicroATX', 1, 1),
(18, 'Asus', 'Prime X299-Deluxe', 10, 0, 0, 0, 5, 1024, 'Realtek S1220A', 0, 12, 24, 4000, 'ATX', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `pci_motherboard`
--

CREATE TABLE `pci_motherboard` (
  `id_motherboard` int(11) NOT NULL,
  `generation` double NOT NULL,
  `slot` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `pci_motherboard`
--

INSERT INTO `pci_motherboard` (`id_motherboard`, `generation`, `slot`, `count`) VALUES
(9, 3, 16, 1),
(9, 3, 1, 3),
(9, 3, 16, 2),
(9, 3, 4, 2),
(10, 2, 1, 2),
(10, 3, 16, 1),
(11, 3, 16, 1),
(11, 3, 1, 2),
(13, 2, 16, 1),
(13, 1, 1, 1),
(14, 3, 16, 1),
(14, 2, 1, 1),
(15, 3, 16, 2),
(15, 3, 1, 3),
(15, 3, 4, 1),
(16, 3, 16, 2),
(16, 3, 1, 3),
(16, 3, 4, 1),
(17, 3, 16, 1),
(17, 3, 1, 2),
(18, 3, 16, 3),
(18, 3, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `pci_x_rom`
--

CREATE TABLE `pci_x_rom` (
  `id_interface_memory` int(11) NOT NULL,
  `x_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `power`
--

CREATE TABLE `power` (
  `id` int(11) NOT NULL,
  `firm` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `watt` int(11) NOT NULL,
  `count_sata` int(11) NOT NULL,
  `count_molex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `power`
--

INSERT INTO `power` (`id`, `firm`, `model`, `watt`, `count_sata`, `count_molex`) VALUES
(1, 'Cooler Master', 'B400', 400, 4, 3),
(2, 'Aerocool', 'KCAS-700', 700, 7, 4),
(3, 'Crown', 'CM-PS450W', 450, 2, 3),
(4, 'Chieftec', 'GPS-700A8', 700, 6, 2),
(5, 'Aerocool', 'VX-600', 600, 4, 3),
(6, 'Zalman', 'ZM700-TX', 700, 5, 3),
(7, 'GameMax', 'GE-500', 500, 4, 3),
(8, 'GameMax', 'GM-600', 600, 6, 3),
(9, 'Chieftec', 'GPS-650A8', 650, 6, 2),
(10, 'Aerocool', 'Gold Miner', 2000, 4, 9);

-- --------------------------------------------------------

--
-- Структура таблиці `power_videocard`
--

CREATE TABLE `power_videocard` (
  `id_power` int(11) NOT NULL,
  `count_contact` int(11) NOT NULL,
  `count_loop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `power_videocard`
--

INSERT INTO `power_videocard` (`id_power`, `count_contact`, `count_loop`) VALUES
(1, 6, 1),
(1, 8, 1),
(2, 6, 2),
(4, 6, 2),
(4, 8, 1),
(5, 6, 2),
(5, 8, 1),
(6, 8, 4),
(7, 8, 1),
(8, 8, 2),
(9, 6, 2),
(9, 8, 2),
(10, 8, 16);

-- --------------------------------------------------------

--
-- Структура таблиці `ram`
--

CREATE TABLE `ram` (
  `id` int(11) NOT NULL,
  `firm` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `mhz` int(11) NOT NULL,
  `type_memory` int(11) NOT NULL,
  `destiny` varchar(50) NOT NULL,
  `memory` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `ram`
--

INSERT INTO `ram` (`id`, `firm`, `model`, `mhz`, `type_memory`, `destiny`, `memory`) VALUES
(1, 'Patriot', 'Viper', 2400, 4, 'pc', 8192),
(2, 'Kingston', 'HyperX Fury Black', 2400, 4, 'pc', 8192),
(3, 'Kingston', 'KVR16N11/8', 1600, 3, 'pc', 8192),
(4, 'Team Elite', 'TED48G2400C1601', 2400, 4, 'pc', 8192),
(5, 'Goodram', 'GR2400D464L17S/4G', 2400, 4, 'pc', 4096),
(6, 'Goodram', 'IR-R2400D464L15S/8G', 2400, 4, 'pc', 8192),
(7, 'Goodram', 'GR1333D364L9/8G', 1333, 3, 'pc', 8192),
(8, 'Goodram', 'GR800D264L6/2G', 800, 2, 'pc', 2048),
(9, 'Kingston', 'KVR24N17S6/4', 2400, 4, 'pc', 4096),
(10, 'Transcend', 'JM1600KLH-4G', 1600, 3, 'pc', 4096);

-- --------------------------------------------------------

--
-- Структура таблиці `ram_motherboard`
--

CREATE TABLE `ram_motherboard` (
  `id_motherboard` int(11) NOT NULL,
  `count_ddr1` int(11) NOT NULL,
  `count_ddr2` int(11) NOT NULL,
  `count_ddr3` int(11) NOT NULL,
  `count_ddr4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `ram_motherboard`
--

INSERT INTO `ram_motherboard` (`id_motherboard`, `count_ddr1`, `count_ddr2`, `count_ddr3`, `count_ddr4`) VALUES
(9, 0, 0, 0, 4),
(10, 0, 0, 0, 2),
(11, 0, 0, 0, 2),
(12, 0, 0, 0, 4),
(13, 0, 0, 2, 0),
(14, 0, 0, 2, 0),
(15, 0, 0, 0, 4),
(16, 0, 0, 0, 4),
(17, 0, 0, 0, 4),
(18, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Структура таблиці `rom`
--

CREATE TABLE `rom` (
  `id` int(11) NOT NULL,
  `firm` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `memory` int(11) NOT NULL,
  `technology` varchar(10) NOT NULL,
  `formfactor` varchar(10) NOT NULL,
  `power` int(11) NOT NULL,
  `weight` float NOT NULL,
  `long` float NOT NULL,
  `width` float NOT NULL,
  `thickness` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `rom`
--

INSERT INTO `rom` (`id`, `firm`, `model`, `memory`, `technology`, `formfactor`, `power`, `weight`, `long`, `width`, `thickness`) VALUES
(3, 'Western Digital', 'WD5000LPLX', 500, 'HDD', '2.5', 2, 92, 100.2, 69.85, 7),
(4, 'Kingston', 'SSDNow A400', 120, 'SSD', '2.5', 2, 41, 100, 70, 7),
(5, 'Samsung', '960 Pro series', 2048, 'SSD M.2', 'M.2', 6, 9, 22.15, 80.15, 2.38),
(6, 'Western Digital', 'WD5000AZRZ', 500, 'HDD', '3.5', 3, 450, 147, 101, 26.1),
(7, 'Western Digital', 'WD5000LPCX', 500, 'HDD', '2.5', 2, 90, 100.2, 69.95, 7),
(8, 'Toshiba', 'HDWD110UZSVA', 1024, 'HDD', '3.5', 7, 450, 147, 101.6, 26.1),
(9, 'Western Digital', 'WD101KFBX', 10240, 'HDD', '3.5', 6, 650, 147, 101.6, 26.1),
(10, 'ADATA', 'ASP600S3-64GM-C', 64, 'SSD', '2.5', 1, 48, 100.45, 69.85, 7),
(11, 'Kingston', 'SUV400S37', 120, 'SSD', '2.5', 1, 57, 100, 69.9, 7),
(12, 'Western Digital', 'WDS120G2G0A', 120, 'SSD', '2.5', 2, 32, 100, 69.85, 7),
(13, 'Samsung', 'MZ-V6E250BW', 250, 'SSD M.2', 'M.2', 5, 8, 80.15, 22.15, 2.38),
(14, 'Western Digital', 'WDS240G2G0B', 240, 'SSD M.2', 'M.2', 3, 7, 80, 22, 1.5),
(15, 'Samsung', 'MZ-N6E500BW', 500, 'SSD M.2', 'M.2', 4, 8, 80.15, 22.15, 2.38);

-- --------------------------------------------------------

--
-- Структура таблиці `sata_motherboard`
--

CREATE TABLE `sata_motherboard` (
  `id_motherboard` int(11) NOT NULL,
  `generation` double NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `sata_motherboard`
--

INSERT INTO `sata_motherboard` (`id_motherboard`, `generation`, `count`) VALUES
(9, 3, 6),
(10, 3, 4),
(11, 3, 6),
(12, 3, 4),
(13, 2, 2),
(13, 3, 2),
(14, 3, 4),
(15, 3, 6),
(16, 3, 6),
(17, 3, 6),
(18, 3, 7);

-- --------------------------------------------------------

--
-- Структура таблиці `socket`
--

CREATE TABLE `socket` (
  `id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `socket`
--

INSERT INTO `socket` (`id`, `title`) VALUES
(2, '1151'),
(3, 'AM4'),
(4, '1156'),
(5, '1155'),
(6, 'AM3+'),
(7, 'FM2+'),
(8, 'FM2'),
(9, '1150'),
(10, '2066');

-- --------------------------------------------------------

--
-- Структура таблиці `ssd`
--

CREATE TABLE `ssd` (
  `id_rom` int(11) NOT NULL,
  `read` double NOT NULL,
  `write` double NOT NULL,
  `dead_time` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL,
  `type_flash_memory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `ssd`
--

INSERT INTO `ssd` (`id_rom`, `read`, `write`, `dead_time`, `type`, `type_flash_memory`) VALUES
(4, 500, 320, '1000000', 'SSD', 1),
(5, 3500, 2100, '1500000', 'M.2', 2),
(10, 430, 70, '1000000', 'SSD', 2),
(11, 550, 350, '1000000', 'SSD', 1),
(12, 540, 310, '1000000', 'SSD', 1),
(13, 3200, 1500, '1500000', 'M.2', 3),
(14, 545, 430, '1000000', 'M.2', 3),
(15, 550, 520, '1500000', 'M.2', 4);

-- --------------------------------------------------------

--
-- Структура таблиці `type_flash_memory`
--

CREATE TABLE `type_flash_memory` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `type_flash_memory`
--

INSERT INTO `type_flash_memory` (`id`, `title`) VALUES
(1, 'TLC'),
(2, 'V-NAND (MLC)'),
(3, '3D V-NAND TLC'),
(4, 'V-NAND TLC');

-- --------------------------------------------------------

--
-- Структура таблиці `type_memory_ram`
--

CREATE TABLE `type_memory_ram` (
  `id` int(11) NOT NULL,
  `generation` double NOT NULL,
  `title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `type_memory_ram`
--

INSERT INTO `type_memory_ram` (`id`, `generation`, `title`) VALUES
(1, 1, 'DDR'),
(2, 2, 'DDR'),
(3, 3, 'DDR'),
(4, 4, 'DDR');

-- --------------------------------------------------------

--
-- Структура таблиці `type_memory_videocard`
--

CREATE TABLE `type_memory_videocard` (
  `id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `generation` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `type_memory_videocard`
--

INSERT INTO `type_memory_videocard` (`id`, `title`, `generation`) VALUES
(10, 'DDR', 1),
(11, 'DDR', 2),
(12, 'DDR', 3),
(13, 'GDDR', 5);

-- --------------------------------------------------------

--
-- Структура таблиці `usb_motherboard`
--

CREATE TABLE `usb_motherboard` (
  `id_motherboard` int(11) NOT NULL,
  `generation` double NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `usb_motherboard`
--

INSERT INTO `usb_motherboard` (`id_motherboard`, `generation`, `count`) VALUES
(9, 3.1, 4),
(9, 2, 4),
(10, 2, 4),
(10, 3, 2),
(11, 2, 2),
(11, 3, 4),
(12, 3, 4),
(12, 2, 2),
(13, 2, 4),
(13, 3, 2),
(14, 2, 4),
(14, 3, 2),
(15, 2, 3),
(15, 3, 4),
(16, 2, 2),
(17, 3, 4),
(17, 2, 2),
(18, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'derevogreb', 'ee4cc8d2b9361c0c57b14559df648656'),
(4, 'w', 'w');

-- --------------------------------------------------------

--
-- Структура таблиці `videocard`
--

CREATE TABLE `videocard` (
  `id` int(11) NOT NULL,
  `firm` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `memory_mhz` int(11) NOT NULL,
  `core_mhz` int(11) NOT NULL,
  `count_cooler` int(11) NOT NULL,
  `memory` int(11) NOT NULL,
  `count_hdmi` int(11) NOT NULL,
  `count_vga` int(11) NOT NULL,
  `count_display_port` int(11) NOT NULL,
  `memory_bit` int(11) NOT NULL,
  `type_memory` int(11) NOT NULL,
  `generation_pci` double NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `videocard`
--

INSERT INTO `videocard` (`id`, `firm`, `model`, `memory_mhz`, `core_mhz`, `count_cooler`, `memory`, `count_hdmi`, `count_vga`, `count_display_port`, `memory_bit`, `type_memory`, `generation_pci`, `slot`) VALUES
(16, 'GeForce', 'GTX1060', 8000, 1506, 1, 6144, 4, 0, 1, 192, 13, 3, 16),
(17, 'Asus GeForce', 'GTX 1050 ', 7008, 1354, 1, 2048, 2, 0, 1, 128, 13, 3, 16),
(18, 'MSI', 'GeForce GTX 1070 Ti', 8008, 1683, 2, 8192, 4, 0, 1, 256, 13, 3, 16),
(19, 'MSI', 'GeForce GT710', 1600, 954, 0, 1024, 1, 1, 1, 64, 12, 2, 16),
(20, 'MSI', 'GeForce GT 1030', 6008, 1265, 0, 2048, 1, 0, 1, 64, 13, 3, 16),
(21, 'Asus', 'Radeon R7 240', 1800, 770, 1, 4096, 1, 1, 1, 128, 12, 3, 16),
(22, 'Asus', 'Radeon RX Vega 64', 945, 1590, 3, 8192, 2, 0, 2, 2048, 13, 3, 16),
(23, 'Asus', 'Radeon RX 560', 7000, 1176, 2, 4096, 1, 0, 1, 128, 13, 3, 16),
(24, 'Zotac', 'GeForce GT 710', 1600, 954, 0, 1024, 1, 1, 1, 64, 12, 2, 16),
(25, 'Zotac', 'GeForce GT 730', 1066, 700, 1, 4096, 1, 0, 2, 128, 12, 2, 16);

-- --------------------------------------------------------

--
-- Структура таблиці `wifi_motherboard`
--

CREATE TABLE `wifi_motherboard` (
  `id_motherboard` int(11) NOT NULL,
  `title_wifi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `wifi_motherboard`
--

INSERT INTO `wifi_motherboard` (`id_motherboard`, `title_wifi`) VALUES
(15, 'Wi-Fi 802.11ac'),
(16, 'ASUS 2x2 Wi-Fi 802.11 a/b/g/n/ac & Bluetooth v4.2'),
(18, 'Asus Wi-Fi GO! module');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `additional_power_videocard`
--
ALTER TABLE `additional_power_videocard`
  ADD KEY `additional_power_videocard_fk0` (`id_videocard`);

--
-- Індекси таблиці `admin`
--
ALTER TABLE `admin`
  ADD KEY `admin_fk0` (`id_user`);

--
-- Індекси таблиці `connect_cpu`
--
ALTER TABLE `connect_cpu`
  ADD KEY `connect_cpu_fk0` (`id_power`);

--
-- Індекси таблиці `connect_motherboard`
--
ALTER TABLE `connect_motherboard`
  ADD KEY `connect_motherboard_fk0` (`id_power`);

--
-- Індекси таблиці `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpu_fk0` (`type_ram`),
  ADD KEY `cpu_fk1` (`socket`);

--
-- Індекси таблиці `cpu_graphic`
--
ALTER TABLE `cpu_graphic`
  ADD KEY `cpu_graphic_fk0` (`id_cpu`);

--
-- Індекси таблиці `hdd`
--
ALTER TABLE `hdd`
  ADD KEY `hdd_fk0` (`id_rom`);

--
-- Індекси таблиці `image_cpu`
--
ALTER TABLE `image_cpu`
  ADD KEY `image_cpu_fk0` (`id_cpu`);

--
-- Індекси таблиці `image_gpu`
--
ALTER TABLE `image_gpu`
  ADD KEY `image_gpu_fk0` (`id_gpu`);

--
-- Індекси таблиці `image_motherboard`
--
ALTER TABLE `image_motherboard`
  ADD KEY `image_motherboard_fk0` (`id_mb`);

--
-- Індекси таблиці `image_power`
--
ALTER TABLE `image_power`
  ADD KEY `image_power_fk0` (`id_power`);

--
-- Індекси таблиці `image_ram`
--
ALTER TABLE `image_ram`
  ADD KEY `image_ram_fk0` (`id_ram`);

--
-- Індекси таблиці `image_rom`
--
ALTER TABLE `image_rom`
  ADD KEY `image_rom_fk0` (`id_rom`);

--
-- Індекси таблиці `interface_memory`
--
ALTER TABLE `interface_memory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interface_memory_fk0` (`id_rom`);

--
-- Індекси таблиці `moderator`
--
ALTER TABLE `moderator`
  ADD KEY `moderator_fk0` (`id_user`);

--
-- Індекси таблиці `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motherboard_fk0` (`socket`);

--
-- Індекси таблиці `pci_motherboard`
--
ALTER TABLE `pci_motherboard`
  ADD KEY `pci_motherboard_fk0` (`id_motherboard`);

--
-- Індекси таблиці `pci_x_rom`
--
ALTER TABLE `pci_x_rom`
  ADD KEY `pci_x_rom_fk0` (`id_interface_memory`);

--
-- Індекси таблиці `power`
--
ALTER TABLE `power`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `power_videocard`
--
ALTER TABLE `power_videocard`
  ADD KEY `power_videocard_fk0` (`id_power`);

--
-- Індекси таблиці `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ram_fk0` (`type_memory`);

--
-- Індекси таблиці `ram_motherboard`
--
ALTER TABLE `ram_motherboard`
  ADD KEY `ram_motherboard_fk0` (`id_motherboard`);

--
-- Індекси таблиці `rom`
--
ALTER TABLE `rom`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `sata_motherboard`
--
ALTER TABLE `sata_motherboard`
  ADD KEY `sata_motherboard_fk0` (`id_motherboard`);

--
-- Індекси таблиці `socket`
--
ALTER TABLE `socket`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `ssd`
--
ALTER TABLE `ssd`
  ADD KEY `ssd_fk0` (`id_rom`),
  ADD KEY `ssd_fk1` (`type_flash_memory`);

--
-- Індекси таблиці `type_flash_memory`
--
ALTER TABLE `type_flash_memory`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `type_memory_ram`
--
ALTER TABLE `type_memory_ram`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `type_memory_videocard`
--
ALTER TABLE `type_memory_videocard`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `usb_motherboard`
--
ALTER TABLE `usb_motherboard`
  ADD KEY `usb_motherboard_fk0` (`id_motherboard`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Індекси таблиці `videocard`
--
ALTER TABLE `videocard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videocard_fk0` (`type_memory`);

--
-- Індекси таблиці `wifi_motherboard`
--
ALTER TABLE `wifi_motherboard`
  ADD KEY `wifi_motherboard_fk0` (`id_motherboard`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблиці `interface_memory`
--
ALTER TABLE `interface_memory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблиці `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблиці `power`
--
ALTER TABLE `power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблиці `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `rom`
--
ALTER TABLE `rom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблиці `socket`
--
ALTER TABLE `socket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблиці `type_flash_memory`
--
ALTER TABLE `type_flash_memory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `type_memory_ram`
--
ALTER TABLE `type_memory_ram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `type_memory_videocard`
--
ALTER TABLE `type_memory_videocard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблиці `videocard`
--
ALTER TABLE `videocard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `additional_power_videocard`
--
ALTER TABLE `additional_power_videocard`
  ADD CONSTRAINT `additional_power_videocard_fk0` FOREIGN KEY (`id_videocard`) REFERENCES `videocard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_fk0` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `connect_cpu`
--
ALTER TABLE `connect_cpu`
  ADD CONSTRAINT `connect_cpu_fk0` FOREIGN KEY (`id_power`) REFERENCES `power` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `connect_motherboard`
--
ALTER TABLE `connect_motherboard`
  ADD CONSTRAINT `connect_motherboard_fk0` FOREIGN KEY (`id_power`) REFERENCES `power` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `cpu_fk0` FOREIGN KEY (`type_ram`) REFERENCES `type_memory_ram` (`id`),
  ADD CONSTRAINT `cpu_fk1` FOREIGN KEY (`socket`) REFERENCES `socket` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `cpu_graphic`
--
ALTER TABLE `cpu_graphic`
  ADD CONSTRAINT `cpu_graphic_fk0` FOREIGN KEY (`id_cpu`) REFERENCES `cpu` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `hdd`
--
ALTER TABLE `hdd`
  ADD CONSTRAINT `hdd_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `image_cpu`
--
ALTER TABLE `image_cpu`
  ADD CONSTRAINT `image_cpu_fk0` FOREIGN KEY (`id_cpu`) REFERENCES `cpu` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `image_gpu`
--
ALTER TABLE `image_gpu`
  ADD CONSTRAINT `image_gpu_fk0` FOREIGN KEY (`id_gpu`) REFERENCES `videocard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `image_motherboard`
--
ALTER TABLE `image_motherboard`
  ADD CONSTRAINT `image_motherboard_fk0` FOREIGN KEY (`id_mb`) REFERENCES `motherboard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `image_power`
--
ALTER TABLE `image_power`
  ADD CONSTRAINT `image_power_fk0` FOREIGN KEY (`id_power`) REFERENCES `power` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `image_ram`
--
ALTER TABLE `image_ram`
  ADD CONSTRAINT `image_ram_fk0` FOREIGN KEY (`id_ram`) REFERENCES `ram` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `image_rom`
--
ALTER TABLE `image_rom`
  ADD CONSTRAINT `image_rom_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `interface_memory`
--
ALTER TABLE `interface_memory`
  ADD CONSTRAINT `interface_memory_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `moderator`
--
ALTER TABLE `moderator`
  ADD CONSTRAINT `moderator_fk0` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `motherboard`
--
ALTER TABLE `motherboard`
  ADD CONSTRAINT `motherboard_fk0` FOREIGN KEY (`socket`) REFERENCES `socket` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `pci_motherboard`
--
ALTER TABLE `pci_motherboard`
  ADD CONSTRAINT `pci_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `pci_x_rom`
--
ALTER TABLE `pci_x_rom`
  ADD CONSTRAINT `pci_x_rom_fk0` FOREIGN KEY (`id_interface_memory`) REFERENCES `interface_memory` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `power_videocard`
--
ALTER TABLE `power_videocard`
  ADD CONSTRAINT `power_videocard_fk0` FOREIGN KEY (`id_power`) REFERENCES `power` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `ram`
--
ALTER TABLE `ram`
  ADD CONSTRAINT `ram_fk0` FOREIGN KEY (`type_memory`) REFERENCES `type_memory_ram` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `ram_motherboard`
--
ALTER TABLE `ram_motherboard`
  ADD CONSTRAINT `ram_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `sata_motherboard`
--
ALTER TABLE `sata_motherboard`
  ADD CONSTRAINT `sata_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `ssd`
--
ALTER TABLE `ssd`
  ADD CONSTRAINT `ssd_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom` (`id`),
  ADD CONSTRAINT `ssd_fk1` FOREIGN KEY (`type_flash_memory`) REFERENCES `type_flash_memory` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `usb_motherboard`
--
ALTER TABLE `usb_motherboard`
  ADD CONSTRAINT `usb_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `videocard`
--
ALTER TABLE `videocard`
  ADD CONSTRAINT `videocard_fk0` FOREIGN KEY (`type_memory`) REFERENCES `type_memory_videocard` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `wifi_motherboard`
--
ALTER TABLE `wifi_motherboard`
  ADD CONSTRAINT `wifi_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
