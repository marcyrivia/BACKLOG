<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/randomizer.css" />
    <title>Élargissez vos horizons</title> <!-- Correction du titre pour une meilleure orthographe -->
</head>
<body>
    <!-- HEADER -->
    <?php include_once '../assets/header.php'; ?> 
    <!-- FIN DU HEADER -->

    <div class="container">
        <div class="spanP">
            <span class="presentation">
                Pour élargir votre culture... Cliquez sur le bouton, un film vous sera donné !
            </span>  
        </div>

        <div class="movie-container">
            <!-- js inner html -->
        </div>
        
        <div class="button-container">
            <button id="randomBtn" class="randomBtn">Randomizer</button> <!-- Correction de l'ID du bouton -->
        </div>
    </div>

    <!-- FOOTER -->
    <?php include_once '../assets/footer.php'; ?> 
    <!-- FIN DU FOOTER -->

    <script src="../assets/js/randomizer.js"></script> <!-- Correction du nom de fichier JavaScript -->
</body>
</html>
