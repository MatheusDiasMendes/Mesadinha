<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mesadinha</title>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="Saida.css">
</head>
<body>
  	<div class="lista">
  	<ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Categorias.php">Categorias</a></li>
      <li><a href="gerenciarContas.php">Contas</a></li>
      <li><a href="Lançamento.php">Lançamentos</a></li>
  	</ul>
  	</div>
    <br><br>
  	<div class="caixinhamae">
    <div class="caixinha">Receitas
    <div style="color:#34FA70;"><br>R$<?php $_POST["aa"]; ?></div>
    </div>

    <div class="caixinha1">Despesas
    <div style="color: #FF1E42;"><br>R$<?php $_POST["oo"]; ?></div>
    </div>

    <div class="caixinha2">Saldo
    <div style="color:#3475E6;"><br>R$<?php $_POST["saldo"]; ?></div>
  </div>
  </div>

  

</body>
</html>
