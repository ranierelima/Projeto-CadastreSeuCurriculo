<?php

function cadastrarCandidatos(
    $conecta, $nome, $email,$telefone1,$telefone2,$idade,$curso,
    $periodo,$horario,$curriculo, $informacoes){
    return mysqli_query($conecta,"INSERT INTO candidatos (nome, email, telefone1, telefone2, idade, curso, periodo, horario, curriculo, informacoes) VALUES ('{$nome}', '{$email}', '{$telefone1}', '{$telefone2}', '{$idade}', '{$curso}', '{$periodo}', '{$horario}', '{$curriculo}', '{$informacoes}')");
}

function listarCandidatos($conecta){
	$candidatos = array();
	$resultado = mysqli_query($conecta , "SELECT * FROM candidatos");
	while($candidato = mysqli_fetch_assoc($resultado)) {
		array_push($candidatos, $candidato);
	}
	return $candidatos;
}