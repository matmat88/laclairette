<?php
final class AjaxProjectModel {
    

    private $db;

    function __construct (AjaxDatabase $database) {
        $this->db = $database;
    }
/*
    function displayByCategoriesAndName(string $categories, string $name){
        $queryByCategoriesAndName =
        "SELECT `nameProject`,`nameCommanditaire`,`texteDescription`,`lien`,nameplus,m.name,m.`titreImage`,i.`titreImageplus`
        FROM project AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        INNER JOIN imageplus AS i
        ON m.id = i.idMedia
        WHERE p.categories = :categories
        AND m.name = :name"; 
        $parameters['categories']= $categories;
        $parameters['name']=$name;
        $result = $this->db->query($queryByCategoriesAndName, $parameters);
        return $result;
    }
*/
    function displayProjectSingleByCategoriesAndName(string $categories, string $name){
        $queryByCategoriesAndName =
        "SELECT `nameProject`,`nameCommanditaire`,`texteDescription`,`lien`,m.name,m.`titreImage`
        FROM project AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        WHERE p.categories = :categories
        AND m.name = :name"; 
        $parameters['categories']= $categories;
        $parameters['name']=$name;
        $result = $this->db->query($queryByCategoriesAndName, $parameters);
        return $result;
    }

    function displayProjectSeveralByCategoriesAndName(string $categories, string $name){
        $queryByCategoriesAndName =
        "SELECT `nameProject`,`nameCommanditaire`,`texteDescription`,`lien`,nameplus,i.`titreImageplus`
        FROM project AS p
        INNER JOIN media AS m
        ON p.idMedia = m.id
        INNER JOIN imageplus AS i
        ON m.id = i.idMedia
        WHERE p.categories = :categories
        AND m.name = :name"; 
        $parameters['categories']= $categories;
        $parameters['name']=$name;
        $result = $this->db->query($queryByCategoriesAndName, $parameters);
        return $result;
    }
}

