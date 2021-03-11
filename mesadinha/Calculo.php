<?php

session_start();

$_SESSION["negocio"] = "";
$_SESSION["oo"] = 0;
$_SESSION["ff"] = 0;
$_SESSION["aa"] = 0;
$_SESSION["bb"] = 0;

$_SESSION["negocio"] = $_POST["negocio"];
$_SESSION["ff"] = $_POST["ff"];
$_SESSION["saldo"] = 0;

if($_SESSION["negocio"] == "despesa"){
    $_SESSION["oo"] = $_SESSION["oo"] - $_SESSION["ff"];

}elseif($_SESSION["negocio"] == "receita"){
    $_SESSION["aa"] = $_POST["aa"] + $_SESSION["bb"];
    
}else{
    header("location: Index.html");
}

$_SESSION["saldo"] = $_SESSION["aa"] - $_SESSION["oo"];

?>