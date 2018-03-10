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
        $query = $db->prepare("SELECT * FROM recette WHERE typeProduit Like '1' LIMIT 5");
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
        $query = $db->prepare("SELECT * FROM recette WHERE typeProduit Like '2' LIMIT 5");
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
                    echo "<p><a class='btn btn-lg btn-primary boutonDetail' href='astuce.php?id=" . $result['id'] . "' role='button'>Voir l'astuce</a></p>";
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
        $query = Database::getPdo()->prepare("SELECT id, intitule FROM recette ORDER BY RAND() LIMIT 5");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li class='item'><a href='recette.php?id=" . $result['id'] . "'>" . $result['intitule'] . "</a></li>";
        }
        $query->closeCursor();
    } else {
        $query = Database::getPdo()->prepare("SELECT ingredient1 FROM recette WHERE ingredient1 IS NOT NULL ORDER BY RAND() LIMIT 5");
        $query->execute();
        while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<li class='item'>" . $result['ingredient1'] . "</li>";
        }
        $query->closeCursor();
    }
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