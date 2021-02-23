<?php

class Patients extends DataBase
{
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
        VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

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

    /**
     * //Méthode permettant d'obtenir la liste de tous les patients
     * 
     * @return array
     */
    public function getAllPatients()
    {
        //nous stockons ici notre requête pour permettre d'obtenir tous nos patients
        $query = 'SELECT `id`, `lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients` ORDER BY `id` DESC';
        $queryObj = $this->dataBase->query($query);
        $result = $queryObj->fetchAll();
        return $result;
    }

    /**
     * Methode permettant d'obtenir les infos d'un client selon son ID
     *
     * @param string $idPatient
     * @return array ou false si la requête ne passe pas
     */
    public function getDetailsPatient(string $idPatient)
    {
        // requete me permettant de recup infos user
        $query = 'SELECT * FROM patients WHERE id = :idPatient';

        // je prepare la requête à l'aide de la methode prepare pour me premunir des injections SQL
        $getDetailsPatientQuery = $this->dataBase->prepare($query);

        // Je bind ma value idPatient à mon paramètre $idPatient
        $getDetailsPatientQuery->bindValue(':idPatient', $idPatient, PDO::PARAM_STR);

        // test et execution de la requête pour afficher message erreur
        if ($getDetailsPatientQuery->execute()) {
            //je retourne le résultat sous forme de tableau via la méthode fetch car une seule ligne comme resultat
            return $getDetailsPatientQuery->fetch();
        } else {
            return false;
        }
    }

    public function updatePatient(array $patientsDetails) {
        //requête me permettant de modifier mon user
        $query = 'UPDATE `patients` SET
        `lastname` = :lastname,
        `firstname` = :firstname,
        `birthdate` = :birthdate,
        `phone` = :phone,
        `mail` = :mail
        WHERE id = :id';

        //je prépare la requête à l'aide de la méthode prepare pour me premunir des injections SQL
        $updatePatientQuery = $this->dataBase->prepare($query);

        //on bind les values pour renseigner les marqueurs nominatifs
        $updatePatientQuery->bindValue(':lastname', $patientsDetails['lastName'], PDO::PARAM_STR);
        $updatePatientQuery->bindValue(':firstname', $patientsDetails['firstName'], PDO::PARAM_STR);
        $updatePatientQuery->bindValue(':birthdate', $patientsDetails['birthDate'], PDO::PARAM_STR);
        $updatePatientQuery->bindValue(':phone', $patientsDetails['phoneNumber'], PDO::PARAM_STR);
        $updatePatientQuery->bindValue(':mail', $patientsDetails['email'], PDO::PARAM_STR);
        $updatePatientQuery->bindValue(':id', $patientsDetails['id'], PDO::PARAM_STR);

        if ($updatePatientQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
