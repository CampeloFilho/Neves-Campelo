<!DOCTYPE html>
  <html>
    <head>
      <!-- Importar fonte do ícone do Google-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Informe ao navegador que o site é otimizado para celular-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Informe ao navegador para que o site use caracteres especiais-->
      <meta charset="UTF-8">
      <title>Cadastro</title>
      <style type="text/css">
        body{
          background-color:  #ffff00;
        }
      </style>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper blue darken-4">
                <a href="#" class="brand-logo center">Cadastro</a>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Nome</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="last_name" type="text" class="validate">
                          <label for="last_name">Sobrenome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate">
                          <label for="password">Senha</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" class="validate">
                          <label for="email">E-mail</label>
                        </div>
                    </div>
                </form>
            </div>
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
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
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
      
    </body>
  </html>