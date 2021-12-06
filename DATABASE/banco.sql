create database pessoa;

use pessoa;

create table tbl_pessoa(
id int(10) primary key auto_increment,
nome varchar(50) not null,
sobrenome varchar(500) not null,
nome_user varchar(100) not null
);

