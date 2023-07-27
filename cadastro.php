<?php
include('conexao.php');

if (isset($_POST['bt_nome'])) {
    /*----------------------------------*/
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $nome = $_POST['bt_nome'];
    $username = $_POST['bt_username'];
    $cpf = $_POST['bt_cpf'];
    $endereco = $_POST['bt_endereco'];
    /*----------------------------------*/
    $mysqli->query("INSERT INTO cadastro (email, senha, nome, username, cpf, endereco ) values('$email', '$senha', '$nome','$username' ,'$cpf', '$endereco')") or
        die($mysqlierrno);

    $senha_nova = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Tela de Cadastro</title>
</head>

<body>
    <div class="signup-container">
        <h2>Cadastro</h2>
        <form action="login.php" method="POST">
            <input type="email" name="bt_email" placeholder="Email" required>
            <input type="password" name="bt_senha" placeholder="Senha" required>
            <input type="text" name="bt_nome" placeholder="Nome Completo" required>
            <input type="text" name="bt_username" placeholder="Nome de Usuário" required>
            <input type="text" name="bt_cpf " placeholder="CPF" required>
            <input type="text" name="bt_endereco" placeholder="Endereço" required>
            <input type="submit" value="Cadastrar">
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>
</body>

</html>