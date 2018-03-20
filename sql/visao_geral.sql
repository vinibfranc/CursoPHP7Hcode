use db_php7;

create table tb_usuarios(
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

insert into tb_usuarios (deslogin, dessenha) values ('root','#%$&!');
select * from tb_usuarios;
update tb_usuarios set dessenha = '12345' where idusuario=1;
delete from tb_usuarios where idusuario=1;
truncate table tb_usuarios;