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

    //valida as senhas

    if($senhaCliente != $senhaConfirmadaCliente){

        $_SESSION['msg'] = "Senhas diferentes!";
        header("Location: TelaCadastrodeCliente.php");
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

            $_SESSION['msg'] = "Senhas diferentes!";
            header("Location: TelaCadastrodeCliente.php");
        }else{
                
            if($insert_query->execute())
            {
                $_SESSION['cadastrado'] = "<p style = 'color: green; text-align: center;'> Usuário cadastrado!</p>";
                header("Location: TelaCadastrodeCliente.php");
    
            }else{
                $_SESSION['cadastrado'] = "<p style = 'color: red; text-align: center;'> Erro ao cadastrar!</p>";
                header("Location: TelaCadastrodeCliente.php");
            }

            //----------------------------------------------------------------------------------------------------


    
                $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
                $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
                $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

                $sql = "select count(*) as total from usuario where usuario = '$usuario'";
                $result = mysqli_query($conexao, $sql);
                $row = mysqli_fetch_assoc($result);

                if($row['total'] == 1) {
                    $_SESSION['usuario_existe'] = true;
                    header('Location: cadastro.php');
                    exit;
                }

                $sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

                if($conexao->query($sql) === TRUE) {
                    $_SESSION['status_cadastro'] = true;
                }

                $conexao->close();

                header('Location: cadastro.php');
                exit;
        }