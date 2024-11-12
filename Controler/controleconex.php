<?php
require "../Modele/modconnexion.php";
class controlConex {
    public function connexion() {
        if(isset($_POST["valide"])){
            $mail = $_POST["mail"];
            $mdp = $_POST["mdp"];
            $z = new ModConex();
            $z->conex($mail,$mdp);
    }
}
}
$r = new controlConex();
$r->connexion();
?>