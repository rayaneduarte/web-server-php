<?php
// Configurações do banco de dados
$host = 'localhost';
$dbname = 'prog_web_2024_2';
$user = 'root'; // Substitua por seu usuário MySQL
$password = '@Supernatural12'; // Substitua pela sua senha MySQL

try {
    // Criar uma conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //estrategia de tratamento de erro 

    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obter os dados enviados pelo formulário
        $nome = $_POST['nome'] ?? '';
        $dt_nasc = $_POST['dt_nasc'] ?? '';

        // Validar os dados (opcional)
        if (!empty($nome) && !empty($dt_nasc)) {
            // Inserir os dados na tabela usando prepared statement
            $stmt = $pdo->prepare("INSERT INTO clientes (nome, dt_nasc) VALUES (:nome, :dt_nasc)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':dt_nasc', $dt_nasc);

            if ($stmt->execute()) {
                echo "Cliente inserido com sucesso!";
            } else {
                echo "Erro ao inserir cliente.";
            }
        } else {
            echo "Preencha todos os campos.";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Cliente</title>
</head>
<body>
    <h1>Inserir Cliente</h1>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="dt_nasc">Data de Nascimento:</label>
        <input type="date" id="dt_nasc" name="dt_nasc" required>
        <br><br>

        <button type="submit">Inserir</button>
    </form>
</body>
</html>