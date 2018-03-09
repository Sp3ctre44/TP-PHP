CREATE DATABASE php_is_best;



CREATE TABLE IF NOT EXISTS `users` (

  id INT NOT NULL AUTO_INCREMENT,

  username VARCHAR(20),

  email VARCHAR(50),
  
  note INT,

  PRIMARY KEY (id)

) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;