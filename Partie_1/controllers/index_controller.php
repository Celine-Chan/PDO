<?php

require_once 'models/database.php';
require_once 'models/clients.php';
require_once 'models/showType.php';
require_once 'models/shows.php';

//j'instancie un  nouvel objet avec la classe clients
$clientsObject = new Clients;

//utilisation d ela méthode getAllClients me permettant de récupérer tous les clients sous forme de tableau
$allClientsArray = $clientsObject->getAllClients();

// var_dump($allClientsArray);

//ex 2
$showTypesObject = new ShowTypes;
$showTypesArray = $showTypesObject->getShowTypes();

//ex 3
$showFirstClientsArray = $clientsObject->showFirstClients(20);

//ex 4
$showCardArray = $clientsObject->showCard(1);

//ex 5
$showFirstLetterArray = $clientsObject->showFirstLetter('m');

//ex 6
$showsObject = new Shows;
$showShowsArray = $showsObject->showShows();

//ex 7
$showClientsArray = $clientsObject->showClients();

