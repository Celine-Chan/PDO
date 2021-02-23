<?php

// J'appelle mes 2 modèls
require_once '../models/dataBase.php';
require_once '../models/patients.php';

$patientsObj = new Patients;

if (isset($_GET['idPatient'])) {

    $detailsPatientArray = $patientsObj->getDetailsPatient($_GET['idPatient']);
    
} else {

    $detailsPatientArray = false;
    
}
