-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: sst
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Categoria_Productos`
--
create database sst;
use sst;

DROP TABLE IF EXISTS `Categoria_Productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categoria_Productos` (
  `idCat_Prod` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idCat_Prod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categoria_Productos`
--

LOCK TABLES `Categoria_Productos` WRITE;
/*!40000 ALTER TABLE `Categoria_Productos` DISABLE KEYS */;
INSERT INTO `Categoria_Productos` VALUES (1,'Articulo'),(2,'Decorado');
/*!40000 ALTER TABLE `Categoria_Productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Productos`
--

DROP TABLE IF EXISTS `Productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Productos` (
  `idarticulo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` tinytext,
  `Precio` decimal(6,2) DEFAULT NULL,
  `idCat_Prod` int(11) NOT NULL,
  `nimagen` tinytext,
  PRIMARY KEY (`idarticulo`),
  UNIQUE KEY `idarticulo_UNIQUE` (`idarticulo`),
  KEY `fk_Productos_Categoria Productos1_idx` (`idCat_Prod`),
  CONSTRAINT `fk_Productos_Categoria Productos1` FOREIGN KEY (`idCat_Prod`) REFERENCES `Categoria_Productos` (`idCat_Prod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Productos`
--

LOCK TABLES `Productos` WRITE;
/*!40000 ALTER TABLE `Productos` DISABLE KEYS */;
INSERT INTO `Productos` VALUES 
(1,'Defensa delantera','Personalizable con varios colores.Recomendada Para Scania R, R2, Streamline y Nextgen.',600.00,1,'defensa.jpg'),
(2,'Foco Auxiliar Led Hella','Ofrece gran alcance.',250.00,1,'HELLA_Offroad_Luminator_LED.jpg'),
(3,'Tapon cromado','Tapon Cromado para los tornillos de las ruedas.El diametro compatible es de 32mm',20.00,1,'tapon_rueda.jpg'),
(4,'Weeda','Scania R490 Streamline Normal 6x2 Pais: Paises bajos.',0.00,2,'scania_weeda.jpg'),
(5,'J&J Transport','Scania Serie 4 164L 580 V8 6x4 Pais: Paises bajos.',0.00,2,'scania_jjtransport.jpg'),
(6,'Ravon Thermo Express','Scania S520 V8 Highline 4X2 Pais: Francia.',0.00,2,'scania_ravon.jpeg'),
(7,'Scania Miguel','Scania 4 R 164L 580',0.00,2,'ets2_00011.JPG'),(9,'Logo Scania','Logo.',20.00,1,'logo_scania.jpg');
/*!40000 ALTER TABLE `Productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  `direccion` varchar(9) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `telefono` int(9) DEFAULT NULL,
  `poblacion` varchar(45) NOT NULL,
  `cod_postal` int(11) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  UNIQUE KEY `idUsuarios_UNIQUE` (`idUsuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES 
(1,'admin','admininstrador',NULL,'admin@admin','1234','sst','0',0,'Sueca',NULL,NULL,NULL,'admin'),
(2,'user','usuario',NULL,'user@user','1234','c/','0',0,'Sueca',NULL,NULL,NULL,'user');
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Voloracions`
--

DROP TABLE IF EXISTS `Voloracions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Voloracions` (
  `Productos_idarticulo` int(11) NOT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Voloracion` int(11) DEFAULT NULL,
  `Comentario` tinytext,
  KEY `fk_Voloracions_Productos1_idx` (`Productos_idarticulo`),
  KEY `fk_Voloracions_Usuarios1_idx` (`Usuarios_idUsuarios`),
  CONSTRAINT `fk_Voloracions_Productos1` FOREIGN KEY (`Productos_idarticulo`) REFERENCES `Productos` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Voloracions_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `Usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Voloracions`
--

LOCK TABLES `Voloracions` WRITE;
/*!40000 ALTER TABLE `Voloracions` DISABLE KEYS */;
/*!40000 ALTER TABLE `Voloracions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-28 13:24:39
