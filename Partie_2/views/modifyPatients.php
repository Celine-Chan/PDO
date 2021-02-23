<?php
require_once '../controllers/modifyPatients_controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Partie 2 PDO</title>
</head>

<body>

    <h1 class="text-center">Modification des données</h1>

    <p class="text-info"><?= $messages['addPatient'] ?? '' ?></p>

    <!-- Nous allons afficher le formulaire : 
    si modifyPatient n'est pas vide = nous venons bien de la page detailPatient
    si le tableau d'erreurs n'est pas vide = le formulaire contient des erreurs -->
    <?php if (!empty($_POST['modifyPatient']) || !empty($error)) { ?>

        <p class="text-center text-danger"><?= $messages['updatePatient'] ?? '' ?></p>

        <!-- Utilisation du novalidate pour tester les tests en back -->
        <form novalidate action="" method="POST">
            <!-- Nom -->
            <div class="text-left">
                <label class="label" for="lastname">Nom</label>
                <span class="error"><?= $errors['lastname'] ?? '' ?></span>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" value="<?= $detailsPatientArray['lastname'] ?? (isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : '') ?>" required>
            </div>

            <!-- Prénom -->
            <div class="text-left">
                <label class="label" for="firstname">Prénom</label>
                <span class="error"></span>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="firstname" name="firstname" type="text" class="form-control" placeholder="ex. John" value="<?= $detailsPatientArray['firstname'] ?? (isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '') ?>" required>
            </div>

            <!-- Date de naissance  -->
            <div class="text-left">
                <label class="label" for="birthdate">Date de naissance</label>
                <span class="error"></span>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="birthdate" name="birthdate" type="date" class="form-control" value="<?= $detailsPatientArray['birthdate'] ?? (isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : '') ?>" required>
            </div>

            <!-- Numéro de téléphone -->
            <div class="text-left">
                <label class="label" for="phone">Numéro de téléphone</label>
                <span class="error"></span>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="phone" name="phone" type="text" class="form-control" placeholder="ex. 0612XXXXXX" value="<?= $detailsPatientArray['phone'] ?? (isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '') ?>" required>
            </div>

            <!-- Adresse mail -->
            <div class="text-left">
                <label class="label" for="mail">Adresse mail</label>
                <span class="error"><?= $errors['mail'] ?? '' ?></span>
            </div>
            <div class="input-group input-group-sm mb-3">
                <input id="mail" name="mail" type="mail" class="form-control" placeholder="ex. mail@mail.fr" value="<?= $detailsPatientArray['mail'] ?? (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') ?>" required>
            </div>

            <button type="submit" class="btn btn-sm btn-success" name="updatePatientBtn">Enregistrer</button>
            <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-danger">Annuler</a>

        </form>

        <? } else if ($updatePatientInBase) { ?>
            <p class="h5 text-center text-info">Veuillez selectionner un patient</p>
        
        <div class="text-center mt-4">
            <a type="button" href="liste-patients.php" class="btn btn-sm btn-outline-secondary">Liste des patients</a>
        </div>

    <?php } else { ?>

        <p class="h5 text-center text-info">Les modifications ont bien été prises en compte</p>
        <div class="text-center mt-4">
            <a type="button" href="liste-patients.php" class="btn btn-sm btn-outline-secondary">Liste des patients</a>
        </div>

    <?php } ?>

    <a href="../index.php" class="btn btn-outline-secondary mt-2 col-2">Accueil</a>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>