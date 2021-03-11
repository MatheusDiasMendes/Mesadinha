<?php

public function listartodos(){
    try{
        $bd = new conexao();

        $con = $bd->conectar();

        $sql = $con->prepare("select * from categorias");

        $sql->execute();

        If($sql->rowCount() > 0){
            return $result = $sql->fetcAll(PDO::FETCH_CLASS);

        }
    }
  }catch(PDOExeption $msg){
    echo "Não foi possivel listar os alunos: ".$msg->getMessage();
}

}

?>