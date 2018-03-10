<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 14:55
 */

require "../fonctions/fonction.php";
require "../class/Database.php";

$db = Database::getPdo();


$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordVerify = $_POST['confirmPassword'];
$id = $_POST['id'];

$email = verifyInput($email);
$username = verifyInput($username);
$password = verifyInput($password);
$passwordVerify = verifyInput($passwordVerify);

if ($password !== $passwordVerify) {
    $_SESSION['error'] = "2";
    header("Location: ../profil.php");
} else {
    $password = hashPassword($password);
    $query = $db->prepare("UPDATE user SET email = :email, username = :username, password = :password WHERE id = :id ");
    $query->bindValue(":email", $email);
    $query->bindValue(":username", $username);
    $query->bindValue(":password", $password);
    $query->bindValue(":id", $id);
    $query->execute();
    $query->closeCursor();
    header("Location: ../index.php");
}