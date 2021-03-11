<?php
require_once "Conexao.php";

class InserirContas
{
    public $ID;
    public $nome;
    public $tipo;
    public $categoria;

    public function inserir()
    {
        try {
            if (isset($_POST['nome'])) {
                $this->nome = $_POST["nome"];
                $this->tipo = $_POST["tipo"];
                $this->categoria = $_POST["categoria"];

                $bd = new Conexao();

                $con = $bd->conectar();

                $sql = $con->prepare("insert into contas(ID,NOME,TIPO,CATEGORIA
              values(null,?,?,?,)");

                $sql->execute(array(
                    $this->ID,
                    $this->nome,
                    $this->tipo,
                    $this->categoria,
                ));

                if ($sql->rowCount() > 0) {
                    header("location: gerenciarContas.php");
                }
            } else {
                header("location: gerenciarContas.php");
            }
        } catch (PDOException $msg) {
            echo "Não foi possivel cadastrar: " . $msg->getMessage();
        }
    }
}
?>