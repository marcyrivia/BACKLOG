<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Connexion</title>
</head>
<body>
    <div class="container">
    <form action="controller-signin.php" method="POST" novalidate>
    <label for="user_pseudo"> Pseudo :
    <?php
    // Vérifie si le pseudo a été soumis et s'il est vide
    if (isset($_POST['user_user_pseudo']) && empty($_POST["user_pseudo"])) {
        echo '<span style="color: red;">Champ obligatoire.</span>';
    }
    ?>
</label><br>
<input type="text" name="user_pseudo" class="user_pseudo" placeholder="entrez votre pseudo" value="<?php echo htmlspecialchars($user_pseudo ?? ''); ?>">
<br>
<label for="password">Mot de passe:
    <?php
    // Vérifie si le mot de passe a été soumis et s'il est vide
    if (isset($_POST['user_password']) && empty($_POST["user_password"])) {
        echo '<span style="color: red;">Champ obligatoire.</span>';
    }
    ?>
</label><br>
<input type="password" id="password" name="user_password" placeholder="entrez votre mot de passe" value="">
        <br>
        <!-- Affichage des erreurs de connexion -->
        <p><?= $errors["connexion"] ?? "" ?></p> <br>
        <input type="submit" class="connexion" value="Se connecter">
    </form>
    <!-- <div class="sign-up">
    <p class="signp">Créer un compte ? </p>
<a href="../controllers/controller-signup.php"><input class="signin" type="submit" value="Créer un compte"> </input></a> -->
</div>
    </div>
</body>
</html>