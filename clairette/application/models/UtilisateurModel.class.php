<?php 
final class UtilisateurModel {
    const USER = 
        "SELECT `id`, `login`,`motDePasse`,`role`
         FROM `user` 
         WHERE `login` = :login";
    
    

    private $db;

    function __construct (Database $database) {
        $this->db = $database;
    }


    function findUserByLogin (string $login)
    {
        $parameters['login']= $login;
        $query= $this->db->queryOne(self::USER, $parameters);
        return $query;
    }

    function displayAdmin(){
        $queryByCategories =
        'SELECT `adresse`,`tel`,`mail`,`idMedia`,`name`,`titreImage` 
        FROM user AS u
        INNER JOIN media AS m
        ON u.idMedia = m.id
        WHERE u.role = "admin"'; 
        $result = $this->db->query($queryByCategories);
        return $result;
    }

    function addInfoUser (string $login, string $mail, string $adresse, string $tel, string $idMedia) {
        $register =
        "UPDATE `user` SET `mail`=:mail, `adresse`=:adresse, `tel`=:tel, `idMedia`=:idMedia
        WHERE `login` = :login";

        $parameters['login']= $login;
        $parameters['mail']= $mail;
        $parameters['adresse']= $adresse;
        $parameters['tel']= $tel;
        $parameters['idMedia']= $idMedia;
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }

    function superAdminAddUser (string $login, string $motDePasse, string $role) {
        $register =
            "INSERT INTO `user`(`login`, `motDePasse`, `role`)  
             VALUES (:login, :motDePasse,  :role)";
            //  "INSERT INTO `user`(`login`, `motDePasse`, `mail`, `adresse`, `tel`, `idMedia`)  
            //  VALUES (:login, :motDePasse,  :mail,  :adresse,  :tel, :idMedia)";
        $parameters['login']= $login;
        $parameters['motDePasse']=password_hash($motDePasse, PASSWORD_DEFAULT);
        $parameters['role']= $role;
        // $parameters['mail']= $mail;
        // $parameters['adresse']= $adresse;
        // $parameters['tel']= $tel;
        // $parameters['idMedia']= $idMedia;
        $key= $this->db->executeSql($register, $parameters);
        return $key;
    }



}





?>