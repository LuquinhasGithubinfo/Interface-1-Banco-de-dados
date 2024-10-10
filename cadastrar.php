<?php
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

// Receber dados do formulário
$numero = $_POST['numero'];
$nome = $_POST['nome'];
$vencimento = $_POST['vencimento'];
$valor = $_POST['valor'];
$banco = $_POST['banco'];

// Inserir dados na tabela
$sql = "INSERT INTO duplicatas (numero, nome, vencimento, valor, banco) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issds", $numero, $nome, $vencimento, $valor, $banco);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
