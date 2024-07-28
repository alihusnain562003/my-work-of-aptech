CREATE DATABASE MAyFSCHOOL;
USE MAyFSCHOOL;

CREATE TABLE MFS (
ID INT PRIMARY KEY NOT NULL auto_increment, 
NAME  VARCHAR(255),
AGE  VARCHAR(255),
CONTACT VARCHAR(255),
SALARY INT,
DEPARTMENT VARCHAR(255)

);

INSERT INTO MFS  VALUES(NULL,"Ali Hassan" , "56", "0215", 172000 ,"Administration Department");
INSERT INTO MFS VALUES(NULL,"Ali Hassan" , "56", "0215", 172000 ,"Academic Department");
INSERT INTO MFS  VALUES(NULL,"Abdul wali" , "24", "0215", 130300,"Student Services Department");
INSERT INTO MFS VALUES(NULL,"Muhammad Ahmed" ,"46", "0215", 124000,"Human Resources Department");
INSERT INTO MFS  VALUES(NULL," wali " , "35", "0215", 155000,"Finance Department");
INSERT INTO MFS  VALUES(NULL," ali" , "35", "0215", 115000,"Operations and Facilities Department");
INSERT INTO MFS  VALUES(NULL,"ali" , "56", "0215", 172000 ,"Technology Department");
INSERT INTO MFS  VALUES(NULL,"Abdul wali" , "24", "0215", 130300,"Community Relations Department");


SELECT * FROM MFS ;

update info set name='Miss fatima' where id =2;
update info set name='Sir Ali |Husnain' where id =1;
update info set name='Sir Abdul Wali' where id =3;
update info set name='Sir Muhammad Ahmed' where id =4;
update info set name='Sir Amir Khan' where id =5;
update info set name='Sir Amir' where id =6;
update info set name='Sir Usman' where id =7;
update info set name='Sir Fahad' where id =8;




1. Miss Ahmed
2.
3. Sir Ali
4. Miss Aisha
5. Sir Hassan
6. Miss Zara
7. Sir Mohammad
8. Miss Sana
9. Sir Bilal
10. Miss Hira
11. 
12. Miss Mariam
13. Sir Farhan
14. Miss Hina
15. Sir Saad
16. Miss Rabia
17. 
18. Miss Amna
19. Sir Shahid
20. Miss Sumaira
21. Sir Salman
22. Miss Ayesha
23. Sir Waqas
24. Miss Mahnoor
25. Sir Imran
26. Miss Bushra
27. Sir Irfan
28. Miss Sadia
29. Sir Asad
30. Miss Nida
31. Sir Arsalan
32. Miss Anam
33. Sir Naveed
34. Miss Zainab
35. Sir Waqar
36. Miss Arooj
37. Sir Arif
38. Miss Aqsa
39. Sir Junaid
40. Miss Sidra
41. Sir Yasir
42. Miss Hareem
43. Sir Asif
44. Miss Tehreem
45. Sir Faraz
46. Miss Kanza
47. Sir Tariq
48. Miss Amina
49. Sir Danish
50. Miss Nimra