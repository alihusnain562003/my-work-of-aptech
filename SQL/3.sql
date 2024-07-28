CREATE DATABASE CLIENTDETAILS;
 
USE CLIENTDETAILS;

CREATE TABLE CLIENTDETAILS(
ID INT PRIMARY KEY NOT NULL auto_increment, 
CLIENTNAME VARCHAR (255),
Company VARCHAR (255),
Title VARCHAR (255),
Department VARCHAR(255),
Email VARCHAR (255),
CompanyAddress VARCHAR (255),
CompanyWebsite VARCHAR (255),
WorkingHours int (255),
WorkingDays int (255)
);


INSERT INTO  CLIENTDETAILS VALUES (NULL, "Ahmed", "BrightGlobe Solutions","CEO","Executive","a@gmail.com", "123 Main Street, Lumina City, State ZIP","brightglobe.com",8 ,'6');


SELECT * FROM  CLIENTDETAILS;
SELECT NAME, EMAIL FROM  CLIENTDETAILS;

delete from clientdetails where id=1;
