<?php
require 'sqlconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mdp = htmlspecialchars(trim($_POST['mot_de_passe']));

    $check = $pdo->prepare("SELECT id FROM utilisateur WHERE email = :email");
    $check->bindParam(':email', $email);
    $check->execute();

    if ($check->rowCount() > 0) {
        echo "Un utilisateur avec cet email existe déjà.";
        echo "<br><a href='register.php'>Retour a l'inscription</a>";
    } else {
        $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

        $insert = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, role) VALUES (:nom, :prenom, :email, :mdp, 'utilisateur')");
        $insert->bindParam(':nom', $nom);
        $insert->bindParam(':prenom', $prenom);
        $insert->bindParam(':email', $email);
        $insert->bindParam(':mdp', $mdp_hache);

        if ($insert->execute()) {
            echo "Inscription réussie !";
            header("Location: login.php");
        } else {
            echo "Erreur lors de l'inscription.";
        }
    }

} else {
    echo "Aucune donnée reçue.";
}
?>
