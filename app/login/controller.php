<?php
//se o usuario nao estiver logado, abrir o formulario de login
//caso logado, mensagem de boas vindas e mostrar o nome de usuario
//iniciar o uso de sessão
session_start();

$titulo = "Video aula com sessao";

if (isset($_POST['usuario']) && $_POST['usuario'] == "admin") {
    $_SESSION['usuario'] = $_POST['usuario'];
} else {

    unset($_SESSION['usuario']);
}

if (isset($_SESSION['usuario'])) {
//usurio logado    
    require_once ("administrativo.php");
} else {
//usurio não está logado
    require_once ("formularioLogin.php");
}

//sair do sistema, esvazia a variável de sessão
if (isset($_GET['ac']) && $_GET['ac'] == "logout") {
    unset($_SESSION['usuario']);
}







