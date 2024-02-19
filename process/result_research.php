<?php

if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
) { 

$research = $_POST['pseudo'];
$request = $database->query('SELECT pseudo FROM user WHERE pseudo LIKE "%' . $research . '%"');
$allUsers = $request->fetchAll();


} else {
$request = $database->query('SELECT * FROM user ORDER BY id DESC');
$allUsers = $request->fetchAll();
}
?>