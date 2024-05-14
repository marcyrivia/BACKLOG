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

    <!-- click 1-->
    <div class="click1">
      <div class="search-container">
        <label for="search"></label>
        <!-- Champ de saisie pour la recherche -->
        <input id="searchBar" name="search" class="searchBar" type="text" placeholder="Rechercher un film">
        <!-- Bouton de recherche -->
        <button class="buttonSearch" id="buttonSearch"> Rechercher</button>
      </div>
      <!-- Carte pour afficher les informations du film -->
      <div id="infos" class="card-container">
        <div class="card"></div>
      </div> 
      <!-- Icône de fermeture -->
      <i class="close bi bi-x"></i>
    </div>


    <div class="click2">
  <div class="search-container">
    <label for="searchBar2"></label>
    <!-- Champ de saisie pour la recherche -->
    <input id="searchBar2" name="searchBar2" class="searchBar" type="text" placeholder="Rechercher un film">
    <!-- Bouton de recherche -->
    <button id="buttonSearch2" class="buttonSearch">Rechercher</button>
  </div>
  <!-- Carte pour afficher les informations du film -->
  <div id="infos2" class="card-container"></div>
  <!-- Icône de fermeture -->
  <i class="close bi bi-x" id="close2"></i>
</div>



    <!-- click 3-->
    <div class="click3">
      <div class="search-container">
        <label for="search3"></label>
        <!-- Champ de saisie pour la recherche -->
        <input id="searchBar3" name="search" class="searchBar" type="text" placeholder="Rechercher un film">
        <!-- Bouton de recherche -->
        <button id="buttonSearch3" class="buttonSearch"> Rechercher</button>
      </div>
      <!-- Carte pour afficher les informations du film -->
      <div id="infos3" class="card-container">
        <div class="card"></div>
      </div> 
      <!-- Icône de fermeture -->
      <i class="close bi bi-x" id="close3"></i>
    </div>



    <!-- click 4-->
    <div class="click4">
      <div class="search-container">
        <label for="search4"></label>
        <!-- Champ de saisie pour la recherche -->
        <input id="searchBar4" name="search4" class="searchBar" type="text" placeholder="Rechercher un film">
        <!-- Bouton de recherche -->
        <button id="buttonSearch4" class="buttonSearch"> Rechercher</button>
      </div>
      <!-- Carte pour afficher les informations du film -->
      <div id="infos4" class="card-container">
        <div class="card"></div>
      </div> 
      <!-- Icône de fermeture -->
      <i class="close bi bi-x" id="close4"></i>
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
        <div class="movies" id="movies1"> <i class="bi bi-plus-lg" id="plus1"></i></div>
        <div class="movies" id="movies2"> <i class="bi bi-plus-lg" id="plus2"></i></div>
        <div class="movies" id="movies3"> <i class="bi bi-plus-lg" id="plus3" ></i></div>
        <div class="movies" id="movies4"> <i class="bi bi-plus-lg" id="plus4"></i></div>
        <input type="hidden" id="input1" name="fav_movie_1" value="">
        <input type="hidden" id="input2" name="fav_movie_2" value="">
        <input type="hidden" id="input13"name="fav_movie_3" value="">
        <input type="hidden" id="input4" name="fav_movie_4" value="">
      </div>
 

      <!-- Email -->
      <div class="infos-container">
        <hr class="lineBottom">
        <input class="inputEmail" name="user_email" type="text" value="<?= $_SESSION['user']['user_email']  ?>">
      </div>

      <!-- Boutons footer -->
      <div class="footerBtn">
        <!-- Bouton pour supprimer le compte -->
        <!-- Bouton pour sauvegarder les modifications -->
        <input class="valid" type="submit" value="Sauvegarder">
      </div>
    </form>
    <form action="" method="post" onsubmit="return confirm" (Voulez-vous supprimervotre profil ?)>
    <a href="../controllers/controller-deleteUser.php"><button class="delete">Supprimer mon compte <i class="bi bi-trash3-fill"></i></button></a>
    </form>
  </div>

  <!-- Scripts -->
  <script src="../assets/js/favGames.js"></script>
</body>
</html>
