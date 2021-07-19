<?php

 require '../Controller/verifica.php';

  if(isset($_SESSION['id_login']) && !empty($_SESSION['id_login'])):

 ?>


  <!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ConstruPass</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ConstruPass</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Minha carteira</a>
              </li>
            </ul>
            <form class="d-flex">
              <label class="form-control me-2"><?php echo $nameUser;?></label>
              <a href="logout.php" rel="previous" button class="btn btn-outline-success" type="submit">Sair</button></a>
            </form>
          </div>
        </div>
      </nav>
    </body>
  </html>

<?php else: header("Location: TelaLogin.php"); endif; ?>