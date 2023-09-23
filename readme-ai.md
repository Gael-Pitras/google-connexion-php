<div align="center">
<h1 align="center">
<img src="https://raw.githubusercontent.com/PKief/vscode-material-icon-theme/ec559a9f6bfd399b82bb44393651661b08aaf7ba/icons/folder-markdown-open.svg" width="100" />
<br>google-connexion-php
</h1>
<h3>◦ Connect with Google seamlessly!</h3>
<h3>◦ Developed with the software and tools below.</h3>

<p align="center">
<img src="https://img.shields.io/badge/PHP-777BB4.svg?style&logo=PHP&logoColor=white" alt="PHP" />
<img src="https://img.shields.io/badge/Markdown-000000.svg?style&logo=Markdown&logoColor=white" alt="Markdown" />
</p>
<img src="https://img.shields.io/github/languages/top/Gael-Pitras/google-connexion-php.git?style&color=5D6D7E" alt="GitHub top language" />
<img src="https://img.shields.io/github/languages/code-size/Gael-Pitras/google-connexion-php.git?style&color=5D6D7E" alt="GitHub code size in bytes" />
<img src="https://img.shields.io/github/commit-activity/m/Gael-Pitras/google-connexion-php.git?style&color=5D6D7E" alt="GitHub commit activity" />
<img src="https://img.shields.io/github/license/Gael-Pitras/google-connexion-php.git?style&color=5D6D7E" alt="GitHub license" />
</div>

---

