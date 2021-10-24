DROP TABLE IF EXISTS tb_category;

CREATE TABLE `tb_category` (
  `category_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(40) NOT NULL,
  `category_price` varchar(50) NOT NULL,
  `category_capacity` varchar(40) NOT NULL,
  `category_image` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO tb_category VALUES("6","Table","500","10","Table.jpg");
INSERT INTO tb_category VALUES("7","Steel Cottage","3342","23","Steel cottage.jpg");
INSERT INTO tb_category VALUES("8","Family Villa","2500","30","Family Villa.jpg");
INSERT INTO tb_category VALUES("9","Kubo","1553","56","Kubo.jpg");


DROP TABLE IF EXISTS tb_entrance;

CREATE TABLE `tb_entrance` (
  `entrace_id` int(15) NOT NULL AUTO_INCREMENT,
  `entrance_details` varchar(50) NOT NULL,
  `entrance_time` varchar(50) NOT NULL,
  PRIMARY KEY (`entrace_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_entrance VALUES("1","Day entrance","8:00am - 5:00pm");
INSERT INTO tb_entrance VALUES("2","Night entrance","5:01pm -12:00am");


DROP TABLE IF EXISTS tb_entrance_swimmers;

CREATE TABLE `tb_entrance_swimmers` (
  `swimmer_id` int(15) NOT NULL AUTO_INCREMENT,
  `swimmer_details` varchar(50) NOT NULL,
  `swimmer_price` varchar(50) NOT NULL,
  `entrance_id` varchar(50) NOT NULL,
  PRIMARY KEY (`swimmer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tb_entrance_swimmers VALUES("1","Adult","160","1");
INSERT INTO tb_entrance_swimmers VALUES("2","Child","130","1");
INSERT INTO tb_entrance_swimmers VALUES("3","Senior","130","1");
INSERT INTO tb_entrance_swimmers VALUES("4","Adult","200","2");
INSERT INTO tb_entrance_swimmers VALUES("5","Child","160","2");
INSERT INTO tb_entrance_swimmers VALUES("6","Senior","160","2");


DROP TABLE IF EXISTS tb_guest;

CREATE TABLE `tb_guest` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_reg` varchar(32) NOT NULL,
  `time_reg` varchar(32) NOT NULL,
  `image` varchar(50) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tb_guest VALUES("1","Karat","Karat","singit@yahoo.com","0908154646","karatmo","e10adc3949ba59abbe56e057f20f883e","2018-02-24","8:30:54 A.M.","default_avatar.jpg","e291149fa4aa0c2d23c0814f1d712d37");


DROP TABLE IF EXISTS tb_guestno;

CREATE TABLE `tb_guestno` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `Adult` varchar(50) NOT NULL,
  `Child` varchar(50) NOT NULL,
  `Senior` varchar(50) NOT NULL,
  `bank_code` varchar(50) NOT NULL,
  `id_user` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tb_guestno VALUES("1","1","2","1","21123543","1");


DROP TABLE IF EXISTS tb_message;

CREATE TABLE `tb_message` (
  `message_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_reg` varchar(50) NOT NULL,
  `time_send` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS tb_payable;

CREATE TABLE `tb_payable` (
  `payable_id` int(15) NOT NULL AUTO_INCREMENT,
  `bank_code` varchar(60) NOT NULL,
  `entrance_id` int(15) NOT NULL,
  `promo_id` varchar(50) NOT NULL,
  `id_user` int(15) NOT NULL,
  `status_id` varchar(15) NOT NULL,
  `total` varchar(50) NOT NULL,
  PRIMARY KEY (`payable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tb_payable VALUES("1","21123543","1","","1","1","");


DROP TABLE IF EXISTS tb_payment;

CREATE TABLE `tb_payment` (
  `payment_id` int(15) NOT NULL AUTO_INCREMENT,
  `id_user` int(15) NOT NULL,
  `total_order` varchar(50) NOT NULL,
  `room_balance` varchar(50) NOT NULL,
  `entrance_balance` varchar(50) NOT NULL,
  `over_total` varchar(50) NOT NULL,
  `bank_code` varchar(50) NOT NULL,
  `date_paid` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS tb_promo;

CREATE TABLE `tb_promo` (
  `promo_id` int(15) NOT NULL AUTO_INCREMENT,
  `promo_code` varchar(50) NOT NULL,
  `promo` varchar(30) NOT NULL,
  `promo_discount` varchar(50) NOT NULL,
  `swimmer_id` varchar(15) NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO tb_promo VALUES("12","6B2D6","20-30 person","23212","14");
INSERT INTO tb_promo VALUES("15","QSCGC","fds","12","15");


DROP TABLE IF EXISTS tb_reservation;

CREATE TABLE `tb_reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `roomID` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `arrival` varchar(50) DEFAULT NULL,
  `departure` varchar(50) DEFAULT NULL,
  `day_no` int(25) NOT NULL,
  `payable` int(11) NOT NULL,
  `status_id` varchar(15) NOT NULL,
  `date_reg` date NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tb_reservation VALUES("1","104","1","02/28/2018","03/15/2018","18","60156","2","2018-02-24","M25SJVFGAK");
INSERT INTO tb_reservation VALUES("2","92","1","02/28/2018","03/15/2018","18","60156","1","2018-02-24","43W4K8DOFM");
INSERT INTO tb_reservation VALUES("3","107","1","02/28/2018","03/15/2018","18","45000","1","2018-02-24","43W4K8DOFM");
INSERT INTO tb_reservation VALUES("4","103","1","02/28/2018","03/15/2018","18","45000","1","2018-02-24","46GUOZA3PN");
INSERT INTO tb_reservation VALUES("5","101","1","02/28/2018","03/15/2018","18","45000","1","2018-02-24","46GUOZA3PN");


DROP TABLE IF EXISTS tb_rooms;

CREATE TABLE `tb_rooms` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) NOT NULL,
  `category_id` int(15) NOT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

INSERT INTO tb_rooms VALUES("104","S-243","7");
INSERT INTO tb_rooms VALUES("105","F-6693","8");
INSERT INTO tb_rooms VALUES("107","F-69065","8");
INSERT INTO tb_rooms VALUES("108","K-5997","9");
INSERT INTO tb_rooms VALUES("103","F-753","8");
INSERT INTO tb_rooms VALUES("102","K-918","9");
INSERT INTO tb_rooms VALUES("101","F-55015","8");
INSERT INTO tb_rooms VALUES("99","F-0673","8");
INSERT INTO tb_rooms VALUES("95","K-41","9");
INSERT INTO tb_rooms VALUES("96","K-65626","9");
INSERT INTO tb_rooms VALUES("97","K-7726","9");
INSERT INTO tb_rooms VALUES("98","F-319","8");
INSERT INTO tb_rooms VALUES("94","F-22804","8");
INSERT INTO tb_rooms VALUES("92","S-978","7");


DROP TABLE IF EXISTS tb_slider;

CREATE TABLE `tb_slider` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(50) NOT NULL,
  `slider_details` varchar(500) NOT NULL,
  `slider_image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tb_slider VALUES("1","Welcome to Magic Jade Resort","Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.","Twin Pool.jpg");
INSERT INTO tb_slider VALUES("2","Welcome to Magic Jade Resort","Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.","Wave Pool.jpg");
INSERT INTO tb_slider VALUES("3","Welcome to Magic Jade Resort","Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.","Olympic pool.jpg");
INSERT INTO tb_slider VALUES("4","Welcome to Magic Jade Resort","Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.","Kiddie Pool.jpg");
INSERT INTO tb_slider VALUES("5","Welcome To Kingsfield Express Inn","Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.","Open Function Hall.jpg");
INSERT INTO tb_slider VALUES("6","Welcome to Magic Jade Resort","Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.","Jacuzzi.jpg");


DROP TABLE IF EXISTS tb_status;

CREATE TABLE `tb_status` (
  `status_id` int(15) NOT NULL AUTO_INCREMENT,
  `status_details` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tb_status VALUES("1","pending");
INSERT INTO tb_status VALUES("2","checkin");
INSERT INTO tb_status VALUES("3","checkout");
INSERT INTO tb_status VALUES("4","cancel");


DROP TABLE IF EXISTS tb_user;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_reg` varchar(32) NOT NULL,
  `time_reg` varchar(32) NOT NULL,
  `type_id` int(15) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("13","Admin","Admin","admin@yahoo.com","9213131314","admin123","ef15ad51feb70ced94165021ff4fe8dd","2014-09-03","","1","77a7c92a86ae882df942db841df1144f");
INSERT INTO tb_user VALUES("14","BOBO","ADVISER","ADVISERBOBO@walangalam.com","9213131314","adviserbobo","tanga","2014-09-04","","1","5351f8ab18d9747c283dc793414d50d6");


DROP TABLE IF EXISTS tb_usertype;

CREATE TABLE `tb_usertype` (
  `type_id` int(15) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_usertype VALUES("1","administrator");
INSERT INTO tb_usertype VALUES("2","Staff");


