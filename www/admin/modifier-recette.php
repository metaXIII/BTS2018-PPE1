<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 16:50
 */

require '../fonctions/fonction.php';
require '../class/Database.php';
$db = Database::getPdo();

if (isset($_GET['validate'])) {
    $query = $db->prepare("UPDATE recette set actif = 1 WHERE id = :id");
    $query->bindValue(":id", $_GET['id']);
    $query->execute();
    header("Location: gestion-recette.php");
}
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
    <?php
    $query = $db->prepare("SELECT * from recette WHERE id = :id");
    $query->bindValue(":id", $_GET['id']);
    $query->execute();
    $result = $query->fetch();
    ?>
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
        <form action="modify-recette.php" method="post">
            <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
            <h3>Modifier une recette</h3>
            <div class="form-group">
                <label for="username">Intitule de la recette</label>
                <input type="text" class="form-control" name="intitule" placeholder="Entrez le nom du plat"
                       value="<?= $result['intitule'] ?>">
            </div>
            <p class="text-red">Attention, faire attention au type de recette !</p>
            <p>C'est : </p>
            <div class="form-check form-check-inline">
                <label><span>Un plat </span><input type="checkbox" name="plat"
                                                   value="1" <?php if ($result['typeProduit'] == "1") echo "checked"; ?>></label>
            </div>
            <div class="form-check form-check-inline">
                <label><input type="checkbox" name="plat"
                              value="2" <?php if ($result['typeProduit'] == "2") echo "checked"; ?>><span> Une boisson</span></label>
            </div>
            <div class="form-group">
                <label for="contenu">Accroche</label>
                <input type="text" class="form-control" name="accroche" placeholder="Accroche de la recette"
                       value="<?= $result['accroche'] ?>">
            </div>
            <div class="form-group">
                <label for="contenu">Préparation</label>
                <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"
                ><?= $result['contenu'] ?></textarea>
            </div>
            <div id="ingredient1">
                <label for="ingredient1">Ingrédient 1</label>
                <input type="text" name="ingredient1" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient1'] ?>">
            </div>
            <div id="ingredient2">
                <label for="ingredient2">Ingrédient 2</label>
                <input type="text" name="ingredient2" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient2'] ?>">
            </div>
            <div id="ingredient3">
                <label for="ingredient3">Ingrédient 3</label>
                <input type="text" name="ingredient3" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient3'] ?>">
            </div>
            <div id="ingredient4">
                <label for="ingredient4">Ingrédient 4</label>
                <input type="text" name="ingredient4" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient4'] ?>">
            </div>
            <div id="ingredient5">
                <label for="ingredient5">Ingrédient 5</label>
                <input type="text" name="ingredient5" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient5'] ?>">
            </div>
            <div id="ingredient6">
                <label for="ingredient6">Ingrédient 6</label>
                <input type="text" name="ingredient6" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient6'] ?>">
            </div>
            <div id="ingredient7">
                <label for="ingredient7">Ingrédient 7</label>
                <input type="text" name="ingredient7" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient7'] ?>">
            </div>
            <div id="ingredient8">
                <label for="ingredient8">Ingrédient 8</label>
                <input type="text" name="ingredient8" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient8'] ?>">
            </div>
            <div id="ingredient9">
                <label for="ingredient9">Ingrédient 9</label>
                <input type="text" name="ingredient9" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient9'] ?>">
            </div>
            <div id="ingredient10">
                <label for="ingredient10">Ingrédient 10</label>
                <input type="text" name="ingredient10" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient10'] ?>">
            </div>
            <div id="ingredient11">
                <label for="ingredient11">Ingrédient 11</label>
                <input type="text" name="ingredient11" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient11'] ?>">
            </div>
            <div id="ingredient12">
                <label for="ingredient12">Ingrédient 12</label>
                <input type="text" name="ingredient12" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient12'] ?>">
            </div>
            <div id="ingredient13">
                <label for="ingredient13">Ingrédient 13</label>
                <input type="text" name="ingredient13" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient13'] ?>">
            </div>
            <div id="ingredient14">
                <label for="ingredient14">Ingrédient 14</label>
                <input type="text" name="ingredient14" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient14'] ?>">
            </div>
            <div id="ingredient15">
                <label for="ingredient15">Ingrédient 15</label>
                <input type="text" name="ingredient15" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient15'] ?>">
            </div>
            <div id="ingredient16">
                <label for="ingredient16">Ingrédient 16</label>
                <input type="text" name="ingredient16" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient16'] ?>">
            </div>
            <div id="ingredient17">
                <label for="ingredient17">Ingrédient 17</label>
                <input type="text" name="ingredient17" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient17'] ?>">
            </div>
            <div id="ingredient18">
                <label for="ingredient18">Ingrédient 18</label>
                <input type="text" name="ingredient18" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient18'] ?>">
            </div>
            <div id="ingredient19">
                <label for="ingredient19">Ingrédient 19</label>
                <input type="text" name="ingredient19" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient19'] ?>">
            </div>
            <div id="ingredient20">
                <label for="ingredient20">Ingrédient 20</label>
                <input type="text" name="ingredient20" placeholder="Ingredients" class="form-control"
                       value="<?= $result['ingredient20'] ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-orange">Modifier le contenu</button>
        </form>
    </div>
    <div class="clearboth"></div>
</main>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/checkboxCheck.js"></script>
</body>
</html>
