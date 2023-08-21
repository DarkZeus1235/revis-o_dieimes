<?php
include('conexao.php');

if(isset($_POST['username']) || isset($_POST['senha'])) {
  $login = $_POST['username'];
  $senha = $_POST['senha'];

 // Usando prepared statements para evitar SQL Injection
 $stmt = $mysqli->prepare("SELECT * FROM cadastro WHERE username = ? LIMIT 1");
 $stmt->bind_param("s", $login);
 $stmt->execute();
 $result = $stmt->get_result();
 $usuario = $result->fetch_assoc();

 
 // Verificar se o usuário existe
  if (!$usuario) {
     echo "<script>alert('login ou senha incorreto!!');</script>";
     header("Location: login.php");
     exit();
 }

 

 // Verificar a senha
 if (password_verify($senha, $usuario['senha'])) {
     $_SESSION['login_nome'] = $usuario['id_login'];
     //var_dump( $usuario);
     header("Location: consultar.php");
    exit();
 } else {
     echo "Usuário não autenticado";
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
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" value="Entrar">
      </form>
    </div>
  </div>
</body>
</html>