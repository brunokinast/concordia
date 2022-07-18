<!DOCTYPE html>
<html>
<head>
	<title>Deletar chamado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
	<h1 class="text-center">Deletar chamados</h1>
    <hr>
    <div class="d-flex justify-content-center">
        <form action="deletar/remover" method="post">
            <div class="form-group">
                <label>ID do chamado: </label>
                <input type="number" name="id" class="form-control">
            </div>
            <input type="submit" class="btn btn-danger btn-block" value="Deletar">
        </form>
    </div>
	<hr>
	<table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Assunto</th>
                <th>Descrição</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($tabela as $d) {
                echo "<tr>".
                     "<td>".$d->id."</td>".
                     "<td>".$d->assunto."</td>".
                     "<td>".$d->descricao_chamado."</td>";
                if ($d->resposta_chamado != "") {
                    echo "<td><a class='btn btn-success btn-block' role='button' href='/chamado_tecnico/mostrar/respondido/".$d->id."'>Ver resposta</a></td></tr>";
                }else{
                    echo "<td></td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>