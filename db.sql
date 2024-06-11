/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.24-MariaDB : Database - watch_store_new
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`watch_store_new` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `watch_store_new`;

/*Table structure for table `tbl_brand` */

DROP TABLE IF EXISTS `tbl_brand`;

CREATE TABLE `tbl_brand` (
  `brand_id` int(5) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(25) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_brand` */

insert  into `tbl_brand`(`brand_id`,`brand_name`,`image`) values 
(1,'casio','images/images_635bd24984d29.png'),
(5,'jacob & co','images/images_635f7ebe750c1.jpg'),
(3,'hublot','images/images_635bd2706ca7a.png'),
(4,'pathek phillippe','images/images_635f7e8532b1e.png');

/*Table structure for table `tbl_card` */

DROP TABLE IF EXISTS `tbl_card`;

CREATE TABLE `tbl_card` (
  `card_id` int(5) NOT NULL AUTO_INCREMENT,
  `cust_id` int(5) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `card_name` varchar(20) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_card` */

insert  into `tbl_card`(`card_id`,`cust_id`,`card_no`,`card_name`) values 
(1,7,'1234567890123456','sam'),
(2,7,'9876543210987654','sam');

/*Table structure for table `tbl_cartchild` */

DROP TABLE IF EXISTS `tbl_cartchild`;

CREATE TABLE `tbl_cartchild` (
  `cart_cid` int(5) NOT NULL AUTO_INCREMENT,
  `cart_mid` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_cid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_cartchild` */

insert  into `tbl_cartchild`(`cart_cid`,`cart_mid`,`item_id`,`quantity`,`amount`,`date`) values 
(1,1,5,'1','5500000','2022-10-31'),
(2,1,12,'1','18725','2022-10-31'),
(3,2,12,'1','18725','2022-10-31'),
(4,3,12,'1','18725','2022-10-31');

/*Table structure for table `tbl_cartmaster` */

DROP TABLE IF EXISTS `tbl_cartmaster`;

CREATE TABLE `tbl_cartmaster` (
  `cart_mid` int(5) NOT NULL AUTO_INCREMENT,
  `cust_id` int(5) NOT NULL,
  `tot_amount` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_mid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_cartmaster` */

insert  into `tbl_cartmaster`(`cart_mid`,`cust_id`,`tot_amount`,`status`) values 
(1,7,5518725,'Paid'),
(2,7,18725,'Paid'),
(3,7,18725,'Paid');

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(10) NOT NULL,
  `description` varchar(60) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`cat_id`,`cat_name`,`description`) values 
(3,'men','all men watches'),
(2,'men','all men watches'),
(4,'women','women watches'),
(5,'kids','all kids watches'),
(6,'unisex','all kids watches'),
(7,'unisex','all unisex watches');

/*Table structure for table `tbl_courier` */

DROP TABLE IF EXISTS `tbl_courier`;

CREATE TABLE `tbl_courier` (
  `courier_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `courier_name` varchar(15) NOT NULL,
  `courier_phno` decimal(12,0) NOT NULL,
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`courier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_courier` */

insert  into `tbl_courier`(`courier_id`,`username`,`courier_name`,`courier_phno`,`location`) values 
(1,'a2@gmail.com','aru ',9878987654,'kjbjf'),
(2,'jommy@gmail.com','jommy',8879854534,'koratty');

/*Table structure for table `tbl_customer` */

DROP TABLE IF EXISTS `tbl_customer`;

CREATE TABLE `tbl_customer` (
  `cust_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `cust_fname` varchar(10) NOT NULL,
  `cust_lname` varchar(10) NOT NULL,
  `cust_city` varchar(15) NOT NULL,
  `cust_dist` varchar(20) NOT NULL,
  `cust_pin` int(6) NOT NULL,
  `cust_phone` decimal(10,0) NOT NULL,
  `cust_gender` varchar(7) NOT NULL,
  `status` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer` */

insert  into `tbl_customer`(`cust_id`,`username`,`cust_fname`,`cust_lname`,`cust_city`,`cust_dist`,`cust_pin`,`cust_phone`,`cust_gender`,`status`,`DOB`) values 
(1,'ss@g.com','pp','ll','ekm','ALPY',21345,9087654321,'male','pending','2022-09-23'),
(2,'arj@gmail.com','arjun','sudhish','kkd','EKM',682037,9878678987,'male','pending','2022-10-07'),
(3,'arun@gmail.com','arun','roy','perumbavoor','EKM',682034,8978679876,'male','pending','2008-02-06'),
(4,'aben@gmail.com','aben','reji','kaloor','EKM',683014,8986785946,'male','pending','2022-09-28'),
(5,'abhi@gmail.com','abhi','vinod','jhkj','WAY',76876,9878987666,'male','pending','2022-09-27'),
(6,'jomy@gmail.com','jommy','joshua','efgaf','KAN',47882,9898689877,'male','pending','2025-02-07'),
(7,'cc','merin','vedela','aluva','EKM',683579,9037837968,'female','pending','2002-07-20');

/*Table structure for table `tbl_delivery` */

DROP TABLE IF EXISTS `tbl_delivery`;

CREATE TABLE `tbl_delivery` (
  `delivery_id` int(5) NOT NULL AUTO_INCREMENT,
  `payment_id` int(5) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_delivery` */

insert  into `tbl_delivery`(`delivery_id`,`payment_id`,`date`) values 
(1,1,'2022-10-31');

/*Table structure for table `tbl_item` */

DROP TABLE IF EXISTS `tbl_item`;

CREATE TABLE `tbl_item` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(15) NOT NULL,
  `type_id` varchar(6) NOT NULL,
  `brand_id` varchar(5) NOT NULL,
  `item_name` varchar(36) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `item_image` varchar(1000) NOT NULL,
  `item_status` varchar(50) NOT NULL,
  `rate` decimal(50,0) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_item` */

insert  into `tbl_item`(`item_id`,`cat_id`,`type_id`,`brand_id`,`item_name`,`stock`,`description`,`item_image`,`item_status`,`rate`) values 
(1,'3','2','3','gshock',56,'gshock g1000','images/images_635bd3557969e.png','active',15000),
(2,'3','2','3','gshock',56,'gshock g1000','images/images_635bd3557969e.png','deactive',15000),
(3,'3','2','3','gshock',56,'gshock g1000','images/images_635bd3557969e.png','deactive',15000),
(4,'3','2','3','jgjyfuty',67,'gshock g1000','images/images_635bd3557969e.png','deactive',989876),
(5,'4','1','5','jacob & co tourbillion',33,'rgbgfjt','images/images_635bd3557969e.png','active',5500000),
(6,'4','1','5','jacob & co tourbillion',34,'rgbgfjt','images/images_635bd3557969e.png','active',5500000),
(7,'4','2','4','pathek phillippe',25,'dvsghj','images/images_635bd3557969e.png','active',12000),
(8,'2','1','4','',56,'jjtdiyuyoiyou','images/images_635bd3557969e.png','active',25000),
(9,'3','1','3','hublot11',12,'sample','images/images_635bd3557969e.png','active',32548),
(12,'3','1','5','Latifah Navarro',496,'Aliquip aut magni in','images/images_635f80f776da9.jpg','active',18725),
(10,'2','2','3','Gail Andrews',25,'Vitae dolores volupt','images/images_635bd32ae83ba.png','active',546),
(11,'2','3','3','Shelby Schneider',258,'Voluptatem Ut dolor','images/images_635bd3557969e.png','active',815);

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` varchar(8) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`username`,`password`,`user_type`,`status`) values 
('ggg@fg.kjj','55555','Customer','pending'),
('ss@g.com','ss1234','Customer','pending'),
('admin','admin','admin','pending'),
('abhi@gmail.com','slkn','staff','pending'),
('abhin@gmail.com','errgw','staff','pending'),
('ajun@gmail.com','jjhg','staff','pending'),
('vimal@gmail.com','','staff','pending'),
('adhu@gmail.com','asdf','Courier','pending'),
('vam@gmail.com','asgdh','Courier','pending'),
('vim@gmail.com','ajksh','Courier','pending'),
('v@gmail.com','edqef','Courier','pending'),
('F@gmail.com','qerf','Courier','pending'),
('a2@gmail.com','jbjhgjy','Courier','pending'),
('arun@gmail.com','staffarun','staff','pending'),
('jommy@gmail.com','jj','Courier','pending'),
('aju@gmail.com','aju','staff','pending'),
('amal@gmail.com','amal1','staff','pending'),
('cc','cc','Customer','pending');

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `cart_mid` int(5) NOT NULL,
  `o_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order` */

insert  into `tbl_order`(`order_id`,`cart_mid`,`o_date`) values 
(1,1,'2022-10-31'),
(2,1,'2022-10-31'),
(3,2,'2022-10-31'),
(4,3,'2022-10-31'),
(5,3,'2022-10-31'),
(6,3,'2022-10-31');

/*Table structure for table `tbl_payment` */

DROP TABLE IF EXISTS `tbl_payment`;

CREATE TABLE `tbl_payment` (
  `payment_id` int(5) NOT NULL AUTO_INCREMENT,
  `order_id` int(5) NOT NULL,
  `courier_id` int(5) NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_payment` */

insert  into `tbl_payment`(`payment_id`,`order_id`,`courier_id`,`payment_date`) values 
(1,1,2,'2022-10-31'),
(2,2,0,'2022-10-31'),
(3,3,0,'2022-10-31'),
(4,4,0,'2022-10-31'),
(5,5,0,'2022-10-31'),
(6,6,0,'2022-10-31');

/*Table structure for table `tbl_purchasechild` */

DROP TABLE IF EXISTS `tbl_purchasechild`;

CREATE TABLE `tbl_purchasechild` (
  `purchase_cid` int(5) NOT NULL AUTO_INCREMENT,
  `purchase_mid` int(5) NOT NULL,
  `item_id` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `tot_price` int(30) NOT NULL,
  PRIMARY KEY (`purchase_cid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchasechild` */

insert  into `tbl_purchasechild`(`purchase_cid`,`purchase_mid`,`item_id`,`quantity`,`cost_price`,`tot_price`) values 
(1,4,'7',2,12000,24000),
(2,5,'7',4,12000,48000),
(3,6,'7',4,12000,48000),
(4,0,'7',3,12000,36000),
(5,7,'7',3,12000,36000),
(6,8,'7',12,12000,144000);

/*Table structure for table `tbl_purchasemaster` */

DROP TABLE IF EXISTS `tbl_purchasemaster`;

CREATE TABLE `tbl_purchasemaster` (
  `purchase_mid` int(5) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(5) NOT NULL,
  `vendor_id` varchar(5) NOT NULL,
  `purchase_date` date NOT NULL,
  `tot_amount` int(10) NOT NULL,
  PRIMARY KEY (`purchase_mid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchasemaster` */

insert  into `tbl_purchasemaster`(`purchase_mid`,`staff_id`,`vendor_id`,`purchase_date`,`tot_amount`) values 
(1,'0','1','2022-10-21',24000),
(2,'0','1','2022-10-21',24000),
(3,'0','1','2022-10-21',24000),
(4,'0','1','2022-10-21',24000),
(5,'0','2','2022-10-21',48000),
(6,'0','2','2022-10-21',48000),
(7,'0','3','2022-10-26',36000),
(8,'0','Selec','2022-10-28',144000);

/*Table structure for table `tbl_staff` */

DROP TABLE IF EXISTS `tbl_staff`;

CREATE TABLE `tbl_staff` (
  `staff_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `staff_fname` varchar(10) NOT NULL,
  `staff_lname` varchar(10) NOT NULL,
  `staff_city` varchar(15) NOT NULL,
  `staff_dist` varchar(15) NOT NULL,
  `staff_pin` int(6) NOT NULL,
  `staff_phone` decimal(10,0) NOT NULL,
  `staff_gender` varchar(7) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `ststus` varchar(10) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_staff` */

insert  into `tbl_staff`(`staff_id`,`username`,`staff_fname`,`staff_lname`,`staff_city`,`staff_dist`,`staff_pin`,`staff_phone`,`staff_gender`,`DOB`,`ststus`) values 
(1,'abhin@gmail.com','abhin','sree','rgwrtg','EKM',682098,9898767898,'male','2022-09-27','deactive'),
(2,'ajun@gmail.com','aju','ajun','ljjhkjh','kOT',786567,8987898765,'male','2022-10-06','active'),
(3,'ajun@gmail.com','aju','ajun','ljjhkjh','kOT',786567,8987898765,'male','2022-10-06','pending'),
(4,'arun@gmail.com','arun','joy','perumbavoor','EKM',686669,7034554499,'male','2025-08-23','active'),
(5,'aju@gmail.com','arjun','sudhish','kakkanad','EKM',682037,8987678987,'male','2022-10-06','pending'),
(6,'amal@gmail.com','amal','kp','perumbavoor','THR',678765,9987453287,'male','2022-10-07','pending'),
(7,'amal@gmail.com','amal','kp','perumbavoor','THR',678765,9987453287,'male','2022-10-07','pending');

/*Table structure for table `tbl_type` */

DROP TABLE IF EXISTS `tbl_type`;

CREATE TABLE `tbl_type` (
  `type_id` int(5) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(15) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_type` */

insert  into `tbl_type`(`type_id`,`type_name`) values 
(1,'metal strap'),
(2,'digital'),
(3,'leather');

/*Table structure for table `tbl_vendor` */

DROP TABLE IF EXISTS `tbl_vendor`;

CREATE TABLE `tbl_vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(15) NOT NULL,
  `vaendor_email` varchar(15) NOT NULL,
  `vendor_phone` decimal(10,0) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_vendor` */

insert  into `tbl_vendor`(`vendor_id`,`vendor_name`,`vaendor_email`,`vendor_phone`,`status`) values 
(1,'abhi','vimal@gmail.com',9098987675,'pending'),
(2,'abhi','vimal@gmail.com',9098987675,'pending'),
(3,'vimal','vimal@gmail.com',7898776785,'pending');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
