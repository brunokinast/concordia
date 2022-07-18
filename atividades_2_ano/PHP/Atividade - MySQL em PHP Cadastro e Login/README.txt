Configuração MySQL prévia necessária para funcionamento:

Username: root
Password: [vazia]
Database: sistema_cadastro
Tabela:
	usuarios(
		ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
		login Varchar(30),
		senha Varchar(40),
		Primary Key (ID)
		)

Descrição:

Atividade de criação de um sistema de cadastro de usuário, com senha encriptada em MD5, e de login.