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

//Connexion à la base de données.
//$db = Database::getPdo();

function afficheProduit($info)
{
    $db = Database::getPdo();
    if ($info == "recette") {
        $query = $db->prepare("SELECT * FROM recette WHERE typeProduit Like '1' LIMIT 5");
        $query->execute();
        $compteur = 1;
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($compteur == 1) {
                echo "<div class='carousel-item active'>";
                echo "<img class='first-slide' src='images/recette/" . $result['image'] . "' alt='First slide'>";
                echo "<div class='container'>";
                echo "<div class='carousel-caption text-left'>";
                echo "<h1>" . $result['intitule'] . "</h1>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette-" . $result['id'] . "' role='button'>Voir la 
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
                echo "<h1>" . $result['intitule'] . "</h1>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette-" . $result['id'] . "' role='button'>Voir la 
                recette</a></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            $compteur++;
        }
        $query->closeCursor();
    } elseif ($info == "cocktails") {
        $query = $db->prepare("SELECT * FROM recette WHERE typeProduit Like '2' LIMIT 5");
        $query->execute();
        $compteur = 1;
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            if ($compteur == 1) {
                echo "<div class='carousel-item active'>";
                echo "<img class='first-slide' src='images/cocktail/" . $result['image'] . "' alt='First slide'>";
                echo "<div class='container'>";
                echo "<div class='carousel-caption text-left'>";
                echo "<h1>" . $result['intitule'] . "</h1>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette-" . $result['id'] . "' role='button'>Voir la 
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
                echo "<h1>" . $result['intitule'] . "</h1>";
                echo "<p>" . $result['accroche'] . "</p>";
                echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette-" . $result['id'] . "' role='button'>Voir la 
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
                    echo "<h1>Astuce du jour :</h1>";
                    echo "<p>" . $result['accroche'] . "</p>";
                    echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette-" . $result['id'] . "' role='button'>Voir la 
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
                    echo "<img class='" . $traduction . "-slide' src='images/astuces/" . $result['image'] . "' alt='" .
                        $traduction .
                        " slide'>";
                    echo "<div class='container'>";
                    echo "<div class='carousel-caption text-left'>";
                    echo "<h1>Astuce du jour :</h1>";
                    echo "<p>" . $result['accroche'] . "</p>";
                    echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='recette-" . $result['id'] . "' role='button'>Voir la 
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
        $query = Database::getPdo()->prepare("SELECT intitule FROM recette ORDER BY RAND() LIMIT 5");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li class='item'>" . $result['intitule'] . "</li>";
        }
        $query->closeCursor();
    } else {
        $query = Database::getPdo()->prepare("SELECT ingredient1 FROM recette ORDER BY RAND() LIMIT 5");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li class='item'>" . $result['ingredient1'] . "</li>";
        }
        $query->closeCursor();
    }
}