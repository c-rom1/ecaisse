/*
SQLyog Community v11.52 (32 bit)
MySQL - 5.7.19 : Database - ecaisse
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecaisse` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ecaisse`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` bigint(19) unsigned NOT NULL,
  `libelle` varchar(45) NOT NULL,
  `prix_unitaire` double unsigned NOT NULL,
  `tva_id` int(11) NOT NULL,
  `famille_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ARTICLE_PRODUIT1_idx` (`famille_id`),
  KEY `fk_produit_tva1_idx` (`tva_id`),
  CONSTRAINT `fk_article_famille1` FOREIGN KEY (`famille_id`) REFERENCES `famille` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_tva1` FOREIGN KEY (`tva_id`) REFERENCES `tva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `article` */

insert  into `article`(`id`,`code`,`libelle`,`prix_unitaire`,`tva_id`,`famille_id`) values (1,2121,'25454',454,1,3);

/*Table structure for table `facture` */

DROP TABLE IF EXISTS `facture`;

CREATE TABLE `facture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` bigint(20) unsigned NOT NULL,
  `date` date DEFAULT NULL,
  `total_ht` double DEFAULT NULL,
  `total_tva` double DEFAULT NULL,
  `total_ttc` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `facture` */

/*Table structure for table `facture_paiement` */

DROP TABLE IF EXISTS `facture_paiement`;

CREATE TABLE `facture_paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `montant` double DEFAULT NULL,
  `facture_id` int(10) unsigned NOT NULL,
  `mode_paiement_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_facture_paiement_paiement1_idx` (`mode_paiement_id`),
  KEY `fk_facture_paiement_facture1` (`facture_id`),
  CONSTRAINT `fk_facture_paiement_facture1` FOREIGN KEY (`facture_id`) REFERENCES `facture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_facture_paiement_paiement1` FOREIGN KEY (`mode_paiement_id`) REFERENCES `mode_paiement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `facture_paiement` */

/*Table structure for table `famille` */

DROP TABLE IF EXISTS `famille`;

CREATE TABLE `famille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` bigint(19) unsigned NOT NULL,
  `libelle` varchar(45) NOT NULL,
  `tva_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_PRODUIT_TVA_idx` (`tva_id`),
  CONSTRAINT `fk_famille_tva1` FOREIGN KEY (`tva_id`) REFERENCES `tva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `famille` */

insert  into `famille`(`id`,`code`,`libelle`,`tva_id`) values (3,21454,'TESTEcvcv',1),(4,5,'gfhgfh',1),(5,123,'test3',1),(6,126,'test6',1),(7,127,'test7',1),(8,128,'test8',1),(9,129,'test9',1),(10,130,'test10',1),(11,131,'test11',1),(12,132,'test12',1),(13,13,'test13',1),(14,14,'test14',1);

/*Table structure for table `mode_paiement` */

DROP TABLE IF EXISTS `mode_paiement`;

CREATE TABLE `mode_paiement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mode_paiement` */

/*Table structure for table `tva` */

DROP TABLE IF EXISTS `tva`;

CREATE TABLE `tva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `taux` double NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tva` */

insert  into `tva`(`id`,`type`,`taux`,`date_deb`,`date_fin`) values (1,'NORMAL',0.2,'2017-09-19',NULL);

/*Table structure for table `utilisateur` */

DROP TABLE IF EXISTS `utilisateur`;

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) NOT NULL,
  `username_canonical` varchar(180) NOT NULL,
  `email` varchar(180) NOT NULL,
  `email_canonical` varchar(180) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B392FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1D1C63B3A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_1D1C63B3C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `utilisateur` */

insert  into `utilisateur`(`id`,`username`,`username_canonical`,`email`,`email_canonical`,`enabled`,`salt`,`password`,`last_login`,`confirmation_token`,`password_requested_at`,`roles`) values (2,'admin','admin','admin','admin',1,NULL,'$2y$13$wJgxs6D.eqxYPAqD20.Li.0ibDAFJW/V5ixz8O55M6QlRkHRq6542','2017-10-10 16:07:26',NULL,NULL,'a:0:{}');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
