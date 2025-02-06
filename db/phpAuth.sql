create database phpAuth;
use phpAuth;

create table usuarios(
    id int primary key auto_increment not null,
    nombreUsuario varchar(50) unique not null,
    password varchar(255) not null,
);