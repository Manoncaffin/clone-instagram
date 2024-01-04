<?php
require_once('./database.php');
var_dump($_POST);
session_start();

if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
    
) { 
    $_SESSION['pseudo'] = $_POST['pseudo'];

    $pseudo = $_POST['pseudo'];
    
    $request = $database->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
    $request->execute([
        ':pseudo' => $pseudo
    ]);

    $pseudoexist = $request->fetch();
     


    if(!$pseudoexist) {
        $request2 = $database->prepare('INSERT INTO user (pseudo)
        VALUES (:pseudo)');
        $request2->execute([
            'pseudo' => $_POST["pseudo"]
        ]); 
    } 
    }



header('Location: ../pages/index.php');

?>