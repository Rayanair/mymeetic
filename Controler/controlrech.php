<?php
require "../Modele/modRecherche.php";
class controlRech {
    public function rech() {
            $genre = $_POST["genre"];
            $ville = $_POST["ville"];
            $loisirs = $_POST["loisir"];
            $age = $_POST["age"];
            $z = new ModRech();
            $z->rech($genre,$ville,$loisirs,$age);
}
}
$r = new controlRech();
$r->rech();
?>