/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.25-MariaDB : Database - elabsys2017
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`elabsys2017` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `elabsys2017`;

/*Table structure for table `tbl_transaction` */

DROP TABLE IF EXISTS `tbl_transaction`;

CREATE TABLE `tbl_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `mi` varchar(5) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `ext` varchar(5) DEFAULT NULL,
  `tr_brgy` varchar(15) DEFAULT NULL,
  `age` smallint(3) DEFAULT NULL,
  `gender` enum('FEMALE','MALE') DEFAULT NULL,
  `mobileno` varchar(15) DEFAULT NULL,
  `tr_date` date DEFAULT NULL,
  `tr_type` enum('STOOL EXAMINATION','LABORATORY RESULT - URINE ANALYSYS','LABORATORY RESULT - HEMATOLOGY','PRE - NATAL LABORATORY RESULT','DENGUE NS1') DEFAULT NULL,
  `se_color` varchar(10) DEFAULT NULL,
  `se_wblood` enum('YES','NO') DEFAULT NULL,
  `se_consistency` varchar(20) DEFAULT NULL,
  `se_occult_blood` varchar(20) DEFAULT NULL,
  `se_ph` varchar(20) DEFAULT NULL,
  `se_ascaris` varchar(20) DEFAULT NULL,
  `se_trichuris` varchar(20) DEFAULT NULL,
  `se_hookworm` varchar(20) DEFAULT NULL,
  `se_giardia_lambia` varchar(20) DEFAULT NULL,
  `se_trichomonas` varchar(20) DEFAULT NULL,
  `se_others` varbinary(20) DEFAULT NULL,
  `se_amoeba_cyst` varchar(20) DEFAULT NULL,
  `se_amoeba_trophozoid` varchar(20) DEFAULT NULL,
  `se_pus_cells` varchar(20) DEFAULT NULL,
  `se_red_blood_cells` varchar(20) DEFAULT NULL,
  `se_fat_globules` varchar(20) DEFAULT NULL,
  `se_others1` varchar(20) DEFAULT NULL,
  `ua_color` varchar(10) DEFAULT NULL,
  `ua_transparency` varchar(20) DEFAULT NULL,
  `ua_ph` varchar(10) DEFAULT NULL,
  `ua_specific_gravity` varchar(15) DEFAULT NULL,
  `ua_protein` varchar(15) DEFAULT NULL,
  `ua_glucose` varchar(15) DEFAULT NULL,
  `ua_ketone` varchar(15) DEFAULT NULL,
  `ua_bile` varchar(15) DEFAULT NULL,
  `ua_urobilinogen` varchar(15) DEFAULT NULL,
  `ua_nitrite` varchar(15) DEFAULT NULL,
  `ua_cast` varchar(100) DEFAULT NULL,
  `ua_pus_cells` varchar(20) DEFAULT NULL,
  `ua_red_blood_cells` varchar(20) DEFAULT NULL,
  `ua_epithelial_cells` varchar(15) DEFAULT NULL,
  `ua_mucus_theads` varchar(15) DEFAULT NULL,
  `ua_amorphous_urates` varchar(15) DEFAULT NULL,
  `ua_amorphous_po4` varchar(15) DEFAULT NULL,
  `ua_calcium_oxalates` varchar(15) DEFAULT NULL,
  `ua_triple_phosphates` varchar(15) DEFAULT NULL,
  `ua_yeast_cells` varchar(20) DEFAULT NULL,
  `ua_bacteria` varchar(15) DEFAULT NULL,
  `ua_others` varchar(50) DEFAULT NULL,
  `dg_ns1_ag` varchar(20) DEFAULT NULL,
  `dg_lgg` varchar(20) DEFAULT NULL,
  `dg_lgm` varchar(20) DEFAULT NULL,
  `dg_lot_no` varchar(20) DEFAULT NULL,
  `dg_expiration` varchar(20) DEFAULT NULL,
  `he_blood_typing` varchar(20) DEFAULT NULL,
  `he_haemoglobin` varchar(20) DEFAULT NULL,
  `he_haematocrit` varchar(20) DEFAULT NULL,
  `he_rblood_cellcount` varchar(20) DEFAULT NULL,
  `he_wblood_cellcount` varchar(20) DEFAULT NULL,
  `he_segmenters` varchar(20) DEFAULT NULL,
  `he_lymphocytes` varchar(20) DEFAULT NULL,
  `he_monocytes` varchar(20) DEFAULT NULL,
  `he_eosinophils` varchar(20) DEFAULT NULL,
  `he_stab_cells` varchar(20) DEFAULT NULL,
  `he_platelet_count` varchar(20) DEFAULT NULL,
  `he_others` varchar(100) DEFAULT NULL,
  `be_fasting_blood_sugar` varchar(20) DEFAULT NULL,
  `be_random_blood_sugar` varchar(20) DEFAULT NULL,
  `be_blood_typing` varchar(20) DEFAULT NULL,
  `be_haemoglobin` varchar(20) DEFAULT NULL,
  `be_haematocrit` varchar(20) DEFAULT NULL,
  `be_hepatitis_b` varchar(20) DEFAULT NULL,
  `be_hiv_screening` varchar(20) DEFAULT NULL,
  `be_anti_treponemal` varchar(20) DEFAULT NULL,
  `be_others` varchar(100) DEFAULT NULL,
  `tr_addedby` int(5) DEFAULT NULL,
  `tr_addeddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tr_editedby` int(5) DEFAULT NULL,
  `tr_editeddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tr_deletedby` int(5) DEFAULT NULL,
  `isactive` enum('YES','NO') DEFAULT 'YES',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_transaction` */

