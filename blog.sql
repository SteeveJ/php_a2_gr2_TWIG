-- MySQL dump 10.15  Distrib 10.0.14-MariaDB, for osx10.9 (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	10.0.14-MariaDB

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'vvivhbkhkbkb','kjebfkjez',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0),(2,'ESRXDTCFYVGUBHJKNL?','RXDCTFGHVBJKNL?',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,0),(4,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(5,'zff','Mon nouveau titre',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(6,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(7,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(8,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(9,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(10,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(11,'zff','cz',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,0),(12,'jQueryUI 1.8.14 Autocomplete','zef fzefezfzef zefzf zefez fzef zef',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,2,1),(13,'jQueryUI 1.8.14 Autocomplete','zef fzefezfzef zefzf zefez fzef zef',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,2,1),(14,'ezfzefze','fzefzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','baracktocat.jpg',1,1),(15,'ezfzefze','fzefzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','baracktocat.jpg',1,1),(16,'jnzrjbebfezbf','jhzfejbezfbezibfezvfizevf',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','baracktocat.jpg',1,1),(17,'jnzrjbebfezbf','jhzfejbezfbezibfezvfizevf',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','baracktocat.jpg',1,1),(18,'dqfezqfzef','zefezfzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,1,1),(19,'dqfezqfzef','zefezfzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','Array',1,1),(20,'dqfezqfzef','zefezfzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','Array',1,1),(21,'dqfezqfzef','zefezfzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.jpg',1,1),(22,'dqfezqfzef','zefezfzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.jpg',1,1),(23,'dqfezqfzef','zefezfzefzef',1,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.jpg',1,1),(24,'dsvdsv','sdvsdv',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.copy.jpg',1,1),(25,'dsvdsv','sdvsdv',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.copy.jpg',1,1),(26,'dsvdsv','sdvsdv',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.copy.jpg',1,1),(27,'dsvdsv','sdvsdv',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.copy.jpg',1,1),(28,'dsvdsv','sdvsdv',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.copy.jpg',1,1),(29,'dsvdsv','sdvsdv',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/baracktocat.copy.jpg',1,1),(30,'jkbfeajbzkajbf kjzab','zeljfnzelfbn lzejfbnzekjfbnkzejbf',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/house_of_cards_1024x748.jpg',1,1),(31,'jkbfeajbzkajbf kjzab','zeljfnzelfbn lzejfbnzekjfbnkzejbf',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/house_of_cards_1024x748.jpg',1,1),(34,'ezfzefezfzefze','ezfzefezfzefez',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/edab9888df88a542d79f2c586c3390eb28a00e19.jpg',1,1),(35,'ezfzefezfzefze','ezfzefezfzefez',0,'0000-00-00 00:00:00','0000-00-00 00:00:00','uploads/cd8d8e3e81e15b9d8740f0fa49c2e191f9c5ea7d.jpg',1,1),(36,'zefzefzefezf','ezfzefzef',1,'2014-10-20 03:10:22','2014-10-20 03:10:22','uploads/article/1320415586abd8416ef1c3a444b3a7362759889e.jpg',1,1);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_tag` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_tag`
--

LOCK TABLES `article_tag` WRITE;
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
INSERT INTO `article_tag` VALUES (12,2),(8,2);
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'zefzefzef',NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'azdazdzef\n'),(2,'zefbrthrt'),(3,'POJIHUGYC\n');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','ROLE_ADMIN');
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

-- Dump completed on 2014-10-20 14:37:10
