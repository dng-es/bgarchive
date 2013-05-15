/*
SQLyog Community v11.11 (64 bit)
MySQL - 5.1.30-community : Database - bgarchive
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `backgrounds` */

DROP TABLE IF EXISTS `backgrounds`;

CREATE TABLE `backgrounds` (
  `id_bg` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bg_file` varchar(200) NOT NULL DEFAULT '',
  `bg_license` varchar(255) NOT NULL DEFAULT '',
  `bg_designer` varchar(250) NOT NULL DEFAULT '',
  `bg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bg_users` varchar(100) NOT NULL DEFAULT '',
  `bg_downloads` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_bg`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;

/*Data for the table `backgrounds` */

insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (1,'0000001.png','Free','','2012-12-10 00:36:09','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (2,'0000002.png','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (3,'0000003.png','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (4,'0000004.png','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (5,'0000005.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (6,'0000006.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (7,'0000007.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (8,'0000008.png','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (9,'0000009.png','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (10,'0000010.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (11,'0000011.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (12,'0000012.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (13,'0000013.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (14,'0000014.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (15,'0000015.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (16,'0000016.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (17,'0000017.png','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (18,'0000018.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (19,'0000019.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (20,'0000020.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (21,'0000021.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (22,'0000022.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (23,'0000023.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (24,'0000024.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (25,'0000025.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (26,'0000026.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (27,'0000027.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (28,'0000028.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (29,'0000029.png','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (30,'0000030.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (31,'0000031.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (32,'0000032.png','Free','','2012-12-10 00:36:10','daweed',2);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (33,'0000033.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (34,'0000034.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (35,'0000035.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (36,'0000036.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (37,'0000037.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (38,'0000038.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (39,'0000039.png','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (40,'0000040.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (41,'0000041.png','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (42,'0000042.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (43,'0000043.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (44,'0000044.png','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (45,'0000045.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (46,'0000046.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (47,'0000047.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (48,'0000048.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (49,'0000049.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (50,'0000052.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (51,'0000054.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (52,'0000055.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (53,'0000056.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (54,'0000057.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (55,'0000060.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (56,'0000061.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (57,'0000062.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (58,'0000063.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (59,'0000064.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (60,'0000066.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (61,'0000067.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (62,'0000128.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (63,'0000129.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (64,'0000130.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (65,'0000131.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (66,'0000132.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (67,'0000133.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (68,'0000134.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (69,'0000135.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (70,'0000136.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (71,'0000137.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (72,'0000138.png','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (73,'0000139.png','Free','','2012-12-10 00:36:12','daweed',4);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (74,'0000140.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (75,'0000147.png','Free','','2012-12-10 00:36:12','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (76,'0000153.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (77,'0000172.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (78,'0000173.png','Free','','2012-12-10 00:36:12','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (79,'0000174.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (80,'0000175.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (81,'0000176.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (82,'0000177.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (83,'0000178.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (84,'0000179.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (85,'0000180.png','Free','','2012-12-10 00:36:12','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (86,'0000181.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (87,'0000182.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (88,'0000183.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (89,'0000184.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (90,'0000185.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (91,'0000188.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (92,'0000190.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (93,'0000191.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (94,'0000192.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (95,'0000193.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (96,'0000195.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (97,'0000196.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (98,'0000197.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (99,'0000198.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (100,'0000199.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (101,'0000201.png','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (102,'0000202.png','Creative Commons Attribution','David Noguera','2012-12-10 15:21:09','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (103,'0000203.png','Creative Commons Attribution','David Noguera','2012-12-10 15:23:16','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (104,'0000204.png','Free','','2012-12-12 11:22:42','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (105,'0000205.jpg','Free','','2012-12-12 11:26:52','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (106,'0000206.jpg','Free','','2012-12-12 11:38:17','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (107,'0000207.jpg','Free','','2012-12-12 11:38:17','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (108,'0000208.jpg','Free','','2012-12-12 11:38:18','daweed',4);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (109,'0000209.png','Free','','2012-12-12 11:41:21','daweed',3);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (110,'0000210.png','Creative Commons Attribution','David Noguera','2012-12-12 11:50:21','daweed',4);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (111,'0000211.png','Creative Commons Attribution','David Noguera','2012-12-12 11:50:22','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (112,'0000209.jpg','Creative Commons Attribution','Patrick Hoesly','2012-12-12 16:27:50','daweed',10);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (113,'0000212.png','','','2013-05-07 11:03:32','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (114,'0000213.png','','','2013-05-07 11:07:38','daweed',0);

/*Table structure for table `backgrounds_tags` */

DROP TABLE IF EXISTS `backgrounds_tags`;

CREATE TABLE `backgrounds_tags` (
  `id_bg` int(11) unsigned NOT NULL,
  `bg_tag` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bg`,`bg_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `backgrounds_tags` */

insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (1,'circles');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (1,'dots');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (1,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (2,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (2,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (3,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (3,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (4,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (5,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (6,'flowers');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (6,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (7,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (8,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (9,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (10,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (10,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (11,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (12,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (13,'dots');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (13,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (14,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (14,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (15,'circles');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (15,'dots');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (15,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (16,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (17,'flowers');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (17,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (18,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (18,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (19,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (19,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (19,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (20,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (20,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (20,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (21,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (22,'tile');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (22,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (23,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (23,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (24,'bubbles');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (24,'dots');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (24,'points');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (24,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (25,'celtic');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (25,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (26,'celtic');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (26,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (27,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (27,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (28,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (29,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (30,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (31,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (32,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (32,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (33,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (33,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (34,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (34,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (35,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (35,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (36,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (36,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (37,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (38,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (38,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (39,'blue');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (40,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (41,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (41,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (42,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (43,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (43,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (44,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (45,'grey');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (46,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (47,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (48,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (49,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (50,'geometrical');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (50,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (51,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (52,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (53,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (54,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (55,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (55,'grey');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (56,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (56,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (57,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (58,'blue');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (59,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (59,'dots');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (59,'yellow');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (60,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (60,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (61,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (61,'grey');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (63,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (63,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (64,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (64,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (65,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (65,'grey');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (68,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (68,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (71,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (72,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (72,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (73,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (73,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (74,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (74,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (75,'red');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (76,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (76,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (76,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (77,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (78,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (79,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (80,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (80,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (82,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (83,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (84,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (85,'blue');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (86,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (87,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (87,'wood');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (88,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (89,'white');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (90,'white');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (91,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (92,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (93,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (94,'brown');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (95,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (96,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (97,'blue');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (98,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (98,'grey');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (98,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (99,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (99,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (99,'squares');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (100,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (101,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (102,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (102,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (103,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (103,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (104,'black');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (104,'maze');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (105,'abstract');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (105,'blue');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (105,'circles');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (106,'animals');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (106,'leopard');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (107,'animals');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (107,'leopard');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (108,'animals');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (108,'zebra');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (109,'dots');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (109,'yellow');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (110,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (110,'white');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (111,'transparent');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (111,'white');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (112,'grass');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (112,'green');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (113,'clothes');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (113,'grey');
insert  into `backgrounds_tags`(`id_bg`,`bg_tag`) values (114,'black');

/*Table structure for table `configuracion` */

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion` (
  `telefono` varchar(250) NOT NULL DEFAULT '',
  `telefono2` varchar(250) DEFAULT '',
  `fax` varchar(250) NOT NULL DEFAULT '',
  `direccion` longtext NOT NULL,
  `footer` longtext NOT NULL,
  `ContactEmail` varchar(250) NOT NULL DEFAULT '',
  `SiteName` varchar(250) NOT NULL DEFAULT '',
  `SiteTitle` varchar(250) NOT NULL DEFAULT '',
  `SiteDesc` varchar(250) NOT NULL DEFAULT '',
  `SiteSubject` varchar(250) NOT NULL DEFAULT '',
  `SiteKeywords` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `configuracion` */

insert  into `configuracion`(`telefono`,`telefono2`,`fax`,`direccion`,`footer`,`ContactEmail`,`SiteName`,`SiteTitle`,`SiteDesc`,`SiteSubject`,`SiteKeywords`) values ('','','','','','dnoguera@imagar.com','bgarchive.com','bgarchive','bgarchive, background patterns collection','bgarchive, background patterns collection','bg, backgrounds, patterns');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `user_password` varchar(200) NOT NULL DEFAULT '' COMMENT 'codificacion sha1',
  `user_level` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `date_add` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `date_disabled` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`username`,`user_password`,`user_level`,`email`,`name`,`date_add`,`confirmed`,`disabled`,`date_disabled`) values ('admin','2b643cbd20f01f88fe23af8d5566cd93cd0907a6','0','nogueradavid@hotmail.com','Administrador1','2009-01-01 12:00:00',1,0,'1970-01-01 00:00:00');

/* Function  structure for function  `SPLIT_STR` */

/*!50003 DROP FUNCTION IF EXISTS `SPLIT_STR` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `SPLIT_STR`(
  x VARCHAR(255),
  delim VARCHAR(12),
  pos INT
) RETURNS varchar(255) CHARSET utf8
RETURN REPLACE(SUBSTRING(SUBSTRING_INDEX(x, delim, pos),
       LENGTH(SUBSTRING_INDEX(x, delim, pos -1)) + 1),
       delim, '') */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
