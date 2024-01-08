<?php

// require_once('../database.php');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles.css" rel="stylesheet">
    <title>Instagram</title>
</head>

<body>
    <main class="d-flex justify-content-center vh-100 align-items-center">
        <div class="">
            <img class="imgconnect" src="../img/mock-up-instagram.png" alt="">
        </div>
        <div class="px-5">
            <div>
                <h1>Instagram</h1>
            </div>
            <form action="../process/user_know.php" method="post">
                <div class="pt-5"><input type="text" class="champPseudo" id="pseudo" placeholder="Pseudo" name="pseudo"></div>
                <div class="pt-3"><input type="text" class="champMp" id="mp" placeholder="Mot de Passe"></div>
                <div class="pt-4"><button type="submit" href="./index.php" class="btn btn-primary">Go</button></div>
                <img class="imglogo pt-5 px-5" src="..//img/logo-insta.jpg" alt="">
                <p class="pt-5">Téléchargez l'application</p>
                <img class="googlePlay" src="../img/google play.png" alt="">

        </div>
        </form>
        <!-- <div>
</div> -->
    </main>
    <footer>
        <div class="">
        </div>
        <div class="">
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>