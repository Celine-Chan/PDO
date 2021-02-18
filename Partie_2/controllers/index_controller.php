<?php

if (file_exists('../models/database.php')) {
    require_once '../models/database.php';
}
else {
    require_once 'models/database.php';
}

if (file_exists('../models/patients.php')) {
    require_once '../models/patients.php';
}
else {
    require_once 'models/patients.php';
}

$patientsObj = new Patients;
$listPatientsArray = $patientsObj->getAllPatients();


