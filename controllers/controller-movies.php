<?php

session_start();
// Inclusion des fichiers nécessaires
require_once "../config/config.php"; // Paramètres de configuration de la base de données
require_once "../models/userprofil.php"; // Classe userprofil

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['user_id'];
    $user_picture = $_SESSION['user']['user_picture'];
    $user_pseudo = $_SESSION['user']['user_pseudo'];

    

}

// // if(isset($_GET['movie_id'])) {


// // $movie_id = $_GET["movie_id"];
// // $movie_name = $_GET["movie_name"];
// // // $movie_release = $_POST["movie_release"];
// // // $movie_synopsis = $_POST["movie_synopsis"];

// // if ($movie_id && $movie_name)
// // {
// //     Rating::getMovies($movie_id, $movie_name);
// //     echo"ok";
// // }

// // $_SESSION["user"] = User::getAll($user_pseudo);
// // header("Location: controller-profil.php");
// // exit();
// }

include_once("../views/view-movies.php");
?>