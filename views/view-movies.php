<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../assets/css/header.css" /> -->
    <link rel="stylesheet" href="../assets/css/footer.css" />
    <link rel="stylesheet" href="../assets/css/movies.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Films</title>
</head>
<body>
    <!-- HEADER -->
    <?php include_once '../assets/header.php' ?> 
    <!-- FIN DU HEADER -->

    <div class="container-all">
        <div class="search-container">
            <label for="search"></label>
            <input type="text" name="search" id="searchBar" placeholder="Recherchez un film" />
            <button id="buttonSearch"> Rechercher</button>
        </div>
        <div class="button-container">
            <button id="latestBtn" class="latestBtn">Dernières Sorties</button>
            <button id="topRatedBtn" class="topRatedBtn">Mieux notés</button>
        </div>

        <div id="latest"></div>
        <div id="topRated"></div>
        <div id="infos" class="card-container">
            <div class="card"></div>
        </div> 
    </div>
    
    <!-- FOOTER -->
    <?php include_once '../assets/footer.php' ?> 
    <!-- FIN FOOTER -->

    <script type="module" src="../assets/js/movies.js"></script>
</body>
</html>
