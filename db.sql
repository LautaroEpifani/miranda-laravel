-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: node_express_api
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guest` varchar(50) NOT NULL,
  `room_id` int DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `order_date` datetime NOT NULL,
  `special_request` text NOT NULL,
  `status` enum('Check In','Check Out','In Progress') NOT NULL,
  `room_number` int NOT NULL,
  `color` varchar(1) DEFAULT NULL,
  `bgrColor` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'Miss Kellie O\'Reilly',6,'2023-04-14','2024-05-06','2023-05-11 20:28:48','Consequatur magnam provident amet repellendus odit consectetur quis.\nVoluptas asperiores possimus officiis nisi aliquid.\nNemo quo sequi iure maiores veniam ipsam error nihil.\nAut inventore odit sed corporis in assumenda aspernatur explicabo.','In Progress',7,'',''),(2,'Damon Schmeler',7,'2023-07-21','2022-12-12','2022-12-23 07:47:28','Consequuntur eaque asperiores reprehenderit.\nCulpa minus non.\nDolorum quidem deserunt iusto quibusdam deserunt quis consequuntur enim voluptas.\nAmet deserunt modi fugiat esse.','Check Out',10,'',''),(3,'Floyd Runte',4,'2022-10-18','2023-03-03','2022-11-26 06:13:36','Repellendus sed sint.\nDolorem nisi temporibus ullam veniam dolore sapiente nihil iste quisquam.\nHarum exercitationem autem consectetur.\nTempore ad ullam non nihil labore voluptatum sint.','In Progress',8,'',''),(4,'Nelson Gleichner',5,'2022-08-19','2023-06-01','2022-11-21 18:47:14','Alias eos nulla atque consectetur quae velit tempore cupiditate beatae.\nMolestiae doloribus sequi saepe placeat.\nQuaerat iusto sunt doloremque numquam qui asperiores officia ducimus ea.\nDelectus doloremque sint nostrum explicabo vel.','Check Out',3,'',''),(6,'Dr. Sylvester Grady',10,'2023-12-26','2023-05-28','2024-03-06 16:42:21','Reprehenderit quam rerum molestias doloremque explicabo quos quis amet quisquam.\nFacilis numquam suscipit repudiandae voluptatum.\nSaepe fugit libero possimus nulla blanditiis blanditiis neque.\nDolorem possimus perspiciatis optio corrupti.','In Progress',1,'',''),(7,'Alexandra Paucek',2,'2022-11-27','2022-08-08','2023-03-21 22:44:11','Repellat explicabo eius soluta.\nAb saepe laudantium doloremque voluptatem aperiam assumenda.\nOdio voluptas asperiores.\nNon similique itaque aspernatur at occaecati minima alias.','Check In',10,'',''),(8,'Evelyn Bednar',10,'2022-10-28','2023-03-17','2022-12-12 11:56:48','Minima saepe inventore quia.\nIn facilis autem expedita consequuntur voluptatem in.\nBeatae assumenda repellendus odit quod amet molestiae incidunt.\nQuaerat natus officia cupiditate atque.','Check Out',2,'',''),(9,'Jean Mayer V',7,'2023-05-18','2024-03-11','2022-07-12 14:02:27','Itaque officia odio aperiam qui illum nobis velit.\nSaepe debitis voluptatum optio ullam eveniet nemo saepe quis officia.\nQuo quaerat commodi quidem magni.\nId cumque voluptate pariatur magni praesentium quod fugit rem.','Check Out',6,'',''),(10,'Christian Thompson Sr.',10,'2023-11-12','2022-08-16','2023-02-08 23:12:28','Est aliquam quas maiores voluptatem praesentium modi nisi quod eum.\nDebitis amet fugit minima distinctio minima aperiam laboriosam natus ipsum.\nEaque tenetur earum suscipit error accusamus ipsa unde enim.\nMaiores non corrupti nobis voluptatibus dignissimos vel deserunt magni.','Check Out',6,'',''),(11,'Marlon Rodriguez IV',2,'2024-04-09','2023-12-14','2024-01-11 10:57:57','Soluta atque nam beatae at quod assumenda amet.\nBlanditiis est hic.\nVeritatis molestias ex veritatis fugit eligendi facere facilis maxime iure.\nAb dolorum similique exercitationem eligendi optio maxime voluptatum atque quos.','Check In',8,'',''),(12,'Pete Franey',10,'2023-11-17','2023-05-17','2023-07-26 17:40:30','Impedit possimus mollitia sunt animi inventore odio quae quasi ex.\nPerspiciatis laborum corporis ullam laboriosam ea id.\nVoluptates quos reiciendis dignissimos.\nMollitia praesentium ut voluptatum.','In Progress',3,'',''),(13,'Neil Corwin',8,'2023-01-04','2023-09-11','2024-05-01 22:03:25','Temporibus enim mollitia.\nVelit accusamus expedita doloremque.\nDolorum libero itaque alias doloribus facere praesentium possimus quis.\nPerferendis placeat non minima facilis.','Check Out',5,'',''),(14,'Mr. Lonnie Farrell',3,'2023-02-19','2023-06-02','2023-01-05 01:05:38','Illum inventore sit vel repellat neque enim autem impedit.\nVoluptatem enim ipsum quae ad omnis.\nEsse distinctio sunt modi occaecati sed velit fugiat eos.\nHic quibusdam velit nam illo est.','In Progress',5,'',''),(15,'Sylvester Hoeger',8,'2023-10-17','2023-01-14','2023-07-06 16:45:52','Mollitia quis vero ad sed.\nExercitationem possimus id reprehenderit in.\nConsequatur saepe ad sequi harum.\nQuas vitae iure tempora.','In Progress',0,'',''),(17,' ',1,'2023-08-10','2023-08-18','2023-08-03 10:09:15',' ','Check In',0,' ',' '),(18,'Check Availability',1,'2023-08-02','2023-08-03','2023-08-03 10:17:43',' ','Check In',0,' ',' '),(19,'Check Availability',1,'2023-08-16','2023-08-17','2023-08-03 10:19:32',' ','Check In',0,' ',' '),(20,'Check Availability',1,'2023-08-16','2023-08-17','2023-08-03 10:19:39',' ','Check In',0,' ',' '),(21,'Check Availability',1,'2023-08-16','2023-08-17','2023-08-03 10:19:56',' ','Check In',0,' ',' '),(22,'Check Availability',1,'2023-08-16','2023-08-17','2023-08-03 10:20:16',' ','Check In',0,' ',' '),(23,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:20:30',' ','Check In',0,' ',' '),(24,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:20:45',' ','Check In',0,' ',' '),(25,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:21:07',' ','Check In',0,' ',' '),(26,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:21:16',' ','Check In',0,' ',' '),(27,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:21:31',' ','Check In',0,' ',' '),(28,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:22:33',' ','Check In',0,' ',' '),(29,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:22:44',' ','Check In',0,' ',' '),(30,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:22:57',' ','Check In',0,' ',' '),(31,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:23:11',' ','Check In',0,' ',' '),(32,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:23:29',' ','Check In',0,' ',' '),(33,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:23:50',' ','Check In',0,' ',' '),(34,'Check Availability',1,'2023-08-15','2023-08-15','2023-08-03 10:24:17',' ','Check In',0,' ',' '),(35,'Check Availability',1,'2023-08-16','2023-08-18','2023-08-03 10:29:14',' ','Check In',0,' ',' '),(36,'Check Availability',1,'2023-08-16','2023-08-18','2023-08-03 10:29:49',' ','Check In',0,' ',' '),(37,'Check Availability',1,'2023-08-16','2023-08-18','2023-08-03 10:30:01',' ','Check In',0,' ',' '),(38,'Check Availability',1,'2023-08-16','2023-08-18','2023-08-03 10:30:12',' ','Check In',0,' ',' '),(39,'Check Availability',1,'2023-08-16','2023-08-18','2023-08-03 10:34:02',' ','Check In',0,' ',' ');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hour` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'2023-04-18','2024-02-14 15:07:48','Kristen Kassulke','Rylan_Jacobi16@gmail.com','89-756023-640965-1','questioningly','At quis illum.\nNam eligendi voluptate corrupti commodi minima facere ipsum.\nEnim quibusdam ut odit sed velit eaque unde eius.\nModi nihil doloremque natus dignissimos deserunt at unde provident.\nEx ducimus quidem sapiente sed unde aperiam pariatur natus praesentium.\nError molestias in reiciendis tempora reprehenderit consequuntur.'),(2,'2023-06-05','2023-10-11 23:44:14','Ida Murphy','Orlo_Gislason5@yahoo.com','77-665063-071180-6','especially','Id ut asperiores alias perferendis rerum porro reprehenderit qui maiores.\nSoluta quae natus possimus officia est perspiciatis aut aliquid.\nLaborum libero repellat blanditiis nemo dignissimos voluptas quis animi.\nDicta dignissimos commodi.\nQuos esse minima ex dolorem.\nAlias laborum distinctio debitis asperiores quibusdam vel est libero.'),(3,'2023-11-13','2024-07-02 13:01:41','Anakin Skywalker','Breana.Pollich@gmail.com','80-326804-055823-3','coolly','Rerum ratione id aut aliquam.\nModi quisquam saepe.\nLaudantium atque mollitia unde numquam exercitationem quos sapiente.\nSed odio dolorum suscipit perspiciatis voluptatum deleniti at nihil.\nAccusantium voluptatibus quos libero mollitia dolorum dolorem sunt.\nAperiam harum nemo autem doloribus.'),(5,'2023-05-31','2022-11-09 08:42:07','Nelson Cormier','Chelsie37@yahoo.com','44-577908-236440-9','sheepishly','Nesciunt non illum.\nSunt dolores beatae quaerat iure odio soluta doloremque possimus reiciendis.\nRerum ad delectus libero.\nMaiores tenetur quidem eius aliquam nostrum.\nReiciendis sunt excepturi fugit asperiores quia.\nDolores placeat neque harum excepturi adipisci.'),(6,'2024-05-08','2023-11-11 02:21:46','Jeffrey Kreiger','Virginia.Corkery39@yahoo.com','11-732206-762761-0','thoughtfully','Atque repellendus dolorum at mollitia maiores porro labore.\nNemo mollitia distinctio illum sapiente corporis.\nVoluptate perspiciatis culpa magnam.\nId laborum rerum commodi exercitationem.\nQuam necessitatibus laudantium facilis eius laudantium numquam nisi ea earum.\nNesciunt quis quam nemo perspiciatis asperiores repellat voluptatem quidem.'),(7,'2023-08-13','2023-08-23 12:17:41','Lola Renner DVM','Rosie42@gmail.com','47-273454-957242-1','openly','Reprehenderit corporis iusto maxime nemo.\nBlanditiis et ad.\nMagni laboriosam ea vero aspernatur dolorum ratione.\nCommodi fugit recusandae voluptatibus iure repudiandae corrupti vitae.\nDolor quasi esse fuga porro commodi ipsam repellendus.\nEligendi sint excepturi nulla fugit consequuntur aperiam soluta labore laboriosam.'),(8,'2023-06-08','2024-04-02 20:04:27','Julio Wyman','Lesly.Harris89@yahoo.com','17-205949-547681-2','helplessly','Qui nostrum atque commodi molestias.\nDeleniti expedita vero voluptatem.\nDolorum eligendi nostrum in.\nMagnam ipsam accusantium ea.\nNihil eum provident enim dolores necessitatibus asperiores ipsam similique.\nIusto nemo debitis ipsam sit error voluptatum enim optio.'),(9,'2023-11-05','2023-01-13 04:41:28','Juana McGlynn','Simone.Bernhard56@yahoo.com','72-197926-557573-1','meaningfully','Consequuntur aperiam ipsum recusandae sed consequatur occaecati aperiam quo.\nVelit occaecati delectus amet quae nihil vel ipsam quis tenetur.\nQuaerat vitae architecto maiores quo pariatur eaque exercitationem aliquid.\nMaxime expedita recusandae recusandae non cupiditate quisquam accusamus veniam quasi.\nCommodi dicta placeat culpa facere explicabo.\nFugiat quas repellat.'),(10,'2023-06-05','2023-02-01 04:15:06','Gail Bechtelar','Frederick.Anderson35@hotmail.com','68-207070-120210-1','patiently','Numquam vitae optio cumque amet pariatur beatae amet consequatur totam.\nMaiores adipisci molestiae laudantium repellendus alias inventore maiores magnam.\nMollitia placeat nam quasi.\nQuae ab vel.\nSit nesciunt possimus quia iste culpa provident doloremque sunt.\nIusto unde voluptas ratione nostrum quae cupiditate laborum.'),(11,'2022-07-28','2024-04-14 15:48:37','Lindsey Buckridge I','Eladio76@gmail.com','74-527771-436870-5','calmly','Eveniet fugit voluptates explicabo deleniti magnam facere non.\nNumquam totam nemo.\nNon doloremque et consequatur omnis reprehenderit assumenda.\nAperiam beatae eveniet.\nIpsam facere suscipit porro dolor accusamus non.\nPariatur alias distinctio dicta nostrum nulla perferendis.'),(12,'2023-09-30','2023-09-27 13:14:44','Mr. Franklin Morar DVM','Troy_Tromp@hotmail.com','99-935684-055844-8','abnormally','Cupiditate nihil in doloribus eos.\nMaxime non porro sint explicabo unde.\nQuia at fugiat provident quidem libero illo.\nInventore possimus veniam natus sapiente.\nVoluptatum reprehenderit ducimus ipsum.\nConsequatur incidunt cupiditate alias sapiente labore.'),(13,'2022-12-30','2023-11-06 20:38:38','Anna Nikolaus IV','Tatum79@gmail.com','24-797473-690968-9','adventurously','Deserunt cupiditate magnam numquam eos voluptas.\nRem corrupti nam illo aliquam eos rem doloremque impedit repudiandae.\nAspernatur quasi minima.\nRepellendus officiis quae.\nAliquam quos tempora exercitationem nisi commodi voluptatem quaerat blanditiis recusandae.\nTempora quisquam ad minima dolores explicabo consectetur itaque.'),(14,'2023-06-07','2023-08-10 01:55:52','Nora Johnston','Milo.McClure@hotmail.com','29-456066-695499-3','delightfully','Veritatis quisquam voluptatibus pariatur.\nMagnam unde perspiciatis.\nAut unde eligendi ipsum cumque in doloremque hic aut.\nEum fugiat minima cum perferendis a.\nNeque impedit molestiae a dolorum iure.\nMolestias necessitatibus ab.'),(15,'2023-11-06','2023-11-06 00:00:00','Eren Yeager','eren@gmail.com','7587263782','Room Amenities','mi integer ac neque duis bi'),(16,'2023-08-02','2023-08-02 18:31:06','asd','asd@asd.com','+34545656454','asd','asd');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `images` text NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_number` int NOT NULL,
  `amenities` text NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `offer` varchar(3) NOT NULL,
  `offer_price` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `cancellation` text NOT NULL,
  `status` enum('Available','Booked') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'Oriental','https://images.unsplash.com/photo-1611971263023-105938ce12ed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80','Licensed',2,'[{\"a_name\":\"\",\"icon\":\"\"}]',370,86,'yes',345,'Assumenda quia minus.\nVelit natus aspernatur accusamus possimus mollitia nam ut id dolore.\nSit autem eaque vitae saepe culpa ad natus vero rerum.\nMollitia animi eligendi quae saepe rem perspiciatis recusandae impedit reiciendis.','Inventore dolorem magni quibusdam dolores quos excepturi dolor beatae eligendi.\nRecusandae sed rem ipsum nobis quibusdam ipsam.\nRatione recusandae sunt cumque possimus sunt adipisci provident a tenetur.\nExcepturi voluptas nulla.\nRepellat perferendis molestiae debitis nulla neque perferendis ullam impedit.\nSit quas animi itaque amet laudantium impedit dolor.\nVoluptates ullam aperiam alias sapiente voluptatum deserunt porro eius ab.\nAd eum laboriosam eaque enim soluta quos quod.','Available'),(2,'Sleek','https://images.unsplash.com/photo-1587985064135-0366536eab42?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80','Awesome',3,'[{\"a_name\":\"\",\"icon\":\"\"}]',434,93,'no',400,'Occaecati molestias in ducimus architecto iste quibusdam.\nLaborum autem ex maiores fugiat.\nQuae odit veritatis provident perspiciatis aliquid non eligendi fuga.\nAccusamus ut in.','Laudantium porro illo magni hic minus reiciendis exercitationem.\nPerferendis ipsum veniam accusantium sint voluptatem doloremque rem.\nRerum ducimus repellat necessitatibus est earum nulla quasi hic.\nIllum natus dolorem fuga velit facere alias molestiae libero.\nNostrum voluptatem aut magnam nulla veniam quasi.\nVoluptas debitis incidunt mollitia aperiam consectetur aut quas.\nAliquid qui laudantium consequatur ipsa minima inventore deserunt quam.\nDucimus et quod maxime sint minus.','Booked'),(3,'Fantastic','https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80','Gorgeous',3,'[{\"a_name\":\"\",\"icon\":\"\"}]',393,36,'no',252,'Blanditiis exercitationem facilis possimus.\nPlaceat delectus ipsum temporibus voluptatibus nulla labore blanditiis.\nMollitia illo voluptatum assumenda rerum id.\nVoluptatem doloremque iusto.','Dignissimos facere at iste unde.\nDoloribus id necessitatibus amet consequatur nostrum culpa voluptas eius.\nAt amet labore corporis cumque placeat pariatur sint odit nemo.\nHic iure ab quibusdam mollitia excepturi non.\nConsequatur earum pariatur.\nIpsa distinctio voluptates doloremque esse at.\nRatione voluptatem laudantium sit.\nTenetur itaque laborum sequi voluptate sunt quod minima architecto quaerat.','Available'),(4,'Elegant','https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80','Luxurious',3,'[{\"a_name\":\"\",\"icon\":\"\"}]',435,46,'no',235,'Libero libero deleniti tempore beatae.\nAt optio blanditiis provident illum expedita iure eveniet voluptatum.','Voluptatibus consequuntur alias sint ad quisquam quis repellendus quis dolorum.\nTemporibus commodi quas deserunt.\nIllo maiores in ratione illum tenetur debitis voluptatibus ut.\nUt odit ex molestias sequi at non provident totam tenetur.\nRepellendus maxime accusantium voluptatem excepturi voluptates deleniti.\nLibero sapiente vel perspiciatis hic.\nDelectus assumenda nostrum porro eligendi hic reiciendis natus.\nEum maxime ad voluptatibus tempora repellendus ex id.','Booked'),(5,'Practical','https://images.unsplash.com/photo-1661796428175-55423b19409f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80','Refined',9,'[{\"a_name\":\"\",\"icon\":\"\"}]',460,2,'yes',451,'Architecto magni quia blanditiis repudiandae asperiores error.\nDelectus quasi repellendus odit dignissimos quae exercitationem quod commodi.','Illum nobis minima officiis distinctio error est nesciunt.\nQuasi est minus ratione aliquid quas eligendi ratione.\nNihil deleniti sequi dolorum numquam.\nQuam repudiandae neque amet esse modi labore nulla blanditiis explicabo.\nInventore aliquam optio maiores vitae voluptatem molestias necessitatibus.\nCumque quo voluptates.\nDistinctio velit recusandae sit illo repudiandae corporis error.\nVoluptates ipsam voluptatibus esse iusto nesciunt quo.','Booked'),(6,'Handmade','https://plus.unsplash.com/premium_photo-1678297270523-8775c817d0b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80','Bespoke',10,'[{\"a_name\":\"\",\"icon\":\"\"}]',368,32,'no',250,'Doloremque corrupti libero tenetur illo consequatur quis.\nIure fugit id odio.','Iste ipsa quasi in debitis consectetur.\nMaiores fuga earum delectus pariatur cumque esse nihil porro.\nNulla nihil minima maxime.\nRecusandae atque molestias porro.\nDolores laudantium id.\nRepudiandae provident repellendus nemo.\nError veritatis quis autem similique vero sunt qui impedit.\nRecusandae corrupti excepturi omnis ea officia cum eligendi iste.','Available'),(7,'Ergonomic','https://images.unsplash.com/photo-1584132915807-fd1f5fbc078f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80','Rustic',1,'[{\"a_name\":\"\",\"icon\":\"\"}]',482,12,'no',424,'Nobis ratione id.\nPlaceat cupiditate quia aliquam quidem dolores repellendus.','Qui libero velit ab ipsam nam tenetur.\nPariatur dolore eligendi.\nVel deleniti maiores aut atque unde.\nSunt quaerat accusantium suscipit.\nIure debitis reiciendis sapiente praesentium.\nDolorem sapiente doloribus libero distinctio nostrum ab incidunt magni eveniet.\nAt fuga delectus ut repellat.\nIllo quae necessitatibus cumque facere rem earum.','Booked'),(8,'Bespoke','https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80','Elegant',10,'[{\"a_name\":\"\",\"icon\":\"\"}]',482,84,'no',300,'Vitae aperiam blanditiis odit illo fuga ex dolor eum.\nMollitia maiores mollitia adipisci distinctio tenetur mollitia cum.','Nesciunt deleniti excepturi quam maxime facere a eaque.\nAnimi reiciendis sit et beatae ex doloremque iste.\nOdit sequi adipisci.\nAtque aliquam amet.\nVoluptatem quo in in.\nCulpa excepturi corporis quas inventore autem fuga dignissimos perspiciatis at.\nQuia corrupti molestias itaque natus ea saepe doloremque aut.\nInventore debitis molestias dignissimos sapiente sequi.','Available'),(9,'Rustic','https://plus.unsplash.com/premium_photo-1661901997525-fdbfb88d8554?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=629&q=80','Electronic',4,'[{\"a_name\":\"\",\"icon\":\"\"}]',354,46,'no',191,'Soluta at explicabo tempora quo aspernatur a reprehenderit.\nOfficiis error voluptatem pariatur possimus ad autem tempora.','Libero veniam distinctio soluta consectetur accusamus nostrum quidem.\nAt nihil consequuntur cumque.\nNumquam voluptatibus et.\nConsectetur sit autem architecto molestiae vero.\nRem perspiciatis temporibus ut maxime.\nIn unde deleniti quis provident at.\nDeleniti nulla aperiam accusamus iste aliquid iste necessitatibus sint.\nEa quasi rerum.','Booked'),(10,'Luxurious','https://plus.unsplash.com/premium_photo-1661962493427-910e3333cf5a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=580&q=80','Bespoke',1,'[{\"a_name\":\"\",\"icon\":\"\"}]',382,18,'yes',313,'Dignissimos libero numquam quia at blanditiis qui unde.\nReiciendis fugit repellendus.','Recusandae dolor officia doloremque iste beatae.\nIpsum natus excepturi maxime accusamus consequatur exercitationem odio officiis.\nRecusandae aut illum quam veniam dicta.\nNobis consequuntur corrupti ex sequi distinctio impedit.\nEveniet mollitia voluptas laboriosam nemo provident adipisci deleniti omnis ex.\nLaboriosam iure saepe beatae quasi soluta repudiandae eius.\nRepellat iusto corrupti explicabo.\nFugiat dolores enim nobis quia soluta blanditiis ea.','Booked');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` text NOT NULL,
  `start_date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Canyon','https://avatars.githubusercontent.com/u/11041054?random=184','Esta_Wunsch@gmail.com','d54934074ede7cfca93657b6a0b672905a5bfdb54546d4f3aff05969436db187c4831f3bb6234ec19c1a10214149cb093fefe143813e0a26fecb5afd0ecb9bb4','2023-07-10','Minus ab ab quidem.\nOdio non hic totam ea praesentium laborum excepturi officia molestiae.\nNeque magnam et animi praesentium mollitia iste beatae.\nMagnam nesciunt a quod sapiente.','78-132346-869106-9','Inactive','Reception'),(3,'Kent Halvorson','https://avatars.githubusercontent.com/u/39416265?random=907','Stewart_Frami@yahoo.com','eaffb5248915c4212ec9a555e2e46b2b3b3bee6d23fee167dc7f1417822c6276ff2f6f6188faeeb07ae6caf9655dffe26b61fcdd971a5fa1bf763cdc12fb821b','2022-10-03','Nihil cum et vel itaque ratione.\nVoluptatibus eligendi architecto rem repudiandae natus impedit odio tempora distinctio.','15-098590-271607-5','Active','Room Service'),(4,'Hattie Jaskolski','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/107.jpg?random=759','Fred42@hotmail.com','286e485ac1a6d7f239c23c79d2886a97532641138b47d76ca9734df1f2ff1380954c8eb939cb232e652976998009f1b6340c89c8140ef1009516577596af87e2','2023-02-01','Itaque dignissimos illum aliquam praesentium rerum deserunt minima sit nemo.\nQuam eveniet aut veniam.','01-738259-878819-1','Active','Manager'),(5,'Alexandra Stroman','https://avatars.githubusercontent.com/u/96683693?random=444','Maia87@yahoo.com','721a0ecae0a3eeb4580a1e419ee2aa1d26d948a647e98234924fc463125e8a9be0eb29fb710ac2a845b6094c749da9282e5c945477e80e5560bf7785573e830c','2023-01-21','Velit dicta dolorem nisi dicta.\nRepudiandae reiciendis consequuntur explicabo omnis distinctio.','93-280154-029218-6','Active','Room Service'),(6,'Dr. Sammy Rodriguez','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/52.jpg?random=275','Lizeth9@hotmail.com','19373c6496ad12db02d310ebc05e7ea5e4dd41f849397f1c8e74c24fdc232cc723c75b2f3b848a37595835972fb7fa9be7fac9832cbdb8611c03b35dd09c601f','2023-11-14','Minima porro velit minus placeat esse.\nTemporibus laborum itaque reprehenderit amet saepe consequuntur esse.','02-119726-576317-6','Inactive','Room Service'),(7,'Kellie Stoltenberg','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/377.jpg?random=676','Braulio.Simonis65@hotmail.com','549f6e340b5b6cabfea17c6cf20baa65625c5ddac242e65bec627b1eac3c76f658ea10b1a67babffff36036058d5421c186407a505dcc5d0836ad145b40c0026','2024-01-05','Sunt qui rem iusto voluptate quis velit provident.\nAtque sed perspiciatis facilis iste error distinctio corporis incidunt minus.','25-310821-756763-0','Inactive','Room Service'),(8,'Melody Moore-Schimmel','https://avatars.githubusercontent.com/u/58461106?random=320','Bria_Schuster28@hotmail.com','2b7c41b2749a033d88afefa32394d25a80246dc6928dc9aa8915c25abf05668d306035e95b4bf7068001897bb912b010d9822f90d1ced4ef40cd5141574a756d','2023-02-20','Reiciendis eligendi magnam accusantium.\nRepellat nisi impedit fugit possimus voluptatibus accusantium.','47-226009-895095-8','Inactive','Reception'),(9,'Jackie Kuhn','https://avatars.githubusercontent.com/u/23036809?random=774','Tressa.Bergnaum23@yahoo.com','c1cbb102b6efe55e91888b35bd4b80bbf7705f6bd1ba0222af527d99bc63df0172d6291b5f750efb82607e9c0e56f789b13321bfad67b5735bf7d1d6dec5f67b','2024-05-05','Neque qui fuga.\nVoluptate porro aperiam modi beatae magnam non quam.','22-317033-579955-9','Inactive','Room Service'),(10,'Kristina Goodwin','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1058.jpg?random=366','Neal92@yahoo.com','7ec6d6a13f879e4edfe76157ba5776cfc93f24e67ff347433cd72c841265bc88b91d63e04b14dfd09921c856e909af4e0a460847a364b61523b9bb27226320af','2022-11-11','Commodi eveniet nesciunt atque deleniti vel maxime ad.\nDoloribus minus provident quis.','02-601388-979957-6','Active','Reception'),(11,'Lauren Cormier','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/957.jpg?random=75','Destin68@yahoo.com','3f9753301c0572301d96983b09ed64a0f63f4235e4d2c8d76bf34f0c25b15735bf06af6ee9ce43384976bf4d3c0a3ee8422294e924c50ad3de0b5dd9af43c4e8','2023-07-21','Voluptatem repellat dolor aut doloribus.\nNatus perspiciatis perferendis facere sed minima tempora corporis.','68-435048-033597-7','Active','Reception'),(12,'Dr. Anna Mraz-Boyle','https://avatars.githubusercontent.com/u/36900102?random=213','Bradly.Huels@gmail.com','0e024ea114fa25c01269edf78d9c0540f621733aa0b0754cfb6ada6d039ad424485899abe6f2bb9eb33106065fcb853c029b3e7b960ed74aefad9d854385ade5','2024-03-09','Aut nostrum maiores deleniti laboriosam vero eos voluptates ea.\nVoluptates saepe ipsa quae.','77-451214-252384-2','Inactive','Reception');
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

-- Dump completed on 2023-08-07 12:48:51
