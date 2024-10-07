<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloguito</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Bloguito</h1>

    <!-- Formulário para enviar uma nova mensagem -->
    <div class="post-form">
        <form action="save_post.php" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

            <button type="submit">Postar Mensagem</button>
        </form>
    </div>

    <h2>Mensagens:</h2>

    <!-- Exibir mensagens do arquivo .txt -->
    <?php
    $arquivo = 'posts.txt';

    if (file_exists($arquivo)) {
        $mensagens = file($arquivo);

        foreach ($mensagens as $mensagem) {
            list($nome, $data, $texto) = explode('|', $mensagem);

            echo '<div class="post">';
            echo '<h3>' . htmlspecialchars($nome) . '</h3>';
            echo '<time>' . htmlspecialchars($data) . '</time>';
            echo '<p>' . nl2br(htmlspecialchars($texto)) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Nenhuma mensagem postada ainda.</p>';
    }
    ?>

</body>
</html>
