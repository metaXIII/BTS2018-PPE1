<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 04/03/2018
 * Time: 22:58
 */
require 'fonctions/fonction.php';
$id = $_GET['id'];
$result = recupereInfo($id);
if ($result['typeProduit'] == 1)
    $img = "images/recette/" . $result['image'];
else
    $img = "images/cocktail/" . $result['image'];
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
        <div class="col-lg-12">
            <div class="col-lg-10 m-auto text-center">
                <img src="<?= $img ?>" alt="" style="max-width: 100%; margin: auto;">
            </div>
        </div>
        <div class="col-lg-10 ml-5">
            <h2><?= $result['intitule'] ?></h2>
            <h3><?= $result['accroche'] ?></h3>
            <h4 class="underline">Ingredients</h4>
            <ul>
                <?php
                $ingredient = afficheIngredients($id);
                foreach ($ingredient as $item) {
                    if ($item)
                        echo "<li class='item'>" . $item . "</li>";
                }
                ?>
            </ul>
            <p><?= $result['contenu'] ?></p>
        </div>
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
