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

    // Consultar dados da tabela "clientes"
    $stmt = $pdo->query("SELECT * FROM clientes");

    // Mostrar os dados
    echo "<h1>Clientes</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Data de Nascimento</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['dt_nasc']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>