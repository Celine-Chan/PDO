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

    <h1 class="text-center mb-5">Affichage des données clients</h1>

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>