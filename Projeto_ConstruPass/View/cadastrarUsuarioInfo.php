<?php

    session_start();
    require '../Model/conexao.php';
    //require '../Model/user.class.php';

    //recebe os dados do formulario de usuario

    $fk_id_usuario = $_SESSION['id_usuario'];

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $celular = filter_input(INPUT_POST, 'celular_contato', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep_endereco', FILTER_SANITIZE_STRING);
    $numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING);
    //inserindo dados na tabela tb_info_usuarios

        $sql = "INSERT INTO tb_info_usuarios(fk_id_usuario, nome, celular, cpf, cep, numero_casa) VALUES (:fk_id_usuario, :nome, :celular, :cpf, :cep, :numero_casa)";
        $insert_query = $pdo->prepare($sql);
        $insert_query->bindParam(':fk_id_usuario', $fk_id_usuario);
        $insert_query->bindParam(':nome', $nome);
        $insert_query->bindParam(':celular', $celular);
        $insert_query->bindParam(':cpf', $cpf);
        $insert_query->bindParam(':cep', $cep);
        $insert_query->bindParam(':numero_casa', $numero_casa);

        if($insert_query->execute()){

            header("Location: HomeTrabalhador.php");
        }
        else{
            
            $_SESSION['cadastrado'] = "<div class='alert alert-danger m-5' role='alert'> Erro ao cadastrar!</div>";
            header("Location: TelaCadastrodeFuncionario.php");
        }