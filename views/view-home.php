<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>

<header>
      <a class="a-logo" href="../controllers/controller-home.php"><h1 class="logo">BackLogAfpa</h1></a>
      <div class="menu-burger">
        <i class="bi bi-list"></i>
      </div>
      <nav class="navbar">
        <ul class="nav-list">
          <label for="search"></label>
          <input
            type="text"
            name="search"
            id="search-bar"
            placeholder="Recherchez votre jeu"
          />
          <li>
            <a href="..controllers/controller-home.php">Acceuil</a>
          </li>
          <li>
            <a href="../controllers/controller-games.php">Jeux</a>
          </li>
          <li>
            <a href="../controllers/controller-list.php">Listes</a>
          </li>
          <li>
            <a href="../controllers/controller-profil.php"><?php echo $user_pseudo ?> <img class="userPicH" src="../assets/img/<?= $user_picture ?>" alt=""></a>
          </li>
          <li>
            <a href="../controllers/controller-deconnect.php" class="deconnect">Déconnexion</a
            >
          </li>
        </ul>
      </nav>
    </header>


<div class="bienvenue-container">
        <p class="welcome"> Bienvenue, &nbsp; </p> <p class="pseudo"> <?php echo $user_pseudo ?> &nbsp;</p> <img class="userPic" src="../assets/img/<?= $user_picture ?>" alt="">
</div>

<!-- PROCHAINES SORTIES -->
<div class="release-container">
  <h2>Prochaines sorties</h2>
  <div class="gamesRelease-conatainer">

  </div>
</div>
<!-- FIN PROCHAINES SORTIES -->

<!-- JEUX LES PLUS POPULAIRE -->
<div class="popular-container">
  <h2>Titre populaire </h2>
  <div class="popularGames-container">

  </div>
</div>
<!-- FIN JEUX LES PLUS POPULAIRE -->




<!-- FOOTER -->
<footer>
        <section>  
            

            <div id="containerFooter">
                
                <div id="webFooter">
                    <h3 class="shwim-footer"> BackLogAfpa </h3>
                    <p> Jeux </p>
                    <p> Listes </p>
                    <p> Profil </p>
                </div>

                <div id="webFooter">
                    <h3> Liens utiles </h3>
                    <a href="../controllers/controller-home.php"><p> Accueil </p></a>
                    <a href="https://www.igdb.com"><p> IGBD </p></a>
                    <a href="https://www.afpa.fr"><p> AFPA </p></a>
                </div>

                <div id="webFooter">
                    <h3> Adresse </h3>
                    <p> 135 rue du Madrillet </p>
                    <p> 76800 </p>
                    <p> Saint-Étienne-du-Rouvray </p>
                    <p> France </p>
                </div>

                <nav class="reseaux">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter-x"></i>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-pinterest"></i>
                </nav>

            </div>
            <div id="credit"><a href=""> <a href="" target="_blank"> Shamsddine </a></div>
        </section>

    </footer>
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