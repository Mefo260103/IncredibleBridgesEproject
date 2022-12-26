CREATE TABLE `continent` (
  `ID_continet` int PRIMARY KEY AUTO_INCREMENT,
  `Name_continent` varchar(50)
);

CREATE TABLE `user` (
  `id_user` int PRIMARY KEY AUTO_INCREMENT,
  `fullname` varchar(50),
  `email` varchar(150),
  `password` varchar(32)
);

CREATE TABLE `address` (
  `ID_address` int PRIMARY KEY AUTO_INCREMENT,

);

CREATE TABLE `country` (
  `ID_country` int PRIMARY KEY AUTO_INCREMENT,
  `name_country` varchar(255),
  `ID_continet` int
);

CREATE TABLE `city` (
  `ID_city` int PRIMARY KEY AUTO_INCREMENT,
  `name_city` varchar(50),
  `ID_country` int,
  `Postal_code` varchar(50)
);

CREATE TABLE `brigdes` (
  `name` int,
  `ID_brigde` int PRIMARY KEY AUTO_INCREMENT,
  `ID_address` varchar(50),
  `information` longtext,
  `history` longtext,
  `picture` varchar(50)
);

CREATE TABLE `gallery` (
  `ID_picture` int PRIMARY KEY AUTO_INCREMENT,
  `picture` img,
  `name_brigdes` varchar(50),
  `time` datetime,
  `ID_brigde` int
);

CREATE TABLE `feedback` (
  `name` varchar(50),
  `email` varchar(150),
  `cmt` longtext,
  `id_fb` int PRIMARY KEY AUTO_INCREMENT,
  `phone_number` varchar(20),
  `subject` longtext
);

ALTER TABLE `country` ADD FOREIGN KEY (`ID_continet`) REFERENCES `continent` (`ID_continet`);

ALTER TABLE `city` ADD FOREIGN KEY (`ID_country`) REFERENCES `country` (`ID_country`);

ALTER TABLE `gallery` ADD FOREIGN KEY (`ID_brigde`) REFERENCES `brigdes` (`ID_brigde`);
