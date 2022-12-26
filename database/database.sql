CREATE TABLE `continents` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name_continents` varchar(50) NOT NULL
);

CREATE TABLE `country` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name_country` varchar(50) NOT NULL,
  `continents_id` int
);

CREATE TABLE `city` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `country_id` int,
  `name_city` varchar(50) NOT NULL,
  `Postal_code` varchar(50)
);

CREATE TABLE `address` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `city_id` int,
  `name_address` varchar(50) NOT NULL
);

CREATE TABLE `brigdes` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `address_id` int,
  `name_brigdes` varchar(50) NOT NULL,
  `information` longtext,
  `history` longtext,
  `thumbnail` varchar(500) NOT NULL
);

CREATE TABLE `gallery` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name_brigdes` varchar(50) NOT NULL,
  `thumbnail` varchar(500) NOT NULL
);

CREATE TABLE `feedback` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50),
  `email` varchar(50),
  `cmt` varchar(500),
  `phone_number` varchar(20),
  `subject_name` varchar(200)
);

ALTER TABLE `country` ADD FOREIGN KEY (`continents_id`) REFERENCES `continents` (`id`);

ALTER TABLE `city` ADD FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

ALTER TABLE `address` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `brigdes` ADD FOREIGN KEY (`address_id`) REFERENCES `address` (`id`);
