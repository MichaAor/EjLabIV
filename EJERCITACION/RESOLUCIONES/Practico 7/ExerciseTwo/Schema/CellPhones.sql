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

INSERT INTO users 
    (userName, password)
VALUES
    ('juan@azar.com', 'azar123456'),
    ('seba@soler.com', '1234sebastian'),
    ('elena@perez.com', 'eleperez10'),
    ('flor@hernandez.com', 'f123456789'),
    ('student@utn.com', 'pass12345')