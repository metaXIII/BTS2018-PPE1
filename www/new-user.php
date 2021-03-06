<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 05/03/2018
 * Time: 00:39
 */

require 'fonctions/fonction.php';
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

    <div class="col-5 m-auto">

        <?php
        if ($error)
            printError($error);
        ?>
        <form action="connection/new-user.php" method="post">
            <div class="form-group">
                <label for="email">Votre adresse email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                       placeholder="adresse mail" name="email">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse
                    email avec une tierce personne
                </small>
            </div>
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" placeholder="Votre nom d'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Votre mot de passe"
                       name="password" required>
            </div>
            <button type="submit" class="btn btn-orange">Envoyer votre demande d'inscription</button>
        </form>
    </div>


</main>
<?php require 'includes/footer.php'; ?>
</body>
</html>
