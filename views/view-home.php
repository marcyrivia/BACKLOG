<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <title>Document</title>
</head>
<body>

<!-- HEADER -->
     <?php include_once '../assets/header.php' ?> 
    <!-- FIN DU HEADER -->


<div class="bienvenue-container">
        <p class="welcome"> Bienvenue, &nbsp; </p> <p class="pseudo"> <?php echo $user_pseudo ?> &nbsp;</p> <img class="userPic" src="../assets/img/<?= $user_picture ?>" alt="">
</div>

<!-- PROCHAINES SORTIES -->
<div class="release-container">
  <h2>Prochaines sorties</h2>
  <hr>
  <div id="infos" class="card-container">
        <div class="card">
          
        </div>

  <!-- <input type="radio" name="position" checked />
  <input type="radio" name="position" />
  <input type="radio" name="position" />
  <input type="radio" name="position" />
  <input type="radio" name="position" />
  <main id="carousel">
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <div class="item"></div>
    <main>
  </div> -->

  
</div>
<!-- FIN PROCHAINES SORTIES -->

<!-- JEUX LES PLUS POPULAIRE -->
<div class="popular-container">
  <h2>Films populaire </h2>
  <div class="carousel-upcoming">

  </div>
  <hr class="hrDeux">
  <div class="popularGames-container">

  </div>
</div>
<!-- FIN JEUX LES PLUS POPULAIRE -->




     <!-- FOOTER -->
     <?php include_once '../assets/footer.php' ?> 
<!-- FIN FOOTER -->

<script src="../assets/js/home.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
      // SCRIPT HEADER
      hamburger = document.querySelector('.menu-burger');
      hamburger.onclick = function(){
        navBar = document.querySelector(".navbar")
        navBar.classList.toggle("active");
      }
      // FIN SCRIPT HEADER
    </script>
    
</body>
</html>