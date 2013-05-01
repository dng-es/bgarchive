/*
SQLyog Enterprise - MySQL GUI v7.11 
MySQL - 5.1.40-community : Database - bgarchive
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`bgarchive` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bgarchive`;

/*Table structure for table `backgrounds` */

DROP TABLE IF EXISTS `backgrounds`;

CREATE TABLE `backgrounds` (
  `id_bg` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bg_file` varchar(200) NOT NULL DEFAULT '',
  `bg_tags` longtext NOT NULL,
  `bg_license` varchar(255) NOT NULL DEFAULT '',
  `bg_designer` varchar(250) NOT NULL DEFAULT '',
  `bg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bg_users` varchar(100) NOT NULL DEFAULT '',
  `bg_downloads` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_bg`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

/*Data for the table `backgrounds` */

insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (1,'0000001.png','transparent, dots, circles','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (2,'0000002.png','transparent, geometrical','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (3,'0000003.png','transparent, geometrical','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (4,'0000004.png','transparent','Free','','2012-12-10 00:36:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (5,'0000005.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (6,'0000006.png','transparent, flowers','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (7,'0000007.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (8,'0000008.png','transparent','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (9,'0000009.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (10,'0000010.png','transparent, wood','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (11,'0000011.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (12,'0000012.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (13,'0000013.png','transparent, dots','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (14,'0000014.png','transparent, squares','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (15,'0000015.png','transparent, dots, circles','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (16,'0000016.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (17,'0000017.png','transparent, flowers','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (18,'0000018.png','transparent, geometrical','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (19,'0000019.png','transparent, geometrical, squares','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (20,'0000020.png','transparent, geometrical, squares','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (21,'0000021.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (22,'0000022.png','transparent, tile','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (23,'0000023.png','transparent, geometrical','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (24,'0000024.png','transparent, points, dots, bubbles','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (25,'0000025.png','transparent, celtic','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (26,'0000026.png','transparent, celtic','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (27,'0000027.png','transparent, squares','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (28,'0000028.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (29,'0000029.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (30,'0000030.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (31,'0000031.png','transparent','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (32,'0000032.png','wood, brown','Free','','2012-12-10 00:36:10','daweed',2);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (33,'0000033.png','black, geometrical','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (34,'0000034.png','wood, brown','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (35,'0000035.png','wood, brown','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (36,'0000036.png','black, squares','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (37,'0000037.png','black','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (38,'0000038.png','wood, brown','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (39,'0000039.png','blue','Free','','2012-12-10 00:36:10','daweed',1);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (40,'0000040.png','brown','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (41,'0000041.png','wood, brown','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (42,'0000042.png','black','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (43,'0000043.png','black, squares','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (44,'0000044.png','black','Free','','2012-12-10 00:36:10','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (45,'0000045.png','grey','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (46,'0000046.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (47,'0000047.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (48,'0000048.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (49,'0000049.png','brown','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (50,'0000052.png','transparent, geometrical','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (51,'0000054.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (52,'0000055.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (53,'0000056.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (54,'0000057.png','black','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (55,'0000060.png','black, grey','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (56,'0000061.png','squares, brown','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (57,'0000062.png','green','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (58,'0000063.png','blue','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (59,'0000064.png','brown, yellow, dots','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (60,'0000066.png','black, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (61,'0000067.png','grey, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (62,'0000128.png','','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (63,'0000129.png','green, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (64,'0000130.png','green, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (65,'0000131.png','grey, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (66,'0000132.png','','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (67,'0000133.png','','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (68,'0000134.png','squares, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (69,'0000135.png','','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (70,'0000136.png','','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (71,'0000137.png','clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (72,'0000138.png','squares, clothes','Free','','2012-12-10 00:36:11','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (73,'0000139.png','squares, brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (74,'0000140.png','squares, brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (75,'0000147.png','red','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (76,'0000153.png','clothes, squares, green','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (77,'0000172.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (78,'0000173.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (79,'0000174.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (80,'0000175.png','black,clothes','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (81,'0000176.png','','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (82,'0000177.png','brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (83,'0000178.png','brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (84,'0000179.png','brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (85,'0000180.png','blue','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (86,'0000181.png','brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (87,'0000182.png','wood,brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (88,'0000183.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (89,'0000184.png','white','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (90,'0000185.png','white','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (91,'0000188.png','brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (92,'0000190.png','green','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (93,'0000191.png','green','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (94,'0000192.png','brown','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (95,'0000193.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (96,'0000195.png','green','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (97,'0000196.png','blue','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (98,'0000197.png','grey, black, squares','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (99,'0000198.png','black, squares, clothes','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (100,'0000199.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (101,'0000201.png','black','Free','','2012-12-10 00:36:12','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (102,'0000202.png','transparent, black','Creative Commons Attribution','David Noguera','2012-12-10 15:21:09','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (103,'0000203.png','transparent, black','Creative Commons Attribution','David Noguera','2012-12-10 15:23:16','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (104,'0000204.png','black, maze','Free','','2012-12-12 11:22:42','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (105,'0000205.jpg','circles, blue, abstract','Free','','2012-12-12 11:26:52','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (106,'0000206.jpg','animals, leopard','Free','','2012-12-12 11:38:17','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (107,'0000207.jpg','animals, leopard','Free','','2012-12-12 11:38:17','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (108,'0000208.jpg','animals, zebra','Free','','2012-12-12 11:38:18','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (109,'0000209.png','yellow, dots','Free','','2012-12-12 11:41:21','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (110,'0000210.png','transparent, white','Creative Commons Attribution','David Noguera','2012-12-12 11:50:21','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (111,'0000211.png','transparent, white','Creative Commons Attribution','David Noguera','2012-12-12 11:50:22','daweed',0);
insert  into `backgrounds`(`id_bg`,`bg_file`,`bg_tags`,`bg_license`,`bg_designer`,`bg_date`,`bg_users`,`bg_downloads`) values (112,'0000209.jpg','green, grass','Creative Commons Attribution','Patrick Hoesly','2012-12-12 16:27:50','',0);

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
