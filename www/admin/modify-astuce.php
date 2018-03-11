<?php
/**
 * Created by PhpStorm.
 * User: Metaxiii
 * Date: 11/03/2018
 * Time: 19:36
 */

require '../class/Database.php';
$id = $_POST['id'];
$accroche = $_POST['accroche'];
$contenu = $_POST['contenu'];
$db = Database::getPdo();

if (isset($_FILES)) {
    $file = $_FILES['file'];
    $nomfichier = $file['name'];
    $extensionfile = strrchr($nomfichier, ".");
    $extensionValide = array(".png", ".jpg", ".jepg", ".PNG", ".JPG", ".JPEG");
    if (in_array($extensionfile, $extensionValide)) {
        if (!$_FILES['file']['tmp_name']) {
            $_SESSION['error'] = 6;
            header("Location: astuce.php?modify=1&id=" . $id);
        }
        $dir = "..\\images\\astuces\\";
        $uploadedfile = $dir . basename($nomfichier);
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploadedfile)) {
            $_SESSION['error'] = 5;
            header("Location: astuce.php?modify=1&id=\" . $id");
        } else {
            $query = $db->prepare("UPDATE astuce SET accroche = :accroche, contenu = :contenu, image = :image WHERE id = :id");
            $query->bindValue(":accroche", $accroche);
            $query->bindValue(":contenu", $contenu);
            $query->bindValue(":image", $nomfichier);
            $query->bindValue(":id", $id);
            $query->execute();
        }
    } else {
        $query = $db->prepare("UPDATE astuce SET accroche = :accroche, contenu = :contenu WHERE id = :id");
        $query->bindValue(":accroche", $accroche);
        $query->bindValue(":contenu", $contenu);
        $query->bindValue(":id", $id);
        $query->execute();
    }
}

header("Location: gestion-astuce.php");