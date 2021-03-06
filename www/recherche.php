<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 17:06
 */
require 'fonctions/fonction.php';


if (isset($_GET['typeProduit']) && $_GET['typeProduit'] == "1")
    $_POST['plat'] = "1";
elseif (isset($_GET['typeProduit']) && $_GET['typeProduit'] == "2")
    $_POST['plat'] = "2";
if (isset($_GET['ingredient']))
    $_POST['ingredient1'] = $_GET['ingredient'];

if (isset($_POST['plat']) && $_POST['plat'] !== "") {
    $plat = $_POST['plat'];
} else
    $plat = "%";
if (isset($_POST['intitule']) && $_POST['intitule'] !== "") {
    $intitule = $_POST['intitule'];
} else
    $intitule = "%";
if (isset($_POST['ingredient']) && $_POST['ingredient'] !== "") {
    $ingredient = $_POST['ingredient'];
} else
    $ingredient = "%";
$query = rechercheProduitNb($plat, $intitule, $ingredient);
$result = $query->fetch();
$total = $result['nombre'];
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
        <?php require 'includes/recherche.php'; ?>
    </div>
    <div id="paginationInfo" style="text-align: center">
        <div id="pageInfoSelect">
            <span id="goTo">Aller à la page : </span>
            <select name="pageActuelle" id="pageActuelle"></select>
        </div>
    </div>


    <div class="row col-10 ml-auto mr-auto">
        <div class="col-2">
            <a class="btn btn-tomate before">Précedent</a>
        </div>
        <div class="col-2 offset-8">
            <a class="btn btn-tomate next">Suivant</a>
        </div>
    </div>
    <hr class="col-8 mb-5">

    <!-- ici -->
    <div id="remplace"></div>

    <div class="row col-10 ml-auto mr-auto">
        <div class="col-2">
            <a class="btn btn-tomate before">Précedent</a>
        </div>
        <div class="col-2 offset-8">
            <a class="btn btn-tomate next">Suivant</a>
        </div>
    </div>

    <div class="clearboth"></div>


</main>
<?php require 'includes/footer.php'; ?>


<script>
    $(function () {
        var page = 1;
        var total = parseInt(<?= $total ?>);
        var nbProdParPage = 5;
        var pageTotal = total / nbProdParPage;
        if (!(parseInt(pageTotal + "") == pageTotal))
            pageTotal = parseInt(pageTotal + "") + 1;

        function verifyPage() {
            if (page == 1)
                $(".before").hide();
            else
                $(".before").show();
            if (pageTotal == page)
                $(".next").hide();
            else
                $(".next").show();
            if (pageTotal == 0) {
                $("#paginationInfo").text("Aucun résultat pour cette recherche");
                $(".next").hide();
            }
            else
                $("#paginationInfo").text("Page " + page + " / " + pageTotal);
            $("#pageActuelle").empty();
            $("#pageActuelle").append("<option></option>");
            var i = 1;
            while (i <= pageTotal) {
                if (i != page) {
                    $("#pageActuelle").append("<option value='" + i + "'>" + i + "</option>");
                }
                else
                    $("#pageActuelle").append("<option value='" + i + "' selected>" + i + "</option>");
                i++;
            }
            $("#pageActuelle").change(function () {
                page = parseInt($(this).val());
                if (page) {
                    //$("#main").load("getProduit.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key . " : '" . $value . "'";?>});
                    load();
                    verifyPage();
                }
            });
        }

        function load() {
            console.log("getProduit.php?page=" + page);
            $.get("getProduit.php?page=" + page,<?php echo json_encode($_REQUEST)?>).done(function
                ($data) {
                $("#remplace")
                    .html($data)
            });
        }

        //$("#main").load("getProduit.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key . " : '" . $value . "'";?>});
        load();
        verifyPage();
        $(".before").on("click", function () {
            page = page - 1;
            //$("#main").load("getProduit.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key . " : '" . $value . "'";?>});
            load();
            verifyPage();
        })
        ;
        $(".next").on("click", function () {
            page = page + 1;
            //$("#main").load("getProduit.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key . " : '" . $value . "'";?>});
            load();
            verifyPage();
        });

    });
</script>
</body>
</html>
