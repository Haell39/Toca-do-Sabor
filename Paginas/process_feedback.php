<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['feedback'])) {
        $name = htmlspecialchars($_POST['name']);
        $feedback = htmlspecialchars($_POST['feedback']);

        // Aqui você pode fazer o que quiser com os dados, como salvar em um banco de dados ou enviar um email
        // Para este exemplo, vamos apenas salvar os dados em um arquivo de texto

        $file = 'feedback.txt';
        $current = file_get_contents($file);
        $current .= "Nome: $name\nFeedback: $feedback\n\n";
        file_put_contents($file, $current);

        // Redirecionar de volta para a página inicial com uma mensagem de sucesso
        header('Location: index.php?message=Obrigado pelo seu feedback!');
        exit();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
