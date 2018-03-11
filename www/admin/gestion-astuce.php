<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 18:06
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
        <?php require 'includes/menu.php'; ?>
    </div>

    <div class="ml-auto mr-auto col-10">
        <div class="row">
            <a href="astuce.php?add=1" class="ml-auto mr-auto btn btn-success">Ajouter une astuce</a>
        </div>
        <div class="clearboth"></div>
        <?php
        $query = $db->prepare("SELECT * from astuce");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            $img = "../images/astuces/" . $result['image'];
            ?>
            <div class="row bg-light col-10 mr-auto ml-auto">
                <div class="col-lg-4">
                    <img src="<?= $img ?>" width="100%" alt="astuce">
                </div>
                <div class="col-lg-7 offset-1">
                    <h3><?= $result['accroche'] ?></h3>
                    <p><?= $result['contenu'] ?></p>
                    <a href="../astuce-detail.php?id=<?= $result['id'] ?>" class="btn btn-primary">Voir l'astuce</a>
                    <a href="astuce.php?modify=1&id=<?= $result['id'] ?>" class="btn btn-secondary">Modifier
                        l'astuce</a>
                    <a href="astuce.php?delete=1&id=<?= $result['id'] ?>" class="btn btn-danger">Supprimer l'astuce</a>
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
