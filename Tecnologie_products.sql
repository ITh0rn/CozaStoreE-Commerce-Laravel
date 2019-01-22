CREATE DATABASE  IF NOT EXISTS `Tecnologie` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `Tecnologie`;
-- MySQL dump 10.13  Distrib 8.0.12, for macos10.13 (x86_64)
--
-- Host: localhost    Database: Tecnologie
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `img_dir` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'product-01.jpg','Cappotto Doppiopetto','uomo',39.99),(2,'product-02.jpg','Giubbotto Velluto','donna',29.99),(3,'product-03.jpg','Maglia Con Cappuccio','uomo',25.95),(4,'product-04.jpg','Giubbino Con Cappuccio','donna',49.95),(5,'product-05.jpg','Bermuda Paperbag Con Bottoni','donna',39.95),(6,'product-06.jpg','Giubbotto Imbottito','uomo',59.95),(7,'product-07.jpg','Giubbotto Scamosciato','uomo',39.95),(8,'product-08.jpg','Gonna Plissè','donna',19.95),(9,'product-09.jpg','Pullover Sottile In Lana','uomo',29.95),(10,'product-10.jpg','Top Basic In Maglia','donna',19.95),(11,'product-11.jpg','Fouldard Con Stampa Animalier','donna',9.95),(12,'product-12.jpg','Custodia Con Stampa Animalier','donna',7.95),(13,'product-13.jpg','Portachiavi Animale','donna',5.95),(14,'product-14.jpg','Braccialetto Con Perline Colorate','uomo',9.95),(15,'product-15.jpg','Braccialetto Con Design Abbinato','uomo',9.95);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-22 16:34:33
