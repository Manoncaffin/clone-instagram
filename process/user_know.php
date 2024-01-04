<?php

var_dump($_POST);
session_start();

if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
    
) { 
    require_once('./database_connect.php');
    $_SESSION['pseudo'] = $_POST['pseudo'];

    $findUser = $database->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
    $findUser->execute([
        'pseudo' => $_POST["pseudo"], 
    ]);
    $existingUser = $findUser->fetch();

    if($existingUser) {
        $userId = $existingUser['id'];
    } else {
        $request = $database->prepare('INSERT INTO user (pseudo, score) 
        VALUES (:pseudo,:score)');
        $request->execute([
            'pseudo' => $_POST["pseudo"], 
            'score'=> 0 ,
        ]);
    }

}

header('Location: ../pages/questions.php');

?>