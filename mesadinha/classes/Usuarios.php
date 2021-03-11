<?php

require_once "Conexao.php";

public function login(){

    try{
        if(isset($_POST["email"]) && isset($_POST["senha"])){
            $this->EMAIL = $_POST["email"];
            $this->SENHA = $_POST["senha"];
            $bd =new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from usuario where email = ? and senha = ?");
            $sql->execute(array($this->EMAIL, $this->SENHA));

            if($sql->rowCount() > 8){
                header("location: Dashboard.php");
            }else{
                header("location: Index.html");
            }

        }else{
            header("location: Index.html");
        }
    }catch(PDOException $msg){
        echo "Não foi possivel fazer o login.".$msg->getMessage();
    }
} 

public function inserir()
{
    try {
        if (isset($_POST['nome']) && isset($_POST['sexo'])) {
            $this->nome = $_POST["nome"];
            $this->email = $_POST["email"];
            $this->endereco = $_POST["endereco"];
            $this->telefone = $_POST["tell"];
            $this->senha = $_POST["senha"];

            $bd = new Conexao();

            $con = $bd->conectar();

            $sql = $con->prepare("insert into alunos(ID,NOME,EMAIL,ENDERECO,TELEFONE,SENHA
          values(null,?,?,?,?,?,)");

            $sql->execute(array(
                $this->nome,
                $this->email,
                $this->endereco,
                $this->telefone,
                $this->senha
            ));

            if ($sql->rowCount() > 0) {
                header("location: Index.html");
            }
        } else {
            header("location: Index.html");
        }
    } catch (PDOException $msg) {
        echo "Não foi possivel cadastrar: " . $msg->getMessage();
    }
}


?>