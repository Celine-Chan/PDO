<?php

require_once '../models/database.php';
require_once '../models/patients.php';

// var_dump($_POST);

$errorMessages = [];

$messages = [];

$regexName = '/^[a-zA-Z]+$/';
$regexBirthDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
$regexPhoneNumber = '/^0[1-68]([-. ]?[0-9]{2}){4}+$/';

if (isset($_POST['submit'])) {

    if (isset($_POST['lastName'])) {
        if (!preg_match($regexName, $_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir un nom valide.';
        }
        if (empty($_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir un nom.';
        }
    }

    if (isset($_POST['firstName'])) {
        if (!preg_match($regexName, $_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un prénom valide.';
        }
        if (empty($_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un prénom.';
        }
    }

    if (isset($_POST['birthDate'])) {
        if (!preg_match($regexBirthDate, $_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date valide.';
        }
        if ($_POST['birthDate'] >= date('Y-m-d')) {
            $errorMessages['birthDate'] = 'Date impossible !';
        }
        if (empty($_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date.';
        }
    }

    if (isset($_POST['phoneNumber'])) {
        if (!preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
            $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone valide.';
        }
        if (empty($_POST['phoneNumber'])) {
            $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone.';
        }
    }

    if (isset($_POST['email'])) {
        //filtre pour éviter une regex
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['email'] = 'Veuillez saisir une adresse mail valide';
        }
        if (empty($_POST['email'])) {
            $errorMessages['email'] = 'Veuillez saisir une adresse email.';
        }
    }

    var_dump($errorMessages);

    //je vérifie s'il n'y a pas d'erreurs afin de lancer ma requête
    if (empty($errorMessages)) {
        $patientsObj = new Patients;

        //création d'un tableau associatif contenant toutes les infos du form
        $patientsDetails = [
            'lastName' => htmlspecialchars($_POST['lastName']),
            'firstName' => htmlspecialchars($_POST['firstName']),
            'birthDate' => htmlspecialchars($_POST['birthDate']),
            'phoneNumber' => htmlspecialchars($_POST['phoneNumber']),
            'email' => htmlspecialchars($_POST['email'])
        ];

        if ($patientsObj->addPatient($patientsDetails)) {
            $messages['addPatient'] = 'Patient enregistré';
        } else {
            $messages['adPatient'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}
