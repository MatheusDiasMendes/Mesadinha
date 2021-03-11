<?php
require_once "Conexao.php";
class InserirCategorias
{
    public $ID;
    public $nome;




    public function inserirCategorias()
    {
        try {
            if (isset($_POST['nome'])) {
                $this->ID = $_POST["ID"];
                $this->nome = $_POST["nome"];

                $bd = new Conexao();

                $con = $bd->conectar();

                $sql = $con->prepare("insert into categorias(ID,NOME
          values(null,?,)");

                $sql->execute(array(
                    $this->ID,
                    $this->nome
                ));

                if ($sql->rowCount() > 0) {
                    header("location: InserirCategorias.php");
                }
            } else {
                header("location: InserirCategorias.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel cadastrar: " . $msg->getMessage();
        }
    }
}
?>