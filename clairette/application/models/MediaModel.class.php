<?php
final class MediaModel {
    private $db;

    function __construct (Database $database) {
        $this->db = $database;
    }

    function addMedia (string $name, string $type,string $titreImage) {
        $register =
        "INSERT INTO `media`(`name`,`type`,`titreImage`)  
        VALUES (:name,:type,:titreImage)";
        $parameters['name']=$name;
        $parameters['type']= $type;
        $parameters['titreImage']= $titreImage;
        $key = $this->db->executeSql($register, $parameters);
        return $key;
    }

    function addMediacomplet (string $name, string $type,string $titreImage,string $lienImage) {
        $register =
        "INSERT INTO `media`(`name`,`type`,`titreImage`,`lienImage`)  
        VALUES (:name,:type,:titreImage,:lienImage)";
        $parameters['name']=$name;
        $parameters['type']= $type;
        $parameters['titreImage']= $titreImage;
        $parameters['lienImage']= $lienImage;
        $key = $this->db->executeSql($register, $parameters);
        return $key;
    }

    function updateMedia (string $name, string $type,string $titreImage) {
        $register =
        "UPDATE `media`
        SET `name`=:name, `type`=:type, `titreImage`=:titreImage
        WHERE id = 181";
        $parameters['name']=$name;
        $parameters['type']= $type;
        $parameters['titreImage']= $titreImage;
        $key = $this->db->executeSql($register, $parameters);
        return $key;
    }

    function updateMediacomplet(string $name, string $type,string $titreImage,string $lienImage) {
        $register =
        "UPDATE `media` 
        SET `name`=:name, `type`=:type,`titreImage`=:titreImage,`lienImage`=:lienImage
        WHERE id = 180";
        $parameters['name']=$name;
        $parameters['type']= $type;
        $parameters['titreImage']= $titreImage;
        $parameters['lienImage']= $lienImage;
        $key = $this->db->executeSql($register, $parameters);
        return $key;
    }

    function addImageplus (string $nameplus, string $type,string $titreImageplus, string $idMedia) {
        $register =
        "INSERT INTO `imageplus`(`nameplus`,`type`,`titreImageplus`, `idMedia`)  
        VALUES (:nameplus,:type,:titreImageplus, :idMedia)";
        $parameters['nameplus']=$nameplus;
        $parameters['type']= $type;
        $parameters['titreImageplus']= $titreImageplus;
        $parameters['idMedia']= $idMedia;
        $key = $this->db->executeSql($register, $parameters);
        return $key;
    }
}
