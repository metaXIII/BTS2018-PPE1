<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 03/03/2018
 * Time: 19:09
 */

//Début de la session
session_start();

//Chargement des classes si nécessaires
function chargerClass($class)
{
    require 'class/' . $class . '.php';
}

spl_autoload_register('chargerClass');


//Erreur
$error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
function printError($error)
{
    echo "<div class='text-red text-center'>" . Errors::$errors[$error] . "</div>";
    $_SESSION['error'] = "";
}

//connection
function userIsConnected()
{
    return !empty($_SESSION['user']);
}

function userIsAdmin()
{
    if (isset($_SESSION['user'])) {
        $db = Database::getPdo();
        $query = $db->prepare("SELECT admin from user WHERE username = :username");
        $query->bindValue(":username", $_SESSION['user']);
        $query->execute();
        $result = $query->fetch();
        if ($result['admin'] == "1")
            $admin = true;
        else
            $admin = false;
        return $admin;
    } else
        return $admin = false;
}

function userDisconnect()
{
    $_SESSION['user'] = "";
    session_destroy();
    session_start();
}


function afficheProduit($info)
{
    $db = Database::getPdo();
    if ($info == "recette") {
        $query = $db->prepare("SELECT * FROM recette WHERE typeProduit Like '1' AND actif like '1' LIMIT 5");
        $query->execute();
        $compteur = 1;
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($compteur == 1) {
                echo "<div class='carousel-item active'>";
                echo "<img class='first-slide' src='images/recette/" . $result['image'] . "' alt='First slide'>";
                echo "<div class='container'>";
                echo "<div class='carousel-caption text-left'>";
                echo "<h2>" . $result['intitule'] . "</h2>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette.php?id=" . $result['id'] . "' role='button'>Voir la 
                recette</a></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {
                $traduction = "";
                switch ($compteur) {
                    case 1:
                        $traduction = "First";
                        break;
                    case 2 :
                        $traduction = "Second";
                        break;
                    case 3 :
                        $traduction = "Third";
                        break;
                    case 4:
                        $traduction = "Fourth";
                        break;
                    case 5 :
                        $traduction = "Fifth";
                        break;
                    default:
                        break;
                }
                echo "<div class='carousel-item'>";
                echo "<img class='" . $traduction . "-slide' src='images/recette/" . $result['image'] . "' alt='" .
                    $traduction .
                    " slide'>";
                echo "<div class='container'>";
                echo "<div class='carousel-caption text-left'>";
                echo "<h2>" . $result['intitule'] . "</h2>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette.php?id=" . $result['id'] . "' role='button'>Voir la 
                recette</a></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            $compteur++;
        }
        $query->closeCursor();
    } elseif ($info == "cocktails") {
        $query = $db->prepare("SELECT * FROM recette WHERE typeProduit Like '2' and actif like '1' LIMIT 5");
        $query->execute();
        $compteur = 1;
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($compteur == 1) {
                echo "<div class='carousel-item active'>";
                echo "<img class='first-slide' src='images/cocktail/" . $result['image'] . "' alt='First slide'>";
                echo "<div class='container'>";
                echo "<div class='carousel-caption text-left'>";
                echo "<h2>" . $result['intitule'] . "</h2>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette.php?id=" . $result['id'] . "' role='button'>Voir la 
                recette</a></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {
                $traduction = "";
                switch ($compteur) {
                    case 1:
                        $traduction = "First";
                        break;
                    case 2 :
                        $traduction = "Second";
                        break;
                    case 3 :
                        $traduction = "Third";
                        break;
                    case 4:
                        $traduction = "Fourth";
                        break;
                    case 5 :
                        $traduction = "Fifth";
                        break;
                    default:
                        break;
                }
                echo "<div class='carousel-item'>";
                echo "<img class='" . $traduction . "-slide' src='images/cocktail/" . $result['image'] . "' alt='" .
                    $traduction .
                    " slide'>";
                echo "<div class='container'>";
                echo "<div class='carousel-caption text-left'>";
                echo "<h2>" . $result['intitule'] . "</h2>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette.php?id=" . $result['id'] . "' role='button'>Voir la 
                recette</a></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            $compteur++;
        }
        $query->closeCursor();
    } else {
        {
            $query = $db->prepare("SELECT * FROM astuce LIMIT 5");
            $query->execute();
            $compteur = 1;
            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                if ($compteur == 1) {
                    echo "<div class='carousel-item active'>";
                    echo "<img class='first-slide' src='images/astuces/" . $result['image'] . "' alt='First slide'>";
                    echo "<div class='container'>";
                    echo "<div class='carousel-caption text-left'>";
                    echo "<h2>Astuce du jour :</h2>";
                    echo "<p>" . $result['accroche'] . "</p>";
                    echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='astuce-detail.php?id=" . $result['id'] . "' role='button'>Voir l'astuce</a></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    $traduction = "";
                    switch ($compteur) {
                        case 1:
                            $traduction = "First";
                            break;
                        case 2 :
                            $traduction = "Second";
                            break;
                        case 3 :
                            $traduction = "Third";
                            break;
                        case 4:
                            $traduction = "Fourth";
                            break;
                        case 5 :
                            $traduction = "Fifth";
                            break;
                        default:
                            break;
                    }
                    echo "<div class='carousel-item'>";
                    echo "<img class='" . $traduction . "-slide' src='images/astuces/" . $result['image'] . "' alt='" .
                        $traduction .
                        " slide'>";
                    echo "<div class='container'>";
                    echo "<div class='carousel-caption text-left'>";
                    echo "<h2>Astuce du jour :</h2>";
                    echo "<p>" . $result['accroche'] . "</p>";
                    echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='astuce.php?id=" . $result['id'] . "' role='button'>Voir la 
                recette</a></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                $compteur++;
            }
            $query->closeCursor();
        }
    }
}

function afficheAleatoire($element)
{
    if ($element == "recette") {
        $query = Database::getPdo()->prepare("SELECT id, intitule FROM recette WHERE actif = 1 ORDER BY RAND() LIMIT 5");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li class='item'><a href='recette.php?id=" . $result['id'] . "'>" . $result['intitule'] . "</a></li>";
        }
        $query->closeCursor();
    } else {
        $query = Database::getPdo()->prepare("SELECT DISTINCT ingredient1 FROM recette WHERE ingredient1 IS NOT NULL ORDER BY RAND() LIMIT 5");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li class='item'><a href='recherche.php?ingredient=" . $result['ingredient1'] . "'>" . $result['ingredient1'] . "</a></li>";
        }
        $query->closeCursor();
    }
}

