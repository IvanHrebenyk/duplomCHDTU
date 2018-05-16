CREATE TABLE `videocard` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firm` varchar(40) NOT NULL,
	`model` varchar(40) NOT NULL,
	`memory_mhz` INT NOT NULL,
	`core_mhz` INT NOT NULL,
	`count_cooler` INT NOT NULL,
	`memory` INT NOT NULL,
	`memory_ddr` INT NOT NULL,
	`count_hdmi` INT NOT NULL,
	`count_vga` INT NOT NULL,
	`count_display_port` INT NOT NULL,
	`memory_bit` INT NOT NULL,
	`type_memory` INT NOT NULL,
	`generation_pci` FLOAT NOT NULL,
	`slot` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `type_memory_videocard` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`generation_ddr` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `additional_power_videocard` (
	`id_videocard` INT NOT NULL,
	`count_need_loop` INT NOT NULL,
	`count_contact_loop` INT NOT NULL
);

CREATE TABLE `type_memory_ram` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`generation` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ram` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firm` varchar(50) NOT NULL,
	`model` varchar(50) NOT NULL,
	`mhz` INT NOT NULL,
	`type_memory` INT NOT NULL,
	`destiny` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `cpu` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firm` varchar(40) NOT NULL,
	`model` varchar(40) NOT NULL,
	`ghz` FLOAT NOT NULL,
	`type_ram` INT NOT NULL,
	`socket` INT NOT NULL,
	`power` INT NOT NULL,
	`command_set` varchar(10) NOT NULL,
	`cache` FLOAT NOT NULL,
	`level_cache` INT NOT NULL,
	`core` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `cpu_graphic` (
	`id_cpu` INT NOT NULL,
	`title_graphic` varchar(100) NOT NULL
);

CREATE TABLE `socket` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` varchar(10) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `motherboard` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firm` varchar(50) NOT NULL,
	`model` varchar(50) NOT NULL,
	`socket` INT NOT NULL,
	`count_ide` INT NOT NULL,
	`count_vga` INT NOT NULL,
	`count_hdmi` INT NOT NULL,
	`count_audio` INT NOT NULL,
	`speed_lan` FLOAT NOT NULL,
	`title_audio` varchar(70) NOT NULL,
	`count_dvi` INT NOT NULL,
	`count_memory_ram` INT NOT NULL,
	`count_contact_power_cpu` INT NOT NULL,
	`count_contact_power_mb` INT NOT NULL,
	`max_ram_mhz` INT NOT NULL,
	`formfactor` varchar(30) NOT NULL,
	`count_ps2_mouse` INT NOT NULL,
	`count_ps2_keyboard` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ram_motherboard` (
	`id_motherboard` INT NOT NULL,
	`count_ddr1` INT NOT NULL,
	`count_ddr2` INT NOT NULL,
	`count_ddr3` INT NOT NULL,
	`count_ddr4` INT NOT NULL
);

CREATE TABLE `pci_motherboard` (
	`id_motherboard` INT NOT NULL,
	`generation` FLOAT NOT NULL,
	`slot` INT NOT NULL,
	`count` INT NOT NULL
);

CREATE TABLE `wifi_motherboard` (
	`id_motherboard` INT NOT NULL,
	`title_wifi` varchar(50) NOT NULL
);

CREATE TABLE `usb_motherboard` (
	`id_motherboard` INT NOT NULL,
	`generation` FLOAT NOT NULL,
	`count` INT NOT NULL
);

CREATE TABLE `sata_motherboard` (
	`id_motherboard` INT NOT NULL,
	`generation` FLOAT NOT NULL,
	`count` INT NOT NULL
);

CREATE TABLE `power` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firm` varchar(40) NOT NULL,
	`model` varchar(40) NOT NULL,
	`watt` INT NOT NULL,
	`connect_mb` INT NOT NULL,
	`count_sata` INT NOT NULL,
	`count_molex` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `connect_motherboard` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type_atx` varchar(10) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `connect_cpu` (
	`id_power` INT NOT NULL,
	`count_contact` varchar(10) NOT NULL,
	`count_loop` INT NOT NULL
);

CREATE TABLE `power_videocard` (
	`id_power` INT NOT NULL,
	`count_contact` INT NOT NULL,
	`count_loop` INT NOT NULL
);

CREATE TABLE `rom` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firm` varchar(40) NOT NULL,
	`model` varchar(40) NOT NULL,
	`memory` INT NOT NULL,
	`technology` varchar(10) NOT NULL,
	`formfactor` varchar(10) NOT NULL,
	`power` INT NOT NULL,
	`weight` FLOAT NOT NULL,
	`long` FLOAT NOT NULL,
	`width` FLOAT NOT NULL,
	`thickness` FLOAT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `interface_memory` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_rom` INT NOT NULL,
	`title` varchar(10) NOT NULL,
	`generation` FLOAT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pci_x_rom` (
	`id_interface_memory` INT NOT NULL,
	`x_level` INT NOT NULL
);

CREATE TABLE `type_flash_memory` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` varchar(10) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ssd` (
	`id_rom` INT NOT NULL,
	`read` FLOAT NOT NULL,
	`write` FLOAT NOT NULL,
	`dead_time` varchar(20) NOT NULL,
	`type` varchar(5) NOT NULL,
	`type_flash_memory` INT NOT NULL
);

