<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Atualizar</title>
</head>
<body>
	<br><h1 class="text-center">Atualizar</h1>
	<hr>	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form action="atualizarfunc" method="post">
					<label for="id">ID da atualização:</label>
					<input type="text" name="id" class="form-control"><br>

					<label for="nome_pc">Nome do computador:</label>
					<input type="text" name="nome_pc" class="form-control"><br>

					<label for="nome_pc">Quantidade:</label>
					<input type="text" name="quantidade" class="form-control"><br>

					<label for="nome_pc">Preço de Compra:</label>
					<input type="text" name="preco_compra" class="form-control"><br>

					<label for="nome_pc">Preço de Venda:</label>
					<input type="text" name="preco_venda" class="form-control"><br><br>

					<input type="submit" class="btn btn-info">
				</form>
			</div>	
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>