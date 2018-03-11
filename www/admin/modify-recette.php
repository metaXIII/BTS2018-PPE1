<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 17:15
 */

require '../class/Database.php';
require '../fonctions/fonction.php';


$db = Database::getPdo();

$id = $_POST['id'];
$typeProduit = $_POST['plat'];
$intitule = $_POST['intitule'];
$accroche = $_POST['accroche'];
$contenu = $_POST['contenu'];

if (isset($_POST['ingredient1']))
    $ingredient1 = verifyInput($_POST['ingredient1']);
if (isset($_POST['ingredient2']))
    $ingredient2 = verifyInput($_POST['ingredient2']);
else
    $ingredient2 = "";
if (isset($_POST['ingredient3']))
    $ingredient3 = verifyInput($_POST['ingredient3']);
else
    $ingredient3 = "";
if (isset($_POST['ingredient4']))
    $ingredient4 = verifyInput($_POST['ingredient4']);
else
    $ingredient4 = "";
if (isset($_POST['ingredient5']))
    $ingredient5 = verifyInput($_POST['ingredient5']);
else
    $ingredient5 = "";
if (isset($_POST['ingredient6']))
    $ingredient6 = verifyInput($_POST['ingredient6']);
else
    $ingredient6 = "";
if (isset($_POST['ingredient7']))
    $ingredient7 = verifyInput($_POST['ingredient7']);
else
    $ingredient7 = "";
if (isset($_POST['ingredient8']))
    $ingredient8 = verifyInput($_POST['ingredient8']);
else
    $ingredient8 = "";
if (isset($_POST['ingredient9']))
    $ingredient9 = verifyInput($_POST['ingredient9']);
else
    $ingredient9 = "";
if (isset($_POST['ingredient10']))
    $ingredient10 = verifyInput($_POST['ingredient10']);
else
    $ingredient10 = "";
if (isset($_POST['ingredient11']))
    $ingredient11 = verifyInput($_POST['ingredient11']);
else
    $ingredient11 = "";
if (isset($_POST['ingredient12']))
    $ingredient12 = verifyInput($_POST['ingredient12']);
else
    $ingredient12 = "";
if (isset($_POST['ingredient13']))
    $ingredient13 = verifyInput($_POST['ingredient13']);
else
    $ingredient13 = "";
if (isset($_POST['ingredient14']))
    $ingredient14 = verifyInput($_POST['ingredient14']);
else
    $ingredient14 = "";
if (isset($_POST['ingredient15']))
    $ingredient15 = verifyInput($_POST['ingredient15']);
else
    $ingredient15 = "";
if (isset($_POST['ingredient16']))
    $ingredient16 = verifyInput($_POST['ingredient16']);
else
    $ingredient16 = "";
if (isset($_POST['ingredient17']))
    $ingredient17 = verifyInput($_POST['ingredient17']);
else
    $ingredient17 = "";
if (isset($_POST['ingredient18']))
    $ingredient18 = verifyInput($_POST['ingredient18']);
else
    $ingredient18 = "";
if (isset($_POST['ingredient19']))
    $ingredient19 = verifyInput($_POST['ingredient19']);
else
    $ingredient19 = "";
if (isset($_POST['ingredient20']))
    $ingredient20 = verifyInput($_POST['ingredient20']);
else
    $ingredient20 = "";

$query = $db->prepare("UPDATE recette set intitule = :intitule, typeProduit = :typeProduit, accroche = :accroche,
                                  contenu = :contenu, ingredient1 = :ingredient1, ingredient2 = :ingredient2, 
                                  ingredient3 = :ingredient3, ingredient4 = :ingredient4, ingredient5 = :ingredient5,
                                  ingredient6 = :ingredient6, ingredient7 = :ingredient7, ingredient8 = :ingredient8,
                                  ingredient9 = :ingredient9, ingredient10 = :ingredient10, ingredient11 = :ingredient11,
                                  ingredient12 = :ingredient12, ingredient13 = :ingredient13, ingredient14 = :ingredient14,
                                  ingredient15 = :ingredient15, ingredient16 = :ingredient16, ingredient17 = :ingredient17,
                                  ingredient18 = :ingredient18, ingredient19 = :ingredient19, ingredient20 = :ingredient20,
                                  actif = 1 WHERE id = :id");
$query->bindValue(":intitule", $intitule);
$query->bindValue(":typeProduit", $typeProduit);
$query->bindValue(":accroche", $accroche);
$query->bindValue(":contenu", $contenu);
$query->bindValue(":ingredient1", $ingredient1);
$query->bindValue(":ingredient2", $ingredient2);
$query->bindValue(":ingredient3", $ingredient3);
$query->bindValue(":ingredient4", $ingredient4);
$query->bindValue(":ingredient5", $ingredient5);
$query->bindValue(":ingredient6", $ingredient6);
$query->bindValue(":ingredient7", $ingredient7);
$query->bindValue(":ingredient8", $ingredient8);
$query->bindValue(":ingredient9", $ingredient9);
$query->bindValue(":ingredient10", $ingredient10);
$query->bindValue(":ingredient11", $ingredient11);
$query->bindValue(":ingredient12", $ingredient12);
$query->bindValue(":ingredient13", $ingredient13);
$query->bindValue(":ingredient14", $ingredient14);
$query->bindValue(":ingredient15", $ingredient15);
$query->bindValue(":ingredient16", $ingredient16);
$query->bindValue(":ingredient17", $ingredient17);
$query->bindValue(":ingredient18", $ingredient18);
$query->bindValue(":ingredient19", $ingredient19);
$query->bindValue(":ingredient20", $ingredient20);
$query->bindValue(":id", $id);
$query->execute();

header("Location: gestion-recette.php");