-- Usage in CLI: mysql db_name < refresh.sql
-- CREATE & POPULATE USERS TABLE
CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255),
    password varchar(255),
    PRIMARY KEY (id)
);
INSERT into users (username, password) VALUES ('admin', 'admin');
INSERT into users (username, password) VALUES ('admin2', 'admin2');
INSERT into users (username, password) VALUES ('admin3', 'admin3');
INSERT into users (username, password) VALUES ('admin4', 'admin4');
INSERT into users (username, password) VALUES ('admin5', 'admin5');
INSERT into users (username, password) VALUES ('admin6', 'admin6');
INSERT into users (username, password) VALUES ('admin7', 'admin7');
INSERT into users (username, password) VALUES ('admin8', 'admin8');
INSERT into users (username, password) VALUES ('admin9', 'admin9');
INSERT into users (username, password) VALUES ('admin10', 'admin10');
INSERT into users (username, password) VALUES ('admin11', 'admin11');
INSERT into users (username, password) VALUES ('admin12', 'admin12');
INSERT into users (username, password) VALUES ('admin13', 'admin13');
INSERT into users (username, password) VALUES ('admin13', 'admin13');

-- CREATE TABLE
CREATE TABLE customers (
   id int NOT NULL AUTO_INCREMENT,
   name varchar(255),
   PRIMARY KEY (id)
);
INSERT into customers (name) VALUES ('School1');
INSERT into customers (name) VALUES ('School2');
INSERT into customers (name) VALUES ('School3');
INSERT into customers (name) VALUES ('School4');
INSERT into customers (name) VALUES ('School5');
INSERT into customers (name) VALUES ('School6');
INSERT into customers (name) VALUES ('School7');
INSERT into customers (name) VALUES ('Bedrijf1');
INSERT into customers (name) VALUES ('Bedrijf2');
INSERT into customers (name) VALUES ('Bedrijf3');
INSERT into customers (name) VALUES ('Bedrijf4');
INSERT into customers (name) VALUES ('Bedrijf5');
INSERT into customers (name) VALUES ('Bedrijf6');
INSERT into customers (name) VALUES ('Bedrijf7');
INSERT into customers (name) VALUES ('Bedrijf8');
INSERT into customers (name) VALUES ('Bedrijf9');
