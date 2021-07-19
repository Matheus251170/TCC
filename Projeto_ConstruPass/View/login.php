<?php 

session_start();
require '../Model/conexao.php';

if(isset($_POST['email']) && !empty($_POST['email']) && (isset($_POST['senha']) && !empty($_POST['senha'])))
    
    {
        require '../Model/conexao.php';
        require '../Model/user.class.php';

        $u = new user();

        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        
        
        if($u -> login($email, $senha) == true)
        {
            if(isset($_SESSION['id_usuario']))
            {
                header("Location: TelaEscolhadeCadastro.php");
            }
            else
            {
                $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Email ou senha incorretos!</div>";
                header("Location: TelaLogin.php");

            }

        }
        else
        {
            $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Email ou senha incorretos!</div>";
            header("Location: TelaLogin.php");
        }

    }else{
        $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Preencha os campos corretamente!</div>";
        header("Location: TelaLogin.php");
    }