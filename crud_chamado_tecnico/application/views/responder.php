<!DOCTYPE html>
<html>
<head>
	<title>Responder chamado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
    	<h1 class="text-center">Responder chamado</h1>
    	<hr>
    	<table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Assunto</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo "<tr>".
                         "<td>".$tabela[0]->id."</td>".
                         "<td>".$tabela[0]->assunto."</td>".
                         "<td>".$tabela[0]->descricao_chamado."</td>";
                ?>
            </tbody>
        </table>
        <h3 class="text-center">Responder:</h2>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php echo "<form action='/chamado_tecnico/mostrar/atualizar/".$tabela[0]->id."' method='post'>" ?>
                    <div class="form-group">
                        <textarea name="resposta_chamado" class="form-control" rows="5" placeholder="Resposta do chamado"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary d-flex justify-content-center btn-block" value="Responder">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>