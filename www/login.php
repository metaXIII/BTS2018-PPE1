<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 05/03/2018
 * Time: 00:27
 */

/**
 * Déconnexion
 */

require 'fonctions/fonction.php';
if (isset($_GET['disconnect'])) {
    userDisconnect();
    header("Location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'includes/head.php'; ?>
</head>
<body>

<?php require 'includes/header.php'; ?>

<main role="main" class="pt-0 pr-0 col-lg-11 pl-0 col-md-12 col-sm-12 col-xs-12 main container min-height650">

    <div class="row row-offcanvas row-offcanvas-right mr-auto ml-auto ml-5 pr-0 mb-5 col-lg-12 col-sm-12
    fondCuisine">
        <?php require 'includes/menu.php'; ?>
    </div>

    <?php
    if ($error) {
        printError($error);
    }
    ?>
    <div class="col-lg-4 m-auto">
        <form action="connection/connection.php" method="post">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" placeholder="Entrez votre nom d'utilisateur">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Votre mot de passe">
            </div>
            <button type="submit" class="btn btn-orange">Se connecter</button>
        </form>
        <p class="text-right">
            <a href="new-user.php">Vous n'êtes pas inscrit?</a>
            <br>
            <a href="forgot-password.php">Réinitialiser son mot de passe</a>
        </p>
    </div>


</main>
<?php require 'includes/footer.php'; ?>
</body>
</html>

