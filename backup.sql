/*
SQLyog Ultimate - MySQL GUI v8.22 
MySQL - 5.1.41 : Database - konteslagu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`konteslagu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `konteslagu`;

/*Table structure for table `tm_genre` */

DROP TABLE IF EXISTS `tm_genre`;

CREATE TABLE `tm_genre` (
  `id_genre` varchar(5) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `path` varchar(240) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tm_genre` */

insert  into `tm_genre`(`id_genre`,`genre`,`deskripsi`,`path`) values ('G001','Dangdut','','images/kontespic/musik3.png'),('G002','Pop','','images/kontespic/musik4.png'),('G003','Religi','','images/kontespic/musik2.png'),('G004','Jazz','','images/kontespic/musik12.png');

/*Table structure for table `tm_kriteria` */

DROP TABLE IF EXISTS `tm_kriteria`;

CREATE TABLE `tm_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tm_kriteria` */

insert  into `tm_kriteria`(`id_kriteria`,`kriteria`,`deskripsi`) values ('K001 ','sadf','sdf');

/*Table structure for table `tm_role` */

DROP TABLE IF EXISTS `tm_role`;

CREATE TABLE `tm_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tm_role` */

insert  into `tm_role`(`id_role`,`role`) values (1,'admin'),(2,'user');

/*Table structure for table `tm_user` */

DROP TABLE IF EXISTS `tm_user`;

CREATE TABLE `tm_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_lengkap` varchar(240) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_email` varchar(240) NOT NULL,
  `alamat` varchar(240) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `path_poto` varchar(240) NOT NULL,
  `user_status` char(1) DEFAULT '0',
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tm_user` */

insert  into `tm_user`(`id_user`,`username`,`password`,`nama_lengkap`,`tgl_lahir`,`alamat_email`,`alamat`,`kota`,`negara`,`no_hp`,`path_poto`,`user_status`,`role_id`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator','2014-09-11','1','1','1','1',1,'1','1',1),(2,'tes','202cb962ac59075b964b07152d234b70','Testing','2014-09-10','a','b','c','d',13,'0','1',2),(3,'abc','202cb962ac59075b964b07152d234b70','ABC','2014-10-01','aaa','oo','p','p',0,'0','0',NULL);

/*Table structure for table `tr_genre` */

DROP TABLE IF EXISTS `tr_genre`;

CREATE TABLE `tr_genre` (
  `id_kontes` varchar(10) NOT NULL,
  `id_genre` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tr_genre` */

insert  into `tr_genre`(`id_kontes`,`id_genre`) values ('2014100201','G001'),('2014100201','G004'),('2014100202','G004'),('2014100301','G002'),('2014100301','G004');

/*Table structure for table `tr_kontes_detil` */

DROP TABLE IF EXISTS `tr_kontes_detil`;

CREATE TABLE `tr_kontes_detil` (
  `idt_kontes` int(11) NOT NULL AUTO_INCREMENT,
  `id_kontes` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_lagu` varchar(240) DEFAULT NULL,
  `path_musik` varchar(200) NOT NULL,
  `status_winner` int(1) DEFAULT NULL,
  PRIMARY KEY (`idt_kontes`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tr_kontes_detil` */

insert  into `tr_kontes_detil`(`idt_kontes`,`id_kontes`,`id_user`,`judul_lagu`,`path_musik`,`status_winner`) values (1,'2014100201',3,NULL,'uploads/1412191919.mp3',1),(2,'2014100202',3,NULL,'uploads/1412192200.mp3',NULL);

/*Table structure for table `tr_kriteria` */

DROP TABLE IF EXISTS `tr_kriteria`;

CREATE TABLE `tr_kriteria` (
  `id_kontes` varchar(10) NOT NULL,
  `id_kriteria` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tr_kriteria` */

/*Table structure for table `tt_kontes` */

DROP TABLE IF EXISTS `tt_kontes`;

CREATE TABLE `tt_kontes` (
  `id_kontes` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kontes` varchar(150) NOT NULL,
  `deskripsi_kontes` text NOT NULL,
  `tanggal_kontes` datetime NOT NULL,
  `tanggal_tutup` datetime NOT NULL,
  `mata_uang` varchar(10) NOT NULL,
  `hadiah` int(11) NOT NULL,
  `pemenang` varchar(11) NOT NULL,
  `photo_path` varchar(240) NOT NULL,
  PRIMARY KEY (`id_kontes`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `tt_kontes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tm_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tt_kontes` */

insert  into `tt_kontes`(`id_kontes`,`id_user`,`nama_kontes`,`deskripsi_kontes`,`tanggal_kontes`,`tanggal_tutup`,`mata_uang`,`hadiah`,`pemenang`,`photo_path`) values ('2014100201',2,'Kontes Dangdut Ceria','ceria selalu','2014-10-02 02:30:00','2014-10-18 02:30:00','0',9000000,'',''),('2014100202',2,'Kontes Jazz Kampung','Jazz seadanya','2014-10-03 02:36:00','2014-10-23 02:36:00','0',400000,'',''),('2014100301',3,'Kontes Lagu Romantis','Lagu romantis berooooooooooooooooooooo','2014-10-01 02:30:00','2014-10-04 02:30:00','0',6000000,'','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
