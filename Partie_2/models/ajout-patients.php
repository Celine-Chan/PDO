<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Partie 2 PDO</title>
</head>

<body>

    <h1 class="text-center mb-5">Création fichier patient</h1>

    <form class="container col-4" action="liste-patients.php" method="POST">

        <div class="mb-3">
            <label for="lastName" class="form-label">Nom du patient</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>

        <div class="mb-3">
            <label for="firstName" class="form-label">Prénom du patient</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>

        <div class="mb-3">
            <label for="birthDate" class="form-label">Date de naissance du patient</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate">
        </div>

        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Numéro de téléphone du patient</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse mail du patient</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>