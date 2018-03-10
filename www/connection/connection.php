<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 05/03/2018
 * Time: 00:36
 */
require "../fonctions/fonction.php";
require "../class/Database.php";

$db = Database::getPdo();

$username = $_POST['username'];
$password = $_POST['password'];

$username = verifyInput($username);
$password = verifyInput($password);

$password = hashPassword($password);
$query = $db->prepare("SELECT username, password FROM user WHERE username = :username AND password = :password");
$query->bindValue(":username", $username);
$query->bindValue(":password", $password);
$query->execute();

if ($query->fetch()) {
    $_SESSION['user'] = $username;
    $query->closeCursor();
    header("Location: ../index.php");
} else {
    $_SESSION['error'] = 1;
    $query->closeCursor();
    header("Location: ../login.php");
}

