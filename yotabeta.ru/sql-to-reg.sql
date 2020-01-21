CREATE DATABASE reg;
CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );
 CREATE TABLE IF NOT EXISTS `comms` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pageid` varchar(50) NOT NULL,
 `username` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 `text` varchar(3000) NOT NULL,
 PRIMARY KEY (`id`)
 );
 CREATE TABLE IF NOT EXISTS `stats` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `newid` varchar(50) NOT NULL,
 `username` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 `text` varchar(3000) NOT NULL,
 PRIMARY KEY (`id`)
 );
ALTER TABLE `users` ADD `admin` BOOLEAN NOT NULL DEFAULT FALSE AFTER `trn_date`; 
ALTER TABLE `users` CHANGE `admin` `admin` TINYINT(1) NULL DEFAULT NULL;
