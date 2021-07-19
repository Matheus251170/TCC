<?php

    session_start();
    require '../Model/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/estiloCliente.css">
  <link rel="icon" href="images/icon.png" type="image/png"/>
  <title>Tela de Cadastro de Cliente</title>

<body>

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
      <h1>CADASTRE-SE</h1>
      <form id="register-form" action="cadastrarClient.php" method="POST">
        <div class="half-box spacing">
          <label for="email">E-mail</label>
          <input type="email" name="emailCliente" id="emailCliente" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate required>
        </div>
        <div class="half-box">
          <label for="text">PIN</label>
          <input type="text" name="PIN" id="pin" placeholder="PIN DE ACESSO" data-min-length="2" required>
        </div>
        <div class="half-box spacing">
          <label for="senha">Senha</label>
          <input type="password" name="senhaCliente" id="senhaCliente" placeholder="Digite sua senha" minlength="10" data-password-validate data-required required>
        </div>
        <div class="half-box">
          <label for="senhaconfirmada">Confirmação de senha</label>
          <input type="password" name="senhaConfirmadaCliente" id="senhaConfirmadaCliente" placeholder="Digite novamente sua senha" minlength="10" data-equal="password" required>
        </div>

        <div>
          <input type="checkbox" name="agreement" id="agreement" required>
          <label for="agreement" id="agreement-label">Eu li e aceito os <a href="Termo.php">termos de uso</a></label>
        </div>
        <div class="full-box">
          <input id="btn-submit" type="submit" color="#ff0000" onClick="mensagem()" value="Registrar-se">
        </div>
      </form>
    </div>
    <p class="error-validation template"></p>
    <script src="js/scripts.js"></script>
  </body>

  </html>
</body>

</html>