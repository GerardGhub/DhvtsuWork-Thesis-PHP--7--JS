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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO tb_entrance_swimmers VALUES("14","Adult","2202","1");
INSERT INTO tb_entrance_swimmers VALUES("15","31231","23","2");


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_guest VALUES("1","Hunter","Creative","jade@yahoo.com","9213131314","hunter1990","5f4dcc3b5aa765d61d8327deb882cf99","2014-09-01","8:42:50 A.M.","default_avatar.jpg","52690879167dcd0d6e1fd8d8725d152b");
INSERT INTO tb_guest VALUES("2","Magic","Jade","kingdom@yahoo.com","9213131314","kingdom","5f4dcc3b5aa765d61d8327deb882cf99","2014-09-01","8:47:08 A.M.","default_avatar.jpg","2e1a30075f498e2b6cdbacafbe8f0439");


DROP TABLE IF EXISTS tb_message;

CREATE TABLE `tb_message` (
  `message_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_send` varchar(50) NOT NULL,
  `time_send` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tb_message VALUES("4","Michael","kringcarl_j@yahoo.com","9213131314","kfsd dsfdf dsfds","2014-08-31","2:55:35 A.M.");


DROP TABLE IF EXISTS tb_promo;

CREATE TABLE `tb_promo` (
  `promo_id` int(15) NOT NULL AUTO_INCREMENT,
  `promo_code` varchar(50) NOT NULL,
  `promo` varchar(30) NOT NULL,
  `promo_discount` varchar(50) NOT NULL,
  `swimmer_id` varchar(15) NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tb_promo VALUES("12","6B2D6","20-30 person","23212","14");


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
  `booked` date NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO tb_reservation VALUES("1","44","1","09/11/2014","09/13/2014","2","6684","1","2014-09-01","MVYBT2EPNV");
INSERT INTO tb_reservation VALUES("2","68","1","09/11/2014","09/13/2014","2","5000","1","2014-09-01","WDB5M5WPDU");
INSERT INTO tb_reservation VALUES("3","69","1","09/11/2014","09/13/2014","2","5000","1","2014-09-01","FGADNMPRGF");
INSERT INTO tb_reservation VALUES("4","78","1","09/11/2014","09/13/2014","2","5000","1","2014-09-01","WNIATVTRRZ");
INSERT INTO tb_reservation VALUES("5","79","1","09/11/2014","09/13/2014","2","5000","1","2014-09-01","Q43NEWCA8S");
INSERT INTO tb_reservation VALUES("6","67","2","09/11/2014","09/13/2014","2","5000","1","2014-09-01","SQXBQBVKFJ");
INSERT INTO tb_reservation VALUES("7","77","2","09/11/2014","09/13/2014","2","5000","1","2014-09-01","DS3NM33I5A");
INSERT INTO tb_reservation VALUES("8","80","2","09/11/2014","09/13/2014","2","5000","1","2014-09-01","TWQOHQKFGS");


DROP TABLE IF EXISTS tb_rooms;

CREATE TABLE `tb_rooms` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) NOT NULL,
  `category_id` int(15) NOT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

INSERT INTO tb_rooms VALUES("20","S-VBA","7");
INSERT INTO tb_rooms VALUES("42","T-3YS","6");
INSERT INTO tb_rooms VALUES("36","T-65V","6");
INSERT INTO tb_rooms VALUES("46","T-R5Y","6");
INSERT INTO tb_rooms VALUES("47","T-WIU","6");
INSERT INTO tb_rooms VALUES("44","S-M8R","7");
INSERT INTO tb_rooms VALUES("48","T-2KW","6");
INSERT INTO tb_rooms VALUES("53","T-I4U","6");
INSERT INTO tb_rooms VALUES("55","T-GFX","6");
INSERT INTO tb_rooms VALUES("64","F-02A","8");
INSERT INTO tb_rooms VALUES("65","F-7QU","8");
INSERT INTO tb_rooms VALUES("66","F-BOK","8");
INSERT INTO tb_rooms VALUES("67","F-SI8","8");
INSERT INTO tb_rooms VALUES("68","F-Y2M","8");
INSERT INTO tb_rooms VALUES("69","F-0AG","8");
INSERT INTO tb_rooms VALUES("77","F-O0V","8");
INSERT INTO tb_rooms VALUES("78","F-52K","8");
INSERT INTO tb_rooms VALUES("79","F-WA8","8");
INSERT INTO tb_rooms VALUES("80","F-WY7","8");
INSERT INTO tb_rooms VALUES("81","F-6OK","8");
INSERT INTO tb_rooms VALUES("82","F-4CJ","8");


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO tb_status VALUES("1","pending");
INSERT INTO tb_status VALUES("2","checkin");
INSERT INTO tb_status VALUES("3","checkout");


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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("8","Admin","Admin","magicjade_@yahoo.com.ph.org","9213131314","magicadmin","5f4dcc3b5aa765d61d8327deb882cf99","2014-08-30","","1","y");
INSERT INTO tb_user VALUES("9","OL","Staff","staff@yahoo.com","9213131314","staff2014","5f4dcc3b5aa765d61d8327deb882cf99","2014-08-31","5:33:56 A.M.","2","6ca8e3aa6647ced0225216ab7b21837d");
INSERT INTO tb_user VALUES("10","Admin","Admin","admin@yahoo.com","9213131314","admin2014","ef15ad51feb70ced94165021ff4fe8dd","2014-09-01","11:46:47 P.M.","1","1a40a9b93d58ca66d6582effe0274659");


DROP TABLE IF EXISTS tb_usertype;

CREATE TABLE `tb_usertype` (
  `type_id` int(15) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tb_usertype VALUES("1","administrator");
INSERT INTO tb_usertype VALUES("2","Staff");


