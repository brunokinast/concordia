Configuração MySQL prévia necessária para funcionamento:

Username: root
Password: [vazia]
Database: trabalho_final
Tabela:
	cadastrar_usuarios(
		ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
		login Varchar(30),
		senha Varchar(40),
		Primary Key (ID)
		)
	cadastrar_alunos(
		ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
		nome_aluno Varchar(100),
		endereco Varchar(200),
		email Varchar(200),
		telefone Varchar(20),
		Primary Key (ID)
		)

Descrição:

Atividade de criação de um sistema com frontend e backend, onde o usuário pode cadastrar usuários e alunos, fazer login e visualizar o banco de dados.