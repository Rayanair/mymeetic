<?php
require "../Modele/modcompte.php";
class controlCompte {
    public function compte() {
            $mail = $_GET["mail"];
            $prenom = $_GET["prenom"];
            $z = new ModCompte();
            $z->compte($mail,$prenom);
}
}
$r = new controlCompte();
$r->compte();
?>