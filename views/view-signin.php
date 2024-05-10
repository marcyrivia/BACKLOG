<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclusion de la feuille de style CSS -->
    <link rel="stylesheet" href="../assets/css/signin.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="connect-container">
            <form action="controller-signin.php" method="POST" novalidate>
            <!-- Champ pour le pseudo -->
            <label for="user_pseudo" class="pseudoH1"> Pseudo :
                <?php
                // Vérifie si le pseudo a été soumis et s'il est vide
                if (isset($_POST['user_user_pseudo']) && empty($_POST["user_pseudo"])) {
                    echo '<span style="color: red;">Champ obligatoire.</span>';
                }
                ?>
            </label><br>
            <!-- Champ pour saisir le pseudo -->
            <input type="text" name="user_pseudo" class="user_pseudo" placeholder="entrez votre pseudo" value="<?php echo htmlspecialchars($user_pseudo ?? ''); ?>">
            <br>
            <!-- Champ pour le mot de passe -->
            <label for="password" class="passwordH1">Mot de passe:
                <?php
                // Vérifie si le mot de passe a été soumis et s'il est vide
                if (isset($_POST['user_password']) && empty($_POST["user_password"])) {
                    echo '<span style="color: red;">Champ obligatoire.</span>';
                }
                ?>
            </label><br>
            <!-- Champ pour saisir le mot de passe -->
            <input type="password" id="password" name="user_password" class="user_password" placeholder="entrez votre mot de passe" value="">
            <br>
            <!-- Affichage des erreurs de connexion -->
            <p><?= $errors["connexion"] ?? "" ?></p> <br>
            <!-- Bouton de soumission du formulaire -->
            <input type="submit" class="connexion" value="Se connecter">
        </form>
        <!-- Lien pour créer un compte -->
        </div>
        
    </div>
    <div class="sign-up">
        <p class="signp">Créer un compte ? </p>
        <!-- Lien vers le contrôleur pour créer un compte -->
        <a href="../controllers/controller-signup.php"><input class="signin" type="submit" value="Créer un compte"> </input></a>
    </div>
</body>
</html>
