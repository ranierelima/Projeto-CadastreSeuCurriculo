<?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
?>
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
                <?php
                if(isset($_SESSION["usuarioLogado"]))
                echo '<li><a href="restrito/index.php">Pagina Restrita</a></li>'; ?>
            </ul>
        </div>
    </div>
    </div>

<?php
require_once("mostra-alerta.php");
        mostraAlerta("success");
        mostraAlerta("danger");

?>

    <div class="container" style="background: #5BA4CF; margin-top: 10%;">