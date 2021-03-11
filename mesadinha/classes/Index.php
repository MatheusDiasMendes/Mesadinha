<?php

header("Content-type: text/html; charset=utf8;");

require_once "Usuarios.php";

$usuario = new Usuarios();

if(isset($_POST["Logar"])){
    $usuario->login();
}

?>