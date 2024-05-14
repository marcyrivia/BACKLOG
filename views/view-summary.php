<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synthèse d'inscription</title>
    <link rel="stylesheet" href="../assets/css/summary.css">
</head>

<body>
    <div class="container">
        <h2>Synthèse d'inscription</h2>

    <p>Merci pour votre inscription !</p>

    <?php

    echo "<p>Pseudo : $user_pseudo</p>";
    echo "<p>Email : $user_email</p>";

    ?>

    <p>Un email de confirmation a été envoyé à
        <?php echo $user_email; ?>.
    </p>
    
    </div>
    <div class="connexion">
    <a href="../controllers/controller-signin.php"><button> Se connecter </button></a>
</div>

</body>

</html>