CREATE TABLE `hdd` (
	`id_rom` INT NOT NULL,
	`rpm` INT NOT NULL,
	`buffer` FLOAT NOT NULL,
	`noise` FLOAT NOT NULL,
	`speed_transfer` varchar(20) NOT NULL
);

CREATE TABLE `user` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`login` varchar(100) NOT NULL UNIQUE,
	`password` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `admin` (
	`id_user` INT NOT NULL
);

CREATE TABLE `moderator` (
	`id_user` INT NOT NULL
);

CREATE TABLE `image_cpu` (
	`id_cpu` INT NOT NULL,
	`path` TEXT NOT NULL
);

CREATE TABLE `image_motherboard` (
	`id_mb` INT NOT NULL,
	`path` TEXT NOT NULL
);

CREATE TABLE `image_power` (
	`id_power` INT NOT NULL,
	`path` TEXT NOT NULL
);

CREATE TABLE `image_ram` (
	`id_ram` INT NOT NULL,
	`path` TEXT NOT NULL
);

CREATE TABLE `image_rom` (
	`id_rom` INT NOT NULL,
	`path` TEXT NOT NULL
);

ALTER TABLE `videocard` ADD CONSTRAINT `videocard_fk0` FOREIGN KEY (`type_memory`) REFERENCES `type_memory_videocard`(`id`);

ALTER TABLE `additional_power_videocard` ADD CONSTRAINT `additional_power_videocard_fk0` FOREIGN KEY (`id_videocard`) REFERENCES `videocard`(`id`);

ALTER TABLE `ram` ADD CONSTRAINT `ram_fk0` FOREIGN KEY (`type_memory`) REFERENCES `type_memory_ram`(`id`);

ALTER TABLE `cpu` ADD CONSTRAINT `cpu_fk0` FOREIGN KEY (`type_ram`) REFERENCES `type_memory_ram`(`id`);

ALTER TABLE `cpu` ADD CONSTRAINT `cpu_fk1` FOREIGN KEY (`socket`) REFERENCES `socket`(`id`);

ALTER TABLE `cpu_graphic` ADD CONSTRAINT `cpu_graphic_fk0` FOREIGN KEY (`id_cpu`) REFERENCES `cpu`(`id`);

ALTER TABLE `motherboard` ADD CONSTRAINT `motherboard_fk0` FOREIGN KEY (`socket`) REFERENCES `socket`(`id`);

ALTER TABLE `ram_motherboard` ADD CONSTRAINT `ram_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard`(`id`);

ALTER TABLE `pci_motherboard` ADD CONSTRAINT `pci_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard`(`id`);

ALTER TABLE `wifi_motherboard` ADD CONSTRAINT `wifi_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard`(`id`);

ALTER TABLE `usb_motherboard` ADD CONSTRAINT `usb_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard`(`id`);

ALTER TABLE `sata_motherboard` ADD CONSTRAINT `sata_motherboard_fk0` FOREIGN KEY (`id_motherboard`) REFERENCES `motherboard`(`id`);

ALTER TABLE `power` ADD CONSTRAINT `power_fk0` FOREIGN KEY (`connect_mb`) REFERENCES `connect_motherboard`(`id`);

ALTER TABLE `connect_cpu` ADD CONSTRAINT `connect_cpu_fk0` FOREIGN KEY (`id_power`) REFERENCES `power`(`id`);

ALTER TABLE `power_videocard` ADD CONSTRAINT `power_videocard_fk0` FOREIGN KEY (`id_power`) REFERENCES `power`(`id`);

ALTER TABLE `interface_memory` ADD CONSTRAINT `interface_memory_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom`(`id`);

ALTER TABLE `pci_x_rom` ADD CONSTRAINT `pci_x_rom_fk0` FOREIGN KEY (`id_interface_memory`) REFERENCES `interface_memory`(`id`);

ALTER TABLE `ssd` ADD CONSTRAINT `ssd_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom`(`id`);

ALTER TABLE `ssd` ADD CONSTRAINT `ssd_fk1` FOREIGN KEY (`type_flash_memory`) REFERENCES `type_flash_memory`(`id`);

ALTER TABLE `hdd` ADD CONSTRAINT `hdd_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom`(`id`);

ALTER TABLE `admin` ADD CONSTRAINT `admin_fk0` FOREIGN KEY (`id_user`) REFERENCES `user`(`id`);

ALTER TABLE `moderator` ADD CONSTRAINT `moderator_fk0` FOREIGN KEY (`id_user`) REFERENCES `user`(`id`);

ALTER TABLE `image_cpu` ADD CONSTRAINT `image_cpu_fk0` FOREIGN KEY (`id_cpu`) REFERENCES `cpu`(`id`);

ALTER TABLE `image_motherboard` ADD CONSTRAINT `image_motherboard_fk0` FOREIGN KEY (`id_mb`) REFERENCES `motherboard`(`id`);

ALTER TABLE `image_power` ADD CONSTRAINT `image_power_fk0` FOREIGN KEY (`id_power`) REFERENCES `power`(`id`);

ALTER TABLE `image_ram` ADD CONSTRAINT `image_ram_fk0` FOREIGN KEY (`id_ram`) REFERENCES `ram`(`id`);

ALTER TABLE `image_rom` ADD CONSTRAINT `image_rom_fk0` FOREIGN KEY (`id_rom`) REFERENCES `rom`(`id`);

