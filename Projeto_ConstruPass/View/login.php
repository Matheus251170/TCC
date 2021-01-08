<?php 

require '../Model/conexao.php';

if(isset($_POST['email']) && !empty($_POST['email']) && (isset($_POST['email']) && !empty($_POST['psw'])))
    
    {
        require '../model/conexao.php';
        require '../model/user.class.php';

        $u = new user();

        $email = addslashes($_POST['email']);
        $psw = addslashes($_POST['psw']);

        if($u -> login($email, $psw) == true)
        {
            if(isset($_SESSION['id_login']))
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
        }
    }

    else

    {
        header("Location: TelaLogin.php");
    }