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
    <div class="navbarP">
        <ul>
            <li>Profil</li>
            <li>Films</li>
        </ul>
    </div>
    <div class="profil-container">
      <div class="desc-container">
        <span class="desc">Description</span>
        <span class="descrP"><?= $user_descr ?></span>
    
      </div>
      <div class="favgames-container">
        <h2 class="favmovietext">Vos films favoris</h2>
      </div>
    </div>

</div>
    <!-- FIN INFORMARTIONS PROFIL -->


       <!-- FOOTER -->
       <?php include_once '../assets/footer.php' ?> 
<!-- FIN FOOTER -->

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