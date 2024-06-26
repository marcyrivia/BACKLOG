<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/profil.css">
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Votre profil</title>
</head>
<body>

<!-- HEADER -->
     <?php include_once '../assets/header.php' ?> 
    <!-- FIN DU HEADER -->

    <!-- INFORMARTIONS PROFIL -->
<div class="container">
    <div class="infos-container">
        <img src="../assets/img/<?= $user_picture ?>" class="userPic" alt="">
        <h2 class="pseudoP"> <?= $user_pseudo ?> </h2>
      <a class="btnLink" href="../controllers/controller-updateprofil.php"><button class="btnEdit" role="button"> Modifier le profil </button></a>
    </div>

    <div class="profil-container">
      <div class="desc-container">
        <span class="desc">Description</span>
        <span class="descrP"><?= $user_descr ?></span>
    
      </div>
      <div class="favMovies-container">
        <h2 class="favmovietext">Vos films favoris</h2>
        <hr>
        <div class="containerDiv">
        <div class="favorite-movies">
    <?php
    if (!empty($fav_movie_1)) {echo '<div class="movie-container" id="movie1" value="' . ($fav_movie_1) . '"></div>'; }
    if (!empty($fav_movie_2)) { echo '<div class="movie-container" id="movie2" value="' . ($fav_movie_2) . '"></div>';}
    if (!empty($fav_movie_3)) { echo '<div class="movie-container" id="movie3" value="' . ($fav_movie_3) . '"></div>'; }
    if (!empty($fav_movie_4)) {echo '<div class="movie-container" id="movie4" value="' . ($fav_movie_4) . '"></div>'; }
    ?>
</div>

        </div>
       
      </div>

<!-- DERNIERES ACTIVVITES -->

<!-- <div class="lastest-activity-container">
    <h2 class="lastest-activity">Dernieres Activités</h2>
    <hr>
    <div id="infos" class="card-container">
        <div class="latest-activity-card">
          <div class="movie-container" name="last_activity1"></div>
          <div class="movie-container" name="last_activity2"></div>
          <div class="movie-container" name="last_activity3"></div>
          <div class="movie-container" name="last_activity4"></div>
        </div>
    </div>
</div>

    </div> -->

</div>
    <!-- FIN INFORMARTIONS PROFIL -->


       <!-- FOOTER -->
       <?php include_once '../assets/footer.php' ?> 
<!-- FIN FOOTER -->

<script src="../assets/js/profil.js"></script>
    
</body>
</html>