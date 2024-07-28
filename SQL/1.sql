CREATE DATABASE ALIHUSNAIN;
USE ALIHUSNAIN;

CREATE TABLE INFO (
ID INT PRIMARY KEY NOT NULL auto_increment, 
NAME  VARCHAR(255),
EMAIL VARCHAR(255),
CONTACT VARCHAR(255),
SALARY INT
);


INSERT INTO INFO VALUES(NULL,"Ali Hassan" , "JJ@gmail.com", "0215", 12000);
INSERT INTO INFO VALUES(NULL,"Aisha Khan" , "VV@gmail.com", "0215", 13000);
INSERT INTO INFO VALUES(NULL,"Muhammad Ahmed" ,"DD@gmail.com", "0215", 14000);
INSERT INTO INFO VALUES(NULL," Amir" , "HH@gmail.com", "0215", 15000);




insert into info (name, EMAIL ) values ("Abbas", "WW@gmail.com");
insert into info (name, EMAIL ) values ("Malik", "EE@gmail.com");
insert into info (name, EMAIL ) values ("Farhan Siddiqui", "AA@gmail.com");



SELECT * FROM INFO;
SELECT NAME, EMAIL FROM INFO;
