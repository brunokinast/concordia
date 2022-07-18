<!DOCTYPE html>
<html>
<head>
	<title>Resposta chamado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
    	<h1 class="text-center">Detalhes da chamada</h1>
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
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Resposta do chamado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($tabela[0]->resposta_chamado != "") {
                        echo "<tr>".
                         "<td>".$tabela[0]->resposta_chamado."</td></tr>";
                    }else{
                        echo "<tr>".
                         "<td><a class='btn btn-danger btn-block' role='button' href='/chamado_tecnico/mostrar/responder/".$tabela[0]->id."'>Responder</a></td></tr>";
                    } 
                ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <a class='btn btn-danger btn-block' role='button' href='../responder/<?php echo $tabela[0]->id ?>'>Atualizar</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>