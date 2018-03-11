<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 17:34
 */

require '../class/Database.php';

$id = $_GET['id'];
$db = Database::getPdo();

$query = exec("DELETE FROM recette WHERE id = " . $id);
header("Location: gestion-recette.php");