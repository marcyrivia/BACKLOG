<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <title>Créez un compte</title>
</head>
<body>
    <div class="container">
        <form action="controller-signup.php" method="POST" novalidate>
            <label for="user_pseudo">Pseudo</label> <br>
            <input type="text" name="user_pseudo" placeholder="entrez un pseudo" value="<?= isset($_POST['user_pseudo']) ? htmlspecialchars($_POST['user_pseudo']) : '' ?>">
            <span class="error">
            <?php if (isset($errors['user_pseudo'])) {
                echo $errors['user_pseudo'];
           } ?>
           </span>
           <label for="user_email">Email</label> <br>
           <input type="text" name="user_email" placeholder="entrez une adresse mail" value="<?= isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : '' ?>">
           <span class="error">
           <?php if (isset($errors['user_email'])) {
               echo $errors['user_email'];
           } ?>
           </span>
           <label for="user_password">Mot de passe:</label><br>
           <input type="password" id="password" name="user_password"
           value="<?= isset($_POST['passsword']) ? htmlspecialchars($_POST['user_password']) : '' ?>">
           <span class="error">
           <?php if (isset($errors['user_password'])) {
               echo $errors['user_password'];
           } ?>
           </span><br><br>

           <label for="confirm_password">Confirmer le mot de passe:</label><br>
           <input type="password" id="confirm_password" name="confirm_password"
           value="<?= isset($_POST['confirm_password']) ? htmlspecialchars($_POST['confirm_password']) : '' ?>">
          <span class="error">
          <?php if (isset($errors['confirm_password'])) {
             echo $errors['confirm_password'];
           } ?>
          </span><br><br>
          <input type="submit" value="S'enregistrer">
       </form>
    </div>
    <div class="signin-container">
    <p class="signin-p">Vous avez déjà un compte ? </p>
<a href="../controllers/controller-signin.php"><input class="signin" type="submit" value="Se connecter"> </input></a>
</div>
</body>
</html>