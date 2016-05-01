<?php
require_once("conecta.php");
require_once("banco-usuario.php");
require_once("../mostra-alerta.php");

session_start();

//$email = mysqli_real_escape_string ($conecta, $_POST['email']);
//$senha = md5($_POST['senha']);
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = buscaUsuario($conecta, $email, $senha);

if($usuario == null){
	$_SESSION['danger'] = "Login invalido";
	header("Location: form-login.php");
}else{
	$_SESSION['usuarioLogado'] = $email;
	$_SESSION['success'] = "Login correto. E-mail: ". $email;
	header("Location: index.php");
}
