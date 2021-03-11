<?php
session_start();
header("Content-type:text/html; charset=utf8");

require_once "InserirCategorias.php";
require_once "listarCategorias.php";

$categorias = new InserirCategorias();
$listaCategorias = $categorias->listarCategorias();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Mesadinha</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="Cad.css">

</head>
<body>
<div class="lista">
    <ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Categorias.php">Categorias</a></li>
      <li><a href="gerenciarContas.php">Contas</a></li>
      <li><a href="Lançamento.php">Lançamentos</a></li>
    </ul>
    <br>
</div>
<div class="txt">
    <div class="qd" >
        <h1 id="titulo" >Cadastro de categoria</h1>
        <form action="" method="post">
            <div >
                <label for="name">Nome</label><br>
                <input type="nome" id="nome" name="nome"  required>
            </div>
            <div><br>
                <button type="button" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-primary">Alterar</button><br><br>
            </div>
        </form>
    </div>


<table class="table table-striped table-dark" id="grocura">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
    </tr>
    </thead>
    <tbody>
    <?php if($listaCategorias) :
        foreach ($listaCategorias as $categoria) : ?>
            <tr>
                <td><?php echo $categoria->ID; ?></td>
                <td><?php echo $categoria->nome; ?></td>
                <td>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5">Nenhuma categoria cadastrada!!!</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</body>
</html>