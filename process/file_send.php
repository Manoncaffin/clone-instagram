
<?php
// code pour envoyer une image dans img_post, puis dans la bdd 
require_once('./database.php');
session_start();

if (isset($_FILES["file"]) && !empty($_FILES["file"])) {
var_dump ($_FILES);

$tmp_name = $_FILES['file']['tmp_name'];
var_dump ($tmp_name);
$name = $_FILES['file']['name'];
var_dump ($name);
move_uploaded_file($tmp_name, "../img_post/$name");
$imgpath = "../img_post/$name";

$request = $database->prepare('INSERT INTO photo (photo, created_at, user_id)
VALUES (:photo, :created_at, :user_id)');
$request->execute([
    'photo' => $imgpath,
    'created_at' => date('Y-m-d H:i:s'),
    'user_id' => 5
]); 
};
?>