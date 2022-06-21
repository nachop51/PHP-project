/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.3.32-MariaDB-0ubuntu0.20.04.1 : Database - WebMarketCam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`WebMarketCam` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `WebMarketCam`;

/*Table structure for table `Categorias` */

DROP TABLE IF EXISTS `Categorias`;

CREATE TABLE `Categorias` (
  `idC` int(5) NOT NULL AUTO_INCREMENT,
  `nomC` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idC`),
  KEY `idC` (`idC`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `Categorias` */

insert  into `Categorias`(`idC`,`nomC`) values 
(1,'Cámaras'),
(2,'Flash'),
(3,'Baterías'),
(4,'Filtros'),
(5,'Tarjetas de memoria'),
(6,'Trípodes'),
(7,'Soportes'),
(8,'Extensor de baterías'),
(9,'Mochilas'),
(10,'Soportes para flash'),
(11,'Cámaras en oferta'),
(12,'Filtros en oferta'),
(13,'Soportes en oferta');

/*Table structure for table `Productos` */

DROP TABLE IF EXISTS `Productos`;

CREATE TABLE `Productos` (
  `idP` int(5) NOT NULL AUTO_INCREMENT,
  `marP` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descP` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `orP` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `preP` int(10) NOT NULL,
  `catP` int(3) NOT NULL,
  PRIMARY KEY (`idP`),
  KEY `idP` (`idP`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `Productos` */

insert  into `Productos`(`idP`,`marP`,`descP`,`orP`,`preP`,`catP`) values 
(1,'Nikon','Cámara digital de alta resolución y pantalla táctil','China',500,1),
(2,'Energizer','2 baterías de Litio','USA',6,3),
(3,'amazonbasics','Combo de 6 baterías de Litio','USA',15,3),
(4,'Kodak','Cámara digital, zoom óptico X4, pantalla LCD','USA',120,1),
(5,'Leica','Cámara','Alemania',1200,1),
(6,'Metz','Flash de cámara profesional','Alemania',300,2),
(8,'Marca de soportes','Soporte','China',20,7),
(14,'Chino','Flash para cámara','China',50,2),
(16,'Leica','Cámara digital, zoom óptico X8','Alemania',550,1),
(18,'Genius','Cámara WEB','China',25,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
