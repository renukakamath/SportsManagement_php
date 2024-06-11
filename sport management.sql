/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - sports_management_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sports_management_system` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sports_management_system`;

/*Table structure for table `assign_sports` */

DROP TABLE IF EXISTS `assign_sports`;

CREATE TABLE `assign_sports` (
  `sport_assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sport_assign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `assign_sports` */

insert  into `assign_sports`(`sport_assign_id`,`tournament_id`,`sport_id`,`date`,`status`) values 
(1,1,1,'2023-08-09','assign');

/*Table structure for table `assignvenue` */

DROP TABLE IF EXISTS `assignvenue`;

CREATE TABLE `assignvenue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport_assign_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `assignvenue` */

insert  into `assignvenue`(`venue_id`,`sport_assign_id`,`date`,`status`) values 
(1,1,'2023-08-04','assign');

/*Table structure for table `book_seet` */

DROP TABLE IF EXISTS `book_seet`;

CREATE TABLE `book_seet` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `book_seet` */

insert  into `book_seet`(`book_id`,`tournament_id`,`date`,`status`) values 
(1,1,'2023-08-05','Accept'),
(2,1,'2023-08-05','Accept');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`user_type`) values 
(1,'vision','vision','vistors'),
(2,'admin','admin','admin'),
(4,'staff','staff','staff'),
(5,'par','par','participant');

/*Table structure for table `participant` */

DROP TABLE IF EXISTS `participant`;

CREATE TABLE `participant` (
  `participant_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `tournament_id` int(11) DEFAULT NULL,
  `team_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`participant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `participant` */

insert  into `participant`(`participant_id`,`login_id`,`tournament_id`,`team_name`,`phone`,`place`,`email`) values 
(1,5,1,'user1','2345678907','kerala','student@gmail.com');

/*Table structure for table `request_participate` */

DROP TABLE IF EXISTS `request_participate`;

CREATE TABLE `request_participate` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) DEFAULT NULL,
  `sport_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `request_participate` */

insert  into `request_participate`(`request_id`,`participant_id`,`sport_id`,`date`,`status`) values 
(1,1,1,'2023-08-05','Accept'),
(2,1,1,'2023-08-07','pending');

/*Table structure for table `sport` */

DROP TABLE IF EXISTS `sport`;

CREATE TABLE `sport` (
  `sport_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sport_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `sport` */

insert  into `sport`(`sport_id`,`sport`,`details`,`date`) values 
(1,'user','qwerty','2023-08-24');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`login_id`,`fname`,`lname`,`email`,`phone`,`place`) values 
(1,4,'userssss','qwertysss','student@gmail.com','2345678907','keralasss');

/*Table structure for table `tournament` */

DROP TABLE IF EXISTS `tournament`;

CREATE TABLE `tournament` (
  `tournament_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tournament_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tournament` */

insert  into `tournament`(`tournament_id`,`tournament`,`details`,`date`) values 
(1,'user','qwerty','2023-08-25');

/*Table structure for table `upload_winner` */

DROP TABLE IF EXISTS `upload_winner`;

CREATE TABLE `upload_winner` (
  `winner_id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`winner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `upload_winner` */

insert  into `upload_winner`(`winner_id`,`participant_id`,`file`,`date`,`status`) values 
(1,1,'images/image_64cdc6650c961.jpg','2023-08-05','pending'),
(2,1,'images/image_64cdc7acde443.jpg','2023-08-05','pending');

/*Table structure for table `venue` */

DROP TABLE IF EXISTS `venue`;

CREATE TABLE `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `venue` */

insert  into `venue`(`venue_id`,`venue`,`details`) values 
(1,'users','qwerty');

/*Table structure for table `vistors` */

DROP TABLE IF EXISTS `vistors`;

CREATE TABLE `vistors` (
  `vistor_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`vistor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `vistors` */

insert  into `vistors`(`vistor_id`,`login_id`,`fname`,`lname`,`phone`,`place`,`email`) values 
(1,1,'user','qwerty','2345678907','kerala','student@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
