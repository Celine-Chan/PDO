<?php

require_once 'controllers/index_controller.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Partie 1 PDO</title>
</head>

<body>

    <div class="row">
    </div>

    <h1 class="text-center mb-5">Affichage des données</h1>

    <h2 class="text-center mb-5">Clients</h2>

    <table class="table table-striped table-dark container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">Prénom</th>
            </tr>
        </thead>

        <tbody>
            <!-- je fais un foreach pour parcourir le tableau -->
            <?php foreach ($allClientsArray as $clients) { ?>
                <tr>
                    <td><?= $clients['id'] ?></td>
                    <td><?= $clients['lastName'] ?></td>
                    <td><?= $clients['firstName'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="text-center mb-5 mt-5">Types de spectacles</h2>

    <table class="table table-striped container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($showTypesArray as $types) { ?>
                <tr>
                    <td><?= $types['id'] ?></td>
                    <td><?= $types['type'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="text-center mb-5 mt-5">20 clients</h2>

    <table class="table table-striped table-dark container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">Prénom</th>
            </tr>
        </thead>

        <tbody>
            <!-- je fais un foreach pour parcourir le tableau -->
            <?php foreach ($showFirstClientsArray as $clients) { ?>
                <tr>
                    <td><?= $clients['id'] ?></td>
                    <td><?= $clients['lastName'] ?></td>
                    <td><?= $clients['firstName'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="text-center mb-5 mt-5">Carte de fidélité</h2>

    <table class="table table-striped table-dark container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">Prénom</th>
                <th scope="col">Type de carte</th>
                <th scope="col">Numéro de carte</th>
            </tr>
        </thead>

        <tbody>
            <!-- je fais un foreach pour parcourir le tableau -->
            <?php foreach ($showCardArray as $clients) { ?>
                <tr>
                    <td><?= $clients['id'] ?></td>
                    <td><?= $clients['lastName'] ?></td>
                    <td><?= $clients['firstName'] ?></td>
                    <td><?= $clients['type'] ?></td>
                    <td><?= $clients['cardNumber'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="text-center mb-5 mt-5">Nom en M</h2>

    <table class="table table-striped table-dark container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">Prénom</th>
            </tr>
        </thead>

        <tbody>
            <!-- je fais un foreach pour parcourir le tableau -->
            <?php foreach ($showFirstLetterArray as $clients) { ?>
                <tr>
                    <td><?= $clients['id'] ?></td>
                    <td><?= $clients['lastName'] ?></td>
                    <td><?= $clients['firstName'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="text-center mb-5 mt-5">Liste des spectacles</h2>

    <table class="table table-striped container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre du spectacle</th>
                <th scope="col">Artiste</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
            </tr>
        </thead>

        <tbody>
            <!-- je fais un foreach pour parcourir le tableau -->
            <?php foreach ($showShowsArray as $shows) { ?>
                <tr>
                    <td><?= $shows['id'] ?></td>
                    <td><?= $shows['title'] ?></td>
                    <td><?= $shows['performer'] ?></td>
                    <td><?= $shows['date'] ?></td>
                    <td><?= $shows['startTime'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2 class="text-center mb-5 mt-5">Liste des clients</h2>

    <table class="table table-striped table-dark container text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Carte de fidélité</th>
                <th scope="col">Numéro de carte</th>
            </tr>
        </thead>

        <tbody>
            <!-- je fais un foreach pour parcourir le tableau -->
            <?php foreach ($showClientsArray as $clients) { ?>
                <tr>
                    <td><?= $clients['id'] ?></td>
                    <td><?= $clients['lastName'] ?></td>
                    <td><?= $clients['firstName'] ?></td>
                    <td><?= $clients['birthDate'] ?></td>
                    <td><?= $clients['card'] == 1 ? 'oui' : 'non' ?></td>
                    <?php if ($clients['card'] == 1) { ?>
                        <td><?= $clients['cardNumber'] ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>