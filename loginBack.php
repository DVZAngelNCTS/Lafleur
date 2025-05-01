<?php
session_start();
require 'sqlconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $mdp = htmlspecialchars(trim($_POST['mot_de_passe']));

    $stmt = $pdo->prepare("SELECT id, nom, prenom, mot_de_passe, role FROM utilisateur WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($mdp, $user['mot_de_passe'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $user['role'];

            header("Location: index.php");
        } else {
            // modifier le message car dangereux
            echo "Mot de passe incorrect.";
        }
    } else {
        // modifier le message car dangereux
        echo "Aucun compte trouvé avec cet email.";
    }

} else {
    echo "Aucune donnée reçue.";
}
?>
