<?php

   session_start();
    require '../Model/conexao.php';

                //cadastro funcionario
                
                $fk_id_usuario = $_SESSION['id_usuario'];

                $nome_funcionario = filter_input(INPUT_POST, 'nome_funcionario', FILTER_SANITIZE_EMAIL);
                $cpf_funcionario = filter_input(INPUT_POST, 'cpf_funcionario', FILTER_SANITIZE_STRING);
                $nome_profissao = filter_input(INPUT_POST, 'nome_profissao', FILTER_SANITIZE_STRING);
                $celular_contato = filter_input(INPUT_POST, 'celular_contato', FILTER_SANITIZE_STRING);
                $cep_endereco = filter_input(INPUT_POST, 'cep_endereco', FILTER_SANITIZE_STRING);
                $numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING);
                $escolaridade = filter_input(INPUT_POST, 'escolaridade', FILTER_SANITIZE_STRING);


                $sql = "INSERT INTO tb_info_usuarios(fk_id_usuario, nome, cpf, celular, cep, numero_casa) VALUES(:fk_id_usuario, :nome_funcionario, :cpf_funcionario, :celular_contato, :cep_endereco, :numero_casa)";

                $insert_query = $pdo->prepare($sql);
                $insert_query->bindParam(':fk_id_usuario', $fk_id_usuario);
                $insert_query->bindParam(':nome_funcionario', $nome_funcionario);
                $insert_query->bindParam(':cpf_funcionario', $cpf_funcionario);
               //  $insert_query->bindParam(':nome_profissao', $nome_profissao);
                $insert_query->bindParam(':celular_contato', $celular_contato);
                $insert_query->bindParam(':cep_endereco', $cep_endereco);
                $insert_query->bindParam(':numero_casa', $numero_casa);
               //  $insert_query->bindParam(':escolaridade', $escolaridade);

                if($insert_query->execute()){

                  header("Location: TelaPerfil.php");
                }
                else{
                   header("location: TelaCadastrodeFuncionario.php");
                }
                    