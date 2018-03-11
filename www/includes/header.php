<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 03/03/2018
 * Time: 19:36
 */
?>
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-tomate col-lg-11 navbar-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavbarExpand"
            aria-controls="NavbarExpand" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="index.html">
        <img src="images/Wallpapers/icone.jpg" width="40px" alt="Logo FoodnDrink">
    </a>

    <div class="collapse navbar-collapse" id="NavbarExpand">
        <ul class="navbar-nav mr-auto my-2">
            <li class="nav-item active">
                <a class="nav-link" href="#">Nos recettes de cuisine<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Nos boissons</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Astuces de chef</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Contact</a>
            </li>
           <li class="nav-item active">
               <a class="nav-link" href="login.php">Se connecter</a>
           </li>
        </ul>

    </div>
</nav>

<div class="col-6 col-md-3 sidebar-offcanvas leftbloc col-lg-1 all bg-tomate" id="sidebar">
    <div class="list-group">
        <a href="recherche.php?typeProduit=1">
            <img src="images/Wallpapers/food.jpg" alt="" class="mw-100">
        </a>
        <a href="recherche.php?typeProduit=2">
            <img src="images/Wallpapers/cocktail.jpg" alt="" class="mw-100">
        </a>
        <a href="astuce.php">
            <img src="images/Wallpapers/cuistot.jpg" alt="" class="mw-100">
        </a>
        <a href="contact.php">
            <img src="images/Wallpapers/contact.jpg" alt="" class="mw-100">
        </a>
    </div>
</div>


