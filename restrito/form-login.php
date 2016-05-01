<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastre seu Curriculo</title>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
    
    <div class="navbar navbar-inverse navbar-fixed-top"  style="background: #30364C;">
        <div class="container">
            <div class="navbar-header"><a href="../index.php" class="navbar-brand">Cadastre seu Curriculo</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="../sobre.php">Sobre Nós</a></li>
                <li><a  href="../contato.php">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
    </div>
      <?php
      session_start();
      require_once("../mostra-alerta.php");
        mostraAlerta("success");
        mostraAlerta("danger");
      ?>    
      <form enctype="multipart/form-data" action="logar.php" method="post">
      
        <h1>Login</h1>
        
        <fieldset>
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" required>
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" required>
          
        </fieldset>
  
        <button type="submit">Login</button>
      </form>
      
      <div style="text-align: center;">&copy; Desenvolvido por Raniere de Lima</div>
    </body>
</html>