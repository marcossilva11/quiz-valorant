<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br" style="height: 100vh;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Valorant | Resultado Quiz</title>
    <!-- Fontes -->
    <link href="https://db.onlinewebfonts.com/c/561f38b1f4570de0fb8a39d691ab058c?family=Tungsten-Bold" rel="stylesheet" />
    <!-- font title -->
    <link href="https://db.onlinewebfonts.com/c/7bb508fd7255ec38b6f29cb4cf8668cf?family=DINNextW1G-Regular" rel="stylesheet" />
    <!-- Font text -->
    <link href="https://db.onlinewebfonts.com/c/b621d1ffb46493164fd62fb7a83ab0ff?family=Mark+W05+Medium" rel="stylesheet" />
    <!-- Font nav link-->
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <style>
        h2{
            color: #0f1923;
            text-transform: uppercase;
            font-size: 3rem;
        }

        h3{
            text-transform: uppercase;
            font-weight: 600;
            color: #383e3a;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        ul{
            list-style: none;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo-valorant">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="35" viewBox="0 0 100 100" width="35">
                <path d="M99.25 48.66V10.28c0-.59-.75-.86-1.12-.39l-41.92 52.4a.627.627 0 00.49 1.02h30.29c.82 0 1.59-.37 2.1-1.01l9.57-11.96c.38-.48.59-1.07.59-1.68zM1.17 50.34L32.66 89.7c.51.64 1.28 1.01 2.1 1.01h30.29c.53 0 .82-.61.49-1.02L1.7 9.89c-.37-.46-1.12-.2-1.12.39v38.38c0 .61.21 1.2.59 1.68z" fill="#fff"></path>
            </svg>
        </div>
        <nav>
            <a href="./home.php" target="_self">Home</a>
            <a href="./quiz.php" target="self">Quiz</a>
        </nav>
        <div class="btn-quit">
            <button name="quit"><a href="../php/quit.php">Sair</a></button>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 style="margin-bottom: 10px;">Resultado do Quiz</h1>
            <?php
            // Verificar se o quiz foi concluído
            if (isset($_SESSION['quiz_concluido']) && $_SESSION['quiz_concluido']) {
                $corrects = isset($_SESSION['corrects']) ? $_SESSION['corrects'] : 0;
                $nota = isset($_SESSION['nota']) ? $_SESSION['nota'] : 0;
                $respostas_corretas = isset($_SESSION['respostas_corretas']) ? $_SESSION['respostas_corretas'] : array();
                $respostas_usuario = isset($_SESSION['respostas_usuario']) ? $_SESSION['respostas_usuario'] : array();

                echo "<h2>Você concluiu o quiz!</h2>";
                echo "<p>Você acertou $corrects de 10 perguntas.</p>";
                echo "<p>Sua nota é $nota%.</p>";

                // Mostrar respostas corretas e incorretas
                echo "<h3>Respostas:</h3>";
                echo "<ul>";
                foreach ($respostas_corretas as $pergunta => $resposta_correta) {
                    $numero_pergunta = substr($pergunta, 6); // Extrair o número da pergunta
                    $pergunta_formatada = sprintf("Pergunta %d", $numero_pergunta);
                    if (isset($respostas_usuario[$pergunta]) && $respostas_usuario[$pergunta] == $resposta_correta) {
                        echo "<li><p>$pergunta_formatada: Correta</p></li>";
                    } elseif (isset($respostas_usuario[$pergunta])) {
                        echo "<li><p>$pergunta_formatada: Errada (Resposta Correta: $resposta_correta)</p></li>";
                    } else {
                        echo "<li><p>$pergunta_formatada: Não Respondida (Resposta Correta: $resposta_correta)</p></li>";
                    }
                }
                echo "</ul>";
            } else {
                echo "<p>O quiz não foi concluído.</p>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>Desenvolvido por Marcos - 2024</p>
    </footer>
</body>

</html>
