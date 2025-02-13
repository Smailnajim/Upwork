-- Active: 1738750890629@@127.0.0.1@5555@upwork
create DATABASE Upwork;

USE Upwork;

;

CREATE TABLE roles(
    id SERIAL PRIMARY KEY,
    name varchar(50) 
);

CREATE TABLE users(
    id SERIAL PRIMARY KEY,
    firstname varchar(50) not null,
    lastname varchar(50) not null,
    id_role int REFERENCES roles(id),
    photo varchar(255) not null,
    bio varchar(255),
    portfolio varchar(255),
    email varchar(100) UNIQUE,
    password varchar(255)
);


CREATE TABLE projects(
    id SERIAL PRIMARY KEY,
    titre varchar(50) not null,
    description varchar(50) not null,
    id_client int REFERENCES roles(id),
    id_freelance int REFERENCES roles(id),
    budget varchar(255) not null,
    duration varchar(255),
    categorie int REFERENCES categories(id)
);

CREATE TABLE categories(
    id SERIAL PRIMARY KEY,
    name varchar(50) 
);


INSERT INTO roles (name)
VALUES ('freelance');



SELECT * FROM roles;