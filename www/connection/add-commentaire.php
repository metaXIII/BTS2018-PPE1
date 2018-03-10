<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 10/03/2018
 * Time: 16:01
 */

require '../fonctions/fonction.php';
require '../class/Database.php';

$db = Database::getPdo();


$titre = verifyInput($_POST['titre']);
$contenu = verifyInput($_POST['contenu']);
$auteur = verifyInput($_POST['auteur']);
$id = verifyInput($_POST['id']);


$query = $db->prepare("INSERT INTO commentaire (titre, contenu, auteur, date, idRecette) 
                                  VALUES (:titre, :contenu, :auteur, NOW(), :idRecette)");
$query->bindValue(":titre", $titre);
$query->bindValue(":contenu", $contenu);
$query->bindValue("auteur", $auteur);
$query->bindValue(":idRecette", $id);

$query->execute();
$query->closeCursor();
header("Location: ../recette.php?id=$id");