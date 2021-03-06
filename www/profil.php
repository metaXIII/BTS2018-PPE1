<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 14:45
 */
require 'fonctions/fonction.php';
$result = infoProfil($_SESSION['user']);
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
        <h3>Mettre à jour votre profil</h3>
        <form action="connection/update-user.php" method="post">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="form-group">
                <label for="email">Votre adresse email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                       placeholder="<?= $result['email'] ?>" name="email">
                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse
                    email avec une tierce personne
                </small>
            </div>
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" placeholder="<?= $result['username'] ?>"
                       required>
            </div>
            <div class="form-group">
                <label for="password">Nouveau mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="********"
                       name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">confirmez le nouveau mot de passe</label>
                <input type="password" class="form-control" name="confirmPassword" placeholder="********"
                       required>
            </div>
            <button type="submit" class="btn btn-orange">Modifier mon profil</button>
        </form>

        <a href="connection/delete-user.php?id=<?= $result['id'] ?>" class="btn btn-danger">Supprimer le compte</a>
    </div>


</main>
<?php require 'includes/footer.php'; ?>
</body>
</html>
