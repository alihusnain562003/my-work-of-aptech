CREATE DATABASE MAFSCHOOLEMP;
USE MAFSCHOOLEMP;

CREATE TABLE MAYFIALDEMP (
ID INT PRIMARY KEY NOT NULL auto_increment, 
NAME  VARCHAR(255),
AGE  VARCHAR(255),
CONTACT VARCHAR(255),
SALARY INT,
DEPARTMENT VARCHAR(255)

);



INSERT INTO MAYFIALDEMP  VALUES(NULL,"" , "56", "0215", 172000 ,"FINANICE");
INSERT INTO MAYFIALDEMP  VALUES(NULL,"Abdul wali" , "24", "0215", 130300,"ACCOUNTS");
INSERT INTO MAYFIALDEMP VALUES(NULL,"Muhammad Ahmed" ,"46", "0215", 124000,"ADMINESTARTION");
INSERT INTO MAYFIALDEMP VALUES(NULL," Amir Khan" , "35", "0215", 155000,"IT");
INSERT INTO MAYFIALDEMP VALUES(NULL," Amir" , "35", "0215", 115000,"Transtortation");







SELECT * FROM MAYFIALDEMP ;
SELECT NAME, EMAIL FROM INFO;