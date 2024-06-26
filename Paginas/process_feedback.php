<?php
// Detalhes da conexão
$servername = "localhost";
$username = "root";
$password = ""; // Coloque a senha do MySQL se houver
$dbname = "toca_do_sabor";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $feedback = $_POST["feedback"];

    // Prepara e vincula
    $stmt = $conn->prepare("INSERT INTO feedbacks (name, feedback) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $feedback);

    // Executa a consulta
    if ($stmt->execute()) {
        $message = "Feedback enviado com sucesso!";
    } else {
        $message = "Erro ao enviar feedback: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();

    // Redireciona de volta para a página com uma mensagem
    header("Location: index.php?message=" . urlencode($message));
    exit;
}
?>
