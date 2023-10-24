CREATE DATABASE projeto_final_MED7;

use projeto_final_MED7;

create table clientes(
idClientes int not null primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
idade int not null);

select * from clientes;