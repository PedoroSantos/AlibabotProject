create database Alibabot;
use Alibabot;

/* Create Database */
create table Usuarios(
idUsuario int primary key not null auto_increment,
nome varchar(50) not null,
email varchar(100) not null,
senha varchar(50) not null,
termosCondicoes boolean not null
);

create table Funcionarios(
idFuncionario int primary key not null auto_increment,
nome varchar(70) not null,
email varchar(100) not null,
senha varchar(50) not null,
areaFuncionario varchar(40) not null
);

create table APP(
idAPP int primary key not null auto_increment,
versaoAPP char(6) not null,
tamanhoAPP char(5) not null
);

show tables;