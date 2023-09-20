<?php
if (session_status() == PHP_SESSION_NONE) {
    // Durée de vie des sessions et des jetons
    ini_set('session.gc_maxlifetime', 3600); // 1 heure
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    ini_set('session.use_only_cookies', 1);

    session_start(); // Démarrage de la session
}
include("config.php");
include("init.php");

if (isset($_GET["code"])) {
    $code = htmlspecialchars($_GET["code"], ENT_QUOTES, 'UTF-8');
    if ($code) {
    // Tente d'échanger un code contre un jeton d'authentification valide.
    $token = $google_client->fetchAccessTokenWithAuthCode($code);
    // Vérifie s'il y a des erreurs lors de l'obtention du jeton d'authentification.
    if (!isset($token['error'])) {
        $_SESSION['logged'] = 'true';
        // Définit le jeton d'accès utilisé pour les requêtes.
        $google_client->setAccessToken($token['access_token']);
        // Stocke la valeur du "access_token" dans la variable $_SESSION pour une utilisation future.
        $_SESSION['access_token'] = $token['access_token'];
        // Crée un objet de la classe Google_Service_Oauth2.
        $google_service = new Google_Service_Oauth2($google_client);
        // Obtient les données du profil de l'utilisateur depuis Google.
        $data = $google_service->userinfo->get();
        // Convertit l'image en base64
        $imageBase64 = base64_encode(file_get_contents($data['picture']));
        $_SESSION['google_id'] = $data['id'];
        $_SESSION['google_id'] = htmlspecialchars($data['id'], ENT_QUOTES, 'UTF-8');
        $_SESSION['given_name'] = htmlspecialchars($data['given_name'], ENT_QUOTES, 'UTF-8');
        $_SESSION['family_name'] = htmlspecialchars($data['family_name'], ENT_QUOTES, 'UTF-8');
        $_SESSION['email'] = filter_var($data['email'], FILTER_VALIDATE_EMAIL) ? $data['email'] : "";
        $_SESSION['picture'] = $imageBase64;
        header("Location: $url_redirection");
    
    } else {
        header("Location: $url_403");
    }
} else {
    header("Location: $url_403");
}
}
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;900&amp;display=swap" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php

        // Vérifie si l'utilisateur est déjà connecté avec Google
        if (isset($_SESSION['google_id'])) {
            echo "Vous êtes connecté en tant que : " . $_SESSION['given_name'] . " " . $_SESSION['family_name'] ;
            echo '<img src="data:image/jpeg;base64,' . $_SESSION['picture'] . '" alt="Photo de profil" style="border-radius: 100%;"><br>';
            echo "<a href='".$url_deconnexion ."'>Se déconnecter</a>";
        } else {
        ?>
            <div class="login-container">
                <h1>Connexion</h1>
                <p>Pour accéder à nos services, veuillez-vous connecter.</p>
                <a class="login-with-google-btn" href="<?php echo $google_client->createAuthUrl(); ?>"> Connectez-vous avec Google</a>
            </div>
            <br><br>

        <?php
        }
        ?>
    </div>
</body>

</html>