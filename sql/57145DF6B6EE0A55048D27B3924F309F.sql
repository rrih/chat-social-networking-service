-- MySQL dump 10.13  Distrib 5.6.50, for Linux (x86_64)
--
-- Host: localhost    Database: heroku_3012b33fc1d1892
-- ------------------------------------------------------
-- Server version	5.6.50-log

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
-- Table structure for table `entries`
--

DROP TABLE IF EXISTS `entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entries`
--

LOCK TABLES `entries` WRITE;
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
/*!40000 ALTER TABLE `entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (71,71,1),(71,71,11),(71,71,21),(71,71,31),(71,21,41),(71,61,51),(71,61,61),(71,41,71),(71,81,81),(71,81,91),(71,81,101),(71,81,111),(71,71,121),(71,121,131),(71,121,141),(101,81,151),(71,141,161),(71,131,171),(111,141,181),(71,171,191),(121,171,201),(121,211,211),(121,11,221),(121,11,231),(121,211,241),(71,221,251),(71,221,261),(71,221,271),(71,221,281),(71,221,291),(71,221,301),(71,221,311),(71,221,321),(71,221,331),(71,221,341),(71,231,351),(71,231,361),(71,231,371),(71,231,381),(131,261,391),(71,261,401),(71,291,411),(131,301,421),(71,361,431),(71,361,441),(71,1,451),(71,11,461),(71,11,471),(221,11,481),(71,221,491),(131,191,501),(71,301,511);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,71,1,'テスト','2020-10-25 12:31:36','2020-10-25 12:31:36'),(11,71,1,'テスト','2020-10-25 12:32:16','2020-10-25 12:32:16'),(21,71,1,'テスト','2020-10-25 12:33:45','2020-10-25 12:33:45'),(31,71,1,'テスト','2020-10-25 12:52:17','2020-10-25 12:52:17'),(41,71,1,'うっわw','2020-10-25 12:52:41','2020-10-25 12:52:41'),(51,101,11,'やっほ^^','2020-10-25 17:44:07','2020-10-25 17:44:07'),(61,131,21,'nice to meet you!','2020-11-05 02:16:47','2020-11-05 02:16:47'),(71,131,21,'よっすー、rsklvだよ。管理人は元気？','2020-12-06 23:46:19','2020-12-06 23:46:19'),(81,131,21,'ほげえええ','2020-12-06 23:46:26','2020-12-06 23:46:26'),(91,71,41,'えええ M2\r\nテスト','2020-12-20 11:29:38','2020-12-20 11:29:38'),(101,71,51,'テストデータ投入','2021-01-06 02:23:40','2021-01-06 02:23:40'),(111,71,51,'死ぬ…死んでしまうぞ！きょうじゅろう！！！','2021-01-06 02:23:55','2021-01-06 02:23:55'),(121,261,61,'rsklv←fooooo','2021-01-06 02:27:00','2021-01-06 02:27:00');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` int(10) unsigned NOT NULL,
  `like_id` int(10) unsigned NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,1,1,1),(2,2,2,1),(3,2,2,0),(4,2,2,0),(5,2,2,0),(6,2,2,1),(7,2,2,1),(8,2,2,0),(9,2,2,0),(10,2,2,0);
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `text` varchar(1024) DEFAULT NULL,
  `like_count` int(10) unsigned DEFAULT '0',
  `dislike_count` int(10) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,71,'テスト',1,0,'2020-10-26 03:54:05','2020-10-26 03:54:37'),(11,71,'つらみがふかいね',5,0,'2020-10-30 02:35:47','2020-11-03 00:48:43'),(21,71,'あああああ',0,0,'2020-11-02 22:48:20','2020-11-02 22:48:20'),(31,71,'いいいい',0,0,'2020-11-02 22:48:31','2020-11-02 22:48:31'),(41,71,'うう',0,0,'2020-11-02 22:48:42','2020-11-02 22:48:42'),(51,71,'ええええ',0,0,'2020-11-02 22:48:53','2020-11-02 22:48:53'),(61,71,'かか',0,0,'2020-11-02 22:55:56','2020-11-02 22:55:56'),(71,71,'ふふ',0,0,'2020-11-02 22:56:06','2020-11-02 22:56:06'),(81,71,'ほわいと',0,0,'2020-11-02 22:56:20','2020-11-02 22:56:20'),(91,71,'t',0,0,'2020-11-02 22:56:36','2020-11-02 22:56:36'),(101,71,'gk',0,0,'2020-11-02 22:56:47','2020-11-02 22:56:47'),(111,71,'き',0,0,'2020-11-02 22:56:56','2020-11-02 22:56:56'),(121,71,'び',0,0,'2020-11-02 22:57:07','2020-11-02 22:57:07'),(131,71,'と',0,0,'2020-11-02 22:57:18','2020-11-02 22:57:18'),(141,71,'に',0,0,'2020-11-02 22:57:29','2020-11-02 22:57:29'),(151,71,'ゔぃ',0,0,'2020-11-02 22:57:50','2020-11-02 22:57:50'),(161,71,'こ',0,0,'2020-11-02 22:58:01','2020-11-02 22:58:01'),(171,71,'はあ',0,0,'2020-11-02 22:58:14','2020-11-02 22:58:14'),(181,71,'c',0,0,'2020-11-02 22:58:23','2020-11-02 22:58:23'),(191,71,'http',1,0,'2020-11-02 22:58:39','2020-12-06 23:45:18'),(201,71,'hi',0,0,'2020-11-02 22:58:51','2020-11-02 22:58:51'),(211,71,'れ',0,0,'2020-11-02 22:59:16','2020-11-02 22:59:16'),(221,131,'暇だーー',12,2,'2020-11-05 02:17:03','2020-11-16 15:21:37'),(231,71,'ええ復活してる。。',0,0,'2020-11-17 04:17:21','2020-11-17 04:17:21'),(241,71,'ClearDBマジでわからんな?\r\nたまに死んでる',0,0,'2020-11-17 10:09:12','2020-11-17 10:09:12'),(251,71,'きえええーーーーーーーー',0,0,'2020-12-04 04:28:38','2020-12-04 04:28:38'),(261,71,'toList()で取得した関連づいた配列\r\n$hogeFuga[\'Users\'][\'Posts\'] = \'aaaaaaaaa\';',0,0,'2020-12-19 10:57:04','2020-12-19 10:57:04'),(271,71,'卒論なう',0,0,'2021-01-06 02:24:10','2021-01-06 02:24:10'),(281,71,'なんか時間がすごいことになってない？',0,0,'2021-01-06 02:24:29','2021-01-06 02:24:29'),(291,261,'now loading…',0,0,'2021-01-06 02:25:54','2021-01-06 02:25:54'),(301,261,'tester',2,0,'2021-01-06 02:27:18','2021-01-17 06:24:04'),(311,71,'tr',0,0,'2021-01-17 06:23:50','2021-01-17 06:23:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relationships`
--

DROP TABLE IF EXISTS `relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relationships` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `follower_id` int(10) unsigned NOT NULL,
  `following_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relationships`
--

LOCK TABLES `relationships` WRITE;
/*!40000 ALTER TABLE `relationships` DISABLE KEYS */;
INSERT INTO `relationships` VALUES (11,71,211),(51,71,231),(61,71,201),(71,211,71),(81,211,201),(91,211,231),(101,211,221),(111,221,71),(121,101,241),(131,221,201),(141,221,101),(151,71,241),(161,131,231),(171,71,121),(181,71,131),(191,131,71),(201,261,71),(211,261,131);
/*!40000 ALTER TABLE `relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `other_user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,71,'2020-10-25 12:31:04','2020-10-25 12:31:04',231),(11,101,'2020-10-25 17:43:50','2020-10-25 17:43:50',241),(21,131,'2020-11-05 02:16:23','2020-11-05 02:16:23',71),(31,131,'2020-11-05 02:18:11','2020-11-05 02:18:11',231),(41,71,'2020-12-20 11:28:52','2020-12-20 11:28:52',221),(51,71,'2021-01-06 02:23:19','2021-01-06 02:23:19',241),(61,261,'2021-01-06 02:26:49','2021-01-06 02:26:49',131);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1072 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (971,'reactからのテストデータの使者','どうだ？バックエンドくん。'),(1071,'なんかいっぱい送ってた侍','ほわ');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=262 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','','','2020-10-08 12:48:45','2020-10-08 12:48:45'),(2,'suzuki','hoge@hoge.hoge','hogehoge','2020-10-08 12:48:45','2020-10-08 12:48:45'),(11,'テストユーザ1号','test@ho.ge','$2y$10$rEMM1EYeCiGGLjuNqS.Z4u2G/w4q6SyWqW8m0ztnMKwFbBea1aOb.','2020-10-08 13:57:15','2020-10-19 20:09:40'),(21,'おはよう',NULL,'$2y$10$LEr5NadSog2j0QU57VY/vuZyADt75jC8sI3NGPWVIPBcHJMySc/UG','2020-10-08 14:03:53','2020-10-08 14:03:53'),(31,'unko',NULL,'$2y$10$y3a51Mig.2ThZIlBM1w1xOm7H7c3dPjfTh.jJGsO7vf1.bnBoMjxi','2020-10-08 14:10:20','2020-10-08 14:10:20'),(41,'ta',NULL,'$2y$10$WLZByPt.d5HJkFtC0CUmNeSODJMjMw5Iwfv3H6NN5SGEoWyozVavy','2020-10-08 14:11:04','2020-10-08 14:11:04'),(51,'hoge',NULL,'$2y$10$k2S3/IWfv8VRWJcD9Z8Cv.qtNZGEDUNmahkPWfypodQIts84LLY5O','2020-10-08 14:12:57','2020-10-08 14:12:57'),(61,NULL,'hiroshi@gmail.com','$2y$10$4fZi75kLnR0PaCO33BbrFe7sPBJx/x8x7IQN5Iho6AqOBws8SiAMa','2020-10-08 14:16:43','2020-10-08 14:16:43'),(71,'管理人','admin@test.com','$2y$10$Pcd2Sfnl2GMVqWLhLYPUFu7NKyO4AOQsnpwJqj9aSYu7C2wqz2rAG','2020-10-10 08:23:55','2020-10-22 04:37:21'),(81,NULL,'wmaji039@gmail.com','$2y$10$sVxFhjx865QICIWrLN3CduiLxsIxwXnBFGGIyaqEpmRROhTwkWgmu','2020-10-10 12:30:45','2020-10-10 12:30:45'),(91,NULL,'test@te.st','$2y$10$3S0yD8uQL4eQVmwjZUrpgOC1H6kqTn4RLaTeIMwNZW8q1jk1hLRQK','2020-10-19 19:51:35','2020-10-19 19:51:35'),(101,'origa@大学に向いてなかった人','origabird0911@gmail.com','$2y$10$8M6C7cF7BpeUi8RnIoCL/ekB31yA1899kAB9o.ub6r0/gN9YSfN8C','2020-10-20 01:07:33','2020-10-20 01:09:31'),(111,'tester@river','test@test.test','$2y$10$BHRMnekJFBaboUBYFN4xWuPBmmKDik7OjrA6Omql2HSN62qTcKgca','2020-10-20 02:24:35','2020-10-20 02:25:28'),(121,'test1','test1@gmail.com','$2y$10$xfUfvNFxSJ.MBPlyXo58LepkxWXziJBx80sndDgS8fp7DbW8M8rLK','2020-10-21 17:22:53','2020-10-21 17:23:21'),(131,'rsklv','rsklv@icloud.com','$2y$10$qlwMz9XtJVM8TgLEyFNPZ.MUerNi7dr9eE4WSb8kfSCm1zgaEU2A.','2020-10-21 18:55:42','2020-10-22 04:01:24'),(141,NULL,'fold@gmail.com','$2y$10$WiRmvmKHb7kKjIaWzeXrc.5OWq3u.l5/85RSQqKBjTcthms5xkWVe','2020-10-21 19:01:26','2020-10-21 19:01:26'),(151,NULL,'kimetu@kimetu.com','$2y$10$VId9kaR9YJo9NXn.onN3X.YiiRnSCjaHf0qUn2FUaioCfF7p4Diea','2020-10-21 19:06:13','2020-10-21 19:06:13'),(161,NULL,'fuga@fuga.fuga','$2y$10$XmFk/axx3sAXO0vHFtJjE.NK03kaRnbzV/ayxZkebIF61MkSjb6rC','2020-10-21 19:06:29','2020-10-21 19:06:29'),(171,NULL,'ppp@ppp.ppp','$2y$10$FDX.nOsyK5E6HQb37jMnLexyJtRovMaUKWsaOS97PUDaztz2ww5Wq','2020-10-21 19:18:48','2020-10-21 19:18:48'),(181,NULL,'fuga@test.com','$2y$10$YeRaIkRIydy8WlWrBEpoeezjBBK8iMs3l7sG5a9bsd1uLeqfcHUN6','2020-10-21 19:19:52','2020-10-21 19:19:52'),(191,NULL,'piyo@test.com','$2y$10$xFV.cK5UgywGs3QiRU2dIu0dkOR4bKgSfXTdwS5ZDxV9BZ8fTK..q','2020-10-21 19:33:16','2020-10-21 19:33:16'),(201,'れみ','remi@test.com','$2y$10$jKQHUVDCz1zpw.aGjZQWDe2ewc6hQu5U92PoNSLqD4rvwb7R1sblO','2020-10-23 02:32:10','2020-10-23 02:32:39'),(211,'M1くん','M1@test.com','$2y$10$6cIhWeimghoxALW1BDy2YuLfRiqvQxOQTeKRauFaPbrgfXkw.XXD2','2020-10-23 03:48:53','2020-10-23 03:50:11'),(221,'M2さま','M2@test.com','$2y$10$d3C/d92p6l57R2/rl8dXHO1k26BhQ/3IgkgAX2gxWcrhrU9I4jW3q','2020-10-23 03:49:04','2020-10-23 03:50:58'),(231,'M3ちゃん','M3@test.com','$2y$10$cKM6srRfq2Uykevflf7wCOPEGYpwkuske6Rl5DwS1bSesFwGqJahe','2020-10-23 03:49:39','2020-10-23 03:51:55'),(241,'ほげり','hogeri@ho.ge','$2y$10$msuThR4tWGB03nUIErBSJuhda7eIe/mictDTyq6TehfoTnOVvhufy','2020-10-25 07:32:30','2020-10-25 07:32:48'),(251,NULL,'uhyo@gmail.com','$2y$10$p0pdd74bo2/L/.nOgYBXguTIXMrLu4d7ExK3llPUd1VZHChp7kByO','2020-11-12 17:32:49','2020-11-12 17:32:49'),(261,'ふー','foo@test.com','$2y$10$KV7/KK.Av4XglHBVBS01WuIkze80qmpfOALmDp3Y6KMx01qYm96N.','2021-01-06 02:25:06','2021-01-06 02:25:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'heroku_3012b33fc1d1892'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-04  2:47:06
