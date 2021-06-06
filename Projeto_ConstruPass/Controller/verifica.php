<?php

    session_start();
    require '../Model/conexao.php';

    if(isset($_SESSION['id_cliente']) && !empty($_SESSION['id_cliente']))
    {
        require_once '../Model/user.class.php';
        $u = new user();

        $listLogged = $u -> logged($_SESSION['id_cliente']);

        $nameUser = $listLogged['nome_cliente'];
    }
    else
    {
        header("Location: login.php");
    }

?>