<?php

session_start();
$errors = [];
// Inclusion des fichiers nécessaires
require_once "../config/config.php"; // Paramètres de configuration de la base de données
require_once "../models/userprofil.php"; // Classe userprofil

// Vérification si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Tableau d'erreurs (stockage des erreurs)
    $errors = [];

    // Validation du champ pseudo
    if (empty($_POST['user_pseudo'])) {
        $errors['user_pseudo'] = 'Veuillez saisir votre pseudo';
        
    }
    

    // Validation du champ mot de passe
    if (empty($_POST['user_password'])) {
        $errors['user_password'] = 'Veuillez saisir votre mot de passe';
    }

    // Si les champs sont valides, commence les tests
    if (empty($errors)) {
        // Vérification de l'existence du pseudo avec la méthode checkPseudoExists de la classe Utilisateur
        if (!User::checkPseudoExists($_POST['user_pseudo'])) {
            $errors['user_pseudo'] = 'Utilisateur inconnu';
        } else {
            // Récupération des informations de l'utilisateur via la méthode getInfos()
            $UtilisateurInfos = User::getAll($_POST['user_pseudo']);

            // Utilisation de password_verify pour valider le mot de passe
            if (password_verify($_POST['user_password'], $UtilisateurInfos['user_password'])) {
                $_SESSION["user"] = $UtilisateurInfos;
                unset($_SESSION["user"]["user_password"]);
                // Si la validation du mot de passe est réussie, redirection vers controller-home.php
                header('Location: controller-home.php');
            } else {
                // Sinon, ajout d'une erreur de connexion au tableau d'erreurs
                $errors['connexion'] = 'Mauvais mot de passe';
            }
        }
    }
}



// Inclusion de la vue
include_once('../views/view-signin.php');
?>