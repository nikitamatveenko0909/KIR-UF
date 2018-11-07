CREATE DATABASE itsupport;

use itsupport;

CREATE TABLE svar(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    mail varchar(32),
    problem varchar(256)
);