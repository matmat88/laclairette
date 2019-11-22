<?php
final class ProjectModel {
    private $db;
    function __construct (Database $database) {
        $this->db = $database;
    }
    function displayByCategories(string $categories){
        $queryByCategories =
        "SELECT p.`id`,`nameProject`,`nameCommanditaire`,`idMedia`,`name`,`type`,`texteDescription`,`lien` 
        FROM project AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        WHERE p.categories = ?"; 
        $result = $this->db->query($queryByCategories, [$categories]);
        return $result;
    }
    function displayGoodCouv(string $nameCommanditaire){
        $query =
        "SELECT `name`
        FROM project AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        WHERE nameCommanditaire != ?"; 
        $result = $this->db->query($query, [$nameCommanditaire]);
        return $result;
    }

    function displayGoodPlus(string $nameCommanditaire){
        $query =
        "SELECT `nameplus`
        FROM project AS p
        INNER JOIN imageplus AS i
        ON p.idMedia = i.idMedia
        WHERE nameCommanditaire != ?"; 
        $result = $this->db->query($query, [$nameCommanditaire]);
        return $result;
    }

    function addProject (string $nameProject, string $nameCommanditaire, string $texteDescription,string $lien, string $categories, string $idMedia) {
        $register =
        "INSERT INTO `project`(`nameProject`,`nameCommanditaire`,`texteDescription`,`lien`,`categories`, `idMedia`)VALUES (:nameProject, :nameCommanditaire, :texteDescription, :lien, :categories, :idMedia)";
        $parameters['nameProject']=$nameProject;
        $parameters['nameCommanditaire']=$nameCommanditaire;
        $parameters['texteDescription']= $texteDescription;
        $parameters['lien']= $lien;
        $parameters['categories']= $categories;
        $parameters['idMedia']= $idMedia;
        $nameProject=trim($nameProject);
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }
    /*
    function supprProject (string $nameProjectSuppr) {
        $register =
        "DELETE p, i, m
        FROM project AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        INNER JOIN imageplus AS i
        ON m.id = i.idMedia
        WHERE nameProject = :nameProject ";
        $parameters['nameProject']= $nameProjectSuppr;
        $nameProjectSuppr=trim($nameProjectSuppr);
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }
    */
    function supprProjectMedia (string $nameProjectSuppr) {
        $register =
        "DELETE m
        FROM media AS m
        INNER JOIN project AS p
        ON p.idMedia = m.id
        WHERE nameProject = :nameProject ";
        $parameters['nameProject']= $nameProjectSuppr;
        $nameProjectSuppr=trim($nameProjectSuppr);
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }
    function supprProjectImageplus (string $nameProjectSuppr) {
        $register =
        "DELETE i
        FROM imageplus AS i
        INNER JOIN project AS p
        ON p.idMedia = i.idMedia
        WHERE nameProject = :nameProject ";
        $parameters['nameProject']= $nameProjectSuppr;
        $nameProjectSuppr=trim($nameProjectSuppr);
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }
    function supprProjectSimple (string $nameProjectSuppr) {
        $register =
        "DELETE *
        FROM project 
        WHERE nameProject = :nameProject ";
        $parameters['nameProject']= $nameProjectSuppr;
        $nameProjectSuppr=trim($nameProjectSuppr);
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }
}

