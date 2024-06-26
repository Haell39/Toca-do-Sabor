<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['feedback'])) {
        $name = htmlspecialchars($_POST['name']);
        $feedback = htmlspecialchars($_POST['feedback']);

        // salvar dados

        $file = 'feedback.txt';
        $current = file_get_contents($file);
        $current .= "Nome: $name\nFeedback: $feedback\n\n";
        file_put_contents($file, $current);

        // Redirecionar de volta para a página inicial
        header('Location: index.php?message=Obrigado pelo seu feedback!');
        exit();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
