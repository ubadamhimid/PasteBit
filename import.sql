DROP DATABASE IF EXISTS `pastebit`;

CREATE DATABASE `pastebit`;

USE `pastebit`;

CREATE TABLE `posts` (
    `id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `taal` ENUM('HTML','CSS','PHP','SQL') NOT NULL,
    `titel` VARCHAR(255) NOT NULL,
    `code` TEXT NOT NULL,
    `datum` DATE NOT NULL,
    `wachtwoord` VARCHAR(255) NULL,
    `url` VARCHAR(10) NOT NULL
);

ALTER TABLE `posts` ADD `view` INT(255) NOT NULL ;
