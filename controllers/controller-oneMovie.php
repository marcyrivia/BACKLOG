<?php 
include_once '../models/rating.php';
session_start();
if(isset($_SESSION["user"])){
// $date = date('d F Y');
$user_pseudo = $_SESSION['user']['user_pseudo'];
$user_picture = $_SESSION['user']['user_picture'];
}




// Inclure votre fichier qui contient la fonction createRating




?>

















<?php


// Contrôleur - Gestion de la logique métier

// Vérifications et traitements du formulaire ici

// Inclusion de la vue
include_once('../views/view-OneMovie.php');
?>