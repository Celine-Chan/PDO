<?php
session_start();

require_once '../models/database.php';
require_once '../models/patients.php';

$regexName = '/^[a-zA-Z]+$/';
$regexBirthDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
$regexPhoneNumber = '/^0[1-68]([-. ]?[0-9]{2}){4}+$/';

//mise en place d'une variable permettant de savoir si nous avons inscrit le patient dans la base
$updatePatientInBase = false;

//mise e place d'un tableau d'erreurs
$errors = [];

//mise en place d'un tableau de message
$messages = [];

//nous testons si nous avons bien une valeur non NULL dans le $_POST modifyPatient qui signifie que nous venons bien de la page detailsPatient
if (!empty($_POST['modifyPatient'])) {
    //création d'un nouvel objet
    $patientObj = new Patients;
    //nous allons récupérer les infos de notre patient nous permettant de pré-remplir le formulaire
    $detailsPatientArray = $patientObj->getDetailsPatient($_POST['modifyPatient']);
    //pour plus de sécurité, je stockl'id du patient à modifier dan sune variable de session
    $_SESSION['idPatientToUpdate'] = $detailsPatientArray['id'];
}


if (isset($_POST['updatePatientBtn'])) {

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

    // var_dump($_POST);

    // var_dump($errors);
    //je vérifie s'il n'y a pas d'erreurs afin de lancer ma requête
    if (empty($errors)) {
        $patientObj = new Patients;

        //création d'un tableau contenant toute les infos du form
        $patientsDetails = [
            'lastName' => htmlspecialchars($_POST['lastname']),
            'firstName' => htmlspecialchars($_POST['firstname']),
            'birthDate' => htmlspecialchars($_POST['birthdate']),
            'phoneNumber' => htmlspecialchars($_POST['phone']),
            'email' => htmlspecialchars($_POST['mail']),
            //je récupère mon id que j'ai stocké dans ma variable de session
            'id' => $_SESSION['idPatientToUpdate']
        ];

        if ($patientObj->updatePatient($patientsDetails)) {
            $updatePatientInBase = true;
        } else {
            $messages['updatepatient'] = 'Erreur de connexion lors de la modification';
            
        }
        
    }
}
