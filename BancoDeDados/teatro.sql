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
-- Table structure for table `administradores`
--

DROP TABLE IF EXISTS `administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administradores` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administradores`
--

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
INSERT INTO `administradores` VALUES (1,'a','a','senna');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares_peca`
--

LOCK TABLES `lugares_peca` WRITE;
/*!40000 ALTER TABLE `lugares_peca` DISABLE KEYS */;
INSERT INTO `lugares_peca` VALUES (25,49,100),(26,50,100),(27,51,100);
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pecas`
--

LOCK TABLES `pecas` WRITE;
/*!40000 ALTER TABLE `pecas` DISABLE KEYS */;
INSERT INTO `pecas` VALUES (49,'As Filhas da Mãe','14/07','14:00','Peça de Teatro','../uploads/filhas-da-mae.jpg'),(50,'Corpo Santo','14/07','17:00','Peça de Teatro','../uploads/corpo_santo.jpg'),(51,'Saga Italiana','14/07','22:00','Peça de Teatro','../uploads/santo_imigrante.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'5','151','178','818','81',NULL),(2,'56','181','818','18','81','comum'),(3,'sdhbsd','sdffasd','23','qwdqw','qeq',NULL),(4,'Testando','sduh','sduh','uhsu','h',NULL),(5,'weuweruweruiwerui','51','51','18','181',NULL),(6,'TESTE','sdsd','23','qw','dqw',NULL),(7,'ahahah','sdsd','5128','sdsd','ssdsd',NULL),(8,'saasd','asd','55','sdsd','jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj',NULL),(9,'asdyhasdd','dasdasd77','415','23234909','232342',NULL),(10,'SENNA','sas','5','3','5','adm'),(11,'Higor Senna Chaves','ahahah@gmail.com','a','(55) 8978-9863','a','comum'),(12,'b','b','b','b','b',NULL),(13,'c','c','c','c','c',NULL),(14,'d','d','d','d','d','comum');
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

-- Dump completed on 2016-06-13 17:36:57
