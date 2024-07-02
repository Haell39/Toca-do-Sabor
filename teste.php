<?php
// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Obtém os dados do formulário e aplica htmlspecialchars para segurança
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Define o caminho para o arquivo de feedback
    $file = 'feedback.txt';

    // Formata os dados para serem gravados no arquivo
    $data = "Nome: $name\nFeedback: $feedback\n------------------\n";

    // Tenta gravar os dados no arquivo com bloqueio exclusivo
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        $message = 'Feedback enviado com sucesso!'; // Mensagem de sucesso
    } else {
        $message = 'Erro ao enviar o feedback. Tente novamente.'; // Mensagem de erro
    }

    // Redireciona para a página principal com a mensagem de feedback
    header('Location: index.php?message=' . urlencode($message));
    exit; // Encerra o script após o redirecionamento

} else {
    // Se não for um envio de formulário, redireciona para a página principal
    header('Location: index.php');
    exit; 
}
?>
