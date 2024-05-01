<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/updateProfil.css">
    <!-- Lien vers les icônes Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Votre profil</title>
</head>
<body>
  
  <div class="container">

    <!-- Barre de recherche -->
    <div class="click">
      <div class="search-container">
        <label for="search"></label>
        <!-- Champ de saisie pour la recherche -->
        <input id="searchBar" name="search" class="searchBar" type="text" placeholder="Rechercher un film">
        <!-- Bouton de recherche -->
        <button id="buttonSearch"> Rechercher</button>
      </div>
      <!-- Carte pour afficher les informations du film -->
      <div id="infos" class="card-container">
        <div class="card"></div>
      </div> 
      <!-- Icône de fermeture -->
      <i class="close bi bi-x"></i>
    </div>


    <!-- Informations du profil -->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="infos-container">
        <!-- Image de profil -->
        <img src="../assets/img/<?= $user_picture ?>" class="user_picture" alt="">
        <!-- Bouton pour changer l'image de profil -->
        <input class="btnEditPicture" value="Changer" type="file" name="user_picture" accept="img/*">
        <!-- Message d'erreur pour l'image de profil -->
        <span class="error"><?php if (isset($errors['user_picture'])) { echo $errors['user_picture']; } ?></span><br>

        <!-- Pseudo -->
        <input class="inputPseudo" name="user_pseudo" type="text" value="<?= $_SESSION['user']['user_pseudo']  ?>">
        <!-- Limite de caractères pour le pseudo -->
        <span> Limite de 15 caractères </span>
        <!-- Message d'erreur pour le pseudo -->
        <span class="error"><?php if (isset($errors['user_pseudo'])) { echo $errors['user_pseudo']; } ?></span><br>
      </div>

      <!-- Description -->
      <div class="desc-container">
        <span class="desc">Description</span>
        <!-- Champ de saisie pour la description -->
        <textarea class="descrInput" maxlength="1024" placeholder="Entrez une description"  type="text" name="user_descr"> <?= $_SESSION['user']['user_descr'] ?></textarea>
      </div>

      <!-- Titre des films favoris -->
      <h2 class="favgamestext">Vos Films Favoris</h2>
      <hr>
      <!-- Conteneur pour afficher les films favoris -->
      <div class="favgames-container">
        <div class="games"> <i class="bi bi-plus-lg"></i></div>
        <div class="games "> <i class="bi bi-plus-lg"></i></div>
        <div class="games"> <i class="bi bi-plus-lg"></i></div>
        <div class="games"> <i class="bi bi-plus-lg"></i></div>
      </div>

      <!-- Email -->
      <div class="infos-container">
        <hr class="lineBottom">
        <input class="inputEmail" name="user_email" type="text" value="<?= $_SESSION['user']['user_email']  ?>">
      </div>

      <!-- Boutons footer -->
      <div class="footerBtn">
        <!-- Bouton pour supprimer le compte -->
        <a href="../controllers/controller-deleteUser.php"><button class="delete">Supprimer mon compte <i class="bi bi-trash3-fill"></i></button></a>
        <!-- Bouton pour sauvegarder les modifications -->
        <input class="valid" type="submit" value="Sauvegarder">
      </div>
    </form>
  </div>

  <!-- Scripts -->
  <script src="../assets/js/favGames.js"></script>
</body>
</html>
