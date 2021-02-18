<?php

require '../controllers/ajout-patients_controller.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Partie 2 PDO</title>
</head>

<body>

    <h1 class="text-center mb-5">Création fichier patient</h1>

    <form class="container col-4 shadow-lg rounded" action="ajout-patients.php" method="POST">

    <p class="h3 text-info"><?= $messages['addPatient'] ?? '' ?></p>

        <div class="mb-3">
            <label for="lastName" class="form-label">Nom du patient</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>"> 
            <div class="text-danger">
                <!-- message d'erreur si pas validé -->
                <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>
                <!-- ou : $errorMessages['lastName] ?? '' -->
            </div>
        </div>

        <div class="mb-3">
            <label for="firstName" class="form-label">Prénom du patient</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
            <div class="text-danger">
                <!-- message d'erreur si pas validé -->
                <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3">
            <label for="birthDate" class="form-label">Date de naissance du patient</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>">
            <div class="text-danger">
                <!-- message d'erreur si pas validé -->
                <span><?= isset($errorMessages['birthDate']) ? $errorMessages['birthDate'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Numéro de téléphone du patient</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>">
            <div class="text-danger">
                <!-- message d'erreur si pas validé -->
                <span><?= isset($errorMessages['phoneNumber']) ? $errorMessages['phoneNumber'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse mail du patient</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
            <div class="text-danger">
                <!-- message d'erreur si pas validé -->
                <span><?= isset($errorMessages['email']) ? $errorMessages['email'] : '' ?></span>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>

        <a class="btn btn-danger" href="../index.php" role="button">Accueil</a>
        <a class="btn btn-success" href="liste-patients.php" role="button">Liste des patients</a>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>