<?php

header("Content-type: text/html; charset=utf8;");

require_once "classes/Usuarios.php";

$usuario = new Usuarios();

if(isset($_POST["entrar"])){
    $usuario->inserir();
}

?>