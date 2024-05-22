<?php 
require_once '../models/rating.php';
require_once '../config/config.php';

session_start();


if(isset($_GET["id"])){
    $user_id = $_SESSION["user"]["user_id"];
    $movie_id = $_GET["id"];
    $result = Rating::getRatingByMovieId($movie_id, $user_id);
    $rating = $result["Note_score"];

    // var_dump($rating);
    // var_dump($result);
}



// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-OneMovie.php');
?>
