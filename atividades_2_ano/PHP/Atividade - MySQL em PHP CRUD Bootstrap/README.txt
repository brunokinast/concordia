Configura��o MySQL pr�via necess�ria para funcionamento:

Username: root
Password: [vazia]
Database: wda_crud
Tabelas:
	customers(
		id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		name varchar(255) NOT NULL,
		cpf_cnpj varchar(14) NOT NULL,
		birthdate date NOT NULL,
		address varchar(255) NOT NULL,
		hood varchar(100) NOT NULL,
		zip_code int(8) NOT NULL,
		city varchar(100) NOT NULL,
		state varchar(100) NOT NULL,
		phone int(13) NOT NULL,
		mobile int(13) NOT NULL,
		ie int(11) NOT NULL,
		created datetime NOT NULL,
		modified datetime NOT NULL
	)


Descri��o:

Atividade de cria��o de uma p�gina PHP para cadastro de clientes, pode n�o estar 100% funcional.