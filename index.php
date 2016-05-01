    <?php
        session_start();
        require_once("mostra-alerta.php");
        mostraAlerta("success");
        mostraAlerta("danger");
    ?>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastro Curriculo </title>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
    
    <div class="navbar navbar-inverse navbar-fixed-top"  style="background: #30364C;">
        <div class="container">
            <div class="navbar-header"><a href="index.php" class="navbar-brand">Cadastre seu Curriculo</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a  href="contato.php">Fale Conosco</a></li>
                <?php if(isset($_SESSION["usuarioLogado"]))
                echo '<li><a href="restrito/index.php">Pagina Restrita</a></li>'; ?>
            </ul>
        </div>
    </div>
    </div>

    <div class="container">
        <form enctype="multipart/form-data" action="cadastro.php" method="post">
      
        <h1>Cadastre-se</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Informações Basicas</legend>
          <label for="name">Nome:</label>
          <input type="text" id="name" name="nome" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" required>
            
          <label for="telefone">Telefone 1:</label>
          <input type="text" id="telefone1" name="telefone1" required>
          
          <label for="telefone">Telefone 2:</label>
          <input type="text" id="telefone2" name="telefone2">
          
          <label for="idade">Idade:</label>
          <input type="number" id="idade" name="idade" required>
        
          <label for="curso">Curso:</label>
          <input type="text" id="curso" name="curso" required>
        
          <label for="periodo">Periodo:</label>
          <select id="periodo" name="periodo">
          
              <option value="1">1º Periodo</option>
              <option value="2">2º Periodo</option>
              <option value="3">3º Periodo</option>
              <option value="4">4º Periodo</option>
              <option value="5">5º Periodo</option>
              <option value="6">6º Periodo</option>
              <option value="7">7º Periodo</option>
              <option value="8">8º Periodo</option>
              <option value="9">9º Periodo</option>
              <option value="10">10º Periodo</option>
            
          </select>
        
        <label for="horario">Horário para Entrevista:</label>
        <select id="horario" name="horario">
            
            <option value="manha">Manhã: 07:00 às 08:00</option>
            <option value="noite">Noite: 19:00 às 20:00</option>
            
        </select>
        </fieldset>
        <br>
        <fieldset>
          <legend><span class="number">2</span>Cadastro Curriculo</legend>
          
          <label for="arquivo">Curriculo</label>
          <input type="file" id="arquivo" name="curriculo"> 
          
          <label for="infor">Informações Adicionais:</label>
          <textarea id="infor" name="informacoes"></textarea>
        
        </fieldset>
  
        <button type="submit">Cadastre</button>
      </form>
      
</div>      

      <div style="text-align: center;">&copy; Desenvolvido por Raniere de Lima</div>

    </body>
</html>