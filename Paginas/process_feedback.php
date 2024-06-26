<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Defina o caminho para o arquivo feedback.txt
    $file = 'feedback.txt';

    // Prepare a string a ser gravada no arquivo
    $data = "Nome: $name\nFeedback: $feedback\n------------------\n";

    // Tente abrir o arquivo para adicionar dados
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        $message = 'Feedback enviado com sucesso!';
    } else {
        $message = 'Erro ao enviar o feedback. Tente novamente.';
    }

    // Redirecione de volta à página principal com uma mensagem de feedback
    header('Location: index.php?message=' . urlencode($message));
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>
