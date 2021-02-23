<?php

require_once '../controllers/detailsPatient_controller.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Partie 2 PDO</title>
</head>

<body>

    <div class="text-center"><i class="fas fa-info-circle p-2 logo"></i></div>
    <h1 class="text-center text-uppercase mb-3 h3">Détails du patient</h1>

    <div class="container border border-secondary shadow mt-5 p-4 col-6">

        <?php
        if ($detailsPatientArray) { ?>

            <!-- Nom -->
            <div class="text-left">
                <label class="label" for="lastname">Nom</label>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" value="<?= $detailsPatientArray['lastname'] ?>" disabled>
            </div>

            <!-- Prénom -->
            <div class="text-left">
                <label class="label" for="firstname">Prénom</label>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="firstname" name="firstname" type="text" class="form-control" value="<?= $detailsPatientArray['firstname'] ?>" disabled>
            </div>

            <!-- Date de naissance  -->
            <div class="text-left">
                <label class="label" for="birthdate">Date de naissance</label>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="birthdate" name="birthdate" type="date" class="form-control" value="<?= $detailsPatientArray['birthdate'] ?>" disabled>
            </div>

            <!-- Numéro de téléphone -->
            <div class="text-left">
                <label class="label" for="phone">Numéro de téléphone</label>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="phone" name="phone" type="text" class="form-control" value="<?= $detailsPatientArray['phone'] ?>" disabled>
            </div>

            <!-- Adresse mail -->
            <div class="text-left">
                <label class="label" for="mail">Adresse mail</label>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="mail" name="mail" type="mail" class="form-control" value="<?= $detailsPatientArray['mail'] ?>" disabled>
            </div>
            <form action="modifyPatients.php" method="POST">
                <button type="submit" class="btn btn-sm btn-success" name="modifyPatient" value="<?= $detailsPatientArray['id'] ?>">Modifier</button>
                <a type="button" href="liste-patients.php" class="btn btn-sm btn-outline-dark">Liste des patients</a>
            </form>

        <?php } else { ?>
            <p class="h5 text-danger text-center mb-3"></i>Patient non présent</p>
            <div class="text-center">
                <a type="button" href="liste-patients.php" class="btn btn-sm btn-outline-secondary">Liste des patients</a>
            </div>
        <?php } ?>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>