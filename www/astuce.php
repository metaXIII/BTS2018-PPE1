<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 04/03/2018
 * Time: 23:00
 */
require 'fonctions/fonction.php';

$query = rechercheAstuceNb();
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
    </div>
    <div id="paginationInfo" style="text-align: center">
        <div id="pageInfoSelect">
            <span id="goTo">Aller à la page : </span>
            <select name="pageActuelle" id="pageActuelle"></select>
        </div>
    </div>


    <div class="row col-10 ml-auto mr-auto">
        <div class="col-2">
            <a id="before" class="btn btn-tomate">Précedent</a>
        </div>
        <div class="col-2 offset-8">
            <a id="next" class="btn btn-tomate">Suivant</a>
        </div>
    </div>
    <hr class="col-8 mb-5">

    <!-- ici -->
    <div id="remplace"></div>
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
                $("#before").hide();
            else
                $("#before").show();
            if (pageTotal == page)
                $("#next").hide();
            else
                $("#next").show();
            if (pageTotal == 0) {
                $("#paginationInfo").text("Aucun Astuce n'est disponible ?");
                $("#next").hide();
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
                    //$("#main").load("getAstuces.php",{page : page<?php foreach ($_POST as $key => $value) echo "," .
                    $key .
                    " : '" . $value . "'";?>});
                    load();
                    verifyPage();
                }
            });
        }

        function load() {
            console.log("getAstuces.php?page=" + page);
            $.get("getAstuces.php?page=" + page,<?php echo json_encode($_REQUEST)?>).done(function
                ($data) {
                $("#remplace")
                    .html($data)
            });
        }

        //$("#main").load("getAstuces.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key . " : '" .
        $value . "'";?>});
        load();
        verifyPage();
        $("#before").on("click", function () {
            page = page - 1;
            //$("#main").load("getAstuces.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key .
            " : '" .
            $value . "'";?>});
            load();
            verifyPage();
        })
        ;
        $("#next").on("click", function () {
            page = page + 1;
            //$("#main").load("getAstuces.php",{page : page<?php foreach ($_POST as $key => $value) echo "," . $key .
            " : '" .
            $value . "'";?>});
            load();
            verifyPage();
        });

    });
</script>
</body>
</html>
