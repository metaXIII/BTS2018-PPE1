<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 18:45
 */

require 'fonctions/fonction.php';

//Valeurs obligatoires
$page = $_GET['page'];


if (isset($_GET['typeProduit']) && $_GET['typeProduit'] == "1")
    $_GET['plat'] = "1";
elseif (isset($_GET['typeProduit']) && $_GET['typeProduit'] == "2")
    $_GET['plat'] = "2";


if (isset($_GET['plat']) && $_GET['plat'] !== "")
    $plat = $_GET['plat'];
else
    $plat = "%";
if (isset($_GET['intitule']) && $_GET['intitule'] !== "") {
    $intitule = $_GET['intitule'];
} else
    $intitule = "%";
if (isset($_GET['ingredient']) && $_GET['ingredient'] !== "")
    $ingredient = $_GET['ingredient'];
else
    $ingredient = "%";


$query = rechercheProduit($plat, $intitule, $ingredient, $page);
while ($result = $query->fetch()) {
    if ($result['typeProduit'] == "1")
        $img = "images/recette/" . $result['image'];
    elseif ($result['typeProduit'] == "2")
        $img = "images/cocktail/" . $result['image'];
    ?>
    <div class="row ml-5 col-8 ml-auto mr-auto">
        <div class="col-lg-4">
            <a href="recette.php?id=<?= $result['id'] ?>" class="text-dark decoration-none">
                <img src="<?= $img ?>" alt="image" width="100%"></div>
        </a>
        <div class="col-lg-6 offset-1">
            <a href="recette.php?id=<?= $result['id'] ?>" class="text-dark decoration-none">
                <div class="col-12 text-center"><?= $result['intitule'] ?></div>
                <div class="col-12"><?= $result['accroche'] ?></div>
                <div class="col-12"><?= $result['contenu'] ?></div>
            </a>
        </div>
    </div>
    <hr class="col-8">
    <?php
}
?>