<?php

class Patients extends DataBase
{

    public function getAllPatients() {
        $query = 'SELECT `lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients`';
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll();
        return $result;
    }
    /**
     * Méthode permettant de rajouter un patient dans notre base de données
     * 
     * @param array $patientDetails contient toute les infos du patient
     * @return boolean Permet de savoir si la requête est bien passé
     */
    public function addPatient(array $patientDetails)
    {
        //je mets en place des marqueurs nominatifs pour préparer ma requête avec des valeurs récupérées via form
        $query = 'INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
        VALUES(:lastname, :firstname, :birthdate, :phone, :mail)';

        //nous préparons notre requête à l'aide de la méthode prepare
        $addPatientQuery = $this->dataBase->prepare($query);

        // je bind mes valeurs à l'aide de la méthode bindValue() (=lier les valeurs)
        $addPatientQuery->bindValue(':lastname', $patientDetails['lastName'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':firstname', $patientDetails['firstName'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':birthdate', $patientDetails['birthDate'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':phone', $patientDetails['phoneNumber'], PDO::PARAM_STR);
        $addPatientQuery->bindValue(':mail', $patientDetails['email'], PDO::PARAM_STR);

        //tester et executer la requête pour afficher message erreur
        if ($addPatientQuery->execute()) {
            return true;
        } else {
            return false;
        }
        
    }
}
