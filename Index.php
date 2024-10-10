<?php
session_start();

// Configurações do banco de dados
$servername = "localhost"; // ou o IP do seu servidor
$username = "root"; // seu usuário do banco de dados
$password = ""; // sua senha do banco de dados
$dbname = "vendas";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inserir duplicatas no banco (apenas um exemplo)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário e insere no banco
    // Aqui deve haver a lógica de inserção dos dados
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Cadastrar Duplicatas</title>
</head>
<body>
    <div class="container">
        <h1>Cadastrar Duplicatas</h1>
        <form action="index.php" method="post">
            <label for="numero">Número</label>
            <input type="number" id="numero" name="numero" required>
            
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="vencimento">Vencimento</label>
            <input type="date" id="vencimento" name="vencimento" required>
            
            <label for="valor">Valor</label>
            <input type="number" id="valor" name="valor" step="0.01" required>
            
            <label for="banco">Banco</label>
            <input type="text" id="banco" name="banco" required>
            
            <input type="submit" value="Cadastrar">
        </form>
        
        <br>
        <a href="visualizar.php" class="btn-voltar">Visualizar Banco</a> <!-- Botão para visualizar -->
        <a href="login.html" class="btn-voltar">Voltar para o Login</a> <!-- Botão para voltar ao login -->
    </div>
</body>
</html>

<?php
$conn->close();
?>
