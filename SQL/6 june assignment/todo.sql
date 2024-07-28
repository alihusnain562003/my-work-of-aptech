	create database db2;
    use db2;
    CREATE TABLE tb2 (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(255),
    email NVARCHAR(255),
    title NVARCHAR(255),
    contect NVARCHAR(255),
    date DATE default current_timestamp

);
    select * from tb2;