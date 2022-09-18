CREATE DATABASE IF NOT EXISTS cellphones;

USE cellphones;

CREATE TABLE IF NOT EXISTS cellPhones 
(
    id INT NOT NULL AUTO_INCREMENT,
    code CHAR(4) NOT NULL,
    brand NVARCHAR(100) NOT NULL,
    model NVARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) DEFAULT 0,
    CONSTRAINT PK_CellPhones PRIMARY KEY (id)
)Engine=InnoDB;

CREATE TABLE IF NOT EXISTS users
(
    userName VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    CONSTRAINT PK_Users PRIMARY KEY (userName)
)Engine=InnoDB;

DROP procedure IF EXISTS `Users_GetByUserName`;

DELIMITER $$

CREATE PROCEDURE Users_GetByUserName (IN userName VARCHAR(100))
BEGIN
	SELECT users.userName, users.password
    FROM users
    WHERE (users.userName = userName);
END$$

DELIMITER ;

DROP procedure IF EXISTS `CellPhones_Add`;

DELIMITER $$

CREATE PROCEDURE CellPhones_Add (IN code CHAR(4), IN brand VARCHAR(100), IN model VARCHAR(100), IN price DECIMAL(10, 2))
BEGIN
	INSERT INTO cellPhones
        (cellPhones.code, cellPhones.brand, cellPhones.model, cellPhones.price)
    VALUES
        (code, brand, model, price);
END$$

DELIMITER ;

DROP procedure IF EXISTS `CellPhones_GetAll`;

DELIMITER $$

CREATE PROCEDURE CellPhones_GetAll ()
BEGIN
	SELECT id, code, brand, model, price
    FROM cellPhones;
END$$

DELIMITER ;

DROP procedure IF EXISTS `CellPhones_Delete`;

DELIMITER $$

CREATE PROCEDURE CellPhones_Delete (IN id INT)
BEGIN
	DELETE 
    FROM cellPhones
    WHERE (cellPhones.id = id);
END$$

DELIMITER ;

INSERT INTO users 
    (userName, password)
VALUES
    ('juan@azar.com', 'azar123456'),
    ('seba@soler.com', '1234sebastian'),
    ('elena@perez.com', 'eleperez10'),
    ('flor@hernandez.com', 'f123456789'),
    ('student@utn.com', 'pass12345')