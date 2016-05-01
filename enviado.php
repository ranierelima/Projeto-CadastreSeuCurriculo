<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Realizado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <style type="text/css" >
        body {
          background: -webkit-gradient(linear, left top, left bottom, from(#026AA7), to(#055A8C));
          background: -moz-linear-gradient(top, #026AA7, #055A8C);
          filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#026AA7', EndColorStr='#055A8C');           
        }
    </style>

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
            </ul>
        </div>
    </div>
    </div>
    <?php
session_start();
require_once("mostra-alerta.php");
        mostraAlerta("success");
        mostraAlerta("danger");

?> 
    <img src="legal.png" width="200" height="200" style="
    position: absolute;
    top: 10%;
    left:45%;
">
    <div class="container alert alert-info" style="text-align:center; margin-top:20%; ">
    <h1> Curriculo cadastrado com sucesso</h1> </br> 
    <h1> Entraremos em contato com você para confirmar seus dados.</h1>    
    </div>
</body>
</html>