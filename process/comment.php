<?php
require_once('./database.php'); // Assurez-vous que cette ligne inclut correctement votre gestionnaire de base de données

session_start();

if (isset($_POST["comment"]) && !empty($_POST["comment"])) {
    // Assumez que $_SESSION['user_id'] contient l'identifiant de l'utilisateur actuel
    $user_id = $_SESSION['user_id'];
    var_dump($user_id);
    $comment_text = $_POST['comment'];

    // Vérifier si le commentaire existe déjà
    $request = $database->query("SELECT * FROM comment WHERE user_id = :user_id AND comment = :comment");
    $request->execute([
        ':user_id' => $user_id,
        ':comment' => $comment_text
    ]);

    $comment_exist = $request->fetch();

    if (!$comment_exist) {
        // Insérer le commentaire dans la table des commentaires
        $request2 = $database->prepare('INSERT INTO comment (user_id, comment) VALUES (:user_id, :comment)');
        $request2->execute([
            ':user_id' => $user_id,
            ':comment' => $comment_text,
            ':created_at' => date('Y-m-d H:i:s'),
            ':photo_id' => $photo_id
            
            
        ]);

        echo 'Commentaire publié avec succès!';
    } else {
        echo 'Le commentaire existe déjà.';
    }
} else {
    echo 'Le champ de commentaire est vide.';
}
?>