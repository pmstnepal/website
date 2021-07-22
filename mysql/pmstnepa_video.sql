-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)
--
-- Host: localhost    Database: pmstnepa_video
-- ------------------------------------------------------
-- Server version	5.7.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `pmstnepa_video`
--


--
-- Table structure for table `add`
--

DROP TABLE IF EXISTS `add`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `agent` varchar(100) DEFAULT NULL,
  `imagelink` mediumtext,
  `hyperlink` varchar(200) DEFAULT NULL,
  `issued` varchar(100) DEFAULT NULL,
  `expired` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add`
--

LOCK TABLES `add` WRITE;
/*!40000 ALTER TABLE `add` DISABLE KEYS */;
INSERT INTO `add` (`ID`, `agent`, `imagelink`, `hyperlink`, `issued`, `expired`) VALUES (1,'pmst','<img src=\"add/pmst.gif\" width=224\">','add/pmst.jpg','',''),(2,'Shangrila Limousine','<img src=\"add/shangrilalimousines.gif\" width=\"224\">','http://shangrilalimousines.com.au/',NULL,NULL),(3,'vacant','<center><Font color=\"Red\">Watch Unplugged Video<Br>Gajalu-Pema Man Singh Tamang</font><Br></Center><iframe width=\"224\" height=\"126\" src=\"https://www.youtube.com/embed/bAhoCBtne2c\" frameborder=\"0\" allowfullscreen></iframe>','videoplay.php?ID=27',NULL,NULL),(4,'vacant','<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- add -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:inline-block;width:224px;height:200px\"\r\n     data-ad-client=\"ca-pub-3220115733997737\"\r\n     data-ad-slot=\"4106508202\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>',NULL,NULL,NULL),(5,'vacant','<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n<!-- add -->\r\n<ins class=\"adsbygoogle\"\r\n     style=\"display:inline-block;width:224px;height:200px\"\r\n     data-ad-client=\"ca-pub-3220115733997737\"\r\n     data-ad-slot=\"4106508202\"></ins>\r\n<script>\r\n(adsbygoogle = window.adsbygoogle || []).push({});\r\n</script>',NULL,NULL,NULL);
/*!40000 ALTER TABLE `add` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio` (
  `ID` int(45) NOT NULL AUTO_INCREMENT,
  `songTitle` varchar(500) DEFAULT NULL,
  `Audiolink` varchar(500) DEFAULT NULL,
  `Detail` mediumtext,
  `Singer` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio`
--

LOCK TABLES `audio` WRITE;
/*!40000 ALTER TABLE `audio` DISABLE KEYS */;
INSERT INTO `audio` (`ID`, `songTitle`, `Audiolink`, `Detail`, `Singer`) VALUES (1,'Sajha ko Jun Le','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184721382&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : pop <br>\r\nCompose/Lyrics : Suraj Yonjan\r\nMusic : Pema Man Singh Tamang','D\'wangel Tamang (Lalmon)'),(2,'Mann','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/180354135&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Gener : Pop<br>\r\nLyrics/Compose : Ramesh Sunar<br>\r\nMusic : Pema Man Singh Tamang','Ramesh Sunar'),(3,'Hey Maya','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/185218860&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Folk<br>\r\nCompose/Lyrics : Sabin Darlami Magar<br>\r\nModel - Sujana Moktan<br>\r\nMusic : Pema Man Singh Tamang','Sabin Darlami Magar'),(4,'Timi Mero Ho','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/189305784&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Pop<Br>\r\nCompose : Adapters<Br>\r\nLyrics : Ojash Lama<Br>\r\nMusic : Pema Man Singh Tamang','Angela Shrestha'),(5,'Pida Haru','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/194183118&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Sentimental<Br>\r\nCompose/Lyrics : Suraj Yonjan<Br>\r\nMusic - Pema Man Singh Tamang','Kailash Bhusal'),(6,'Aankha Ramro','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/198367044&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Folk<Br>\r\nLyrics : Om Kumar Rai<Br>\r\nCompose : Saamba Bal<Br>\r\nMusic - Pema Man Singh Tamang','Saamba Bal'),(7,'Saki Sakyo maya','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/207263573&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Folk Pop<br>\r\nCompose/ Lyrics - Ojash Lama<br>\r\nMusic : Pema Man Singh Tamang','Ojash Lama (Adapters)'),(8,'Juni Juni','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/216378302&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Slow Rock<br>\r\nCompose/ Lyrics - Raju Rumba<br>\r\nMusic : Pema Man Singh Tamang','Raju Rumba'),(9,'Chokho Maya','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/220633552&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Slow Rock<br>\r\nCompose/ Lyrics - Songin Rai<br>\r\nMusic Director : Pema Man Singh Tamang','Songin Rai'),(10,'Garibi','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/224399390&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Hip Hop<br>\r\nCompose/ Lyrics - Samir Ghishing<br>\r\nMusic Director : Pema Man Singh Tamang','Samir Ghishing \"VTEN\"'),(11,'Yuddha','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/227122100&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Rock<br>\r\nCompose/ Lyrics - Innocent Criminal<br>\r\nMusic Director : Pema Man Singh Tamang','Innocent Criminal'),(12,'Dadai Ko Tyo Jhul ke Gham','<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/234316887&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','Genre : Folk<br>\r\nCompose - Saamba Bal<br>\r\nLyrics - Om K Rai<br>\r\nMusic Director : Pema Man Singh Tamang<Br>\r\nRecording - PMST Nepal','Saamba Bal');
/*!40000 ALTER TABLE `audio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `ID` int(45) NOT NULL AUTO_INCREMENT,
  `Title` varchar(500) DEFAULT NULL,
  `Subject` varchar(500) DEFAULT NULL,
  `Text` varchar(10000) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`ID`, `Title`, `Subject`, `Text`, `Date`) VALUES (1,'lalmon','Video Shoot Photo<br>Sajha ko Jun Le<br>D\'wangel Dong (Lalmon)','','2015-07-11 15:21:59'),(2,'rm','Video Shoot Photo<br>Mann <br>Ramesh Sunar','','2015-07-11 15:33:50'),(3,'sabin','Video Shoot Photo <br>Hey Maya<br>Sabin Darlami Magar',NULL,'2015-07-11 15:54:07'),(4,'angela','Video Shoot Photo <br>Timi Mero Ho<br>Angela Shrestha',NULL,'2015-07-11 16:03:14'),(5,'kailash','Video Shoot Photo <br>Pida Haru<br>Kailash Bhusal',NULL,'2015-07-11 16:07:21'),(15,'Holi','HOLI 2015','This year, PMST crew celebrates HOLI with a blast, visiting different corners of the cities and capturing moments in this special occasion.','2015-03-15 21:11:42'),(16,'saamba','Video Shoot Photo<br>Aakha Ramro <br>Saamba Bal',NULL,'2015-07-11 16:15:43'),(17,'othe','Video Shoot Photos<br> \"Aba Saki Sakyo Maya\" <br> Ojash Lama (Adapters)','Video Shoot Pictures of the song \"Aba Saki Sakyo Maya\" by Ojash Lama. Production of Pmst Nepal.','2015-04-05 10:41:50'),(18,'raju','Video Shoot of Juni Juni by Raju Rumba','Video Shoot of Juni Juni by Raju Rumba under 1st Chance Project.<br>\r\nShooting Location : Galchi, Darbar Marg and many other place.  He would like to thanks Sagun Lama for all his effort and support to make his video. He was very pleased and enjoy working with PMST Nepal and the team.<br>\r\nModels : \r\nSunita Bhujel and Roshan Kc <br>\r\nCamera/Director : Sagun Lama','2015-07-28 17:03:33'),(20,'songin','Video Shoot of Chokho Maya by Songin Rai','Video Shoot of Chokho Maya by Songin Rai under 1st Chance Project.<br>\r\nHe would like to mention his group Real sound for their support. He would like to thanks PMST Nepal and the team for the opportunity and the experience to learn him more in life. <br>\r\n<br>\r\nModels : \r\nNisha Lama and Songin Rai himself <br>\r\nCamera/Director : Sagun Lama','2015-08-27 06:50:08'),(21,'vten','Video Shoot of Garibi by VTEN',NULL,'2015-09-14 04:39:43'),(22,'nima','Video Shoot of Yuddha by Innocent Criminal',NULL,'2015-10-11 05:43:15');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headline`
--

DROP TABLE IF EXISTS `headline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `headline` (
  `ID` int(45) NOT NULL AUTO_INCREMENT,
  `Headline` varchar(500) DEFAULT NULL,
  `display` varchar(500) DEFAULT NULL,
  `Detail` mediumtext,
  `date` varchar(500) DEFAULT NULL,
  `readmore` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headline`
--

LOCK TABLES `headline` WRITE;
/*!40000 ALTER TABLE `headline` DISABLE KEYS */;
INSERT INTO `headline` (`ID`, `Headline`, `display`, `Detail`, `date`, `readmore`) VALUES (20,'PMST Nepal Unplugged Session with Sagun Lama - Andhakar Chann ','<iframe width=\"400\" height=\"225\" src=\"https://www.youtube.com/embed/S9BrWATgaPg\" frameborder=\"0\" allowfullscreen></iframe>','PMST Nepal Unplugged Session with Sagun Lama - Andhakar Chann<br>\r\nLyrics/Compose : Sagun Lama<br>\r\nMusic Director : Pema Man Singh Tamang<br>\r\nDOP : Sagun Lama<br>\r\nVideo Edit/Concept/Design : Pema Man Singh Tamang<br>','11 Nov, 2015','<a href=\"videos.php\">View More Videos</a>'),(21,'PMST Nepal Audio Release<br>\r\nDadai Ko Tyo Jhul ke Gham - Saamba Bal','<img src=\"images/dadai.jpg\" width=\"400\"><iframe width=\"400\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/234316887&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>','PMST Nepal Audio Release<br>\r\nDadai Ko Tyo Jhul ke Gham - Saamba Bal<br>\r\nCompose : Saamba Bal<br>\r\nLyrics : Om K Rai<br>\r\nMusic Director : Pema Man Singh Tamang<br>\r\nRecorded : PMST Nepal<br>','23 Nov, 2015','<a href=\"audio.php\">For More PMST Nepal Audio</a>');
/*!40000 ALTER TABLE `headline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `ID` int(45) NOT NULL AUTO_INCREMENT,
  `new1` varchar(500) DEFAULT NULL,
  `text1` varchar(500) DEFAULT NULL,
  `link1` varchar(500) DEFAULT NULL,
  `new2` varchar(500) DEFAULT NULL,
  `text2` varchar(500) DEFAULT NULL,
  `link2` varchar(500) DEFAULT NULL,
  `new3` varchar(500) DEFAULT NULL,
  `text3` varchar(500) DEFAULT NULL,
  `link3` varchar(500) DEFAULT NULL,
  `new4` varchar(500) DEFAULT NULL,
  `text4` varchar(500) DEFAULT NULL,
  `link4` varchar(500) DEFAULT NULL,
  `new5` varchar(500) DEFAULT NULL,
  `text5` varchar(500) DEFAULT NULL,
  `link5` varchar(500) DEFAULT NULL,
  `new6` varchar(500) DEFAULT NULL,
  `text6` varchar(1000) DEFAULT NULL,
  `link6` varchar(500) DEFAULT NULL,
  `new7` varchar(500) DEFAULT NULL,
  `text7` varchar(500) DEFAULT NULL,
  `link7` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`ID`, `new1`, `text1`, `link1`, `new2`, `text2`, `link2`, `new3`, `text3`, `link3`, `new4`, `text4`, `link4`, `new5`, `text5`, `link5`, `new6`, `text6`, `link6`, `new7`, `text7`, `link7`) VALUES (1,'images/timrogajalu.jpg','Unplugged - Gajalu<br>Pema Man Singh Tamang','videoplay.php?ID=27','images/nimatube.jpg','Video Premiere<br>Yuddha','videoplay.php?ID=26','uploads/formdata/uploads_upload/nima1.jpg','Video Shoot Photo<br>Yuddha','photogallery.php?ID=22','images/nima.jpg','Introducing <br>\"Innocent Criminal\"','individual.php?ID=16','images/videothum1.jpg','Video Premiere<br>Garibi','uploads/formdata/uploads_upload/vten1.jpg','uploads/formdata/uploads_upload/vten1.jpg','Video Shoot Photo<br>Garibi','photogallery.php?ID=21','images/managthump.jpg','Demolition Documentary<br>Manang Gumba','videoplay.php?ID=24');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `ID` int(45) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `profilpic` varchar(100) DEFAULT NULL,
  `discription` longtext,
  `videolink` varchar(500) DEFAULT NULL,
  `soundlink` varchar(200) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `songtitle` varchar(100) DEFAULT NULL,
  `videothumpnail` varchar(100) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`ID`, `Name`, `profilpic`, `discription`, `videolink`, `soundlink`, `company`, `songtitle`, `videothumpnail`, `Date`) VALUES (2,'D\'wangel Tamang (Lalmon)','images/artist/Dwangel.jpg','From Swoyambhu, Kathmandu','videoplay.php?ID=8','audioplay.php?ID=1','photogallery.php?ID=1','Sajha ko jun le','image/lalu.jpg','Nov 12, 2014'),(8,'Ramesh Sunar','images/artist/ramesh.jpg','Ramesh Sunar is a Talented singer and songwriter from Hetauda Nepal','videoplay.php?ID=10','audioplay.php?ID=2','photogallery.php?ID=2','Mann','image/ramesh.jpg','1st December, 2014'),(9,'Sabin Darlami Magar','images/artist/sabin.jpg','From Sitapaila-9, Kathmandu, Nepal.','videoplay.php?ID=11','audioplay.php?ID=3','photogallery.php?ID=3','Hey Maya','image/hey maya.jpg','Jan 6, 2015'),(10,'Angela Shrestha','images/artist/angilashrestha.jpg','From Chhauni, Kathmandu, Nepal.','videoplay.php?ID=12','audioplay.php?ID=4','photogallery.php?ID=4','Timi Mero Ho','image/angela.gif','Jan 27, 2015'),(11,'Kailash Bhusal','images/Kailashbhushal/kaishalbhusal.jpg','From Bhaktapur, Nepal.','videoplay.php?ID=14','audioplay.php?ID=5','photogallery.php?ID=5','Pida Haru','image/Kailashbhushal/kailash.jpg','Feb 20, 2015'),(12,'Saamba Bal','images/samba/samba.jpg','From Swoyambhu, Kathmandu.','videoplay.php?ID=16','audioplay.php?ID=6','photogallery.php?ID=16','Aankha Ramro','images/saamba/saamba.jpg','22nd March, 2015'),(13,'Raju Rumba','images/raju.jpg','<p>Name: Raju Rumba<br />\r\n  Date of Birth: 1990-Aug-10<br />\r\n  Address: Kathmandu, Nepal<br />\r\n  <br />\r\n  <strong><u>More Details</u></strong><br />\r\n  Father: Shinga Ram Tamang<br />\r\n  Mother: Somati Tamang <br />\r\n  One Brothers: Raj Kumar Lama <br />\r\n  One Sister: Deepa Lama<br />\r\n  Credit and supports: Family and Friends.<br />\r\n  Fan of: Nirvana and Raju Lama<br />\r\n  Discovering 1st Chance: Through my friends.<br />\r\n  <br />His own words: <br />\r\n  I m a simple, shy and kind guy from middle class  family, who has a big dream to be a fine musician. .. . I love to spend most of  my time listening to music. . i love to travel, observe news places and love to  make new friends.<br />\r\n  I heartly thanks PMST Nepal for giving me this opportunity.<br />\r\n</p>','videoplay.php?ID=22','audioplay.php?ID=8','photogallery.php?ID=18','Juni Juni',NULL,'24 July, 2015'),(14,'Songin Rai','images/songinrai.jpg','<p>Name : Songin Rai  <br />\r\n  Address : \r\nKoteshwor, KTM origin of Bhojpur, Nepal<br />\r\nProfession : Musician ( singer/ composer/ lyricist )  Working with- real sound band and company.<br />\r\nAim : Not  focus  to be a popular but the perfect one. Oriented for the real satisfaction, and living with music till the end</p>\r\n<p>His own words:<br />\r\n  I\'m so glad that I got a chance to work with very friendly and familiar talented musician as well as the director of PMST Nepal Mr. Pema Man Singh Tamang and Mr. Sagun Lama. <br />\r\n  If you have a talent then you can join PMST Nepal to make your dream come true.  This is the golden opportunity, golden steps to get you high yourself. Coz you never know which step gonna make you higher.   </p>\r\n<p>Try PMST and feel yourself...</p>','videoplay.php?ID=23','audioplay.php?ID=9','photogallery.php?ID=20','Chokho Maya','','20 August, 2015'),(15,'VTEN','images/vten.jpg','<p><strong>Name</strong>: Samir Ghishing ( VTEN )<br />\r\n  <strong>DOB</strong>: 18 yrs old now<br />\r\n  <strong>Address</strong> :  Currently at Sitapaila, Nagarjun Municipality,  Kathmandu, Nepal (Origin of Rauthahat, Candranigapur)<br />\r\n  <br />\r\n  <strong><u>Family Details</u></strong><br />\r\n  <strong>Father</strong>: Mr Kapil Babu Lama<br />\r\n  <strong>Mother</strong>: Mrs Hema Lama <br />\r\n  <strong>Sisters</strong>: Sealin and Simron<br />\r\n<br />\r\n<strong>Fan of</strong>: <br />\r\n  I m big fan of Eminem<br />\r\n  <br />\r\n  <strong>Inspiration and motivation</strong>: <br />\r\n  My Dad is all my inspiration and my motivation.<br />\r\n  <br />\r\n  <strong>Discovering 1st Chance</strong>: <br />\r\n  I m very much thank full to Chinese Dai for letting me know about this project.This is such a great project for us. Giving a chance for us is like really dream is coming closer to me. This is such a true project and it is really helping me because i belongs to very simple family and m working as Thanka artist to live my life. From my childhood i start raping within  myself. Today, with the help of this project finally my words got the music and many more. <br />\r\n  I heartly thank to Mr Pema Man Singh Tamang \r\n  and the entire PMST Nepal Team.<br />\r\n  <br />\r\n<strong>Fan Follow link</strong>: <a href=\"http://www.facebook.com/raj.koirala.7583?__mref=message_bubble\" target=\"_blank\" data-reactid=\".4e.1:$mid=11441334156873=2e611edf3518bd30a78.2:0.0.0.0.0.0.$range0/=10\">Click here</a></p>','videoplay.php?ID=25','audioplay.php?ID=10','photogallery.php?ID=21','Garibi',NULL,'4 Sep, 2015'),(16,'Innocent Criminal','images/nima.jpg','<p><strong>Band Name</strong>: Innocent Criminal<br />\r\n  <strong>Address</strong> : Dapashi, Kathmandu, Nepal<br />\r\n  <strong>Genre </strong>: AIO (All in One)<br />\r\n  <strong>Establish : </strong>2007 <br />\r\n  <br />\r\n  <strong>Members :<br />\r\n  Vocalist : </strong>Nima Sherpa<strong>\r\n  <br />\r\n  Bass Guitarist </strong>: Pramod Shrestha <br />\r\n  <strong>Lead Guitarist</strong> : Rakesh Shrestha <br />\r\n  <strong>Drummer</strong> : Sanish Maharjan<br />\r\n</p>','videoplay.php?ID=26','audioplay.php?ID=11','photogallery.php?ID=22','Yuddha',NULL,'6 Oct, 2015');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sfm_paypal_paypal`
--

DROP TABLE IF EXISTS `sfm_paypal_paypal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sfm_paypal_paypal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Serialized` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sfm_paypal_paypal`
--

