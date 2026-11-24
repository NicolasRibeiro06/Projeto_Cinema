<?php
/*
 * =============================================
 * ARQUIVO: index.php
 * FUNÇÃO: Menu principal do sistema
 * =============================================
 *
 * Primeira página após o login.
 * valida_sessao.php garante que apenas usuários
 * logados chegam até aqui.
 */
include('valida_sessao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinepédia</title>
    <link rel="shortcut icon" href="img/favicon_pipoca.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="Page-principal">
    <div class="container">

        <!-- Botão de sair alinhado à direita -->
        <div class="topbar">
            <a href="logout.php" class="btn-back">🚪 Sair</a>
        </div>

        <!-- Cabeçalho de boas-vindas -->
        <div class="page-header">
            <h1>🎥 Cinepédia</h1>
            <!--
            $_SESSION['usuario'] contém o nome salvo no login.
            htmlspecialchars() protege contra XSS na exibição.
        -->
            <p>Olá, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong> O que deseja assistir?</p>
        </div>

        <!-- Grade de cards do menu -->
        <div class="menu-grid">

            <div class="menu-card">
                <a href="cadastro_artista.php">

                    <div class="menu-card-icon">🎭</div>
                    <div class="menu-card-title">Gerenciar atores</div>
                    <div class="menu-card-desc">Cadastre e edite os atores</div>
                </a>
            </div>

            <div class="menu-card">
                <a href="cadastro_musica.php">
                    <div class="menu-card-icon">🎬</div>
                    <div class="menu-card-title">Cadastrar Novo filme</div>
                    <div class="menu-card-desc">Adicione filme ao sistema</div>
                </a>
            </div>

            <div class="menu-card">
                <a href="listagem_musicas.php">
                    <div class="menu-card-icon">🎞️</div>
                    <div class="menu-card-title">Filmes</div>
                    <div class="menu-card-desc">Visualize e filtre todas os filmes</div>
                </a>
            </div>

            <div class="cinema-carrossel">

                <div class="cinema-card">
                     <a href="https://youtu.be/M6BSAXBLOE4?si=WEfBq7FR7L3Fvy-1" target="_blank" rel="noopener noreferrer">
                    <img src="img/Pinoquio.jpg" alt="Filme 1">
                </div>

                <div class="cinema-card">
                   <a href="https://youtu.be/3kni6D-HrsI?si=Twtm5dEnsXNeoJjt" target="_blank" rel="noopener noreferrer">
                    <img src="img/Vingadores-Doutordestino.jpg" alt="Filme 2">
                </div>

                <div class="cinema-card">
                    <a href="https://youtu.be/dEbe0rS4Z2A?si=9nQQV-Y9M5rWp1iV" target="_blank" rel="noopener noreferrer">

                        <img src="img/deadpool3.jpg" alt="Filme 3">
                </div>

                <div class="cinema-card">
                    <a href="https://youtu.be/3Zr6YJ02r5g?si=NQ7_Bw-SYNT907kB" target="_blank" rel="noopener noreferrer">
                        <img src="img/Vitoria.jpg" alt="Filme 4">
                    </a>
                </div>
                <div class="cinema-card">
                     <a href="https://youtu.be/v_eHpukGdTM?si=adDJH9WCz-8jHxxa" target="_blank" rel="noopener noreferrer">
                    <img src="img/A odisseia.jpg" alt="Filme 5">
                </div>
                <div class="cinema-card">
                     <a href="https://youtu.be/PlulyWs1kS4?si=_ho2QAJr9x7zBagu" target="_blank" rel="noopener noreferrer">
                    <img src="img/Homem-aranha.jpg" alt="Filme 6">
                </div>

                <div class="cinema-card">
                     <a href="https://youtu.be/FUlEV4tzzQ8?si=cGUUmAIBgQKrlwWA" target="_blank" rel="noopener noreferrer">
                    <img src="img/Os_parças.jpg" alt="Filme 7">
                </div>

                <div class="cinema-card">
                     <a href="https://youtu.be/cv276Wg3e7I?si=GH-jPkGwojLkQZjk" target="_blank" rel="noopener noreferrer">
                    <img src="img/scarface.jpg" alt="Filme 8">
                </div>
                
                <div class="cinema-card">
                     <a href="https://youtu.be/_7R47J9iBdk?si=1-w-j4OYLOe-oB4z" target="_blank" rel="noopener noreferrer">
                    <img src="img/Lucas-neto.jpg" alt="Filme 9">
                </div>

            </div>


        </div>

    </div>

    </div>
</body>

</html>