	create database gggr;
    use gggr;
    CREATE TABLE rrrg (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(255),
    email NVARCHAR(255),
    title NVARCHAR(255),
    decs NVARCHAR(255),
    date DATE DEFAULT CURRENT_TIMESTAMP
);
    select * from formdob;