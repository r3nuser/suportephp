 
create database suporteiros;

use suporteiros;

create table if not exists aluno(
	aluno_cod int not null auto_increment,
	nome varchar(255) not null,
	email varchar(255) not null,
	curso varchar(255) not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;