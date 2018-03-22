<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 18:17
 */

require '../fonctions/fonction.php';
require '../class/Database.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$db = Database::getPdo();

if (isset($_GET['modify'])) {
    //Modify
    $query = $db->prepare("SELECT * from astuce WHERE id = :id");
    $query->bindValue(":id", $_GET['id']);
    $query->execute();
    $result = $query->fetch();
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
        <div class="ml-auto mr-auto col-10">
            <h1>Nouvelle astuce</h1>
            <div class="clearboth"></div>
            <form action="modify-astuce.php" method="post" class="col-10 mr-auto ml-auto" enctype="multipart/form-data">
                <input type="hidden" value="<?= $result['id'] ?>" name="id">
                <div class="form-group">
                    <label for="accroche">Accroche de l'astuce</label>
                    <input type="text" name="accroche" class="form-control" placeholder="Titre de l'astuce"
                           value="<?= $result['accroche'] ?>">
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu</label>
                    <textarea name="contenu" id="contenu" cols="30" rows="10"
                              class="form-control"><?= $result['contenu'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Envoyez votre image : </label>
                    <input type="file" name="file">
                </div>
                <input type="submit" class="btn btn-orange" value="Envoyer votre astuce">
            </form>
        </div>
    </main>
    </body>
    </html>
    <?php
} elseif (isset($_GET['add'])) {
    //ajout
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

        <div class="ml-auto mr-auto col-10 col-lg-6">
            <form action="add-astuce.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="accroche">Votre accroche</label>
                    <input type="text" name="accroche" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Votre image : </label>
                    <input type="file" name="file">
                </div>
                <input type="submit" class="btn btn-orange" value="Enregistrer">
            </form>
        </div>
    </main>
    </body>
    </html>
    <?php
} else {
    $query = $db->exec("DELETE from astuce WHERE id = " . $id);
    header("Location: gestion-astuce.php");
}