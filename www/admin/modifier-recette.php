<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 16:50
 */

require '../fonctions/fonction.php';
require '../class/Database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de cuisine - découverte culinaire">
    <meta name="author" content="metaXIII">
    <link rel="icon" href="../images/Wallpapers/icone.jpg">
    <title>Food'n Drink - La cuisine pour les passionnés</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <!--custom css -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<main role="main" class="pt-0 pr-0 col-lg-12 pl-0 col-md-12 col-sm-12 col-xs-12 main container min-height650">

    <div class="row row-offcanvas row-offcanvas-right mr-auto ml-auto ml-5 pr-0 mb-5 col-lg-12 col-sm-12
    fondCuisine">
        <?php require 'includes/menu.php'; ?>
    </div>
    <div class="col-lg-4 m-auto">
        <?php
        if ($error)
            printError($error);
        ?>
        <form action="connection/ajout-recette.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="user" value="<?= $_SESSION['user'] ?>">
            <h3>Ajouter une recette</h3>
            <div class="form-group">
                <label for="username">Intitule de la recette</label>
                <input type="text" class="form-control" name="intitule" placeholder="Entrez le nom du plat" required>
            </div>
            <p>C'est : </p>
            <div class="form-check form-check-inline">
                <label><span>Un plat </span><input type="checkbox" name="plat" value="1"></label>
            </div>
            <div class="form-check form-check-inline">
                <label><input type="checkbox" name="plat" value="2"><span> Une boisson</span></label>
            </div>
            <div class="form-group">
                <label for="contenu">Accroche</label>
                <input type="text" class="form-control" name="accroche" placeholder="Accroche de la recette" required>
            </div>
            <div class="form-group">
                <label for="contenu">Préparation</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div id="ingredient1">
                <label for="ingredient1">Ingrédient 1</label>
                <input type="text" name="ingredient1" placeholder="Ingredients" class="form-control" required>
                <br>
                <button class="font-weight-bold" onclick="AddInput(2);return false;">Ajouter un Ingredient</button>
            </div>
            <div>
                <label for="image">Image : </label>
                <input type="file" name="file" class="form-control" required>
            </div>
            <br><br>
            <button type="submit" class="btn btn-orange">Modifier le contenu</button>
        </form>
    </div>
    <div class="clearboth"></div>
</main>
<?php require 'includes/footer.php' ?>
<script src="js/addIngredient.js"></script>
<script src="js/checkboxCheck.js"></script>
</body>
</html>
