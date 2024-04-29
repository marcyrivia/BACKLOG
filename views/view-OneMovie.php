<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="../assets/css/oneMovie.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Titre du film</title>
</head>
<body>
        <!-- HEADER -->
        <?php include_once '../assets/header.php' ?> 
    <!-- FIN DU HEADER -->
    <div class="container-fluid">
        <div class="container">
            <div id="movie-image-container"></div>
            <h1 id="movie-title">Titre du Film</h1>
            <span id="rated-movie">**%</span>
        </div>

        <form action="controller-oneMovie.php" method="post"></form>
        <div class="star-container">
        <i class=" stars bi-star-fill"></i>
        <i class=" stars bi-star-fill"></i>
        <i class=" stars bi-star-fill"></i>
        <i class=" stars bi-star-fill"></i>
        <i class=" stars bi-star-fill"></i>
      </div>
      
      <div class="navbar-infos">
          <span id="movie-duration">Durée du Film</span>
          <span id="movie-release-date">Date de sortie</span>
        </div>
        
        <div class="synopsis-container">
            <h2 class="synopsis">Synopsis :</h2>
            <span id="movie-synopsis">Synopsis du Film</span>
        </div>
    </div>
    <!-- FOOTER  -->
    <?php include_once '../assets/footer.php' ?> 
    <!-- FIN FOOTER -->
    
    <script src="../assets/js/Onemovies.js"></script>
    <script src="../assets/js/rating.js"></script>
</body>
</html>