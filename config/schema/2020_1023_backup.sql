-- MySQL dump 10.13  Distrib 5.5.62, for Linux (x86_64)
--
-- Host: localhost    Database: heroku_3012b33fc1d1892
-- ------------------------------------------------------
-- Server version	5.5.62-log

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
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entries`
--

LOCK TABLES `entries` WRITE;
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
INSERT INTO `entries` VALUES (1,71,1,'2020-10-22 22:27:40','2020-10-22 22:27:40'),(11,71,1,'2020-10-22 22:27:41','2020-10-22 22:27:41'),(21,71,11,'2020-10-22 23:14:51','2020-10-22 23:14:51'),(31,131,11,'2020-10-22 23:14:52','2020-10-22 23:14:52'),(41,201,31,'2020-10-23 02:50:05','2020-10-23 02:50:05'),(51,101,31,'2020-10-23 02:50:06','2020-10-23 02:50:06'),(61,201,31,'2020-10-23 02:55:41','2020-10-23 02:55:41'),(71,121,31,'2020-10-23 02:55:43','2020-10-23 02:55:43'),(81,211,41,'2020-10-23 03:52:57','2020-10-23 03:52:57'),(91,221,41,'2020-10-23 03:52:58','2020-10-23 03:52:58'),(101,221,61,'2020-10-23 04:06:38','2020-10-23 04:06:38'),(111,231,61,'2020-10-23 04:06:39','2020-10-23 04:06:39');
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
) ENGINE=InnoDB AUTO_INCREMENT=422 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (71,71,1),(71,71,11),(71,71,21),(71,71,31),(71,21,41),(71,61,51),(71,61,61),(71,41,71),(71,81,81),(71,81,91),(71,81,101),(71,81,111),(71,71,121),(71,121,131),(71,121,141),(101,81,151),(71,141,161),(71,131,171),(111,141,181),(71,171,191),(121,171,201),(121,211,211),(121,11,221),(121,11,231),(121,211,241),(71,221,251),(71,221,261),(71,221,271),(71,221,281),(71,221,291),(71,221,301),(71,221,311),(71,221,321),(71,221,331),(71,221,341),(71,231,351),(71,231,361),(71,231,371),(71,231,381),(131,261,391),(71,261,401),(71,291,411),(131,301,421);
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
) ENGINE=InnoDB AUTO_INCREMENT=692 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,71,1,NULL,'2020-10-22 22:38:55','2020-10-22 22:38:55'),(11,71,1,NULL,'2020-10-22 22:41:20','2020-10-22 22:41:20'),(21,71,1,NULL,'2020-10-22 22:44:23','2020-10-22 22:44:23'),(31,71,1,NULL,'2020-10-22 22:45:06','2020-10-22 22:45:06'),(41,71,1,NULL,'2020-10-22 22:45:37','2020-10-22 22:45:37'),(51,71,1,'hoge','2020-10-22 22:48:02','2020-10-22 22:48:02'),(61,71,1,'hoge','2020-10-22 22:48:56','2020-10-22 22:48:56'),(71,71,1,'hoge','2020-10-22 22:49:45','2020-10-22 22:49:45'),(81,71,1,'hoge','2020-10-22 22:51:07','2020-10-22 22:51:07'),(91,71,1,'hoge','2020-10-22 22:51:42','2020-10-22 22:51:42'),(101,71,1,'hoge','2020-10-22 22:52:13','2020-10-22 22:52:13'),(111,71,1,'hoge','2020-10-22 22:52:37','2020-10-22 22:52:37'),(121,71,1,'hoge','2020-10-22 22:53:42','2020-10-22 22:53:42'),(131,71,1,'hoge','2020-10-22 22:54:24','2020-10-22 22:54:24'),(141,71,1,'hoge','2020-10-22 22:55:06','2020-10-22 22:55:06'),(151,71,1,'hoge','2020-10-22 22:55:57','2020-10-22 22:55:57'),(161,71,1,'hoge','2020-10-22 22:56:19','2020-10-22 22:56:19'),(171,71,1,'hoge','2020-10-22 22:56:53','2020-10-22 22:56:53'),(181,71,1,'hoge','2020-10-22 22:57:36','2020-10-22 22:57:36'),(191,71,1,'hoge','2020-10-22 22:58:11','2020-10-22 22:58:11'),(201,71,1,'hoge','2020-10-22 22:59:08','2020-10-22 22:59:08'),(211,71,1,'hoge','2020-10-22 23:01:43','2020-10-22 23:01:43'),(221,71,1,'hoge','2020-10-22 23:02:46','2020-10-22 23:02:46'),(231,71,1,'hoge','2020-10-22 23:03:10','2020-10-22 23:03:10'),(241,71,1,'hoge','2020-10-22 23:03:28','2020-10-22 23:03:28'),(251,71,1,'hoge','2020-10-22 23:06:49','2020-10-22 23:06:49'),(261,71,1,'hoge','2020-10-22 23:07:09','2020-10-22 23:07:09'),(271,71,1,'hoge','2020-10-22 23:14:20','2020-10-22 23:14:20'),(281,71,11,'hoge','2020-10-22 23:14:53','2020-10-22 23:14:53'),(291,11,1,'hoge','2020-10-22 23:32:59','2020-10-22 23:32:59'),(301,11,1,'hoge','2020-10-22 23:38:36','2020-10-22 23:38:36'),(311,11,1,'hoge','2020-10-22 23:41:24','2020-10-22 23:41:24'),(321,101,1,'hoge','2020-10-22 23:42:28','2020-10-22 23:42:28'),(331,101,21,'hoge','2020-10-22 23:46:38','2020-10-22 23:46:38'),(341,101,21,'hoge','2020-10-22 23:47:43','2020-10-22 23:47:43'),(351,101,21,'ふが','2020-10-22 23:52:28','2020-10-22 23:52:28'),(361,201,31,'ふが','2020-10-23 02:50:11','2020-10-23 02:50:11'),(371,201,31,'ふが','2020-10-23 02:53:27','2020-10-23 02:53:27'),(381,201,31,'ふが','2020-10-23 02:54:54','2020-10-23 02:54:54'),(391,201,31,'ふが','2020-10-23 02:55:47','2020-10-23 02:55:47'),(401,201,31,'ふが','2020-10-23 02:56:40','2020-10-23 02:56:40'),(411,201,31,'ふが','2020-10-23 02:57:09','2020-10-23 02:57:09'),(421,201,31,'ふが','2020-10-23 02:58:25','2020-10-23 02:58:25'),(431,201,31,'ふが','2020-10-23 03:05:45','2020-10-23 03:05:45'),(441,201,31,'ふが','2020-10-23 03:08:42','2020-10-23 03:08:42'),(451,201,31,'ふが','2020-10-23 03:09:37','2020-10-23 03:09:37'),(461,201,31,'ふが','2020-10-23 03:10:58','2020-10-23 03:10:58'),(471,201,31,'ふが','2020-10-23 03:11:12','2020-10-23 03:11:12'),(481,201,31,NULL,'2020-10-23 03:12:55','2020-10-23 03:12:55'),(491,201,31,'うわーーーーーーーーっ！！！！','2020-10-23 03:13:18','2020-10-23 03:13:18'),(501,201,31,'うわーーーーーーーーっ！！！！','2020-10-23 03:13:18','2020-10-23 03:13:18'),(511,201,31,'うわーーーーーーーーっ！！！！','2020-10-23 03:31:03','2020-10-23 03:31:03'),(521,201,31,'助けて(´；ω；｀)','2020-10-23 03:31:51','2020-10-23 03:31:51'),(531,201,31,'DBアクセスに時間かかりすぎでは？？？？','2020-10-23 03:32:20','2020-10-23 03:32:20'),(541,71,1,NULL,'2020-10-23 03:33:43','2020-10-23 03:33:43'),(551,71,1,NULL,'2020-10-23 03:35:13','2020-10-23 03:35:13'),(561,71,1,NULL,'2020-10-23 03:37:53','2020-10-23 03:37:53'),(571,71,1,NULL,'2020-10-23 03:38:12','2020-10-23 03:38:12'),(581,71,1,NULL,'2020-10-23 03:38:55','2020-10-23 03:38:55'),(591,71,1,NULL,'2020-10-23 03:40:17','2020-10-23 03:40:17'),(601,71,1,NULL,'2020-10-23 03:42:43','2020-10-23 03:42:43'),(611,71,1,NULL,'2020-10-23 03:43:03','2020-10-23 03:43:03'),(621,71,1,'test1、きいているか？','2020-10-23 03:45:18','2020-10-23 03:45:18'),(631,101,21,NULL,'2020-10-23 03:46:19','2020-10-23 03:46:19'),(641,101,21,'test1、きいているか？俺だ。今度はorigabirdだよ。','2020-10-23 03:46:49','2020-10-23 03:46:49'),(661,211,41,'M1です。M2のあなたに言いたいメッセージを送ります。','2020-10-23 03:56:11','2020-10-23 03:56:11'),(671,211,41,'やっほー^^','2020-10-23 03:56:24','2020-10-23 03:56:24'),(681,231,51,'M3ちゃんでーす。^^\r\nM2くん！きこえてる？','2020-10-23 03:59:03','2020-10-23 03:59:03'),(691,231,51,'メイクしてみたのであとでみてね','2020-10-23 03:59:29','2020-10-23 03:59:29');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=342 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,71,'現在adminくん状態',0,0,'2020-10-19 03:57:31','2020-10-19 03:57:31'),(11,71,'再度、adminくん',2,0,'2020-10-19 03:58:11','2020-10-21 17:59:49'),(21,71,'変わったっぽい。よき',1,0,'2020-10-19 03:58:50','2020-10-19 05:42:41'),(31,71,'寝れないマン',0,1,'2020-10-19 04:36:18','2020-10-22 04:22:11'),(41,71,'ﾀｽｹﾃー',1,0,'2020-10-19 04:36:37','2020-10-19 18:59:19'),(51,71,'インターネットつらい',0,0,'2020-10-19 04:36:49','2020-10-19 04:36:49'),(61,71,'うぉー',2,1,'2020-10-19 04:37:13','2020-10-19 05:43:31'),(71,71,'時間が意味不明すぎる',5,0,'2020-10-19 04:37:38','2020-10-19 19:40:08'),(81,71,'コーヒーうまい',5,0,'2020-10-19 19:00:15','2020-10-20 01:08:48'),(91,71,'あああいいいううう',0,0,'2020-10-19 20:02:10','2020-10-19 20:02:10'),(101,11,'あいうえお',0,0,'2020-10-19 20:09:52','2020-10-19 20:09:52'),(111,71,'',0,0,'2020-10-19 23:25:22','2020-10-19 23:25:22'),(121,71,'バリデーション周り全然だなぁ\r\nガバガバすぎる',2,1,'2020-10-19 23:31:10','2020-10-20 01:08:27'),(131,101,'PHP、完全に理解した',1,0,'2020-10-20 01:08:21','2020-10-20 02:20:27'),(141,71,'朝が来た',2,0,'2020-10-20 02:19:53','2020-10-20 02:25:36'),(151,111,'テストですよ',0,0,'2020-10-20 02:25:56','2020-10-20 02:25:56'),(161,111,'safariから( ∩\'-\'⊂ )',0,0,'2020-10-20 02:26:15','2020-10-20 02:26:15'),(171,71,'ふええ、安全になりたい',2,0,'2020-10-20 03:49:03','2020-10-21 17:23:47'),(181,121,'テストマン',0,0,'2020-10-21 17:23:41','2020-10-21 17:23:41'),(191,121,'安全な通信になってもうた',0,0,'2020-10-21 17:24:01','2020-10-21 17:24:01'),(201,121,'あとパスワードすかね？\r\nChromeでログインすると怒られる\r\n「パスワードが漏洩しました」とかなんとか(´･_･`)',0,0,'2020-10-21 17:24:57','2020-10-21 17:24:57'),(211,121,'改行が無視されてる',2,0,'2020-10-21 17:25:13','2020-10-21 17:59:53'),(221,71,'dddfgnjjjhgff',10,2,'2020-10-21 18:04:38','2020-10-21 20:54:34'),(231,71,'.envファイルの扱いェ…',4,1,'2020-10-21 20:56:32','2020-10-22 02:20:16'),(241,71,'検索機能つけるか',0,0,'2020-10-22 02:24:07','2020-10-22 02:24:07'),(251,71,'envファイルに関しては運用でカバーする感じで',0,0,'2020-10-22 02:24:48','2020-10-22 02:24:48'),(261,131,'ふえーん˚‧·(´ฅωฅ｀)‧º·',2,1,'2020-10-22 04:01:43','2020-10-22 04:36:59'),(281,71,'ふわふわ',0,0,'2020-10-22 04:37:35','2020-10-22 04:37:35'),(291,71,'背景：NGUは探索を諦めない一方で，課題もあった\r\n- Agent57はNGUと同じ著者によるもので，NGUの改良版になっている．\r\n- 著者は，NGUは内的動機により探索し続ける点はスパースな外的報酬に対応できるものの，学習過程への貢献度によらずすべての方策を同じように学習していたことがボトルネックになっていたと述べている．(学習の場面に応じて，どの方策を優先すべきかをコントロールできていなかった．)',1,1,'2020-10-22 06:28:05','2020-10-23 00:57:19'),(301,101,'おおお',1,0,'2020-10-22 23:42:18','2020-10-23 00:57:23'),(311,201,'うわああああああああああ＞＜',0,0,'2020-10-23 02:35:18','2020-10-23 02:35:18'),(321,211,'M1です。よろしく',0,0,'2020-10-23 03:50:30','2020-10-23 03:50:30'),(331,221,'二人目のメンバーということです',0,0,'2020-10-23 03:51:15','2020-10-23 03:51:15'),(341,231,'M3だあああああ',0,0,'2020-10-23 03:52:16','2020-10-23 03:52:16');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,71,'2020-10-22 22:19:39','2020-10-22 22:19:39'),(11,71,'2020-10-22 23:14:49','2020-10-22 23:14:49'),(21,101,'2020-10-22 23:46:31','2020-10-22 23:46:31'),(31,201,'2020-10-23 02:50:01','2020-10-23 02:50:01'),(41,211,'2020-10-23 03:52:49','2020-10-23 03:52:49'),(51,231,'2020-10-23 03:58:03','2020-10-23 03:58:03'),(61,221,'2020-10-23 04:00:52','2020-10-23 04:00:52');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','','','2020-10-08 12:48:45','2020-10-08 12:48:45'),(2,'suzuki','hoge@hoge.hoge','hogehoge','2020-10-08 12:48:45','2020-10-08 12:48:45'),(11,'テストユーザ1号','test@ho.ge','$2y$10$rEMM1EYeCiGGLjuNqS.Z4u2G/w4q6SyWqW8m0ztnMKwFbBea1aOb.','2020-10-08 13:57:15','2020-10-19 20:09:40'),(21,'おはよう',NULL,'$2y$10$LEr5NadSog2j0QU57VY/vuZyADt75jC8sI3NGPWVIPBcHJMySc/UG','2020-10-08 14:03:53','2020-10-08 14:03:53'),(31,'unko',NULL,'$2y$10$y3a51Mig.2ThZIlBM1w1xOm7H7c3dPjfTh.jJGsO7vf1.bnBoMjxi','2020-10-08 14:10:20','2020-10-08 14:10:20'),(41,'ta',NULL,'$2y$10$WLZByPt.d5HJkFtC0CUmNeSODJMjMw5Iwfv3H6NN5SGEoWyozVavy','2020-10-08 14:11:04','2020-10-08 14:11:04'),(51,'hoge',NULL,'$2y$10$k2S3/IWfv8VRWJcD9Z8Cv.qtNZGEDUNmahkPWfypodQIts84LLY5O','2020-10-08 14:12:57','2020-10-08 14:12:57'),(61,NULL,'hiroshi@gmail.com','$2y$10$4fZi75kLnR0PaCO33BbrFe7sPBJx/x8x7IQN5Iho6AqOBws8SiAMa','2020-10-08 14:16:43','2020-10-08 14:16:43'),(71,'管理人','admin@test.com','$2y$10$Pcd2Sfnl2GMVqWLhLYPUFu7NKyO4AOQsnpwJqj9aSYu7C2wqz2rAG','2020-10-10 08:23:55','2020-10-22 04:37:21'),(81,NULL,'wmaji039@gmail.com','$2y$10$sVxFhjx865QICIWrLN3CduiLxsIxwXnBFGGIyaqEpmRROhTwkWgmu','2020-10-10 12:30:45','2020-10-10 12:30:45'),(91,NULL,'test@te.st','$2y$10$3S0yD8uQL4eQVmwjZUrpgOC1H6kqTn4RLaTeIMwNZW8q1jk1hLRQK','2020-10-19 19:51:35','2020-10-19 19:51:35'),(101,'origa@大学に向いてなかった人','origabird0911@gmail.com','$2y$10$8M6C7cF7BpeUi8RnIoCL/ekB31yA1899kAB9o.ub6r0/gN9YSfN8C','2020-10-20 01:07:33','2020-10-20 01:09:31'),(111,'tester@river','test@test.test','$2y$10$BHRMnekJFBaboUBYFN4xWuPBmmKDik7OjrA6Omql2HSN62qTcKgca','2020-10-20 02:24:35','2020-10-20 02:25:28'),(121,'test1','test1@gmail.com','$2y$10$xfUfvNFxSJ.MBPlyXo58LepkxWXziJBx80sndDgS8fp7DbW8M8rLK','2020-10-21 17:22:53','2020-10-21 17:23:21'),(131,'rsklv','rsklv@icloud.com','$2y$10$qlwMz9XtJVM8TgLEyFNPZ.MUerNi7dr9eE4WSb8kfSCm1zgaEU2A.','2020-10-21 18:55:42','2020-10-22 04:01:24'),(141,NULL,'fold@gmail.com','$2y$10$WiRmvmKHb7kKjIaWzeXrc.5OWq3u.l5/85RSQqKBjTcthms5xkWVe','2020-10-21 19:01:26','2020-10-21 19:01:26'),(151,NULL,'kimetu@kimetu.com','$2y$10$VId9kaR9YJo9NXn.onN3X.YiiRnSCjaHf0qUn2FUaioCfF7p4Diea','2020-10-21 19:06:13','2020-10-21 19:06:13'),(161,NULL,'fuga@fuga.fuga','$2y$10$XmFk/axx3sAXO0vHFtJjE.NK03kaRnbzV/ayxZkebIF61MkSjb6rC','2020-10-21 19:06:29','2020-10-21 19:06:29'),(171,NULL,'ppp@ppp.ppp','$2y$10$FDX.nOsyK5E6HQb37jMnLexyJtRovMaUKWsaOS97PUDaztz2ww5Wq','2020-10-21 19:18:48','2020-10-21 19:18:48'),(181,NULL,'fuga@test.com','$2y$10$YeRaIkRIydy8WlWrBEpoeezjBBK8iMs3l7sG5a9bsd1uLeqfcHUN6','2020-10-21 19:19:52','2020-10-21 19:19:52'),(191,NULL,'piyo@test.com','$2y$10$xFV.cK5UgywGs3QiRU2dIu0dkOR4bKgSfXTdwS5ZDxV9BZ8fTK..q','2020-10-21 19:33:16','2020-10-21 19:33:16'),(201,'れみ','remi@test.com','$2y$10$jKQHUVDCz1zpw.aGjZQWDe2ewc6hQu5U92PoNSLqD4rvwb7R1sblO','2020-10-23 02:32:10','2020-10-23 02:32:39'),(211,'M1くん','M1@test.com','$2y$10$6cIhWeimghoxALW1BDy2YuLfRiqvQxOQTeKRauFaPbrgfXkw.XXD2','2020-10-23 03:48:53','2020-10-23 03:50:11'),(221,'M2さま','M2@test.com','$2y$10$d3C/d92p6l57R2/rl8dXHO1k26BhQ/3IgkgAX2gxWcrhrU9I4jW3q','2020-10-23 03:49:04','2020-10-23 03:50:58'),(231,'M3ちゃん','M3@test.com','$2y$10$cKM6srRfq2Uykevflf7wCOPEGYpwkuske6Rl5DwS1bSesFwGqJahe','2020-10-23 03:49:39','2020-10-23 03:51:55');
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

-- Dump completed on 2020-10-23  2:01:09
