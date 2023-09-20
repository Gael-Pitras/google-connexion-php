<?php
require_once 'vendor/autoload.php';

// Remplacez par vos propres identifiants d'application Google
$google_app_id = '83781273492-ov1em5ma4lpom9o2ek70atcb9eonuh29.apps.googleusercontent.com';
$google_app_secret = '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';

// L'URL de rappel doit être configurée pour votre environnement local
$google_callbackurl = 'http://localhost/';

$google_client = new Google_Client();
$google_client->setClientId($google_app_id);
$google_client->setClientSecret($google_app_secret);
$google_client->setRedirectUri($google_callbackurl);
$google_client->addScope('email');
$google_client->addScope('profile');



?>
