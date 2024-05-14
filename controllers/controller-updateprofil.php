<?php
require_once "../config/config.php";
require_once "../models/userprofil.php";


session_start();

if (isset($_SESSION['user'])) {
  $user_id = $_SESSION['user']['user_id'];
  $user_picture = $_SESSION['user']['user_picture'];
  $fav_movie_1 = $_SESSION["user"]["fav_movie_1"];
  $fav_movie_2 = $_SESSION["user"]["fav_movie_2"];
  $fav_movie_3 = $_SESSION["user"]["fav_movie_3"];
  $fav_movie_4 = $_SESSION["user"]["fav_movie_4"];


}

if (!isset($_SESSION["user"])) {
  // Si l'utilisateur n'est pas connecté, on le renvoie vers la page de connexion 
  header("Location: ../controller-signin.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification du fichier uploadé et autres traitements...
  

    // Tableau pour stocker les erreurs
    $errors = [];
    
    if (empty($_POST["user_pseudo"])) {
        $errors["user_pseudo"] = "Champ obligatoire";
      } else if (!preg_match("/^[a-zA-ZÀ-ÿ\d]+$/", $_POST["user_pseudo"])) {
        $errors["user_pseudo"] = "Seules les lettres et les chiffres sont autorisés dans le champ Pseudo";
      } else if (User::checkPseudoExists($_POST["user_pseudo"]) && $_POST["user_pseudo"] != $_SESSION["user"]["user_pseudo"]) {
        $errors["user_pseudo"] = 'Pseudo déjà utilisé';
      }


    // Contrôle de l'email 
  if (empty($_POST["user_email"])) {
    $errors["user_email"] = "Champ obligatoire";
  } else if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
    $errors["user_email"] = "Le format de l'adresse email n'est pas valide";
  } else if (User::checkEmail($_POST["user_email"]) && $_POST["user_email"] != $_SESSION["user"]["user_email"]) {
    $errors["user_email"] = 'Adresse mail déjà utilisé';
  }
  
  
  


  if ($_FILES["user_picture"]['error'] == 0) {



    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["user_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
      $check = getimagesize($_FILES["user_picture"]["tmp_name"]);
      if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }


    // Check file size
    if ($_FILES["user_picture"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedExtensions = array("jpg", "jpeg", "png", "webp");
    if (!in_array($imageFileType, $allowedExtensions)) {
      echo "Sorry, only JPG, JPEG, PNG & WEBP files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["user_picture"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["user_picture"]["name"])) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $user_picture = $_FILES["user_picture"]["name"];
  } else {
    $user_picture =  $_SESSION["user"]["user_picture"];
  }

// Récupération des données du formulaire
$user_id = $_SESSION["user"]["user_id"];
// $user_picture = $_POST['user']['user_picture'];
$user_pseudo = $_POST["user_pseudo"];
$user_email = $_POST["user_email"];
$user_descr = $_POST["user_descr"];
$fav_movie_1 = $_POST["fav_movie_1"];
$fav_movie_2 = $_POST["fav_movie_2"];
$fav_movie_3 = $_POST["fav_movie_3"];
$fav_movie_4 = $_POST["fav_movie_4"];
//  $user_picture = $_FILES["user_picture"];


// Mettez à jour le profil
var_dump($_POST);
User::modifier($user_id, $user_pseudo, $user_email, $user_picture, $user_descr, $fav_movie_1, $fav_movie_2, $fav_movie_3, $fav_movie_4);

$_SESSION["user"] = User::getAll($user_pseudo);
header("Location: controller-profil.php");
exit();
}






include_once("../views/view-updateprofil.php");
?>