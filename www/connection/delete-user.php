<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 15:29
 */

require "../fonctions/fonction.php";
require "../class/Database.php";

$db = Database::getPdo();

$id = $_GET['id'];
$query = $db->exec("DELETE FROM user WHERE id = " . $id);
$_SESSION['user'] = false;
header("Location: ../index.php");

