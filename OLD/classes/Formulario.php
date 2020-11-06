<?php

class Formulario {

    private $pdo;

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function addForm($postArray) {

        $sql = $this->pdo->prepare("INSERT INTO formredecom (id_usuario,nomeSolicitante,secretariaSolicitante,secretariaSolicitante2,
        cargoSolicitante,emailSolicitante,telefoneSolicitante,assuntoDemanda,tipoDemanda,data,hora,endereco,personalidadeDemanda,
        demanda,anexoDemanda,nomeChefe,emailChefe,telefoneChefe) 

        VALUES (:id_usuario,:nomeSolicitante, :secretariaSolicitante, :secretariaSolicitante2, :cargoSolicitante, :emailSolicitante, :telefoneSolicitante,
        :assuntoDemanda, :tipoDemanda, :data, :hora, :endereco, :personalidadeDemanda, :demanda, :anexoDemanda, :nomeChefe, :emailChefe, :telefoneChefe)");
      
      foreach($postArray as $key => $value) {
          $sql->bindValue(":{$key}",$value);   
      }
      $sql->execute();

}
    public function selectForm($id_usuario) {
    $sql = $this->pdo->prepare("SELECT id, id_usuario, nomeSolicitante, secretariaSolicitante, secretariaSolicitante2, cargoSolicitante,
    emailSolicitante, telefoneSolicitante, assuntoDemanda, tipoDemanda, data, hora, endereco, personalidadeDemanda, demanda,
    anexoDemanda, nomeChefe, emailChefe, telefoneChefe, status FROM formredecom WHERE id_usuario = :id");
    $sql->bindValue("id", $id_usuario);
    $sql->execute();
    if($sql->rowCount() > 0) {
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $info;
    } else {
        return false;
    }   
    }

    public function editStatus($idForm) {
        $sql = $this->pdo->prepare("SELECT * FROM formredecom WHERE id = :id ");
        $sql->bindValue(":id", $idForm);
        $sql->execute();
        $data = $sql->fetchAll();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE formredecom SET status = :status WHERE id = :id ");
            $sql->bindValue(":id", $idForm);
            $sql->bindValue(":status", 1);
            $sql->execute();
        }
    }

    public function deleteForm($idForm) {
        $sql = $this->pdo->prepare("SELECT * FROM formredecom WHERE id = :idForm");
        $sql->bindValue(":idForm", $idForm);
        $sql->execute();

        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
          
        if($sql->rowCount() > 0) {
            $nomeAnexoDemanda = $data[0]['anexoDemanda'];
            $sql = $this->pdo->prepare("DELETE FROM formredecom WHERE id = :idForm");
            $sql->bindValue(":idForm", $idForm);
            $sql->execute();
            return $nomeAnexoDemanda;
        } else {
            return false;
        }
    }
}
