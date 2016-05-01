<?php

require_once("conecta.php");
require_once("banco-candidatos.php");


$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone1 = $_POST["telefone1"];
$telefone2 = $_POST["telefone2"];
$idade = $_POST["idade"];
$curso = $_POST["curso"];
$periodo = $_POST["periodo"];
$horario = $_POST["horario"];
$informacoes = $_POST["informacoes"];

$nomeArquivo = "uploads/";
$nomeArquivo .= time() .date('Yhis') .$_FILES["curriculo"]["name"];
//$arquivo = "uploads/". basename($_FILES["curriculo"]["name"]);

if(move_uploaded_file($_FILES["curriculo"]["tmp_name"], $nomeArquivo)){
    if(cadastrarCandidatos($conecta, $nome, $email,$telefone1,$telefone2,$idade,
                           $curso,$periodo,$horario,$nomeArquivo, $informacoes)){
    
    header("Location: enviado.php");
    }
    else {
        $msg = mysqli_error($conecta);
        echo $msg;
    }
}
else{
$_FILES["curriculo"]["error"];
}

print_r($_FILES);
    
