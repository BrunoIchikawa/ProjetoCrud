create database dbteste;

use dbteste;

create table tbusuario(
	codi_t int primary key auto_increment,
    nome_t varchar(40),
    email_t varchar(40),
    senha_t varchar(8),
    sexo_t varchar(1),
    dtna_t datetime
);

select * from tbusuario;
