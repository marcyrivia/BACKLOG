<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/header.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
  </head>
  <body>
    <header>
      <h1 class="logo">BackLogAfpa</h1>
      <div class="menu-burger">
        <i class="bi bi-list"></i>
      </div>
      <nav class="navbar">
        <ul class="nav-list">
        <!-- <form id="searchForm" action="../controllers/controller-results.php" method="POST">
          <label for="search"></label>
          <input
            type="text"
            name="search"
            id="searchBar"
            placeholder="Recherchez votre jeu"
          />
          <button id="boutonSearch"> Rechercher</button>
          </form> -->
          <li>
            <a href="../controllers/controller-home.php">Home</a>
          </li>
          <li>
            <a href="../controllers/controller-movies.php">Films</a>
          </li>
          <li>
            <a href="../controllers/controller-randomizer.php">Randomizer</a>
          </li>
          <li>
            <a href="../controllers/controller-profil.php">Profil</a>
          </li>
          <li>
            <a href="../controllers/controller-deconnect.php" class="deconnect"
              >Déconnexion</a
            >
          </li>
        </ul>
      </nav>
    </header>

    <!-- <script src="../assets/js/searchbar.js"></script> -->
    <script>
      hamburger = document.querySelector('.menu-burger');
      hamburger.onclick = function(){
        navBar = document.querySelector(".navbar")
        navBar.classList.toggle("active");
      }
    </script>
  </body>
</html>

<!-- <nav class="navbar">
            <ul class="nav-list">
                <li class="nav-li">Home</li>
                <li class="nav-li">Games</li>
                <li class="nav-li">List</li>
                <li class="nav-li">Profil</li>
                <li class="nav-li deconnect">Deconnexion</li>
            </ul>
            <label for="search"></label>
            <input type="text" name="search" id="search-bar" placeholder="Recherchez votre jeu">
        </nav> -->
