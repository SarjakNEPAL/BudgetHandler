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
Create the business table CREATE TABLE business ( Username VARCHAR(50), Title VARCHAR(100), MRP DECIMAL(10, 2), Discount DECIMAL(10, 2), Final_price DECIMAL(10, 2), Sold_to VARCHAR(100), Paid_status VARCHAR(50), Date VARCHAR(50), Remarks TEXT, no_itm INT
