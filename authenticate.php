<?php
session_start();

// Defina aqui suas credenciais de usuário
$usuario_correto = "admin"; // Substitua pelo seu usuário
$senha_correta = "1234"; // Substitua pela sua senha

// Receber dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar credenciais
if ($username === $usuario_correto && $password === $senha_correta) {
    // Armazena o nome do usuário na sessão
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Redireciona para a página principal
    exit();
} else {
    echo "Usuário ou senha incorretos. <a href='login.php'>Tente novamente</a>";
}
?>
