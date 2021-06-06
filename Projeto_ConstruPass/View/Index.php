<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>ConstruPass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="icon" href="images/icon.png" type="image/png"/>
</head>

<body id="top">

  <div class="bgded overlay" style="background-image:url('images/overlay.jpg');">
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
          <h1><a href="Index.php">ConstruPass</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="index.php"></a></li>
            <li><a href="Index.php">Início</a></li>
            <li><a href="AboutUs.php">Sobre nós</a></li>
            <li><a class="drop" href="#">Registrar-se</a>
              <ul>
                <li><a href="TelaCadastrodeCliente.php">Registro Cliente</a></li>
                <li><a href="TelaCadastrodeFuncionario.php">Registro Funcionário</a>
              </ul>
            </li>
            <li><a href="TelaLogin.php">Login</a></li>
          </ul>
        </nav>
      </header>
    </div>
    <div id="pageintro" class="hoc clear">
      <article>
        <h3 class="heading">ConstruPass</h3>
        <p>Sejam muito bem vindos a ConstruPass, o lugar onde seus sonhos se tornam realidade!
        </p>
        <footer>
          <form class="group" method="post" action="#">
            <fieldset>
              <legend>Sign-Up:</legend>
              <input type="email" value="" placeholder="Digite seu E-mail">
              <button class="fas fa-sign-in-alt" type="submit" title="Enviar"><em>Enviar</em></button>
            </fieldset>
          </form>
        </footer>
      </article>
    </div>
  </div>

  <div class="wrapper row3">
    <main class="hoc container clear">
      <section id="introblocks">
        <div class="sectiontitle">
          <h6 class="heading">Nossas Funcionalidades</h6>
          <p>Nosso site possui diversas funções para cada perfil, como por exemplo:</p>
        </div>
        <ul class="nospace group">
          <li class="one_quarter first">
            <article><i class="fas fa-user"></i></a>
              <h6 class="heading">Cliente</h6>
              <p>O cliente pode ver trabalhos antigos de prestadores de serviços, podendo escolher o que melhor
                se encaixar em seu padrão.</p>
            </article>
          </li>
          <li class="one_quarter">
            <article><i class="fas fa-user-circle"></i></a>
              <h6 class="heading">Funcionário</h6>
              <p>Dentro de nossa plataforma, o funcionário terá a opção de mostrar serviços antigos, possibilitando então que outros usuários
                conheçam melhor seus trabalhos e habilidades.</p>
            </article>
          </li>
          <li class="one_quarter">
            <article><i class="fas fa-lock"></i></a>
              <h6 class="heading">Segurança</h6>
              <p>Nosso site foi minuciosamente Programado e articulado para fornecer segurança da melhor forma possivel.</p>
            </article>
          </li>
          <li class="one_quarter">
            <article><i class="fas fa-wrench"></i></a>
              <h6 class="heading">Ferramentas</h6>
              <p>Antes de fechar qualquer trabalho, o cliente terá a opção de informar a necessidade de alguma ferramenta em sua
                residência, permitindo que o trabalhador contratado saiba das necessidades de material.</p>
            </article>
          </li>
        </ul>
      </section>

      <div class="clear"></div>
    </main>
  </div>

  <div class="wrapper row2">
    <section id="references" class="hoc container clear">
      <div class="sectiontitle">
        <h6 class="heading">Para quem esse site é destinado?</h6>
        <p> Nosso site foi desenvolvido com o intuito de facilitar a aproximação de profissionais na área de construção e clientes em potencial.
        </p>
      </div>
      <ul class="nospace group ref-img">
        <li class="one_third"><img src="images/7.jpg" alt=""></a></li>
        <li class="one_third"><img src="images/20.jpg" alt=""></a></li>
        <li class="one_third"><img src="images/9.jpg" alt=""></a></li>
      </ul>
    </section>
  </div>
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear">
      <div class="group btmspace-80">
        <div class="one_third first">
          <h6 class="heading">Siga-nos em nossas redes sociais!</h6>
          <p>Dessa forma você fica por dentro de novidades na plataforma.</p>
          <p class="btmspace-30">Estaremos sempre atualizando vocês por lá!</p>
          <ul class="faico clear">
            <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
            <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
          </ul>
        </div>
        <div class="one_third">
          <h6 class="heading">Está com dúvida?</h6>
          <p class="nospace btmspace-15">Mande um e-mail para o nosso suporte:</p>
          <form method="post" action="#">
            <fieldset>
              <legend>Newsletter:</legend>
              <input class="btmspace-15" type="text" value="" placeholder="Seu Nome">
              <input class="btmspace-15" type="text" value="" placeholder="Seu Email">
              <button type="submit" value="submit">Enviar</button>
            </fieldset>
          </form>
        </div>

      </div>
      <div id="ctdetails" class="clear">
        <ul class="nospace clear">
          <li class="one_quarter first">
            <div class="block clear"><a href="#"><i class="fab fa-instagram"></i></a> <span><strong>Siga-nos no Instagram</strong>@ConstruPass</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Envie-nos um e-mail</strong>construpass@gmail.com</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Segunda-Sexta Feira</strong> 08.00am - 18.00pm</span></div>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">ConstruPass</a></p>
    </div>
  </div>
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/jquery.mobilemenu.js"></script>
</body>

</html>