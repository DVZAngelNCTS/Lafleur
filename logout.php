<?php

session_start();

// Supprimer les variables de session
unset($_SESSION['id']);

unset($_SESSION['nom']);

unset($_SESSION['prenom']);

unset($_SESSION['email']);

unset($_SESSION['role']);

// Rediriger vers la page de connexion
header('Location: login.php');
exit();



?>