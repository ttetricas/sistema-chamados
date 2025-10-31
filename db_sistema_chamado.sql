create database db_sistema_chamado;
use db_sistema_chamado;
create table tb_usuario(
	id_usuario int auto_increment primary key,
    nm_usuario varchar(45),
    email varchar(60),
    senha text,
    nr_celular char(11)
);
