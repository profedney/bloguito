<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim($_POST['nome']);
    $mensagem = trim($_POST['mensagem']);

    if (!empty($nome) && !empty($mensagem)) {
        $arquivo = 'posts.txt';
        $data = date('d/m/Y H:i:s');
        $conteudo = $nome . '|' . $data . '|' . $mensagem . "\n";

        // Salva a mensagem no arquivo .txt
        file_put_contents($arquivo, $conteudo, FILE_APPEND);

        // Redireciona para a página principal após o envio
        header('Location: index.php');
        exit;
    }
}
