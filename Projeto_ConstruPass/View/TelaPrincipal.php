<?php

  require '../Model/conexao.php';

  if(isset($_SESSION['id_login']) && !empty($_SESSION['id_login'])):

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ConstruPass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;  
  }
  body {
   background-image: url('imgs/aaaa.JPEG');
   background-size: cover;
   background-position-y: auto;
  }
  .jumbotron{
    background:#edcfff ; 
  }
  h2 {
    
		font-style: italic;
    color:#e0dcdc;
		font-weight: bold;
		font-size: 17px;
		font-family: arial, sans-serif;
  }
  h1 {
    
		font-style: italic;
    color:#e0dcdc;
		font-weight: bold;
		font-size: 25px;
		font-family: arial, sans-serif;
  }
  .d-flex
  {
    display:flex!important;
    flex-direction: row; 
    justify-content: center;
    align-items: right;
  }
  .form-control
  {
  margin-right:.5rem!important
  }


  </style>
  
</head>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>ConstruPass</h1>
</div>
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">ConstruPass</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Procurar Serviços</a></li>
        <li><a href="#">Minha Carteira</a></li>
      </ul>
      <div class="d-flex">
      <label class="btn-outline-success" style="margin-left: 1200px; padding-top: 10px; color: white;">Marcos Matheus<label>
        <class="btn btn-outline-success" style="margin-left: 250px;">
        <a href="logout.php" type="submit">Sair</a>
      </div>
    </div>
  </div>
</nav>

<body>
    <div class="container">
      <div class="row">
          <div class="col-sm-4">
              <h1 style = "font-family:Comic Sans MS, Comic Sans, cursive;">Para quem é o site?</h1>
              <br>
              <h2 style = "font-family:Comic Sans MS, Comic Sans, cursive;"> Nossa proposta é vincular trabalhadores do ramo da construção civil com pessoas interessadas em reformas.</h2> 
              <table border>
                  <tr><td><img height="330" width="350" src="imgs/hos hos hos.JPG" alt=""></td></tr>
              </table>
              <br>
            </div>
            <div class="col-sm-8">
              <h1 style = "font-family:Comic Sans MS, Comic Sans, cursive;">Seja muito bem vindo a ConstruPass</h1>
              <br>
              <h2 style = "font-family:Comic Sans MS, Comic Sans, cursive;">Uma plataforma para unir prestadores de serviços(na área da construção civil, reparos deciração), com pessoas que demandam serviços(como manutenções, reformas, planejamento de ambientes e afins).  </h2>
              <table border>
                  <tr><td><img height="330" width="700" src="imgs/has has has.JPG" alt=""></td></tr>
              </table>
              <br>
              <br>
          </div>
      </div>
  </div>
</body>
</html>

<?php else: header("Location: TelaLogin.php"); endif; ?>