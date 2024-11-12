<?php 
require "../Modele/modmod.php";
class controlMod {
    public function mod() {
        if(isset($_POST["valide"])){
            $mdp = PASSWORD_HASH($_POST["mdp"],PASSWORD_DEFAULT);
            $mail = $_POST["mail"];
            $mail1 = $_POST["email"];
            $prenom = $_POST["pre"];
            $ville = $_POST["ville"];
            $loisir1 = $_POST["loisir1"];
            $loisir2 = $_POST["loisir2"];
            $loisir3 = $_POST["loisir3"];
            $loisir4 = $_POST["loisir4"];
            $loisir5 = $_POST["loisir5"];
            $z = new ModMod();
            $z->mod($mail,$mdp,$mail1,$prenom,$ville,$loisir1,$loisir2,$loisir3,$loisir4,$loisir5);
    }
}
}
$r = new controlMod();
$r->mod();
?>