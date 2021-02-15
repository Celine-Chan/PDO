<?php

class DataBase
{
    protected $dataBase;

    public function __construct()
    {
        try {
            $this->dataBase = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pdo', 'pdo');
        } catch (Exception $errorMessage) {
            die('Erreur : ' . $errorMessage->getMessage());
        }
    }
}
