<?php 
    require './config.php';

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ( $username != '' && $password != '') {
            if ( $username == $config['db']['_username'] && $password == $config['db']['password'] ) {
                session_start();
                $_SESSION['username'] = $username;
                echo 'Logado';
            } else {
                echo 'Informações incorretas';
            }
        } else {
            echo 'Preencha os campos';
        }
    } else {
        echo 'Error: Invalid insection';
    };