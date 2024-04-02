<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {

    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT idUsuario FROM usuarios WHERE usuario = '$usuario' and senha='$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso, armazena o ID do usuário na sessão
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['idUsuario'] = $row['idUsuario'];
        header("Location: ../html/home.php");
        exit();
    } else {
        // Credenciais inválidas, redireciona de volta para a página de login
        header("Location: ../index.php");
        exit();
    }
} else {
    // Redireciona de volta para a página de login se o formulário não foi submetido ou campos estão vazios
    header('Location: ../index.php');
    exit();
}
?>
