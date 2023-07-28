<?php
        include("conexao.php");

        $consultar_banco = "SELECT * FROM cadastro";

        $retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
        $quantidade_cadastros = $retorno_consulta->num_rows;
    ?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Lista de Logins</title>
    </head>

    <body>
  </div>
        <div class="container">
            <h1>Lista de Logins</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Usuário</th>
                    <th>Funcionalidades:</th>
                    <th>Funcionalidades:</th>
                </tr>
                <tr>
                    <?php
                        while($logins = $retorno_consulta -> fetch_assoc()){
                       ?>
                       <tr>
                        <td><?php echo $logins['id_cadastro'];?></td>
                        <td><?php echo $logins['nome'];?> </td>
                        <td><?php echo $logins['email'];?> </td>
                        <td><?php echo $logins['senha'];?> </td>
                        <td><?php echo $logins['username'];?></td>  
                        <td><a class="btn btn-danger" href="deletar.php?codigo_cadastro=<?php echo $logins['id_cadastro'];?>">Deletar</a></td>
                        <td><a class="btn btn-primary" href="alterar.php">Alterar</a>
                    </tr>
                    <?php
                    }


                    ?>
                </tr>
            </table>
            <a class="btn btn-warning" href="cadastro.php">Voltar para Cadastro</a>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>