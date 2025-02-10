-- Active: 1738750890629@@127.0.0.1@5555@postgres

CREATE DATABASE MVC;



DROP DATABASE MVC;

SHOW DATABASES;

use MVC;

CREATE TABLE test;

CREATE TABLE utilisateur (
  id SERIAL PRIMARY KEY,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
);



CREATE TABLE role (
  id SERIAL PRIMARY KEY,
  role_name VARCHAR(255),
  descrition TEXT
);



SELECT * FROM utilisateur;

SELECT * FROM role;


drop Table cars;
