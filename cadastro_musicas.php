<?php
// Função para converter o link do YouTube para o formato embed
function converterLinkYouTube($url) {
    if (strpos($url, 'watch?v=') !== false) {
        $url = str_replace('watch?v=', 'embed/', $url);
    }
    return $url;
}

// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado para cadastrar uma nova música
if (isset($_POST['cadastrar'])) {
    $musica = [
        'nome' => $_POST['nome'],
        'autor' => $_POST['autor'],
        'video' => converterLinkYouTube($_POST['video'])
    ];

    // Inicializa a lista de músicas, se necessário
    if (!isset($_SESSION['musicas'])) {
        $_SESSION['musicas'] = [];
    }
    

    // Limita o cadastro a 3 músicas
    if (count($_SESSION['musicas']) < 3) {
        $_SESSION['musicas'][] = $musica;
    } else {
        echo "<script>alert('Limite de 3 músicas cadastradas atingido.');</script>";
    }
}

// Verifica se foi enviada uma requisição para excluir uma música
if (isset($_POST['excluir'])) {
    $indice = $_POST['indice']; // Índice da música a ser excluída
    if (isset($_SESSION['musicas'][$indice])) {
        unset($_SESSION['musicas'][$indice]); // Remove a música da sessão
        // Reorganiza os índices do array
        $_SESSION['musicas'] = array_values($_SESSION['musicas']);
    }
}

// Redireciona de volta para o formulário
header("Location: index.php");
exit();
