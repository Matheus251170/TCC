<?php

session_start();
require '../Model/conexao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estiloEscolha.css">
    <link rel="icon" href="images/icon.png" type="image/png"/>
    <title>Tela de Cadastro de Cliente</title>



<body>
    </div>

    <div id="main-container">
        <h1>CADASTRE-SE COMO CLIENTE:</h1>
        <div class="full-box">
            <a href="TelaCadastroUsuarioInfo.php" style="color: #F07300;"><input id="btn-submit" type="submit" color="#ff0000" value="Registrar-se"></a>
        </div>
    </br>
    </br>
        <h1>CADASTRE-SE COMO FUNCIONÁRIO:</h1>
        <div class="full-box">
            <a href="TelaCadastrodeFuncionario.php" style="color: #F07300;"><input id="btn-submit" type="submit"  color="#ff0000" value="Registrar-se"></a>
        </div>
        </form>
    </div>
    <p class="error-validation template"></p>
    <script src="js/scripts.js"></script>
</body>

</html>