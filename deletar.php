<?php
include("conexao.php"); // Arquivo php referente ao banco de dados   

if (isset($_GET['codigo_cadastro'])) {
    $id_cadastro = $_GET['codigo_cadastro'];
    $sql_consultar = "SELECT * FROM cadastro WHERE id_cadastro = '$id_cadastro'";
    $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
    $logins = $comando_sql->fetch_assoc();

    if (isset($_POST['btn_deletar'])) {

        $sql_deletar = "DELETE FROM cadastro WHERE id_cadastro = '$id_cadastro'";

        $deu_certo = $mysqli->query($sql_deletar) or die($mysqli->error);

        header("location:consultar.php");
        // var_dump($mysqli);
    }
} else {
    echo "Não tem código de consulta disponível";
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tela de Exclusão de Cadastro</h1>
        <h1>ID do Cadastro:
            <?php echo $logins['id_cadastro'];?>
        </h1>
        <p>Nome Cadastrado:
            <?php echo $logins['nome'];?>
        </p>
        <p>Email Cadastrado:
            <?php echo $logins['email'];?>
        </p>
        <p>Senha:
            <?php echo $logins['senha'];?>
        </p>
        <p>Usuário Cadastrado:
            <?php echo $logins['username']; ?>
        </p>

        <form action="" method="post">
            <input name="btn_deletar" class="btn btn-danger" type="submit" value="DELETAR">
            <a class="btn btn-warning" href="consultar.php">Voltar</a>
        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>