<?php

// J'appelle mes 2 modèls
require_once '../models/dataBase.php';
require_once '../models/patients.php';

$patientsObj = new Patients;

if (isset($_POST['idPatient'])) {

    $detailsPatientArray = $patientsObj->getDetailsPatient($_POST['idPatient']);
    
} else {

    $detailsPatientArray = false;
    
}