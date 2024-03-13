<?php
session_start();
// j'appelle ma config et mon utilisateur
require_once '../config/config.php';
require_once "../models/userprofil.php";

// Vérification des données postées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $user_pseudo = $_POST['user_pseudo'];
    // Vérification du pseudo
    if (empty($_POST["user_pseudo"])) {
        $errors['user_pseudo'] = "Champs obligatoire.";
    } else {
     if (!preg_match("/^[a-zA-ZÀ-ÿ\-\d ]+$/", $_POST["user_pseudo"])) {
        $errors['user_pseudo'] = "Le nom est invalide.";
    } else if (User::checkPseudo($user_pseudo)){
        $errors['user_pseudo'] = "Ce pseudo existe déjà.";
    }
}

    $user_email = $_POST['user_email'];
    // Vérification de l'email
    if (empty($_POST["user_email"])) {
        $errors['user_email'] = "Champs obligatoire.";
    } else { 
        if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
        $errors['user_email'] = "L'adresse email est invalide.";
         } else if (User::checkEmail($user_email)){
            $errors['user_email'] = "Cette adresse mail est déjà utilisé.";
        }
}


    // Vérification du mot de passe
    $user_password = $_POST["user_password"];
    $confirm_password = $_POST["confirm_password"];
    if (empty($user_password) || strlen($user_password) < 8 || $user_password !== $confirm_password) {
        $errors['user_password'] = "Le mot de passe doit comporter au moins 8 caractères et correspondre.";
    }




    // Afficher la synthèse des informations et le message de confirmation
    if (empty($errors)) {

        // Instance d'une PDO 
        try {

            $user_validate = 1;
            $user_pseudo = $_POST['user_pseudo'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];



            User::createUseprofil($user_validate, $user_pseudo, $user_email,  $user_password);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            die();
        }
        include('../views/view-summary.php');
        exit; // Arrêter l'exécution du script
    }
}
?>
<?php


// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-signup.php');
?>