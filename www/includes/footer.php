<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 03/03/2018
 * Time: 19:38
 */
?>
<footer class="container col-lg-12 col-md-12 col-sm-12 footer">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">Recettes :
            <ul class="list-unstyled">
                <?php afficheAleatoire("recette") ?>
            </ul>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            Ingredients :
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <?php afficheAleatoire("ingredient"); ?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <?php afficheAleatoire("ingredient"); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            Concocté avec amour par M. Dupont. N'hésitez pas à faire vivre la communauté pour promouvoir la cuisine !
        </div>
        <div class="col-lg-3"><a href="mailto:lehchibi.gael@gmail.com">contacter les développeur du site</a></div>
        <div class="col-lg-3">
            Suivez-nous sur facebook !<a href=""><img src="images/Wallpapers/logo/fb.png" width="20px" alt=""></a>
        </div>
    </div>
</footer>