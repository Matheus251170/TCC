<?php

session_start();
require '../Model/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/estiloFunc.css">
  <link rel="icon" href="images/icon.png" type="image/png" />
  <title>Cadastro de Funcionário</title>

  <body>
  <div>
      <?php
        
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        if(isset($_SESSION['cadastrado'])){
          echo $_SESSION['cadastrado'];
          unset($_SESSION['cadastrado']);
        }
      
      ?>
    <div id="main-container">
      <h1>CADASTRE-SE</h1>
      <form id="register-form" action="cadastrarUsuarioInfo.php" method="POST">
        <div class="half-box spacing">
          <label for="name">Nome Completo</label>
          <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" data-required data-min-length="3" data-max-length="16" required>
        </div>
        <div class="half-box">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF" maxlength="14" data-required>
        </div>

       
        <div class="half-box">
          <label for="celular">Celular</label>
          <input type="text" name="celular_contato" id="celular_contato" placeholder="Digite o número do seu Telefone" maxlength="15">
        </div>
        <div class="half-box spacing">
          <label for="cep">CEP</label>
          <input type="text" name="cep_endereco" id="cep_endereco" placeholder="Digite o seu CEP" maxlength="10">
        </div>
        
        <div class="half-box">
          <label for="numerocasa">N°</label>
          <input type="text" name="numero_casa" id="numero_casa" placeholder="Nº" maxlength="5">
        </div>

    
        <div class="full-box">
          <input id="btn-submit" type="submit" color="#ff0000" value="Registrar-se">
        </div>
      </form>
    </div>
    <p class="error-validation template"></p>
    <script src="js/scripts.js"></script>
  </body>

  </html>
</body>

</html>