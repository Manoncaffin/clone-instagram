<?php
require_once('./database.php');
session_start();

if(isset($_FILES['avatar']) && !empty($_FILES['avatar'])) {
// var_dump($_FILES);

$tmp_name = $_FILES['avatar']['tmp_name'];
// var_dump($tmp_name);

$name = $_FILES['avatar']['name'];
// var_dump($name);
move_uploaded_file($tmp_name, "../avatar/$name");
$imgpath = "../avatar/$name";

$request = $database->prepare("UPDATE user SET avatar = :avatar, pseudo = :pseudo WHERE id = :id");
$request->execute([
    'avatar' => $imgpath,
    'pseudo' => $_POST['pseudo'],
    'id' => $_SESSION['id']
]);
};

header('Location: ../pages/profil.php')
?>