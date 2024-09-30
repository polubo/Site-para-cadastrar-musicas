<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Músicas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Cadastro de Músicas</h1>

    <form method="POST" action="cadastro_musicas.php">
        <label for="nome">Nome da música:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>

        <label for="video">Link do vídeo (YouTube):</label>
        <input type="text" id="video" name="video" required>

        <input type="submit" name="cadastrar" value="Cadastrar Música">
    </form>

    <hr>

    <h2>Músicas Cadastradas</h2>
    <div id="musicas-cadastradas">
        <?php
        if (isset($_SESSION['musicas']) && count($_SESSION['musicas']) > 0) {
            foreach ($_SESSION['musicas'] as $index => $musica) {
                echo "<div class='video-container'>";
                echo "<h3>" . htmlspecialchars($musica['nome']) . "</h3>";
                echo "<p><strong>Autor:</strong> " . htmlspecialchars($musica['autor']) . "</p>";
                echo "<iframe src='" . htmlspecialchars($musica['video']) . "' frameborder='0' allowfullscreen></iframe>";
                echo "<form method='POST' action='cadastro_musicas.php'>";
                echo "<input type='hidden' name='indice' value='" . $index . "'>";
                echo "<input type='submit' name='excluir' value='Excluir Música'>";
                echo "</form>";
                echo "</div><hr>";
            }
        } else {
            echo "<p>Nenhuma música cadastrada ainda.</p>";
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 Cadastro de Músicas.</p>
    </footer>
</body>
</html>