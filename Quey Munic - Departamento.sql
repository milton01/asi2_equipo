-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: altuve
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`id`, `nombre`) VALUES (1,'Ahuachapan'),(2,'Santa Ana'),(3,'Sonsonate'),(4,'La Libertad'),(5,'Cabanias'),(6,'Chalatenango'),(7,'Cuscatlan'),(9,'La Paz'),(10,'San Salvador'),(11,'San Vicente'),(12,'Morazan'),(13,'San Miguel'),(14,'Usulutan'),(15,'La Union');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `id_departamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_departamento_idx` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` (`id`, `nombre`, `id_departamento`) VALUES (1,'Apaneca','1'),(2,'Atiquizaya','1'),(3,'Concepcion de Ataco','1'),(4,'El Refugio','1'),(5,'Guaymango','1'),(6,'Acajutla','3'),(7,'Armenia','3'),(8,'Caluco','3'),(9,'Izalco','3'),(10,'Juayua','3'),(11,'Chalchuapa','2'),(12,'Coatepeque','2'),(13,'EL Congo','2'),(14,'Metapan','2'),(15,'Santa Ana','2'),(16,'Cinquera','5'),(17,'Ilobasco','5'),(18,'Jutiapa','5'),(19,'San Isidro','5'),(20,'Victoria','5'),(21,'Agua Caliente','6'),(22,'Arcatao','6'),(23,'Azacualpa','6'),(24,'La Palma','6'),(25,'La Reina','6'),(26,'Candelaria','7'),(27,'El Carmen','7'),(28,'El Rosario','7'),(29,'San Ramon','7'),(30,'Suchitoto','7'),(31,'Colon','4'),(32,'Comasagua','4'),(33,'Jayaque','4'),(34,'Jicalapa','4'),(35,'Santa Tecla','4'),(36,'Jerusalen','9'),(37,'Olocuilta','9'),(38,'San Juan Nonualco','9'),(39,'San Luis Talpa','9'),(40,'San Luis La Herradura','9'),(41,'Apopa','10'),(42,'Aguilares','10'),(43,'El Paisnal','10'),(44,'Guazapa','10'),(45,'Ilopango','10'),(46,'Apastepeque','11'),(47,'Guadalupe','11'),(48,'San Lorenzo','11'),(49,'San Sebastian','11'),(50,'San Vicente','11'),(51,'Arambala','12'),(52,'Chilanga','12'),(53,'Corinto','12'),(54,'Delicias de Concepcion','12'),(55,'Jocoro','12'),(56,'Carolina','13'),(57,'Chinameca','13'),(58,'Chirilagua','13'),(59,'Ciudad Barrios','13'),(60,'El Transito','13'),(61,'Alegria','14'),(62,'Berlin','14'),(63,'California','14'),(64,'El Triunfo','14'),(65,'Jucuapa','14'),(66,'Anamoros','15'),(67,'Bolivar','15'),(68,'Conchagua','15'),(69,'El Carmen','15'),(70,'El Sauce','15');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-05 22:15:12
