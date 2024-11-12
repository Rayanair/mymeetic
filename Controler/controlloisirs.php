<?php
require "../Modele/modloisirs.php";
class controlLoi {
    public function loi() {
        if(isset($_POST["valide"])){
            $genre = $_POST["genre"];
            $prenom = $_POST["prenom"];
            $mail = $_POST["mail"];
            $loisir1 = $_POST["loisir1"];
            $loisir2 = $_POST["loisir2"];
            $loisir3 = $_POST["loisir3"];
            $loisir4 = $_POST["loisir4"];
            $loisir5 = $_POST["loisir5"];
            $z = new ModLoisir();
            $z->loi($mail,$prenom,$loisir1,$loisir2,$loisir3,$loisir4,$loisir5);
            $z->genre($mail,$genre);
            header('Location: http://localhost:8800/vues/home.php?mail='.$mail.'&prenom='.$prenom.'');
    }
}
}
$r = new controlLoi();
$r->loi();
?>