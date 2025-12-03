create database db_sistema_chamado;

use db_sistema_chamado;

create table tb_usuario(
	id_usuario int auto_increment primary key,
    nm_usuario varchar(45),
    email varchar(60),
    senha text,
    nr_celular char(11)
);

select *
from tb_usuario;

create table tb_tipo(
    id_tipo int auto_increment primary key,
    nm_tipo varchar(20)
);
insert into tb_tipo value (null,"Incidente"), (null,"Requisição"), (null,"Outro");

create table tb_categoria(
    id_categoria int auto_increment primary key,
    nm_categoria varchar(30)
);
insert into tb_categoria value (null,"Hardware"), (null,"Software"), (null,"Rede");

create table tb_urgencia(
    id_urgencia int auto_increment primary key,
    nm_urgencia varchar(20)
);
insert into tb_urgencia values
    (null,"Alta"),
    (null,"Média"),
    (null,"Baixa");

create table tb_chamados(
    cd_chamado int auto_increment primary key,
    fk_tipo int,
    fk_categoria int,
    fk_urgencia int,
    titulo varchar(80),
    descricao varchar(100),
    foreign key (fk_tipo) references tb_tipo(id_tipo),
    foreign key (fk_categoria) references tb_categoria(id_categoria),
    foreign key (fk_urgencia) references tb_urgencia(id_urgencia)
);