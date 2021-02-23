<?php 

require_once '../models/database.php';
require_once '../models/patients.php';

$patientsObj = new Patients;
$listPatientsArray = $patientsObj->getAllPatients();