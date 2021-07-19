<?php

    session_start();
    require '../Model/conexao.php';

    //recebe os dados do formulario de cliente

    $emailCliente = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_EMAIL);
    $senhaCliente = filter_input(INPUT_POST, 'senhaCliente', FILTER_SANITIZE_STRING);
    $senhaConfirmadaCliente = filter_input(INPUT_POST, 'senhaConfirmadaCliente', FILTER_SANITIZE_STRING);
    $pin = filter_input(INPUT_POST, 'PIN', FILTER_SANITIZE_STRING);
    
    //inserindo dados na tabela cliente

        $sql = "INSERT INTO tb_usuario(email, senha, recupera_senha) VALUES (:emailCliente, :senhaCliente, :pin)";
    
        $insert_query = $pdo->prepare($sql);
        $insert_query->bindParam(':senhaCliente', md5($senhaCliente));
        $insert_query->bindParam(':emailCliente', $emailCliente); 
        $insert_query->bindParam(':pin', $pin);  
  
        if($senhaCliente != $senhaConfirmadaCliente){

            $_SESSION['msg'] = "<p style = 'color: red; text-align: center;'>Senhas diferentes!</p>";
            header("Location: TelaCadastroUsuario.php");
        }
        else{
                
            if($insert_query->execute())
            {
                $_SESSION['cadastrado'] = "<div class='alert alert-primary m-5' role='alert'> Usuário cadastrado!</div>";
                header("Location: TelaLogin.php");
    
            }else{
                $_SESSION['cadastrado'] = "<p style = 'color: red; text-align: center;'>Erro ao cadastrar!</p>";
                header("Location: TelaCadastroUsuario.php");
            }
        }