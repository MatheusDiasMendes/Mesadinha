<?php

public function listarContas() {
    try {

        $bd = new Conexao();

        $con = $bd->conectar();

        $sql = $con->prepare("select * from contas");

        $sql->execute();

        if ($sql->rowCount() > 0) {
            return $result = $sql->fetchAll(PDO::FETCH_CLASS);
        }

    } catch (PDOException $msg) {
        echo "Não foi possivel cadastrar: " . $msg->getMessage();
    }
}
?>