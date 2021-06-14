<?php

    session_start();
    require '../Model/conexao.php';

//cadastro funcionario
                $nome_funcionario = filter_input(INPUT_POST, 'nome_funcionario', FILTER_SANITIZE_EMAIL);
                $cpf_funcionario = filter_input(INPUT_POST, 'cpf_funcionario', FILTER_SANITIZE_STRING);
                $rg_funcionario = filter_input(INPUT_POST, 'rg_funcionario', FILTER_SANITIZE_STRING);
                $nome_profissao = filter_input(INPUT_POST, 'nome_profissao', FILTER_SANITIZE_STRING);
                $telefone_contato = filter_input(INPUT_POST, 'telefone_contato', FILTER_SANITIZE_STRING);
                $celular_contato = filter_input(INPUT_POST, 'celular_contato', FILTER_SANITIZE_STRING);
                $cep_endereco = filter_input(INPUT_POST, 'cep_endereco', FILTER_SANITIZE_STRING);
                $email_funcionario = filter_input(INPUT_POST, 'email_funcionario', FILTER_SANITIZE_STRING);
                $complemento_endereco = filter_input(INPUT_POST, 'complemento_endereco', FILTER_SANITIZE_STRING);
                $numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING);
                $senhaconfirmadausuario = filter_input(INPUT_POST, 'senhaconfirmadausuario', FILTER_SANITIZE_STRING);
                $senha_user = filter_input(INPUT_POST, 'senha_user', FILTER_SANITIZE_STRING);
                $escolaridade = filter_input(INPUT_POST, 'escolaridade', FILTER_SANITIZE_STRING);


                $sql = "INSERT INTO tb_funcionario(nome_funcionario, cpf_funcionario, rg_funcionario, nome_profissao, telefone_contato, celular_contato, cep_endereco, email_funcionario, complemento_endereco, numero_casa, senha_user, escolaridade) VALUES (:nome_funcionario, :cpf_funcionario, :rg_funcionario, :nome_profissao, :telefone_contato, :celular_contato, :cep_endereco, :email_funcionario, :complemento_endereco, :numero_casa, :senha_user, :escolaridade)";

                $insert_query = $pdo->prepare($sql);
                $insert_query->bindParam(':nome_funcionario', $nome_funcionario);
                $insert_query->bindParam(':cpf_funcionario', $cpf_funcionario);
                $insert_query->bindParam(':senha_user', md5($senha_user));
                $insert_query->bindParam(':rg_funcionario', $rg_funcionario);
                $insert_query->bindParam(':nome_profissao', $nome_profissao);
                $insert_query->bindParam(':telefone_contato', $telefone_contato);
                $insert_query->bindParam(':celular_contato', $celular_contato);
                $insert_query->bindParam(':cep_endereco', $cep_endereco);
                $insert_query->bindParam(':email_funcionario', $email_funcionario);
                $insert_query->bindParam(':complemento_endereco', $complemento_endereco);
                $insert_query->bindParam(':numero_casa', $numero_casa);
                $insert_query->bindParam(':escolaridade', $escolaridade);

                if($senha_user != $senhaconfirmadausuario){

                    $_SESSION['msg'] = "<p style = 'color: red; text-align: center;'>Senhas diferentes!</p>!";
                    header("Location: TelaCadastrodeFuncionario.php");
                }else{
                        
                        if($insert_query->execute())
                        {
                            $_SESSION['cadastrado'] = "<p style = 'color: green; text-align: center;'> Usuário cadastrado!</p>";
                            header("Location: TelaCadastrodeFuncionario.php");
                
                        }else{
                            $_SESSION['cadastrado'] = "<p style = 'color: red; text-align: center;'> Erro ao cadastrar!</p>";
                            header("Location: TelaCadastrodeFuncionario.php");
                        }
                    }