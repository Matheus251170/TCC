<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Login</title>
</head>
<body>
<style>

      
        
</style>

<div>
  
  <form class="borda" action="login.php" method="POST">
    <div class="title">
      <h2 style="font-family: 'Montserrat', sans-serif; font-size: 35px;">Log in</h2>
      <h4 style="font-family: 'Montserrat', sans-serif; font-size: 20px; color: grey;">Insira seu Log in e a senha</h4>
      <br>
    </div>

    <div class="contai">
      <input style="border-radius: 6px; width:350px; margin-bottom: auto;" type="text" placeholder="E-mail" name="email" required>
      <input style="border-radius: 6px; width:350px" type="password" placeholder="Senha" name=" " required>
    </div>
    
    <div class="form">
        
      <button class="btm" type="submit">Login</button>
      <span style="font-size: 12px;">Esqueceu sua <a style="font-size: 12px;" href="??">senha</a>?</span>
        <br>
    </div>

    <div class="under" style="background-color:#252222">
        <p style="color: #ffffff;">Ainda não tem conta?</p>
        <span><a style="color: rgb(230, 149, 0);" href="TelaCadastrodeCliente.php">Cadastre-se</a></span>
    </div>
  </form>
</div>


</body>
</html>