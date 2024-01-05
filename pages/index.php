<?php

require_once('../process/database.php');
$request = $database->query('SELECT * FROM user ORDER BY id DESC');

$allUsers = $request->fetchAll();

// var_dump($_GET['pseudo']);

include_once('../process/result_research.php');

// var_dump($allUsers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles.css" rel="stylesheet">
    <title>Instagram</title>
</head>

<body>
    <main>

        <div class="d-flex vh-100">
            <div class="blockInsta col-2 p-5">
                <div class="d-flex justify-content-start">
                    <h1 class="text center">Instagram</h1>
                </div>

                <div class="pt-5">
                    <p class="text-black">Accueil</p>
                    <br>
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <label for="file">Créer</label>
                        <br>
                        <br>
                        <input type="file" name="file">
                        <br>
                        <br>
                        <button type="submit">Enregistrer</button>
                        <br>
                        <br>
                    </form>
                    <a href="../pages/index.php" class="text-decoration-none text-black">Profil</a>
                    <br>
                    <br>
                    <a href="../pages/user_connect.php" class="text-decoration-none text-black">Se déconnecter</a>
                    <br>
                    <br>
                    <form method="POST" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" name="pseudo">
                        <button class="btn btn-outline-danger" type="submit">Rechercher</button>
                    </form>
                    <br>
                    <br>

                    <div class="container-md col-7 p-5">

                    <?php foreach ($allUsers as $allUser) { ?>
                        <a href="./profil.php?pseudo=<?php echo $allUser['pseudo'] ?>"> <?= $allUser['pseudo'] ?></a>
                    <?php } ?>
                    </div>
    </main>
</body>

</html>