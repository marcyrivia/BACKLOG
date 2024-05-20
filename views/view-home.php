<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens vers les fichiers CSS -->
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <!-- Liens vers les bibliothèques externes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <title>Document</title>
</head>
<body>

<!-- HEADER -->
<?php include_once '../assets/header.php' ?>
<!-- FIN DU HEADER -->

<!-- Bienvenue section -->
<div class="bienvenue-container">
    <p class="welcome">Bienvenue, &nbsp;</p> 
    <p class="pseudo"><?php echo $user_pseudo ?> &nbsp;</p> 
    <img class="userPic" src="../assets/img/<?= $user_picture ?>" alt="">
</div>

<!-- Section des prochaines sorties -->
<div class="release-container">
    <h2>Prochaines sorties</h2>
    <hr>
    <div id="infos" class="card-container">
        <div class="card">
            
        </div>
    </div>
</div>
<!-- FIN PROCHAINES SORTIES -->

<!-- FOOTER -->
<?php include_once '../assets/footer.php' ?> 
<!-- FIN FOOTER -->

<!-- Scripts -->
<script src="../assets/js/home.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    // SCRIPT HEADER
    let hamburger = document.querySelector('.menu-burger');
    hamburger.onclick = function(){
        let navBar = document.querySelector(".navbar");
        navBar.classList.toggle("active");
    }
    // FIN SCRIPT HEADER
</script>
    
</body>
</html>
