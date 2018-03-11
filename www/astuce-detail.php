<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 21:47
 */
require 'fonctions/fonction.php';
$id = $_GET['id'];
$result = recupereAstuce($id);
$img = "images/astuces/" . $result['image'];
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
    <div class="row">
        <div class="col-6 ml-auto mr-auto">
            <img src="<?= $img ?>" alt="astuce" width="100%">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mr-auto ml-auto">
            <h3><?= $result['accroche'] ?></h3>
            <p><?= $result['contenu'] ?></p>
        </div>
    </div>
</main>
<?php require 'includes/footer.php'; ?>
</body>
</html>
