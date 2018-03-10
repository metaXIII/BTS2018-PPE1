<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 21:17
 */

require 'fonctions/fonction.php';

//Valeurs obligatoires
$page = $_GET['page'];

$query = afficheAstuce($page);
while ($result = $query->fetch()) {
    $img = "images/astuces/" . $result['image'];
    ?>
    <div class="row ml-5 col-8 ml-auto mr-auto">
        <div class="col-lg-4">
            <a href="" class="text-dark decoration-none">
                <img src="<?= $img ?>" alt="image" width="100%"></div>
        </a>
        <div class="col-lg-6 offset-1">
            <a href="" class="text-dark decoration-none">
                <div class="col-12 text-center"><?= $result['accroche'] ?></div>
                <div class="col-12"><?= $result['contenu'] ?></div>
            </a>
        </div>
    </div>
    <hr class="col-8">
    <?php
}
?>