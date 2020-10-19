CREATE DATABASE IF NOT EXISTS comments;

ALTER DATABASE comments CHARACTER SET utf8 COLLATE utf8_general_ci;

USE comments;

CREATE TABLE IF NOT EXISTS comments (
  id INT NOT NULL AUTO_INCREMENT,
  name varchar(255) DEFAULT NULL,
  email varchar(255) DEFAULT NULL,
  comment varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);