CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;

CREATE TABLE login(
  id int(255) NOT NULL AUTO_INCREMENT,
  user varchar(20) NOT NULL,
  password varchar(20) NOT NULL,
  PRIMARY KEY (id)
);
DESCRIBE login;

INSERT INTO login (id, user, password) VALUES
(1, 'carolina', 'carolina');
