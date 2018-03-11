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
    <?php
    if (!$result['actif'])
        echo "<h1 class='text-center text-red'>Attention, cette recette n'est pas validée !</h1> ";
    ?>
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
    <div class="row">
        <div class="col-lg-10 ml-5"><h3>Commentaires</h3></div>
    </div>
    <?php recupereComment($id) ?>
    <?php
    if (userIsConnected()) {
        ?>
        <h3 class="ml-5">Mettez la main à la pate ! </h3>
        <div class="row">
            <form action="connection/add-commentaire.php" method="post" class="col-lg-8 col-md-10 col-sm-10 col-10 ml-auto
        mr-auto">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <input type="hidden" name="auteur" value="<?= $_SESSION['user'] ?>">
                <div class="form-group">
                    <label for="titreComment">Le titre de votre commentaire : </label>
                    <input type="text" name="titre" class="form-control" placeholder="titre de votre commentaire">
                </div>
                <div class="form-group">
                    <label for="contenu">Votre commentaire :</label>
                    <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-orange"/>
            </form>
        </div>
    <?php }
    ?>
</main>
<?php require 'includes/footer.php'; ?>
</body>
</html>
