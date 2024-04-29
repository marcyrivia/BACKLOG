<?php

session_start();
// Inclusion des fichiers nécessaires
require_once "../config/config.php"; // Paramètres de configuration de la base de données
require_once "../models/userprofil.php"; // Classe userprofil

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $user_picture = $_SESSION['user']['user_picture'];
    $user_pseudo = $_SESSION['user']['user_pseudo'];
    $user_email = $_SESSION['user']['user_email'];
    $user_descr = $_SESSION['user']['user_descr'];


}


include_once("../views/view-profil.php");
?>