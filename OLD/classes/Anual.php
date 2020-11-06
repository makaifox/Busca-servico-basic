<?php

class Anual {
    private $pdo;

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectAnual() {
        $sql = $this->pdo->prepare("SELECT * FROM anual");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editAnual($year, $semgov, $semus, $semas, $semimsp, $semsopc){
        if($this->selectAnual()) {
            $sql = $this->pdo->prepare("UPDATE anual SET year = :year, semgov = :semgov, 
            semus = :semus, semas = :semas, semimsp = :semimsp, semsopc = :semsopc");
            $sql->bindValue(":year", $year);
            $sql->bindValue(":semgov", $semgov);
            $sql->bindValue(":semus", $semus);
            $sql->bindValue(":semas", $semas);
            $sql->bindValue(":semimsp", $year);
            $sql->bindValue(":semsopc", $semsopc);
            $sql->bindValue(":year", $year);
            $sql->bindValue(":semgov", $semgov);
            $sql->bindValue(":semus", $semus);
            $sql->bindValue(":semas", $semas);
            $sql->bindValue(":semimsp", $year);
            $sql->bindValue(":semsopc", $semsopc);
            $sql->execute();
        }     
        
    }

    public function selectAnual2() {
        $sql = $this->pdo->prepare("SELECT * FROM anual2");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editAnual2($year, $quantitativo, $qualitativo, $imp1, $imp2, $dg1,
                                $dg2, $fav1, $fav2, $mds1, $mds2){
        if($this->selectAnual2()) {
            $sql = $this->pdo->prepare("UPDATE anual2 SET year = :year, quantitativo = :quantitativo, qualitativo = :qualitativo, 
            imp1 = :imp1, imp2 = :imp2, dg1 = :dg1, dg2 = :dg2, fav1 = :fav1, fav2 = :fav2, mds1 = :mds1, mds2 = :mds2");
            $sql->bindValue(":year", $year);
            $sql->bindValue(":quantitativo", $quantitativo);
            $sql->bindValue(":qualitativo", $qualitativo);
            $sql->bindValue(":imp1", $imp1);
            $sql->bindValue(":imp2", $imp2);
            $sql->bindValue(":dg1", $dg1);
            $sql->bindValue(":dg2", $dg2);
            $sql->bindValue(":fav1", $fav2);
            $sql->bindValue(":fav2", $fav2);
            $sql->bindValue(":mds1", $mds1);
            $sql->bindValue(":mds2", $mds2);
            $sql->execute();
        }     
        
    }


}