## 📖 Table of Contents
- [📖 Table of Contents](#-table-of-contents)
- [📍 Overview](#-overview)
- [📦 Features](#-features)
- [📂 Repository Structure](#-repository-structure)
- [⚙️ Modules](#modules)
- [🚀 Getting Started](#-getting-started)
    - [🔧 Installation](#-installation)
    - [🤖 Running google-connexion-php](#-running-google-connexion-php)
    - [🧪 Tests](#-tests)
- [🛣 Roadmap](#-roadmap)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)
- [👏 Acknowledgments](#-acknowledgments)

---


## 📍 Overview

The project is a PHP-based Google authentication and authorization system. It enables users to securely sign in with their Google accounts, retrieve their email and profile information, and log out when needed. The codebase provides a convenient way to integrate Google's sign-in functionality into web applications, enhancing user experience and streamlining authentication processes. Additionally, it offers customization options for page URLs and provides a responsive design for a seamless user interface.

---

## 📦 Features

|    | Feature            | Description                                                                                                        |
|----|--------------------|--------------------------------------------------------------------------------------------------------------------|
| ⚙️ | **Architecture**   | The code follows a modular architecture with separate files for different functionalities like authentication, configuration, session management, and CSS styling. This promotes code reusability and maintainability. |
| 📄 | **Documentation**  | The codebase lacks comprehensive documentation. It would benefit from comments and inline documentation to help developers understand the code and its usage better. |
| 🔗 | **Dependencies**   | The project relies on the Google PHP Client Library for authentication and authorization with Google. It is important to keep this library up to date to ensure compatibility and security. |
| 🧩 | **Modularity**     | The system is well-organized into smaller components, allowing for easy understanding and isolation of functionalities. Each file handles a specific task, enhancing code clarity and separation of concerns. |
| 🧪 | **Testing**        | There is no apparent testing strategy or tests provided in the codebase. It would be beneficial to include unit tests and integration tests to ensure the correctness and functionality of the system. |
| ⚡️ | **Performance**    | Performance can be enhanced by avoiding excessive API calls to Google. Caching frequently accessed data or implementing batch-processing methods could improve speed and reduce resource usage. |
| 🔐 | **Security**       | The codebase includes measures for secure authentication and session management. However, it could benefit from additional security measures like input validation and output escaping to prevent common security vulnerabilities, such as cross-site scripting (XSS). |
| 🔀 | **Version Control**| The project is using Git for version control. It is recommended to follow best practices like utilizing branches and meaningful commit messages for effective collaboration and maintenance of the codebase. |
| 🔌 | **Integrations**   | The system interacts with Google's authentication and authorization services and utilizes Google APIs. Additional integrations with other systems or services are not apparent in the codebase. |
| 📶 | **Scalability**    | The codebase does not have explicit provisions for scalability. However, the modular architecture and minimal code coupling can facilitate future enhancements and additions to the system. |

---


## 📂 Repository Structure




---

## ⚙️ Modules

<details closed><summary>Root</summary>

| File                                                                                                 | Summary                                                                                                                                                                                                                                                                                                                                                                                 |
| ---                                                                                                  | ---                                                                                                                                                                                                                                                                                                                                                                                     |
| [config.php](https://github.com/Gael-Pitras/google-connexion-php.git/blob/main/config.php)           | The code sets up a Google client for authentication and authorization. It configures the client with credentials and callback URL, and adds necessary scopes for accessing email and profile information.                                                                                                                                                                               |
| [deconnexion.php](https://github.com/Gael-Pitras/google-connexion-php.git/blob/main/deconnexion.php) | This code checks if a user is logged in with Google and logs them out by destroying the session. If the user is not logged in, it redirects them to a specified page. The code ensures a secure and proper logout process.                                                                                                                                                              |
| [index.php](https://github.com/Gael-Pitras/google-connexion-php.git/blob/main/index.php)             | This code is responsible for handling user authentication through Google. It starts a session, exchanges an authentication code for an access token, retrieves user information from Google, and stores it in the session. If the user is already logged in, their profile information is displayed along with an option to log out. Otherwise, a login button for Google is displayed. |
| [init.php](https://github.com/Gael-Pitras/google-connexion-php.git/blob/main/init.php)               | This code initializes variable URLs for the homepage, redirection, logout, and 403 error page in PHP. It provides flexibility and convenience in managing the page URLs in a web application.                                                                                                                                                                                           |
| [main.css](https://github.com/Gael-Pitras/google-connexion-php.git/blob/main/main.css)               | This code snippet resets basic styles, sets up the body of the page, and creates a login container with form elements. It includes styling for form fields and a login button with Google integration. The code utilizes flexbox and provides responsive design.                                                                                                                        |

</details>

---

## 🚀 Getting Started

***Dependencies***

Please ensure you have the following dependencies installed on your system:

`- ℹ️ Dependency 1`

`- ℹ️ Dependency 2`

`- ℹ️ ...`

### 🔧 Installation

1. Clone the google-connexion-php repository:
```sh
git clone https://github.com/Gael-Pitras/google-connexion-php.git
```

2. Change to the project directory:
```sh
cd google-connexion-php
```

3. Install the dependencies:
```sh
composer install
```

### 🤖 Running google-connexion-php

```sh
php main.php
```

### 🧪 Tests
```sh
vendor/bin/phpunit
```

---


## 🛣 Roadmap

> - [X] `ℹ️  Task 1: Implement X`
> - [ ] `ℹ️  Task 2: Implement Y`
> - [ ] `ℹ️ ...`


---

## 🤝 Contributing

Contributions are always welcome! Please follow these steps:
1. Fork the project repository. This creates a copy of the project on your account that you can modify without affecting the original project.
2. Clone the forked repository to your local machine using a Git client like Git or GitHub Desktop.
3. Create a new branch with a descriptive name (e.g., `new-feature-branch` or `bugfix-issue-123`).
```sh
git checkout -b new-feature-branch
```
4. Make changes to the project's codebase.
5. Commit your changes to your local branch with a clear commit message that explains the changes you've made.
```sh
git commit -m 'Implemented new feature.'
```
6. Push your changes to your forked repository on GitHub using the following command
```sh
git push origin new-feature-branch
```
7. Create a new pull request to the original project repository. In the pull request, describe the changes you've made and why they're necessary.
The project maintainers will review your changes and provide feedback or merge them into the main branch.

---

## 📄 License

This project is licensed under the `ℹ️  LICENSE-TYPE` License. See the [LICENSE-Type](LICENSE) file for additional info.

---

## 👏 Acknowledgments

`- ℹ️ List any resources, contributors, inspiration, etc.`

---
