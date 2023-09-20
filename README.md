# Google Connection PHP


<div align="center">
  <img src="./preview.PNG" alt="Logo du projet">
</div>

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
    composer require google/apiclient "^2.0"
    ```

3. Add your Google API keys in `config.php`:

    ```env
    $google_app_id = 'YOUR_CLIENT_ID';
    $google_app_secret = 'YOUR_SECRET_CODE';
    ```

# Tutorial: Google Account Login Using PHP

## Introduction

This tutorial guides you through the necessary steps to integrate Google authentication into a PHP application using the Google People API and Google's PHP client SDK.

## Prerequisites

- PHP 7.x or higher
- Composer
- A Google Cloud account

## Steps

### Step 1: Access the Google API Console

Open your browser and go to the [Google API Console](https://console.cloud.google.com/).

### Step 2: Select or Create a Project

- Click on the "Select a project" option at the top of the page.
- If you already have a project, select it. Otherwise, click "New Project" to create one.

### Step 3: Enable the Google People API

- In the left-hand menu, click on "Library."
- Search for "Google People API" and select it.
- Click the "Enable" button.

### Step 4: Create Credentials

- In the left-hand menu, click on "Credentials."
- Click the "Create Credentials" button and choose "OAuth client ID."

### Step 5: Configure the OAuth Client ID

- Fill out the form to create a new OAuth client ID.
- Once the form is filled out, click "Create."
- Note down the client ID and client secret provided to you.

### Step 6: Install Composer

If Composer is not already installed on your machine, follow the instructions on the [official Composer website](https://getcomposer.org/download/) to install it.

### Step 7: Install Google's PHP Client SDK

Open your terminal and run the following command in your project directory:

```bash
composer require google/apiclient "^2.0"
```

