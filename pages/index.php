<?php

require_once('../process/database.php');
include_once('../process/result_research.php');

// var_dump($allUsers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link href="./styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <p>gfbgfn</p>
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
                </div>
            </div>
        </div>





    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<!-- <style>
        /* Ajoutez du style CSS selon vos préférences */
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        #image-container {
            max-width: 80%;
            max-height: 80%;
            text-align: center;
        }

        #image-en-grand {
            max-width: 100%;
            max-height: 100%;
        }

        #commentaire {
            color: white;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

 Div pour l'affichage en grand -->
<!-- <div id="overlay" onclick="fermerOverlay()">
    <div id="image-container">
        <img id="image-en-grand">
        <p id="commentaire"></p>
    </div>
</div>


<img src="../img/pleins-logo-insta.jpeg" onclick="afficherImage('image1.jpg', 'Commentaire pour image 1')">
<img src="miniature2.jpg" onclick="afficherImage('image2.jpg', 'Commentaire pour image 2')">


<script>
    function afficherImage(src, commentaire) {
        // Affiche l'overlay
        document.getElementById('overlay').style.display = 'flex';

        // Affiche l'image en grand
        document.getElementById('image-en-grand').src = "../img/pleins-logo-insta.jpeg";

        // Affiche le commentaire
        document.getElementById('commentaire').innerText = commentaire;
    }

    function fermerOverlay() {
        // Ferme l'overlay
        document.getElementById('overlay').style.display = 'none';
    }
</script> -->