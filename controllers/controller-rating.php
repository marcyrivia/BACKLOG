<?php 
require_once '../models/rating.php';
require_once '../config/config.php';

session_start();
// var_dump($_SESSION);
// Assurez-vous que la classe Rating est incluse dans votre fichier PHP


    // $date = date('d F Y');

 
    var_dump($_GET);

// Vérifie si la valeur de Note_score a été envoyée via POST
if(isset($_GET['rating'])) {
    // Récupère la valeur de Note_score
    $rating = $_GET['rating'];
    $movie_id = $_GET['movieId'];
    $user_id = $_SESSION["user"]["user_id"];
    // Insère la note dans la base de données en utilisant la méthode createRating de la classe Rating
    Rating::createRating($rating, $movie_id, $user_id); // Assurez-vous d'avoir $user_id défini
    


}


include_once("../views/view-oneMovie.php");
?>
