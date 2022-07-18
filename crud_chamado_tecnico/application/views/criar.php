<!DOCTYPE html>
<html>
<head>
	<title>Criar chamado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Criar chamado</h1>
		<hr>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form action="criar/cadastrar" method="post">
					<div class="form-group">
						<label for="assunto">Assunto:</label>
						<input type="text" name="assunto" class="form-control" placeholder="Insira o assunto">
					</div>
					<div class="form-group">
						<label>Descrição do chamado:</label>
						<textarea rows="3" name="descricao_chamado" class="form-control" placeholder="Insira a descrição"></textarea>
					</div>
					<input type="submit" class="btn btn-primary d-flex justify-content-center btn-block" value="Criar">
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html>