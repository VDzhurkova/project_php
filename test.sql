DROP DATABASE IF EXISTS test_members;
CREATE DATABASE IF NOT EXISTS test_members;
USE test_members;

SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';

DROP TABLE IF EXISTS members;


CREATE TABLE members (
    id    int NOT NULL AUTO_INCREMENT,
    member_name  VARCHAR(40)     NOT NULL,
    email_addr  CHAR(40)	NOT NULL,
    sch_name   VARCHAR(100)      NOT NULL,
    PRIMARY KEY (id)
);





