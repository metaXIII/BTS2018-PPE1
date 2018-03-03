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
$db = Database::getPdo();