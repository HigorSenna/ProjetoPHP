CREATE DATABASE  IF NOT EXISTS `teatro` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `teatro`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: teatro
-- ------------------------------------------------------
-- Server version	5.6.24-log

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
-- Table structure for table `lugares_peca`
--

DROP TABLE IF EXISTS `lugares_peca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugares_peca` (
  `ID_LUGAR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PECA` int(11) DEFAULT NULL,
  `QTD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_LUGAR`),
  KEY `fk_lugar_peca_idx` (`ID_PECA`),
  CONSTRAINT `fk_lugar_peca` FOREIGN KEY (`ID_PECA`) REFERENCES `pecas` (`ID_PECA`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares_peca`
--

LOCK TABLES `lugares_peca` WRITE;
/*!40000 ALTER TABLE `lugares_peca` DISABLE KEYS */;
INSERT INTO `lugares_peca` VALUES (28,52,100),(29,53,100),(30,54,100);
/*!40000 ALTER TABLE `lugares_peca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pecas`
--

DROP TABLE IF EXISTS `pecas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pecas` (
  `ID_PECA` int(11) NOT NULL AUTO_INCREMENT,
  `NM_PECA` varchar(45) NOT NULL,
  `DT_PECA` varchar(45) NOT NULL,
  `HR_PECA` varchar(45) NOT NULL,
  `DESC_PECA` varchar(45) NOT NULL,
  `CAMINHO_IMAGEM` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_PECA`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pecas`
--

LOCK TABLES `pecas` WRITE;
/*!40000 ALTER TABLE `pecas` DISABLE KEYS */;
INSERT INTO `pecas` VALUES (52,'As Filhas da Mãe','14/07','22:30','Peça de Teatro','../uploads/filhas-da-mae.jpg'),(53,'Corpo Santo','18/09','14:00','Peça de Teatro','../uploads/corpo_santo.jpg'),(54,'Saga Italiana','30/05','10:30','Peça de Teatro','../uploads/santo_imigrante.jpg');
/*!40000 ALTER TABLE `pecas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservas` (
  `ID_RESERVA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PECA` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `NUM_CADEIRA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_RESERVA`),
  KEY `fk_reserva_peca_idx` (`ID_PECA`),
  KEY `fk_reserva_usuario_idx` (`ID_USUARIO`),
  CONSTRAINT `fk_reserva_peca` FOREIGN KEY (`ID_PECA`) REFERENCES `pecas` (`ID_PECA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reserva_usuario` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
INSERT INTO `reservas` VALUES (16,52,16,53);
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NM_USUARIO` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `TELEFONE` varchar(45) DEFAULT NULL,
  `SENHA` varchar(45) NOT NULL,
  `TIPO_USUARIO` enum('adm','comum') DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (15,'a','a','a','a','a','adm'),(16,'Higor Senna','higorrebjfmg@gmail.com','158','(55) 8978-9863','158','comum'),(17,'Senna','senna@hotmail.com','b','b','b','comum');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-13 21:26:42
