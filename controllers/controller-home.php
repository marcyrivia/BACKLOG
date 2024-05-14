<?php 
session_start();
if(isset($_SESSION["user"])){
// $date = date('d F Y');
$user_pseudo = $_SESSION['user']['user_pseudo'];
$user_picture = $_SESSION['user']['user_picture'];
}


if(isset($_POST['movie'])) {
    // Récupère la valeur de Note_score
    $movie_name = $_POST['movie_name'];
    // Insère la note dans la base de données en utilisant la méthode createRating de la classe Rating
    Rating::GetMovies($movie_id,  $movie_name,  $movie_release,  $movie_synopsis); // Assurez-vous d'avoir $user_id défini

    // Répond au client avec un message de succès (facultatif)
    // echo "Note insérée avec succès dans la base de données.";
}






?>













<?php


// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-home.php');
?>