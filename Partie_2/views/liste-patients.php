<?php

require_once '../controllers/list-patients_controller.php';

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

    <h1 class="text-center">Liste des patients</h1>

    <form action="detailsPatient.php" method="POST">
        <table class="table table-striped table-dark container text-center mt-5">

            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <!-- je fais un foreach pour parcourir le tableau -->
                <?php foreach ($listPatientsArray as $patients) { ?>
                    <tr>
                        <td><?= $patients['id'] ?></td>
                        <td><?= $patients['lastname'] ?></td>
                        <td><?= $patients['firstname'] ?></td>
                        <td>
                            <button type="submit" class="btn btn-outline-light btn-sm" name="idPatient" value="<?= $patients['id'] ?>">+ d'infos</button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </form>

    <!-- Mise en place d'une ternaire pour permettre d'afficher un message si jamais le tableau est vide -->
    <?= count($listPatientsArray) == 0 ? '<p class="h6 text-center">Vous n\'avez pas de patients d\'enregistrés<p>' : '' ?>

    <div class="text-center mt-5">
        <a class="btn btn-primary mt-3" href="../views/ajout-patients.php" role="button">Création patients</a>
        <a class="btn btn-success mt-3" href="../index.php" role="button">Accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>