<?php 

require '../Model/conexao.php';

if(isset($_POST['email']) && !empty($_POST['email']) && (isset($_POST['senha']) && !empty($_POST['senha'])))
    
    {
        require '../Model/conexao.php';
        require '../Model/user.class.php';

        $u = new user();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        /*if($u -> login($email, $senha) == true)
        {
            if(isset($_SESSION['id_cliente']))
            {
                header("Location: home.php");
            }
            else
            {
                header("Location: TelaLogin.php");
            }

        }
        else
        {
            header("Location: TelaLogin.php");
        }*/

    }else{

        header("Location: TelaLogin.php");
    }