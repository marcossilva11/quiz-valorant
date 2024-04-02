<?php
session_start();

include_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $corrects = 0;

    $respostas_corretas = array(
        'answer1' => 'c',
        'answer2' => 'a',
        'answer3' => 'b',
        'answer4' => 'a',
        'answer5' => 'c',
        'answer6' => 'b',
        'answer7' => 'b',
        'answer8' => 'b',
        'answer9' => 'd',
        'answer10' => 'a'
    );

    $respostas_usuario = array(); // Inicializa um array para armazenar as respostas do usuário

    foreach ($respostas_corretas as $pergunta => $resposta_correta) {
        if (isset($_POST[$pergunta])) {
            $respostas_usuario[$pergunta] = $_POST[$pergunta]; // Armazena a resposta do usuário na sessão
            if ($_POST[$pergunta] == $resposta_correta) {
                $corrects++;
            }
        }
    }

    $nota = $corrects;

    if (isset($_SESSION['idUsuario']))
    {
        $idUsuario = $_SESSION['idUsuario'];
        $data = date("Y-m-d");
        $sql = "INSERT INTO prova (idUsuario, data, nota) VALUES ('$idUsuario', '$data', '$nota')";
        if ($conexao->query($sql) === TRUE) {
            $_SESSION['quiz_concluido'] = true;
            $_SESSION['corrects'] = $corrects;
            $_SESSION['nota'] = $nota;
            $_SESSION['respostas_corretas'] = $respostas_corretas;
            $_SESSION['respostas_usuario'] = $respostas_usuario; // Armazena as respostas do usuário na sessão
            header("Location: ../html/resultado.php");
        } else {
            echo "Erro ao registrar a prova: " . $conexao->error;
        }
    }
}
?>