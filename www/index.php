<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 03/03/2018
 * Time: 16:37
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

<main role="main" class="pt-0 pr-0 col-lg-11 pl-0 col-md-12 col-sm-12 col-xs-12 main container">
    <div class="row row-offcanvas row-offcanvas-right topMenu mr-auto ml-auto ml-5 pr-0 mb-5 col-lg-12 col-sm-12
    fondCuisine">
        <?php require 'includes/menu.php'; ?>
        <?php require 'includes/recherche.php'; ?>
    </div>

    <div class="row min-width280 col-lg-12">
        <div id="caroussel1" class="carousel slide col-lg-4 col-md-6 col-sm-12" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#caroussel1" data-slide-to="0" class="active"></li>
                <li data-target="#caroussel1" data-slide-to="1"></li>
                <li data-target="#caroussel1" data-slide-to="2"></li>
                <li data-target="#caroussel1" data-slide-to="3"></li>
                <li data-target="#caroussel1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <!-- Ici appel de fonction -->
                <?php
                afficheProduit("recette");
                ?>
            </div>
            <a class="carousel-control-prev" href="#caroussel1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#caroussel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="caroussel2" class="carousel slide col-lg-4 col-md-6 col-sm-12" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#caroussel2" data-slide-to="0" class="active"></li>
                <li data-target="#caroussel2" data-slide-to="1"></li>
                <li data-target="#caroussel2" data-slide-to="2"></li>
                <li data-target="#caroussel2" data-slide-to="3"></li>
                <li data-target="#caroussel2" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <?php afficheProduit("cocktails"); ?>
            </div>
            <a class="carousel-control-prev" href="#caroussel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#caroussel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--
         -->
        <div id="caroussel3" class="carousel slide col-lg-4 col-sm-12" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#caroussel3" data-slide-to="0" class="active"></li>
                <li data-target="#caroussel3" data-slide-to="1"></li>
                <li data-target="#caroussel3" data-slide-to="2"></li>
                <li data-target="#caroussel3" data-slide-to="3"></li>
                <li data-target="#caroussel3" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <?php afficheProduit("astuce"); ?>
            </div>
            <a class="carousel-control-prev" href="#caroussel3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#caroussel3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</main>
<?php require 'includes/footer.php'; ?>

</body>
</html>
