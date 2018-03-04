<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 04/03/2018
 * Time: 17:51
 */
?>
<div class="bg-light ml-auto mr-auto mt-5 col-lg-4 col-md-5 col-sm-6 pt-2 col-10 border border-dark
        min-width280 rechercheBloc">
    <h4 class="text-center underline">Je recherche :</h4>
    <form action="" method="post" class="text-center mb-3 mt-1">
        <div class="form-check form-check-inline">
            <label><span>Un plat </span><input type="checkbox" name="plat"></label>
        </div>
        <div class="form-check form-check-inline">
            <label><input type="checkbox" name="plat"><span> Une boisson</span></label>
        </div>
        <div>
            <label for="intitule">
                Je sais ce que je cherche :
            </label>
            <input type="text" name="intitule" placeholder="lasagnes... ">
        </div>
        <br>
        <div>
            <label for="ingredient">Sinon je donne un indice :</label>
            <input type="text" name="ingredient" placeholder="steak de boeuf">
        </div>
        <br>
        <input type="submit" value="Recherche" class="btn btn-secondary">
    </form>
</div>
