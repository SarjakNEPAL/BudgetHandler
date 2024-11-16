-- Create the database
CREATE DATABASE users;

-- Use the newly created database
USE users;

-- Create the tables
CREATE TABLE sav (
    Username VARCHAR(50) PRIMARY KEY,
    savings DECIMAL(10, 2)
);

CREATE TABLE logininfo (
    Username VARCHAR(50) PRIMARY KEY,
    Password VARCHAR(255)
);

CREATE TABLE expenditure (
    username VARCHAR(50),
    spnt_name VARCHAR(100),
    spnt_amt DECIMAL(10, 2),
    category VARCHAR(50),
    remarks TEXT,
    date VARCHAR(50)
);

CREATE TABLE settings (
    username VARCHAR(50),
    Currency VARCHAR(10)
);
