<?php

    session_start();
    require '../Model/conexao.php';

    $nome_func = mysql_real_escape_string($conexao, trim($_POST['nomeusuario']));
    $cpf_func = mysql_real_escape_string($conexao, trim($_POST['cpfusuario']));
    $uf_func = mysql_real_escape_string($conexao, trim($_POST['uf']));
    $rg_func = mysql_real_escape_string($conexao, trim($_POST['rgcliente']));
    $escolaridade_func = mysql_real_escape_string($conexao, trim($_POST['escolaridade']));
    $profissao_func = mysql_real_escape_string($conexao, trim($_POST['profissaousuario']));
    $telefone_func = mysql_real_escape_string($conexao, trim($_POST['telefoneusuario']));
    $celular_func = mysql_real_escape_string($conexao, trim($_POST['celularusuario']));
    $cep_func = mysql_real_escape_string($conexao, trim($_POST['cepusuario']));
    $email_func = mysql_real_escape_string($conexao, trim($_POST['emailusuario']));
    $numerocasa_func = mysql_real_escape_string($conexao, trim($_POST['numerocasausuario']));
    $senha_func = mysql_real_escape_string($conexao, trim($_POST['senhausuario']));
    $senhaconfirmada_func = mysql_real_escape_string($conexao, trim(md5($_POST['senhaconfirmadausuario'])));


    $sql = "SELECT COUNT (*) AS TOTAL FROM tb_funcionario WHERE cpf_funcionario = '$cpf_func'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);


    if($row['TOTAL'] == 1)
    {
        $_SESSION['usuario_existe'] = true;
        header('Location: TelaCadastrodeUsuario.php');
        exit;
    }

    $sql = "INSERT INTO tb_funcionario (nm_funcionario, cpf_funcionario, rg_funcionario, formacao_funcionario, numero_imovel, email_funcionario, senha_funcionario) 
            VALUES ($nome_func, $cpf_func, $rg_func, $escolaridade_func, $numerocasa_func, $email_func, $senha_func, NOW())";


    if($conexao -> query($sql) === TRUE)
    {
        $_SESSION['status_cad'] = TRUE;

    }

    $conexao -> close();
    header('Location: TelaCadastrodeUsuario.php');
    exit;
?>