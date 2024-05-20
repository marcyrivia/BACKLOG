<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Lien vers le fichier CSS pour le header -->
    <link rel="stylesheet" href="../assets/css/header.css" />
    <!-- Lien vers la bibliothèque Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- Logo du site -->
        <h1 class="logo">BackLogAfpa</h1>
        <!-- Menu burger pour les petits écrans -->
        <div class="menu-burger">
            <i class="bi bi-list"></i>
        </div>
        <!-- Barre de navigation -->
        <nav class="navbar">
            <ul class="nav-list">
    
                <!-- Liens de navigation -->
                <li><a href="../controllers/controller-home.php">Home</a></li>
                <li><a href="../controllers/controller-movies.php">Films</a></li>
                <li><a href="../controllers/controller-randomizer.php">Randomizer</a></li>
                <li><a href="../controllers/controller-profil.php">Profil</a></li>
                <li><a href="../controllers/controller-deconnect.php" class="deconnect">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <!-- Script pour le fonctionnement du menu burger -->
    <script>
        let hamburger = document.querySelector('.menu-burger');
        hamburger.onclick = function() {
            let navBar = document.querySelector(".navbar");
            navBar.classList.toggle("active");
        }
    </script>
</body>
</html>
