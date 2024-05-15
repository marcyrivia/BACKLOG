<?php 
require_once '../models/rating.php';
require_once '../config/config.php';

session_start();

var_dump($_GET);
// var_dump($_SESSION);
// Assurez-vous que la classe Rating est incluse dans votre fichier PHP


    // $date = date('d F Y');

 

// Vérifie si la valeur de Note_score a été envoyée via POST
if(isset($_GET['rating'])) {
    // Récupère la valeur de Note_score
    $rating = $_GET['rating'];
    $user_id = $_SESSION["user"]["user_id"];
    // Insère la note dans la base de données en utilisant la méthode createRating de la classe Rating
    Rating::createRating($rating, $user_id); // Assurez-vous d'avoir $user_id défini

    // Répond au client avec un message de succès (facultatif)
    // echo "Note insérée avec succès dans la base de données.";
}

if(isset($_GET['id'])) {
    $movie_id = $_GET["id"];

    if (Rating::checkIdMovieExists($movie_id)) {
        echo "Ce film existe déjà.";
    } else {
        Rating::addMovie($movie_id);
    }
}



// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-OneMovie.php');
?>
