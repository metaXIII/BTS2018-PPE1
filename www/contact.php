<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 22:53
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
<main role="main" class="pt-0 pr-0 col-lg-11 pl-0 col-md-12 col-sm-12 col-xs-12 main container min-height650">
    <div class="row row-offcanvas row-offcanvas-right mr-auto ml-auto ml-5 pr-0 mb-5 col-lg-12 col-sm-12
    fondCuisine">
        <?php require 'includes/menu.php'; ?>
    </div>

    <div class="row col-10 mr-auto ml-auto">
        <div class="col-lg-5">
            <h2>Un petit mot de Monsieur Dupont</h2>
            <img src="images/Wallpapers/icone.jpg" alt="icone" width="50%">
            <p>Monsieur Dupont vous souhaite la bienvenue sur ce site collaboratif.
                <br>
                Nous avons toujours besoin de plus de talent, en cuisine, ce qui compte, c'est la pratique,
                aussi nos équipes auront toujours à coeur de vous proposer du contenu de qualité.
                Cependant notre plus grande force est également notre capacité d'écoute, nous sommes en effet ouvert à
                toute proposition de recettes qui pourraient faire grandir notre site.

                <br><br>
                Si vous êtes une société de cuisine et que vous êtes convaincu par le potentiel de notre travail, vous
                pouvez également nous soutenir et nous proposez un partenariat.

                <br>
                Tous les messages seront lus.
                <br>
                Merci pour tout à tous les utilisateurs !

                <br>
                <a href="mailto:lehchibi.gael@gmail.com">lehchibi.gael@gmail.com</a>
            </p>
        </div>
        <div class="col-lg-6 offset-1">
            <div id="map"></div>
        </div>
    </div>
    <div class="clearboth"></div>
</main>
<?php require 'includes/footer.php'; ?>
<script>

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: 48.8571604, lng: 2.763036300000067}

        });
        marker1 = new google.maps.Marker({

            map: map,

            draggable: true,

            animation: google.maps.Animation.DROP,

            position: {lat: 48.8571604, lng: 2.763036300000067}

        });
    }

</script>

<script async defer

        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM9vKHmURkhyala9f7cz50eHNlITvpnUo&callback=initMap">

</script>
</body>
</html>
