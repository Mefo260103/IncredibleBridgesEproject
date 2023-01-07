CREATE TABLE `continents` (
  `id` int PRIMARY KEY,
  `name_continents` varchar(255)
);

CREATE TABLE `country` (
  `id` int PRIMARY KEY,
  `name_country` varchar(255),
  `continents_id` int
);

CREATE TABLE `city` (
  `id` int PRIMARY KEY,
  `country_id` int,
  `name_city` varchar(255),
  `address` varchar(255)
);

CREATE TABLE `information` (
  `id` int PRIMARY KEY,
  `city_id` int,
  `content` longtext
);

CREATE TABLE `brigdes` (
  `id` int PRIMARY KEY,
  `infomation_id` int,
  `name_brigdes` varchar(255),
  `thumbnail` varchar(255)
);

CREATE TABLE `user` (
  `id` int PRIMARY KEY,
  `fullname` varchar(255),
  `password` varchar(255),
  `email` varchar(255)
);

CREATE TABLE `feedback` (
  `id` int,
  `name` varchar(255),
  `email` varchar(255),
  `cmt` varchar(255),
  `phone_number` varchar(255),
  `subject_name` varchar(255)
);

ALTER TABLE `country` ADD FOREIGN KEY (`continents_id`) REFERENCES `continents` (`id`);

ALTER TABLE `city` ADD FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

ALTER TABLE `information` ADD FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

ALTER TABLE `brigdes` ADD FOREIGN KEY (`infomation_id`) REFERENCES `information` (`id`);
