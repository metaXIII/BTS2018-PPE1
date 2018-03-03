<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 03/03/2018
 * Time: 19:03
 */

class Database
{
    private static $pdo;

    public static function getPdo()
    {
        $hostname = "localhost";
        $dbname = "foodndrink";
        $user = "root";
        $password = "";

        if (self::$pdo === null)
        {
            try {
                self::$pdo = new \PDO('mysql:host='.$hostname . ';dbname=' . $dbname . ';charset=utf8', $user,
                    $password);
            } catch (\Exception $exception)
            {
                die ("Erreur :" . $exception->getMessage());
            }
        }
        return self::$pdo;
    }
}