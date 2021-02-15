<?php

require_once 'models/database.php';
require_once 'models/clients.php';

//j'instancie un  nouvel objet avec la classe clients
$clientsObject = new Clients;

//utilisation d ela méthode getAllClients me permettant de récupérer tous les clients sous forme de tableau
$allClientsArray = $clientsObject->getAllClients();

// var_dump($allClientsArray);




