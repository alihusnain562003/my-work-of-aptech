CREATE DATABASE MARKSHEET;
USE MARKSHEET;

CREATE TABLE RESULT (
RollNumber INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
StudentName NVARCHAR(255),
PassingYear INT,
Examination NVARCHAR(255),
Percentage INT
);


INSERT INTO RESULT VALUES (311000,"MISBAH", '2020', "ANNUAL",'81');
INSERT INTO RESULT VALUES (311001,"LAIBA", '2021', "ANNUAL",'82');
INSERT INTO RESULT VALUES (311002,"MARYAM", '2020', "ANNUAL",'71');
INSERT INTO RESULT VALUES (311003,"UMAIMA", '2020', "ANNUAL",'65');
INSERT INTO RESULT VALUES (311004,"FATMAH", '2020', "ANNUAL",'55');
INSERT INTO RESULT VALUES (311005,"ZAINAB", '2020', "ANNUAL",'31');
INSERT INTO RESULT VALUES (311006,"AFFAN", '2019', "SUPPLY",'71');
INSERT INTO RESULT VALUES (311007,"OSMAN", '2020', "ANNUAL",'81');
INSERT INTO RESULT VALUES (311008,"HASSAN", '2018', "SUPPLY",'55');
INSERT INTO RESULT VALUES (311009,"HAMZA", '2021', "ANNUAL",'61');
INSERT INTO RESULT VALUES (311010,"ZUBAIR", '2021', "ANNUAL",'88');
INSERT INTO RESULT VALUES (311011,"ABUBAKAR", '2020', "ANNUAL",'66');
INSERT INTO RESULT VALUES (311012,"OMER", '2020', "ANNUAL",'88');


SELECT * FROM RESULT;
select STUDENTname , PERCENTAGE ,
case 
when PERCENTAGE >=80 and  PERCENTAGE <=100 then "A+"
when PERCENTAGE >=70 and  PERCENTAGE <=79 then "A"
when PERCENTAGE >=60 and  PERCENTAGE <=69 then "B"
when PERCENTAGE >=50 and  PERCENTAGE <=59 then "C"
when PERCENTAGE >=40 and  PERCENTAGE <=49 then "D"
else "FAIL"end as "GRADE"
from RESULT;
