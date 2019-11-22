<?php
final class PresentationModel {
    private $db;

    function __construct (Database $database) {
        $this->db = $database;
    }

    function displayPresentation(){
        $query =
        "SELECT `textePresentation`, `titrePresentation`,`adresse`,`tel`,`mail`,`name`
        FROM presentation AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        WHERE p.id = 3"; 
        $result = $this->db->query($query);
        return $result;
    }

    function addPresentation (string $textePresentation,string $titrePresentation,string $adresse,string $tel,string $mail,string $idMedia) {
        $register =
        "INSERT INTO `presentation`(`textePresentation`,`titrePresentation`,`adresse`,`tel`,`mail`, `idMedia`)VALUES (:textePresentation, :titrePresentation, :adresse, :tel, :mail, :idMedia)";
        $parameters['textePresentation']=$textePresentation;
        $parameters['titrePresentation']=$titrePresentation;
        $parameters['adresse']=$adresse;
        $parameters['tel']=$tel;
        $parameters['mail']=$mail;
        $parameters['idMedia']=$idMedia;
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }

    function updatePresentation (string $textePresentation,string $titrePresentation,string $adresse,string $tel,string $mail) {
        $register =
        "UPDATE `presentation` SET `textePresentation`=:textePresentation, `titrePresentation`=:titrePresentation, `adresse`=:adresse, `tel`=:tel, `mail`=:mail, `idMedia`=181
        WHERE `id` = 3";
        $parameters['textePresentation']=$textePresentation;
        $parameters['titrePresentation']=$titrePresentation;
        $parameters['adresse']=$adresse;
        $parameters['tel']=$tel;
        $parameters['mail']=$mail;
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }
    

    
}

