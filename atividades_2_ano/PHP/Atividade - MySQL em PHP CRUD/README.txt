Configuração MySQL prévia necessária para funcionamento:

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


Descrição:

Atividade de criação de arquivos PHP que façam um CRUD simples, com inserção (por meio de prepared), exclusão, atualização e seleção de dados.
