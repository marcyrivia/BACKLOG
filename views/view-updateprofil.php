<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/updateProfil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Votre profil</title>
</head>
<body>


    <!-- INFORMARTIONS PROFIL -->
<div class="container">
<div class="click">
        <!-- <i class="bi bi-search"></i> -->
        <input id="searchBar" class="searchBar" type="text" placeholder="rechercher un film">
        <button class="close">Fermer </button>
      </div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="infos-container">
        <img src="../assets/img/<?= $user_picture ?>" class="user_picture" alt="">
        <input class="btnEditPicture" value="Changer" type="file" name="user_picture" accept="img/*">
        <span class="error"><?php if (isset($errors['user_picture'])) { echo $errors['user_picture']; } ?></span><br>

        <!-- Pseudo -->
        <input class="inputPseudo" name="user_pseudo" type="text" value="<?= $_SESSION['user']['user_pseudo']  ?>">
        <span> limite de 15 caractères </span>
   
        <!-- Message d'erreur pour le pseudo -->
        <span class="error"><?php if (isset($errors['user_pseudo'])) { echo $errors['user_pseudo']; } ?></span><br>
    </div>


    <div class="profil-container">

    <!-- description -->
      <div class="desc-container">
        <span class="desc">Description</span>
        <textarea class="descrInput" maxlength="1024" placeholder="Entrez une description"  type="text" name="user_descr"> <?= $_SESSION['user']['user_descr'] ?></textarea>
      </div>
      <h2 class="favgamestext">Vos Films Favoris</h2>
      <hr>
      <div class="favgames-container">
        <div class="games"> <i class="bi bi-plus-lg"></i></div>
        <div class="games "> <i class="bi bi-plus-lg"></i></div>
        <div class="games"> <i class="bi bi-plus-lg"></i></div>
        <div class="games"> <i class="bi bi-plus-lg"></i></div>
      </div>

      <!-- infos -->
      <div class="infos-container">
        <hr class="lineBottom">
      <input class="inputEmail" name="user_email" type="text" value="<?= $_SESSION['user']['user_email']  ?>">
      </div>

      <!-- footer bouton -->
      <div class="footerBtn">
        <button class="delete">Supprimer mon compte <i class="bi bi-trash3-fill"></i></button>
        <input class="valid" type="submit" value="Sauvegarder">
      </div>
      </form>
    </div>


</div>

    <!-- FIN INFORMARTIONS PROFIL -->
    
    <script src="../assets/js/favGames.js"></script>
</body>
</html>