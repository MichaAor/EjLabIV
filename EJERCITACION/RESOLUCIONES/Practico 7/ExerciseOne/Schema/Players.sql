CREATE DATABASE players;

USE players;

CREATE TABLE players
(
    playerCode CHAR(4) NOT NULL,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL,
    playedHours DECIMAL(10, 2),
    CONSTRAINT PK_Players PRIMARY KEY (playerCode)
)Engine=InnoDB;