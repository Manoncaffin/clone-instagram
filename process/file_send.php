<?php
// session_start();

// if($_SESSION['id']){
// // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
//         if (isset($_FILES['avatar']) AND $_FILES['avatar']['error'] == 0)
//             {
//                 // Testons si le fichier n'est pas trop gros
//                 if ($_FILES['avatar']['size'] <= 1000000)
//                 {
//                     // Testons si l'extension est autorisée
//                     $infosfichier = pathinfo($_FILES['avatar']['name']);
//                     $extension_upload = $infosfichier['extension'];
//                     $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
//                     if (in_array($extension_upload,
//                     $extensions_autorisees))
//                     {
//                         // On peut valider le fichier et le stocker définitivement dans le fichier (avatar)
//                         move_uploaded_file($_FILES['avatar']['tmp_name'], '../avatar/' .basename($_FILES['avatar']['name']));
 
//                         // puis on ce connecte à le base de donnée
//                         $dbs = new PDO('mysql:host=localhost;dbname=clone_instagram');
//                         //On enrégistre le nom de l'image dans dans la base de donnée
//                         $req = $dbs->prepare('update user set avatar=:avatar 
//                         where id="'.($_SESSION['id']).'" ');
//                         $req->execute(array(
//                         "avatar" =>$_FILES['avatar']['name']
//                         ));
//                         // On compte le nombre de retour et
//                         $count = $req->rowCount();
//                         if($count > 0)
//                             {
//                                 print 'Téléchargemen de l\'image veillez patienté !Merci<script type="text/javascript">       window.setTimeout("location=(\'../page_principale.php?\');",8000) </script>';
//                             }  
//                     }
//                             //Si l'image est trop grande on affiche le message
//                 }else {echo 'Image trop grande';}
//         }else{
//                 //Si aucun fichier n'a été envoyer on affiche le message
//             echo 'Erreur du téléchargement !';
//         }
     
// }else{ echo 'Erreur, aucun accès !';}



// if (isset($_FILES['file'])) {
//     $tmpName = $_FILES['file']['tmp_name'];
//     $name = $_FILES['file']['name'];
//     $size = $_FILES['file']['size'];
//     $error = $_FILES['file']['error'];

//     $tabExtension = explode('.', $name);
//     $extension = strtolower(end($tabExtension));

//     $extensions = ['jpg', 'png', 'jpeg', 'gif'];
//     if (in_array($extension, $extensions)) {
//         move_uploaded_file($tmpName, './upload/' . $name);
//     } else {
//         echo "Extension non acceptée";
//     }
// }

// move_uploaded_file($tmpName, './img/' . $name);
// // Pour envoyer l’image dans notre dossier, on va utiliser la fonction PHP « move_uploaded_file ». Cette fonction attend 2 paramètres : le chemin du fichier que l’on veut uploader et le chemin vers lequel on souhaite l’uploader.
// $request = $dbs->prepare('INSERT INTO photo VALUES (photo)');
// $request->execute([$_FILE]);

// echo "Image enregistrée";

// var_dump($_POST);
// var_dump($_FILES);
?>