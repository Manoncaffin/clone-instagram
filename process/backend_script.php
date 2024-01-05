<?php
// require_once('../process/database.php');

// if (isset($_GET['search']) && !empty($_GET['search'])) {
//     $research = htmlspecialchars($_GET['search']);
//     $userDetails = $database->query('SELECT * FROM user WHERE pseudo LIKE "%' . $research . '%" ORDER BY id DESC');
//     // Vous pouvez récupérer d'autres détails du profil si nécessaire
//     // Assurez-vous de mettre en forme les détails du profil en HTML
//     $profileHTML = '';

//     if ($userDetails->rowCount() > 0) {
//         foreach ($userDetails as $user) {
//             $profileHTML .= "<div class='user-profile-details' data-user-id='" . $user['id'] . "'>";
//             $profileHTML .= "<p>Pseudo: " . $user['pseudo'] . "</p>";
//             // Ajoutez d'autres détails du profil si nécessaire
//             $profileHTML .= "</div>";
//         }
//     } else {
//         $profileHTML = "<p>Aucun utilisateur trouvé</p>";
//     }

//     echo $profileHTML;
// }
?>