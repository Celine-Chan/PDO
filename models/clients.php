<?php
//clients est un enfant de la classe dataBase et hérite donc de ses attributs et méthodes
class Clients extends DataBase
{
    /**
     * function permettant d'obtenir tous les clients de la table client
     * nous obtenons les champs id, lastName et firstName
     * 
     * @return array
     */
    public function getAllClients()
    {
        //utilisation de magic quote pour indiquer qu'il s'agit de champs et de table
        //on stock la requête dans une variable
        $query = 'SELECT `id`, `lastName`, `firstName`, `card` FROM `clients` WHERE `card` = 1 LIMIT 20';

        //on utilise la méthode query pour exécuter notre requête
        $queryObject = $this->dataBase->query($query);

        //on utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObject->fetchAll(); //par défaut retourne un tableau associatif

        return $result; //on retourne le tableau
    }
}
