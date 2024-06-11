/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - boutique
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`boutique` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `boutique`;

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `bookings` */

insert  into `bookings`(`booking_id`,`user_id`,`product_id`,`date_time`,`status`) values 
(1,1,1,'2023-02-23 11:00:37','Accept'),
(2,1,1,'2023-02-23 19:27:35','Accept'),
(3,1,1,'2023-02-25 19:02:31','booked'),
(4,1,2,'2023-03-26 20:37:47','Accept'),
(5,1,1,'2023-03-26 22:07:14','Accept'),
(6,1,5,'2023-03-26 22:10:05','booked'),
(7,1,1,'2023-03-26 22:11:49','booked'),
(8,1,3,'2023-03-27 09:07:25','Paid'),
(9,1,1,'2023-05-09 14:41:01','booked');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`shop_id`,`category_name`,`description`) values 
(1,0,'Salwar Set','Salwar '),
(2,0,'Maternity / Feeding','Maternity Wear '),
(3,0,'Semi Party Wear ','Semi Party Wear '),
(4,0,'Casuals ','Casual Wear '),
(5,0,'Plus Size ','XL sized Wear');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `complaints` */

/*Table structure for table `custom_designs` */

DROP TABLE IF EXISTS `custom_designs`;

CREATE TABLE `custom_designs` (
  `custom_design_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`custom_design_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `custom_designs` */

insert  into `custom_designs`(`custom_design_id`,`request_id`,`details`,`material`,`price`,`image`,`date_time`,`status`) values 
(1,1,' at today morning  9.30 am','wertyu','5000','uploads/images_63f8d0f485ae9.jpg','2023-02-24 20:30:04','Delivery');

/*Table structure for table `delivery` */

DROP TABLE IF EXISTS `delivery`;

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) DEFAULT NULL,
  `book_type` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `delivery` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`user_id`,`feedback`,`date_time`) values 
(1,1,'dfghjkl','2023-02-24 20:52:48'),
(2,1,'dfghjkl','2023-02-24 20:53:57');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`user_type`) values 
(1,'user','user','user'),
(2,'shop','shop','shop'),
(3,'sell','sell','seller');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) DEFAULT NULL,
  `book_type` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`booking_id`,`book_type`,`date_time`) values 
(1,2,'book product','2023-02-23'),
(2,2,'book product','2023-02-23'),
(3,1,'book product','2023-02-23'),
(4,1,'sample design','2023-02-24'),
(5,4,'book product','2023-03-26'),
(6,5,'book product','2023-03-26'),
(7,8,'book product','2023-03-27');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `photo` varchar(1000) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  `sellingprice` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`product_id`,`category_id`,`product_name`,`model`,`material`,`details`,`photo`,`price`,`stock`,`sellingprice`) values 
(1,2,'Green Maternity Wear ','01','Cotton','Green maternity salwar','uploads/images_63f6f74f4df10.jpg','500','5','800'),
(2,1,'Red Salwar Set','01','Cotton','Red cotton Salwar With Red and blue mixed shawl','uploads/images_63f6f886ece1b.jpg','2000','4','3200'),
(3,3,'pink','1','silk','pink party wear','uploads/images_63f6f940531ff.jpg','1000','4','1600'),
(4,4,'Casual Wear','2','Cotton','aaaaaa','uploads/images_63f6f98e79025.jpg','0','0','0'),
(5,5,'pluz size','3','chiffon','fghhjj','uploads/images_63f6f9c2ade27.jpg','1000','6','800'),
(7,1,'s','school bus','wertyu',' at today morning  9.30 am','uploads/images_6455d19daa450.jpeg','0','0','0');

/*Table structure for table `ratings` */

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ratings` */

insert  into `ratings`(`rating_id`,`user_id`,`shop_id`,`rate`,`review`,`date_time`) values 
(1,1,0,'3','dfghjk','2023-02-24');

/*Table structure for table `reported` */

DROP TABLE IF EXISTS `reported`;

CREATE TABLE `reported` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `reported` */

insert  into `reported`(`report_id`,`user_id`,`shop_id`,`reason`,`date_time`) values 
(1,1,0,'dfghjkl','2023-02-24 21:57:31');

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `budget` varchar(100) DEFAULT NULL,
  `datefor` varchar(100) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `requests` */

insert  into `requests`(`request_id`,`user_id`,`shop_id`,`title`,`description`,`budget`,`datefor`,`date_time`) values 
(1,1,0,'s','wertyuijoklp','5000','2023-03-04','2023-02-24');

/*Table structure for table `seller` */

DROP TABLE IF EXISTS `seller`;

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `seller_name` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `seller` */

insert  into `seller`(`seller_id`,`login_id`,`seller_name`,`place`,`phone`,`email`) values 
(1,3,'award name...','kerala1','1234567890','student@gmail.com');

/*Table structure for table `shop` */

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `shop_name` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `shop` */

insert  into `shop`(`shop_id`,`login_id`,`shop_name`,`place`,`address`,`pincode`,`phone`,`email`) values 
(1,2,'shop','shop','shop','1234567','098765432','shop@gmail.com');

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
  `product_id` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `tot_price` int(30) NOT NULL,
  PRIMARY KEY (`purchase_cid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchasechild` */

insert  into `tbl_purchasechild`(`purchase_cid`,`purchase_mid`,`product_id`,`quantity`,`cost_price`,`tot_price`) values 
(1,1,'1',2,1200,2400),
(2,0,'2',2,1200,2400),
(3,1,'3',3,1200,3600),
(4,2,'3',5,1200,6000),
(5,3,'1',5,500,2500),
(6,0,'1',2,500,1000),
(7,0,'1',2,500,1000),
(8,0,'5',0,0,0),
(9,4,'5',3,0,1500),
(10,5,'2',0,0,0),
(11,6,'2',4,2000,8000),
(12,7,'5',3,500,1500),
(13,8,'3',4,1000,4000);

/*Table structure for table `tbl_purchasemaster` */

DROP TABLE IF EXISTS `tbl_purchasemaster`;

CREATE TABLE `tbl_purchasemaster` (
  `purchase_mid` int(5) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(5) NOT NULL,
  `seller_id` varchar(5) NOT NULL,
  `purchase_date` date NOT NULL,
  `tot_amount` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`purchase_mid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_purchasemaster` */

insert  into `tbl_purchasemaster`(`purchase_mid`,`staff_id`,`seller_id`,`purchase_date`,`tot_amount`,`status`) values 
(1,'0','1','2023-03-26',6000,'Purchased'),
(2,'0','1','2023-03-26',6000,'Purchased'),
(3,'0','1','2023-03-26',2500,'Purchased'),
(4,'0','1','2023-03-26',1500,'Purchased'),
(5,'0','1','2023-03-27',0,'Purchased'),
(6,'0','1','2023-03-27',8000,'Purchased'),
(7,'0','1','2023-03-27',1500,'Purchased'),
(8,'0','1','2023-03-27',4000,'Purchased');

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

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`login_id`,`first_name`,`place`,`landmark`,`pincode`,`phone`,`email`) values 
(1,1,'ashma','1','aaaaaaaaaaa','682028','123456780','ashma@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
