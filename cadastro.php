<?php

require_once("conecta.php");
require_once("banco-candidatos.php");
require_once("limpaCaracteres.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone1 = $_POST["telefone1"];
$telefone2 = $_POST["telefone2"];
$idade = $_POST["idade"];
$curso = $_POST["curso"];
$periodo = $_POST["periodo"];
$horario = $_POST["horario"];
$informacoes = $_POST["informacoes"];

$arquivo = str_replace(" ", "-", clearName($_FILES['curriculo']['name']));

$nomeArquivo = "uploads/";
$nomeArquivo .= time() .date('Yhis') .$arquivo;
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
echo $_FILES["curriculo"]["error"];
}

