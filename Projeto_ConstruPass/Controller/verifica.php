<?php

require '../Model/conexao.php';

if(isset($_SESSION['id_login']) && !empty($_SESSION['id_login']))
{
    require_once '../Model/user.class.php';
    $u = new user();

    $listLogged = $u -> logged($_SESSION['id_login']);

    $nameUser = $listLogged['nome'];
}
else
{
    header("Location: TelaLogin.php");
}

?>