LOCK TABLES `sfm_paypal_paypal` WRITE;
/*!40000 ALTER TABLE `sfm_paypal_paypal` DISABLE KEYS */;
INSERT INTO `sfm_paypal_paypal` (`ID`, `Serialized`) VALUES (1,'a:2:{s:8:\"formvars\";a:21:{s:18:\"sfm_form_submitted\";s:3:\"yes\";s:23:\"id_6fe8cc54b1abc1cce2cc\";s:25:\"9c437ab243c86fc3b6f28f067\";s:21:\"tee0b857018019c63db02\";s:0:\"\";s:9:\"firstname\";s:7:\"saajan \";s:4:\"last\";s:8:\"shrestha\";s:5:\"email\";s:24:\"shrestha_saajan@live.com\";s:7:\"address\";s:9:\"swoyambhu\";s:5:\"phone\";s:10:\"9841250304\";s:8:\"donation\";s:2:\"20\";s:9:\"Multiline\";s:0:\"\";s:19:\"sfm_captcha_Captcha\";s:6:\"2V8E6J\";s:21:\"sfm_captcha_Captcha_k\";s:32:\"50c4d9953fb14ce29ece355f85aa7320\";s:16:\"_sfm_visitor_ip_\";s:13:\"111.119.59.38\";s:15:\"_sfm_unique_id_\";s:32:\"f782c42d1913db06f60056a6936ec566\";s:26:\"_sfm_form_page_session_id_\";s:32:\"167b2bfe575d041c40ad5e138e38cba8\";s:25:\"_sfm_form_submision_time_\";s:32:\"7/3/2015 12:38:58 UTC(+0000 GMT)\";s:25:\"_sfm_form_submision_date_\";s:8:\"7/3/2015\";s:18:\"_sfm_referer_page_\";s:34:\"http://pmstnepal.com/1stchance.php\";s:16:\"_sfm_user_agent_\";s:109:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\";s:16:\"_sfm_visitor_os_\";s:9:\"Windows 7\";s:21:\"_sfm_visitor_browser_\";s:20:\"Chrome 43.0.2357.130\";}s:7:\"session\";a:9:{s:24:\"sfm_form_user_identificn\";s:32:\"6fe8cc54b1abc1cce2ccf13b37063f89\";s:13:\"sfm_unique_id\";s:32:\"f782c42d1913db06f60056a6936ec566\";s:16:\"sfm_referer_page\";s:34:\"http://pmstnepal.com/1stchance.php\";s:12:\"sfm_rand_sid\";i:7366;s:22:\"_sfm_session_input_id_\";s:23:\"id_6fe8cc54b1abc1cce2cc\";s:25:\"_sfm_session_input_value_\";s:25:\"9c437ab243c86fc3b6f28f067\";s:23:\"sfm_captcha_pwd_Captcha\";s:0:\"\";s:20:\"sfm_captcha_sessions\";a:9:{s:32:\"4ce93fab7289c5023c8a2ac8e271f6d8\";s:32:\"e9f5ea9958cf4f3f4f46b384ac4c1303\";s:32:\"67e050edf2c0e29fded74b521323db81\";s:32:\"bffab88d14f4c1fba519de62835af291\";s:32:\"c8d71b721d3dcb8369ca75f09e9e4e3b\";s:32:\"3e69a2505fafd37c502cbeb7e5ee69cd\";s:32:\"f703b358478d51858ebfe698f2ba8df1\";s:32:\"cfba2707cafde6def7aa2da67c37c859\";s:32:\"2e0ce83a9431fa14bee9f853f162d86c\";s:32:\"02b522f28a28ec8063f1836f1508651c\";s:32:\"39bf948895ba9c19e9af37e8989cd878\";s:32:\"d18f0d97a97e70846d747515de5fa751\";s:32:\"45ac6220328cfb5c6a54c7e592de238b\";s:32:\"7705fcd6e209b380929a234af3e08533\";s:32:\"f9e50894360f18a205064e29bc1d2f42\";s:32:\"4defc3a45b2cf6266607bd6a215936ec\";s:32:\"50c4d9953fb14ce29ece355f85aa7320\";s:32:\"6892cdf82e70780ca1bdda814810536b\";}s:15:\"sfm_from_iframe\";s:1:\"1\";}}'),(2,'a:2:{s:8:\"formvars\";a:21:{s:18:\"sfm_form_submitted\";s:3:\"yes\";s:23:\"id_6fe8cc54b1abc1cce2cc\";s:25:\"9c437ab243c86fc3b6f28f067\";s:21:\"tee0b857018019c63db02\";s:0:\"\";s:9:\"firstname\";s:7:\"saajan \";s:4:\"last\";s:8:\"shrestha\";s:5:\"email\";s:24:\"shrestha_saajan@live.com\";s:7:\"address\";s:7:\"asdfasd\";s:5:\"phone\";s:12:\"154564341541\";s:8:\"donation\";s:2:\"20\";s:9:\"Multiline\";s:0:\"\";s:19:\"sfm_captcha_Captcha\";s:6:\"EGP2CN\";s:21:\"sfm_captcha_Captcha_k\";s:32:\"ca7c54709dc850dce9a25e1e93bcd0c5\";s:16:\"_sfm_visitor_ip_\";s:13:\"111.119.59.38\";s:15:\"_sfm_unique_id_\";s:32:\"cac1d3b5c9a0bdbed7843e5a1d9ee6f1\";s:26:\"_sfm_form_page_session_id_\";s:32:\"c0981221489f9f957bcae69c19b95a68\";s:25:\"_sfm_form_submision_time_\";s:32:\"7/4/2015 03:43:26 UTC(+0000 GMT)\";s:25:\"_sfm_form_submision_date_\";s:8:\"7/4/2015\";s:18:\"_sfm_referer_page_\";s:34:\"http://pmstnepal.com/1stchance.php\";s:16:\"_sfm_user_agent_\";s:109:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\";s:16:\"_sfm_visitor_os_\";s:9:\"Windows 7\";s:21:\"_sfm_visitor_browser_\";s:20:\"Chrome 43.0.2357.130\";}s:7:\"session\";a:8:{s:24:\"sfm_form_user_identificn\";s:32:\"6fe8cc54b1abc1cce2ccf13b37063f89\";s:13:\"sfm_unique_id\";s:32:\"cac1d3b5c9a0bdbed7843e5a1d9ee6f1\";s:15:\"sfm_from_iframe\";s:1:\"1\";s:16:\"sfm_referer_page\";s:34:\"http://pmstnepal.com/1stchance.php\";s:22:\"_sfm_session_input_id_\";s:23:\"id_6fe8cc54b1abc1cce2cc\";s:25:\"_sfm_session_input_value_\";s:25:\"9c437ab243c86fc3b6f28f067\";s:23:\"sfm_captcha_pwd_Captcha\";s:0:\"\";s:20:\"sfm_captcha_sessions\";a:2:{s:32:\"8a6340702e912ba378cb6b66b269d15d\";s:32:\"f55abe0f33ee80ff2cfabebd8cd7f854\";s:32:\"ca7c54709dc850dce9a25e1e93bcd0c5\";s:32:\"d1c208ddbf9f8deb1751f4c3a532c454\";}}}'),(3,'a:2:{s:8:\"formvars\";a:21:{s:18:\"sfm_form_submitted\";s:3:\"yes\";s:23:\"id_8ee56e2646c86ac636bd\";s:25:\"9cf4fea4450a3f33c5283d76d\";s:21:\"tee0b857018019c63db02\";s:0:\"\";s:9:\"firstname\";s:4:\"Rina\";s:4:\"last\";s:7:\"Pradhan\";s:5:\"email\";s:20:\"rinjilas@hotmail.com\";s:7:\"address\";s:15:\"39 Royal Parade\";s:5:\"phone\";s:10:\"0415732622\";s:8:\"donation\";s:4:\"2.00\";s:9:\"Multiline\";s:0:\"\";s:19:\"sfm_captcha_Captcha\";s:6:\"ZAWFW8\";s:21:\"sfm_captcha_Captcha_k\";s:32:\"4e98ca5dd9b1ce3efee95581fe458609\";s:16:\"_sfm_visitor_ip_\";s:15:\"220.240.134.220\";s:15:\"_sfm_unique_id_\";s:32:\"d6cc3e69c9fc524792bac3330ea3aa7a\";s:26:\"_sfm_form_page_session_id_\";s:32:\"6b96150c2f4fcc9fc3afab22ead061f3\";s:25:\"_sfm_form_submision_time_\";s:32:\"7/9/2015 09:41:12 UTC(+0000 GMT)\";s:25:\"_sfm_form_submision_date_\";s:8:\"7/9/2015\";s:18:\"_sfm_referer_page_\";s:21:\"http://pmstnepal.com/\";s:16:\"_sfm_user_agent_\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";s:16:\"_sfm_visitor_os_\";s:6:\"Mac OS\";s:21:\"_sfm_visitor_browser_\";s:20:\"Chrome 43.0.2357.132\";}s:7:\"session\";a:8:{s:24:\"sfm_form_user_identificn\";s:32:\"8ee56e2646c86ac636bd305f961851a4\";s:13:\"sfm_unique_id\";s:32:\"d6cc3e69c9fc524792bac3330ea3aa7a\";s:15:\"sfm_from_iframe\";s:1:\"1\";s:16:\"sfm_referer_page\";s:21:\"http://pmstnepal.com/\";s:22:\"_sfm_session_input_id_\";s:23:\"id_8ee56e2646c86ac636bd\";s:25:\"_sfm_session_input_value_\";s:25:\"9cf4fea4450a3f33c5283d76d\";s:23:\"sfm_captcha_pwd_Captcha\";s:0:\"\";s:20:\"sfm_captcha_sessions\";a:1:{s:32:\"4e98ca5dd9b1ce3efee95581fe458609\";s:32:\"40d4e3265a0d4703374fcf64a8f85757\";}}}'),(4,'a:2:{s:8:\"formvars\";a:21:{s:18:\"sfm_form_submitted\";s:3:\"yes\";s:23:\"id_c5a01ba304364b270cd1\";s:25:\"15cbe1cefdcdecc8aac9dd41c\";s:21:\"tee0b857018019c63db02\";s:0:\"\";s:9:\"firstname\";s:6:\"saajan\";s:4:\"last\";s:8:\"shrestha\";s:5:\"email\";s:20:\"saajanshre@gmail.com\";s:7:\"address\";s:4:\"jdjs\";s:5:\"phone\";s:10:\"9834567283\";s:8:\"donation\";s:2:\"20\";s:9:\"Multiline\";s:0:\"\";s:19:\"sfm_captcha_Captcha\";s:6:\"8FP6PV\";s:21:\"sfm_captcha_Captcha_k\";s:32:\"fcef7c6ab371f1e4e4016281d403ddfa\";s:16:\"_sfm_visitor_ip_\";s:13:\"111.119.56.48\";s:15:\"_sfm_unique_id_\";s:32:\"02f63608161375052060c4182774f95a\";s:26:\"_sfm_form_page_session_id_\";s:32:\"485a9b8f124eeaf52ce98807a49cdc1f\";s:25:\"_sfm_form_submision_time_\";s:33:\"7/11/2015 16:41:07 UTC(+0000 GMT)\";s:25:\"_sfm_form_submision_date_\";s:9:\"7/11/2015\";s:18:\"_sfm_referer_page_\";s:30:\"http://pmstnepal.com/index.php\";s:16:\"_sfm_user_agent_\";s:124:\"Mozilla/5.0 (iPad; CPU OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F69 Safari/600.1.4\";s:16:\"_sfm_visitor_os_\";s:10:\"Search Bot\";s:21:\"_sfm_visitor_browser_\";s:10:\"Safari 8.0\";}s:7:\"session\";a:8:{s:24:\"sfm_form_user_identificn\";s:32:\"c5a01ba304364b270cd1bd5e79d1172e\";s:13:\"sfm_unique_id\";s:32:\"02f63608161375052060c4182774f95a\";s:15:\"sfm_from_iframe\";s:1:\"1\";s:16:\"sfm_referer_page\";s:30:\"http://pmstnepal.com/index.php\";s:22:\"_sfm_session_input_id_\";s:23:\"id_c5a01ba304364b270cd1\";s:25:\"_sfm_session_input_value_\";s:25:\"15cbe1cefdcdecc8aac9dd41c\";s:23:\"sfm_captcha_pwd_Captcha\";s:0:\"\";s:20:\"sfm_captcha_sessions\";a:1:{s:32:\"fcef7c6ab371f1e4e4016281d403ddfa\";s:32:\"3e555fce577fd8a641eb77e5503d2119\";}}}'),(5,'a:2:{s:8:\"formvars\";a:21:{s:18:\"sfm_form_submitted\";s:3:\"yes\";s:23:\"id_bc5d60aca390b42f36fb\";s:25:\"970157271db23c8b485330895\";s:21:\"tee0b857018019c63db02\";s:0:\"\";s:9:\"firstname\";s:7:\"saajan \";s:4:\"last\";s:2:\"sl\";s:5:\"email\";s:23:\"pema.goodwill@gmail.com\";s:7:\"address\";s:7:\"asdfasd\";s:5:\"phone\";s:11:\"58768776574\";s:8:\"donation\";s:2:\"20\";s:9:\"Multiline\";s:0:\"\";s:19:\"sfm_captcha_Captcha\";s:6:\"CS6EXZ\";s:21:\"sfm_captcha_Captcha_k\";s:32:\"f122d0e3135855525afa6713d6c675af\";s:16:\"_sfm_visitor_ip_\";s:13:\"111.119.56.11\";s:15:\"_sfm_unique_id_\";s:32:\"395c167284e2cc75f884cf43b356e0b3\";s:26:\"_sfm_form_page_session_id_\";s:32:\"a455b5896c545a681e4cfcbb9184e07f\";s:25:\"_sfm_form_submision_time_\";s:33:\"7/12/2015 13:46:46 UTC(+0000 GMT)\";s:25:\"_sfm_form_submision_date_\";s:9:\"7/12/2015\";s:18:\"_sfm_referer_page_\";s:30:\"http://pmstnepal.com/photo.php\";s:16:\"_sfm_user_agent_\";s:109:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36\";s:16:\"_sfm_visitor_os_\";s:9:\"Windows 7\";s:21:\"_sfm_visitor_browser_\";s:20:\"Chrome 43.0.2357.132\";}s:7:\"session\";a:8:{s:24:\"sfm_form_user_identificn\";s:32:\"bc5d60aca390b42f36fbcd21a3c16215\";s:13:\"sfm_unique_id\";s:32:\"395c167284e2cc75f884cf43b356e0b3\";s:15:\"sfm_from_iframe\";s:1:\"1\";s:16:\"sfm_referer_page\";s:30:\"http://pmstnepal.com/photo.php\";s:22:\"_sfm_session_input_id_\";s:23:\"id_bc5d60aca390b42f36fb\";s:25:\"_sfm_session_input_value_\";s:25:\"970157271db23c8b485330895\";s:23:\"sfm_captcha_pwd_Captcha\";s:0:\"\";s:20:\"sfm_captcha_sessions\";a:1:{s:32:\"f122d0e3135855525afa6713d6c675af\";s:32:\"a01489c8318343cda856949c85717dae\";}}}');
/*!40000 ALTER TABLE `sfm_paypal_paypal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `_sfm_form_submision_time_` datetime DEFAULT NULL,
  `_sfm_visitor_ip_` varchar(45) DEFAULT NULL,
  `_sfm_unique_id_` varchar(35) DEFAULT NULL,
  `artist_name` varchar(100) DEFAULT NULL,
  `Video_title` varchar(500) DEFAULT NULL,
  `Music_Company` varchar(100) DEFAULT NULL,
  `Genre` varchar(100) DEFAULT NULL,
  `Cameraman` mediumtext,
  `Editor` varchar(100) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`ID`, `_sfm_form_submision_time_`, `_sfm_visitor_ip_`, `_sfm_unique_id_`, `artist_name`, `Video_title`, `Music_Company`, `Genre`, `Cameraman`, `Editor`, `link`, `photo`) VALUES (7,'2014-11-15 15:54:43','49.244.75.127','2421512','Adapters','Timilai','PMST Nepal','Genre : Acoustic live','\r\nLyrics/Music : Adapters<br>\r\n\r\nCamera : Sajaan Shrestha<br>\r\n\r\nConcept/Editor : Pema Man Singh Tamang',NULL,'<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/i9ZXtUl2tOc?list=PL706KEgmVFK984DuuzWsRsuMu8yiWPDZM\" frameborder=\"0\" allowfullscreen></iframe>','5.jpg'),(6,'2014-11-15 15:48:37','49.244.75.127','6650424','Pema Man Singh Tamang','Jun Tipera','PMST Nepal','Genre : Pop','Lyrics/Compose/Editor : Pema Man Singh Tamang<br>\r\n\r\nCamera/Director : Sagun Lama',NULL,'<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/4ezQnRZOmP0?list=PL706KEgmVFK984DuuzWsRsuMu8yiWPDZM\" frameborder=\"0\" allowfullscreen></iframe>','4.jpg'),(5,'2014-11-15 15:46:58','49.244.75.127','2213521','Suraj Yonjan','Maya yo k ho','PMST Nepal','Genre : Pop','Lyrics/Compose : Suraj Yonjan<br>\r\n\r\nArranger : Shyam Maharjan<br>\r\n\r\nEditor : Pema Man Singh Tamang<br>\r\n\r\nCamera/Director : Sagun Lama','','<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/64TaIGQR4fI?list=PL706KEgmVFK984DuuzWsRsuMu8yiWPDZM\" frameborder=\"0\" allowfullscreen></iframe>','2.jpg'),(2,'2014-11-15 15:42:26','49.244.75.127','375187','Pasang Lama','Pasang Ko Maya (Angalo)','PMST Nepal','Genre : Pop','Lyrics/Compose : Suraj Yonjan<br>\r\n\r\nArranger : Shyam Maharjan<br>\r\n\r\nEditor : Pema Man Singh Tamang<br>\r\n\r\nCamera/Director : Sagun Lama','','<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/7VZ6OOnejaM?list=PL706KEgmVFK984DuuzWsRsuMu8yiWPDZM\" frameborder=\"0\" allowfullscreen></iframe>','3.jpg'),(1,'2014-11-15 15:30:51','49.244.75.127','2600859','Pema Man Singh Tamang','Sayed','PMST Nepal','Genre : Alternative','Lyrics/Compose/Music : Pema Man Singh Tamang<br>\r\n\r\nCamera : Debu Raj Bansi<br>\r\n\r\nEditor : Pema Man Singh Tamang',NULL,'<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/w8m4Nm8zdQ4?list=PL706KEgmVFK984DuuzWsRsuMu8yiWPDZM\" frameborder=\"0\" allowfullscreen></iframe>','1.jpg'),(8,NULL,NULL,NULL,'D\'wangel Tamang (Lalmon)','Sajha ko Jun le','PMST Nepal (1st Chance)','Genre : Pop','\r\n\r\nCompose : Suraj Yonjan<br>\r\n\r\nBackup : Adapters<br>\r\n\r\nArranger/Editor : Pema Man Singh Tamang<br>\r\n\r\nCamera/Director : Sagun Lama','','<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/OZ1KraL43_E\" frameborder=\"0\" allowfullscreen></iframe>','lalu.jpg'),(10,NULL,NULL,NULL,'Ramesh Sunar','Mann - Ramesh Sunar (Official Video)','PMST Nepal (1st Chance)','Genre : Pop','\r\nCompose/Lyrics : Ramesh Sunar<br>\r\nBackup : Adapters<br>\r\nArranger/Editor : Pema Man Singh Tamang<br>\r\nCamera/Director : Sagun Lama\r\n ','','<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/UO6S-sHVWOo\" frameborder=\"0\" allowfullscreen></iframe>','ramesh.jpg'),(11,NULL,NULL,NULL,'Sabin Darlami Magar','Hey Maya - Sabin Darlami Magar (Official Music Video)','PMST Nepal (1st Chance)','Compose/ Lyrics - Sabin Darlami Magar','\r\n\r\nCompose/ Lyrics - Sabin Darlami Magar<br>\r\n\r\nModel - Sujana Moktan\r\n<br>\r\nMusic - PMST Nepal\r\n<br>\r\nCamera - Saajan Shrestha\r\n<br>\r\nEditor/Director - Pema Man Singh Tamang','','<iframe  width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/Cv51_bAsDQI\" frameborder=\"0\" allowfullscreen></iframe>','hey maya.jpg'),(12,NULL,NULL,NULL,'Angela Shrestha','Timi Mero Ho - Angela Shrestha (Official Music Video)','PMST Nepal (1st Chance)','Genre : Pop','Compose : Adapters<br>\r\n\r\nLyrics : Ojash Lama<br>\r\n\r\nMusic : PMST Nepal<br>\r\n\r\nModel : Lalit Ghale, Chinese Dai (Teacher)<br>\r\n\r\nEditor : Pema Man Singh Tamang<br>\r\n\r\nDirector/Camera : Sagun Lama','','<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/3gQDzTgEu0A\" frameborder=\"0\" allowfullscreen></iframe>','angela.gif'),(13,NULL,NULL,NULL,'Jam Session','DANIEL GIVONE & BHARAT NEPALI ','PMST NEPAL',NULL,'DANIEL GIVONE & BHARAT NEPALI Jam Session @ PMST Nepal<br>\r\n\r\nMaster Daniel Gioven (GYPSY JAZZ) all the way from France<br>\r\n\r\nand our very own Master Bharat Nepali on SARANGI',NULL,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/bdhXCVIHgHU\" frameborder=\"0\" allowfullscreen></iframe>','jam.jpg'),(14,NULL,NULL,NULL,'Kailash Bhusal','Pida Haru - Kailash Bhusal (Official Music Video)','PMST Nepal (1st Chance)','Genre : Sentimental','\r\nCompose/ Lyrics - Suraj Yonjan<br>\r\n<br>\r\nMusic - PMST Nepal\r\n<br>\r\nEditor- Pema Man Singh Tamang\r\n<br>\r\nCamera/Director : Sagun Lama','','<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/KNqlvd5yvPQ\" frameborder=\"0\" allowfullscreen></iframe>','../images/Kailashbhushal/kailash.jpg'),(15,NULL,NULL,NULL,'Ojash Lama (Adapters)','Saki Sakyo Maya - Ojash Lama(Adapters) Official Video','PMST Nepal','Genre : Folk Pop','Compose/ Lyrics - Ojash Lama<br>\r\n\r\nModel : Yangji Sherpa<br>\r\n\r\nMusic / Editor : Pema Man Singh Tamang<br>\r\n\r\nCamera/Director : Sagun Lama','','<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/Fom2ho2X00k\" frameborder=\"0\" allowfullscreen></iframe>','../images/videothum.jpg'),(16,NULL,NULL,NULL,'Saamba Bal','Aakha Ramro - Saamba Bal (Official Music Video)','PMST Nepal (1st Chance)','Genre : Folk ','Lyrics : Om Kumar Rai<br>\r\nCompose : Saamba Bal<br>\r\nModel : Chimsang Lama<br>\r\nChoreographer : Abigial Adhikari<br>\r\nDancers :Monaj Tamang, Roshan Ghising, Aasyang, Puja Gurung, Pema Ghising & Sujana Moktan<br>\r\nCamera : Sagun Lama , Saajan Shrestha<br>\r\nMusic / Editor / Director : Pema Man Singh Tamang\r\n','','<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/q2MIAL7Y864\" frameborder=\"0\" allowfullscreen></iframe> ','../images/saamba/saamba.jpg'),(17,NULL,NULL,NULL,'PMST NEPAL','Earthquake in Nepal Part I','News',NULL,'Footage right after the Massive Earthquake M 7.9 in Nepal ',NULL,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/-ce3vp3w9m4\" frameborder=\"0\" allowfullscreen></iframe>','../images/2.jpg'),(18,NULL,NULL,NULL,'PMST NEPAL','Earthquake in Nepal Part II','News','','Nepal Earthquake results massive damage and message from victim',NULL,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/IAN0IwAV1_g\" frameborder=\"0\" allowfullscreen></iframe>','../images/2 (1).jpg'),(19,NULL,NULL,NULL,'PMST NEPAL','Tribute Video for Black Day of Nepal','Tribute',NULL,NULL,NULL,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/4Ka6L1B6SO8\" frameborder=\"0\" allowfullscreen></iframe>','../images/tribute.jpg'),(20,NULL,NULL,NULL,'PMST NEPAL','Nepal Earthquake House Demolition','Documentary','','You are about to witness a house successfully demolished First ever caught on camera in Nepal After the devastating earthquake 7.9 M hits Nepal on 2015 Many house have been destroyed in it. This is one of the full version video of successful house demolition conducted under Joint effort of following empowerment:<br><br>Special Heavy Equipment Works Pvt Ltd and Group <br>Armed Police Force<br>Nepal Police Force <br>Nepalese Army and<br>Government representatives.\r\n\r\n<br>\r\n<br>Camera : Saajan Shreshta & Kishan Lama\r\n','Concept, Design and Edited : Pema Man Singh Tamang','<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/-oG0cAjqHLU\" frameborder=\"0\" allowfullscreen></iframe>','../images/earthquake.jpg'),(21,NULL,NULL,NULL,'Pema Man Singh Tamang','Interview Session @ Capital FM 92.4 MHz ',NULL,'Intgerview Session','Pema Man Singh Tamang interview Session @ Capital FM 92.4 MHz on program Celebrity of the week host <br> by RJ Manoj KC.',NULL,'<iframe  width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/es0D7D1abn0\" frameborder=\"0\" allowfullscreen></iframe>','../images/default.jpg'),(22,NULL,NULL,NULL,'Raju Rumba','Juni Juni','PMST Nepal (1st Chance)','Slow Rock','<strong>Juni Juni - Raju Rumba (Official  Music Video)</strong><Br>\r\nPMST Nepal (1st Chance)<Br>\r\nLyrics/Compose : Raju Rumba<Br>\r\nModels : Sunita Bhujel and Roshan Kc<Br>\r\nMusic Director :  Pema Man Singh Tamang<Br>\r\nDP/Shot/Edit :  Sagun Lama',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/0Sh6_Tz2wf4\" frameborder=\"0\" allowfullscreen></iframe>','../images/rajuthumb.jpg'),(23,NULL,NULL,NULL,'Songin Rai','Chokho Maya','PMST Nepal (1st Chance)','Slow Rock','<strong>Chokho Maya - Songin Rai (Official  Music Video)</strong><Br>\r\nPMST Nepal (1st Chance)<Br>\r\nLyrics/Compose : Songin Rai<Br>\r\nModels : Nisha Lama<Br>\r\nMusic Director/Color Grading :  Pema Man Singh Tamang<Br>\r\nCamera/Director :  Sagun Lama',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/4Nr1O9L0Pxg\" frameborder=\"0\" allowfullscreen></iframe>','../images/songinvideo.jpg'),(24,NULL,NULL,NULL,'PMST Nepal','Manang Gumba Demolition video and painful story','Documentary','','Manang Gumba Demolition video and its Story behind after 7.9 M Earthquake hits Nepal 2015.<br>\r\nSupport Manag Gumba.\r\n<br>\r\nCamera : Saajan Shrestha<Br>\r\nConcept/Design/Edit : Pema Man Singh Tamang',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/Ht0MmpWW7Yg\" frameborder=\"0\" allowfullscreen></iframe>','../images/managthump.jpg'),(25,NULL,NULL,NULL,'Samir Ghishing \"VTEN\"','Garibi','PMST Nepal (1st Chance)','Hip Hop','<strong>Garibi - Samir Ghishing \"VTEN\" (Official  Music Video)</strong><Br>\r\nPMST Nepal (1st Chance)<Br>\r\nLyrics/Compose : Samir Ghishing<Br>\r\n\r\nMusic Director/Video Edit :  Pema Man Singh Tamang<Br>\r\nCamera/Director :  Sagun Lama',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/Ieeewp40k3k\" frameborder=\"0\" allowfullscreen></iframe>','../images/videothum1.jpg'),(26,NULL,NULL,NULL,'Innocent Criminal','Yuddha','PMST Nepal (1st Chance)','Rock','<strong>Yuddha-Innocent Criminal(Official Music Video)</strong><Br>\r\nPMST Nepal (1st Chance)<Br>\r\nLyrics/Compose : Innocent Criminal<Br>\r\n\r\nMusic Director/Video Edit :  Pema Man Singh Tamang<Br>\r\nCamera/Director :  Sagun Lama',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/OoWuzjC0zvw\" frameborder=\"0\" allowfullscreen></iframe>','../images/nimatube.jpg'),(27,NULL,NULL,NULL,'Pema Man Singh Tamang','Timro Gajalu','PMST Nepal Unplugged','Unplugged','<strong>Timro Gajalu -Pema Man Singh Tamang (Official unplugged)</strong><Br>\r\nPMST Nepal Unplugged<Br>\r\nLyrics/Compose/Music Pema Man Singh Tamang<Br>\r\nCamera : Sagun Lama<Br>\r\nVideo Edit/Concept/Design : Pema Man Singh Tamang<Br>',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/bAhoCBtne2c\" frameborder=\"0\" allowfullscreen></iframe>','../images/timrogajalu.jpg'),(28,NULL,NULL,NULL,'Sagun Lama','Andhakar Chann','PMST Nepal Unplugged','Unplugged','<strong>PMST Nepal Unplugged Session with Sagun Lama - Andhakar Chann</strong><Br>\r\nLyrics/Compose : Sagun Lama<Br>\r\nMusic Director : Pema Man Singh Tamang<Br>\r\nDOP : Sagun Lama<Br>\r\nVideo Edit/Concept/Design : Pema Man Singh Tamang',NULL,'<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/S9BrWATgaPg\" frameborder=\"0\" allowfullscreen></iframe>','../images/sagun1.jpg');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pmstnepa_video'
--

--
-- Dumping routines for database 'pmstnepa_video'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-22 22:08:22
