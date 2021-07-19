<?php

  require '../Controller/verifica.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Carteira</title>
  <link rel="stylesheet" href="./styles/estilo.css">
  <link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
 <link rel="icon" href="images/icon.png" type="image/png"/>
</head>

<body style="background-image:url('images/20.jpg');">
  <div class="bgded overlay" style="background-image:url('images/20.jpg');">
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
          <h1><a href="HomeTrabalhador.php">ConstruPass</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="index.html"></a></li>
            <li><a href="HomeTrabalhador.php">Início</a></li>
            <li><a class="drop" href="#">Usuário</a>
              <ul>
                <li><a href="">Opções</a></li>
                <li><a href="Carteira.html">Carteira</a></li>
                  <li><a href="">Últimos serviços</a>
              </ul>
            </li>
           
          </ul>
        </nav>
      </header>
    </div>
  <div class="wrapper-content content">
    <section class="timeline">
      <ul>

        <li>
          <div class="feed">
            <img src="./images/pessoa.jpg" alt="">

            <div class="user">

              <strong>Seja bem vindo <?php echo $nameUser; ?></strong>
              
              <p>Descrição do trabalhador</p>
            <button>Saber Mais</button>
            </br>
              </div>
        </li>

        <li>
          <div class="feed">
            <img src="./images/money.png" alt="">

 
                <div class="user">
    
                  <strong>Saldo Disponível</strong>
    
                  <p>R$ 0,00</p>
                <button>Retirar</button>
                </br>
                  </div>
               
            <div class="user">
      
            <strong>Saldo à Receber</strong>
    
            <p>R$ 0,00</p>
          <button>Consultar</button>
          </br>
            </div>
         
          </li>

          <li>
          <div class="feed">
            <img src="./images/paypal.png" alt="">

            <div class="user">
              <form method="POST">
            <strong>Forma de recebimento via PayPal</strong>
              
            <input type="text" name="e-mailPaypal" id="paypal" placeholder="Digite o seu endereço PayPal" maxlength="100" size="100">
            <strong>Forma de recebimento via Banco</strong>
            <input type="text" name="banco" id="banco" placeholder="Digite o Banco" maxlength="50" size="40">
            <input type="text" name="agencia" id="agencia" placeholder="Digite Agência" maxlength="4" size="20">
            <input type="text" name="conta" id="conta" placeholder="Digite número da conta" maxlength="12" size="20">
            <label for="uf">Tipo de conta</label>
          <select name="tipoConta">
            <option value="null" selected="selected"></option>
            <option value="Conta Corrente">Conta Corrente</option>
            <option value="Poupança">Conta Poupança</option>
            
          </select>
        </br>
        </div>
        <div class="user" ></br></br></br></br></br></br><button>Salvar</button></div>
              </form>
            
    </li>
      </ul>
    </section>
  </div>
  
</body>


</html>