<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 12:06
 */
require '../class/Database.php';
require '../fonctions/fonction.php';


$intitule = $_POST['intitule'];
$typeProduit = $_POST['plat'];
$accroche = $_POST['accroche'];
$contenu = $_POST['contenu'];


if (isset($_POST['ingredient1']))
    $ingredient1 = $_POST['ingredient1'];
else
    $ingredient1 = "";
if (isset($_POST['ingredient2']))
    $ingredient2 = $_POST['ingredient2'];
else
    $ingredient2 = "";
if (isset($_POST['ingredient3']))
    $ingredient3 = $_POST['ingredient3'];
else
    $ingredient3 = "";
if (isset($_POST['ingredient4']))
    $ingredient4 = $_POST['ingredient4'];
else
    $ingredient4 = "";
if (isset($_POST['ingredient5']))
    $ingredient5 = $_POST['ingredient5'];
else
    $ingredient5 = "";
if (isset($_POST['ingredient6']))
    $ingredient6 = $_POST['ingredient6'];
else
    $ingredient6 = "";
if (isset($_POST['ingredient7']))
    $ingredient7 = $_POST['ingredient7'];
else
    $ingredient7 = "";
if (isset($_POST['ingredient8']))
    $ingredient8 = $_POST['ingredient8'];
else
    $ingredient8 = "";
if (isset($_POST['ingredient9']))
    $ingredient9 = $_POST['ingredient9'];
else
    $ingredient9 = "";
if (isset($_POST['ingredient10']))
    $ingredient10 = $_POST['ingredient10'];
else
    $ingredient10 = "";
if (isset($_POST['ingredient11']))
    $ingredient11 = $_POST['ingredient11'];
else
    $ingredient11 = "";
if (isset($_POST['ingredient12']))
    $ingredient12 = $_POST['ingredient12'];
else
    $ingredient12 = "";
if (isset($_POST['ingredient13']))
    $ingredient13 = $_POST['ingredient13'];
else
    $ingredient13 = "";
if (isset($_POST['ingredient14']))
    $ingredient14 = $_POST['ingredient14'];
else
    $ingredient14 = "";
if (isset($_POST['ingredient15']))
    $ingredient15 = $_POST['ingredient15'];
else
    $ingredient15 = "";
if (isset($_POST['ingredient16']))
    $ingredient16 = $_POST['ingredient16'];
else
    $ingredient16 = "";
if (isset($_POST['ingredient17']))
    $ingredient17 = $_POST['ingredient17'];
else
    $ingredient17 = "";
if (isset($_POST['ingredient18']))
    $ingredient18 = $_POST['ingredient18'];
else
    $ingredient18 = "";
if (isset($_POST['ingredient19']))
    $ingredient19 = $_POST['ingredient19'];
else
    $ingredient19 = "";
if (isset($_POST['ingredient20']))
    $ingredient20 = $_POST['ingredient20'];
else
    $ingredient20 = "";


$file = $_FILES['file'];