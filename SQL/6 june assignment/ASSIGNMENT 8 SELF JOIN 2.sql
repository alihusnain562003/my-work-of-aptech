CREATE DATABASE FAMILYABC;
USE FAMILYABC;

CREATE TABLE FAMILYTREEABC(
ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
NAME NVARCHAR(255),
SonName INT(255),
FOREIGN KEY(SonName)  REFERENCES FAMILYTREEABC(Id));


INSERT INTO FAMILYTREEABC (Name) VALUES ("Prophet Muhammad S.A.W");
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Abdullah", 1);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Abdul Mutlib", 2);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Hashim", 3);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Abd-e-Munaf", 4);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Qusai", 5);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Kilab", 6);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Murra", 7);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ka’b", 8);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Lo’i", 9);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ghalib", 10);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Fahr", 11);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Malik", 12);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat An Nadr", 13);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Kinana", 14);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Khuzaiman", 15);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Mudrikah", 16);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Elias", 17);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Mudar", 18);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Nizar", 19);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ma’ad", 20);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Adnan", 21);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Add", 22);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Humaisi", 23);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Salaman", 24);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aws", 25);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Buz", 26);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Qamwal", 27);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Obai", 28);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat ‘Awwam", 29);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Nashid", 30);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Haza", 31);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Bildas", 32);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Yadlaf", 33);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Tabikh", 34);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Jahim", 35);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Nahish", 36);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Makhi", 37);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aid",38);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Abqar", 39);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ubaid", 40);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ad da’a", 41);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Hamdan", 42);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Sanbir", 43);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Yathrabi", 44);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Yahzin", 45);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Yalhan", 46);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ar’awi", 47);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aizi", 48);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aid", 49);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Deshan", 50);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aisar", "51");
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Afnad", 52);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aiham", 53);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Muksar", 54);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Nahith", 55);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Zarih", 56);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Sami", 57);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Mazzi", 58);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Awda", 59);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Aram", 60);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Qaidar", 61);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Prophet Ismail A.S", 62);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Prophet Ibrahim A.S", 63);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Azar", 64);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Nahur", 65);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Saru", 66);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Ra’u", 67);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Falikh", 68);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Abir",69);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Arfakhshad", 70);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Sam", 71);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Prophet Noah A.S", 72);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Lamik", 73);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Mutwashlack", 74);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Akhnukh", 75);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Prophet Idris A.S", 76);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Yarid", 77);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Mahal’il", 78);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Qainan", 79);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Anusha", 80);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Shith A.S", 81);
INSERT INTO FAMILYTREEABC (Name, SonName) VALUES ("Hazrat Adam A.S", 82);



SELECT * FROM FAMILYTREEABC;


select a.name as'Name' , b.name as 'SONName' from Family a ,Family b where  a.FatherName=b.Id;


select a.name as"Name" , b.name as "SonName" from 
FAMILYTREEABC a 
inner join 
FAMILYTREEABC b 
on a.SonName=b.Id;

