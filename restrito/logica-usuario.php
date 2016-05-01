<?php 

//session_start();

SESSION_START();

function usuarioEstaLogado(){
    return isset($_SESSION["usuarioLogado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
            $_SESSION["danger"] = "<b>Você não tem acesso a essa funcionalidade do sistema.</br> Realize o Login para continuar</b>";
             header("Location: form-login.php");
                die();
    }
}

function usuarioLogado(){
    return $_SESSION["usuarioLogado"];
}


function logaUsuario($email){
    $_SESSION["usuarioLogado"] = $email;
}

function logout(){
    session_destroy();
    //unset($_SESSION["usario_logado"]);
    session_start();
}