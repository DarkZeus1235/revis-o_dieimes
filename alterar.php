<?php
include('conexao.php');

if (isset($_POST['bt_email'])) {


    $id_cadastro_alterar =  $_POST['bt_id_alterar'];
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $nome = $_POST['bt_nome'];
    $username = $_POST['bt_username'];
    $endereco = $_POST['bt_endereco'];

    $sql_alterar = "UPDATE cadastro
        SET email = '$email',
        senha = '$senha',
        nome = '$nome',
        username = '$username',
        endereco = '$endereco'
        WHERE id_cadastro = '$id_cadastro_alterar'";


    $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);

}

if (isset($_POST['bt_id'])) {
    $id_cadastro = $_POST['bt_id'];
    $sql_consultar = "SELECT * FROM cadastro WHERE id_cadastro = '$id_cadastro'";
    $mysqli_consultar = $mysqli->query($sql_consultar) or die($mysqli->error);
    $consultar = $mysqli_consultar->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tela de Cadastro</title>
</head>

<body>
    <div class="signup-container">
        <h2>Alterar Cadastro</h2>
        <form action="" method="POST">
            <label for="">ID</label>
            <input type="text" name="bt_id_alterar" value="<?php 
            if (isset($consultar['id_cadastro'])) {
            echo $consultar['id_cadastro'];
            }
            ?>">
            <label>Email</label>
            <input class="form-control" type="email" name="bt_email" placeholder="Sem valor" value="<?php
            if (isset($consultar['email'])) {
            echo $consultar['email'];
            }
            ?>">
            <label for="">Senha</label>
            <input class="form-control" type="password" name="bt_senha" placeholder="Sem valor" value="<?php
            if (isset($consultar['senha'])) {
            echo $consultar['senha'];
            }
            ?>">
            <label for="">Nome</label>
            <input type="text" name="bt_nome" placeholder="Sem valor" required value="<?php
            if (isset($consultar['nome'])) {
            echo $consultar['nome'];
            }
            ?>">
            <label for="">Usuário</label>
            <input type="text" name="bt_username" placeholder="Sem valor" required value="<?php
            if (isset($consultar['username'])) {
            echo $consultar['username'];
            }
            ?>">
            <label for="">Endereço</label>
            <input type="text" name="bt_endereco" placeholder="Sem valor" required value="<?php
            if (isset($consultar['senha'])) {
            echo $consultar['senha'];
            }
            ?>">
            <input type="submit" value="Cadastrar" onclick="return validateFields()">
            <input type="reset" value="Redefinir">
        </form>
        <form action="" method="POST">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Digite o ID para alteração</label>
            </div>
            <div class="col-auto">
                <input name="bt_id" type="text" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <input class="btn btn-primary" type="submit" value="Consultar">
        </div>
        </form>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>