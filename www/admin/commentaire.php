<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 21:54
 */

require '../fonctions/fonction.php';
require '../class/Database.php';

$id = $_GET['id'];
$db = Database::getPdo();
if (isset($_GET['edit'])) {
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
        </div>
        <div class="col-lg-4 m-auto">
            <form action="" method="get">
                <input type="hidden" name="modify" value="1">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <h3>Modifier le commentaire</h3>
                <?php
                $query = $db->prepare("SELECT * FROM commentaire WHERE id = :id");
                $query->bindValue(":id", $id);
                $query->execute();
                $result = $query->fetch();
                $query->closeCursor();
                ?>

                <div class="form-group">
                    <label for="username">Titre du commentaire</label>
                    <input type="text" class="form-control" name="titre" value="<?= $result['titre'] ?>"
                           placeholder="Entrez le titre du commentaire">
                </div>
                <div class="form-group">
                    <label for="contenu">Contenu du commentaire :</label>
                    <textarea name="contenu" id="contenu" cols="30" rows="10"
                              class="form-control"><?= $result['contenu']
                        ?></textarea>
                </div>
                <button type="submit" class="btn btn-orange">Modifier le contenu</button>
            </form>
        </div>
    </main>
    </body>
    </html>
    <?php
} elseif (isset($_GET['modify'])) {
    $id = $_GET['id'];
    $query = $db->prepare("UPDATE commentaire SET titre = :titre, contenu = :contenu WHERE id = :id");
    $query->bindValue(":titre", $_GET['titre']);
    $query->bindValue(":contenu", $_GET['contenu']);
    $query->bindValue(":id", $_GET['id']);
    $query->execute();
    header("Location: ../recette.php?id=" . $_GET['id']);
} else {
    $id = $_GET['id'];
    $query = $db->exec("DELETE FROM `commentaire` WHERE id = " . $_GET['id']);
    header("Location: ../index.php");
}
