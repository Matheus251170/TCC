<?php

    session_start();
    require '../Model/conexao.php';

    //recebe os dados do formulario de cliente

    $nomeCliente = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
    $emailCliente = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_EMAIL);
    $rgCliente = filter_input(INPUT_POST, 'rgCliente', FILTER_SANITIZE_STRING);
    $telefoneCliente = filter_input(INPUT_POST, 'telefoneCliente', FILTER_SANITIZE_STRING);
    $celularCliente = filter_input(INPUT_POST, 'celularCliente', FILTER_SANITIZE_STRING);
    $enderecoCliente = filter_input(INPUT_POST, 'enderecoCliente', FILTER_SANITIZE_STRING);
    $cpfCliente = filter_input(INPUT_POST, 'cpfCliente', FILTER_SANITIZE_STRING);
    $cepCliente = filter_input(INPUT_POST, 'cepCliente', FILTER_SANITIZE_STRING);
    $senhaCliente = filter_input(INPUT_POST, 'senhaCliente', FILTER_SANITIZE_STRING);
    $senhaConfirmadaCliente = filter_input(INPUT_POST, 'senhaConfirmadaCliente', FILTER_SANITIZE_STRING);
    $numeroCasaCliente = filter_input(INPUT_POST, 'numeroCasaCliente', FILTER_SANITIZE_STRING);

    $sql = mysqli_query($pdo, "SELECT * FROM tb_cliente WHERE cpf_cliente = $cpfCliente");
    
    if(mysqli_num_rows($sqlCliente) == 1){
    
        $_SESSION['erro'] = "<p style = 'color: red; text-align: center;'>CPF já cadastrado!</p>";
        header("Location: TelaCadastrodeCliente");
    }

    //inserindo dados na tabela cliente

        $sql = "INSERT INTO tb_cliente(nome_cliente, cpf_cliente, senha_user, rg_cliente, numero_imovel, complemento_endereco, cep_endereco, telefone_contato, celular_contato, email_cliente) VALUES (:nomeCliente, :cpfCliente, :senhaCliente, :rgCliente, :numeroCasaCliente, :enderecoCliente, :cepCliente, :telefoneCliente, :celularCliente, :emailCliente)";
    
        $insert_query = $pdo->prepare($sql);
        $insert_query->bindParam(':nomeCliente', $nomeCliente);
        $insert_query->bindParam(':cpfCliente', $cpfCliente);
        $insert_query->bindParam(':senhaCliente', md5($senhaCliente));
        $insert_query->bindParam(':rgCliente', $rgCliente);
        $insert_query->bindParam(':numeroCasaCliente', $numeroCasaCliente);
        $insert_query->bindParam(':enderecoCliente', $enderecoCliente);
        $insert_query->bindParam(':cepCliente', $cepCliente);
        $insert_query->bindParam(':telefoneCliente', $telefoneCliente);
        $insert_query->bindParam(':celularCliente', $celularCliente);
        $insert_query->bindParam(':emailCliente', $emailCliente);  
  
        if($senhaCliente != $senhaConfirmadaCliente){

            $_SESSION['msg'] = "<p style = 'color: red; text-align: center;'>Senhas diferentes!</p>";
            header("Location: TelaCadastrodeCliente.php");
        }
        else{
                
            if($insert_query->execute())
            {
                $_SESSION['cadastrado'] = "<p style = 'color: green; text-align: center;'> Usuário cadastrado!</p>";
                header("Location: TelaCadastrodeCliente.php");
    
            }else{
                $_SESSION['cadastrado'] = "<p style = 'color: red; text-align: center;'> Erro ao cadastrar!</p>";
                header("Location: TelaCadastrodeCliente.php");
            }
        }