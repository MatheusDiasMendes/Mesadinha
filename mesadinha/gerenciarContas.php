<?php

session_start();
header("Content-type:text/html; charset=utf8");

require_once "inserirContas.php";
require_once "classes/listarContas.php";
require_once "classes/Categorias.php";
require_once "inserirContas.php";

$contas = new InserirContas();

$listaContas = $contas->listarContas();

$listarContas = $contas->listarContas();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas - Mesadinha</title>
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
</div><br>
<div class="txt">
    <div class="qd" style=" height: 390px" >
        <h1 id="titulo" >Cadastro de contas</h1>
        <form action="" method="post">
           
                <label for="name">Nome</label><br>
                <input type="name" id="nome" name="nome"  required>

<br>
                <label for="tipo">Tipo</label><br>
                <form action="">
                    <select name="tipo" id="tipo">
                        <option value="despesa">Despesa</option>
                        <option value="receita">Receita</option>
                    </select>

<br>
                <label for="categoria">Categoria</label><br>
                <form action="">
                    <select name="categoria" class="form-control" required>
                        <option value="">Selecionar uma opção</option>

                        <?php foreach ($listarCategorias as $categoria){ ?>

                        <option value="<?php echo $categoria->ID; ?>"><?php echo $categoria->NOME; ?><option>
                            <?php } ?>
                    </select>

                <br>
                <button type="button" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-primary">Alterar</button><br><br>

                </form>

 </div>


    <table class="table table-striped table-dark" id="grocura">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Categoria</th>
    </tr>
    </thead>
    <tbody>
    <?php if($listaContas) :
        foreach ($listaContas as $conta) : ?>
            <tr>
                <td><?php echo $conta->ID; ?></td>
                <td><?php echo $conta->nome; ?></td>
                <td><?php echo $conta->tipo; ?></td>
                <td><?php echo $conta->categoria; ?></td>
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