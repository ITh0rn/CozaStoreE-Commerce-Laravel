drop database if exists Tecnologie;
create database Tecnologie;
use Tecnologie;

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_categoria_UNIQUE` (`nome_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Giubbino','2019-02-07 16:21:53','2019-02-07 16:21:53'),(2,'Felpa','2019-02-09 10:53:02','2019-02-09 10:53:02');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'locale','text','Locale',0,1,1,1,1,0,NULL,12),(12,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(13,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(14,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(15,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(16,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(17,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(18,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(19,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(20,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(21,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(22,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(23,4,'id','text','Id',1,0,0,0,0,0,'{}',1),(24,4,'nome_categoria','text','Nome Categoria',1,1,1,1,1,1,'{}',2),(30,9,'id','text','Id',1,0,0,0,0,0,'{}',1),(31,9,'nome_sub','text','Nome Sub - Categoria',1,1,1,1,1,1,'{}',3),(32,9,'id_category','text','Id Category',1,1,1,0,1,0,'{}',2),(33,9,'created_at','timestamp','Aggiunta il',0,1,1,0,0,0,'{}',4),(34,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(35,9,'sub_category_belongsto_category_relationship','relationship','Categoria',0,1,1,1,1,1,'{\"model\":\"App\\\\categorie\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"id_category\",\"key\":\"id\",\"label\":\"nome_categoria\",\"pivot_table\":\"blogs\",\"pivot\":\"0\",\"taggable\":\"0\"}',6),(36,10,'id','text','Id',1,0,0,0,0,0,'{}',1),(37,10,'img_dir','image','Immagine',1,1,1,1,1,1,'{}',2),(38,10,'nome','text','Nome',1,1,1,1,1,1,'{}',3),(39,10,'gender','text','Sesso',1,1,1,1,1,1,'{\"options\":{\"1\":\"uomo\",\"2\":\"donna\"}}',4),(40,10,'price','text','Pre',1,1,1,1,1,1,'{}',5),(41,10,'id_subcategoria','text','Categoria',1,1,1,1,1,1,'{}',6),(42,10,'mini_descrizione','text','Mini Descrizione',1,1,1,1,1,1,'{}',7),(43,10,'grande_descrizione','text','Grande Descrizione',1,1,1,1,1,1,'{}',8),(44,10,'colore','text','Colore',1,1,1,1,1,1,'{}',9),(45,10,'dimensione','text','Dimensione',1,1,1,1,1,1,'{}',10),(46,10,'peso','text','Peso',1,1,1,1,1,1,'{}',11),(47,10,'materiale','text','Materiale',1,1,1,1,1,1,'{}',12),(48,10,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',13),(49,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',14),(50,10,'product_belongstomany_tagly_relationship','relationship','Taglie',0,1,1,1,1,1,'{\"model\":\"App\\\\taglie\",\"table\":\"taglies\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"taglia\",\"pivot_table\":\"taglie_prodottis\",\"pivot\":\"1\",\"taggable\":\"0\"}',15),(51,10,'product_belongsto_sub_category_relationship','relationship','Sub Categoria',0,1,1,1,1,1,'{\"model\":\"App\\\\sub_categorie\",\"table\":\"sub_categories\",\"type\":\"belongsTo\",\"column\":\"id_subcategoria\",\"key\":\"id\",\"label\":\"nome_sub\",\"pivot_table\":\"blogs\",\"pivot\":\"0\",\"taggable\":\"0\"}',16),(52,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(53,11,'img_dir','image','Immagine',1,1,1,1,1,1,'{}',3),(54,11,'id_prodotto','text','Id Prodotto',1,1,1,1,1,1,'{}',2),(55,11,'imagenum','text','Numero Immagine',1,1,1,1,1,1,'{}',4),(56,11,'created_at','timestamp','Inserito il:',0,1,1,1,0,1,'{}',5),(57,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(58,11,'specifica_prodotto_belongsto_product_relationship','relationship','Prodotto',0,1,1,1,1,1,'{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"id_prodotto\",\"key\":\"id\",\"label\":\"nome\",\"pivot_table\":\"blogs\",\"pivot\":\"0\",\"taggable\":\"0\"}',7);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(4,'categories','categories','Categoria','Categorie','voyager-list-add','App\\categorie',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-02-07 16:11:20','2019-02-07 16:11:20'),(9,'sub_categories','sub-categories','Sotto-Categoria','Sotto-Categorie','voyager-list','App\\sub_categorie',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-02-07 16:14:11','2019-02-07 16:26:06'),(10,'products','products','Prodotto','Prodotti','voyager-bag','App\\Product',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-02-07 16:19:13','2019-02-07 16:27:48'),(11,'specifica_prodottos','specifica-prodottos','Specifica Prodotto','Specifica Prodotti','voyager-camera','App\\Specifica_prodotto',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-02-07 16:35:47','2019-02-07 16:36:47');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2019-02-07 16:09:50','2019-02-07 16:09:50',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.settings.index',NULL),(11,1,'Hooks','','_self','voyager-hook',NULL,5,13,'2019-02-07 16:09:50','2019-02-07 16:09:50','voyager.hooks',NULL),(12,1,'Categorie','','_self','voyager-list-add',NULL,NULL,15,'2019-02-07 16:11:20','2019-02-07 16:11:20','voyager.categories.index',NULL),(14,1,'Sotto-Categorie','','_self','voyager-list',NULL,NULL,16,'2019-02-07 16:14:11','2019-02-07 16:14:11','voyager.sub-categories.index',NULL),(15,1,'Prodotti','','_self','voyager-bag',NULL,NULL,17,'2019-02-07 16:19:13','2019-02-07 16:19:13','voyager.products.index',NULL),(16,1,'Specifica Prodotti','','_self','voyager-camera',NULL,NULL,18,'2019-02-07 16:35:47','2019-02-07 16:35:47','voyager.specifica-prodottos.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2019-02-07 16:09:50','2019-02-07 16:09:50');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2018_12_17_214717_create_products_table',1),(24,'2019_01_14_094938_create_specifica_prodottos_table',1),(25,'2019_01_22_145538_create_sessions_table',1),(26,'2019_01_24_163856_create_blogs_table',1),(27,'2019_01_31_110356_create_categories_table',1),(28,'2019_01_31_155719_create_taglies_table',1),(29,'2019_01_31_160112_create_taglie_prodottis_table',1),(30,'2019_02_07_170409_create_sub_categories_table',1);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(27,1),(28,1),(29,1),(30,1),(31,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(2,'browse_bread',NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(3,'browse_database',NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(4,'browse_media',NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(5,'browse_compass',NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(6,'browse_menus','menus','2019-02-07 16:09:50','2019-02-07 16:09:50'),(7,'read_menus','menus','2019-02-07 16:09:50','2019-02-07 16:09:50'),(8,'edit_menus','menus','2019-02-07 16:09:50','2019-02-07 16:09:50'),(9,'add_menus','menus','2019-02-07 16:09:50','2019-02-07 16:09:50'),(10,'delete_menus','menus','2019-02-07 16:09:50','2019-02-07 16:09:50'),(11,'browse_roles','roles','2019-02-07 16:09:50','2019-02-07 16:09:50'),(12,'read_roles','roles','2019-02-07 16:09:50','2019-02-07 16:09:50'),(13,'edit_roles','roles','2019-02-07 16:09:50','2019-02-07 16:09:50'),(14,'add_roles','roles','2019-02-07 16:09:50','2019-02-07 16:09:50'),(15,'delete_roles','roles','2019-02-07 16:09:50','2019-02-07 16:09:50'),(16,'browse_users','users','2019-02-07 16:09:50','2019-02-07 16:09:50'),(17,'read_users','users','2019-02-07 16:09:50','2019-02-07 16:09:50'),(18,'edit_users','users','2019-02-07 16:09:50','2019-02-07 16:09:50'),(19,'add_users','users','2019-02-07 16:09:50','2019-02-07 16:09:50'),(20,'delete_users','users','2019-02-07 16:09:50','2019-02-07 16:09:50'),(21,'browse_settings','settings','2019-02-07 16:09:50','2019-02-07 16:09:50'),(22,'read_settings','settings','2019-02-07 16:09:50','2019-02-07 16:09:50'),(23,'edit_settings','settings','2019-02-07 16:09:50','2019-02-07 16:09:50'),(24,'add_settings','settings','2019-02-07 16:09:50','2019-02-07 16:09:50'),(25,'delete_settings','settings','2019-02-07 16:09:50','2019-02-07 16:09:50'),(26,'browse_hooks',NULL,'2019-02-07 16:09:50','2019-02-07 16:09:50'),(27,'browse_categories','categories','2019-02-07 16:11:20','2019-02-07 16:11:20'),(28,'read_categories','categories','2019-02-07 16:11:20','2019-02-07 16:11:20'),(29,'edit_categories','categories','2019-02-07 16:11:20','2019-02-07 16:11:20'),(30,'add_categories','categories','2019-02-07 16:11:20','2019-02-07 16:11:20'),(31,'delete_categories','categories','2019-02-07 16:11:20','2019-02-07 16:11:20'),(37,'browse_sub_categories','sub_categories','2019-02-07 16:14:11','2019-02-07 16:14:11'),(38,'read_sub_categories','sub_categories','2019-02-07 16:14:11','2019-02-07 16:14:11'),(39,'edit_sub_categories','sub_categories','2019-02-07 16:14:11','2019-02-07 16:14:11'),(40,'add_sub_categories','sub_categories','2019-02-07 16:14:11','2019-02-07 16:14:11'),(41,'delete_sub_categories','sub_categories','2019-02-07 16:14:11','2019-02-07 16:14:11'),(42,'browse_products','products','2019-02-07 16:19:13','2019-02-07 16:19:13'),(43,'read_products','products','2019-02-07 16:19:13','2019-02-07 16:19:13'),(44,'edit_products','products','2019-02-07 16:19:13','2019-02-07 16:19:13'),(45,'add_products','products','2019-02-07 16:19:13','2019-02-07 16:19:13'),(46,'delete_products','products','2019-02-07 16:19:13','2019-02-07 16:19:13'),(47,'browse_specifica_prodottos','specifica_prodottos','2019-02-07 16:35:47','2019-02-07 16:35:47'),(48,'read_specifica_prodottos','specifica_prodottos','2019-02-07 16:35:47','2019-02-07 16:35:47'),(49,'edit_specifica_prodottos','specifica_prodottos','2019-02-07 16:35:47','2019-02-07 16:35:47'),(50,'add_specifica_prodottos','specifica_prodottos','2019-02-07 16:35:47','2019-02-07 16:35:47'),(51,'delete_specifica_prodottos','specifica_prodottos','2019-02-07 16:35:47','2019-02-07 16:35:47');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_comments`
--

DROP TABLE IF EXISTS `product_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_prodotto` int(10) unsigned NOT NULL,
  `commento` varchar(400) NOT NULL,
  `voto` enum('1','2','3','4','5') NOT NULL,
  `id_utente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_comment_idx` (`id_prodotto`),
  KEY `fk_user_comment_idx` (`id_utente`),
  KEY `fk_comment_user_idx` (`id_utente`),
  CONSTRAINT `fk_product_comment` FOREIGN KEY (`id_prodotto`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_utente_comment` FOREIGN KEY (`id_utente`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_comments`
--

LOCK TABLES `product_comments` WRITE;
/*!40000 ALTER TABLE `product_comments` DISABLE KEYS */;
INSERT INTO `product_comments` VALUES (15,1,'Non c\'è male, ottimo prodotto A+','5',1),(16,1,'Mi aspettavo di meglio, qualità scadente','2',2),(17,1,'Perfetto, tempi di consegna veloci','4',1),(18,1,'Consegna rapida e veloce, prodotto conforme A+','5',1),(19,1,'Prodotto scadente, taglie non corrispondenti al vero','2',2),(20,1,'Niente di eccezionale, mi aspettavo qualcosa di meglio','3',1),(27,4,'Veramente soddisfatto A++','5',1),(28,3,'A+,  prodotto bello elegante e di qualità','5',1),(29,3,'Sono un cliente abituale, mi aspettavo decisamente di meglio...peccato','2',1);
/*!40000 ALTER TABLE `product_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_dir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `id_subcategoria` int(10) unsigned NOT NULL,
  `mini_descrizione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grande_descrizione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colore` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materiale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subcategories_idx` (`id_subcategoria`),
  CONSTRAINT `fk_subcategories` FOREIGN KEY (`id_subcategoria`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'products/February2019/siMxT0aqedcC8BkdUrJ5.jpg','Cappotto Doppiopetto','uomo',39.99,1,'Giubbotto Lungo Doppiopetto da uomo','Giubbotto Lungo Doppiopetto da uomo','Nero','50x50x80','1.8','100% Lana','2019-02-07 16:29:00','2019-02-07 16:31:28'),(2,'products/February2019/jPv41WfFvmmnXQeZ1pXE.jpg','Giubbotto Velluto','donna',29.99,2,'Giubbotto in Velluto color Marrone, adatto per ogni stagione. Elegante pratico e versatile','Giubbotto in Velluto color Marrone, adatto per ogni stagione. Elegante pratico e versatile','Marrone','40x40x60','1.3','100% Lana','2019-02-09 10:47:00','2019-02-09 10:47:38'),(3,'products/February2019/6SzEVlOakrxsJgtUCpQ0.jpg','Maglia Con Cappuccio','uomo',25.95,3,'Felpa con cappuccio, maniche lunghe (fantasia)','Felpa con cappuccio, maniche lunghe (fantasia)','Viola','60x30x30','0.88','100% Sintetico','2019-02-09 10:54:00','2019-02-09 10:54:35'),(4,'products/February2019/Q7duIM3UlbIoBfHz86qm.jpg','Giubbino Con Cappuccio','donna',49.95,4,'Giubbino con cappuccio stile bomberino, 100 grammi','Giubbino con cappuccio stile bomberino, 100 grammi','Blue Notte','50x50x80','1.3','100% Sintetico','2019-02-09 10:59:00','2019-02-09 10:59:44');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2019-02-07 16:07:32','2019-02-07 16:07:32'),(2,'user','Normal User','2019-02-07 16:09:50','2019-02-07 16:09:50');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID','','','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)','','','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specifica_prodottos`
--

DROP TABLE IF EXISTS `specifica_prodottos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `specifica_prodottos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_dir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prodotto` int(10) unsigned NOT NULL,
  `imagenum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `specifica_prodottos_id_prodotto_foreign` (`id_prodotto`),
  CONSTRAINT `specifica_prodottos_id_prodotto_foreign` FOREIGN KEY (`id_prodotto`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specifica_prodottos`
--

LOCK TABLES `specifica_prodottos` WRITE;
/*!40000 ALTER TABLE `specifica_prodottos` DISABLE KEYS */;
INSERT INTO `specifica_prodottos` VALUES (1,'specifica-prodottos/February2019/p6diohP7K5abfkx2TF0Q.jpg',1,1,'2019-02-07 16:37:03','2019-02-07 16:37:03'),(2,'specifica-prodottos/February2019/8YCwzlKbOktEAMunvhcM.jpg',1,2,'2019-02-07 16:37:13','2019-02-07 16:37:13'),(3,'specifica-prodottos/February2019/ARfNHXqLB8TYPB1vCc4D.jpg',1,3,'2019-02-07 16:37:26','2019-02-07 16:37:26'),(4,'specifica-prodottos/February2019/LihjI8YUC58nwXWqQ0Jt.jpg',2,1,'2019-02-09 10:48:11','2019-02-09 10:48:11'),(5,'specifica-prodottos/February2019/mHq2o0yBWb6h3rkx8m1s.jpg',2,2,'2019-02-09 10:48:29','2019-02-09 10:48:29'),(6,'specifica-prodottos/February2019/4Ns9YHVCxusMv14x3KDH.jpg',2,3,'2019-02-09 10:48:42','2019-02-09 10:48:42'),(7,'specifica-prodottos/February2019/rvZTcUioIXkDY1e3SQAU.jpg',3,1,'2019-02-09 10:54:48','2019-02-09 10:54:48'),(8,'specifica-prodottos/February2019/A7sl2Pm7HxwuL5nu2rhk.jpg',3,2,'2019-02-09 10:55:07','2019-02-09 10:55:07'),(9,'specifica-prodottos/February2019/ah7OlVuVdi2RuTcC0wgc.jpg',3,3,'2019-02-09 10:55:19','2019-02-09 10:55:19'),(10,'specifica-prodottos/February2019/CIAbAaOxf0xIHzbKcBQc.jpg',4,1,'2019-02-09 10:59:59','2019-02-09 10:59:59'),(11,'specifica-prodottos/February2019/eyRjBc9NScvz2YgbvTEH.jpg',4,2,'2019-02-09 11:00:14','2019-02-09 11:00:14'),(12,'specifica-prodottos/February2019/xMRk087kT5quiFJ9xUvu.jpg',4,3,'2019-02-09 11:00:27','2019-02-09 11:00:27');
/*!40000 ALTER TABLE `specifica_prodottos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_sub_UNIQUE` (`nome_sub`),
  KEY `sub_categories_id_category_foreign` (`id_category`),
  CONSTRAINT `sub_categories_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categories`
--

LOCK TABLES `sub_categories` WRITE;
/*!40000 ALTER TABLE `sub_categories` DISABLE KEYS */;
INSERT INTO `sub_categories` VALUES (1,'Lungo',1,'2019-02-07 16:26:16','2019-02-07 16:26:16'),(2,'Tessuto',1,'2019-02-09 10:46:43','2019-02-09 10:46:43'),(3,'Maniche Lunghe',2,'2019-02-09 10:53:14','2019-02-09 10:53:14'),(4,'Bomberino',1,'2019-02-09 10:56:57','2019-02-09 10:56:57');
/*!40000 ALTER TABLE `sub_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taglie_prodottis`
--

DROP TABLE IF EXISTS `taglie_prodottis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `taglie_prodottis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `taglie_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_taglie_prodotto_id_idx` (`product_id`),
  KEY `fk_taglie_taglie_id_idx` (`taglie_id`),
  CONSTRAINT `fk_taglie_prodotto_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_taglie_taglie_id` FOREIGN KEY (`taglie_id`) REFERENCES `taglies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taglie_prodottis`
--

LOCK TABLES `taglie_prodottis` WRITE;
/*!40000 ALTER TABLE `taglie_prodottis` DISABLE KEYS */;
INSERT INTO `taglie_prodottis` VALUES (1,1,3),(2,1,4),(3,1,5),(4,2,2),(5,2,3),(6,2,6),(7,3,3),(8,3,4),(9,3,5),(10,4,2);
/*!40000 ALTER TABLE `taglie_prodottis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taglies`
--

DROP TABLE IF EXISTS `taglies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `taglies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `taglia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taglies`
--

LOCK TABLES `taglies` WRITE;
/*!40000 ALTER TABLE `taglies` DISABLE KEYS */;
INSERT INTO `taglies` VALUES (2,'XS'),(3,'M'),(4,'L'),(5,'XL'),(6,'XXS'),(7,'XXL');
/*!40000 ALTER TABLE `taglies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Angelo','angelo.dalfonso@student.univaq.it','users/default.png',NULL,'$2y$10$Bu0eE/kjssGbmmQk6y2F/ObRovk9idOymrufHNDgC3oJlcyL0ioC6','y2T5JepuIf3duurxKoU41cEeVebA0tz5BG6iSmGpsVTkBUhWSaIjqkVArLQm',NULL,'2019-02-07 16:06:40','2019-02-07 16:07:32'),(2,2,'Test','testin123@gmail.com','users/default.png',NULL,'$2y$10$s3SlI3C3oNqr7SqbjdFLDexKsgyDEu1CTz48nqfRSF0aHKD2XggwS','Uktm7Vk22S0kbqiq0H3Wd6Gfr2ZkG0gDjzG2TC7XSRNNNhSZfbGY9zaofOJw',NULL,'2019-02-07 16:38:03','2019-02-07 16:38:03');
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
INSERT INTO `tecnologie`.`comments` (`ID`, `commento`, `nome`, `email`, `stelle`, `IDusers`, `IDblogs`) VALUES ('3', 'Sempre caro mi fu quest’ermo colle, E questa siepe, che da tanta parte Dell’ultimo orizzonte il guardo esclude. Ma sedendo e mirando, interminati Spazi di là da quella, e sovrumani Silenzi, e profondissima quiete Io nel pensier mi fingo; ove per poco Il cor non si spaura. E come il vento Odo stormir tra queste piante, io quello Infinito silenzio a questa voce Vo comparando: e mi sovvien l’eterno,  E le morte stagioni, e la presente E viva, e il suon di lei. Così tra questa Immensità s’annega il pensier mio: E il naufragar m’è dolce in questo mare.', 'Giacomo Leopardi', 'email3@email.com', '4', '2', '1');
alter table `comments` enable keys;

drop table if exists addresses;
create table addresses(
	ID integer unsigned not null primary key auto_increment,
    citta varchar(32) not null,
    provincia varchar(32) not null,
    cap varchar(32) not null,
    via varchar(32) not null,
    civico varchar(32) not null,
    IDusers integer unsigned not null,
    constraint indirizzi_users foreign key (IDusers) references users(ID) on update cascade
);

INSERT INTO `tecnologie`.`addresses` (`ID`, `citta`, `provincia`, `cap`, `via`, `civico`, `IDusers`) VALUES ('1', 'Castel di Ieri', 'L\'Aquila', '67020', 'San pio', '9', '2');
INSERT INTO `tecnologie`.`addresses` (`ID`, `citta`, `provincia`, `cap`, `via`, `civico`, `IDusers`) VALUES ('2', 'L\'Aquila', 'AQ', '67100', 'Corrado IV', '40', '2');


drop table if exists orders;
create table orders(
	ID integer unsigned not null primary key auto_increment,
    prodotti integer not null,
    sconto integer not null,
    totale float not null,
    IDusers integer unsigned not null,
    IDaddresses integer unsigned not null,
    constraint orders_users foreign key (IDusers) references users(ID) on update cascade,
    constraint orders_addresses foreign key (IDaddresses) references addresses(ID) on update cascade
);

INSERT INTO `tecnologie`.`orders` (`ID`, `prodotti`, `sconto`, `totale`, `IDusers`, `IDaddresses`) VALUES ('1', '2', '0', '69.98', '2', '1');

drop table if exists boughtproducts;
create table boughtproducts(
	ID integer unsigned not null primary key auto_increment,
	img_dir	varchar(255) NOT NULL,
	nome varchar(255) NOT NULL,
	gender varchar(255) NOT NULL,
	price float NOT NULL,
	id_subcategoria int(10) unsigned NOT NULL,
	mini_descrizione varchar(255) NOT NULL,
	grande_descrizione varchar(255) NOT NULL,
	colore	varchar(255) NOT NULL,
	dimensione	varchar(255) NOT NULL,
	peso varchar(255) NOT NULL,
	materiale varchar(255) NOT NULL,
    created_at timestamp NULL DEFAULT NULL,
	updated_at timestamp NULL DEFAULT NULL
);

INSERT INTO `tecnologie`.`boughtproducts` (`ID`, `img_dir`, `nome`, `gender`, `price`, `id_subcategoria`, `mini_descrizione`, `grande_descrizione`, `colore`, `dimensione`, `peso`, `materiale`, `created_at`, `updated_at`) VALUES ('1', 'products/February2019/siMxT0aqedcC8BkdUrJ5.jpg', 'Cappotto Doppiopetto', 'uomo', '39.99', '1', 'Giubbotto Lungo Doppiopetto da uomo', 'Giubbotto Lungo Doppiopetto da uomo', 'Nero', '50x50x80', '1.8', '100% Lana', '2019-02-07 17:29:00', '2019-02-07 17:31:28');
INSERT INTO `tecnologie`.`boughtproducts` (`ID`, `img_dir`, `nome`, `gender`, `price`, `id_subcategoria`, `mini_descrizione`, `grande_descrizione`, `colore`, `dimensione`, `peso`, `materiale`, `created_at`, `updated_at`) VALUES ('2', 'products/February2019/jPv41WfFvmmnXQeZ1pXE.jpg', 'Giubbotto Velluto', 'donna', '29.99', '2', 'Giubbotto in Velluto color Marrone, adatto per ogni stagione. Elegante pratico e versatile', 'Giubbotto in Velluto color Marrone, adatto per ogni stagione. Elegante pratico e versatile', 'Marrone', '40x40x60', '1.3', '100% Lana', '2019-02-09 11:47:00', '2019-02-09 11:47:38');
