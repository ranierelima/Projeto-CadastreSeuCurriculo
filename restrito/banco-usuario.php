<?php

function buscaUsuario($conecta, $email, $senha){
	$email = mysqli_real_escape_string ($conecta, $email);
	$senha = md5($senha);
	$query = "select * from usuarios where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conecta, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}