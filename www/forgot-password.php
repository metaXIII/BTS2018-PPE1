<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 05/03/2018
 * Time: 00:50
 */
require 'fonctions/fonction.php'; ?>

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
    <div class="col-5 m-auto">
        <form action="connection/forgot-password.php" method="post" id="Form">
            <div class="form-group">
                <label for="email">Votre adresse email</label>
                <input type="email" class="form-control" id="email"
                       placeholder="adresse mail" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" placeholder="Votre nom d'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="password">Nouveau mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Nouveau mot de passe" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Nouveau mot de passe</label>
                <input type="password" class="form-control" name="confirmPassword" placeholder="Nouveau mot de passe"
                       required>
            </div>
            <button type="submit" class="btn btn-orange">Réinitialiser votre mot de passe</button>
        </form>
    </div>

</main>
<?php require 'includes/footer.php'; ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js/holder.min.js"></script>
</body>
</html>
