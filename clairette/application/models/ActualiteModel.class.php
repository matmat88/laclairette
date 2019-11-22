<?php 
final class ActualiteModel {

    private $db;

    function __construct (Database $database) {
        $this->db = $database;
    }

    function displayActu(){
        $query=
        "SELECT `lienActu`,`texteActu`,`titreActu`,`name`,`type`,`titreImage`,'lienImage'
        FROM actu AS a
        INNER JOIN media AS m
        ON a.idMedia = m.id";
        $result = $this->db->query($query);
        return $result;
    }
    function addActu (string $lienActu, string $texteActu, string $titreActu,string $idMedia) {
        $register =
        "INSERT INTO `actu`(`lienActu`,`texteActu`,`titreActu`, `idMedia`)VALUES (:lienActu, :texteActu, :titreActu, :idMedia)";
        $parameters['lienActu']=$lienActu;
        $parameters['texteActu']=$texteActu;
        $parameters['titreActu']= $titreActu;
        $parameters['idMedia']= $idMedia;
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }

    function updateActu (string $lienActu, string $texteActu,string $titreActu) {
        $register =
        "UPDATE `actu` 
        SET `lienActu`=:lienActu, `texteActu`=:texteActu,`titreActu`=:titreActu,`idMedia`=180
        WHERE id = 9";
        $parameters['lienActu']= $lienActu;
        $parameters['texteActu']=$texteActu;
        $parameters['titreActu']= $titreActu;
        // $parameters['idMedia']= $idMedia;
        $key = $this->db->executeSql($register, $parameters);
        return $key;
    }


}





?>