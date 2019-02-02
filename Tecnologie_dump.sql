drop database if exists Tecnologie;
create database Tecnologie;
use Tecnologie;

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
-- Table structure for table `Cart`
--

DROP TABLE IF EXISTS `Cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `Cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cart`
--

LOCK TABLES `Cart` WRITE;
/*!40000 ALTER TABLE `Cart` DISABLE KEYS */;
INSERT INTO `Cart` VALUES (1);
/*!40000 ALTER TABLE `Cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CartItem`
--

DROP TABLE IF EXISTS `CartItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `CartItem` (
  `idProduct` int(10) NOT NULL,
  `idCart` int(10) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `CartidFK_idx` (`idCart`),
  KEY `ProductFK_idx` (`idProduct`),
  CONSTRAINT `CartidFK` FOREIGN KEY (`idCart`) REFERENCES `cart` (`id`),
  CONSTRAINT `ProductFK` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CartItem`
--

LOCK TABLES `CartItem` WRITE;
/*!40000 ALTER TABLE `CartItem` DISABLE KEYS */;
INSERT INTO `CartItem` VALUES (1,1,1),(2,1,3),(3,1,4);
/*!40000 ALTER TABLE `CartItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('cerrino97@yahoo.it','$2y$10$IpqXVYo0Dq8U9dAhHg13ReDlvDMfrGHzZuRuwZrxB8oGA7qof4VuW','2018-12-27 23:34:28');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'product-01.jpg','Cappotto Doppiopetto','uomo',39.99),(2,'product-02.jpg','Giubbotto Velluto','donna',29.99),(3,'product-03.jpg','Maglia Con Cappuccio','uomo',25.95),(4,'product-04.jpg','Giubbino Con Cappuccio','donna',49.95),(5,'product-05.jpg','Bermuda Paperbag Con Bottoni','donna',39.95),(6,'product-06.jpg','Giubbotto Imbottito','uomo',59.95),(7,'product-07.jpg','Giubbotto Scamosciato','uomo',39.95),(8,'product-08.jpg','Gonna Plissè','donna',19.95),(9,'product-09.jpg','Pullover Sottile In Lana','uomo',29.95),(10,'product-10.jpg','Top Basic In Maglia','donna',19.95),(11,'product-11.jpg','Fouldard Con Stampa Animalier','donna',9.95),(12,'product-12.jpg','Custodia Con Stampa Animalier','donna',7.95),(13,'product-13.jpg','Portachiavi Animale','donna',5.95),(14,'product-14.jpg','Braccialetto Con Perline Colorate','uomo',9.95),(15,'product-15.jpg','Braccialetto Con Design Abbinato','uomo',9.95);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specifica_prodottos`
--

DROP TABLE IF EXISTS `specifica_prodottos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `specifica_prodottos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_dir` varchar(45) NOT NULL,
  `id_prodotto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkprodotto_idx` (`id_prodotto`),
  CONSTRAINT `fkprodotto` FOREIGN KEY (`id_prodotto`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specifica_prodottos`
--

LOCK TABLES `specifica_prodottos` WRITE;
/*!40000 ALTER TABLE `specifica_prodottos` DISABLE KEYS */;
INSERT INTO `specifica_prodottos` VALUES (4,'product-01-detail-01.jpg',1),(6,'product-01-detail-02.jpg',1),(7,'product-01-detail-03.jpg',1),(9,'product-02-detail-01.jpg',2),(10,'product-02-detail-02.jpg',2),(11,'product-02-detail-03.jpg',2),(12,'product-03-detail-01.jpg',3),(13,'product-03-detail-02.jpg',3),(14,'product-03-detail-03.jpg',3),(15,'product-04-detail-01.jpg',4),(16,'product-04-detail-02.jpg',4),(17,'product-04-detail-03.jpg',4),(18,'product-05-detail-01.jpg',5),(19,'product-05-detail-02.jpg',5),(20,'product-05-detail-03.jpg',5),(21,'product-06-detail-01.jpg',6),(22,'product-06-detail-02.jpg',6),(23,'product-06-detail-03.jpg',6),(24,'product-07-detail-01.jpg',7),(25,'product-07-detail-02.jpg',7),(26,'product-07-detail-03.jpg',7),(27,'product-08-detail-01.jpg',8),(28,'product-08-detail-02.jpg',8),(29,'product-08-detail-03.jpg',8),(30,'product-09-detail-01.jpg',9),(31,'product-09-detail-02.jpg',9),(32,'product-09-detail-03.jpg',9),(33,'product-10-detail-01.jpg',10),(34,'product-10-detail-02.jpg',10),(35,'product-10-detail-03.jpg',10),(36,'product-11-detail-01.jpg',11),(37,'product-11-detail-02.jpg',11),(38,'product-11-detail-03.jpg',11),(39,'product-12-detail-01.jpg',12),(40,'product-12-detail-02.jpg',12),(41,'product-12-detail-03.jpg',12),(42,'product-13-detail-01.jpg',13),(43,'product-13-detail-02.jpg',13),(44,'product-13-detail-03.jpg',13),(45,'product-14-detail-01.jpg',14),(46,'product-14-detail-02.jpg',14),(47,'product-14-detail-03.jpg',14);
/*!40000 ALTER TABLE `specifica_prodottos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Angelo','cerrino97@yahoo.it',NULL,'$2y$10$p52wDAO5XV4L2w9V1iyOoeYAgEpHv1e.8zMSNi95oLzdEwWXCFVe2','xG4cgM1YtEYggDAeUZJnLrai8jOlGbmnHIfR3rjQP8IdCUXFQ7Jvu2mXGpzq','2018-12-27 22:41:36','2018-12-27 22:41:36','Admin'),(2,'Test','test.test@gmail.com',NULL,'$2y$10$PjhFzi/vMWJIulI40hdCuu4Ru6XoG/0gbSzLQUljEFBt.TrnGdM.S',NULL,'2019-01-21 14:13:48','2019-01-21 14:13:48',NULL),(3,'andrea','shiny@gmail.com',NULL,'$2y$10$IxCFlFJN6hvbl.kvLOfGhOJnbOWzKNfrLAJpybC9WPbu6NB66sY46',NULL,'2019-01-21 14:13:53','2019-01-21 14:13:53',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-22 16:42:51

DROP TABLE IF EXISTS blogs;
CREATE TABLE blogs(
  ID integer unsigned not null primary key auto_increment,
  nome varchar(255) not null,
  img_dir varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  data_inserimento timestamp,
  IDusers integer unsigned NOT NULL,
  constraint articolo_users foreign key(IDusers) references users(ID) on update cascade
);

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `tecnologie`.`blogs` (`ID`, `nome`, `img_dir`, `description`, `data_inserimento`, `IDusers`) VALUES ('1', '8 Inspiring Ways to Wear Dresses in the Winter', 'blog-04.jpg', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius', '2019-01-21 00:00:01', '1');
INSERT INTO `tecnologie`.`blogs` (`ID`, `nome`, `img_dir`, `description`, `data_inserimento`, `IDusers`) VALUES ('2', 'The Great Big List of Men’s Gifts for the Holidays', 'blog-05.jpg', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius', '2019-01-31 00:00:01', '2');
INSERT INTO `tecnologie`.`blogs` (`ID`, `nome`, `img_dir`, `description`, `data_inserimento`, `IDusers`) VALUES ('3', '5 Winter-to-Spring Fashion Trends to Try Now', 'blog-06.jpg', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius', '2019-02-02 00:00:01', '1');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

drop table if exists comments;
create table comments(
	ID integer unsigned not null primary key auto_increment,
    commento text not null,
    nome varchar(32) not null,
    email varchar(32) not null,
    stelle enum('1','2','3','4','5') not null,
    IDusers integer unsigned not null,
    IDblogs integer unsigned not null,
    constraint recensione_blogs foreign key (IDblogs) references blogs(ID) on update cascade,
    constraint recensione_users foreign key (IDusers) references users(ID) on update cascade
);

alter table `comments` disable keys;
INSERT INTO `tecnologie`.`comments` (`ID`, `commento`, `nome`, `email`, `stelle`, `IDusers`, `IDblogs`) VALUES ('1', 'Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos', 'Ariana Grande', 'email@email.com', '5', '1', '1');
INSERT INTO `tecnologie`.`comments` (`ID`, `commento`, `nome`, `email`, `stelle`, `IDusers`, `IDblogs`) VALUES ('2', 'Sopra la terra le squille suonano il mattutino. Passa una nuvola candida e sola. L’Italia! L’Italia che vola! che passa in alto con tutte l’anime nostre com’una sola grande anima!', 'Giovanni Pascoli', 'email@email.com', '2', '2', '2');
INSERT INTO `tecnologie`.`comments` (`ID`, `commento`, `nome`, `email`, `stelle`, `IDusers`, `IDblogs`) VALUES ('3', 'Sempre caro mi fu quest’ermo colle, E questa siepe, che da tanta parte Dell’ultimo orizzonte il guardo esclude. Ma sedendo e mirando, interminati Spazi di là da quella, e sovrumani Silenzi, e profondissima quiete Io nel pensier mi fingo; ove per poco Il cor non si spaura. E come il vento Odo stormir tra queste piante, io quello Infinito silenzio a questa voce Vo comparando: e mi sovvien l’eterno,  E le morte stagioni, e la presente E viva, e il suon di lei. Così tra questa Immensità s’annega il pensier mio: E il naufragar m’è dolce in questo mare.', 'Giacomo Leopardi', 'email3@email.com', '4', '3', '3');
alter table `comments` enable keys;


select count(*) as num from blogs inner join comments where comments.IDblogs=blogs.id group by blogs.id