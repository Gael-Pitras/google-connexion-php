# Google Connection PHP

## Description

This project contains configuration files for connecting to Google via PHP. It is designed to facilitate the integration of Google authentication into your PHP applications.

## Prerequisites

- PHP 7.x or higher
- Composer
- A Google Developer account to obtain API keys

## Installation

1. Clone this repository into your local workspace:

    ```bash
    git clone https://github.com/Gael-Pitras/google-connexion-php.git
    ```

2. Install dependencies via Composer:

    ```bash
    cd google-connexion-php
    composer install
    ```

3. Rename the `.env.example` file to `.env` and add your Google API keys:

    ```env
    GOOGLE_CLIENT_ID=YourClientID
    GOOGLE_CLIENT_SECRET=YourClientSecret
    ```

## Usage

To use this project, import the `GoogleAuth.php` file into your code and use the `GoogleAuth` class to handle authentication.

```php
require_once 'GoogleAuth.php';

$googleAuth = new GoogleAuth();
$googleAuth->authenticate();
