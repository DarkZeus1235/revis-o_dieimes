<?php
    include('conexao.php');


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
        <form action="login.php" method="POST">
            <input type="email" name="bt_email" placeholder="Email" required>
            <input type="password" name="bt_senha" placeholder="Senha" required>
            <input type="text" name="bt_nome" placeholder="Nome Completo" required>
            <input type="text" name="bt_username" placeholder="Nome de Usuário" required>
            <input type="text" name="bt_endereco" placeholder="Endereço" required>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Redefinir">
        </form>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Digite o ID para alteração</label>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    <input id="consultar" type="submit" value="Consultar">
                </span>
            </div>
        </div>
    </div>
</body>

</html>