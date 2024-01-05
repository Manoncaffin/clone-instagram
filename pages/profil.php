<?php

require_once('../process/database.php');

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
    <main>
        <div class="d-flex vh-100">
            <div class="blockInsta col-2 p-5">
                <div class="d-flex justify-content-start">
                    <h1 class="text center">Instagram</h1>
                </div>

                <div class="pt-5">
                    <p class="text-black">Accueil</p>
                    <br>
                    <p class="text-black">Créer</p>
                    <br>
                    <a href="../pages/index.php" class="text-decoration-none text-black">Profil</a>
                    <br>
                    <br>
                    <a href="../pages/user_connect.php" class="text-decoration-none text-black">Se déconnecter</a>
                    <br>
                    <br>
                    <form method="post" action="./index.php" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" name="pseudo">
                        <button class="btn btn-outline-danger" type="submit">Rechercher</button>
                </form>
                        <br>
                        <br>
                </div>
            </div>

            <div class="container-md col-7 p-5">

                <div class="d-flex justify-content-around">
                    <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70%">

                    <div class="flex-colum">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="pe-3">Construire Solidaire</p>

                            <div class="justify-content-between pb-3">
                                <button type="button" class="btn btn-secondary btn-sm">Modifier le profil</button>
                                <button type="button" class="btn btn-secondary btn-sm">Voir l'archive</button>
                            </div>
                        </div>

                        <div>
                            <p>CONSTRUIRE SOLIDAIRE #SCIC-PTCE rassemble des acteurs</p>
                            <p>engagés #éco-construction #habitat durable et solidaire</p>
                            <br>
                            <a href="">www.construire-solidaire.fr</a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center text-center pt-3">
                            <div>
                                <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70px">
                                <p class="">Interview</p>
                            </div>
                            <div>
                                <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70px">
                                <p>Collectif</p>
                            </div>
                            <div>
                                <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70px">
                                <p>Collectivités</p>
                            </div>
                            <div>
                                <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70px">
                                <p>Architecture</p>
                            </div>
                            <div>
                                <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70px">
                                <p>Centre social</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid d-flex w-100 pt-5">
                    <div class="row">
                        <div class="col-7 pb-3">
                            <img src="../img/insta2.jpg" style="width:15vw; height:25vh">
                        </div>

                        <div class="col-7 pb-3">
                            <img src="../img/pleins-logo-insta.jpeg" style="width:15vw; height:25vh">
                        </div>

                        <div class="col-7 pb-3">
                            <img src="../img/insta3.jpg" style="width:15vw; height:25vh">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7 pb-3">
                            <img src="../img/insta1.jpg" style="width:15vw; height:25vh">
                        </div>

                        <div class="col-7 pb-3">
                            <img src="../img/insta2.jpg" style="width:15vw; height:25vh">
                        </div>

                        <div class="col-7 pb-3">
                            <img src="../img/pleins-logo-insta.jpeg" style="width:15vw; height:25vh">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7 pb-3">
                            <img src="../img/insta2.jpg" style="width:15vw; height:25vh">
                        </div>

                        <div class="col-7 pb-3">
                            <img src="../img/insta1.jpg" style="width:15vw; height:25vh">
                        </div>

                        <div class="col-7 pb-3">
                            <img src="../img/pleins-logo-insta.jpeg" style="width:15vw; height:25vh">
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </main>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>