function recupereAstuce($id)
{
    if ((int)$id) {
        $query = Database::getPdo()->prepare("SELECT * FROM astuce WHERE id = :id");
        $query->bindValue(":id", $id);
        $query->execute();
        $result = $query->fetch();
        $query->closeCursor();
        if (!$result)
            header("Location: index.html");
        else
            return $result;
    } else
        header("Location: index.html");
}

function recupereInfo($id)
{
    if ((int)$id) {
        $query = Database::getPdo()->prepare("SELECT * FROM recette WHERE id LIKE :id");
        $query->bindValue(":id", $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        if (!$result)
            header("Location:index.html");
        else
            return $result;
    } else
        header("location:index.html");
}

function afficheIngredients($id)
{
    $query = Database::getPdo()->prepare("SELECT * FROM recette WHERE id Like :id");
    $query->bindValue(":id", $id);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $ingredient = "";
    if ($result['ingredient1'])
        $ingredient .= $result['ingredient1'] . "//";
    if ($result['ingredient2'])
        $ingredient .= $result['ingredient2'] . "//";
    if ($result['ingredient3'])
        $ingredient .= $result['ingredient3'] . "//";
    if ($result['ingredient4'])
        $ingredient .= $result['ingredient4'] . "//";
    if ($result['ingredient5'])
        $ingredient .= $result['ingredient5'] . "//";
    if ($result['ingredient6'])
        $ingredient .= $result['ingredient6'] . "//";
    if ($result['ingredient7'])
        $ingredient .= $result['ingredient7'] . "//";
    if ($result['ingredient8'])
        $ingredient .= $result['ingredient8'] . "//";
    if ($result['ingredient9'])
        $ingredient .= $result['ingredient9'] . "//";
    if ($result['ingredient10'])
        $ingredient .= $result['ingredient10'] . "//";
    if ($result['ingredient11'])
        $ingredient .= $result['ingredient11'] . "//";
    if ($result['ingredient12'])
        $ingredient .= $result['ingredient12'] . "//";
    if ($result['ingredient13'])
        $ingredient .= $result['ingredient13'] . "//";
    if ($result['ingredient14'])
        $ingredient .= $result['ingredient14'] . "//";
    if ($result['ingredient15'])
        $ingredient .= $result['ingredient15'] . "//";
    if ($result['ingredient16'])
        $ingredient .= $result['ingredient16'] . "//";
    if ($result['ingredient17'])
        $ingredient .= $result['ingredient17'] . "//";
    if ($result['ingredient18'])
        $ingredient .= $result['ingredient18'] . "//";
    if ($result['ingredient19'])
        $ingredient .= $result['ingredient19'] . "//";
    if ($result['ingredient20'])
        $ingredient .= $result['ingredient20'] . "//";
    $ingredient = explode("//", $ingredient);
    return $ingredient;
}

function verifyInput($input)
{
    $input = trim(htmlspecialchars(strip_tags($input)));
    return $input;
}

function hashPassword($password)
{
    $password = hash("sha256", $password);
    return $password;
}

function infoProfil($user)
{
    $db = Database::getPdo();
    $query = $db->prepare("SELECT * from user WHERE username = :username");
    $query->bindValue(":username", $user);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function recupereComment($id)
{
    $db = Database::getPdo();
    $query = $db->prepare("SELECT * from commentaire WHERE idRecette = :id");
    $query->bindValue(":id", $id);
    $query->execute();
    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='col-lg-6 ml-auto mr-auto'>";
        echo "<div class='row'>";
        echo "<div class='col-lg-12 text-right'><h5>" . $result['titre'] . "</h5></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-lg-10 ml-auto mr-auto'>";
        echo $result['contenu'];
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-lg-12 text-right text-secondary small'>Écrit par " . $result['auteur'] . " le " . $result['date'] . "</div>";
        echo "</div>";
        echo "</div>";
        if (userIsAdmin()) {
            echo "<br><br>";
            echo "<div class='row col-8 ml-auto mr-auto'>";
            echo "<div class='col-6 text-center'>";
            echo "<a href='admin/commentaire.php?id=" . $result['id'] . "&edit=1' class='btn btn-secondary'>Modifier le 
            commentaire</a>";
            echo "</div>";
            echo "<div class='col-6 text-center'>";
            echo "<a href='admin/commentaire.php?id=" . $result['id'] . "&delete=1' class='btn btn-danger'>Supprimer le commentaire</a>";
            echo "</div>";
            echo "</div>";
        }
        echo "<hr class='col-8'>";

    }
    if ($result == 0) {
        echo "<div class='col-10 ml-5'>Aucun commentaire pour le moment ? à vous de partager vos impressions !</div>";
    }
    $query->closeCursor();
}

function rechercheProduit($plat, $intitule, $ingredient, $page)
{
    $plat = verifyInput($plat);
    $intitule = verifyInput($intitule);
    $ingredient = verifyInput($ingredient);
    $nombre_par_page = 5;
    $debut = ($page - 1) * $nombre_par_page;

    $db = Database::getPdo();
    $query = $db->query("SELECT * from recette WHERE typeProduit Like '$plat'  
                                      AND intitule Like '%$intitule%' 
                                      AND
                                      (
                                      ingredient1 Like '$ingredient'
                                      OR ingredient2 Like '$ingredient'
                                      OR ingredient3 Like '$ingredient'
                                      OR ingredient4 Like '$ingredient'
                                      OR ingredient5 Like '$ingredient'
                                      OR ingredient6 Like '$ingredient'
                                      OR ingredient7 Like '$ingredient'
                                      OR ingredient8 Like '$ingredient'
                                      OR ingredient9 Like '$ingredient'
                                      OR ingredient10 Like '$ingredient'
                                      OR ingredient11 Like '$ingredient'
                                      OR ingredient12 Like '$ingredient'
                                      OR ingredient13 Like '$ingredient'
                                      OR ingredient14 Like '$ingredient'
                                      OR ingredient15 Like '$ingredient'
                                      OR ingredient16 Like '$ingredient'
                                      OR ingredient17 Like '$ingredient'
                                      OR ingredient18 Like '$ingredient'
                                      OR ingredient19 Like '$ingredient'
                                      OR ingredient20 Like '$ingredient'
                                      )
                                      AND actif = 1
                                      LIMIT $debut, $nombre_par_page
                                      ");
    return $query;
}

function rechercheProduitNb($plat, $intitule, $ingredient)
{
    $plat = verifyInput($plat);
    $intitule = verifyInput($intitule);
    $ingredient = verifyInput($ingredient);

    $db = Database::getPdo();
    $query = $db->query("SELECT COUNT(*) as nombre from recette WHERE typeProduit Like '$plat'  
                                      AND intitule Like '%$intitule%' 
                                      AND
                                      (
                                      ingredient1 Like '$ingredient'
                                      OR ingredient2 Like '$ingredient'
                                      OR ingredient3 Like '$ingredient'
                                      OR ingredient4 Like '$ingredient'
                                      OR ingredient5 Like '$ingredient'
                                      OR ingredient6 Like '$ingredient'
                                      OR ingredient7 Like '$ingredient'
                                      OR ingredient8 Like '$ingredient'
                                      OR ingredient9 Like '$ingredient'
                                      OR ingredient10 Like '$ingredient'
                                      OR ingredient11 Like '$ingredient'
                                      OR ingredient12 Like '$ingredient'
                                      OR ingredient13 Like '$ingredient'
                                      OR ingredient14 Like '$ingredient'
                                      OR ingredient15 Like '$ingredient'
                                      OR ingredient16 Like '$ingredient'
                                      OR ingredient17 Like '$ingredient'
                                      OR ingredient18 Like '$ingredient'
                                      OR ingredient19 Like '$ingredient'
                                      OR ingredient20 Like '$ingredient'
                                      )
                                      AND actif = 1
                                      ");
    return $query;
}

function afficheAstuce($page)
{
    $db = Database::getPdo();
    $nombre_par_page = 5;
    $debut = ($page - 1) * $nombre_par_page;
    $query = $db->query("SELECT * from astuce limit $debut, $nombre_par_page");
    return $query;
}

function rechercheAstuceNb()
{
    $db = Database::getPdo();
    $query = $db->query("SELECT COUNT(*) as nombre from astuce");
    return $query;
}
