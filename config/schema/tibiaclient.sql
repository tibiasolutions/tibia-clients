CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` char(5) NOT NULL,
  `plataform` ENUM('windows', 'linux') NOT NULL,
  `exe_url` varchar(100) NOT NULL,
  `zip_url` varchar(100) NOT NULL DEFAULT '',
  `downloads` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `version` (`version`)
) ENGINE=InnoDB;
