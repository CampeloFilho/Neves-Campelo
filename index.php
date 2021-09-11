<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home - CENC </title>
      
    </head>

    <body>
      <nav>
        <div class="nav-wrapper blue darken-4">
          <img class="circle responsive-img " width="60px" src="img/Logo.png">
          <a href="#" class="brand-logo center">Centro Educacional Neves Campelo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html"><i class="material-icons">search</i></a></li>
            <!--<li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
            <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>-->
            <li><a href="Cadastro.php"><i class="material-icons">account_circle</i></a></li>
          </ul>
        </div>
      </nav>
      


      <div class="parallax-container">
        <div class="parallax"><img src="img/fundo.png"></div>
      </div>

  
      <footer class="page-footer blue darken-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Centro Educacional Neves Campelo</h5>
              <p class="grey-text text-lighten-4">Rua Capitão João Ferreira Lima 600</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Contatos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Whatsapp: </a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Telefone: </a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/_cenc/">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Centro-Educacional-Neves-Campelo-306034419423345">Facebook</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            © 2021 Direitos reservados: Centro Educacional Neves Campelo
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script>
        $(document).ready(function(){
          $('.parallax').parallax();
        });
      </script>
    </body>
  </html>