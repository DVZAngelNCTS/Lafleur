<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'sqlconnect.php';

if(isset($_REQUEST['submit'])){
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $email = $_REQUEST['email'];
    $mdp = $_REQUEST['motdepasse'];


    if (empty($nom) || empty($prenom) || empty($email) || empty($mdp)){
        echo "tout les champs sont obligatoires";
    }
    else{
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user) {
            echo "Cet email est déjà utilisé.";
        } else {
            $hash = password_hash($mdp, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (prenom, nom, email, mot_de_passe) VALUES (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            if ($stmt -> execute([$prenom, $nom, $email, $mot_de_pass])){
            echo "inscription reussi";
            header("Location: connexion.html");
            } else{
                echo "erreur lors de l'inscription";

            }

        }
        
    }

}

