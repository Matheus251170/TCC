<?php

    session_start();
    require '../Model/conexao.php';

    if(isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario']))
    {
        require_once '../Model/user.class.php';
        $u = new user();

        $listLogged = $u -> logged($_SESSION['id_usuario']);

        $nameUser = $listLogged['nome'];
    }
    else
    {
        header("Location: login.php");
    }

?>