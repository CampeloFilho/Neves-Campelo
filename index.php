<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Meta para indicar o site para usar caracteres especiais-->
      <meta charset="UTF-8">
      <title>Home - CENC </title>
      
    </head>

    <body>
      <!--Começo do "Cabeçalho"-->
      <nav>
        <div class="nav-wrapper blue darken-4">
          <!--Imagem da Logo-->
          <img class="circle responsive-img " width="60px" src="img/Logo.png">
          <!--Titulo do Site"-->
          <a href="#" class="brand-logo center">Centro Educacional Neves Campelo</a>
          <ul class="right hide-on-med-and-down">
            <!--Icones de cadastro e pesquisa-->
            <li><a href="sass.html"><i class="material-icons">search</i></a></li>
            <li><a href="Cadastro.php"><i class="material-icons">account_circle</i></a></li>
          </ul>
        </div>
      </nav>
      <!--Fim do "Cabeçalho"-->

      <!--imagem que segue a página-->
      <div class="parallax-container">
        <div class="parallax"><img src="img/fundo.png"></div>
      </div>
        
    <!--Começo do Rodapé-->
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
      <!--Fim do Rodapé-->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script>
        //Lógica doz
        $(document).ready(function(){
          $('.parallax').parallax();
        });
      </script>
  </body>
</html>