<?php
include("init.php");
// Début de session
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Démarrage de la session
}

// Vérifie si l'utilisateur est connecté avec Google
if (isset($_SESSION['google_id'])) {
    // Supprime toutes les variables de session
    $_SESSION = [];

    // Détruit la session
    session_destroy();

    // Redirige vers la page d'accueil ou une autre page de votre choix après la déconnexion
    header("Location: $url_connexion"); // Remplacez "index.php" par la page de redirection souhaitée
    exit();
} else {
    // Redirige vers la page d'accueil si l'utilisateur n'est pas connecté
    header("Location: $url_connexion"); // Remplacez "index.php" par la page de redirection souhaitée
    exit();
}
?>
