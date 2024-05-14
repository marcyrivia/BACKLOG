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
    $fav_movie_1 = $_SESSION["user"]["fav_movie_1"];
    $fav_movie_2 = $_SESSION["user"]["fav_movie_2"];
    $fav_movie_3 = $_SESSION["user"]["fav_movie_3"];
    $fav_movie_4 = $_SESSION["user"]["fav_movie_4"];

}


include_once("../views/view-profil.php");
?>