<?php   header('Content-type:text/html; charset=utf-8');
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "locadora";

		$conn = new mysqli($servername, $username, $password);

		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully<br>";
		echo "Creating database...<br>";

		$sql = "CREATE DATABASE locadora CHARACTER SET = 'utf8' COLLATE = 'utf8_bin';";
		if ($conn->query($sql) === TRUE) {
		    echo "Database created successfully<br>";
		} else {
		    echo "Error creating database: " . $conn->error . "<br>";
		}
		$conn->close();
		echo "Connecting to database...<br>";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error . "<br>");
		} else {
			echo "Connected successfully<br>";
		}
		echo "Creating tables...<br>";
		$sql = "CREATE TABLE cadastra_veiculos (
		placa VARCHAR(8) PRIMARY KEY,
		modelo VARCHAR(30) NOT NULL,
		cor VARCHAR(20) NOT NULL,
		marca VARCHAR(50) NOT NULL,
		ano_fabricacao INT(4) NOT NULL,
		acessorios VARCHAR(50) NOT NULL
		) CHARACTER SET = 'utf8' COLLATE = 'utf8_bin';";
		if ($conn->query($sql) === TRUE) {
    		echo "Table cadastra_veiculos created successfully<br>";
		} else {
    		echo "Error creating table: " . $conn->error . "<br>";
		}
		$sql = "CREATE TABLE cadastra_clientes (
		cpf CHAR(14) PRIMARY KEY,
		nome VARCHAR(128) NOT NULL,
		genero CHAR(1) NOT NULL,
		endereco VARCHAR(128) NOT NULL,
		cidade VARCHAR(50) NOT NULL,
		estado VARCHAR(50) NOT NULL,
		telefone INT(10) NOT NULL,
		email VARCHAR(128) NOT NULL
		) CHARACTER SET = 'utf8' COLLATE = 'utf8_bin';";
		if ($conn->query($sql) === TRUE) {
    		echo "Table cadastra_clientes created successfully<br>";
		} else {
    		echo "Error creating table: " . $conn->error . "<br>";
		}
		echo "Creating new records...";
		$sql = "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IXM-1975', 'HB20S', 'Branco', 'Hyundai', 2016, 'Ar condicionado');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IIP-6678', 'Buggy', 'Azul', 'Walk', 2005, 'S u s p e n s ã o');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IXO-0993', 'Picape', 'Dourado', 'Miura', 1993, 'Porta malas grandão');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IUP-9738', 'Buggy', 'Azul', 'BRM', 2005, 'Bugs extras');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IMS-8652', 'Stealth', 'Azul', 'Dodge', 1992, 'Ferrugem enferrujada');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IZM-9988', 'Coup', 'Dourado', 'Hyundai', 1997, 'É da Hyundai');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IES-6002', 'Hummer', 'Azul', 'AM Gen', 1998, 'Ele murmura');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IOQ-1856', 'BR-800', 'Branco', 'Gurgel', 1988, 'Ele se engasga');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('JDL-8362', 'ML-230', 'Prata', 'Mercedes', 1998, 'Bonito, é Mercedes');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IEI-1557', 'H1 1.8', 'Preto', 'Lobini', 2005, 'Me lembra lagosta');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IBK-4587', 'H1 1.8', 'Amarelo', 'Lobini', 2005, 'Lagosta amarela');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IVL-2532', 'GranCabrio', 'Bege', 'Maserati', 2010, 'É miserável');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IMS-8692', 'Stealth', 'Azul', 'Dodge', 1992, 'Ferrugem enferrujada');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IZM-9998', 'Coup', 'Dourado', 'Hyundai', 1997, 'É da Hyundai');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IES-6092', 'Hummer', 'Azul', 'AM Gen', 1998, 'Ele murmura');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IOQ-1896', 'BR-800', 'Branco', 'Gurgel', 1988, 'Ele se engasga');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('JDL-8392', 'ML-230', 'Prata', 'Mercedes', 1998, 'Bonito, é Mercedes');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IEI-1597', 'H1 1.8', 'Preto', 'Lobini', 2005, 'Me lembra lagosta');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IBK-4597', 'H1 1.8', 'Amarelo', 'Lobini', 2005, 'Lagosta amarela');";
		$sql .= "INSERT INTO cadastra_veiculos (placa, modelo, cor, marca, ano_fabricacao, acessorios) VALUES ('IVL-2592', 'GranCabrio', 'Bege', 'Maserati', 2010, 'É miserável');";
		$sql .= "INSERT INTO cadastra_clientes (cpf,nome,genero,endereco,cidade,estado,telefone,email) VALUES ('612.464.469-53','Louis Mckenzie','m','9302 Euismod Rd.','São Leopoldo','RS','5133728686','enim.Sed.nulla@DonecestNunc.edu'),('991.954.786-29','Rudyard Nunez','f','Ap #893-3405 Pede Rd.','Mauá','SP','5135683075','tincidunt.orci@ipsumdolor.net'),('710.245.660-93','Colt Myers','f','9140 Lobortis Rd.','Caxias do Sul','RS','5138717355','malesuada.Integer.id@id.com'),('306.496.722-70','Glenna Carney','m','Ap #406-3235 Mattis Road','Londrina','Paraná','5131440969','semper.dui@vehicula.org'),('963.011.717-66','Mollie Acevedo','f','7501 In Rd.','Mauá','SP','5130775031','eget.metus@metusurna.co.uk'),('697.076.986-35','Chadwick Chaney','f','P.O. Box 652, 6450 Malesuada Road','Fortaleza','CE','5130489475','lacus@sedpede.co.uk'),('572.376.275-43','Carol Sellers','f','P.O. Box 564, 7091 Neque. Av.','São Leopoldo','RS','5132894864','Ut.semper@faucibus.ca'),('236.967.069-38','Xantha Maldonado','f','Ap #580-693 Arcu. Rd.','Olinda','Pernambuco','5130885765','consectetuer.adipiscing.elit@malesuadavelvenenatis.edu'),('185.466.735-18','Linus Gallegos','f','133-808 Lectus Street','Guarulhos','São Paulo','5132193112','ornare.lectus@eratsemperrutrum.net'),('206.635.279-43','Macon Lester','m','P.O. Box 231, 8922 Aliquam Av.','Uberaba','MG','5133803853','non@dis.ca');
		INSERT INTO cadastra_clientes (cpf,nome,genero,endereco,cidade,estado,telefone,email) VALUES ('129.272.576-59','Willow Craft','f','840-4726 Nam Av.','Bacabal','MA','5135645881','feugiat.Lorem@molestietortornibh.net'),('127.965.703-50','Upton Sandoval','f','198-7585 Aliquam Avenue','Ipatinga','MG','5135499440','Donec.tincidunt@adipiscingMauris.org'),('687.938.122-89','Jessamine Everett','f','978-3133 Vitae, St.','Divinópolis','MG','5132414363','mauris@libero.ca'),('300.604.387-51','Olivia Ball','f','531 Malesuada Rd.','Maracanaú','Ceará','5138306344','convallis.convallis.dolor@ascelerisquesed.com'),('892.641.316-02','Quintessa Bird','m','538-4214 Aliquam Rd.','São Leopoldo','RS','5134853134','Fusce.fermentum@fringilla.co.uk'),('445.956.546-35','Cade Watts','f','996-2481 Luctus Street','Paranaguá','PR','5139254226','egestas.a@eget.edu'),('321.442.373-75','McKenzie Randall','m','366-4501 Laoreet, Rd.','Osasco','SP','5130326496','enim.Mauris@antedictum.co.uk'),('798.570.795-21','Duncan Bryan','f','P.O. Box 633, 4610 Purus. Rd.','Açailândia','Maranhão','5137550132','mi.Aliquam.gravida@IncondimentumDonec.edu'),('852.501.055-32','Chadwick Hunt','m','684-4423 Taciti Av.','Carapicuíba','SP','5136713962','Proin.ultrices@mollisnon.com'),('472.128.335-94','Reagan Huff','m','Ap #862-5925 In, Road','Niterói','Rio de Janeiro','5139933825','at@ullamcorperDuiscursus.com');";
		mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
		if ($conn->multi_query($sql) === TRUE) {
    	echo "New records created successfully<br>";
		} else {
    	echo "Error: " . $sql . "" . $conn->error;
		}
		$conn->close();
		echo "Finished";
	?>