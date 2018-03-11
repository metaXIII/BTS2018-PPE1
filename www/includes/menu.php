<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 04/03/2018
 * Time: 01:17
 */
?>
<div class="row w-90 ml-auto mr-auto mt-5 d-none bandeauMenu">
    <ul class="navbar nav bg-secondary">
        <li class="nav-item"><a href="index.html" class="btn btn-secondary">Accueil</a></li>
        <li class="nav-item"><a href="recherche.php?typeProduit=1" class="btn btn-secondary">Recettes de cuisine</a>
        </li>
        <li class="nav-item"><a href="recherche.php?typeProduit=2" class="btn btn-secondary">Boissons et
                cocktails</a></li>
        <li class="nav-item"><a href="astuce.php" class="btn btn-secondary">Conseils de pro</a></li>
        <?php
        if (userIsConnected()) {
            echo '<li class="nav-item"><a href="profil.php" class="btn btn-secondary">Mon profil</a></li>';
            echo "<li class='nav-item'><a href='add-recette.php' class='btn btn-secondary'>Proposez une recette</a></li>";
            if (userIsAdmin()) {
                echo "<div class='dropdown'>";
                echo "<button class='btn btn-orange dropdown-toggle text-white' data-toggle='dropdown' type='button'
                              id='Administration' aria-haspopup='true' aria-expanded='false'>Administration</button>";
                echo "<div class='dropdown-menu' aria-labelledby='menuAdministration'>";
                echo "<a href='admin/gestion-recette.php' class='dropdown-item'>Gérer les nouvelles recettes</a>";
                echo "<a href='add-recette' class='dropdown-item'>Ajouter une astuce</a>";
                echo "</div>";
                echo "</div>";
            }
            echo '<li class="nav-item"><a href="login.php?disconnect" 
                    class="btn btn-secondary">Se déconnecter</a></li>';
        } else {
            echo '<li class="nav-item"><a href="login.php" class="btn btn-secondary">Se connecter</a></li>';
        }
        ?>
    </ul>
</div>