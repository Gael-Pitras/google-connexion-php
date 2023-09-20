# Google Connexion PHP

## Description

Ce projet contient des fichiers de configuration pour la connexion à Google via PHP. Il est conçu pour faciliter l'intégration de l'authentification Google dans vos applications PHP.

## Prérequis

- PHP 7.x ou supérieur
- Composer
- Un compte Google Developer pour obtenir les clés API

## Installation

1. Clonez ce dépôt dans votre espace de travail local :

    ```bash
    git clone https://github.com/Gael-Pitras/google-connexion-php.git
    ```

2. Installez les dépendances via Composer :

    ```bash
    cd google-connexion-php
    composer install
    ```

3. Renommez le fichier `.env.example` en `.env` et ajoutez vos clés API Google :

    ```env
    GOOGLE_CLIENT_ID=VotreClientID
    GOOGLE_CLIENT_SECRET=VotreClientSecret
    ```

## Utilisation

Pour utiliser ce projet, importez le fichier `GoogleAuth.php` dans votre code et utilisez la classe `GoogleAuth` pour gérer la connexion.

```php
require_once 'GoogleAuth.php';

$googleAuth = new GoogleAuth();
$googleAuth->authenticate();
