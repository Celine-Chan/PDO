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
        $query = 'SELECT `id`, `lastName`, `firstName`, `card` FROM `clients`';

        //on utilise la méthode query pour exécuter notre requête
        $queryObject = $this->dataBase->query($query);

        //on utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObject->fetchAll(); //par défaut retourne un tableau associatif

        return $result; //on retourne le tableau
    }

    //ex 3
    public function showFirstClients($limit)
    {
        $query = 'SELECT `id`, `lastName`, `firstName` FROM `clients` LIMIT ' . $limit;
        $queryObject = $this->dataBase->query($query);
        $result = $queryObject->fetchAll();
        return $result;
    }

    //ex 4
    public function showCard($type)
    {
        $query = 'SELECT `clients`.`id`, `clients`.`lastName`, `clients`.`firstName`, `clients`.`cardNumber`, `cardtypes`.`type`, `cards`.`cardTypesId`
        FROM `clients` 
        INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
        INNER JOIN `cardtypes` ON `cardtypes`.`id` = `cards`.`cardTypesId`
        WHERE `cardTypesId` = ' . $type;
        $queryObject = $this->dataBase->query($query);
        $result = $queryObject->fetchAll();
        return $result;
    }

    //ex 5
    public function showFirstLetter()
    {
        $query = 'SELECT `id`, `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastname`';
        $queryObject = $this->dataBase->query($query);
        $result = $queryObject->fetchAll();
        return $result;
    }

    //ex7
    public function showClients()
    {
        $query = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`';
        $queryObject = $this->dataBase->query($query);
        $result = $queryObject->fetchAll();
        return $result;
    }
}
