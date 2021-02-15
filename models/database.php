<?php

class DataBase
{
    protected $dataBase;

    public function __construct()
    {
        //nous effectuons un try and catch pour obtenir un message d'erreur explicite en cas de non connexion
        try {
            //nous effectuons une instance PDO pour nous connecter à la base de données
            $this->dataBase = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pdo', 'pdo');
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }
}
