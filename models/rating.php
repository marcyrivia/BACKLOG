<?php

require_once "../config/config.php";

class Rating {

    /**
     * Méthode permettant de créer un utilisateur
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
          $sql = "INSERT INTO `note`(`Note_score`, `user_id`, ) VALUES (:Note_score, :user_id,)";

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
}