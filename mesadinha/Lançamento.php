<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lançamentos - Mesadinha</title>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="Saida.css">
  <link rel="stylesheet" href="Cad.css">
  <div class="lista">
  	<ul>
      <li><a href="Home.php">Home</a></li>
      <li><a href="Categorias.php">Categorias</a></li>
      <li><a href="gerenciarContas.php">Contas</a></li>
      <li><a href="Lançamento.php">Lançamentos</a></li>
  	</ul>
  	</div><br>
</head>
<body>
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
  <br><br><br>
  <div class="txt">
    <div class="qdd" style=" height: 340px" >
        <h1 id="titulo" >Cadastro de contas</h1>
        <form action="" method="post">

          <div >
          <label for="senha">Categoria</label><br>
          <form action="">
              <select name="categoria" class="form-control" required>
                  <option value="">Selecionar uma opção</option>

                  <?php foreach ($listarCategorias as $categoria){ ?>

                  <option value="<?php echo $categoria->ID; ?>"><?php echo $categoria->NOME; ?><option>
                      <?php } ?>
              </select>
      </div>

            <div >
              <label for="name">Nome</label><br>
              <input type="name" id="nome" name="nome"  required>
          </div>
            <div><br>
                <button type="button" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-primary">Alterar</button><br><br>
            </div>
        </form>
    </div>



 <table class="table table-striped table-dark" id="tamanho">
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