
-- TASK 3 : ALTER TABLE / DROP COLUMNS

CREATE DATABASE ASSIGNMENT14;
USE ASSIGNMENT14;

CREATE TABLE ASSIGNMENT4(
ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(255),
EMAIL VARCHAR(255),
PASSWORD VARCHAR(255),
CONTACT VARCHAR(255),
AGE VARCHAR(255)
);



INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Ali" , "ALI2@gmail", "5178",' 1101' ,"22");
INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Nimra" , "NI00@gmail", "8521",' 1102' ,"31");
INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Hassan" , "HAS55@gmail", "5410", '1103',"21");
INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Muhammad Ahmed" ,"MA20@gmail", "6485", '1104',"25");
INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Amir Khan " , "AK55@gmail", "4585", '1105',"46");
INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Sadiq" , "SA22@gmail", "7894", '1106',"41");
INSERT INTO  ASSIGNMENT4 VALUES(NULL,"Usman" , "US99@gmail", "3574", '1107' ,"33");



SELECT * FROM ASSIGNMENT4;


--  DROPING COLUMNS

ALTER TABLE ASSIGNMENT4 DROP COLUMN EMAIL,          
 DROP COLUMN  PASSWORD ;  