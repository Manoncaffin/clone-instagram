<?php

require_once('../process/database.php');
$request = $database->query('SELECT * FROM user ORDER BY id DESC');

$allUsers = $request->fetchAll();

var_dump($_GET['pseudo']);



   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

 <?php foreach ($allUsers as $allUser) { ?>
    <a href="./index.php?pseudo=<?php echo $allUser['pseudo']?>"> <?= $allUser['pseudo'] ?> </a>
    <?php } ?>
</body>
</html>