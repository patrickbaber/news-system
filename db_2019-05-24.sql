# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.4-MariaDB-1:10.4.4+maria~bionic)
# Datenbank: db
# Erstellt am: 2019-05-24 08:57:36 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`)
VALUES
	(1,'Politik'),
	(2,'Sport'),
	(3,'Technologie'),
	(4,'Wirtschaft'),
	(6,'Politik'),
	(29,'Spaß');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `short_text` text CHARACTER SET utf8 DEFAULT NULL,
  `text` text CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(11) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `short_text`, `text`, `category_id`, `status`)
VALUES
	(2,'ERNEUT AKTUALISIERT','KURZTEXT AKTUALISIERT',NULL,NULL,NULL),
	(4,'ERNEUT AKTUALISIERT','KURZTEXT AKTUALISIERT',NULL,NULL,NULL),
	(5,'ERNEUT AKTUALISIERT','KURZTEXT AKTUALISIERT',NULL,NULL,NULL),
	(6,'1','2','3',29,1),
	(7,'Titel','Kurztext',NULL,NULL,NULL),
	(8,'asghdadhjk',NULL,NULL,NULL,NULL),
	(9,'Mein Titel','Mein Kurztext','Mein Text',3,1),
	(10,'Mein Titel','Mein Kurztext','Mein Text',3,1),
	(11,'Mein Titel','Mein Kurztext','Mein Text',3,1),
	(12,'Mein Titel','Mein Kurztext','Mein Text',3,1),
	(13,'Titel','Mein Kurztext','Mein Text',3,1),
	(14,'Mein super toller neuer Titel','Mein Kurztext','Mein Text',3,1),
	(15,'Mein super toller neuer Titel','Kurztext','Mein Text',3,1),
	(16,'Mein super toller neuer Titel','Kurztext','Mein super toller neuer Titel',3,1),
	(17,'Mein super toller neuer Titel','Kurztext','Text',29,1),
	(18,'Mein super toller neuer Titel','Kurztext','Text',29,1),
	(19,'Mein super toller neuer Titel','Kurztext','Text',29,1),
	(20,'Mein super toller neuer Titel','Kurztext','Text',29,0),
	(21,'Mein super toller neuer Titel','Kurztext','Text',29,1),
	(22,'Mein super toller neuer Titel','Kurztext','Text',29,1),
	(23,'Dies ist mein super toller News-Titel','Dies ist mein super toller Kurztext','Dies ist mein super toller Text',6,1),
	(24,'asdasdasd','adasdasd','adsad',4,0),
	(25,'asdasdasd!','adasdasd!','adsad!',1,1);

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
