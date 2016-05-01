
      <?php
      session_start();
      error_reporting(E_ALL ^ E_NOTICE);
      require_once("conecta.php");
      require_once("../banco-candidatos.php");
      require_once("logica-usuario.php");
      require_once("../mostra-alerta.php");
      
      verificaUsuario();
      $candidatos = listarCandidatos($conecta);
      ?> 

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Inicial - Restrito</title>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <nav id="sidebar-wrapper" class="navbar navbar-fixed-top" style="background: #30364C; color: #9d9d9d;">  
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="index.php" class="navbar-brand">Inicio</a></li>
                  <li><a href="listar-curriculos.php"> Lista de Curriculos </a></li>
                  <li><a href="lista-contato.php"> Lista de Contatos </a></li>
                  <li><a href="../index.php"> Visitar Site </a></li>
              </ul>
      </div>  
    </nav>
          <?php
            mostraAlerta("success");
            mostraAlerta("danger");
          ?>
      <div class="container" style="margin-top: 5%; padding-left: 15%;">
        <h1>Login realizado e Session iniciada</h1>
        <table class="table" style="text-align: center;">
          <thead>
            <tr>
              <td><b>Nome</b></td>
              <td><b>Curso</b></td>
              <td><b>Periodo</b></td>
              <td><b>Horário</b></td>
              <td><b>Curriculo</b></td>
            </tr>
          </thead>
          <tbody>
            <?php foreach($candidatos as $candidato): ?>
              <tr>
                <td> <?= $candidato['nome'] ?> </td>

                <td><?=$candidato['curso']?></td>

                <td><?=$candidato['periodo']?></td>

                <td><?=$candidato['horario']?></td>

                <td><a href="http://localhost/luana/<?=$candidato['curriculo']?>"> <i class="material-icons">get_app</i> <?= $candidato['nome'] ?> </a></td>

              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      <div style="text-align: center;">&copy; Desenvolvido por Raniere de Lima</div>
      </div>
    </body>
</html>
