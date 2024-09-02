<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];

    $username = 'wesley';
    $password = '2024';

    if (
        $submittedUsername == $username
        && $submittedPassword == $password
    ) {
        session_start();
        $_SESSION['username'] = $submittedUsername;
        header('Location: index.html');
        echo 'Logado com sucesso!';
    } else {
        echo 'Informações incorretas';
    }
} else {
    echo 'Erro: Requisição inválida';
}

?>