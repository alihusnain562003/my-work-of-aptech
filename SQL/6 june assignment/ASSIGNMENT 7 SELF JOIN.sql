CREATE DATABASE FAMILYTREE;
USE FAMILYTREE;

CREATE TABLE FAMILYTREE(
ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
NAME NVARCHAR(255),
DaughterAndSonOf INT(255),
FOREIGN KEY(DaughterAndSonOf)  REFERENCES FAMILYTREE(Id));






insert into FAMILYTREE (Name,DaughterAndSonOf)values ('PROPHET MUHAMMAD',NULL);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  ('HAZRAT QASIM',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  ('HAZRAT ABDULAH',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT IBRAHIM ',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT ZANID',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT ALI',5);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT AUMAIMA',5);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT RUQIA',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT ABDULAH',8);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT UMA-KALSOM',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT FATIMA',1);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT HASSAN',11);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT HUSAIN',11);
insert into FAMILYTREE (Name,DaughterAndSonOf)values  (' HAZRAT ZANIB',11);
insert into FAMILYTREE (Name,DaughterAndSonOf)values (' HAZRAT UMA-KALSOM','11');


SELECT * FROM FAMILYTREE;




select a.name as'Name' , b.name as 'DaughterAndSonOf' from 
FAMILYTREE a 
inner join 
FAMILYTREE b 
on a.DaughterAndSonOf=b.Id;



select a.name as'Name' , b.name as 'Father Name' from FAMILYTREE a ,FAMILYTREE b where  a.FatherName=b.Id;


