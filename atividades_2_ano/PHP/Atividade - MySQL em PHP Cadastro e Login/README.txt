Configura��o MySQL pr�via necess�ria para funcionamento:

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

Descri��o:

Atividade de cria��o de um sistema de cadastro de usu�rio, com senha encriptada em MD5, e de login.