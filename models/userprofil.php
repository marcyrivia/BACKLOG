<?php

require_once "../config/config.php";

class User
{
    
    /**
     * Méthode permettant de créer un utilisateur
     *
     * @param int    $user_validate   Validation de l'utilisateur
     * @param string $user_pseudo         Pseudo de l'utilisateur
     * @param string $user_email          Adresse mail de l'utilisateur
     * @param string $user_password       Mot de passe de l'utilisateur
     */

    public static function createUseprofil(int $user_validate, string $user_pseudo, string $user_email, string $user_password)
    {

        try {

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "INSERT INTO `userprofil`(`user_validate`,`user_pseudo`, `user_email`, `user_password`)  VALUES (:user_validate, :user_pseudo, :user_email,  :user_password)";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            $query->bindValue(':user_validate',intval($user_validate), PDO::PARAM_INT);
            $query->bindValue(':user_pseudo', htmlspecialchars($user_pseudo), PDO::PARAM_STR);
            $query->bindValue(':user_email', htmlspecialchars($user_email), PDO::PARAM_STR);
            $query->bindValue(':user_password', password_hash($user_password, PASSWORD_DEFAULT), PDO::PARAM_STR); // Utilisation de l'algorithme PASSWORD_DEFAULT


            // Exécution de la requête SQL
            $query->execute();
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }

    public static function checkPseudo(string $user_pseudo)
    {

        try {

            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = "SELECT user_pseudo FROM `userprofil` WHERE `user_pseudo` = :user_pseudo";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':user_pseudo', $user_pseudo, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que le pseudo n'existe pas
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }

    public static function checkEmail(string $user_email)
    {

        try {

            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = "SELECT user_email FROM `userprofil` WHERE `user_email` = :user_email";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':user_email', $user_email, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que le pseudo n'existe pas
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    }

    public static function checkPseudoExists(string $user_pseudo)
    {
        // le try and catch permet de gérer les erreurs, nous allons l'utiliser pour gérer les erreurs liées à la base de données
        try {
            // Création d'un objet $db selon la classe PDO
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

            // stockage de ma requete dans une variable
            $sql = "SELECT * FROM `userprofil` WHERE `user_pseudo` = :user_pseudo";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':user_pseudo', $user_pseudo, PDO::PARAM_STR);

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

    public static function getAll(string $user_pseudo)
    {

        try {

            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = "SELECT * FROM `userprofil` WHERE `user_pseudo` = :user_pseudo";

            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);

            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':user_pseudo', $user_pseudo, PDO::PARAM_STR);

            // on execute la requête
            $query->execute();

            // on récupère le résultat de la requête dans une variable
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // on vérifie si le résultat est vide car si c'est le cas, cela veut dire que le pseudo n'existe pas
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    } 
    public static function modifier(int $user_id, string $user_pseudo, string $user_email, string $user_picture, string $user_descr)
    {
        try {
            // Création d'un objet $db selon la classe PDO
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
    
            // stockage de ma requete dans une variable
            $sql = "UPDATE `userprofil` SET  `user_pseudo` = :user_pseudo, `user_email` = :user_email, `user_picture` = :user_picture,  `user_descr` = :user_descr WHERE `user_id` = :user_id";
    
            // je prepare ma requête pour éviter les injections SQL
            $query = $db->prepare($sql);
    
            // on relie les paramètres à nos marqueurs nominatifs à l'aide d'un bindValue
            $query->bindValue(':user_id', $user_id, PDO::PARAM_INT);
            $query->bindValue(':user_pseudo', htmlspecialchars($user_pseudo), PDO::PARAM_STR);
            $query->bindValue(':user_email', htmlspecialchars($user_email), PDO::PARAM_STR);
            $query->bindValue(':user_picture', htmlspecialchars($user_picture), PDO::PARAM_STR);
            $query->bindValue(':user_descr', htmlspecialchars($user_descr), PDO::PARAM_STR);
                
    
            // on execute la requête
            $query->execute();
    
            // // Vérifie si la mise à jour a réussi
            // $affectedRows = $query->rowCount();
            // if ($affectedRows == 0) {
            //     throw new Exception("La mise à jour du profil a échoué.");
            // }
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            die();
        }
    } 
    
    public static function deleteUser(int $user_id)
    {


        try {



            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM `userprofil` WHERE `user_id` = :user_id";
            // Préparation de la requête
            $query = $db->prepare($sql);
            $query->bindValue(":user_id", $user_id, PDO::PARAM_INT);
            $query->execute();
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }

}