Configura��o MySQL pr�via necess�ria para funcionamento:

Username: root
Password: [vazia]
Database: escola
Tabelas:
	cadastro_alunos(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		primeironome VARCHAR(20) NOT NULL,
		sobrenome VARCHAR(20) NOT NULL,
		email VARCHAR(50) NOT NULL,
		login VARCHAR(20) NOT NULL,
		senha VARCHAR(20) NOT NULL,
		nomedodog VARCHAR(50) NOT NULL,
		nomeresponsavel1 VARCHAR(20) NOT NULL,
		nomeresponsavel2 VARCHAR(20) NOT NULL,
		data_registro TIMESTAMP
	)
	cadastro_professores(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		primeironome VARCHAR(20) NOT NULL,
		sobrenome VARCHAR(20) NOT NULL,
		email VARCHAR(50) NOT NULL,
		login VARCHAR(20) NOT NULL,
		senha VARCHAR(20) NOT NULL,
		setor VARCHAR(10) NOT NULL,
		disciplina VARCHAR(20) NOT NULL,
		gostadepao VARCHAR(3) NOT NULL,
		data_registro TIMESTAMP
	)


Descri��o:

Atividade de cria��o de arquivos PHP que fa�am um CRUD simples, com inser��o (por meio de prepared), exclus�o, atualiza��o e sele��o de dados.
