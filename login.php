<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
    echo("Preencha seu email");

    }elseif(strlen($_POST['senha']) == 0){
        echo("Preencha sua senha");
    }else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_login'] = $usuario['id_login'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['username'] = $usuario['username'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];


            header("Location: index.php");   

        }else{
            echo "Falha ao logar!Email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
  <title>Página de Login</title>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <h2>Login</h2>
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Nome de Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="submit" value="Entrar">
      </form>
    </div>
  </div>
</body>
</html>