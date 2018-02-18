DROP TABLE IF EXISTS `keys`;

CREATE TABLE `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `keys` WRITE;
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`)
VALUES
	(1,0,'123456',0,0,0,NULL,0),
	(2,0,'324233',0,0,0,NULL,0);

/*!40000 ALTER TABLE `keys` ENABLE KEYS */;
UNLOCK TABLES;