insert  into `tbl_transaction`(`id`,`fname`,`mname`,`mi`,`lname`,`ext`,`tr_brgy`,`age`,`gender`,`mobileno`,`tr_date`,`tr_type`,`se_color`,`se_wblood`,`se_consistency`,`se_occult_blood`,`se_ph`,`se_ascaris`,`se_trichuris`,`se_hookworm`,`se_giardia_lambia`,`se_trichomonas`,`se_others`,`se_amoeba_cyst`,`se_amoeba_trophozoid`,`se_pus_cells`,`se_red_blood_cells`,`se_fat_globules`,`se_others1`,`ua_color`,`ua_transparency`,`ua_ph`,`ua_specific_gravity`,`ua_protein`,`ua_glucose`,`ua_ketone`,`ua_bile`,`ua_urobilinogen`,`ua_nitrite`,`ua_cast`,`ua_pus_cells`,`ua_red_blood_cells`,`ua_epithelial_cells`,`ua_mucus_theads`,`ua_amorphous_urates`,`ua_amorphous_po4`,`ua_calcium_oxalates`,`ua_triple_phosphates`,`ua_yeast_cells`,`ua_bacteria`,`ua_others`,`dg_ns1_ag`,`dg_lgg`,`dg_lgm`,`dg_lot_no`,`dg_expiration`,`he_blood_typing`,`he_haemoglobin`,`he_haematocrit`,`he_rblood_cellcount`,`he_wblood_cellcount`,`he_segmenters`,`he_lymphocytes`,`he_monocytes`,`he_eosinophils`,`he_stab_cells`,`he_platelet_count`,`he_others`,`be_fasting_blood_sugar`,`be_random_blood_sugar`,`be_blood_typing`,`be_haemoglobin`,`be_haematocrit`,`be_hepatitis_b`,`be_hiv_screening`,`be_anti_treponemal`,`be_others`,`tr_addedby`,`tr_addeddate`,`tr_editedby`,`tr_editeddate`,`tr_deletedby`,`isactive`) values 
(1,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','JULIANA',10,'FEMALE','1111-111-1111','2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED','POSITIVE','5.0','1','1','1','1','2','2','3','3','3','3','3','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:25:04',NULL,'2017-10-01 20:25:04',NULL,'YES'),
(2,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE','1111-111-1111','2017-10-01','STOOL EXAMINATION','BLACK','YES','FORMED',NULL,NULL,'1','1','11',NULL,'21212','1212',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:29:31',NULL,'2017-10-01 20:29:31',NULL,'YES'),
(3,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLUE','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:30:24',NULL,'2017-10-01 20:30:24',NULL,'YES'),
(4,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:30:40',NULL,'2017-10-01 20:30:40',NULL,'YES'),
(5,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:31:35',NULL,'2017-10-01 20:31:35',NULL,'YES'),
(6,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:32:03',NULL,'2017-10-01 20:32:03',NULL,'YES'),
(7,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2111D',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:32:43',NULL,'2017-10-01 20:32:43',NULL,'YES'),
(8,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:33:48',NULL,'2017-10-01 20:33:48',NULL,'YES'),
(9,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:34:01',NULL,'2017-10-01 20:34:01',NULL,'YES'),
(10,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE','11__-___-____','2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:35:00',NULL,'2017-10-01 20:35:00',NULL,'YES'),
(11,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','BALITI',10,'MALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','SEMI FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:35:20',NULL,'2017-10-01 20:35:20',NULL,'YES'),
(12,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'121',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:38:13',NULL,'2017-10-01 20:38:13',NULL,'YES'),
(13,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:40:54',NULL,'2017-10-01 20:40:54',NULL,'YES'),
(14,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:43:45',NULL,'2017-10-01 20:43:45',NULL,'YES'),
(15,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:44:36',NULL,'2017-10-01 20:44:36',NULL,'YES'),
(16,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 20:48:09',NULL,'2017-10-01 20:48:09',NULL,'YES'),
(17,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE','1111-111-1111','2017-10-01','STOOL EXAMINATION','BLACK','YES','FORMED','POSITIVE','5.0','ASCARIS','TRICHURIS','HOOKWORM','GIARDIA LAMBIA','TRICHOMANS','OTHERS','AMOEBA CYST','AMOEBA TROPHOZOID','PUS CELLS','RED BLOOD CELLS','FAT GLOBULES','OTHERS1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:17:25',NULL,'2017-10-01 21:17:25',NULL,'YES'),
(18,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:23:12',NULL,'2017-10-01 21:23:12',NULL,'YES'),
(19,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:23:19',NULL,'2017-10-01 21:23:19',NULL,'YES'),
(20,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'223223232',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:29:17',NULL,'2017-10-01 21:29:17',NULL,'YES'),
(21,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'23232323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:36:22',NULL,'2017-10-01 21:36:22',NULL,'YES'),
(22,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:37:07',NULL,'2017-10-01 21:37:07',NULL,'YES'),
(23,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','SEMI FORMED',NULL,NULL,'WQE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:40:35',NULL,'2017-10-01 21:40:35',NULL,'YES'),
(24,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:40:57',NULL,'2017-10-01 21:40:57',NULL,'YES'),
(25,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'E',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:41:26',NULL,'2017-10-01 21:41:26',NULL,'YES'),
(26,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:45:58',NULL,'2017-10-01 21:45:58',NULL,'YES'),
(27,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','SEMI FORMED',NULL,NULL,'1212',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:47:29',NULL,'2017-10-01 21:47:29',NULL,'YES'),
(28,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','BALITI',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:48:22',NULL,'2017-10-01 21:48:22',NULL,'YES'),
(29,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','SEMI FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:48:57',NULL,'2017-10-01 21:48:57',NULL,'YES'),
(30,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','BALITI',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLUE','NO','FORMED',NULL,NULL,'12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:49:32',NULL,'2017-10-01 21:49:32',NULL,'YES'),
(31,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:50:08',NULL,'2017-10-01 21:50:08',NULL,'YES'),
(32,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:52:23',NULL,'2017-10-01 21:52:23',NULL,'YES'),
(33,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLUE','NO','SEMI FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:53:08',NULL,'2017-10-01 21:53:08',NULL,'YES'),
(34,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'MALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:54:03',NULL,'2017-10-01 21:54:03',NULL,'YES'),
(35,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLUE','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:55:35',NULL,'2017-10-01 21:55:35',NULL,'YES'),
(36,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'2323',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 21:57:16',NULL,'2017-10-01 21:57:16',NULL,'YES'),
(37,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED','POSITIVE','5.0','ASCARIS','TRICHURIS','HOOKWORM','GIARDIA LAMBIA','TRICHOMANS','OTHERS','AMOEBA CYST','AMOEBA TROPHOZOID','PUS CELLS','RED BLOOD CELLS','FAT GLOBULES','1OTHERS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 22:08:27',NULL,'2017-10-01 22:08:27',NULL,'YES'),
(38,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-01','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'12121',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-01 22:19:29',NULL,'2017-10-01 22:19:29',NULL,'YES'),
(39,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE','9999-999-9999','2017-10-02','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02 09:20:48',NULL,'2017-10-02 09:20:48',NULL,'YES'),
(40,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE','9999-999-9999','2017-10-02','STOOL EXAMINATION','BLACK','YES','FORMED',NULL,NULL,'111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02 09:21:11',NULL,'2017-10-02 09:21:11',NULL,'YES'),
(41,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-02','STOOL EXAMINATION','BLACK','NO','FORMED','POSITIVE','5.0','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02 09:22:38',NULL,'2017-10-02 09:22:38',NULL,'YES'),
(42,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','BALITI',10,'FEMALE',NULL,'2017-10-02','STOOL EXAMINATION','BLACK','NO','FORMED',NULL,NULL,'6666',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02 09:24:35',NULL,'2017-10-02 09:24:35',NULL,'YES'),
(43,'FIRSTNAME','MIDDLENAME','M','LASTNAME','EXT','ALASAS',10,'FEMALE',NULL,'2017-10-02','STOOL EXAMINATION','BLUE','NO','FORMED',NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02 13:52:22',NULL,'2017-10-02 13:52:22',NULL,'YES');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
