<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 10:51
 */
require '../fonctions/fonction.php';
require '../class/Database.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


//Protection
$email = verifyInput($email);
$username = verifyInput($username);
$password = verifyInput($username);

//Cryptage password
$password = hashPassword($password);


$db = Database::getPdo();
$query = $db->prepare("INSERT INTO user (username, email, password)
                                  VALUES (:username, :email, :password)");
$query->bindValue(":username", $username);
$query->bindValue("email", $email);
$query->bindValue(":password", $password);
$query->execute();
$_SESSION['user'] = $username;
$query->closeCursor();
header("Location: ../index.php");

