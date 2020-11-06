<?php

class Maio {

    private $pdo; 

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectMaioRequerimentos() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
        procon, forum, semcelt, semef, semmurb, defesaCivil FROM maio");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editMaioRequerimentos($semgov,$semus,$semas) {
        $sql = $this->pdo->prepare("UPDATE maio SET semgov = :semgov, semus = :semus, semas = :semas");
        $sql->bindValue(":semgov", $semgov);
        $sql->bindValue(":semus", $semus);
        $sql->bindValue(":semas", $semas);
        $sql->execute();
    }

    public function selectMaioImprensa() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, conteudos, clipings FROM maio");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editMaioImprensa($conteudos,$clippings) {
        $sql = $this->pdo->prepare("UPDATE maio SET conteudos = :conteudos, clipings = :clippings");
        $sql->bindValue(":conteudos", $conteudos);
        $sql->bindValue(":clippings", $clippings);
        $sql->execute();
    } 

    public function selectMaioDesign() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, artes, impressoes FROM maio");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    } 
    public function editMaioDesign($pecas, $impressoes) {
        $sql = $this->pdo->prepare("UPDATE maio SET artes = :artes, impressoes  = :impressoes");
        $sql->bindValue(":pecas", $pecas);
        $sql->bindValue(":impressoes", $impressoes);
        $sql->execute();
    }

    public function selectMaioFotografia() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, cobertura , material FROM maio");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editMaioFotografia($cobertura, $material) {
        $sql = $this->pdo->prepare("UPDATE maio SET cobertura = :cobertura, material  = :material");
        $sql->bindValue(":cobertura", $cobertura);
        $sql->bindValue(":material", $material);
        $sql->execute();
    }
    
    public function selectMaioSocial() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, seguidores , alcance FROM maio");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editMaioSocial($seguidores,$alcance) {
        $sql = $this->pdo->prepare("UPDATE maio SET seguidores = :seguidores, alcance  = :alcance");
        $sql->bindValue(":seguidores", $seguidores);
        $sql->bindValue(":alcance", $alcance);
        $sql->execute();
    }

}

