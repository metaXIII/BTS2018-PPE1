<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 16:25
 */

require '../fonctions/fonction.php';
require '../class/Database.php';
$db = Database::getPdo();
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
        <?php require '../includes/menu.php'; ?>
    </div>

    <div class="ml-auto mr-auto col-10">
        <h3>Nouvelles recettes</h3>
        <?php
        $query = $db->prepare("SELECT * from recette WHERE actif Like '0'");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="row bg-light">
                <div class="col-lg-4">
                    <?php
                    if ($result['typeProduit'] == "1")
                        $img = "../images/recette/" . $result['image'];
                    if ($result['typeProduit'] == "2")
                        $img = "../images/cocktail/" . $result['image'];
                    ?>
                    <img src="<?= $img ?>" alt="Image de la recette" width="100%">
                </div>
                <div class="col-lg-5 offset-1">
                    <div class="row">
                        <h5><?= $result['intitule'] ?></h5>
                    </div>
                    <div class="row">
                        <p><?= $result['accroche'] ?></p>
                    </div>
                    <div class="row">
                        <a href="../recette.php?id=<?= $result['id'] ?>" class="btn btn-success" target="_blank">Vérifier
                            la
                            recette</a>
                        <span>&nbsp;</span>
                        <a href="modifier-recette.php?id=<?= $result['id'] ?>" class="btn btn-secondary">Modifier
                            la recette</a>
                        <span>&nbsp;</span>
                        <a href="#" class="btn btn-tomate">Supprimer la recette</a>
                    </div>
                </div>
            </div>
            <div class="clearboth">
                <hr>
            </div>
            <?php
        }
        ?>

    </div>
</main>
</body>
</html>
