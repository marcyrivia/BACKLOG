<?php

require_once "../config/config.php";

class Rating {

    /**
     *
     * @param int    $Note_id 
     * @param string $Note_score        
     */

     public static function createRating(string $Note_score, int $user_id){

        try {

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
          // Paramétrage des erreurs PDO pour les afficher en cas de problème
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // Requête SQL d'insertion des données dans la table userprofil
          $sql = "INSERT INTO `note`(`Note_score`, `user_id`) VALUES (:Note_score, :user_id)";

          // Préparation de la requête
          $query = $db->prepare($sql);

          // Liaison des valeurs avec les paramètres de la requête
          $query->bindValue(':Note_score', htmlspecialchars($Note_score), PDO::PARAM_STR);
          $query->bindValue(':user_id', $user_id, PDO::PARAM_INT);
         

          // Exécution de la requête
          $query->execute();
      } catch (PDOException $e) {
          // En cas d'erreur, affichage du message d'erreur et arrêt du script
          echo "Erreur : " . $e->getMessage();
          die();
      }

     }

     public static function addMovie(string $movie_id){

        // Création de l'objet PDO pour la connexion à la base de données
        $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
        // Paramétrage des erreurs PDO pour les afficher en cas de problème
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL d'insertion des données dans la table userprofil
        $sql = "INSERT INTO `movie`(`movie_id`) VALUES (:movie_id)";

        // Préparation de la requête
        $query = $db->prepare($sql);

        // Liaison des valeurs avec les paramètres de la requête
        $query->bindValue(':movie_id', $movie_id, PDO::PARAM_INT);
        // $query->bindValue(':movie_name', htmlspecialchars($movie_name), PDO::PARAM_STR);
        // $query->bindValue(':Note_score', htmlspecialchars($movie_release), PDO::PARAM_STR);
        // $query->bindValue(':Note_score', htmlspecialchars($movie_synopsis), PDO::PARAM_STR);
       

        // Exécution de la requête
        $query->execute();

     }

     public static function checkIdMovieExists(int $movie_id)
     {
         // le try and catch permet de gérer les erreurs, nous allons l'utiliser pour gérer les erreurs liées à la base de données
         try {
             // Création d'un objet $db selon la classe PDO
             $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
 
             // stockage de ma requete dans une variable
             $sql = "SELECT COUNT(*) FROM `movie` WHERE `movie_id` = :movie_id";
 
             // je prepare ma requête pour éviter les injections SQL
             $query = $db->prepare($sql);
 
             // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
             $query->bindValue(':movie_id', $movie_id, PDO::PARAM_INT);
 
             // on execute la requête
             $query->execute();
 
             // on récupère le résultat de la requête dans une variable
             $result = $query->fetch(PDO::FETCH_ASSOC);
 
             // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que le pseudo n'existe pas
             if (empty($result)) {
                 return false;
             } else {
                 return true;
             }
         } catch (PDOException $e) {
             echo 'Erreur : ' . $e->getMessage();
             die();
         }
     }
}