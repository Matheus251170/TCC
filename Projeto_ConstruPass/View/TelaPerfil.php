<?php 

    require '../Controller/verifica.php';
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estiloTelaPerfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png" type="image/png" />
    <title>Tela de Perfil</title>
</head>

<body>

    <div>
    <div>
     <div class="text-center">
     
        <?php
          if(isset($_SESSION['erro'])){
            echo $_SESSION['erro'];
            unset($_SESSION['erro']);
          }
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          if(isset($_SESSION['cadastrado'])){
            echo $_SESSION['cadastrado'];
            unset($_SESSION['cadastrado']);
          }
        
        ?>
      </div>
</div>
        <div id="main-container">
            <h1><?php echo $nameUser; ?></h1>
            <img class="displayed" src="./images/pessoa.jpg" alt="">
            <form id="register-form" action="atualizarCad.php" method="POST">
                <div class="half-box spacing">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="nome_funcionario" id="nome_funcionario" placeholder="Digite seu nome completo" data-required data-min-length="3" data-max-length="16" required>
                </div>
                <div class="half-box">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf_funcionario" id="cpf_funcionario" placeholder="Digite o seu CPF" maxlength="14" data-required required>
                </div>
                <div class="half-box spacing">
                    <label for="escolaridade">Selecione a sua escolaridade</label>
                    <select name="escolaridade">
                        <option value="null" selected="selected"></option>
                        <option value="Mediocompleto">Ensino Médio Completo</option>
                        <option value="Medioincompleto">Ensino Médio Incompleto</option>
                        <option value="EnsinoTecnico">Ensino Técnico</option>
                        <option value="Superiorcompleto">Ensino Superior Completo</option>
                        <option value="Superiorincompleto">Ensino Superior Incompleto</option>
                        <option value="Posgraduacao">Pós-Graduação</option>
                        <option value="Mestrado">Mestrado</option>
                        <option value="Doutorado">Doutorado</option>
                    </select>
                </div>
                <div class="half-box" required>
                    <label for="">Profissão</label>
                    <input type="text" name="nome_profissao" id="nome_profissao" placeholder="Digite a sua Profissão">
                </div>
                <div class="half-box spacing">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular_contato" id="celular_contato" placeholder="Digite o número do seu Telefone" maxlength="15" required>
                </div>
                <div class="half-box">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep_endereco" id="cep_endereco" placeholder="Digite o seu CEP" maxlength="10" required>
                </div>
                <div class="half-box spacing">
                    <label for="numerocasa">N°</label>
                    <input type="text" name="numero_casa" id="numero_casa" placeholder="Nº" maxlength="5">
                </div>
                <div class="half-box ">
                    <label margin-right = "55px" for="descricao">Descrição</label>
                    <textarea style="resize: none" name="textarea" rows="3" cols="53" wrap="hard" minlength="1"maxlength="2000"></textarea>
                </div>
                <div class="full-box">
                    <input id="btn-submit" type="submit" color="#ff0000" value="Atualizar registro">
                </div>
            </form>
        </div>
</body>

</html>