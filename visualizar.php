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

// Consultar dados da tabela duplicatas
$sql = "SELECT * FROM duplicatas ORDER BY nome";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Visualizar Duplicatas</title>
</head>
<body>
    <div class="container">
        <h1>Visualização de Duplicatas</h1>
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Nome</th>
                    <th>Vencimento</th>
                    <th>Valor</th>
                    <th>Banco</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['numero']; ?></td>
                            <td><?php echo $row['nome']; ?></td>
                            <td><?php echo $row['vencimento']; ?></td>
                            <td><?php echo number_format($row['valor'], 2, ',', '.'); ?></td>
                            <td><?php echo $row['banco']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Nenhuma duplicata cadastrada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <br>
        <a href="index.php" class="btn-voltar">Voltar ao Cadastro</a> <!-- Botão estilizado -->
    </div>
</body>
</html>

<?php
$conn->close();
?>
