<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Listagem produtos</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
	<br><h1 class="text-center">Computadores:</h1><br>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome PC</th>
				<th>Quantidade</th>
				<th>Preço Compra</th>
				<th>Preço Venda</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($lista as $d) {
				echo "<tr>".
					"<td>".$d->id."</td>".
					"<td>".$d->nome_pc."</td>".
					"<td>".$d->quantidade."</td>".
					"<td>".$d->preco_compra."</td>".
					"<td>".$d->preco_venda."</td>".
					"</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>