CREATE TABLE roles(
    id SERIAL PRIMARY KEY,
    name varchar(50) 
);

CREATE TABLE users(
    id SERIAL PRIMARY KEY,
    firstName varchar(50) not null,
    lastName varchar(50) not null,
    id_role int REFERENCES roles(id),
    photo varchar(255) not null,
    bio varchar(255),
    portfolio varchar(255),
    email varchar(100) UNIQUE,
    password varchar(255)
)